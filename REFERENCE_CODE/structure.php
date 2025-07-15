<!DOCTYPE html>
<?php
    // The $page object is created in index.php with the Structure class
    // Use the getLang() method to get the appropriate language code
    global $page;
?>
<html lang="<?php echo $page->getLang(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo $css_file;
    ?>
    <title><?php echo $page->getTitle(); ?></title>
</head>

<body>
    <main>
        <header>
            <span class="crumbs">
                <?php $page->getCrumbs(); ?>
                <hr>
            </span>
            <a href="#" class="phone">
                909-276-7214
            </a>
            <div class="logo">
                <?php $page->getLogo();?>
            </div>
            <nav class="sticky">
                <!--    TerwanPOP    -->
                <div role="navigation" class="burg">
                    <div id="menuToggle"><input type="checkbox" />
                        <span></span><span></span><span></span>
                        <?php $page->getNav();/*Call the menu*/?>
                    </div>
                </div>
                <!--    TerwanPOP Made by Erik Terwan    -->
                <?php $page->getNavButtons(); /*Call the menu buttons*/?>
            </nav>
            </header>
            <?php
    // Check if content function exists before calling it
    if (function_exists('content')) {
        content();
    } else {
        echo "<p>Content function not defined.</p>";
    }
    ?>
<footer id="footer">
    <a href="<?php echo $page->getDir(); ?>">Home</a> <a href="#">Español</a> <a href="#">Services</a> <a href="#">Hardware</a> <a href="#">Software</a> <a href="#">Contact US</a> <a href="#">Reviews and Referrals</a> LatinosPC.com &copy; 2025
</footer>
    </main>
    <script src="./anvil/engine.js">
    </script>
</body>

</html>