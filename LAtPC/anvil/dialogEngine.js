/**
 * Dialog Engine - Handles all dialog functionality for image and text links
 * Optimized for performance
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

    // Bind methods that are used as event handlers to preserve 'this' context
    this._handleDocumentClick = this._handleDocumentClick.bind(this);
    this._handleKeydown = this._handleKeydown.bind(this);
    this._handleDialogTriggerClick = this._handleDialogTriggerClick.bind(this);

    // Lazy initialization - only initialize when DOM is ready
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', () => this.init());
    } else {
      this.init();
    }
  }

  init() {
    // Create backdrop only once when needed
    this._createBackdrop();

    // Use event delegation instead of multiple event listeners
    this._setupEventDelegation();

    // Cache DOM elements after DOM is ready (more efficient than in constructor)
    this._cacheElements();

    // Initialize carousels by populating them with images from the template
    this._initializeCarousels();
  }

  _initializeCarousels() {
    // Get the template with carousel images
    const template = document.getElementById('carousel-images');
    if (!template) return;

    // Find all carousel dialogs
    const carousels = document.querySelectorAll('[data-carousel="true"]');

    carousels.forEach(carousel => {
      // Get the starting index for this carousel
      const startIndex = parseInt(carousel.getAttribute('data-start-index') || '0', 10);

      // Clone the template content for each carousel
      const content = template.content.cloneNode(true);

      // Append the cloned content to the carousel
      carousel.appendChild(content);

      // Set the active item based on the start index
      const items = carousel.querySelectorAll('.carousel-item');
      items.forEach(item => item.classList.remove('active'));

      const activeItem = carousel.querySelector(`.carousel-item[data-image-index="${startIndex}"]`);
      if (activeItem) {
        activeItem.classList.add('active');
      } else if (items.length > 0) {
        // If specified index doesn't exist, default to the first item
        items[0].classList.add('active');
      }
    });
  }

  _cacheElements() {
    // Cache selectors - only query DOM once
    this.linkDialogs = Array.from(document.querySelectorAll('.link-dialog'));
    this.imageDialogs = Array.from(document.querySelectorAll('.image-dialog'));
  }

  _createBackdrop() {
    // Only create backdrop if it doesn't exist
    this.backdrop = document.getElementById('dialogBackdrop');
    if (!this.backdrop) {
      this.backdrop = document.createElement('div');
      this.backdrop.className = 'dialog-backdrop';
      this.backdrop.id = 'dialogBackdrop';

      // Add click event to backdrop
      this.backdrop.addEventListener('click', () => this.closeAnyOpenDialogs());

      // Use document fragment for better performance
      const fragment = document.createDocumentFragment();
      fragment.appendChild(this.backdrop);
      document.body.appendChild(fragment);
    }
  }

  _setupEventDelegation() {
    // Event delegation for document click
    document.addEventListener('click', this._handleDocumentClick);

    // Global keyboard handler
    document.addEventListener('keydown', this._handleKeydown);

    // Event delegation for all dialog triggers
    document.addEventListener('click', this._handleDialogTriggerClick);
  }

  _handleDialogTriggerClick(event) {
    const target = event.target;
    const imgParent = target.tagName === 'IMG' ? target.parentElement : null;

    // Handle text links
    if (target.classList.contains('linked-text')) {
      event.stopPropagation();
      const correspondingDialog = target.nextElementSibling;

      if (correspondingDialog && correspondingDialog.classList.contains('link-dialog')) {
        if (this.currentlyOpenDialog === correspondingDialog) {
          // Close if re-clicked
          this.closeAnyOpenDialogs();
        } else {
          this.closeAnyOpenDialogs();
          this._showDialog(correspondingDialog, target);
        }
      }
    }

    // Handle image links - either direct click on the span or on an image inside the span
    else if (target.classList.contains('linked-text-img') ||
             (imgParent && imgParent.classList.contains('linked-text-img'))) {
      event.stopPropagation();

      // Use the appropriate element to find the container
      const clickedElement = target.classList.contains('linked-text-img') ? target : imgParent;

      // Find the closest container and then the image dialog within it
      const container = clickedElement.closest('.multi-link-container');
      if (container) {
        const imageDialog = container.querySelector('.image-dialog');
        if (imageDialog) {
          this.closeAnyOpenDialogs();
          this._showDialog(imageDialog);
        }
      }
    }

    // Prevent propagation for dialog clicks
    else if (target.closest('.image-dialog') || target.closest('.link-dialog')) {
      event.stopPropagation();
    }
  }

  _handleDocumentClick(event) {
    // Close dialogs when clicking outside
    if (this.currentlyOpenDialog &&
        !this.currentlyOpenDialog.contains(event.target) &&
        event.target !== this.currentlyOpenTextLink) {
      this.closeAnyOpenDialogs();
    }
  }

  _handleKeydown(event) {
    // If no dialog is open, do nothing
    if (!this.currentlyOpenDialog) return;

    // Close on Escape key
    if (event.key === 'Escape') {
      this.closeAnyOpenDialogs();
      return;
    }

    // Handle carousel navigation with arrow keys
    if (this.currentlyOpenDialog.hasAttribute('data-carousel') &&
        (event.key === 'ArrowLeft' || event.key === 'ArrowRight')) {
      event.preventDefault();
      this._navigateCarousel(event.key === 'ArrowRight');
    }
  }

  _navigateCarousel(isNext) {
    // Get all carousel items in the current dialog
    const items = this.currentlyOpenDialog.querySelectorAll('.carousel-item');
    if (!items.length) return;

    // Find the currently active item
    const activeItem = this.currentlyOpenDialog.querySelector('.carousel-item.active');
    if (!activeItem) return;

    // Get the current index
    const currentIndex = parseInt(activeItem.getAttribute('data-image-index'), 10);
    let nextIndex;

    if (isNext) {
      // Move to next item
      nextIndex = (currentIndex + 1) % items.length;

      // Check if we've completed a loop
      if (nextIndex === 0) {
        this.carouselLoopCount++;

        // Stop after reaching max loops
        if (this.carouselLoopCount >= this.maxLoops) {
          return; // Don't navigate further
        }
      }
    } else {
      // Move to previous item
      nextIndex = (currentIndex - 1 + items.length) % items.length;

      // Check if we've completed a backward loop
      if (nextIndex === items.length - 1 && currentIndex === 0) {
        this.carouselLoopCount++;

        // Stop after reaching max loops
        if (this.carouselLoopCount >= this.maxLoops) {
          return; // Don't navigate further
        }
      }
    }

    // Update active class
    activeItem.classList.remove('active');
    items[nextIndex].classList.add('active');
  }

  _showDialog(dialog, trigger = null) {
    // Use requestAnimationFrame for smoother visual changes
    requestAnimationFrame(() => {
      dialog.classList.add('visible');
      this.backdrop.classList.add('active');

      // Ensure dialog is appended to body to avoid grid container issues
      if (dialog.parentElement && dialog.parentElement.closest('.homepage-grid')) {
        // Store original parent for when we close
        dialog._originalParent = dialog.parentElement;
        dialog._originalPosition = Array.from(dialog.parentElement.children).indexOf(dialog);
        // Move to body temporarily
        document.body.appendChild(dialog);
      }

      // Handle carousel-specific behavior when opening
      if (dialog.hasAttribute('data-carousel')) {
        // Reset carousel loop count
        this.carouselLoopCount = 0;

        // Set the active item based on the start-index attribute
        const startIndex = parseInt(dialog.getAttribute('data-start-index') || '0', 10);

        // Only set the active item if we have a specific start index
        if (startIndex > 0) {
          const items = dialog.querySelectorAll('.carousel-item');
          items.forEach(item => item.classList.remove('active'));

          const activeItem = dialog.querySelector(`.carousel-item[data-image-index="${startIndex}"]`);
          if (activeItem) {
            activeItem.classList.add('active');
          }
        }
      }

      this.currentlyOpenDialog = dialog;
      this.currentlyOpenTextLink = trigger;

      // Prevent body scroll when dialog is open
      document.body.style.overflow = 'hidden';

    });
  }

  closeAnyOpenDialogs() {
    if (!this.currentlyOpenDialog) return;

    // Use requestAnimationFrame for visual changes
    requestAnimationFrame(() => {
      // Only modify the currently open dialog instead of all dialogs
      if (this.currentlyOpenDialog) {
        this.currentlyOpenDialog.classList.remove('visible');

        // Reset carousel state if this was a carousel
        if (this.currentlyOpenDialog.hasAttribute('data-carousel')) {
          // Reset loop count
          this.carouselLoopCount = 0;

          // Don't reset the carousel position when closing
          // This allows the data-start-index to work properly when reopening
        }
        
        // If dialog was moved to body, restore it to its original parent
        if (this.currentlyOpenDialog._originalParent) {
          const originalParent = this.currentlyOpenDialog._originalParent;
          const originalPosition = this.currentlyOpenDialog._originalPosition;
          
          // If there are other children at the original position, insert before that child
          if (originalPosition >= 0 && originalPosition < originalParent.children.length) {
            originalParent.insertBefore(this.currentlyOpenDialog, originalParent.children[originalPosition]);
          } else {
            // Otherwise just append to the end
            originalParent.appendChild(this.currentlyOpenDialog);
          }
          
          // Clear the references
          delete this.currentlyOpenDialog._originalParent;
          delete this.currentlyOpenDialog._originalPosition;
        }
      }

      // Hide backdrop
      this.backdrop.classList.remove('active');

      // Restore body scroll when dialog is closed
      document.body.style.overflow = '';

      // Reset state
      this.currentlyOpenDialog = null;
      this.currentlyOpenTextLink = null;
    });
  }
}

// Create a single instance when needed
window.dialogEngine = new DialogEngine();