<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<!--this class help image is displayed-->
	<div class="entry-thumbnail">
		<?php ngothuong_thumbnail('thumbnail');  ?>
	</div>
	<!--this class make title is displayed-->
	<div class="entry-header">
		<?php
	        /*
	         * Lưu custom field vào biến
	         */
	        $link = get_post_meta( $post->ID, 'format_link_url', true );
	        $link_description = get_post_meta( $post->ID, 'format_link_description', true );
	 
	        /*
	         * Hiển thị tiêu đề có link trỏ tới link gắn trong custom field
	         */
	        if ( is_single() ) {
	                printf( '<h1 class="entry-title"><a href="%1$s" target="blank">%2$s</a></h1>',
	                        $link,
	                        get_the_title()
	                );
	        } else {
	                printf( '<h2 class="entry-title"><a href="%1$s" target="blank">%2$s</a></h2>',
	                        $link,
	                        get_the_title()
	                );
	        }
	?>
	</div>
	<!--this class make content is displayed-->
	<div class="entry-content">
		<?php
	        printf( '<a href="%1$s" target="blank">%2$s</a>',
	                $link,
	                $link_description
	        );
		?>
		<?php (is_single() ? ngothuong_entry_tag() : '') ?>
	</div>
</article>