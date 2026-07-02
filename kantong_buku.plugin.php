<?php
/**
 * Plugin Name: Kantong Buku
 * Plugin URI: -
 * Description: Plugin kantong buku oleh Arie Nugraha
 * Version: 1.0.0
 * Author: Arie Nugraha, plugin oleh Imanuel Chandra Lefta, ST
 * Author URI: -
 */
use SLiMS\Plugins;

Plugins::getInstance();

$path =  __DIR__ . '/pages/book_pocket.php';

Plugins::group('Kelengkapan Bahan Pustaka', function() use($path) {
           
Plugins::menu('bibliography', 'Kantong Buku', $path);
});