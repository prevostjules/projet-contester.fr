<?php while (have_posts()) : the_post(); ?>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
  </article>

  <h3 class="share">Partager l'article :</h3>
  <div class="social-share">
  <a target="_blank" title="Cliquer pour partager sur Facebook" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t<?php the_title();?>"rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><img class="facebook-share" src="https://projet-contester.fr/app/uploads/2017/03/facebook-share.png" alt="Cliquer pour partager sur Facebook"></a>
  <a target="_blank" title="Cliquez pour partager sur Twitter" href="https://twitter.com/share?; ?>&text='<?php the_title();?>', via @projetcontester. À lire ici :<?php the_permalink() ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;"><img class="twitter-share" src="https://projet-contester.fr/app/uploads/2017/03/twitter-share.png" alt="Cliquer pour partager sur Twitter"></a>
  <a target="_blank" title="Cliquer pour partager par mail" href="mailto:?subject='<?php the_title();?>' sur projet-contester.fr &body=Bonjour,%0A%0AJ'ai aimé l'article '<?php the_title();?>' sur le site projet-contester.fr. %0A%0AVoici le lien : <?php the_permalink() ?>%0A%0ABonne journée,"  rel="nofollow"><img class="mail-share" src="https://projet-contester.fr/app/uploads/2017/03/mail-share.png" alt="Cliquer pour partager par mail"></a>
</div>

<?php endwhile; ?>
<?php the_field('go_further'); ?>
