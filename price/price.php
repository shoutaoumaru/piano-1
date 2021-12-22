<?php
 /* Template Name: price
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>コース紹介 | ピアノ教室テンプレート1</title>
  <?php get_header(); ?>

</head>

<body class="animsition">
  <div class="superwrapper">
    <main id="main-contents" class="c-price">
      <?php get_template_part('includes/c-header'); ?>
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/pay@pc.jpg" alt="">
        </div>
      </section>
      <!-- /.c-topview -->
      <section class="c-features">
        <div class="c-container">
          <h2 class="c-title">
            <span class="en">Price</span>
            <span class="ja">コース・料金紹介</span>
          </h2>
          <div class="c-features__desc">
            <h3 class="c-txt-md">Riv教室では長く通いやすい料金設定に努めてます</h3>
            <p class="c-txt-sm">
              「多くの人にピアノを弾けるようになって欲しい」という考えのもと、多くの方に継続してお通いいただく為に、高品質なサービスを低価格でご提供しております。ｓ
            </p>
          </div>
        </div>
      </section>
      <!-- /.c-features -->
      <section class="c-price">
        <div class="c-container">
          <div class="c-price__flex">
            <div class="c-container">
              <div class="c-price__wrap">
                <h3 class="tit">
                  <p class="ja">グループレッスン</p>
                  <p class="en">Grop Lesson</p>
                </h3>
                <div class="c-price__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/top-page-2.jpg" alt="">
                </div>
                <dl class="c-price__detail">
                  <dt class="c-price__detail_ttl">
                    <p>グループレッスン/月2回 30分</p>
                  </dt>
                  <dd class="c-price__detail_cont price-tit"><span class="yen">¥10,000</span><span
                      class="tax">(税込)</span></dd>
                </dl>
                <dl class="c-price__detail">
                  <dt class="c-price__detail_ttl">
                    <p>グループレッスン/月3回 30分</p>
                  </dt>
                  <dd class="c-price__detail_cont price-tit"><span class="yen">¥12,000</span><span
                      class="tax">(税込)</span></dd>
                </dl>
                <dl class="c-price__detail">
                  <dt class="c-price__detail_ttl">
                    <p>グループレッスン/月4回 30分</p>
                  </dt>
                  <dd class="c-price__detail_cont price-tit"><span class="yen">¥14,000</span><span
                      class="tax">(税込)</span></dd>
                </dl>
              </div>
              <div class="c-price__wrap">
                <h3 class="tit">
                  <p class="ja">個人レッスン</p>
                  <p class="en">Personal Lesson</p>
                </h3>
                <div class="c-price__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/flow.jpg" alt="">
                </div>
                <dl class="c-price__detail">
                  <dt class="c-price__detail_ttl">
                    <p>個人レッスン/月2回 30分</p>
                  </dt>
                  <dd class="c-price__detail_cont price-tit"><span class="yen">¥10,000</span><span
                      class="tax">(税込)</span></dd>
                </dl>
                <dl class="c-price__detail">
                  <dt class="c-price__detail_ttl">
                    <p>個人レッスン/月3回 30分</p>
                  </dt>
                  <dd class="c-price__detail_cont price-tit"><span class="yen">¥12,000</span><span
                      class="tax">(税込)</span></dd>
                </dl>
                <dl class="c-price__detail">
                  <dt class="c-price__detail_ttl">
                    <p>個人レッスン/月4回 30分</p>
                  </dt>
                  <dd class="c-price__detail_cont price-tit"><span class="yen">¥14,000</span><span
                      class="tax">(税込)</span></dd>
                </dl>
              </div>
            </div>
          </div>
          <div class="more-btn">
            <a href="<?php echo esc_url( home_url('/faq')); ?>" target="_blank" class="more-btn__link slide-bg">
              <span class="c-txt-sm">よくあるご質問へ</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </section>
      <!-- /.c-price -->
    </main>
    <!-- /#main-contents -->
    <?php get_footer(); ?>

  </div>
  <?php get_template_part('includes/c-footer'); ?>
</body>

</html>