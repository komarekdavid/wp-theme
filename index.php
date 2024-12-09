<?php
get_header(); ?>
<body>
    <div class="container">
        <div class="grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="content">
                            <p class="category">
                                <?php 
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name); 
                                }
                                ?>
                            </p>
                            <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
                            <p class="excerpt">
                                <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                            </p>
                        </div>
                        <div class="meta">
                            Autor: <?php echo get_the_author(); ?> &bullet; <?php echo get_the_date(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php esc_html_e('No posts found.', 'textdomain'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>
<?php get_footer(); ?>
