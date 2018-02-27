<?php
/**
 * Adds BannerFull_Widget widget.
 */
class BannerFull_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'BannerFull_Widget', // Base ID
			esc_html__( 'BannerFull Widget', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'A BannerFull Widget', 'text_domain' ), ) // Args
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
		echo $args['before_widget'];
		echo ("<script type=''> <!-- 
			 BannerFull_widget_before();  
			 // </script>");
		echo('<div class="BannerFull-widget-container">');
		// class item start 
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		//echo esc_html__( $instance['description'], 'text_domain' );

	 	if($instance['showSubtitle'] == 'true'){
	 		echo ( $instance['description']  );
	 	} 
		

		// class item end
		/* // class item start 
		if ( ! empty( $instance['description'] ) ) {
			echo $args['before_description'] . apply_filters( 'widget_title', $instance['description'] ) . $args['after_description'];
		}
		echo esc_html__( $instance['description'], 'text_domain' );
		// class item end */

		echo("</div>");
		echo ("<script type=''> <!-- 
			 BannerFull_widget_after();  
			 // </script>");
		echo $args['after_widget'];


	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		$description = ! empty( $instance['description'] ) ? $instance['description'] : esc_html__( 'New description', 'text_domain' );
		$showSubtitle = ! empty( $instance['showSubtitle'] ) ? $instance['showSubtitle'] : esc_html__( 'true', 'text_domain' );

		?>
		<!-- Form Item -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
				<?php esc_attr_e( 'Title:', 'text_domain' ); ?>
			</label> 
			<input 
				id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
				name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
				class="widefat" 
				type="text" 
				value="<?php echo esc_attr( $title ); ?>"
			>
		</p>
		<!-- Form Item -->
	
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>">
				<?php esc_attr_e( 'Sub Title:', 'text_domain' ); ?>
			</label> 
			<input 
				id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" 
				name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" 
				class="widefat" 
				type="text" 
				value="<?php echo esc_attr( $description ); ?>"
			>
		</p>
		 
		
		 
		<!-- Form Item -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'showSubtitle' ) ); ?>">
				<?php esc_attr_e( 'Show Subtitle:', 'text_domain' ); ?>
			</label> 
			<select 
				id="<?php echo esc_attr( $this->get_field_id( 'showSubtitle' ) ); ?>" 
				name="<?php echo esc_attr( $this->get_field_name( 'showSubtitle' ) ); ?>" 
				class="widefat" 
			>
			<option value="false"  <?php echo($showSubtitle=='false') ? 'selected' : ''; ?> >
				False
			</option>
			<option value="true"  <?php echo($showSubtitle=='true') ? 'selected' : ''; ?>>
				True
			</option>

			</select>
		</p>
<!-- To Make the top Bar FULL WIDTH STRETCHED #topbar-widgets removeClass('container');  it is defined in header.php -->
		 
	 	 
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
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';

		$instance['showSubtitle'] = ( ! empty( $new_instance['showSubtitle'] ) ) ? strip_tags( $new_instance['showSubtitle'] ) : '';

		return $instance;
	}

} // class BannerFull_Widget