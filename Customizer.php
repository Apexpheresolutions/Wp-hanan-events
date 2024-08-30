<?php
/**
 * Theme Customizer for Hanan Events Theme
 */

function hanan_events_customize_register($wp_customize) {
    
    // Add a section for the theme options
    $wp_customize->add_section('hanan_events_theme_options', array(
        'title'       => __('Theme Options', 'hanan-events'),
        'description' => __('Customize the theme settings for Hanan Events.', 'hanan-events'),
        'priority'    => 120,
    ));

    // Add a setting for the logo
    $wp_customize->add_setting('hanan_events_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Add a control to upload the logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hanan_events_logo', array(
        'label'    => __('Upload Logo', 'hanan-events'),
        'section'  => 'hanan_events_theme_options',
        'settings' => 'hanan_events_logo',
    )));

    // Add a setting for the primary color
    $wp_customize->add_setting('hanan_events_primary_color', array(
        'default'           => '#FF5733',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    // Add a control to change the primary color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hanan_events_primary_color', array(
        'label'    => __('Primary Color', 'hanan-events'),
        'section'  => 'hanan_events_theme_options',
        'settings' => 'hanan_events_primary_color',
    )));

    // Add a setting for custom footer text
    $wp_customize->add_setting('hanan_events_footer_text', array(
        'default'           => __('Default footer text', 'hanan-events'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add a control for the custom footer text
    $wp_customize->add_control('hanan_events_footer_text', array(
        'label'    => __('Footer Text', 'hanan-events'),
        'section'  => 'hanan_events_theme_options',
        'settings' => 'hanan_events_footer_text',
        'type'     => 'text',
    ));
}

add_action('customize_register', 'hanan_events_customize_register');

/**
 * Output custom CSS for the primary color
 */
function hanan_events_customizer_css() {
    ?>
    <style type="text/css">
        .main-nav a:hover, .btn {
            background-color: <?php echo get_theme_mod('hanan_events_primary_color', '#FF5733'); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'hanan_events_customizer_css');

?>
