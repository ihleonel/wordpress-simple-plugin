<?php
/**
 * Plugin Name: ToDo
 * Plugin URI:  https://tusitio.com/todo
 * Description: Un plugin para gestionar tareas dentro de WordPress.
 * Version:     1.0.0
 * Author:      Ibarra Hector Leonel
 * Author URI:  https://tusitio.com
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: todo
 * Domain Path: /languages
 */

$message = 'Hello World!';

$number = rand(1, 100);

$list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$acum = 0;
foreach ($list as $item) {
    $acum += $item;
}
