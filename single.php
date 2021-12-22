
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>お知らせ詳細 | ピアノ教室1</title>
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
    <section class="c-news-sl">
      <div class="c-container">
        <h2 class="c-title">
          <span class="en">news</span>
          <span class="ja">ニュース</span>
        </h2>
        <ul class="c-news-sl__list">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="c-news-sl__block">
              <div class="c-news-sl__tit">
                <p class="c-txt-md"><?php the_title(); ?></p>
                <span class="c-news-sl__date"><?php the_date(); ?></span>
              </div>
              <div class="c-news-sl__contents">
                <p><?php the_content(); ?></p>
              </div>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="c-news-sl__link">
          <a class="more-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span class="readmore c-txt-sm">一覧へ戻る</span></a>
        </div>
      </div>
    </section>
    <!-- /.news-top -->
    <?php get_footer(); ?>

  </div>
  <!-- .superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>
</body>

</html>