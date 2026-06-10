<?php

function cssStyles() {
    $styles = [
        'hardware' => 'hw_mainStyle.css',
        'cpu' => 'cpu.css',
        'ram' => 'ram.css',
        'motherboard' => 'motherboard.css',
        'storage' => 'storage.css',
        'powersupply' => 'powersupply.css',
        'graphicscard' => 'graphicscard.css',
        'chassis' => 'chassis.css',
        'coolers' => 'coolers.css',
        'mouse' => 'mouse.css',
        'keyboard' => 'keyboard.css',
        'monitor' => 'monitor.css',
        'p_memory' => 'p_memory.css',
        'pci' => 'pci.css',
        'scanner' => 'scanner.css',
        'printer' => 'printer.css',
        'console_controllers' => 'console_controllers.css',
        'joystick' => 'joystick.css',
        'tablet' => 'tablet.css',
        'micro' => 'micro.css',
        'headset' => 'headset.css',
        'headphone' => 'headphone.css',
        'audio_mixers' => 'audio_mixers.css',
        'controllers' => 'controllers.css',
        'uniforms' => 'uniforms.css',
        'pencil' => 'pencil.css',
        'chair' => 'chair.css',
        'desk' => 'desk.css',
        'antislipmats' => 'antislipmats.css',
        'speakers_and_subwoofers' => 'speakers_and_subwoofers.css'
    ];

    foreach ($styles as $pattern => $file) {
        if (str_contains($_SERVER['REQUEST_URI'], $pattern)) {
            echo "<link rel=\"stylesheet\" href=\"../../hardware/styles/$file\">\n";
        }
    }
}

function hw_hardware() {
 include('hardware/hardwareContent.php');
}

function hw_cpu() {
        include_once ('hardware/cpu.php');
}

function hw_ram() {
       include_once ('hardware/ram.php');
}

function hw_storage(){
        include_once ('hardware/storage.php');
}

function hw_motherboard(){
        include_once ('hardware/motherboard.php');
}

function hw_psu() {
       include_once ('hardware/powerSupply.php');
}

function hw_gpu(){
   include_once('hardware/gpu.php');
}

function hw_chassis(){
        include_once ('hardware/chassis.php');
}

function hw_coolers() {
    include_once ('hardware/coolers.php');
}

function hw_input_devices() {
    echo "<h1 class=\"fullbar\">Input Devices</h1>";
}

function hw_output_devices() {
    echo "<h1 class=\"fullbar\">Output Devices</h1>";
}

function hw_peripherals_and_gear() {
    include_once ('hardware/peripherals.php');
}

function hw_mouse(){
    include_once('hardware/mouse.php');
}

function hw_keyboard(){
   include_once('hardware/keyboard.php');
}

function hw_monitor() {
    include_once('hardware/monitor.php');
}

function hw_portableMemory(){
    include('hardware/portableMemory.php');
}

function hw_pci_cards() {
    include_once('hardware/pci_cards.php');
}

function hw_scanners() {
    include_once('hardware/scanners.php');
}

function hw_printers() {
   include_once('hardware/printers.php');
}

function hw_console_controllers() {
  include_once('hardware/console_controllers.php');
}

function hw_joysticks (){
    include_once('hardware/joysticks.php');
}

function hw_tablets (){
    include_once('hardware/tablets.php');
}

function hw_microphones (){
    include_once('hardware/microphones.php');
}

function hw_headsets () {
    include_once('hardware/headsets.php');
}

function hw_headphones () {
    include_once('hardware/headphones.php');
}

function hw_audio_mixers () {
    include_once('hardware/audio_mixers.php');
}

function hw_controllers () {
    include_once('hardware/controllers.php');
}

function hw_gaming_uniforms () {
    include_once('hardware/gaming_uniforms.php');
}

function hw_pens_pencils_tablets () {
    include_once('hardware/pens_pencils_tablets.php');
}

function hw_chairs () {
    include_once('hardware/chairs.php');
}

function hw_desks () {
    include_once('hardware/desks.php');
}

function hw_anti_slip_mats () {
    include_once('hardware/anti_slip_mats.php');
}

function hw_speakers_and_subwoofers () {
    include_once('hardware/speakers_and_subwoofers.php');
}

include dirname(__DIR__) . '/anvil/structure.php';
?>
