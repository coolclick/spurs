<header class="page-header author-header">

	<?php
	$curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug',
		$author_name ) : get_userdata( intval( $author ) );
	?>

    <h1><?php esc_html_e( 'About:', 'understrap' ); ?><?php echo esc_html( $curauth->nickname ); ?></h1>

	<?php if ( ! empty( $curauth->ID ) ) : ?>
		<?php echo get_avatar( $curauth->ID ); ?>
	<?php endif; ?>

    <dl>
		<?php if ( ! empty( $curauth->user_url ) ) : ?>
            <dt><?php esc_html_e( 'Website', 'understrap' ); ?></dt>
            <dd>
                <a href="<?php echo esc_url( $curauth->user_url ); ?>"><?php echo esc_html( $curauth->user_url ); ?></a>
            </dd>
		<?php endif; ?>

		<?php if ( ! empty( $curauth->user_description ) ) : ?>
            <dt><?php esc_html_e( 'Profile', 'understrap' ); ?></dt>
            <dd><?php echo esc_html( $curauth->user_description ); ?></dd>
		<?php endif; ?>
    </dl>

    <h2><?php esc_html_e( 'Posts by', 'understrap' ); ?> <?php echo esc_html( $curauth->nickname ); ?>
        :</h2>

</header><!-- .page-header -->

<ul>

    <!-- The Loop -->
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
            <li>
                <a rel="bookmark" href="<?php the_permalink() ?>"
                   title="<?php esc_html_e( 'Permanent Link:', 'understrap' ); ?> <?php the_title(); ?>">
					<?php the_title(); ?></a>,
				<?php understrap_posted_on(); ?> <?php esc_html_e( 'in',
					'understrap' ); ?> <?php the_category( '&' ); ?>
            </li>
		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'loop-templates/content', 'none' ); ?>

	<?php endif; ?>

    <!-- End Loop -->

</ul>

