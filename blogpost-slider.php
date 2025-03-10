function custom_property_slider() {
    $args = array(
        'post_type'      => 'post', 
        'posts_per_page' => 1000,
    );
    
    $query = new WP_Query($args);
    
    if ($query->have_posts()) {
        ob_start();
        echo '<div class="swiper-container">';
        echo '<div class="swiper-wrapper">';
        while ($query->have_posts()) {
            $query->the_post();
            $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            $excerpt = wp_trim_words(get_the_excerpt(), 50); // Resumen corto de la casa
            echo '<div class="swiper-slide">';
            echo '    <div class="property-slide">';
            echo '        <div class="property-info">';
            echo '            <p>' . $excerpt . '</p>';
            echo '            <div class="property-buttons">';
            echo '                <a href="' . get_permalink() . '" class="btn black">Más Información</a>';
            echo '                <a href="#contacto" class="btn outline">Contacto</a>';
            echo '            </div>';
            echo '        </div>';
            echo '        <div class="property-image">';
            echo '            <div class="image-frame">';
            echo '                <img src="' . esc_url($image) . '" alt="'. get_the_title() . '">';
            echo '            </div>';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
        wp_reset_postdata();
        return ob_get_clean();
    } else {
        return '<p>No hay propiedades disponibles.</p>';
    }
}
add_shortcode('property_slider', 'custom_property_slider');

function enqueue_swiper_scripts() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), null, true);
    wp_add_inline_script('swiper-js', "new Swiper('.swiper-container', {loop: true, autoplay: {delay: 3000}});");
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_scripts');