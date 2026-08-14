<?php get_header(); ?>

<!-- Main Visual -->
<section class="l-main-visual">
  <div class="l-main-visual__title">
    <h1 class="l-main-visual__title-ja" data-aos="fade-up">採用情報</h1>
    <p class="l-main-visual__title-en">Recruit</p>
  </div>
</section>

<!-- カスタムパンくずリスト -->
<div class="breadcrumb-container u-hover" data-aos="fade-up">
  <nav class="breadcrumb">
    <a href="<?php echo home_url('/'); ?>">TOP</a>
    <span class="sep" data-aos="fade-up">&gt;</span>
    <span>採用情報</span>
  </nav>
</div>


<!-- たいせつにしていることセクション -->
<section class="p-recruit-page__motto">

  <div class="p-recruit-page__icon-wrap">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/svg/cherry-tree.svg"
      alt=""
      class="p-recruit-page__icon"
      loading="lazy"
      data-aos="fade-up">
  </div>

  <div class="p-recruit-page__heading">
    <h2 class="p-recruit-page__title">たいせつにしていること</h2>
    <p class="p-recruit-page__subtitle">Motto</p>
  </div>

  <div class="p-recruit-page__motto-list">

    <!-- テレコ１個目 -->
    <article class="p-recruit-page__motto-item">
      <div class="p-recruit-page__motto-img">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/recruit/motto-img1.webp"
          alt="子ども主体の保育の様子"
          class="p-recruit-page__motto-image">
      </div>

      <div class="p-recruit-page__motto-content">
        <h3 class="p-recruit-page__motto-title">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/recruit/title-cherry.webp"
            alt=""
            class="p-recruit-page__motto-title-icon">
          <span>子ども主体の保育</span>
        </h3>

        <p class="p-recruit-page__motto-text">
          変化に富んだ現代において、子どもたち一人ひとりの“個性”と“未来を切り拓く力”を育むため、子ども主体の豊かな保育を実践しています。<br>
          子どもは一人ひとりが可能性にあふれた有能な学び手。<br>
          保育者はさまざまなアイデアを出し合い、子どもたちのやりたいこと、興味があることを最大限に引き出します。<br>
          単に知識を教えるのではなく、自ら取り組む楽しさから学びへの意欲を呼び起こす、非認知能力に主眼を置いた取り組みを進めています。
        </p>
      </div>
    </article>


    <!-- テレコ２個目 -->
    <article class="p-recruit-page__motto-item is-reverse">
      <div class="p-recruit-page__motto-img">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/recruit/motto-img2.webp"
          alt="自由な風土を表す様子"
          class="p-recruit-page__motto-image">
      </div>

      <div class="p-recruit-page__motto-content">
        <h3 class="p-recruit-page__motto-title">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/recruit/title-cherry.webp"
            alt=""
            class="p-recruit-page__motto-title-icon">
          <span>自由な風土</span>
        </h3>

        <p class="p-recruit-page__motto-text">
          保育者が思い思いの先進的な保育を実践できる、自由度の高さが桜のこもれびの特長。古い慣習にとらわれることなく誰もが意見を発信できる、風通しの良い園づくりを行っています。<br>
          園を創るのは保育者一人ひとりの個性。<br>
          楽しく仲間と助け合いながらアイデアを実現できる風土を大事にしています。<br>
          一方で、本部部門には専門家との共創や優れた保育の実践例を体系化する仕組みがあり、本部と連携することでさらに豊かな保育を実践することができます。
        </p>
      </div>
    </article>


    <!-- テレコ３個目 -->
    <article class="p-recruit-page__motto-item">
      <div class="p-recruit-page__motto-img">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/recruit/motto-img3.webp"
          alt="ワークライフバランスを大切にしている様子"
          class="p-recruit-page__motto-image">
      </div>

      <div class="p-recruit-page__motto-content">
        <h3 class="p-recruit-page__motto-title">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/recruit/title-cherry.webp"
            alt=""
            class="p-recruit-page__motto-title-icon">
          <span>ワークライフバランス</span>
        </h3>

        <p class="p-recruit-page__motto-text">
          大事にしているのは「安心して働き続けていける会社」であること。<br>
          桜のこもれびでは、働き方の多様化や学びの支援など、<br>
          ワークライフバランスを大切にした環境づくりに努めています。<br>
          働く人を大事にすることが、質の高い保育につながると考えています。
        </p>
      </div>
    </article>

  </div>

</section>


