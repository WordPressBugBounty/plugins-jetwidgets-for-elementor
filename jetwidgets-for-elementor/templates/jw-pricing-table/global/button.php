<?php
/**
 * Pricing table action button
 */

$settings  = $this->get_settings_for_display();
$size      = $this->sanitize_button_size( isset( $settings['button_size'] ) ? $settings['button_size'] : null );
$position  = $this->sanitize_button_icon_position( isset( $settings['button_icon_position'] ) ? $settings['button_icon_position'] : null );
$icon      = isset( $settings['add_button_icon'] ) ? $settings['add_button_icon'] : '';
$button_url = isset( $settings['button_url'] ) ? $settings['button_url'] : '';

$this->add_render_attribute( 'button', array(
	'class' => array(
		'elementor-button',
		'elementor-size-md',
		'pricing-table-button',
		'button-' . $size . '-size',
	),
	'href' => esc_url( $button_url ),
) );

?>
<a <?php $this->print_render_attribute_string( 'button' ); ?>><?php

	if ( $icon && 'left' === $position ) {
		$this->_render_icon( 'button_icon', '<span class="jet-widgets-icon button-icon">%s</span>' );
	}

	echo $this->__html( 'button_text' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	if ( $icon && 'right' === $position ) {
		$this->_render_icon( 'button_icon', '<span class="jet-widgets-icon button-icon">%s</span>' );
	}

?></a>
