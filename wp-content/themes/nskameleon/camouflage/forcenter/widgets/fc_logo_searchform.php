<?php

/**
 * Adds Fc_logo_Widget widget.
 */
class Fc_Logo_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'fc_logo_widget', // Base ID
			__('Forcenter logo & Buscador', 'text_domain'), // Name
			array( 'description' => __( 'Adiciona el logo de Forcenter el form para buscar y el botón de contacto ', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		ob_start();
?> 


	<div id="toolbar">
		<div class="toolbar-box">
			<span><a href="<?php echo network_site_url( '' ) ?>"><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/logo-forcenter350.png" alt="Forcenter"/></a></span>
			<div class="sea">
				<input type="text" /><button type="submit"><img style="vertical-align:middle" src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/ico-search.png" alt="Forcenter"/></button>
			</div>
			<div class="sel" id="quick_call">
				<span>Tienes seleccionados <b>0</b> veh&iacute;culos</span>
				<div id="quick_cotizador">
					<div class="auto">
						<i class="icon-circle"></i>
						Ford F150 Raptor SVT as as as  as as a
						<span>$99.999.999</span>
						<a href="#"><i class="icon-remove-sign"></i></a>
					</div>
					<span>Puedes cotizar hasta 3 veh&iacute;culos a la vez.</span>
					<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
				</div>
			</div>
			<a href="<?php echo get_permalink_by_slug( 'contacto' ) ?>"><img style="vertical-align:middle" src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/ico-mail.png" alt="Forcenter"/> Contacto</a>
		</div>
	</div>



<?php
		echo ob_get_clean();
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'text_domain' );
		}
		?>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Fc_Logo_Widget

// register Foo_Widget widget
function register_fc_logo_widget() {
    register_widget( 'Fc_Logo_Widget' );
}
add_action( 'widgets_init', 'register_fc_logo_widget' );
