<?php
 /* Template Name: contact
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>お問い合わせ | ピアノ教室テンプレート1</title>
  <?php get_header(); ?>

</head>

<body class="animsition">
  <div class="superwrapper c-contact">
    <?php get_template_part('includes/c-header'); ?>
    <section class="c-topview">
      <div class="c-topview__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/topview-2@pc.jpg" alt="">
      </div>
      <div class="c-container">
        <h2 class="c-title">
          <span class="en">contact</span>
          <span class="ja">お問い合わせ</span>
        </h2>
        <p class="c-txt-sm">初めての方、<br>まずはお気軽に体験してみませんか？<br>経験豊富な講師が丁寧に教えます。</p>
      </div>
    </section>
    <!-- /.c-topview -->
    <div class="contact-form">
      <div class="c-container">
        <p class="c-contact-text">以下必要事項をご記入の上、「送信する」ボタンを押して下さい。</p>
        
      </div>
    </div>
    <?php get_footer(); ?>

  </div>
  <?php get_template_part('includes/c-footer'); ?>
</body>

</html>