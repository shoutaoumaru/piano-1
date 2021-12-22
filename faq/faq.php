<?php
 /* Template Name: faq
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>よくあるご質問 | ピアノ教室1</title>
  <?php get_header(); ?>

</head>

<body class="animsition">
  <div class="faq-wrapper">
    <?php get_template_part('includes/c-header'); ?>
    <section class="c-topview">
      <div class="c-topview__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/faq.jpg" alt="">
      </div>
    </section>
    <!-- /.c-topview -->
    <div class="faq-contents">
      <div class="c-container">
        <div class="faq">
          <div class="faq__inner">
            <h2 class="c-title">
              <span class="en">faq</span>
              <span class="ja">よくあるご質問</span>
            </h2>
            <div class="c-txtarea01">
              <p class="c-txt-sm">Riv教室に今までにお寄せいただきましたご質問を掲載いたします。<br>もしお求めのご質問が見当たらないようでしたら、お気軽にお問い合わせください。</p>
            </div>
            <dl class="faq__block">
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-sm">初心者や小さな子供でも大丈夫？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-sm">
                      当ピアノ教室では、2歳以上の方であれば、子供から大人、お年寄りの方まで、老若男女幅広くレッスンさせていただきます。
                      まったくのピアノ初心者の方でも、あるいは経験者の方でも、その方のレベルや目的に合わせたレッスンを行いますので、経験や年齢でのご心配はいりません。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-sm">レッスンは何曜日ですか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-sm">基本的にご都合をお聞きしながら予定を組み立てていきますが、決まった曜日の決まった時間になる場合が多いです。
                      レッスンスケジュールも併せてご確認ください。</p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-sm">レッスンの振替はありますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-sm">
                      前日までにご連絡さえいただければ、できる限り振り替えをおこなっています。当日連絡や連絡なしでお休みされた場合は、基本的に振替はございません。
                      豪雨や台風、降雪などやむを得ない理由の場合は、ご相談させていただきながら振替日を決めていきます。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-sm">
                    ピアノ発表会はありますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-sm">基本的に年一度の発表会を予定していますが、近年は会場予約の競争率が高くなっており、必ず年一度というわけにはいかないこともあります。
                    </p>
                  </div>
                </dd>
              </div>
            </dl>
          </div>
          <div class="more-btn">
            <a target="_blank" href="<?php echo esc_url( home_url('/contact')); ?>" class="more-btn__link slide-bg">
              <span class="c-txt-sm">無料体験はこちら</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.fq-contents -->
    <?php get_footer(); ?>

  </div>
  <!-- /.main-wrapper -->
  <?php get_template_part('includes/c-footer'); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/accordion.js"></script>
</body>

</html>