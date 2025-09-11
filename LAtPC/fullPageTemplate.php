<?php
function template()
{
?> <style>
article {
    padding: 1rem 2rem 3rem;
    margin: 0 auto;
    position: relative;
    max-width: 1200px;
}

figure {
    padding-left: 10%;
}

figcaption {
    text-align: center;
    padding-right: 10%;
}

figcaption a {
    text-decoration: none;
    font-size: 2em;
    color: white;
    background-color: black;
    margin-top: 2%;
    padding-right: 2%;
    padding-left: 2%;
}

figcaption a:hover {
    text-decoration: underline;
    color: royalblue;
}

/* Ensure template is hidden */
template {
    display: none !important;
}

/* Hide carousel items in image-dialog until dialog is opened */
.image-dialog .carousel-item {
    display: none;
}

/* Show carousel items only when dialog is visible */
.image-dialog.visible .carousel-item {
    display: block;
}

/* Show only the active carousel item */
.image-dialog.visible .carousel-item.active {
    display: block;
}

.image-dialog.visible .carousel-item:not(.active) {
    display: none;
}

/* Dialog modal styling */
.image-dialog {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 1000;
    justify-content: center;
    align-items: center;
    cursor: pointer; /* Show pointer cursor on background */
}

.image-dialog.visible {
    display: flex;
}

.image-dialog .carousel-item {
    text-align: center;
    color: white;
    cursor: default; /* Reset cursor for content area */
    pointer-events: auto; /* Allow interactions with content */
}

.image-dialog .carousel-item img {
    max-width: 90%;
    max-height: 80vh;
    object-fit: contain;
    cursor: default; /* Normal cursor on image */
}

.image-dialog .carousel-item p {
    margin-top: 20px;
    font-size: 1.2em;
    cursor: default; /* Normal cursor on text */
}
</style>
<article>
    <div class="multi-link-container">
        <span class="linked-text">Click me for more information</span>
        <div class="link-dialog">
            <p tabindex="0">This is an example of a text link dialog. When you click on the text, this dialog
                appears.</p>
            <p tabindex="0">You can add any content here, including links, images, and other HTML elements.</p>
        </div>
    </div>

    <br />
    <!-- I got this figure to work with this size image by adding the padding left,
                and offsetting it by shrinking the image to 90% Also the fig caption is off so it can be centered.
                    I truly don't like this workaround, but I don't really know CSS -->
    <div class="multi-link-container">
        <span class="linked-text">Click to see an image</span>
        <div class="link-dialog">
            <figure>
                <img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb9.webp"
                    width="90%" height="auto" alt="JesusChrist">
                <figcaption>cool image <a href="#">link</a></figcaption>
            </figure>
        </div>
    </div>



    <!-- Carousel -->
    <div class="carousel-group">
                <div class="multi-link-container">
                        <div class="thumbnail-container">
                            <span tabindex="0" class="linked-text-img">
                                <img src="https://latinospc.com/images/clouds.webp" width="263" height="186" alt="image" class="fr" alt="Start with Blank Page" class="thumbnail" />
                                <p>Primary Image</p>
                            </span>
                            </div>
                        <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
                    </div>
            </div>
</article>

<template id="carousel-images">
        <div class="carousel-item" data-image-index="0">
            <img src="../LAtPC/images/_JesusChrist/goodSamaritan_thumb.webp" alt="Image 1" />
            <p>Image 1 Description</p>
        </div>
        <div class="carousel-item" data-image-index="1">
            <img src="../LAtPC/images/_JesusChrist/phariseeAndTaxCollector_thumb.webp" alt="Image 2" />
            <p>Image 2 Description</p>
        </div>
        <div class="carousel-item" data-image-index="2">
            <img src="../LAtPC/images/_JesusChrist/richManAndLazarus_thumb.webp" alt="Image 3" />
            <p>Image 3 Description</p>
        </div>
    </template>
<?php
}

include './anvil/structure.php';
?>