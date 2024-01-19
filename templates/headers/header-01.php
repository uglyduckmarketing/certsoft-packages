<header class="border-b border-gray-200 bg-white">
  <div class="container mx-auto py-4 px-6">
    <div class="flex gap-1 md:gap-4 items-center justify-between">
      <?php if( have_rows('school_information', 'options') ) : while( have_rows('school_information', 'options') ): the_row(); ?>
      <div class="flex items-center gap-2 text-center">
        <img class="h-8 md:h-10 grayscale" src="<?php echo get_sub_field('school_logo')['url']; ?>" />
      </div>
      <?php endwhile; endif; ?>
      <div class="font-semibold text-sm text-gray-700 hidden md:block"><?php echo get_field('school_name'); ?></div>
      <div class="font-semibold text-sm text-gray-700">Returning Customer? <a href="<?php echo get_field('school_login_link'); ?>" class="text-blue-600">Login</a></div>
    </div>
  </div>
</header>