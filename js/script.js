$(function () {

  /* ===============================================
  # スクロールした時の、headerイベント
  =============================================== */
  
  $(window).scroll(function(){

    if($(window).scrollTop()>20){
      //「scrollTop()」で、スクロール位置取得「$(window)」で、ブラウザ全体の位置。

      $('#header').addClass('is-active');
      //20以上スクロールしている時の処理。「#headerに、is-activeを付ける」

    } else {

      $('#header').removeClass('is-active');
      //20以下のスクロールしている時の処理。「#headerに、is-activeが付いてたら外す」
    }
  });


  /* ===============================================
  # ハンバーガーメニュー
  =============================================== */

  $('.menu').on('click',function () {
  // .menuをクリックした時

    $(this).toggleClass('is-open')
    //.is-open追加

        //指定するクラスに〇〇があるか調べて、true・farceで返す
        if ($(this).hasClass('is-open') == true) {
          console.log('aaa') //ある時（true）の処理
        } else {
          console.log('bbb') //ない時(farce)の処理
        }
    
  })



})