<?php

function wpdevs_customizer_real_madrid( $wp_customize ){
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title'       => 'Copyright Settings',
            'description' => 'Customize your footer copyright (Real Madrid style)',
        )
    );

    // Setting
    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type'              => 'theme_mod',
            'default'           => '© 2025 Real Madrid CF - All Rights Reserved',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    // Control
    $wp_customize->add_control(
        'set_copyright',
        array(
            'label'       => 'Copyright Information',
            'description' => 'Type your copyright text here',
            'section'     => 'sec_copyright',
            'type'        => 'text',
        )
    ); 
}
add_action( 'customize_register', 'wpdevs_customizer_real_madrid' );
