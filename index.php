<?php
get_header(); ?>
<div class="container">
    <div class="grid">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="post-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        </div>
                    <?php endif; ?>
                    <div class="post">
                        <div class="post-content">
                            <p class="post-category">
                                <?php 
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name); 
                                }
                                ?>
                            </p>
                            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="post-excerpt">
                                <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                            </p>
                        </div>
                        <div class="post-meta">
                            <span class="post-author">Autor: <?php echo get_the_author(); ?></span> &bullet; 
                            <span class="post-date"><?php echo get_the_date(); ?></span>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('No posts found.', 'textdomain'); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
