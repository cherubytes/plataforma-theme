<section class="section-videos" style="background: #0f0f0f; padding: 40px 20px;">
    <div style="max-width: 1400px; margin: 0 auto;">
        <h3 style="color: #fff; font-size: 24px; font-weight: 600; margin-bottom: 20px;">Explora nuestro contenido</h3>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 20px;">
            <?php 
            $temp = $wp_query; 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
            $args = array( 
                'post_type' => 'videos', 
                'orderby' => 'date', 
                'order' => 'DESC', 
                'paged' => $paged, 
                'posts_per_page' => -1 
            ); 
            $wp_query = new WP_Query($args); 
            if ($wp_query->have_posts()) : 
                while ($wp_query->have_posts()) : $wp_query->the_post(); 
                    $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    if (!$img_url) $img_url = 'https://via.placeholder.com/300x450/1a1a1a/fff?text=Sin+Img';
                    $duracion = get_field('duracion');
            ?>

            <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: inherit; display: block;">
                <div style="background: #1a1a1a; border-radius: 8px; overflow: hidden; transition: transform 0.3s;">
                    <img src="<?php echo $img_url; ?>" style="width: 100%; height: 300px; object-fit: cover;">
                    <div style="padding: 15px; color: white;">
                        <h4 style="font-size: 16px; margin: 0 0 5px 0;"><?php the_title(); ?></h4>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: #aaa; font-size: 12px;"><?php echo $duracion ? $duracion : 'N/A'; ?></span>
                            <span style="color: #00a8e1; font-size: 12px; font-weight: 600;">HD</span>
                        </div>
                    </div>
                </div>
            </a>

            <?php endwhile; 
            endif; 
            wp_reset_query(); 
            $wp_query = $temp; ?>
        </div>
    </div>
</section>