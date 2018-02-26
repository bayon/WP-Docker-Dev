<?php
/*
Plugin Name: AM Popular Posts
Plugin URI: http://awfulmedia.com
Description: aDD THE AWFULmEDIA pOPULAR POSTS WIDGET TRO TYYOUR THEME
Version: 1.0
Author: auSTIN    fly
Author URI: http://awfulmedai.com
License: none
*/
//class am_popular_posts extends WP_Widget {
class am_popular_posts extends WP_Widget  {
	
	function __construct(){
		parent::__construct(false,$name=__('AM Popular Posts'));
	}	
	function form($instance){

	}
	function update($new_instance, $old_instance){
		
	}
	function widget($args, $instance){
		?>
			<div class="widget popular-posts  ">
				<h1>am_popular_posts</h1>
				<ul>
					<?php
						$query_args = array(
							'post_type' => 'post',
							'posts_per_page' => 5,
							'orderby' => 'meta_value_num',
							'meta-key' => 'post_views_count'
						);
						$query = new WP_Query($query_args);
						while($query->have_posts()){
						  $query->the_post();
							?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></li>
							<?php
							 } 
							?>
				</ul>
				<p>Ok this worked...it was added through the SiteOrigin Widget plugin but has no Parameters.</p>
			</div>
		<?php
		
	}
}

	add_action('widgets_init', function() {
	register_widget('am_popular_posts');
});

?>