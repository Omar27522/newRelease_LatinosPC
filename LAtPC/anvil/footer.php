    <footer>
        <p>&copy; <a href="#content" class="footer-link-content">LatinosPC</a> <?php if($page->getLang() == "es-419"){$meses = [
    'January' => 'Enero',
    'February' => 'Febrero',
    'March' => 'Marzo',
    'April' => 'Abril',
    'May' => 'Mayo',
    'June' => 'Junio',
    'July' => 'Julio',
    'August' => 'Agosto',
    'September' => 'Septiembre',
    'October' => 'Octubre',
    'November' => 'Noviembre',
    'December' => 'Diciembre'
   ];
   echo $meses[date("F")] . " " . date("Y");} else{ echo date("F Y"); }?></p>
    </footer>

    <script src="<?= $page->getDir(); ?>anvil/dialogEngine.js"></script>
