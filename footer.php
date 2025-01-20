<footer class="bg-gradient-to-t from-pink-100 via-white to-white py-12">
  <div class="container mx-auto px-6 lg:px-12">
    <div class="flex flex-col items-center lg:flex-row lg:justify-between">
      <div class="flex items-center space-x-4 mb-6 lg:mb-0">
        <?php if ( has_custom_logo() ) : ?>
          <div class="site-logo w-[150px]"><?php the_custom_logo(); ?></div>
        <?php else : ?>
          <div class="text-2xl font-bold text-gray-700"><?php bloginfo('name'); ?></div>
        <?php endif; ?>
        <span class="text-2xl font-bold text-gray-700"><?php bloginfo('name'); ?></span>
      </div>
      
      <div class="text-center lg:text-right text-gray-600">
        <p>Chill Cecky s.r.o.</p>
        <p>1234 Ulice, Město, 100 00</p>
      </div>
    </div>

    <div class="mt-10 border-t border-gray-200 pt-6 flex flex-col lg:flex-row items-center justify-between">
      <div class="flex space-x-6">
        <a href="#" class="text-pink-500 hover:text-pink-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
            <path d="M24 4.6c-.9.4-1.8.6-2.7.8a4.7 4.7 0 002-2.6c-.9.5-1.9.8-2.9 1-1-.9-2.3-1.5-3.6-1.5-2.7 0-4.8 2.2-4.8 4.8 0 .4 0 .8.1 1.2-4-.2-7.5-2-9.8-4.8-.4.7-.6 1.6-.6 2.5 0 1.7.9 3.2 2.2 4-.8 0-1.6-.2-2.3-.6v.1c0 2.3 1.6 4.2 3.7 4.6-.4.1-.8.2-1.3.2-.3 0-.6 0-.9-.1.6 1.9 2.4 3.3 4.5 3.3-1.7 1.3-3.8 2.1-6.2 2.1H2.6c2.2 1.4 4.9 2.2 7.8 2.2 9.4 0 14.5-7.8 14.5-14.5v-.7c1-.8 1.8-1.7 2.5-2.7z"/>
          </svg>
        </a>
        <a href="#" class="text-pink-500 hover:text-pink-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
            <path d="M12 2.2c-5.4 0-9.8 4.4-9.8 9.8s4.4 9.8 9.8 9.8 9.8-4.4 9.8-9.8-4.4-9.8-9.8-9.8zm0 18.2c-4.6 0-8.4-3.8-8.4-8.4s3.8-8.4 8.4-8.4 8.4 3.8 8.4 8.4-3.8 8.4-8.4 8.4zm3.8-11.6c0 2.1-1.7 3.8-3.8 3.8s-3.8-1.7-3.8-3.8 1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8zm-5.6 0c0-1 0.8-1.8 1.8-1.8s1.8 0.8 1.8 1.8-0.8 1.8-1.8 1.8-1.8-0.8-1.8-1.8zm8.8 10.4c0 0.6-0.5 1.1-1.1 1.1h-10c-0.6 0-1.1-0.5-1.1-1.1v-1.3c0-0.6 0.5-1.1 1.1-1.1h10c0.6 0 1.1 0.5 1.1 1.1v1.3z"/>
          </svg>
        </a>
      </div>

      <div class="mt-6 lg:mt-0 text-gray-500 text-sm">
        © <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. Všechna práva vyhrazena.
      </div>
    </div>
  </div>
</footer>



</body>
</html>

