<?php
//don't call the file directly
if (!defined('ABSPATH'))
    exit;
/*
Plugin Name: CB Hotel Booking
Plugin URI: https://github.com/hmbashar/CB-Hotel-Booking
Description: CB Hotel Booking
Version: 1.0
Author: Md Abul Bashar
Author URI: http://hmbashar.com
*/


// Define plugin version, directory path, and URL
define('CBHOTEL_VERSION', 1.0);
define('CBHOTEL_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CBHOTEL_PLUGIN_URL', plugin_dir_url(__FILE__));
define('CBHOTEL_ASSETS', CBHOTEL_PLUGIN_URL . 'assets');


function cb_hotel_booking_styles()
{
    wp_enqueue_style('cb-docs', CBHOTEL_ASSETS . '/css/docs.css');
    wp_enqueue_style('cbhotel-form', CBHOTEL_ASSETS . '/css/form.css');
    wp_enqueue_style('cbhotel-main', CBHOTEL_ASSETS . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'cb_hotel_booking_styles');

function cb_hotel_booking_scripts()
{

    wp_enqueue_script('cb-fbparam', CBHOTEL_ASSETS . '/js/fbparam.js', array('jquery'), CBHOTEL_VERSION, true);
    wp_enqueue_script('cb-fblib', CBHOTEL_ASSETS . '/js/fblib.js', array('jquery'), CBHOTEL_VERSION, true);
}
add_action('wp_enqueue_scripts', 'cb_hotel_booking_scripts');

function cb_hotel_booking_shortcode()
{
    ob_start(); // Start output buffering
    ?>

    <div id="preview" onload="CBHotelStart();">

        <div class="form-control">
            <form action="#" class="form-container">
                <input type="hidden" name="showPromotions" value="1" />
                <input type="hidden" name="Clusternames" value="ITITMHTLRoyalGardenH" />
                <!-- Hotel identifier -->
                <input type="hidden" name="Hotelnames" value="ITITMHTLRoyalGardenH" />
                <!-- Check-in -->
                <div class="input-fill">
                    <label>Check-In Date*</label><br>
                    <input type="date" required name="fromday">
                </div>
                <div class="input-fill">
                    <label>Check-Out-Date*</label><br>
                    <input type="date" required>
                </div>
                <div class="input-fill">
                    <label>Adults</label>
                    <select aria-hidden="true" name="adulteresa">
                        <option value="1" selected="selected">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                    </select>
                </div>
                <div class="input-fill">
                    <label>Children</label>
                    <select aria-hidden="true" name="enfantresa">
                        <option value="0" selected="selected">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="input-fill">
                    <input type="submit" class="search-button" onclick="hhotelDispoprice(this.form)" name="B1"
                        value="Search">
                </div>
            </form>
        </div>

    </div>
    <?php
    return ob_get_clean(); // Return buffered content
}
// Register shortcode
add_shortcode('cb_hotel_search', 'cb_hotel_booking_shortcode');
