/**
 * Dialog Engine - Handles all dialog functionality for image and text links
 * Strictly optimized for on-demand progressive loading and zero initial network overhead.
 */

class DialogEngine {
  constructor() {
    // Store DOM references and state
    this.currentlyOpenDialog = null;
    this.currentlyOpenTextLink = null;
    this.backdrop = null;

    // Carousel state
    this.carouselLoopCount = 0;
    this.maxLoops = 2; // Stop after second loop

    // Touch swipe state
    this.touchStartX = 0;
    this.touchStartY = 0;
    this.touchEndX = 0;
    this.touchEndY = 0;
    this.minSwipeDistance = 40; // Minimum horizontal distance (px) required for swipe

    // Bind methods that are used as event handlers to preserve 'this' context
    this._handleDocumentClick = this._handleDocumentClick.bind(this);
    this._handleKeydown = this._handleKeydown.bind(this);
    this._handleDialogTriggerClick = this._handleDialogTriggerClick.bind(this);
    this._handleTouchStart = this._handleTouchStart.bind(this);
    this._handleTouchMove = this._handleTouchMove.bind(this);
    this._handleTouchEnd = this._handleTouchEnd.bind(this);
    this._handleTouchCancel = this._handleTouchCancel.bind(this);

    // Lazy initialization - initialize when DOM is ready
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', () => this.init());
    } else {
      this.init();
    }
  }

  init() {
    // Create backdrop once
    this._createBackdrop();

    // Setup global event delegation
    this._setupEventDelegation();

    // Cache existing DOM elements
    this._cacheElements();

    // Initialize sticky breadcrumbs scroll hide/show behavior
    this._initStickyCrumbs();
  }

  _cacheElements() {
    this.linkDialogs = Array.from(document.querySelectorAll('.link-dialog'));
    this.imageDialogs = Array.from(document.querySelectorAll('.image-dialog'));
  }

  _createBackdrop() {
    this.backdrop = document.getElementById('dialogBackdrop');
    if (!this.backdrop) {
      this.backdrop = document.createElement('div');
      this.backdrop.className = 'dialog-backdrop';
      this.backdrop.id = 'dialogBackdrop';

      // Click on backdrop dismisses dialog
      this.backdrop.addEventListener('click', () => this.closeAnyOpenDialogs());

      const fragment = document.createDocumentFragment();
      fragment.appendChild(this.backdrop);
      document.body.appendChild(fragment);
    }
  }

  _setupEventDelegation() {
    // Dialog trigger delegation
    document.addEventListener('click', this._handleDialogTriggerClick);

    // Document click to close outside
    document.addEventListener('click', this._handleDocumentClick);

    // Global keyboard navigation & escape
    document.addEventListener('keydown', this._handleKeydown);
  }

  _handleDialogTriggerClick(event) {
    const target = event.target;

    // Handle text links
    const textTrigger = target.closest('.linked-text');
    if (textTrigger) {
      event.stopPropagation();
      const correspondingDialog = textTrigger.nextElementSibling;

      if (correspondingDialog && correspondingDialog.classList.contains('link-dialog')) {
        if (this.currentlyOpenDialog === correspondingDialog) {
          this.closeAnyOpenDialogs();
        } else {
          this.closeAnyOpenDialogs();
          this._showDialog(correspondingDialog, textTrigger);
        }
      }
      return;
    }

    // Handle image links
    const imgTrigger = target.closest('.linked-text-img');
    if (imgTrigger) {
      event.stopPropagation();
      const container = imgTrigger.closest('.multi-link-container');
      if (container) {
        const imageDialog = container.querySelector('.image-dialog') ||
                            document.querySelector(`[data-dialog-for="${imgTrigger.id}"]`);
        if (imageDialog) {
          if (this.currentlyOpenDialog === imageDialog) {
            this.closeAnyOpenDialogs();
          } else {
            this.closeAnyOpenDialogs();
            this._showDialog(imageDialog, imgTrigger);
          }
        }
      }
      return;
    }

    // Prevent propagation for clicks inside the dialog content
    if (target.closest('.image-dialog .carousel-item') || target.closest('.link-dialog')) {
      event.stopPropagation();
    }
  }

  _handleDocumentClick(event) {
    if (this.currentlyOpenDialog &&
        !this.currentlyOpenDialog.contains(event.target) &&
        event.target !== this.currentlyOpenTextLink &&
        !event.target.closest('.linked-text-img, .linked-text')) {
      this.closeAnyOpenDialogs();
    }
  }

  _handleKeydown(event) {
    // If no dialog is open, allow Enter/Space to trigger focused buttons
    if (!this.currentlyOpenDialog) {
      if ((event.key === 'Enter' || event.key === ' ') && event.target) {
        const trigger = event.target.closest('.linked-text-img, .linked-text');
        if (trigger) {
          event.preventDefault();
          trigger.click();
        }
      }
      return;
    }

    // Close on Escape key
    if (event.key === 'Escape') {
      event.preventDefault();
      this.closeAnyOpenDialogs();
      return;
    }

    // Handle carousel navigation with arrow keys
    if (this.currentlyOpenDialog.hasAttribute('data-carousel')) {
      if (event.key === 'ArrowLeft') {
        event.preventDefault();
        this._navigateCarousel(false);
      } else if (event.key === 'ArrowRight') {
        event.preventDefault();
        this._navigateCarousel(true);
      }
    }
  }

  _ensureCarouselInstantiated(dialog) {
    // Skip if already instantiated with items
    if (dialog._isInstantiated || dialog.querySelector('.carousel-item')) {
      return;
    }

    // Locate matching template: by data-template-id attribute or standard carousel-images
    const templateId = dialog.getAttribute('data-template-id') || 'carousel-images';
    let template = document.getElementById(templateId);
    if (!template) {
      template = document.querySelector('template[id^="carousel"]');
    }

    if (!template) {
      console.warn(`[DialogEngine] Carousel template '${templateId}' not found.`);
      return;
    }

    // Clone template content on-demand
    const content = template.content.cloneNode(true);
    dialog.appendChild(content);
    dialog._isInstantiated = true;
  }

  _activateCarouselImages(dialog, targetIndex) {
    const items = dialog.querySelectorAll('.carousel-item');
    if (!items.length) return;

    const total = items.length;
    let activeIdx = parseInt(targetIndex, 10);
    if (isNaN(activeIdx) || activeIdx < 0) activeIdx = 0;

    // Load active image immediately and pre-load adjacent items for smooth navigation
    const indicesToActivate = new Set([
      activeIdx % total,
      (activeIdx + 1) % total,
      (activeIdx - 1 + total) % total
    ]);

    indicesToActivate.forEach(idx => {
      const item = dialog.querySelector(`.carousel-item[data-image-index="${idx}"]`);
      if (!item) return;

      const img = item.querySelector('img');
      if (img) {
        const dataSrc = img.getAttribute('data-src');
        if (dataSrc) {
          img.src = dataSrc;
          img.removeAttribute('data-src');
        }
      }
    });
  }

  _navigateCarousel(isNext) {
    if (!this.currentlyOpenDialog) return;

    const items = this.currentlyOpenDialog.querySelectorAll('.carousel-item');
    if (!items.length) return;

    const activeItem = this.currentlyOpenDialog.querySelector('.carousel-item.active') || items[0];
    const currentIndex = parseInt(activeItem.getAttribute('data-image-index') || '0', 10);
    let nextIndex;

    if (isNext) {
      nextIndex = (currentIndex + 1) % items.length;
      if (nextIndex === 0) {
        this.carouselLoopCount++;
        if (this.carouselLoopCount >= this.maxLoops) {
          return;
        }
      }
    } else {
      nextIndex = (currentIndex - 1 + items.length) % items.length;
      if (nextIndex === items.length - 1 && currentIndex === 0) {
        this.carouselLoopCount++;
        if (this.carouselLoopCount >= this.maxLoops) {
          return;
        }
      }
    }

    activeItem.classList.remove('active');
    const targetItem = this.currentlyOpenDialog.querySelector(`.carousel-item[data-image-index="${nextIndex}"]`) || items[nextIndex];
    if (targetItem) {
      targetItem.classList.add('active');
    }

    // Activate on-demand high-res image and pre-fetch adjacent
    this._activateCarouselImages(this.currentlyOpenDialog, nextIndex);
  }

  _handleTouchStart(event) {
    if (!this.currentlyOpenDialog || !this.currentlyOpenDialog.hasAttribute('data-carousel')) return;
    if (event.touches && event.touches.length > 0) {
      this.touchStartX = event.touches[0].clientX;
      this.touchStartY = event.touches[0].clientY;
      this.touchEndX = event.touches[0].clientX;
      this.touchEndY = event.touches[0].clientY;
    }
  }

  _handleTouchMove(event) {
    if (!this.currentlyOpenDialog || !this.currentlyOpenDialog.hasAttribute('data-carousel')) return;
    if (event.touches && event.touches.length > 0) {
      this.touchEndX = event.touches[0].clientX;
      this.touchEndY = event.touches[0].clientY;
    }
  }

  _handleTouchCancel() {
    this.touchStartX = 0;
    this.touchStartY = 0;
    this.touchEndX = 0;
    this.touchEndY = 0;
  }

  _handleTouchEnd(event) {
    if (!this.currentlyOpenDialog || !this.currentlyOpenDialog.hasAttribute('data-carousel')) return;
    if (event.changedTouches && event.changedTouches.length > 0) {
      this.touchEndX = event.changedTouches[0].clientX;
      this.touchEndY = event.changedTouches[0].clientY;
    }
    this._evaluateSwipe();
  }

  _evaluateSwipe() {
    const deltaX = this.touchEndX - this.touchStartX;
    const deltaY = this.touchEndY - this.touchStartY;

    if (Math.abs(deltaX) >= this.minSwipeDistance && Math.abs(deltaX) > Math.abs(deltaY) * 1.2) {
      if (deltaX < 0) {
        this._navigateCarousel(true);
      } else {
        this._navigateCarousel(false);
      }
    }
  }

  _showDialog(dialog, trigger = null) {
    if (!dialog) return;

    // 1. Lazy carousel instantiation & data-src activation
    if (dialog.hasAttribute('data-carousel')) {
      this._ensureCarouselInstantiated(dialog);

      if (!dialog._touchHandlersAttached) {
        dialog.addEventListener('touchstart', this._handleTouchStart, { passive: true });
        dialog.addEventListener('touchmove', this._handleTouchMove, { passive: true });
        dialog.addEventListener('touchend', this._handleTouchEnd, { passive: true });
        dialog.addEventListener('touchcancel', this._handleTouchCancel, { passive: true });
        dialog._touchHandlersAttached = true;
      }

      this.carouselLoopCount = 0;
      const startIndex = parseInt(dialog.getAttribute('data-start-index') || '0', 10);
      const items = dialog.querySelectorAll('.carousel-item');
      items.forEach(item => item.classList.remove('active'));

      const activeItem = dialog.querySelector(`.carousel-item[data-image-index="${startIndex}"]`) || items[0];
      if (activeItem) {
        activeItem.classList.add('active');
      }

      // Activate high-resolution image on demand
      this._activateCarouselImages(dialog, startIndex);
    }

    // 2. Safely hoist dialog to document.body so it breaks out of any parent CSS transforms/masks
    if (dialog.parentElement && dialog.parentElement !== document.body) {
      dialog._originalParent = dialog.parentElement;
      dialog._originalPosition = Array.from(dialog.parentElement.children).indexOf(dialog);
      document.body.appendChild(dialog);
    }

    // 3. Attach click handler to close on background click
    if (!dialog._backgroundClickHandler) {
      dialog._backgroundClickHandler = (event) => {
        if (event.target === dialog || event.target.classList.contains('image-dialog')) {
          this.closeAnyOpenDialogs();
        }
      };
      dialog.addEventListener('click', dialog._backgroundClickHandler);
    }

    // 4. Make dialog and backdrop visible
    dialog.classList.add('visible');
    if (this.backdrop) {
      this.backdrop.classList.add('active');
    }

    this.currentlyOpenDialog = dialog;
    this.currentlyOpenTextLink = trigger;
    document.body.style.overflow = 'hidden';
  }

  closeAnyOpenDialogs() {
    if (!this.currentlyOpenDialog) return;

    const dialog = this.currentlyOpenDialog;
    dialog.classList.remove('visible');

    if (dialog.hasAttribute('data-carousel')) {
      this.carouselLoopCount = 0;
    }

    // Restore dialog to its original parent location
    if (dialog._originalParent) {
      const originalParent = dialog._originalParent;
      const originalPosition = dialog._originalPosition;

      if (originalPosition >= 0 && originalPosition < originalParent.children.length) {
        originalParent.insertBefore(dialog, originalParent.children[originalPosition]);
      } else {
        originalParent.appendChild(dialog);
      }

      delete dialog._originalParent;
      delete dialog._originalPosition;
    }

    if (this.backdrop) {
      this.backdrop.classList.remove('active');
    }

    document.body.style.overflow = '';
    this.currentlyOpenDialog = null;
    this.currentlyOpenTextLink = null;
  }

  _initStickyCrumbs() {
    const crumbs = document.querySelectorAll('.crumbs');
    if (!crumbs.length) return;

    const getElementDocTop = (el) => {
      let top = 0;
      let current = el;
      while (current) {
        top += current.offsetTop || 0;
        current = current.offsetParent;
      }
      return top;
    };

    let stickyThresholds = Array.from(crumbs).map(crumb => getElementDocTop(crumb));

    window.addEventListener('resize', () => {
      crumbs.forEach(crumb => crumb.classList.remove('crumbs-hidden'));
      stickyThresholds = Array.from(crumbs).map(crumb => getElementDocTop(crumb));
    }, { passive: true });

    let lastScrollY = window.pageYOffset || document.documentElement.scrollTop;
    let ticking = false;
    const threshold = 5;

    const updateCrumbs = () => {
      const currentScrollY = window.pageYOffset || document.documentElement.scrollTop;
      const isDropdownOpen = Array.from(document.querySelectorAll('.dropdown-toggle:checked')).length > 0;

      crumbs.forEach((crumb, index) => {
        const stickyPoint = stickyThresholds[index] || 0;

        if (currentScrollY <= stickyPoint || isDropdownOpen) {
          crumb.classList.remove('crumbs-hidden');
          return;
        }

        const diff = currentScrollY - lastScrollY;
        if (Math.abs(diff) > threshold) {
          if (diff > 0) {
            crumb.classList.add('crumbs-hidden');
          } else {
            crumb.classList.remove('crumbs-hidden');
          }
        }
      });

      lastScrollY = currentScrollY;
      ticking = false;
    };

    window.addEventListener('scroll', () => {
      if (!ticking) {
        window.requestAnimationFrame(updateCrumbs);
        ticking = true;
      }
    }, { passive: true });
  }
}

// Create singleton instance
window.dialogEngine = new DialogEngine();