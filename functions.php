<?php

function handel_custom_images(){
  add_image_size('slide', 1000, 800, ['center', 'top']);
  update_option('medium_crop', 1);
}
add_action('after_setup_theme', 'handel_custom_images');
?>