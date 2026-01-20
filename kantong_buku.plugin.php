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

$plugin = Plugins::getInstance();

Plugins::getInstance()->registerAutoload(__DIR__);
Plugins::menu('bibliography', 'Kantong Buku', __DIR__ . '/pages/book_pocket.php');