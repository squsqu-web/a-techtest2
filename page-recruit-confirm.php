<?php get_header(); ?>

<!-- Main Visual -->
<section class="l-main-visual l-main-visual-confirm">
  <div class="l-main-visual__title">
    <h1 class="l-main-visual__title-ja" data-aos="fade-up">採用情報</h1>
    <p class="l-main-visual__title-en">Recruit</p>
  </div>
</section>



<!-- フォーム確認画面 -->
<section class="p-recruit-page__contact">



  <div class="p-recruit-page__contact-container" data-aos="fade-up">
    <div class="p-recruit-page__contact-inner">
      
      <!-- 確認フォーム本体（確認画面用の構造） -->
      <form action="" method="post" class="p-form">
        <dl class="p-form__list">

          <!-- お問い合わせ内容 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>お問い合わせ内容</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">園の見学をしたい<br>その他のお問い合わせ内容がここに入ります。</p>
            </dd>
          </div>

          <!-- 卒業予定年月 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>卒業予定年月</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">2024年3月</p>
            </dd>
          </div>

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

          <!-- ふりがな -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>ふりがな</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">やまだ たろう</p>
            </dd>
          </div>

          <!-- 生年月日 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>生年月日</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">2001年4月1日</p>
            </dd>
          </div>

          <!-- 性別 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>性別</span>
              <span class="p-form__badge is-optional">任意</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">男性</p>
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

          <!-- 学校名 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>学校名</span>
              <span class="p-form__badge is-optional">任意</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">〇〇大学</p>
            </dd>
          </div>

          <!-- 学科名 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>学科名</span>
              <span class="p-form__badge is-optional">任意</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">〇〇学部</p>
            </dd>
          </div>

          <!-- 希望職種 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>希望職種</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">保育士（保育士免許あり）</p>
            </dd>
          </div>

          <!-- 希望雇用形態 -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>希望雇用形態</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">正社員</p>
            </dd>
          </div>

          <!-- 希望就業エリア -->
          <div class="p-form__item">
            <dt class="p-form__label">
              <span>希望就業エリア</span>
              <span class="p-form__badge is-required">必須</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">都内</p>
            </dd>
          </div>

          <!-- ご要望・ご質問 -->
          <div class="p-form__item p-form__input__confirm-text">
            <dt class="p-form__label">
              <span>ご要望・ご質問</span>
              <span class="p-form__badge is-optional">任意</span>
            </dt>
            <dd class="p-form__input">
              <p class="p-form__confirm-text">お問い合わせ内容が入ります。</p>
            </dd>
          </div>

        </dl>

        <!-- 送信ボタン（確認画面用：送信ボタン） -->
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