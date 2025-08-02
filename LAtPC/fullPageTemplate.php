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

</article>
<?php
}

include './anvil/structure.php';
?>