<?php get_header(); ?>

<!-- Main Visual -->
<section class="l-main-visual l-main-visual-confirm">
  <div class="l-main-visual__title">
    <h1 class="l-main-visual__title-ja" data-aos="fade-up">お問い合わせ</h1>
    <p class="l-main-visual__title-en">Contact</p>
  </div>
</section>

<!-- フォーム確認画面 -->
<section class="p-contact__contact">

  <div class="p-contact__contact-container" data-aos="fade-up">
    <div class="p-contact__contact-inner">

      <!-- 確認フォーム本体 -->
      <form action="" method="post" class="p-form">

        <dl class="p-form__list">

          <!-- お名前 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>お名前</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">山田 太郎</p>
            </dd>
          </div>

          <!-- お子様のご年齢 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>お子様のご年齢</span>
              <span class="p-form__badge is-optional">任意</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">3歳</p>
            </dd>
          </div>

          <!-- ご住所 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>ご住所</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input p-form__address-group">
              <p class="p-form__confirm-text">郵便番号：000-0000</p>
              <p class="p-form__confirm-text">都道府県：東京都</p>
              <p class="p-form__confirm-text">市区町村：渋谷区〇〇市</p>
              <p class="p-form__confirm-text">番地、建物名：0-0-0</p>
            </dd>
          </div>

          <!-- 電話番号 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>電話番号</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">000-0000-0000</p>
            </dd>
          </div>

          <!-- メールアドレス -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>メールアドレス</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">example@gmail.com</p>
            </dd>
          </div>

          <!-- お問い合わせの保育園 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>お問い合わせの保育園</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">渋谷園</p>
            </dd>
          </div>

          <!-- お問い合わせ内容 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>お問い合わせ内容</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">
                お問い合わせ内容が入ります。
              </p>
            </dd>
          </div>

        </dl>

        <!-- プライバシーポリシー同意 -->
        <div class="p-form__privacy p-form__privacy-contact sp_only">
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
          <button type="submit" class="p-form__submit-btn">
            <span>送信</span>
            <span class="p-form__submit-arrow">&gt;</span>
          </button>
        </div>

      </form>

    </div>
  </div>

</section>

<?php get_footer(); ?>