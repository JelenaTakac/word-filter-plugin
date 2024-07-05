<?php 


/*
Plugin Name: Our Word Filter Plugin
Description: Replace a list of word.
Version: 1.0
Author: Jelena
Author URI: https://github.com/JelenaTakac
*/

/*
The constant ABSPATH is a fundamental part of WordPress's architecture. 
It holds the absolute filesystem path to the WordPress directory. 
Knowing the exact path to the WordPress root is essential for many operations, 
such as loading scripts, stylesheets, and templates, as well as performing file system operations.

if (!defined('ABSPATH')) exit; -> is a safeguard against direct access to the file and ensures that 
the script runs only within the WordPress environment, where ABSPATH is defined. 
*/
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class OurWordFilterPlugin {
    function __construct()
    {
        add_action('admin_menu', array($this, 'ourMenu'));
    }

    function ourMenu() {
        add_menu_page('Words To Filter', 'Word Filter', 'manage_options', 'ourwordfilter', array($this, 'wordFilterPage'), 'dashicons-smiley', 100);
        add_submenu_page('ourwordfilter', 'Words To Filter', 'Words List', 'manage_options', 'ourwordfilter', array($this, 'wordFilterPage'));
        add_submenu_page('ourwordfilter', 'Word Filter Options', 'Options', 'manage_options', 'word-filter-options', array($this, 'optionsSubPage'));
    }

    function wordFilterPage() { ?>
        hellloooo filter page;
    <?php }

    function optionsSubPage() {?>
        hello sub menu page;
    <?php }
}

$ourWordFilterPlugin = new OurWordFilterPlugin();



?>