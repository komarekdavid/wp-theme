<?php get_header(); ?>

<main class="container mx-auto my-10 px-4">
    <?php custom_breadcrumbs(); ?>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Levý sloupec: obrázek -->
        <div>
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="w-full h-auto rounded-lg shadow-md">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/default-image.jpg" alt="Default Image" class="w-full h-auto rounded-lg shadow-md">
            <?php endif; ?>
        </div>

        <!-- Pravý sloupec: nadpis, popis a tlačítko -->
        <div>
            <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
            <div class="text-lg text-gray-700 mb-6"><?php the_content(); ?></div>
            <a href="#" class="bg-lime-700 text-white py-2 px-6 rounded-lg text-lg shadow-md hover:bg-lime-800 transition">
                Koupit produkt
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
