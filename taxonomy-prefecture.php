<?php
get_header();
?>

<main class="l-prefecture">

  <h1 class="l-prefecture__title">
    <?php single_term_title(); ?>
  </h1>

  <?php if (have_posts()) : ?>
    <ul class="salon-list">
      <?php while (have_posts()) : the_post(); ?>
        <li class="salon-item">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php else : ?>
    <p>この都道府県のサロンはありません。</p>
  <?php endif; ?>

</main>

<?php
get_footer();
