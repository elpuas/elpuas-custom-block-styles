<?php
/*
Plugin Name: ElPuas Custom Block Styles
Description: Adds custom block styles to the TT4 theme.
Version: 1.0
Author: ElPuas
*/

// Define the namespace to avoid function name conflicts
namespace elpuas;

// Security check to prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function custom_block_styles() {
    register_block_style(
        'core/button',
        [
            'name'         => 'custom-primary-button', // The name of the style
            'label'        => __( 'Custom Primary', 'elpuas' ), // The label of the style
            'inline_style' => '
                .wp-block-button:is(.is-style-custom-primary-button) {
                    .wp-block-button__link {
                        background-color: #026E78; 
                        color: #ffffff; 
                        border-radius: 9999px; 
                        padding: 10px 120px;
                        display: flex; 
                        align-items: center; 
                        justify-content: center;
                        
                        &::after { 
                            content: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzk2NzBfMzY2MSkiPgo8cGF0aCBkPSJNNC4xNjY3NSAxMEgxNS44MzM0IiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8cGF0aCBkPSJNMTAuODMzMyAxNUwxNS44MzMzIDEwIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8cGF0aCBkPSJNMTAuODMzMyA1TDE1LjgzMzMgMTAiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjwvZz4KPGRlZnM+CjxjbGlwUGF0aCBpZD0iY2xpcDBfOTY3MF8zNjYxIj4KPHJlY3Qgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiBmaWxsPSJ3aGl0ZSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo=");
                            height: 20px; 
                            margin-left: 10px; 
                            transition: transform 0.3s ease;
                        }

                        &:hover {
                            background-color: #015364;

                            &::after {
                                transform: translateX(5px);
                            }
                        }
                        
                        &:focus,
                        &:focus-within {
                            outline: solid 2px #94F3DA;
                        }
                    } 
                }
            ', // The inline CSS for the style
		]
	);

    register_block_style(
        'core/button',
        [
            'name'         => 'custom-secondary-button',
            'label'        => __( 'Custom Secondary', 'elpuas' ),
            'inline_style' => '
                .wp-block-button:is(.is-style-custom-secondary-button) {
                    .wp-block-button__link {
                        background-color: #FFFFFf; 
                        color: #026E78; 
                        border-radius: 9999px;
                        border: 2px solid #026E78; 
                        padding: 10px 120px;
                        display: flex; 
                        align-items: center; 
                        justify-content: center;
                        
                        &::after { 
                            content: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0ibm9uZSI+PGcgc3Ryb2tlPSIjMDI2RTc4IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS13aWR0aD0iMiIgY2xpcC1wYXRoPSJ1cmwoI2EpIj48cGF0aCBkPSJNNC4xNjcgMTBoMTEuNjY2TTEwLjgzMyAxNWw1LTVNMTAuODMzIDVsNSA1Ii8+PC9nPjxkZWZzPjxjbGlwUGF0aCBpZD0iYSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAgMGgyMHYyMEgweiIvPjwvY2xpcFBhdGg+PC9kZWZzPjwvc3ZnPg==");
                            height: 20px; 
                            margin-left: 10px; 
                            transition: transform 0.3s ease;
                        }

                        &:hover {
                            border: 2px solid #015364;

                            &::after {
                                transform: translateX(5px);
                            }
                        }
                        
                        &:focus,
                        &:focus-within {
                            outline: solid 2px #94F3DA;
                        }
                    } 
                }
            ',
		]
	);

    register_block_style(
        'core/heading',
        array(
            'name'         => 'gradient-header',
            'label'        => __( 'Gradient Header', 'elpuas' ),
            'inline_style' => '
                .wp-block-heading.is-style-gradient-header {
                    background-image: linear-gradient(to right, rgba(69,150,251,1) 0%, rgba(87,242,204,1) 48%, rgba(212,255,236,1) 100%);
                    color: transparent;
                    background-clip: text;
                    -webkit-background-clip: text;
                }
            ',
        )
    );
}

add_action('init', __NAMESPACE__ . '\custom_block_styles');

function custom_block_variations( $variations, $block_type ) {
    if ( 'core/columns' === $block_type->name ) {
        $variations[] = [
            'name'        => 'cta-image-button',
            'title'       => __( 'Image, Button and Text', 'elpuas' ),
            'description' => __( 'A Call-to-Action with an image and button in the first column, and a long paragraph in the second column.', 'textdomain' ),
            'icon'        => 'feedback',
            'attributes'  => [
                'columns' => 2,
                'align'   => 'wide',
                'verticalAlignment' => 'center',
                'className' => 'is-style-cta-image-button',
            ],
            'innerBlocks' => [
                [
                    'core/column',
                    [],
                    [
                        [ 'core/image', [] ],
                        [ 
                            'core/button', 
                            [ 
                                'text' => 'Learn More',
                                'className' => 'is-style-custom-primary-button'
                            ] 
                        ],
                    ],
                ],
                [
                    'core/column',
                    [
                        'verticalAlignment' => 'center',
                    ],
                    [
                        [ 
                            'core/paragraph', 
                            [ 
                                'placeholder' => 'This is a long paragraph explaining the details of your Call-to-Action. Add as much text as needed to convey your message.' 
                            ] 
                        ],
                    ],
                ],
            ],
        ];
    }

    if ( 'core/query' === $block_type->name ) {
        $variations[] = [
            'name'        => 'team-query-grid',
            'title'       => __( 'Team Members Grid', 'elpuas' ),
            'description' => __( 'Display team members in a 3-column grid layout.', 'textdomain' ),
            'icon'        => 'groups',
            'attributes'  => [
                'query' => [
                    'postType' => 'team',
                    'postsPerPage' => 6,
                ],
                'className' => 'is-style-team-query-grid',
                'align' => 'wide',
            ],
            'allowedControls' => [ 'order', 'autor' ],
            'innerBlocks' => [
                [
                    'core/post-template',
                    [],
                    [
                        [ 'core/post-featured-image', [ 'sizeSlug' => 'medium' ] ],
                        [ 'core/post-title', [ 'level' => 3 ] ],
                    ],
                ],
            ],
        ];
    }

    return $variations;
}

add_filter( 'get_block_type_variations', __NAMESPACE__ . '\custom_block_variations', 10, 2 );

function custom_team_query_block_styles() {
    wp_enqueue_block_style(
        'core/query',
        [
            'handle' => 'custom-team-query-grid-style',
            'src'    => plugin_dir_url( __FILE__ ) . '/team-block.css',
            'path'   => plugin_dir_path( __FILE__ ) . '/team-block.css',
        ]
    );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\custom_team_query_block_styles' );