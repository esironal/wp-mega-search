<?php
/*
Plugin Name: Mega Search
Description: This plugin hosts the HTML and JavaScript code for the main "all-in-one" search box. It can be used with a simple shortcode "megasearch".
Version: 1.0
*/


class MegaSearch {

    /**
     * Class Constractor
     */
    function __construct() {
        add_shortcode('megasearch', array($this,'ms_shortcode'));

        add_action('wp_enqueue_scripts', array($this, 'register_scripts'));

        add_action('wp_print_styles', array($this,'ms_add_stylesheet'));

    }

    public function register_scripts() {
        wp_register_script('mega_search',  plugins_url('/js/mega_search.js', __FILE__), array('jquery', 'jquery-ui-core', 'jquery-ui-tabs'), false, true);
        wp_enqueue_script('mega_search');

        wp_register_script('ebscohostsearch', 'http://support.ebscohost.com/eit/scripts/ebscohostsearch.js');
        wp_enqueue_script('ebscohostsearch');
    }

    public function ms_add_stylesheet() {
        $style = plugins_url('/css/mega_search.css', __FILE__);
        wp_register_style('mega_search', $style);
        wp_enqueue_style('mega_search');
    }

    /**
     * shortcode to display full hours on a page
     */
     public function ms_shortcode($atts) {
    
        ob_start();

        require('search_form.html');
    
        return ob_get_clean();
    }
}//end class

new MegaSearch();

