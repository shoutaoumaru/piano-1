<?php
 /* Template Name: staff
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>講師紹介 | ピアノ教室1</title>
  <?php get_header(); ?>
</head>

<body class="animsition">
  <div class="superwrapper">
    <main id="main-contents" class="c-staff-wrapper">
    <?php get_template_part('includes/c-header'); ?>

      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/staff-top.jpg" alt="">
        </div>
      </section>
      <!-- /.c-topview -->
      <section class="c-features">
        <div class="c-container">
          <h2 class="c-title">
            <span class="en">STAFF</span>
            <span class="ja">講師紹介</span>
          </h2>
          <div class="c-features__desc">
            <h3 class="c-txt-md">楽しく上達してほしい</h3>
            <p class="c-txt-sm">一人一人に寄り添ったレッスンを心がけています。 心から楽しめる音楽を目指し、生涯の友となってくれると嬉しいです。
              ピアノを弾くことが自分の生きていく力になる、そんなレッスンを目指しています。
            </p>
          </div>
        </div>
      </section>
      <!-- /.c-features -->
      <section class="c-staff">
        <div class="c-container">
          <ul>
            <li class="c-staff__item">
              <h3 class="tit">
                <p class="ja">講師</p>
                <p class="en">Owner</p>
              </h3>
              <div class="c-staff__flex">
                <div class="c-staff__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/staff.jpg" alt="">
                </div>
                <div class="c-staff__desc">
                  <h3 class="c-staff__name">
                    <p class="ja">利部 美紀</p>
                    <p class="en">MIKI RIBU</p>
                  </h3>
                  <div class="c-staff__text">
                    <p class="c-txt-sm">
                      ヤマハ音楽教室のピアノ講師として７年指導にあたり、現在の場所で始めて10年です。 自宅レッスンを中心にしながら音楽活動を行っています
                    </p>
                  </div>
                  <!-- <div class="c-staff__ls">
                    <h4>資格</h4>
                    <p class="c-txt-sm">AJESTHE認定フェイシャルエステティシャン</p>
                  </div> -->
                </div>
              </div>
            </li>
          </ul>
          <div class="more-btn item">
            <a href="<?php echo esc_url( home_url('/faq')); ?>" class="more-btn__link slide-bg animsition-link">
              <span class="c-txt-sm">よくあるご質問</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </section>
    </main>
    <!-- /#main-contents -->
    <?php get_footer(); ?>
  </div>
  <?php get_template_part('includes/c-footer'); ?>
</body>

</html>