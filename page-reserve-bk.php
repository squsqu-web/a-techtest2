<?php get_header(); ?>

<main>
  <!-- Main Visual -->
  <section class="l-main-visual">
    <h2 class="l-main-visual__title">RESERVE</h2>
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/img/reserve_top-sp.jpg" media="(max-width: 767px)" type="image/jpeg">
      <source srcset="<?php echo get_template_directory_uri(); ?>/img/reserve_top-pc.jpg" media="(min-width: 768px)" type="image/jpeg">
      <img src="<?php echo get_template_directory_uri(); ?>/img/reserve_top-pc.jpg" alt="メインビジュアル画像" class="l-main-visual__img">
    </picture>
  </section>

  <!-- Reserve Form -->
  <section class="p-reserve-form">
    <!-- 未成年案内 -->
    <article class="p-reserve-form__minor c-minor-notice">
      <div class="p-reserve-form__minor__text">
        <h3 class="c-minor-notice__title">未成年のお客様は必ずお読みください</h3>
        <p class="c-minor-notice__text">
          脱毛箇所を問わず、未成年のお客様が施術を受けるためには、保護者の同意が必要です。
          「未成年契約同意書」をダウンロードし、保護者にご記入いただいた上で初回ご来店時に持参ください。
        </p>
      </div>

      <div class="c-minor-download">
        <h4 class="c-minor-download__title">未成年契約同意書</h4>
        <a href="#" class="c-minor-download__link">Download</a>
      </div>
    </article>

    <!-- 電話問い合わせ案内 -->
    <article class="p-reserve-form__contact">
      <div class="c-contact-description">
        <h3 class="c-contact-description__title">TEL</h3>
        <p class="c-contact-description__text">
          サービス・料金の質問や無料体験のご予約などを希望の方は、ご希望の店舗にお問い合わせください。
          なお、施術中は、お電話に対応することができない可能性がありますので、あらためてお電話いただくか、
          メールフォームからお問い合わせください。
        </p>
      </div>
      <div class="c-contact-info">
        <p class="c-contact-info__number">01-2345-6789</p>
        <p class="c-contact-info__time">9:00～22:00 定休日なし</p>
      </div>
    </article>
  </section>

  <div class="form-blck">
    <!-- メールフォーム案内 -->
    <section class="p-reserve-mailform">
      <div class="p-reserve-mailform__intro">
        <h3 class="p-reserve-mailform__intro-title">MAIL FORM</h3>
        <p class="p-reserve-mailform__intro-text">
          脱毛の無料体験や施術のご予約などをご希望の方は、<br>
          以下のフォームに必要事項を入力の上でお問い合わせください。<br>
          なお、当日または翌日のご予約を希望の方は、お電話で問い合わせください。
        </p>
      </div>

      <!-- フォームステップ -->
      <div class="c-form-steps">
        <div class="c-form-steps__item is-current">
          <h5 class="c-form-steps__step-title">Step 01</h5>
          <p class="c-form-steps__step-text">内容入力</p>
        </div>
        <div class="c-form-steps__item">
          <h5 class="c-form-steps__step-title">Step 02</h5>
          <p class="c-form-steps__step-text">確認画面</p>
        </div>
        <div class="c-form-steps__item">
          <h5 class="c-form-steps__step-title">Step 03</h5>
          <p class="c-form-steps__step-text">送信完了</p>
        </div>
      </div>
    </section>

    <!-- 入力フォーム -->
    <form action="" class="p-reserve-input">
      <section class="p-reserve-input__wrapper">
        <div class="p-reserve-input__block">
          <label class="p-reserve-input__label"><span class="p-reserve-input__required">必須</span>お名前</label>
          <input type="text" class="p-reserve-input__field">
        </div>

        <div class="p-reserve-input__block">
          <label class="p-reserve-input__label"><span class="p-reserve-input__required">必須</span>ふりがな</label>
          <input type="text" class="p-reserve-input__field">
        </div>

        <div class="p-reserve-input__block">
          <label class="p-reserve-input__label"><span class="p-reserve-input__optional">任意</span>電話番号</label>
          <input type="text" class="p-reserve-input__field">
        </div>

        <div class="p-reserve-input__block">
          <label class="p-reserve-input__label"><span class="p-reserve-input__required">必須</span>メールアドレス</label>
          <input type="text" class="p-reserve-input__field">
        </div>

        <div class="p-reserve-input__block">
          <label class="p-reserve-input__label"><span class="p-reserve-input__required">必須</span>ご希望の連絡方法</label>
          <input type="text" class="p-reserve-input__field">
        </div>

        <!-- ご希望の連絡時間帯 -->
        <div class="p-reserve-input__block">
          <label class="p-reserve-input__label"><span class="p-reserve-input__required">必須</span> ご希望の連絡時間帯</label>
          <div class="p-reserve-input__checkbox-group">
            <!-- <div class="checkbox-top-day">平日</div> -->
            <div class="p-reserve-input__checkbox-row checkbox-top">
              <label>平日 <input type="checkbox" name="contact_time[]" value="weekday-morning" class="checkbox"> 10:00-13:00</label>
              <!-- <label><input type="checkbox" name="contact_time[]" value="weekday-morning" class="checkbox"> 10:00-13:00</label> -->
              <label><input type="checkbox" name="contact_time[]" value="weekday-afternoon" class="checkbox"> 13:00-17:00</label>
              <label><input type="checkbox" name="contact_time[]" value="weekday-evening" class="checkbox"> 17:00以降</label>
            </div>
            <div class="p-reserve-input__checkbox-row">
              <label>休日 <input type="checkbox" name="contact_time[]" value="holiday-morning" class="checkbox"> 10:00-13:00</label>
              <label><input type="checkbox" name="contact_time[]" value="holiday-afternoon" class="checkbox"> 13:00-17:00</label>
              <label><input type="checkbox" name="contact_time[]" value="holiday-evening" class="checkbox"> 17:00以降</label>
            </div>
          </div>
        </div>

        <!-- お問い合わせ項目 -->
        <div class="p-reserve-input__block">
          <label class="p-reserve-input__label"><span class="p-reserve-input__required">必須</span> お問い合わせ項目</label>
          <div class="p-reserve-input__checkbox-group">
            <div class="p-reserve-input__checkbox-row checkbox__bottom checkbox__bottom-box checkbox-top ">
              <label><input type="checkbox" name="inquiry[]" value="question" class="checkbox"> 施術のご予約</label>
              <label><input type="checkbox" name="inquiry[]" value="reservation" class="checkbox"> 無料体験のご予約</label>
            </div>
            <div class="p-reserve-input__checkbox-row checkbox__bottom checkbox__bottom-box">
              <label><input type="checkbox" name="inquiry[]" value="trial" class="checkbox"> 無料体験のご予約</label>
              <label><input type="checkbox" name="inquiry[]" value="other" class="checkbox"> その他</label>
            </div>
          </div>
        </div>

        <!-- 希望店舗 -->
        <div class="p-reserve-input__block">
          <label class="p-reserve-input__label"><span class="p-reserve-input__required">必須</span>希望店舗</label>
          <input type="text" class="p-reserve-input__field p-reserve-input__field--half">
        </div>

        <!-- 来店希望日 -->
        <div class="p-reserve-input__block">
          <label class="p-reserve-input__label"><span class="p-reserve-input__required">必須</span>来店希望日（第一希望）</label>
          <input type="text" class="p-reserve-input__field p-reserve-input__field--half">
        </div>

        <div class="p-reserve-input__block">
          <label class="p-reserve-input__label"><span class="p-reserve-input__required">必須</span>来店希望日（第二希望）</label>
          <input type="text" class="p-reserve-input__field p-reserve-input__field--half">
        </div>

        <!-- お問い合わせ内容 -->
        <div class="p-reserve-input__block">
          <label class="p-reserve-input__label"><span class="p-reserve-input__required">必須</span>お問い合わせ内容</label>
          <textarea class="p-reserve-input__textarea"></textarea>
        </div>

        <p class="p-reserve-input__note">※ ご希望の日時で予約することができない可能性がありますので、ご了承ください</p>

        <input type="submit" value="確認" class="p-reserve-input__submit">
      </section>
    </form>
  </div>
</main>

<?php the_content(); ?>

<?php get_footer(); ?>