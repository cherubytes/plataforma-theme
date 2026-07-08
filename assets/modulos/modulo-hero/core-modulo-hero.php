<?php
$args = array( 
    'post_type' => 'videos', 
    'posts_per_page' => 1, 
    'orderby' => 'date',
    'order' => 'DESC'
); 
$query = new WP_Query($args); 
if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
?>
<div style="position: relative; width: 100%; height: 85vh; overflow: hidden; background: #000;">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" 
         style="width: 100%; height: 100%; object-fit: cover; object-position: top center; filter: brightness(0.4);">
    <div style="position: absolute; bottom: 80px; left: 60px; max-width: 650px; z-index: 2;">
        <h1 style="font-size: 48px; font-weight: 700; color: #fff; margin-bottom: 15px; text-shadow: 0 2px 10px rgba(0,0,0,0.8);">
            <?php the_title(); ?>
        </h1>
        <p style="color: #ddd; font-size: 18px; margin-bottom: 25px; text-shadow: 0 2px 5px rgba(0,0,0,0.8); line-height: 1.5;">
            <?php echo get_the_excerpt(); ?>
        </p>
        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
            <a href="<?php the_permalink(); ?>" 
               style="background: #ffffff; color: #000000; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 16px; display: inline-flex; align-items: center; gap: 8px;">
                <i class="bi bi-play-fill" style="font-size: 20px;"></i> Reanudar
            </a>
            <a href="<?php the_permalink(); ?>" 
               style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(5px); color: #ffffff; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 16px; border: 1px solid rgba(255,255,255,0.2); display: inline-flex; align-items: center; gap: 8px;">
                <i class="bi bi-plus-circle" style="font-size: 20px;"></i> Más información
            </a>
        </div>
    </div>
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 40%; background: linear-gradient(to top, #0f0f0f 0%, transparent 100%);"></div>
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>