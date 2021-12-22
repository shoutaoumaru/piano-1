<!DOCTYPE html>
<html lang="ja">

<head>
  <title>お知らせ一覧 | エステテンプレート1</title>
  <?php get_header(); ?>

</head>

<body class="animsition">
  <div id="main-wrapper" class="news-wrapper">
  <?php get_template_part('includes/c-header'); ?>
    <section class="c-topview">
      <div class="c-topview__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/news.jpg" alt="">
      </div>
    </section>
    <!-- /.c-topview -->
    <section class="c-news">
      <div class="c-container">
        <h2 class="c-title">
          <span class="en">news</span>
          <span class="ja">ニュース</span>
        </h2>
        <ul class="c-news__list">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="c-news__item">
              <a href="<?php the_permalink() ;?>" class="c-news__link animsition-link">
                <?php the_post_thumbnail(); ?>
                <span class="c-news__date"><?php the_date(); ?></span>
                <p class="c-txt-sm"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <!-- pagenesion -->
        <?php if( function_exists ("the_pagination") ) the_pagination(); ?>
      </div>
    </section>
    <!-- /.c-news -->
    <?php get_footer(); ?>

  </div>
  <!-- /.main-wrapper -->
  <?php get_template_part('includes/c-footer'); ?>
</body>

</html>