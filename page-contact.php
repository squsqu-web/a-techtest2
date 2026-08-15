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
      <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">
        弊社への登録に際して、お預かりする個人情報の扱いについて
      </a>
    </p>
  </div>
</section>

<!-- フォーム -->
<section class="p-contact__form">

  <div class="p-contact__form-container" data-aos="fade-up">

    <div class="p-contact__form-inner">

      <form action="" method="post" class="p-form">

        <dl class="p-form__list">

          <!-- お名前 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>お名前</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>

            <dd class="p-form__input">
              <input
                type="text"
                name="your_name"
                class="p-form__text p-form__text-contact">
            </dd>
          </div>

          <!-- お子様のご年齢 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>お子様のご年齢</span>
              <span class="p-form__badge is-optional">任意</span>
            </dt>

            <dd class="p-form__input">
              <input
                type="text"
                name="child_age"
                class="p-form__text">
            </dd>
          </div>

          <!-- ご住所 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>ご住所</span>
              <span class="p-form__badge is-optional">任意</span>
            </dt>

            <dd class="p-form__input p-form__address-group">

              <div class="p-form__address-row">
                <span class="p-form__address-sublabel">郵便番号</span>
                <input
                  type="text"
                  name="postal_code"
                  class="p-form__text">
              </div>

              <div class="p-form__address-row">
                <span class="p-form__address-sublabel">都道府県</span>
                <input
                  type="text"
                  name="prefecture"
                  class="p-form__text">
              </div>

              <div class="p-form__address-row">
                <span class="p-form__address-sublabel">市区町村</span>
                <input
                  type="text"
                  name="city"
                  class="p-form__text">
              </div>

              <div class="p-form__address-row">
                <span class="p-form__address-sublabel">番地、建物名</span>
                <input
                  type="text"
                  name="address_rest"
                  class="p-form__text">
              </div>

            </dd>
          </div>

          <!-- 電話番号 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>電話番号</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>

            <dd class="p-form__input">
              <input
                type="tel"
                name="tel"
                class="p-form__text">
            </dd>
          </div>

          <!-- メールアドレス -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>メールアドレス</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>

            <dd class="p-form__input">
              <input
                type="email"
                name="email"
                class="p-form__text">
            </dd>
          </div>

          <!-- お問い合わせの保育園 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>お問い合わせの保育園</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>

            <dd class="p-form__input">
              <input
                type="text"
                name="nursery_name"
                class="p-form__text">
            </dd>
          </div>

          <!-- お問い合わせ内容 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>お問い合わせ内容</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>

            <dd class="p-form__input">
              <textarea
                name="contact_other_text"
                class="p-form__textarea p-form__textarea--small p-form__textarea-contact"></textarea>
            </dd>
          </div>

        </dl>

        <!-- プライバシーポリシー同意 -->
        <div class="p-form__privacy p-form__privacy-contact">
          <label class="p-form__privacy-label p-form__privacy-label-contact">
            <input
              type="checkbox"
              name="privacy_consent"
              value="同意する">

            <span class="p-form__privacy-text">利用規約と個人情報の<br class="sp_only">取り扱いについて同意する</span>
          </label>
          <span class="p-form__badge is-required badge-privacy">必須</span>
        </div>

        <!-- 送信ボタン -->
        <div class="p-form__submit-wrap">
          <button
            type="submit"
            class="p-form__submit-btn">
            <span>内容確認</span>
            <span class="p-form__submit-arrow">&gt;</span>
          </button>
        </div>

      </form>

    </div>

  </div>

</section>

<?php get_footer(); ?>