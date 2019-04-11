
<?php get_header(); ?>


<div class="jumbotron sticky-top">
<h1 class="text-center"><?php the_title(); ?></h1>
</div>

<div class="container">

<?php if ( have_posts() ) { ?>


<div class="row">
<?php while (have_posts() ) { ?>

<div class="col-md-12 text-center">
<?php
the_post(); 
the_content();
?>
</div>
</div>
<?php	}  ?>
<?php } ?>

</div>

<?php get_footer(); ?>
