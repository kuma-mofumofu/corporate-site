

  <body id="contact">

    <header id="header">
      <div class="header--inner">

        <h1 class="logo">
          <a href="inedx.html"><img src="images/logo.png" alt=""></a>
        </h1>

        <nav>
          <ul>
            <li><a href="news.html">NEWS</a></li>
            <li><a href="service.html">SERVICE</a></li>
            <li><a href="works.html">WORKS</a></li>
            <li><a href="company.html">COMPANY</a></li>
            <li><a href="recruit.html">RECRUIT</a></li>
            <li><a href="contact.html">CONTACT</a></li>
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
        <div class="page_title">
          <h2>CONTACT</h2>
          <p>お問い合わせ</p>
        </div>
      </section>

      <div class="pankuzu">
        <p><a href="inedx.html">HOME</a><span>＞</span>CONTACT</p>
      </div>

      <section>
        <div class="inside">
          <p>Webサイトの制作のご依頼やお見積りなど、<br>お気軽にご相談ください。</p>

          <form>

            <div class="inside--block type">
              <p>お問い合わせ種別<span>*必須</span></p>

              <div>
                <label><!-- labelタグで囲むと文字をクリックした時でもチェックが入る -->
                  <input type="radio" name="type" ><!-- name=""を書いてないと全部のボタンにチェックが入る -->
                  お仕事のご依頼・ご相談<!-- labelタグの中にはpタグは使えない -->
                </label>
  
                <label>
                  <input type="radio" name="type" >
                  お見積りのご依頼
                </label>

                <label>
                  <input type="radio" name="type" >
                  採用について
                </label>
  
                <label>
                  <input type="radio" name="type" >
                  その他
                </label>
  
              </div>

            </div><!-- /inside--block type -->

            <div class="inside--block name">
              <label>
                お名前<span>*必須</span>
                <input type="text" name="name">
              </label>
            </div>

            <div class="inside--block company">
              <label>
                会社名<span>*必須</span>
                <input type="text" name="company">
              </label>
            </div>

            <div class="inside--block mail">
              <label>
                メールアドレス<span>*必須</span>
                <input type="text" name="email">
              </label>
            </div>

            <div class="inside--block tel">
              <label>
                電話番号<span>(半角数字ハイフンなし)</span>
                <input type="text" name="email">
              </label>
            </div>

            <div class="inside--block content">
              <label>
                お問い合わせ内容
                <textarea name="content" placeholder="お問い合わせ内容を具体的にご記入くださいませ。"></textarea>
              </label>
            </div>

            <div class="inside--block question">
              <p>PON DESIGNをどちらでお知りになりましたか？<span>*必須</span></p>

              <select><!-- /コンボボックス（reset.cssで「▼」を消す） -->
                <option value="none">選択してください</option>
                <option value="search">Google/Yahoo検索</option>
                <option value="sns">SNS</option>
                <option value="blog">ブログ</option>
                <option value="friend">友人や知人</option>
                <option value="other">その他</option>
              </select>
            </div>

            <div class="inside--btn">
              <button class="btn btn-morer" type="submit"><!-- /「type="submit」formの情報をサーバーに送る為に必要 -->
                <span>送信する</span>
              </button>
            </div>
  
          </form>

        </div><!-- /contact--inner -->
      </section>

    </main>

