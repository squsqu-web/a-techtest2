<?php get_header(); ?>

<!-- Main Visual -->
<section class="l-main-visual">
  <div class="l-main-visual__title">
    <h1 class="l-main-visual__title-ja" data-aos="fade-up">お問い合わせ</h1>
    <p class="l-main-visual__title-en">Contact</p>
  </div>
</section>

<!-- パンくずリスト -->
<div class="breadcrumb-container u-hover" data-aos="fade-up">
  <nav class="breadcrumb">
    <a href="<?php echo home_url('/'); ?>">TOP</a>
    <span class="sep">&gt;</span>
    <span>お問い合わせ</span>
  </nav>
</div>

<!-- ご案内 -->
<section class="p-contact__intro">
  <div class="p-contact__intro-inner">
    <p class="p-contact__intro-text">
      下記フォームにご記入の上、送信してください。折り返し、弊社担当よりご連絡させて頂きます。<br>
      また、ご入力頂きました個人に関する情報につきましては、弊社で責任をもって管理し、
      お問い合わせへのご回答及び弊社のサービス向上のために利用させて頂き、
      第三者への開示や他の目的で利用は致しません。
      詳しくは個人情報保護方針をご覧ください。
    </p>

    <p class="p-contact__intro-link">
      <a href="<?php echo esc_url(get_privacy_policy_url()); ?>">
        弊社への登録に際して、お預かりする個人情報の扱いについて
      </a>
    </p>
  </div>
</section>

<!-- フォーム -->
<section class="p-contact__form">
  <div class="p-contact__form-container" data-aos="fade-up">
    <div class="p-contact__form-inner">

      <?php the_content(); ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>