<?php
namespace Elementor;

class Proyectop_Widget extends Widget_Base{
    public function get_name() {
        return 'proyectop';
    }

    public function get_title() {
        return 'Proyectop';
    }

    public function get_icon() {
        return 'eicon-folder-o';
    }

    public function get_categories() {
        return ['basic'];
    }

    protected function _register_controls(){
        $this->start_controls_section(
            'section_title',
            [
                'label' => __( 'Title & Subtitle', 'elementor'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Here your title', 'elementor'),
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => __( 'Subtitle', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Here your subtitle', 'elementor'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __( 'Link', 'elementor'),
                'type' => Controls_Manager::URL,
                'placeholder' => __('https://example.com', 'elementor'),
                'default' => [
                    'url' => '',
                ]
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $url = $settings['link']['url'];
        echo "<a href='$url'><div class='title'>$settings[title]</div><div class='subtitle'>$settings[subtitle]</div></a>";
    }
}