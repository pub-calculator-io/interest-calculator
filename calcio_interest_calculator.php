<?php
/*
Plugin Name: Interest Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/interest-calculator/
Description: Easily calculate simple and compound interest with our free Interest Calculator. Estimate final balances, accrued interest, and growth schedules in seconds!
Version: 1.0.0
Author: www.calculator.io / Interest Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_interest_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Interest Calculator by www.calculator.io";

function calcio_interest_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Interest Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_interest_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_interest_calculator', 'calcio_interest_calculator_shortcode' );