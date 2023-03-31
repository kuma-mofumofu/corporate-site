jQuery(function ($) {
  /* ===============================================
  # スクロールした時の、headerイベント
  =============================================== */
  
  jQuery(window).scroll(function(){

    if(jQuery(window).scrollTop()>20){
      //「scrollTop()」で、スクロール位置取得「jQuery(window)」で、ブラウザ全体の位置。
      jQuery('#header').addClass('is-active');
      //20以上スクロールしている時の処理。「#headerに、is-activeを付ける」
    } else {
      jQuery('#header').removeClass('is-active');
      //20以下のスクロールしている時の処理。「#headerに、is-activeが付いてたら外す」
    }

    if(jQuery(window).scrollTop()>100){
      jQuery('.scroll_top').addClass('is-active');
    }else{
      jQuery('.scroll_top').removeClass('is-active');
    }
  });


  /* ===============================================
  # ハンバーガーメニュー
  =============================================== */

  jQuery('.menu').on('click',function () {
  // .menuをクリックした時

    jQuery(this).toggleClass('is-open')
    jQuery('#header').toggleClass('is-open')
    //.is-open追加

        // //指定するクラスに〇〇があるか調べて、true・farceで返す
        // if ($(this).hasClass('is-open') == true) {
        //   console.log('aaa') //ある時（true）の処理
        // } else {
        //   console.log('bbb') //ない時(farce)の処理
        // }
    
  });


});