<?php
if ( !defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = [
    'margin_top'  => [
        'type'  => 'text',
        'label' => esc_html__( 'Margin Top (px)', 'mebel-laim' ),
        'desc'  => esc_html__( 'Please enter margin top value for fields wrapper in pixels', 'mebel-laim' )
    ],

    'padding_top'  => [
        'type'  => 'text',
        'label' => esc_html__( 'Padding Top (px)', 'mebel-laim' ),
        'desc'  => esc_html__( 'Please enter padding top value for fields wrapper in pixels', 'mebel-laim' )
    ],

    'padding_bottom'  => [
        'type'  => 'text',
        'label' => esc_html__( 'Padding Bottom (px)', 'mebel-laim' ),
        'desc'  => esc_html__( 'Please enter padding bottom value for fields wrapper in pixels', 'mebel-laim' )
    ],

    'padding_left_right'  => [
        'type'  => 'text',
        'label' => esc_html__( 'Padding Left And Right (px)', 'mebel-laim' ),
        'desc'  => esc_html__( 'Please enter padding left and right value for fields wrapper in pixels', 'mebel-laim' )
    ],

    'title'  => [
        'type'  => 'text',
        'label' => esc_html__( 'Title', 'mebel-laim' ),
        'desc'  => esc_html__( 'Please enter title text for fields wrapper', 'mebel-laim' )
    ],

    'contact_us_fields' => [
        'type'  => 'addable-box',
        'label' => esc_html__( 'Contact Us Fields', 'mebel-laim' ),
        'desc'  => esc_html__( 'Add, remove or edit different contact fields', 'mebel-laim' ),
        'box-options' => [
            'field_type'  => [
                'type'      => 'radio',
                'value'     => 'choice-phone',
                'label'     => esc_html__( 'Field Type', 'mebel-laim' ),
                'desc'      => esc_html__( 'Select field type', 'mebel-laim' ),
                'inline'    => false,
                'choices'   => [
                    'choice-phone'  => esc_html__( 'Phone', 'mebel-laim' ),
                    'choice-email'  => esc_html__( 'E-mail', 'mebel-laim' ),
                    'choice-other'  => esc_html__( 'Other', 'mebel-laim' )
                ]
            ],

            'field_text'   => [
                'type'  => 'text',
                'label' => esc_html__( 'Field Text', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please enter field text', 'mebel-laim' )
            ],

            'field_icon'  => [
                'type'          => 'icon-v2',
                'label'         => esc_html__( 'Icon', 'mebel-laim' ),
                'desc'          => esc_html__( 'Please choose field icon', 'mebel-laim' ),
                'preview_size'  => 'medium',
                'modal_size'    => 'medium'
            ],

            'field_icon_color'  => [
                'type'  => 'color-picker',
                'label' => esc_html__( 'Icon Color', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please choose icon color or write its value in HEX', 'mebel-laim' ),
                'value' => '#58c800'
            ]
        ],
        'template'          => '{{- field_text }}',
        'limit'             => 0,
        'add-button-text'   => esc_html__( 'Add new field', 'mebel-laim' ),
        'sortable'          => true
    ],

    'is_background' => [
        'type'  => 'multi-picker',
        'label' => false,
        'desc'  => false,
        'value' => [
            'choice'    => 'yes'
        ],

        'picker'    => [
            'choice'    => [
                'type'      => 'select',
                'label'     => esc_html__( 'Add Background Image?', 'mebel-laim' ),
                'desc'      => esc_html__( 'Please choose if background image is added', 'mebel-laim' ),
                'choices'   => [
                    'yes'   => esc_html__( 'Yes', 'mebel-laim' ),
                    'no'    => esc_html__( 'No', 'mebel-laim')
                ]
            ]
        ],

        'choices'   => [
            'yes'   => [
                'background_image' => [
                    'type'          => 'upload',
                    'label'         => esc_html__( 'Background Image', 'mebel-laim' ),
                    'desc'          => esc_html__( 'Please upload background image or choose existing from library', 'mebel-laim' ),
                    'images_only'   => true,
                    'sizes'         => ['thumbnail', 'medium', 'large', 'full']
                ],

                'background_image_quality' => [
                    'type'      => 'radio',
                    'value'     => 'full',
                    'label'     => esc_html__( 'Background Image Quality', 'mebel-laim' ),
                    'desc'      => esc_html__( 'Please choose the quality of background image', 'mebel-laim' ),
                    'inline'    => false,
                    'choices'   => [
                        'thumbnail' => esc_html__( 'Thumbnail (150x150)', 'mebel-laim' ),
                        'medium'    => esc_html__( 'Medium (300x300)', 'mebel-laim' ),
                        'large'     => esc_html__( 'Large (1024x1024)', 'mebel-laim' ),
                        'full'      => esc_html__( 'Full', 'mebel-laim' )
                    ]
                ],

                'overlay_color'  => [
                    'type'  => 'color-picker',
                    'label' => esc_html__( 'Background Overlay Color', 'mebel-laim' ),
                    'desc'  => esc_html__( 'Please choose color or write its value in HEX', 'mebel-laim' ),
                    'value' => '#fff'
                ],

                'overlay_opacity'   => [
                    'type'          => 'slider',
                    'label'         => esc_html__( 'Overlay Opacity', 'mebel-laim' ),
                    'desc'          => esc_html__( 'Please select the overlay opacity (0 - min color, 1 - max color)', 'mebel-laim' ),
                    'value'         => 0.5,
                    'properties'    => [
                        'min'   => 0,
                        'max'   => 1,
                        'step'  => 0.05
                    ]
                ]
            ]
        ],
        'show_borders'  => false
    ]
];