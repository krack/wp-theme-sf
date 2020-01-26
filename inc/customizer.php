<?php 
function test_mytheme_customize_register( $wp_customize ) {

    $wp_customize->add_setting( 'colorscheme' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'mytheme_new_section_name' , array(
        'title'      => __( 'Visible Section Name', 'mytheme' ),
        'priority'   => 130,
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label'      => __( 'Header Color', 'mytheme' ),
        'section'    => 'mytheme_new_section_name',
        'settings'   => 'colorscheme',
    ) ) );

}
add_action( 'customize_register', 'test_mytheme_customize_register' );

function mytheme_customize_css()
{
    ?>
         <style type="text/css">
            /* h1 { color: <?php echo get_theme_mod('colorscheme', '#FFFFFF'); ?>; }*/
         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');