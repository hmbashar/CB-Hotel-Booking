<?php 
//don't call the file directly
if (!defined('ABSPATH')) exit;
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


function cb_hotel_booking_styles() {   
    wp_enqueue_style('cb-docs', CBHOTEL_ASSETS . '/css/docs.css');
    wp_enqueue_style('cbhotel-form', CBHOTEL_ASSETS . '/css/form.css');
    wp_enqueue_style('cbhotel-main', CBHOTEL_ASSETS . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'cb_hotel_booking_styles');

function cb_hotel_booking_scripts() {
    wp_enqueue_script('cb-fblib', CBHOTEL_ASSETS . '/js/fblib.js', array('jquery'));
    wp_enqueue_script('cb-fbparam', CBHOTEL_ASSETS . '/js/fbparam.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'cb_hotel_booking_scripts');

function cb_hotel_booking_shortcode($atts) {
    $a = shortcode_atts(array(
        'showPromotions' => '1',
        'Hotelnames' => 'ITITMHTLRoyalGardenH',
        'Clusternames' => 'ITITMHTLRoyalGardenH'
    ));
    $out = '<form action="https://redirect.fastbooking.com/DIRECTORY/dispoprice.phtml" method="get">';
    $out .= '<input type="hidden" name="showPromotions" value="' . esc_attr($a['showPromotions']) . '" />';
    $out .= '<input type="hidden" name="Hotelnames" value="' . esc_attr($a['Hotelnames']) . '" />';
    $out .= '<input type="hidden" name="Clusternames" value="' . esc_attr($a['Clusternames']) . '" />';
    $out .= '<input type="submit" value="Book Now" />';
    $out .= '</form>';
    return $out;
}
add_shortcode('hotel_booking', 'cb_hotel_booking_shortcode');


?>
<body onload="start()">

    <div class="col quicksearch">
        <div id="logo">
            <img src="delogo.png" />
        </div>
        <div id="preview">

            <div class="form-control">
                <form action="#" class="form-container">
                    <div class="input-fill">
                        <label>Check-In Date*</label><br>
                        <input type="date" required>
                    </div>
                    <div class="input-fill">
                        <label>Check-Out-Date*</label><br>
                        <input type="date" required>
                    </div>
                    <div class="input-fill">
                        <label>Adults</label>
                        <select aria-hidden="true">
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
                        <select aria-hidden="true">
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
                        <input type="submit" class="search-button" value="Search">
                    </div>
                </form>
            </div>

        </div>
        <p class="notes">You can copy-paste the HTML for your form here.</p>
        <div id="copypaste">
            <textarea onfocus="this.select();">&lt;form target=&quot;dispoprice&quot; name=&quot;idForm&quot; class=&quot;fbqs&quot;&gt;
    &lt;h2&gt;Online booking&lt;/h2&gt;
    &lt;input type=&quot;hidden&quot; name=&quot;showPromotions&quot; value=&quot;1&quot; /&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;Clusternames&quot; value=&quot;ITITMHTLRoyalGardenH&quot; /&gt;
        &lt;!-- Hotel identifier --&gt;
        &lt;input type=&quot;hidden&quot;  name=&quot;Hotelnames&quot; value=&quot;ITITMHTLRoyalGardenH&quot; /&gt;
    &lt;!-- Check-in --&gt;
    &lt;div class=&quot;field dates checkin&quot;&gt;
        &lt;label&gt;Check-in Date&lt;/label&gt;
        &lt;div class=&quot;selects&quot;&gt;
            &lt;select name=&quot;fromday&quot;&gt;
                    &lt;option value=&quot;1&quot;&gt;1&lt;/option&gt;
                    &lt;option value=&quot;2&quot;&gt;2&lt;/option&gt;
                    &lt;option value=&quot;3&quot;&gt;3&lt;/option&gt;
                    &lt;option value=&quot;4&quot;&gt;4&lt;/option&gt;
                    &lt;option value=&quot;5&quot;&gt;5&lt;/option&gt;
                    &lt;option value=&quot;6&quot;&gt;6&lt;/option&gt;
                    &lt;option value=&quot;7&quot;&gt;7&lt;/option&gt;
                    &lt;option value=&quot;8&quot;&gt;8&lt;/option&gt;
                    &lt;option value=&quot;9&quot;&gt;9&lt;/option&gt;
                    &lt;option value=&quot;10&quot;&gt;10&lt;/option&gt;
                    &lt;option value=&quot;11&quot;&gt;11&lt;/option&gt;
                    &lt;option value=&quot;12&quot;&gt;12&lt;/option&gt;
                    &lt;option value=&quot;13&quot;&gt;13&lt;/option&gt;
                    &lt;option value=&quot;14&quot;&gt;14&lt;/option&gt;
                    &lt;option value=&quot;15&quot;&gt;15&lt;/option&gt;
                    &lt;option value=&quot;16&quot;&gt;16&lt;/option&gt;
                    &lt;option value=&quot;17&quot;&gt;17&lt;/option&gt;
                    &lt;option value=&quot;18&quot;&gt;18&lt;/option&gt;
                    &lt;option value=&quot;19&quot;&gt;19&lt;/option&gt;
                    &lt;option value=&quot;20&quot;&gt;20&lt;/option&gt;
                    &lt;option value=&quot;21&quot;&gt;21&lt;/option&gt;
                    &lt;option value=&quot;22&quot;&gt;22&lt;/option&gt;
                    &lt;option value=&quot;23&quot;&gt;23&lt;/option&gt;
                    &lt;option value=&quot;24&quot;&gt;24&lt;/option&gt;
                    &lt;option value=&quot;25&quot;&gt;25&lt;/option&gt;
                    &lt;option value=&quot;26&quot;&gt;26&lt;/option&gt;
                    &lt;option value=&quot;27&quot;&gt;27&lt;/option&gt;
                    &lt;option value=&quot;28&quot;&gt;28&lt;/option&gt;
                    &lt;option value=&quot;29&quot;&gt;29&lt;/option&gt;
                    &lt;option value=&quot;30&quot;&gt;30&lt;/option&gt;
                    &lt;option value=&quot;31&quot;&gt;31&lt;/option&gt;
            &lt;/select&gt;
            &lt;select name=&quot;frommonth&quot;&gt;
                    &lt;option value=&quot;1&quot;&gt;January&lt;/option&gt;
                    &lt;option value=&quot;2&quot;&gt;February&lt;/option&gt;
                    &lt;option value=&quot;3&quot;&gt;March&lt;/option&gt;
                    &lt;option value=&quot;4&quot;&gt;April&lt;/option&gt;
                    &lt;option value=&quot;5&quot;&gt;May&lt;/option&gt;
                    &lt;option value=&quot;6&quot;&gt;June&lt;/option&gt;
                    &lt;option value=&quot;7&quot;&gt;July&lt;/option&gt;
                    &lt;option value=&quot;8&quot;&gt;August&lt;/option&gt;
                    &lt;option value=&quot;9&quot;&gt;September&lt;/option&gt;
                    &lt;option value=&quot;10&quot;&gt;October&lt;/option&gt;
                    &lt;option value=&quot;11&quot;&gt;November&lt;/option&gt;
                    &lt;option value=&quot;12&quot;&gt;December&lt;/option&gt;
            &lt;/select&gt;
            &lt;select name=&quot;fromyear&quot;&gt;
                    &lt;option value=&quot;2024&quot;&gt;2024&lt;/option&gt;
                    &lt;option value=&quot;2025&quot;&gt;2025&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- Nights --&gt;
    &lt;div class=&quot;field nights&quot;&gt;
        &lt;label&gt;Number of nights&lt;/label&gt;
        &lt;select name=&quot;nbdays&quot;&gt;
                &lt;option value=&quot;1&quot;&gt;1&lt;/option&gt;
                &lt;option value=&quot;2&quot;&gt;2&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;3&lt;/option&gt;
                &lt;option value=&quot;4&quot;&gt;4&lt;/option&gt;
                &lt;option value=&quot;5&quot;&gt;5&lt;/option&gt;
                &lt;option value=&quot;6&quot;&gt;6&lt;/option&gt;
                &lt;option value=&quot;7&quot;&gt;7&lt;/option&gt;
                &lt;option value=&quot;8&quot;&gt;8&lt;/option&gt;
                &lt;option value=&quot;9&quot;&gt;9&lt;/option&gt;
                &lt;option value=&quot;10&quot;&gt;10&lt;/option&gt;
                &lt;option value=&quot;11&quot;&gt;11&lt;/option&gt;
                &lt;option value=&quot;12&quot;&gt;12&lt;/option&gt;
                &lt;option value=&quot;13&quot;&gt;13&lt;/option&gt;
                &lt;option value=&quot;14&quot;&gt;14&lt;/option&gt;
                &lt;option value=&quot;15&quot;&gt;15&lt;/option&gt;
                &lt;option value=&quot;16&quot;&gt;16&lt;/option&gt;
                &lt;option value=&quot;17&quot;&gt;17&lt;/option&gt;
                &lt;option value=&quot;18&quot;&gt;18&lt;/option&gt;
                &lt;option value=&quot;19&quot;&gt;19&lt;/option&gt;
                &lt;option value=&quot;20&quot;&gt;20&lt;/option&gt;
                &lt;option value=&quot;21&quot;&gt;21&lt;/option&gt;
                &lt;option value=&quot;22&quot;&gt;22&lt;/option&gt;
                &lt;option value=&quot;23&quot;&gt;23&lt;/option&gt;
                &lt;option value=&quot;24&quot;&gt;24&lt;/option&gt;
                &lt;option value=&quot;25&quot;&gt;25&lt;/option&gt;
                &lt;option value=&quot;26&quot;&gt;26&lt;/option&gt;
                &lt;option value=&quot;27&quot;&gt;27&lt;/option&gt;
                &lt;option value=&quot;28&quot;&gt;28&lt;/option&gt;
                &lt;option value=&quot;29&quot;&gt;29&lt;/option&gt;
                &lt;option value=&quot;30&quot;&gt;30&lt;/option&gt;
                &lt;option value=&quot;31&quot;&gt;31&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;        &lt;!-- Number of adults selector --&gt;
        &lt;div class=&quot;field adults_select&quot;&gt;
            &lt;label for=&quot;adulteresa&quot;&gt;Number of adults&lt;/label&gt;
            &lt;select name=&quot;adulteresa&quot;&gt;
                    &lt;option value=&quot;1&quot; &gt;1&lt;/option&gt;
                    &lt;option value=&quot;2&quot; selected=&quot;selected&quot;&gt;2&lt;/option&gt;
                    &lt;option value=&quot;3&quot; &gt;3&lt;/option&gt;
                    &lt;option value=&quot;4&quot; &gt;4&lt;/option&gt;
                    &lt;option value=&quot;5&quot; &gt;5&lt;/option&gt;
                    &lt;option value=&quot;6&quot; &gt;6&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;        &lt;!-- Number of children selector --&gt;
        &lt;div class=&quot;field children_select&quot;&gt;
            &lt;label for=&quot;enfantresa&quot;&gt;Number of children&lt;/label&gt;
            &lt;select name=&quot;enfantresa&quot;&gt;
                    &lt;option value=&quot;0&quot; selected=&quot;selected&quot;&gt;0&lt;/option&gt;
                    &lt;option value=&quot;1&quot; &gt;1&lt;/option&gt;
                    &lt;option value=&quot;2&quot; &gt;2&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;        &lt;!-- Promo Code --&gt;
        &lt;div class=&quot;field promo_code&quot;&gt;
            &lt;label for=&quot;AccessCode&quot;&gt;Promo Code&lt;/label&gt;
            &lt;input type=&quot;text&quot; name=&quot;AccessCode&quot; value=&quot;&quot;  autocomplete=&quot;off&quot; /&gt;
        &lt;/div&gt;    &lt;input name=&quot;B1&quot; type=&quot;button&quot; value=&quot;Book now&quot; onclick=&quot;hhotelDispoprice(this.form)&quot; class=&quot;submit&quot;&gt;
    &lt;a href=&quot;javascript:;&quot; onclick=&quot;hhotelcancel();&quot; class=&quot;cancel&quot;&gt;Cancel a booking&lt;/a&gt;
&lt;/form&gt;</textarea>
        </div>
    </div>
    <div class="col documentation">
        <h1>Quick search integration documentation</h1>
        <p><a class="download"
                href="http://dev.fbwebprogram.com/qsgen/data/87d7ef29efef24507a4282fea05c89d1/crs.zip">Download this as
                a zip file.</a></p>
        <section class="parameters">
            <h2>Parameters</h2>
            <h3>Property - Royal Garden</h3>
            <p><strong>Your connect name:</strong> <span>ITITMHTLRoyalGardenH</span></p>
            <p><strong>Your cluster name:</strong> <span>ITITMHTLRoyalGardenH</span></p>
        </section>
        <section class="instructions">
            <h2>Instructions</h2>
            <ol>
                <li>
                    <strong>Include the following javascript files</strong> before the end of the
                    <span>&lt;body&gt;</span>
                    tag of your document every webpage needing the form. Keep this order:<br />
                    <a target="_blank" href="fbparam.js">fbparam.js</a><br />
                    <a target="_blank" href="fblib.js">fblib.js</a><br /><br />
                    <pre>
&lt;script src="PATH_TO_YOUR_JS_DIR/fbparam.js"&gt;&lt;/script&gt;
&lt;script src="PATH_TO_YOUR_JS_DIR/fblib.js"&gt;&lt;/script&gt;
</pre>
                </li>
                <li><strong>Include the form's html</strong>. You can copy-paste it from this documentation and
                    modify it based on your needs, keeping identifiers and names unchanged.</li>
                <li>
                    <strong>Make sure that the <span>start();</span> function is executed</strong> when document
                    is ready. For example:<br /><br />
                    <span>&lt;body onload="start();"&gt;</span><br /><br />
                    If you are using jQuery you can add the following piece of code to your main javascript file.
                    <pre>
$(document).ready(function() {
    if (typeof start !== 'undefined') {
        start();
    }
});
</pre>
                </li>
            </ol>
        </section>
        <section class="params">
            <h2>Parameters reference</h2>
            <p><strong>Base url: </strong><span>https://redirect.fastbooking.com/DIRECTORY/dispoprice.phtml</span></p>
            <p>
                <strong>Direct link to your booking engine: </strong> <a class="gotobe"
                    href="https://redirect.fastbooking.com/DIRECTORY/dispoprice.phtml?showPromotions=1&amp;Hotelnames=ITITMHTLRoyalGardenH&amp;Clusternames=ITITMHTLRoyalGardenH"
                    target="_blank" title="Open booking engine">&nbsp;&rarr;&nbsp;</a> <br />
                <span
                    class="direct_link">https://redirect.fastbooking.com/DIRECTORY/dispoprice.phtml?showPromotions=1&amp;Hotelnames=ITITMHTLRoyalGardenH&amp;Clusternames=ITITMHTLRoyalGardenH</span>
            </p>
            <p>The following parameters can be passed in the query string (GET parameters):</p>
            <ul class="params">
                <li class="required">
                    <span>showPromotions</span>
                    - internal parameter, always pass <span>1</span> as value
                </li>
                <li class="required">
                    <span>Clusternames</span>
                    - identifies the hotel's "Cluster", value is specified above
                </li>
                <li class="required">
                    <span>Hotelnames</span>
                    - identifies the hotel's "Connectname", value(s) are specified above. In order to display the
                    list of properties in the group, pass the value "All"
                </li>
                <li>
                    <span>fromday</span>
                    - day of the month for check-in date.
                </li>
                <li>
                    <span>frommonth</span>
                    - number of month for check-in date.
                </li>
                <li>
                    <span>fromyear</span>
                    - year for check-in date.
                </li>
                <li>
                    <span>nbdays</span>
                    - number of nights. As an alternative, <span>today</span>, <span>tomonth</span>, <span>toyear</span>
                    parameters can be used:
                    <ul>
                        <li>
                            <span>today</span>
                            - day of the month for check-out date.
                        </li>
                        <li>
                            <span>tomonth</span>
                            - month for check-out date.
                        </li>
                        <li>
                            <span>toyear</span>
                            - year for check-out date.
                        </li>
                    </ul>
                </li>
                <li>
                    <span>adulteresa</span>
                    - number of adults
                </li>
                <li>
                    <span>enfantresa</span>
                    - number of children
                </li>
                <li>
                    <span>AccessCode</span>
                    - Promo / IATA code. If you are grouping your offers by "Treatment", this parameter needs to be
                    passed anyways.
                </li>
                <li>
                    <span>advance</span>
                    - Forces the checkin date on the booking engine to today plus the value of the parameters in days.
                    For example: advance=7-days will force today + 7 days. Ideal to build "Book now" links without
                    selection of the checkin date.
                </li>
                <li>
                    <span>locale</span>
                    - ATTRACTION language. Allows to force the booking engine to load in a specific language.
                    If not passed or passed empty, the user's browser language will be detected.<br />
                    List of supported language codes:
                    <ul>
                        <li><span>ar_SA</span> Arabic</li>
                        <li><span>bg_BG</span> Bulgarian</li>
                        <li><span>ca_ES</span> Catalan</li>
                        <li><span>cs_CZ</span> Czech</li>
                        <li><span>da_DK</span> Danish</li>
                        <li><span>de_DE</span> German</li>
                        <li><span>el_GR</span> Greek</li>
                        <li><span>en_GB</span> English</li>
                        <li><span>es_ES</span> Spanish</li>
                        <li><span>fa_IR</span> Farsi</li>
                        <li><span>fi_FI</span> Finnish</li>
                        <li><span>fr_FR</span> French</li>
                        <li><span>he_IL</span> Hebrew</li>
                        <li><span>hr_HR</span> Croatian</li>
                        <li><span>hu_HU</span> Hungarian</li>
                        <li><span>id_ID</span> Indonesian</li>
                        <li><span>is_IS</span> Icelandic</li>
                        <li><span>it_ID</span> Italian</li>
                        <li><span>ja_JP</span> Japanese</li>
                        <li><span>ko_KR</span> Korean</li>
                        <li><span>nl_NL</span> Dutch</li>
                        <li><span>nn_NO</span> Norwegian (Nykorsk)</li>
                        <li><span>pl_PL</span> Polish</li>
                        <li><span>pt_PT</span> Portuguese</li>
                        <li><span>ro_RO</span> Romanian</li>
                        <li><span>ru_RU</span> Russian</li>
                        <li><span>sk_SK</span> Slovak</li>
                        <li><span>sl_SI</span> Slovenian</li>
                        <li><span>sr_RS</span> Serbian</li>
                        <li><span>sv_SE</span> Swedish</li>
                        <li><span>th_TH</span> Thai</li>
                        <li><span>tr_TR</span> Turkish</li>
                        <li><span>vi_VN</span> Vietnamese</li>
                        <li><span>zh_Hans_CN</span> Chinese (simplified)</li>
                        <li><span>zh_Hant_HK</span> Chinese (traditional)</li>
                    </ul>
                </li>
            </ul>
        </section>
    </div>
