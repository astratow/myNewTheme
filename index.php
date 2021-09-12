<?php 
/*
 *myNewTheme
 */

get_header();
?>
<?php
if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
  <header class="page-header alingwide">
  <h1 class="page-title"><?php single_post_title(); ?> </h1>
</header>
function() {
  echo '<h1>This is myNewThem.</h1>';
}

?>