<!-- 募集要項セクション -->
<section class="p-recruit-page__requirements">

  <div class="p-recruit-page__icon-wrap">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/svg/light.svg"
      alt=""
      class="p-recruit-page__icon"
      loading="lazy"
      data-aos="fade-up">
  </div>

  <div class="p-recruit-page__heading">
    <h2 class="p-recruit-page__title">募集要項</h2>
    <p class="p-recruit-page__subtitle">Requirements</p>
  </div>

  <!-- 募集要項の表 -->
  <div class="p-recruit-page__requirements-table">
    <div class="p-recruit-page__requirements-table__inner">
      <dl class="p-recruit-page__req-list">

        <div class="p-recruit-page__req-item">
          <dt class="p-recruit-page__req-term">勤務地</dt>
          <dd class="p-recruit-page__req-desc">
            桜のこもれびキッズランドの各園のいずれか<br>
            <span class="p-recruit-page__req-note">※ご希望の勤務地やお住まいの住所から近い園を優先的にご案内します。</span>
          </dd>
        </div>

        <div class="p-recruit-page__req-item">
          <dt class="p-recruit-page__req-term">勤務時間</dt>
          <dd class="p-recruit-page__req-desc">
            7:00～18:30のシフト制（延長時間あり）<br>
            9h拘束、実働8時間<br>
            出勤する時間と曜日で基本給が変わります
          </dd>
        </div>

        <div class="p-recruit-page__req-item">
          <dt class="p-recruit-page__req-term">応募資格</dt>
          <dd class="p-recruit-page__req-desc">
            資格をお持ちの方。<br>
            <span class="p-recruit-page__req-note">※資格取得見込みの方はお気軽にご相談ください。</span>
          </dd>
        </div>

        <div class="p-recruit-page__req-item">
          <dt class="p-recruit-page__req-term">処遇</dt>
          <dd class="p-recruit-page__req-desc">
            月給 20万～25万（各種手当含む）<br>
            時給制 1120円～1450円（勤務時間・勤務曜日は相談可）<br>
            勤務シフトは常勤・非常勤併せて100パターン以上あります。あなたの希望に合う勤務時間を選んで働けます。
          </dd>
        </div>

        <div class="p-recruit-page__req-item">
          <dt class="p-recruit-page__req-term">賞与</dt>
          <dd class="p-recruit-page__req-desc">
            年2回※月給制の方に限ります。<br>
            期末賞与：対象年度の実績に応じて支給
          </dd>
        </div>

        <div class="p-recruit-page__req-item">
          <dt class="p-recruit-page__req-term">休日</dt>
          <dd class="p-recruit-page__req-desc">
            土日祝日<br>
            または<br>
            月間10日を選べます。
          </dd>
        </div>

        <div class="p-recruit-page__req-item p-recruit-page__req-item-big-pb">
          <dt class="p-recruit-page__req-term">保険</dt>
          <dd class="p-recruit-page__req-desc">
            厚生年金・健康保険・雇用保険・労災保険 完備
          </dd>
        </div>

        <div class="p-recruit-page__req-item">
          <dt class="p-recruit-page__req-term">手当</dt>
          <dd class="p-recruit-page__req-desc">
            延長保育手当・皆勤手当・担当手当など
          </dd>
        </div>

        <div class="p-recruit-page__req-item">
          <dt class="p-recruit-page__req-term">昇給</dt>
          <dd class="p-recruit-page__req-desc">
            年一回（業績評価による）
          </dd>
        </div>

        <div class="p-recruit-page__req-item">
          <dt class="p-recruit-page__req-term">休暇</dt>
          <dd class="p-recruit-page__req-desc">
            年末年始・産前産後休暇・育児休暇・看護休暇制度あり
          </dd>
        </div>

        <div class="p-recruit-page__req-item">
          <dt class="p-recruit-page__req-term">その他</dt>
          <dd class="p-recruit-page__req-desc">
            交通費全額支給。予防接種補助など福利厚生充実。
          </dd>
        </div>

      </dl>
    </div>
  </div>

</section>














<!-- よくある質問セクション -->
<section class="p-recruit-page__faq">

  <div class="p-recruit-page__icon-wrap">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/svg/question-mark.svg"
      alt=""
      class="p-recruit-page__icon"
      loading="lazy"
      data-aos="fade-up">
  </div>

  <div class="p-recruit-page__heading">
    <h2 class="p-recruit-page__title">よくある質問</h2>
    <p class="p-recruit-page__subtitle">FAQ</p>
  </div>

  <!-- よくある質問アコーディオン -->
  <div class="p-recruit-page__faq-list">
    <div class="p-recruit-page__faq-list__inner">

      <div class="c-accordion">
        <!-- アコーディオン１項目目 -->
        <div class="u-hover">
          <div class="c-accordion__item" data-aos="fade-up">
            <button class="c-accordion__question accordion-header active">
              スタッフの資格や経験について教えてください。
              <span class="accordion-icon">▼</span>
            </button>
            <div class="c-accordion__answer accordion-content">
              <p>当園のスタッフは、保育士や幼稚園教諭など、保育に関する専門的な資格を持つ人材です。また、多彩な経験を持ち、子どもたちとの信頼関係を築きながら、安心して成長できる環境を提供しています。定期的な研修やワークショップを通じて、スキルや知識の向上に努めています。</p>
            </div>
          </div>
        </div>

        <!-- アコーディオン２項目目 -->
        <div class="u-hover">
          <div class="c-accordion__item" data-aos="fade-up">
            <button class="c-accordion__question accordion-header">
              子どもたちに提供される食事や健康管理について教えてください。
              <span class="accordion-icon">▼</span>
            </button>
            <div class="c-accordion__answer accordion-content">
              <p>当園では、バランスの取れた食事や健康管理に特に配慮しています。栄養士の監修のもと、子どもたちの成長に必要な栄養を考慮した食事を提供しています。また、日々の健康管理や安全管理にも十分な配慮をし、保護者の皆様に安心してお子さまをお預けいただける環境を整えています。</p>
            </div>
          </div>
        </div>

        <!-- アコーディオン３項目目 -->
        <div class="u-hover">
          <div class="c-accordion__item" data-aos="fade-up">
            <button class="c-accordion__question accordion-header">
              保護者とのコミュニケーションはどのように行われていますか？
              <span class="accordion-icon">▼</span>
            </button>
            <div class="c-accordion__answer accordion-content">
              <p>当園では、保護者との密なコミュニケーションを大切にしています。定期的な面談や保護者会、またはLINEやメールなどのSNSを通じて、子どもたちの様子や日々の過ごし方についての情報共有を行っています。保護者の皆様との信頼関係を築きながら、お子さまの成長を共にサポートしています。</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>


<!-- フォーム -->
<section class="p-recruit-page__contact">

  <div class="p-recruit-page__contact-form">
    フォーム
  </div>

</section>


<?php the_content(); ?>

<?php get_footer(); ?>