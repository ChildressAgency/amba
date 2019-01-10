<?php
if(function_exists('acf_add_options_page')){
  acf_add_options_page(array(
    'page_title' => esc_html__('General Settings', 'tol_child'),
    'menu_title' => esc_html__('General Settings', 'tol_child'),
    'menu_slug' => 'general-settings',
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}

if( function_exists('acf_add_local_field_group') ):

//social links acf
acf_add_local_field_group(array(
	'key' => 'group_5c378fd28e2a1',
	'title' => esc_html__('Social Links', 'tol_child'),
	'fields' => array(
		array(
			'key' => 'field_5c378fd858926',
			'label' => esc_html__('Facebook', 'tol_child'),
			'name' => 'facebook',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5c378fdf58927',
			'label' => esc_html__('Twitter', 'tol_child'),
			'name' => 'twitter',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'general-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

//category color acf
acf_add_local_field_group(array(
	'key' => 'group_5c3793fc1a929',
	'title' => esc_html__('Post Category Settings', 'tol_child'),
	'fields' => array(
		array(
			'key' => 'field_5c3794023da73',
			'label' => esc_html__('Category Color', 'tol_child'),
			'name' => 'category_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#2b5aa7',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'category',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

//home page hero acf
acf_add_local_field_group(array(
	'key' => 'group_5c37918318a38',
	'title' => esc_html__('Home Page Hero Settings', 'tol_child'),
	'fields' => array(
		array(
			'key' => 'field_5c379190f61e0',
			'label' => esc_html__('Hero Image', 'tol_child'),
			'name' => 'hero_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5c3791abf61e1',
			'label' => esc_html__('Hero Image CSS', 'tol_child'),
			'name' => 'hero_image_css',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c3791bcf61e2',
			'label' => esc_html__('Hero Section Caption', 'tol_child'),
			'name' => 'hero_section_caption',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c3791dbf61e3',
			'label' => esc_html__('Hero Caption Link', 'tol_child'),
			'name' => 'hero_caption_link',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '12',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

//home page about section acf
acf_add_local_field_group(array(
	'key' => 'group_5c379200b9693',
	'title' => esc_html__('Home Page About Section Settings', 'tol_child'),
	'fields' => array(
		array(
			'key' => 'field_5c3792108f00e',
			'label' => esc_html__('About Section Content', 'tol_child'),
			'name' => 'about_section_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c37921f8f00f',
			'label' => esc_html__('About Section Link', 'tol_child'),
			'name' => 'about_section_link',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
		array(
			'key' => 'field_5c37922c8f010',
			'label' => esc_html__('About Section Image', 'tol_child'),
			'name' => 'about_section_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '12',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

//home page workshop section acf
acf_add_local_field_group(array(
	'key' => 'group_5c379258811a2',
	'title' => esc_html__('Home Page Workshop Section Settings', 'tol_child'),
	'fields' => array(
		array(
			'key' => 'field_5c37926ebcab6',
			'label' => esc_html__('Workshop Section Background Image', 'tol_child'),
			'name' => 'workshop_section_background_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5c379284bcab7',
			'label' => esc_html__('Workshop Section Background Image CSS', 'tol_child'),
			'name' => 'workshop_section_background_image_css',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c3792b3bcab8',
			'label' => esc_html__('Workshop Section Image', 'tol_child'),
			'name' => 'workshop_section_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5c3792c4bcab9',
			'label' => esc_html__('Workshop Section Title', 'tol_child'),
			'name' => 'workshop_section_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c379312bcaba',
			'label' => esc_html__('Workshop Section Date', 'tol_child'),
			'name' => 'workshop_section_date',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y',
			'return_format' => 'F j, Y',
			'first_day' => 1,
		),
		array(
			'key' => 'field_5c379326bcabb',
			'label' => esc_html__('Workshop Section Location', 'tol_child'),
			'name' => 'workshop_section_location',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c379341bcabc',
			'label' => esc_html__('Workshop Section Description', 'tol_child'),
			'name' => 'workshop_section_description',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c37934cbcabd',
			'label' => esc_html__('Workshop Section Link', 'tol_child'),
			'name' => 'workshop_section_link',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '12',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

//home page find a bank section acf
acf_add_local_field_group(array(
	'key' => 'group_5c37937fe1ef6',
	'title' => esc_html__('Find Bank Section Settings', 'tol_child'),
	'fields' => array(
		array(
			'key' => 'field_5c37938d0e95b',
			'label' => esc_html__('Find A Bank Section Title', 'tol_child'),
			'name' => 'find_a_bank_section_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c3793a30e95c',
			'label' => esc_html__('Find A Bank Section Link', 'tol_child'),
			'name' => 'find_a_bank_section_link',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '12',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

//newsletter signup form shortcode acf
acf_add_local_field_group(array(
	'key' => 'group_5c3793c6b63a9',
	'title' => esc_html__('Newsletter SignUp Section Settings', 'tol_child'),
	'fields' => array(
		array(
			'key' => 'field_5c3793dadb1d7',
			'label' => esc_html__('Newsletter SignUp Form Shortcode', 'tol_child'),
			'name' => 'newsletter_signup_form_shortcode',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '12',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;