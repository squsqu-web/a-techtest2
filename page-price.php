<?php get_header(); ?>

<main class="price_menu">
  <div class="sticky-area">
    <section class="l-main-visual">
      <h1 class="l-main-visual__title" data-aos="fade-up">price menu</h1>
      <div class="sticky-wrapper">
        <picture class="">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/price-menu_top-sp.webp" type="image/webp" media="(max-width: 767px)">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/price-menu_top-sp.jpg"  type="image/jpeg" media="(max-width: 767px)">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/price-menu_top-pc.webp" type="image/webp" media="(min-width: 768px)">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/price-menu_top-pc.jpg"  type="image/jpeg" media="(min-width: 768px)">
          <!-- フォールバック -->
          <img src="<?php echo get_template_directory_uri(); ?>/img/price-menu_top-pc.jpg" alt="店内の雰囲気の様子">
        </picture>
      </div>
      <!-- <div class="sticky-space"></div> -->


      <div class="contents-overlap-wrapper">
        <!-- カスタムパンくずリスト -->
        <div class="breadcrumb-container">
          <nav class="breadcrumb  u-hover" data-aos="fade-up">
            <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
            <span class="sep" data-aos="fade-up">｜</span>
            <span href="<?php echo home_url('/price'); ?>">メニュー料金</span>
          </nav>
        </div>

        <section class="price__nav">
          <!-- sp用 -->
          <p class="price__nav-text sp_only" data-aos="fade-up">
            バレンタインローズは、<br>お客様のなりたい姿に合わせて<br>選択いただけるよう<br>「トライアルコース」<br>「減毛コース」<br>「脱毛コース」<br>の3種類のコースをご用意しています。<br>
            <br>トライアルコースは<br>脱毛効果を実感したい方に、<br>減毛コースは<br>体毛を薄くしたい・減らしたい方に、<br>脱毛コースは<br>施術箇所の体毛をすべて脱毛したい方に<br>おすすめのコースです。
          </p>

          <!-- pc用 -->
          <p class="price__nav-text pc_only" data-aos="fade-up">
            バレンタインローズは、お客様のなりたい姿に合わせて選択いただけるよう「トライアルコース」&nbsp;「減毛コース」&nbsp;「脱毛コース」の3種類のコースをご用意しています。<br>
            トライアルコースは脱毛効果を実感したい方に、減毛コースは体毛を薄くしたい・減らしたい方に、脱毛コースは施術箇所の体毛をすべて脱毛したい方におすすめのコースです。
          </p>
          <div class="price__nav-list">
            <div class="p-price__content">

              <div class="p-price__row p-price__row--top">
                <!-- Body -->
                <div class="p-price__row p-price__row--top__left" data-aos="fade-up">
                  <a href="#body">
                    <h3 class="p-price__content__title u-hover">body</h3>
                    <p class="p-price__content__title__ja price__body u-hover">体脱毛</p>
                  </a>
                </div>

                <i class="fa-solid fa-chevron-right boby-fa" data-aos="fade-up"></i>

                <!-- V-line -->
                <div class="p-price__row p-price__row--top__right" data-aos="fade-up">
                  <a href="#V-line">
                    <h3 class="p-price__content__title u-hover vvv-line">V-line</h3>
                    <p class="p-price__content__title__ja price__vio u-hover">VIO脱毛</p>
                  </a>
                </div>

                <i class="fa-solid fa-chevron-right vio-fa u-hover" data-aos="fade-up"></i>
              </div>

              <div class="p-price__row p-price__row--center">
                <!-- Custom -->
                <div class="p-price__row--center__left" data-aos="fade-up">
                  <a href="#custom" class="u-hover">
                    <h3 class="p-price__content__title u-hover">custom</h3>
                    <p class="p-price__content__title__ja price__custom-ja u-hover">オーダーメイド</p>
                  </a>
                </div>
                <i class="fa-solid fa-chevron-right custom-fa" data-aos="fade-up"></i>

                <!-- Set -->
                <div class="p-price__row--center__right" data-aos="fade-up">
                  <a href="#Set" class="u-hover">
                    <h3 class="p-price__content__title u-hover">set</h3>
                    <p class="p-price__content__title__ja price__set u-hover">セット脱毛</p>
                  </a>
                </div>

                <i class="fa-solid fa-chevron-right set-fa u-hover" data-aos="fade-up"></i>
              </div>

              <div class="p-price__row p-price__row--bottom" data-aos="fade-up">
                <!-- All -->
                <div class="p-price__row--bottom__left all-bottom">
                  <a href="<?php echo home_url('/price'); ?>" class="">
                    <h3 class="p-price__content__title u-hover">all</h3>
                    <p class="p-price__content__title__ja price__all u-hover">全てのメニュー</p>
                  </a>
                </div>
                <i class="fa-solid fa-chevron-right all-fa u-hover" data-aos="fade-up"></i>
                <div class="p-price__row--bottom__right">
                  <span class="empty"></span>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="price__detail">
          <!-- Bodyセクション -->
          <h2 class="price__detail-heading heading-body" id="body" data-aos="fade-up">body</h2>
          <article class="price__item">
            <h3 class="price__item-title" data-aos="fade-up">sパーツ</h3>
            <!-- pc -->
            <p class="price__item-description pc_only" data-aos="fade-up">
              おでこ・ほほ・口周り・あご下の首・うなじ・両脇・手の指&amp;甲・ 足の指&amp;甲・へそ周り・乳輪周り
            </p>

            <!-- sp -->
            <p class="price__item-description sp_only" data-aos="fade-up">
              おでこ・ほほ・口周り・あご下の首・ <br>うなじ・両脇・手の指&amp;甲・足の指&amp;甲・ <br>へそ周り・乳輪周り
            </p>

            <!-- ここからテーブルパーツ -->
            <div class="price__table-wrapper pc_only">
              <table class="price__table">
                <thead>
                  <tr>
                    <th data-aos="fade-up"></th>
                    <th data-aos="fade-up">トライアルコース(3回)</th>
                    <th data-aos="fade-up">減毛コース(6回)</th>
                    <th data-aos="fade-up">脱毛コース(12回)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="table-gothic" data-aos="fade-up">1箇所</td>
                    <td data-label="施術回数" class="table-price sp_only table-price-title" data-aos="fade-up">料金</td>
                    <td data-label="トライアルコース(3回)" class="table-price" data-aos="fade-up">7,600</td>
                    <td data-label="減毛コース(6回)" class="table-price" data-aos="fade-up">6,500</td>
                    <td data-label="脱毛コース(12回)" class="table-price" data-aos="fade-up">4,900</td>
                  </tr>

                </tbody>

              </table>
              <!-- sp用 -->
              <p class="price-guidance sp_only" data-aos="fade-up">※ 表の料金は、すべて税込表記で、<br>施術一回あたりの金額です。</p>
              <!-- pc用 -->
              <p class="price-guidance pc_only" data-aos="fade-up">※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
            </div>
            <!-- ここまでテーブルパーツ -->

            <!-- ここからspパーツ -->
            <div class="price-sp sp_only">
              <section class="price-sp-title">
                <h3 data-aos="fade-up">1箇所</h3>
              </section>

              <!-- １段目 -->
              <section class="price-sp-times">
                <div class="price-sp-row1st">
                  <p data-aos="fade-up">施術回数</p>
                  <h4 data-aos="fade-up" class="priceTitle">料金</h4>
                </div>
              </section>

              <!-- ２段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">トライアルコース(3回)</h4>
                  <p data-aos="fade-up">7,600 </p>
                </div>
              </section>

              <!-- ３段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">減毛コース(6回)</h4>
                  <p data-aos="fade-up">6,500 </p>
                </div>
              </section>

              <!-- ４段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">脱毛コース(12回)</h4>
                  <p data-aos="fade-up">4,900 </p>
                </div>
              </section>

              <!-- sp用 -->
              <p class="price-guidance sp_only" data-aos="fade-up">※ 表の料金は、すべて税込表記で、<br>施術一回あたりの金額です。</p>

            </div>
            <!-- ここまでspパーツ -->

          </article>


          <article class="price__item">
            <h3 class="price__item-title parts-m" data-aos="fade-up">mパーツ</h3>

            <!-- pc -->
            <p class="price__item-description pc_only" data-aos="fade-up">
              お腹全体・胸全体（乳輪周りを含む）・お尻・両腕上（肘含む）・ 両腕下・V（ハイジニーナ）
            </p>

            <!-- sp -->
            <p class="price__item-description sp_only" data-aos="fade-up">
              お腹全体・胸全体（乳輪周りを含む）・ <br>お尻・両腕上（肘含む）・ <br>両腕下・V（ハイジニーナ）
            </p>

            <!-- ここからテーブルパーツ -->
            <div class="price__table-wrapper pc_only">
              <table class="price__table">
                <thead>
                  <tr>
                    <th data-aos="fade-up"></th>
                    <th data-aos="fade-up">トライアルコース(3回)</th>
                    <th data-aos="fade-up">減毛コース(6回)</th>
                    <th data-aos="fade-up">脱毛コース(12回)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="table-gothic" data-aos="fade-up">1箇所</td>
                    <td data-label="トライアルコース(3回)" class="table-price" data-aos="fade-up">14,900 </td>
                    <td data-label="減毛コース(6回)" class="table-price" data-aos="fade-up">13,200 </td>
                    <td data-label="脱毛コース(12回)" class="table-price" data-aos="fade-up">9,900 </td>
                  </tr>
                </tbody>
              </table>
              <!-- sp用 -->
              <p class="price-guidance sp_only" data-aos="fade-up">※ 表の料金は、すべて税込表記で、<br>施術一回あたりの金額です。</p>
              <!-- pc用 -->
              <p class="price-guidance pc_only" data-aos="fade-up">※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
            </div>
            <!-- ここまでテーブルパーツ -->

            <!-- ここからspパーツ -->
            <div class="price-sp sp_only">
              <section class="price-sp-title">
                <h3 data-aos="fade-up">1箇所</h3>
              </section>

              <!-- １段目 -->
              <section class="price-sp-times">
                <div class="price-sp-row1st">
                  <p data-aos="fade-up">施術回数</p>
                  <h4 data-aos="fade-up" class="priceTitle">料金</h4>
                </div>
              </section>

              <!-- ２段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">トライアルコース(3回)</h4>
                  <p data-aos="fade-up">14,900 </p>
                </div>
              </section>

              <!-- ３段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">減毛コース(6回)</h4>
                  <p data-aos="fade-up">13,200 </p>
                </div>
              </section>

              <!-- ４段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">脱毛コース(12回)</h4>
                  <p data-aos="fade-up">9,900 </p>
                </div>
              </section>

              <!-- sp用 -->
              <p class="price-guidance sp_only" data-aos="fade-up">※ 表の料金は、すべて税込表記で、<br>施術一回あたりの金額です。</p>

            </div>
            <!-- ここまでspパーツ -->

          </article>

          <article class="price__item">
            <h3 class="price__item-title parts-l" data-aos="fade-up">lパーツ</h3>
            <p class="price__item-description" data-aos="fade-up">
              背中全体・両膝上（膝含む）・両膝下
            </p>

            <!-- ここからテーブルパーツ -->
            <div class="price__table-wrapper pc_only">
              <table class="price__table">
                <thead>
                  <tr>
                    <th data-aos="fade-up"></th>
                    <th data-aos="fade-up">トライアルコース(3回)</th>
                    <th data-aos="fade-up">減毛コース(6回)</th>
                    <th data-aos="fade-up">脱毛コース(12回)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="table-gothic" data-aos="fade-up">1箇所</td>
                    <td data-label="トライアルコース(3回)" class="table-price" data-aos="fade-up">22,800</td>
                    <td data-label="減毛コース(6回)" class="table-price" data-aos="fade-up">19,800</td>
                    <td data-label="脱毛コース(12回)" class="table-price" data-aos="fade-up">16,500</td>
                  </tr>
                </tbody>
              </table>
              <!-- sp用 -->
              <p class="price-guidance sp_only" data-aos="fade-up">※ 表の料金は、すべて税込表記で、<br>施術一回あたりの金額です。</p>
              <!-- pc用 -->
              <p class="price-guidance pc_only" data-aos="fade-up">※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
            </div>
            <!-- ここまでテーブルパーツ -->

            <!-- ここからspパーツ -->
            <div class="price-sp sp_only">
              <section class="price-sp-title">
                <h3 data-aos="fade-up">1箇所</h3>
              </section>

              <!-- １段目 -->
              <section class="price-sp-times">
                <div class="price-sp-row1st">
                  <p data-aos="fade-up">施術回数</p>
                  <h4 data-aos="fade-up" class="priceTitle">料金</h4>
                </div>
              </section>

              <!-- ２段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">トライアルコース(3回)</h4>
                  <p data-aos="fade-up">22,800 </p>
                </div>
              </section>

              <!-- ３段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">減毛コース(6回)</h4>
                  <p data-aos="fade-up">19,800 </p>
                </div>
              </section>

              <!-- ４段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">脱毛コース(12回)</h4>
                  <p data-aos="fade-up">16,500 </p>
                </div>
              </section>

              <!-- sp用 -->
              <p class="price-guidance sp_only" data-aos="fade-up">※ 表の料金は、すべて税込表記で、<br>施術一回あたりの金額です。</p>

            </div>
            <!-- ここまでspパーツ -->

          </article>

          <!-- V-lineセクション -->
          <h2 class="price__detail-heading heading-vio" id="V-line" data-aos="fade-up">V-line</h2>
          <article class="price__item">

            <!-- ここからテーブルパーツ -->
            <div class="price__table-wrapper pc_only">
              <table class="price__table">
                <thead>
                  <tr>
                    <th data-aos="fade-up"></th>
                    <th data-aos="fade-up" data-aos="fade-up">トライアルコース(3回)</th>
                    <th data-aos="fade-up" data-aos="fade-up">減毛コース(6回)</th>
                    <th data-aos="fade-up" data-aos="fade-up">脱毛コース(12回)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="table-gothic" data-aos="fade-up">1箇所</td>
                    <td data-label="トライアルコース(3回)" class="table-price" data-aos="fade-up">7,600</td>
                    <td data-label="減毛コース(6回)" class="table-price" data-aos="fade-up">6,500</td>
                    <td data-label="脱毛コース(12回)" class="table-price" data-aos="fade-up">4,900</td>
                  </tr>
                  <tr>
                    <td class="table-gothic" data-aos="fade-up">2箇所</td>
                    <td data-label="トライアルコース(3回)" class="table-price" data-aos="fade-up">14,900 </td>
                    <td data-label="減毛コース(6回)" class="table-price" data-aos="fade-up">13,200 </td>
                    <td data-label="脱毛コース(12回)" class="table-price" data-aos="fade-up">9,900 </td>
                  </tr>
                  <tr>
                    <td class="table-gothic" data-aos="fade-up">3箇所</td>
                    <td data-label="トライアルコース(3回)" class="table-price" data-aos="fade-up">22,800 </td>
                    <td data-label="減毛コース(6回)" class="table-price" data-aos="fade-up">19,800 </td>
                    <td data-label="脱毛コース(12回)" class="table-price" data-aos="fade-up">16,500 </td>
                  </tr>
                </tbody>
              </table>
              <!-- sp用 -->
              <p class="price-guidance sp_only" data-aos="fade-up">※ 表の料金は、すべて税込表記で、<br>施術一回あたりの金額です。</p>
              <!-- pc用 -->
              <p class="price-guidance pc_only" data-aos="fade-up">※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
            </div>
            <!-- ここまでテーブルパーツ -->

            <!-- ここからspパーツ -->
            <div class="price-sp sp_only">
              <section class="price-sp-title">
                <h3 data-aos="fade-up">1箇所</h3>
              </section>

              <!-- １段目 -->
              <section class="price-sp-times">
                <div class="price-sp-row1st">
                  <p data-aos="fade-up">施術回数</p>
                  <h4 data-aos="fade-up" class="priceTitle">料金</h4>
                </div>
              </section>

              <!-- ２段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">トライアルコース(3回)</h4>
                  <p data-aos="fade-up">7,600 </p>
                </div>
              </section>

              <!-- ３段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">減毛コース(6回)</h4>
                  <p data-aos="fade-up">6,500 </p>
                </div>
              </section>

              <!-- ４段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">脱毛コース(12回)</h4>
                  <p data-aos="fade-up">4,900 </p>
                </div>
              </section>

            </div>
            <!-- ここまでspパーツ -->

            <!-- ここからspパーツ -->
            <div class="price-sp add-part sp_only">
              <section class="price-sp-title">
                <h3 data-aos="fade-up">2箇所</h3>
              </section>

              <!-- １段目 -->
              <section class="price-sp-times">
                <div class="price-sp-row1st">
                  <p data-aos="fade-up">施術回数</p>
                  <h4 data-aos="fade-up" class="priceTitle">料金</h4>
                </div>
              </section>

              <!-- ２段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">トライアルコース(3回)</h4>
                  <p data-aos="fade-up">14,900 </p>
                </div>
              </section>

              <!-- ３段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">減毛コース(6回)</h4>
                  <p data-aos="fade-up">13,200 </p>
                </div>
              </section>

              <!-- ４段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">脱毛コース(12回)</h4>
                  <p data-aos="fade-up">9,900 </p>
                </div>
              </section>

            </div>
            <!-- ここまでspパーツ -->

            <!-- ここからspパーツ3箇所 -->
            <div class="price-sp add-part sp_only">
              <section class="price-sp-title">
                <h3 data-aos="fade-up">3箇所</h3>
              </section>

              <!-- １段目 -->
              <section class="price-sp-times">
                <div class="price-sp-row1st">
                  <p data-aos="fade-up">施術回数</p>
                  <h4 data-aos="fade-up" class="priceTitle">料金</h4>
                </div>
              </section>

              <!-- ２段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">トライアルコース(3回)</h4>
                  <p data-aos="fade-up">22,800 </p>
                </div>
              </section>

              <!-- ３段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">減毛コース(6回)</h4>
                  <p data-aos="fade-up">19,800 </p>
                </div>
              </section>

              <!-- ４段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">脱毛コース(12回)</h4>
                  <p data-aos="fade-up">16,500 </p>
                </div>
              </section>

            </div>
            <!-- ここまでspパーツ -->

          </article>

          <!-- Setセクション -->
          <h2 class="price__detail-heading heading-set" id="Set" data-aos="fade-up">set</h2>
          <article class="price__item">

            <!-- ここからテーブルパーツ -->
            <div class="price__table-wrapper pc_only">
              <table class="price__table">
                <thead>
                  <tr>
                    <th data-aos="fade-up"></th>
                    <th data-aos="fade-up">トライアルコース(3回)</th>
                    <th data-aos="fade-up">減毛コース(6回)</th>
                    <th data-aos="fade-up">脱毛コース(12回)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="table-gothic" data-aos="fade-up">顔全体</td>
                    <td data-label="トライアルコース(3回)" class="table-price" data-aos="fade-up">7,600</td>
                    <td data-label="減毛コース(6回)" class="table-price" data-aos="fade-up">6,500</td>
                    <td data-label="脱毛コース(12回)" class="table-price" data-aos="fade-up">4,900</td>
                  </tr>
                  <tr>
                    <td class="table-gothic" data-aos="fade-up">腕全体</td>
                    <td data-label="トライアルコース(3回)" class="table-price" data-aos="fade-up">14,900 </td>
                    <td data-label="減毛コース(6回)" class="table-price" data-aos="fade-up">13,200 </td>
                    <td data-label="脱毛コース(12回)" class="table-price" data-aos="fade-up">9,900 </td>
                  </tr>
                  <tr>
                    <td class="table-gothic" data-aos="fade-up">足全体</td>
                    <td data-label="トライアルコース(3回)" class="table-price" data-aos="fade-up">22,800 </td>
                    <td data-label="減毛コース(6回)" class="table-price" data-aos="fade-up">19,800 </td>
                    <td data-label="脱毛コース(12回)" class="table-price" data-aos="fade-up">16,500 </td>
                  </tr>
                  <tr>
                    <td class="table-gothic" data-aos="fade-up">全身脱毛</td>
                    <td data-label="トライアルコース(3回)" class="table-price" data-aos="fade-up">27,200 </td>
                    <td data-label="減毛コース(6回)" class="table-price" data-aos="fade-up">24,800 </td>
                    <td data-label="脱毛コース(12回)" class="table-price" data-aos="fade-up">20,900 </td>
                  </tr>
                </tbody>
              </table>
              <!-- sp用 -->

              <!-- pc用 -->
              <p class="price-guidance pc_only" data-aos="fade-up">※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
            </div>
            <!-- ここまでテーブルパーツ -->

            <!-- ここからsp顔全体パーツ -->
            <div class="price-sp sp_only">
              <section class="price-sp-title">
                <h3 data-aos="fade-up">顔全体</h3>
              </section>

              <!-- １段目 -->
              <section class="price-sp-times">
                <div class="price-sp-row1st">
                  <p data-aos="fade-up">施術回数</p>
                  <h4 data-aos="fade-up" class="priceTitle">料金</h4>
                </div>
              </section>

              <!-- ２段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">トライアルコース(3回)</h4>
                  <p data-aos="fade-up">7,600 </p>
                </div>
              </section>

              <!-- ３段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">減毛コース(6回)</h4>
                  <p data-aos="fade-up">6,500 </p>
                </div>
              </section>

              <!-- ４段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">脱毛コース(12回)</h4>
                  <p data-aos="fade-up">4,900 </p>
                </div>
              </section>

            </div>
            <!-- ここまでsp顔全体パーツ -->

            <!-- ここからsp腕全体パーツ -->
            <div class="price-sp add-part sp_only">
              <section class="price-sp-title">
                <h3 data-aos="fade-up">腕全体</h3>
              </section>

              <!-- １段目 -->
              <section class="price-sp-times">
                <div class="price-sp-row1st">
                  <p data-aos="fade-up">施術回数</p>
                  <h4 data-aos="fade-up" class="priceTitle">料金</h4>
                </div>
              </section>

              <!-- ２段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">トライアルコース(3回)</h4>
                  <p data-aos="fade-up">14,900 </p>
                </div>
              </section>

              <!-- ３段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">減毛コース(6回)</h4>
                  <p data-aos="fade-up">13,200 </p>
                </div>
              </section>

              <!-- ４段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">脱毛コース(12回)</h4>
                  <p data-aos="fade-up">9,900 </p>
                </div>
              </section>

            </div>
            <!-- ここまでsp腕全体パーツ -->

            <!-- ここからsp足全体パーツ -->
            <div class="price-sp add-part sp_only">
              <section class="price-sp-title">
                <h3 data-aos="fade-up">足全体</h3>
              </section>

              <!-- １段目 -->
              <section class="price-sp-times">
                <div class="price-sp-row1st">
                  <p data-aos="fade-up">施術回数</p>
                  <h4 data-aos="fade-up" class="priceTitle">料金</h4>
                </div>
              </section>

              <!-- ２段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">トライアルコース(3回)</h4>
                  <p data-aos="fade-up">22,800 </p>
                </div>
              </section>

              <!-- ３段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">減毛コース(6回)</h4>
                  <p data-aos="fade-up">19,800 </p>
                </div>
              </section>

              <!-- ４段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">脱毛コース(12回)</h4>
                  <p data-aos="fade-up">16,500 </p>
                </div>
              </section>

            </div>
            <!-- ここまでsp足全体パーツ -->

            <!-- ここからsp全身脱毛パーツ -->
            <div class="price-sp add-part sp_only">
              <section class="price-sp-title">
                <h3 data-aos="fade-up">全身脱毛</h3>
              </section>

              <!-- １段目 -->
              <section class="price-sp-times">
                <div class="price-sp-row1st">
                  <p data-aos="fade-up">施術回数</p>
                  <h4 data-aos="fade-up" class="priceTitle">料金</h4>
                </div>
              </section>

              <!-- ２段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">トライアルコース(3回)</h4>
                  <p data-aos="fade-up">22,800 </p>
                </div>
              </section>

              <!-- ３段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">減毛コース(6回)</h4>
                  <p data-aos="fade-up">19,800 </p>
                </div>
              </section>

              <!-- ４段目 -->
              <section class="price-3times">
                <div class="price-table-row1st">
                  <h4 data-aos="fade-up">脱毛コース(12回)</h4>
                  <p data-aos="fade-up">16,500 </p>
                </div>
              </section>

            </div>
            <!-- ここまでsp全身脱毛パーツ -->
          </article>

        </section>
        <section class="price__custom">
          <div class="price__custom-image">
            <picture>
              <!-- <source srcset="<?php echo get_template_directory_uri(); ?>/img/price-menu_custom.webp" type="image/webp" > -->
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/price-menu_custom.jpg" data-aos="fade-up">
              <!-- フォールバック（全ての条件に合わない場合） -->
              <img src="<?php echo get_template_directory_uri(); ?>/img/price-menu_custom.jpg" alt="施術している様子" loading="lazy" width="480" height="480" data-aos="fade-up">
            </picture>
          </div>
          <div class="price__custom-description">
            <h4 class="price__custom-title" id="custom" data-aos="fade-up">custom</h4>
            <!-- pc -->
            <p class="price__custom-text pc_only" data-aos="fade-up">
              施術の効果は、脱毛箇所や毛質・毛量、毛周期などによって大きく左右されるため、画一的な施術ではお客様に合わせた最適な脱毛サービスを提供することはできません。<br>
              バレンタインローズでは、お客様に施術の効果をしっかりと感じていただくことができるよう、カウンセリング内容や脱毛箇所、毛質・毛量などを考慮し、オーダーメイドの脱毛メニューを作成しています。<br>
              よりお求めやすい価格で脱毛サービスを提供することができるケースもございますので、オーダーメイドの脱毛メニューをご希望の方はお気軽にご相談ください。
            </p>

            <!-- sp -->
            <p class="price__custom-text sp_only" data-aos="fade-up">
              施術の効果は、脱毛箇所や毛質・毛量、毛周期などによって大きく左右されるため、画一的な施術ではお客様に合わせた最適な脱毛<br>サービスを提供することはできません。 <br>バレンタインローズでは、お客様に施術の効果をしっかりと感じていただくことができるよう、カウンセリング内容や脱毛箇所、毛質・毛量などを考慮し、オーダーメイドの脱毛メニューを作成しています。 <br>よりお求めやすい価格で脱毛サービスを提供することができるケースもございますので、オーダーメイドの脱毛メニューをご希望の方はお気軽にご相談ください。
            </p>
          </div>
        </section>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>