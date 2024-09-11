<?php
// Add Ajax Actions
add_action('wp_ajax_article_loadmore', 'article_loadmore_function');
add_action('wp_ajax_nopriv_article_loadmore', 'article_loadmore_function');

function article_loadmore_function()
{
    if (!isset($_GET['offset']) || !isset($_GET['activeTab'])) {
        wp_send_json_error(['message' => 'Invalid request parameters.']);
        wp_die();
    }

    $offset = intval($_GET['offset']);
    $activeTab = sanitize_text_field($_GET['activeTab']);
    $limit = 12;
    $newOffset = $offset + $limit;

    $args = [
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => $limit,
        'offset'         => $offset,
    ];

    if ($activeTab === 'popularity-order') {
        $args['meta_key'] = 'post_views_count';
        $args['orderby']  = 'meta_value_num';
        $args['order']    = 'DESC';
    } else {
        $args['orderby'] = 'date';
        $args['order']   = 'DESC';
    }

    $the_query = new WP_Query($args);
    $totalCount = $the_query->found_posts;

    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $template_args = [
                'id'   => get_the_ID(),
                'size' => 'medium',
            ];
            get_template_part('template-parts/cards/card', 'article', $template_args);
        }
        wp_reset_postdata();
    }
    if ($newOffset < $totalCount): ?>
        <script>
            jQuery(".s-investment-articles-list-container.active .s-investment-articles-listing-btn").removeClass('loading');
            var buttonBox = jQuery(".s-investment-articles-list-container.active .s-investment-articles-listing-btn");
            buttonBox.empty();
            var newButton = '<a href="#" class="s-investment-btn__view-more" data-offset="' + <?php echo $newOffset; ?> + '">もっと見る</a>';
            buttonBox.append(newButton);
        </script>
    <?php else: ?>
        <script>
            jQuery(".s-investment-articles-list-container.active .s-investment-articles-listing-btn").hide();
        </script>
<?php endif;
    wp_die();
}
