<?php get_header(); ?>

<body id="top">
  <header id="header">
    <div class="header--inner">

      <h1 class="logo">
        <a href="inedx.php"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
      </h1>

      <nav>
        <ul>
          <li><a href="news.php">NEWS</a></li>
          <li><a href="service.php">SERVICE</a></li>
          <li><a href="works.php">WORKS</a></li>
          <li><a href="company.php">COMPANY</a></li>
          <li><a href="recruit.php">RECRUIT</a></li>
          <li><a href="contact.php">CONTACT</a></li>
        </ul>
      </nav>

      <div class="menu">
        <div class="menu-btn">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

    </div><!-- /header--inner -->
  </header>
  <main>

    <section>
      <?php
        if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
      <!-- ▲中身があるか確認（あった場合にコンテンツを出力する準備） -->

      <h1><?php the_title();?></h1>
      <!-- ▲記事のタイトルを出力する関数 -->

      <section>
        <?php the_content();?>
        <!-- ▲記事の本文を出力する関数 -->
      </section>

      <?php
        endwhile;
        endif;
      ?>
    </section>>

    <section class="container">
      <div class="news">

        <div class="title title-news">
          <h2>NEWS</h2>
          <p>お知らせ</p>
        </div>

        <div class="news-list">
          <ul>

            <li>
              <div class="news-list-block">
                <time datetime="2030-02-01">2030.02.01</time>
                <div>お知らせ</div>
              </div>
              <a href="news.php">
                <p>Webデザインニュースサイト「ウェブマガジン」に取材いただきました</p>
              </a>
            </li>

            <li>
              <div class="news-list-block">
                <time datetime="2030-01-25">2030.01.25</time>
                <div>制作実績</div>
              </div>
              <a href="news.php">
                <p>Smoothiesta様のWebサイトを制作いたしました</p>
              </a>
            </li>

            <li>
              <div class="news-list-block">
                <time datetime="2030-01-20">2030.01.20</time>
                <div>採用</div>
              </div>
              <a href="news.php">
                <p>Webデザイナーを1名募集中です!</p>
              </a>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- /container -->

    <section class="container">
      <div class="service">

        <div class="title title-service">
          <h2>SERVICE</h2>
          <p>事業内容</p>
        </div>

        <div class="service--list">
          <div class="service--list--block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/WebConference.png" alt="">
            <p>Webサイト制作</p>
            <p>新規サイトの制作はもちろんサイトリニューアルやランディングページの制作も可能です。</p>
          </div>

          <div class="service--list--block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gurafu.png" alt="">
            <p>Webサイト運用</p>
            <p>サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案をいたします。</p>
          </div>

          <div class="service--list--block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mobile_image.png" alt="">
            <p>アプリ開発</p>
            <p>スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。</p>
          </div>
        </div><!-- /service--list -->

        <a href="service.php" class="btn btn-morer">
          <span>MORE</span>
        </a>

      </div><!-- /service -->
    </section><!-- /container -->

    <section class="works--outer">
      <div class="works">

        <div id="slider" class="slider">

          <div class="slider--btn">
            <div class="slider--btn-left">
              <span></span>
            </div>

            <div class="slider--btn-right">
              <span></span>
            </div>
          </div><!-- /slider--btn -->

          <div class="slider--image">
            <div class="slider--image--inner">
              <img class="is-active" src="<?php echo get_template_directory_uri(); ?>/images/smoothiesta.png" alt="smoothiesta">
              <img src="<?php echo get_template_directory_uri(); ?>/images/web-conference.png" alt="web-conference">
              <img src="<?php echo get_template_directory_uri(); ?>/images/LAMINA.png" alt="LAMINA">
            </div>
          </div>

          <div class="slider--dot">
            <span class="is-active"></span>
            <span></span>
            <span></span>
          </div>
        </div><!-- /slider -->

        <div class="works--text">
          <div class="title title-works">
            <h2>WORKS</h2>
            <p>制作実績</p>
          </div>
          <p>様々なジャンルのWebサイト制作が可能です。<br>ご購入やお申込み数の増加などを実現します！</p>
          <a href="works.php" class="btn btn-morer">
            <span>MORE</span>
          </a>
        </div><!-- /works--text -->

      </div><!-- /works -->
    </section>

    <section>
      <div class="company">

        <div class="title title-company">
          <h2>COMPANY</h2>
          <p>私たちについて</p>
        </div>

        <p><span>サイトのゴール = <br>夢を叶えること</span></p>

        <p>
          お客様の夢を叶えること。<br>
          それがWebサイトのゴールであり、<br class="br_sp">私たちが目指すことです。<br>
          だからこそちゃんと成果を出すサイトを<br class="br_sp">全力でお作りします。<br>
          お客様の笑顔を見たい。<br>
          夢を実現する手助けをさせてください。<br>
        </p>

        <a href="company.php" class="btn btn-morer">
          <span>MORE</span>
        </a>

      </div><!-- /company -->
    </section>

    <section class="container">
      <div class="recruit">

        <div class="recruit--text">
          <div class="title title-recruit">
            <h2>RECRUIT</h2>
            <p>採用情報</p>
          </div>
          <p>私たちと一緒に働きませんか？</p>
          <a href="recruit.php" class="btn btn-morer">
            <span>MORE</span>
          </a>
        </div>

        <div class="recruit--image">
        </div>

      </div><!-- /RECRUIT -->
    </section>

    <section>
      <div class="contact">

        <div class="title title-contact">
          <h2>CONTACT</h2>
          <p>お問い合わせ</p>
        </div>

        <p>Webサイトの制作のご依頼やお見積りなど、お気軽にご相談ください。</p>

        <a href="contact.php" class="btn btn-morer">
          <span>MORE</span>
        </a>

      </div>
    </section>

  </main>

  <?php get_footer(); ?>