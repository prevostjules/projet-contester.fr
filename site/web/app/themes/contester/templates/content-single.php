<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <figure><img class="head-post-desktop" src<?php the_post_thumbnail(); ?></figure>
      <figure><img class="head-post-mobile" src="<?php the_field('second_image'); ?>"/></figure>


      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <div class="share">Partager ce contenu :</div>
    <a target="_blank" title="Cliquez pour partager sur Facebook" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t<?php the_title();?>"rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><img class="facebook" src="https://projet-contester.fr/app/uploads/2017/02/Logo-contester-5.png" alt="Cliquez pour partager sur Facebook"></a>
  </article>
<?php endwhile; ?>
