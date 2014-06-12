<?php
// Theme Customizer
function genericfw_theme_customizer( $wp_customize ) {

	$wp_customize->add_section( 'genericfw_settings_section' , array(
		'title'       => __( 'General Settings', 'genericfw' ),
		'priority'    => 30,
		) );

	$wp_customize->add_section( 'genericfw_layout_section' , array(
		'title'       => __( 'Layout Settings', 'genericfw' ),
		'priority'    => 35,
		'description' => 'Content plus Sidebar should equal 16',
		) );

	// Logo Upload
	$wp_customize->add_setting( 'genericfw_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'genericfw_logo', array(
		'label'    => __( 'Upload Logo', 'genericfw' ),
		'section'  => 'genericfw_settings_section',
		'settings' => 'genericfw_logo',
		) ) );

//LAYOUT OPTIONS

	// Content Width
	$wp_customize->add_setting(
		'genericfw_contentwidth',
		array(
			'default' => 'eleven',
			'capability' => 'edit_theme_options',
			));

	$wp_customize->add_control( 
		'genericfw_contentwidth',
		array(
			'settings' => 'genericfw_contentwidth',
			'label' => 'Content width in columns:',
			'section' => 'genericfw_layout_section',
			'type' => 'select',
			'choices' => array(
				'one' => 'One',
				'two' => 'Two',
				'three' => 'Three',
				'four' => 'Four',
				'five' => 'Five',
				'six' => 'Six',
				'seven' => 'Seven',
				'eight' => 'Eight',
				'nine' => 'Nine',
				'ten' => 'Ten',
				'eleven' => 'Eleven',
				'twelve' => 'Twelve',
				'thirteen' => 'Thirteen',
				'fourteen' => 'Fourteen',
				'fifteen' => 'Fifteen',
				'sixteen' => 'Sixteen',
				),
			));

	// Content Custom Classes
	$wp_customize->add_setting('genericfw_customcontentclass', array(
		'default' => '',
		'capability' => 'edit_theme_options',
		));

	$wp_customize->add_control('genericfw_customcontentclass', array(
		'label' => __('Add custom Class(es) to #content div', 'genericfw'),
		'section' => 'genericfw_layout_section',
		'settings' => 'genericfw_customcontentclass',
		));

	// Sidebar Width
	$wp_customize->add_setting(
		'genericfw_sidebarwidth',
		array(
			'default' => 'five',
			'capability' => 'edit_theme_options',
			));

	$wp_customize->add_control( 
		'genericfw_sidebarwidth',
		array(
			'settings' => 'genericfw_sidebarwidth',
			'label' => 'Sidebar width in columns:',
			'section' => 'genericfw_layout_section',
			'type' => 'select',
			'choices' => array(
				'one' => 'One',
				'two' => 'Two',
				'three' => 'Three',
				'four' => 'Four',
				'five' => 'Five',
				'six' => 'Six',
				'seven' => 'Seven',
				'eight' => 'Eight',
				'nine' => 'Nine',
				'ten' => 'Ten',
				'eleven' => 'Eleven',
				'twelve' => 'Twelve',
				'thirteen' => 'Thirteen',
				'fourteen' => 'Fourteen',
				'fifteen' => 'Fifteen',
				'sixteen' => 'Sixteen',
				),
			));

// Text Input
	$wp_customize->add_setting('genericfw_customsidebarclass', array(
		'default' => '',
		'capability' => 'edit_theme_options',
		));

	$wp_customize->add_control('genericfw_customsidebarclass', array(
		'label' => __('Add custom Class(es) to #sidebar div', 'genericfw'),
		'section' => 'genericfw_layout_section',
		'settings' => 'genericfw_customsidebarclass',
		));

}
add_action('customize_register', 'genericfw_theme_customizer');

add_action('admin_print_footer_scripts','genericfw_quicktags');
function genericfw_quicktags() {
	?>
	<script type="text/javascript" charset="utf-8">
		QTags.addButton( 'eg_pre', 'clear','<br class="clear"/>' );
	</script>
	<?php
}