<?php get_header(); ?>

<main class="salons_single">
  <div class="sticky-area">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <!-- 店舗紹介 -->
        <section class="l-main-visual">
          <h1 class="l-main-visual__title-single" data-aos="fade-up"><?php the_field('store_name'); ?></h1>
          <div class="sticky-wrapper">
            <picture class="">
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/single-salons_top-sp.webp" media="(max-width: 767px)" type="image/webp">
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/single-salons_top-sp.jpg" media="(max-width: 767px)" type="image/jpeg">
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/single-salons_top-pc.webp" media="(min-width: 768px)" type="image/webp">
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/single-salons_top-pc.jpg" media="(min-width: 768px)" type="image/jpeg">
              <img src="<?php echo get_template_directory_uri(); ?>/img/archive-salons_top-pc.jpg" alt="高級感の感じられ店内の様子" class="l-main-visual__img">
            </picture>
          </div>


          <div class="contents-overlap-wrapper">
            <!-- カスタムパンくずリスト -->
            <div class="breadcrumb-container">
              <nav class="breadcrumb u-hover" data-aos="fade-up">
                <a href="<?php echo home_url('/'); ?>">ホーム</a>
                <span class="sep" data-aos="fade-up">｜</span>
                <span href="<?php echo home_url('/salons'); ?>"><?php the_title(); ?></span>
              </nav>
            </div>

            <?php if (get_field('description')): ?>
              <div class="salon-description__text">

                <!-- pc -->
                <p class="pc_only" data-aos="fade-up">バレンタインローズ渋谷店は、渋谷駅から徒歩5分の位置に店舗を構える脱毛サロンで、<br>「洗練されたワンランク上の女性を目指す」というコンセプトのもと <br>オーダーメイドの脱毛サービスを提供しています。 <br>毎年6,000人以上のお客様に渋谷店の脱毛サービスをご利用いただいており、 <br>これまで年齢を問わず様々な女性の脱毛をサポートさせていただきました。 <br>しかし、私たちは、脱毛はあくまでもお客様がワンランク上の女性に近づくための一歩であり、 <br>目指すべきゴールではないと考えています。 <br>お客様と脱毛サロンという関係だけでなく、 <br>脱毛の卒業後もお客様の隣で男磨きをサポートすることができる存在となり、 <br>そして渋谷店に通っていることを誇りに思ってもらえる、 <br>そんな脱毛サロンを目指していきます。</p>

                <!-- sp -->
                <p class="sp_only" data-aos="fade-up">バレンタインローズ渋谷店は、 <br>渋谷駅から徒歩5分の位置に店舗を構える脱毛サロンで、 <br>「洗練されたワンランク上の女性を目指す」というコンセプトのもと <br>オーダーメイドの脱毛サービスを提供しています。 <br>毎年6,000人以上のお客様に渋谷店の脱毛サービスをご利用いただいており、 <br>これまで年齢を問わず様々な女性の脱毛をサポートさせていただきました。 <br>しかし、私たちは、脱毛はあくまでもお客様がワンランク上の女性に近づくための一歩であり、目指すべきゴールではないと考えています。 <br>お客様と脱毛サロンという関係だけでなく、 脱毛の卒業後もお客様の隣で男磨きをサポートすることができる存在となり、 <br>そして渋谷店に通っていることを誇りに思ってもらえる、 <br>そんな脱毛サロンを目指していきます。</p>
              </div>
            <?php else: ?>
              <div class="salon-description__text" data-aos="fade-up">説明文が登録されていません。</div>
            <?php endif; ?>

            <!-- FLOW -->
            <?php if (have_rows('flow_steps')): ?>
              <section class="salon-flow">
                <div class="section-header">
                  <h2 class="section-header__en" data-aos="fade-up">flow</h2>
                  <p class="section-header__ja" data-aos="fade-up">お問い合わせからの流れ</p>
                </div>

                <?php
                $step_index = 0;
                $img_fixed_1 = get_field('flow_img_fixed_1');
                $img_fixed_2 = get_field('flow_img_fixed_2');
                ?>

                <?php while (have_rows('flow_steps')): the_row(); ?>
                  <?php $step_index++; ?>

                  <article class="salon-flow__item">

                    <!-- フローの塊 -->
                    <div class="salon-flow__block">
                      <div class="salon-flow__greenNum" data-aos="fade-up"></div>

                      <div class="salon-flow__content">
                        <?php if (get_sub_field('step_title')): ?>
                          <h3 class="salon-flow__title" data-aos="fade-up">
                            <?php the_sub_field('step_title'); ?>
                          </h3>
                        <?php endif; ?>

                        <?php if (get_sub_field('step_text')): ?>
                          <p class="salon-flow__text" data-aos="fade-up">
                            <?php the_sub_field('step_text'); ?>
                          </p>
                        <?php endif; ?>
                      </div>
                    </div>

                    <!-- ▼ 固定画像①：左 -->
                    <?php if ($step_index === 3 && $img_fixed_1): ?>
                      <div class="salon-flow__img salon-flow__img--left">
                        <img src="<?php echo esc_url($img_fixed_1['url']); ?>" alt="<?php echo esc_attr($img_fixed_1['alt']); ?>" data-aos="fade-up">
                      </div>
                    <?php endif; ?>

                    <!-- ▼ 固定画像②：右 -->
                    <?php if ($step_index === 5 && $img_fixed_2): ?>
                      <div class="salon-flow__img salon-flow__img--right">
                        <img src="<?php echo esc_url($img_fixed_2['url']); ?>" alt="<?php echo esc_attr($img_fixed_2['alt']); ?>" data-aos="fade-up">
                      </div>
                    <?php endif; ?>

                  </article>
                <?php endwhile; ?>

                <!-- ▼ 自由配置（3枚目・被らない用） -->
                <?php if ($img_free = get_field('flow_img_free')): ?>
                  <div class="salon-flow__img salon-flow__img--free">
                    <img src="<?php echo esc_url($img_free['url']); ?>" alt="<?php echo esc_attr($img_free['alt']); ?>" data-aos="fade-up">
                  </div>
                <?php endif; ?>

              </section>
            <?php endif; ?>


            <!-- スタッフ紹介 -->
            <section class="p-salon-single__staff">
              <div class="p-salon-single__staff__wrapper">
                <div class="p-salon-single__staff-img">

                  <?php if ($staff_img = get_field('staff_image')): ?>
                    <img src="<?php echo esc_url($staff_img['url']); ?>" alt="<?php echo esc_attr($staff_img['alt']); ?>" loading="lazy" data-aos="fade-up" width="480" height="480">
                  <?php else: ?>
                    <picture>
                      <source
                        srcset="<?php echo get_template_directory_uri(); ?>/img/noimage.webp"
                        type="image/webp">

                      <img
                        src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg"
                        alt="No image">
                    </picture>
                  <?php endif; ?>

                </div>

                <div class="p-salon-single__staff-comment">
                  <div class="p-salon-single__staff-title">
                    <h4 class="p-salon-single__staff-title-en" data-aos="fade-up">staff</h4>
                    <p class="p-salon-single__staff-title-ja" data-aos="fade-up">スタッフから挨拶</p>
                  </div>

                  <p class="p-salon-single__staff-text" data-aos="fade-up">
                    <?php
                    $comment = get_field('staff_comment');
                    echo $comment ? esc_html($comment) : 'コメント未登録';
                    ?>
                  </p>

                  <div class="p-salon-single__staff-name">
                    <h4 class="p-salon-single__staff-name-en" data-aos="fade-up">
                      <?php
                      $name_en = get_field('staff_name_en');
                      echo $name_en ? esc_html($name_en) : 'Name';
                      ?>
                    </h4>
                    <p class="p-salon-single__staff-name-ja" data-aos="fade-up">
                      <?php
                      $name_ja = get_field('staff_name_ja');
                      echo $name_ja ? esc_html($name_ja) : 'スタッフ名未登録';
                      ?>
                    </p>
                  </div>
                </div>
              </div>
            </section>

            <!-- 店舗情報・地図 -->
            <section class="salons-map">
              <div class="p-salon-single__map-info">
                <div class="map-info-wrapper">
                  <dl class="p-salon-single__description">

                    <!-- 店舗名 -->
                    <div class="p-salon-single__store-profile">
                      <dt class="p-salon-single__store-profile-term" data-aos="fade-up">店舗名</dt>
                      <dd class="p-salon-single__store-profile-desc store-name-info" data-aos="fade-up">
                        <?php the_field('store_name'); ?>
                      </dd>
                    </div>

                    <!-- 住所 -->
                    <div class="p-salon-single__store-profile">
                      <dt class="p-salon-single__store-profile-term" data-aos="fade-up">住所</dt>
                      <dd class="p-salon-single__store-profile-desc" data-aos="fade-up">
                        <address>
                          <?php if (get_field('address')): ?>
                            <?php the_field('address'); ?>
                          <?php else: ?>
                            住所未設定
                          <?php endif; ?>
                        </address>
                      </dd>
                    </div>

                    <!-- 電話番号 -->
                    <?php if ($phone = get_field('phone')): ?>
                      <div class="p-salon-single__store-profile">
                        <dt class="p-salon-single__store-profile-term" data-aos="fade-up">電話番号</dt>

                        <dd class="p-salon-single__store-profile-desc" data-aos="fade-up">
                          <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="tel-link u-hover">
                            <?php echo esc_html($phone); ?>
                          </a>
                        </dd>

                      </div>
                    <?php endif; ?>
                  </dl>

                  <!-- 地図 -->
                  <?php if (get_field('store_map')): ?>
                    <div class="p-salon-single__map-embed" data-aos="fade-up">
                     <?php echo get_field('store_map'); ?>
                    </div>
                  <?php else: ?>
                    <p class="no-map" data-aos="fade-up">地図情報は準備中です。</p>
                  <?php endif; ?>
                </div>

              </div>
            </section>

            <!-- リンクボタン -->
            <div class="salon-single__back inview">
              <a href="<?php echo home_url('/salons'); ?>" class="salon-single__back-link c-button u-hover">店舗一覧へ</a>
            </div>

          </div>
        <?php endwhile; ?>
      <?php endif; ?>

        </section>
  </div>
</main>


<?php get_footer(); ?>