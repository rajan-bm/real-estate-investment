<?php
    $id = get_query_var('id', '');
    $size = get_query_var('size', 'medium');
?>

<a href="<?php the_permalink($id); ?>" class="s-investment-cards-card">
    <div class="s-investment-cards-img">
        <img src="<?php echo get_the_post_thumbnail_url($id, $size) ? get_the_post_thumbnail_url($id, $size) : get_template_directory_uri() . '/assets/img/articles-list/articles-card01.jpg'; ?>" alt="<?php the_title(); ?>" class="img-fluid">
    </div>
    <div class="s-investment-cards-content">
        <p class="s-investment-cards-date"><?php echo get_the_date('Y.m.d', $id); ?></p>
        <h3 class="s-investment-cards-title"><?php the_title(); ?></h3>
        <?php $post_cats = get_the_category(get_the_ID($id));
        if ($post_cats): ?>
            <div class="s-investment-cards-tags">
                <?php foreach ($post_cats as $cat): ?>
                    <p class="s-investment-cards-tag">#<?php echo $cat->name; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</a>