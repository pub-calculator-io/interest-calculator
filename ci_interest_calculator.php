<?php
/*
Plugin Name: CI Interest calculator
Plugin URI: https://www.calculator.io/interest-calculator/
Description: With this free interest calculator you can compute accumulation schedules, final balances, and accrued interest.
Version: 1.0.0
Author: Interest Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_interest_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Interest Calculator by www.calculator.io";

function display_calcio_ci_interest_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Interest Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_interest_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_interest_calculator', 'display_calcio_ci_interest_calculator' );