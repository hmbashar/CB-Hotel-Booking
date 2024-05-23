<?php
namespace CBHOTELBooking\Controls;


//don't load directly
if (!defined('ABSPATH')) {
    die('-1');
}


class CBHotelBookingSearch extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'cbhotelbooking-form';
    }

    public function get_title()
    {
        return esc_html__('Hotel Booking', 'cb-hotel-booking');
    }

    public function get_icon()
    {
        return 'eicon-code';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_keywords()
    {
        return ['Hotel Booking', 'CB Hotel', 'Hotel Search form'];
    }

    
    protected function register_controls()

    {
        $this->start_controls_section(
            'hotel-booking-check-in-out-section',
            [
                'label' => __( 'Text', 'cb-hotel-booking' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );     

        $this->add_control(
			'hotel-booking-check-in',
			[
				'label' => esc_html__( 'Check In', 'cb-hotel-booking' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Check-In Date', 'cb-hotel-booking' ),
				'placeholder' => esc_html__( 'Type your text here', 'cb-hotel-booking'),
			]
		);

        $this->add_control(
			'hotel-booking-check-out',
			[
				'label' => esc_html__( 'Check Out', 'cb-hotel-booking' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Check-Out-Date', 'cb-hotel-booking' ),
				'placeholder' => esc_html__( 'Type your text here', 'cb-hotel-booking'),
			]
		);
       
        $this->add_control(
            'hotel-booking-adults',
            [
                'label' => esc_html__( 'Adults', 'cb-hotel-booking' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Adults', 'cb-hotel-booking' ),
                'placeholder' => esc_html__( 'Type your text here', 'cb-hotel-booking'),
            ]
        );

        $this->add_control(
            'hotel-booking-children',
            [
                'label' => esc_html__( 'Children', 'cb-hotel-booking' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Children', 'cb-hotel-booking' ),
                'placeholder' => esc_html__( 'Type your text here', 'cb-hotel-booking'),
            ]
        );

        $this->add_control(
            'hotel-booking-submit-text',
            [
                'label' => esc_html__( 'Submit', 'cb-hotel-booking' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Search', 'cb-hotel-booking' ), 
                'placeholder' => esc_html__( 'Type your text here', 'cb-hotel-booking'),               
            ]
        );
      
        $this->end_controls_section();


    }
    protected function render()
    {

        $settings = $this->get_settings_for_display();
        ?>
        <div id="cbhotel-booking-form" onload="CBHotelStardt();">

            <div class="form-control">
                <form action="#" class="form-container">
                    <input type="hidden" name="showPromotions" value="1" />
                    <input type="hidden" name="Clusternames" value="ITITMHTLRoyalGardenH" />
                    <!-- Hotel identifier -->
                    <input type="hidden" name="Hotelnames" value="ITITMHTLRoyalGardenH" />
                    <!-- Check-in -->
                    <div class="input-fill">
                        <label><?php echo esc_html($settings['hotel-booking-check-in']); ?>*</label><br>
                        <input type="date" required name="fromday">
                    </div>
                    <div class="input-fill">
                        <label><?php echo esc_html($settings['hotel-booking-check-out']); ?>*</label><br>
                        <input type="date" required>
                    </div>
                    <div class="input-fill">
                        <label><?php echo esc_html($settings['hotel-booking-adults']); ?></label>
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
                        <label><?php echo esc_html($settings['hotel-booking-children']); ?></label>
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
                            value="<?php echo esc_html($settings['hotel-booking-submit-text']); ?>">
                    </div>
                </form>
            </div>
        </div>
        <?php
    }
}
