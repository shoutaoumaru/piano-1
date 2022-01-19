<!DOCTYPE html>
<html lang="ja">

<head>
  <title>ピアノ教室-1</title>
  <?php get_header(); ?>
</head>

<body class="animsition">
  <div class="superwrapper">
    <?php get_template_part('includes/c-header'); ?>
    <main id="main-contents">
      <section class="top-view">
        <div class="hero bg">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="hero-img view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/topview-1@sp.jpg" />
                <img class="hero-img view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/topview-1@pc.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="hero-img view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/topview-2@sp.jpg" />
                <img class="hero-img view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/topview-2@pc.jpg" />
              </div>
            </div>
          </div>
          <div class="hero__text">
            <h2 class="clip-js1 skew">毎日でも<br>通いたくなる場所<br>
              RivRound</h2>
          </div>
          <div class="scrolldown">
            <span>scroll</span>
          </div>
        </div>
      </section>
      <!-- /.top-view -->
      <section class="p-first">
        <div class="c-container">
          <h2 class="p-title clip-js left">
            <span class="en">FIRST</span>
            <span class="ja">初めての方へ</span>
          </h2>
          <div class="p-first__container">
            <div class="p-first__img">
              <ul>
                <li><img class="parallax-img" src="<?php echo get_template_directory_uri(); ?>/images/home/top-page-1.jpg" alt=""></li>
                <li><img class="parallax-img" src="<?php echo get_template_directory_uri(); ?>/images/home/top-page-2.jpg" alt=""></li>
              </ul>
            </div>
            <div class="p-first__txt appear up">
              <div class="p-first__desc item">
                <h3 class="c-txt-md">あなたの「はじめたい」に応えたい</h3>
                <p class="c-txt-sm">初めて楽器に触れる方はもちろん、上達志向の方まで、あなたの「はじめたい」に応えます。楽しく、無理なく、うまくなる。
                  <br>
                  それがRiv教室です。
                </p>
              </div>
              <div class="more-btn item">
                <a href="<?php echo esc_url( home_url('/first')); ?>" class="more-btn__link slide-bg animsition-link">
                  <span class="c-txt-sm">初めての方へ</span>
                  <span class="bg"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-first -->
      <section class="p-aicatch">
        <div class="p-aicatch__wrap">
          <div class="p-aicatch__img">
            <img class="parallax-img" src="<?php echo get_template_directory_uri(); ?>/images/home/faq.jpg" alt="">
          </div>
          <div class="c-container">
            <div class="p-aicatch__desc">
              <p class="c-txt-sm">はじめての方でも安心<br>楽器に触れるのがはじめてでも、楽譜が読めなくても心配いりません。入会者の約7割が全く初めての方。楽しみながら基礎が身につけられます。</p>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-staff -->
      <section class="p-concept">
        <div class="p-concept__wrap">
          <div class="p-concept__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/news.jpg" alt="">
          </div>
          <div class="c-container">
            <h2 class="p-title clip-js left">
              <span class="en">CONCEPT</span>
              <span class="ja">コンセプト</span>
            </h2>
            <div class="p-concept__wrap">
              <div class="p-concept__txt appear up">
                <div class="p-concept__desc item">
                  <p class="c-txt-sm">「未経験でもついていけるかな？」「周りのレベルが高かったらどうしよう」などと心配する必要はありません。
                    マンツーマンレッスンだから、あなたの目的やペースに合わせたレッスンプランで、着実に上達へ繋げます。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-concept -->
      <section class="p-staff">
        <div class="p-staff__wrap appear up">
          <div class="p-staff__img cover-slide">
            <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/staff.jpg" alt="">
          </div>
          <div class="c-container">
            <h2 class="p-title clip-js left">
              <span class="en">STAFF</span>
              <span class="ja">講師紹介</span>
            </h2>
            <div class="p-staff__wrap">
              <div class="p-staff__txt">
                <div class="p-staff__desc item">
                  <p class="c-txt-sm">
                    一人一人に寄り添ったレッスンを心がけています。心から楽しめる音楽を目指し、生涯の友となってくれると嬉しいです。ピアノを弾くことが自分の生きていく力になる、そんなレッスンを目指しています。
                  </p>
                </div>
                <div class="more-btn">
                  <a href="<?php echo esc_url( home_url('/staff')); ?>" class="more-btn__link slide-bg animsition-link">
                    <span class="c-txt-sm">講師紹介へ</span>
                    <span class="bg"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-staff -->
      <section class="p-price">
        <div class="p-price__flex">
          <div class="p-price__left">
            <div class="p-price__img cover-slide">
              <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/pay@pc.jpg" alt="">
            </div>
            <div class="more-btn view-pc">
              <a href="/contact/contact.html" class="more-btn__link slide-bg animsition-link">
                <span class="c-txt-sm">コース紹介へ</span>
                <span class="bg"></span></a>
            </div>
          </div>
          <div class="c-container">
            <h2 class="p-title clip-js left">
              <span class="en">PRICE</span>
              <span class="ja">料金案内</span>
            </h2>
            <div class="p-price__wrap">
              <dl class="p-price__detail">
                <dt class="p-price__detail_ttl">入会金<span>Admission</span></dt>
                <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>11,000円~<span
                    class="tax">(税込)</span>
                </dd>
              </dl>
              <dl class="p-price__detail">
                <dt class="p-price__detail_ttl">グループレッスン<span>Grop Lesson</span></dt>
                <dd class="p-price__detail_cont price-tit">
                  <small>月2回/60分</small><span class="yen">¥</span>8,800円~<span class="tax">(税込)</span>
                </dd>
              </dl>
              <dl class="p-price__detail">
                <dt class="p-price__detail_ttl">個人レッスン<span>Personal Lesson</span></dt>
                <dd class="p-price__detail_cont price-tit"><small>月2回/30分</small><span class="yen">¥</span>11,000円~<span
                    class="tax">(税込)</span>
                </dd>
              </dl>
              <div class="more-btn view-sp">
                <a href="<?php echo esc_url( home_url('/price')); ?>" class="more-btn__link slide-bg animsition-link">
                  <span class="c-txt-sm">コース紹介へ</span>
                  <span class="bg"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-price -->
      <section class="p-access">
        <div class="c-container">
          <h2 class="p-title clip-js left">
            <span class="en">ACCESS</span>
            <span class="ja">店舗案内</span>
          </h2>
          <div class="p-access__wrap appear up">
            <div class="p-access__img item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/store__2.jpg
              " alt="">
            </div>
            <div class="p-access__txt item">
              <div class="p-access__desc">
                <p class="c-txt-sm">住所:福岡県福岡市博多区3-27-25-9F</p>
                <a href="tel:092-686-7954" class="tel">
                  <span class="c-txt-sm">電話番号:0120-123-456</span>
                </a>
                <p class="c-txt-sm">定休日:水曜日</p>
                <p class="c-txt-sm">平日:9:00~20:00</p>
                <p class="c-txt-sm">土日祝:9:00~19:00</p>
              </div>
              <div class="p-access__map item">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13294.424791215797!2d130.40662633372042!3d33.58957259174761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191942250e0dd%3A0x7a79d2c5edd8fafe!2zUml2Um91bmQg5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1634181349900!5m2!1sja!2sjp"
                  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="more-btn">
                <a target="_blank" href="https://goo.gl/maps/dtVSzDV7JT8DrTzo6"
                  class="more-btn__link slide-bg animsition-link">
                  <span class="c-txt-sm">Google Map</span>
                  <span class="bg"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-access -->
      <section class="p-instagram">
        <div class="c-container appear up">
          <h2 class="p-title clip-js left">
            <span class="en">INSTAGRAM</span>
            <span class="ja">インスタグラム</span>
          </h2>
          <div class="p-instagram__img item">
            <a href="https://www.instagram.com/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/images/home/first.jpg" alt=""></a>
            <a href="https://www.instagram.com/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/images/home/staff-top.jpg" alt=""></a>
            <a href="https://www.instagram.com/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/images/home/topview-1@pc.jpg" alt=""></a>
          </div>
          <div class="p-instagram__desc item">
            <p class="c-txt-sm">インスタグラムはレッスンの光景等をアップしてますので是非一度ご覧下さい。</p>
          </div>
          <div class="more-btn item">
            <a target="_blank" href="https://www.instagram.com/?hl=ja" class="more-btn__link slide-bg animsition-link">
              <span class="c-txt-sm">Follow Us</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </section>
      <!-- /.p-instagram -->
      <section class="p-voices">
        <div class="c-container appear up">
          <h2 class="p-title clip-js left">
            <span class="en">VOICES</span>
            <span class="ja">受講者の声</span>
          </h2>
          <ul>
            <li id="voice01" class="p-voices__item item">
              <div class="p-voices__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/icon-woman.png" alt="">
              </div>
              <div class="p-voices__desc">
                <p class="name c-txt-sm">R.O様 / 42才 主婦女性</p>
                <p class="tit c-txt-sm">結婚式で曲を披露できるよう練習中。<br></p>
                <p class="desc c-txt-sm">
                  レッスン開始当時は楽譜を見ながらゆっくり弾くので精一杯でしたが、開始から約半年、ようやく原曲の速度で右手で弾くことができるようになってきました。<br>目標があるため、完璧に弾けるようになることを考えるとわくわくします。
                  現在は左手も合わせて弾く練習を始めているところで、着実に進んでおりレッスンや自宅での練習が楽しく感じます。
                </p>
              </div>
            </li>
            <li id="voice02" class="p-voices__item item">
              <div class="p-voices__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/icon-men.png" alt="">
              </div>
              <div class="p-voices__desc">
                <p class="name c-txt-sm">A.I様 / 32才 会社員男性</p>
                <p class="tit c-txt-sm">自分にはできないと思っていたものが、聴く人に感動を与えられるものになりました。<br></p>
                <p class="desc c-txt-sm">
                  シアーに通う前はピアノが全く弾けず、最初はとても苦労しましたが、とても分かりやすく教えていただき、１年足らずで１曲が初めて弾けたときはとても嬉しかったことを覚えています。<br>
                  その後、初めてイベントで弾き語りを披露し、ここまでがんばってきて本当に良かったと感じました。
                </p>
              </div>
            </li>
          </ul>
          <div class="more-btn item">
            <a href="/faq/faq.html" class="more-btn__link slide-bg animsition-link">
              <span class="c-txt-sm">よくあるご質問へ</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </section>
      <!-- /.p-voices -->
      <section class="p-news">
        <div class="c-container appear up">
          <h2 class="p-title clip-js left">
            <span class="en">news</span>
            <span class="ja">お知らせ</span>
          </h2>
          <ul class="p-news__list item">
            <?php query_posts('posts_per_page=3'); ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <li class="p-news__item">
                <a class="p-news__link animsition-link" href="<?php the_permalink() ;?>">
                  <span class="thumbnail"><?php the_post_thumbnail(); ?></span>
                  <span class="c-txt-sm"><?php the_date(); ?></span>
                  <p class="c-txt-sm"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <div class="readmore item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">
              <span>お知らせ一覧</span></a>
          </div>
        </div>
      </section>
      <!-- /.p-news -->
    </main>
    <!-- /#main-contents -->
    <?php get_footer(); ?>

  </div>
  <?php get_template_part('includes/c-footer'); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
</body>

</html>