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
    $('#header').toggleClass('is-open')
    //.is-open追加

        //指定するクラスに〇〇があるか調べて、true・farceで返す
        if ($(this).hasClass('is-open') == true) {
          console.log('aaa') //ある時（true）の処理
        } else {
          console.log('bbb') //ない時(farce)の処理
        }
    
  })


})


/* ===============================================
# JavaScriptで書く練習
=============================================== */

document.addEventListener('DOMContentLoaded', () => {//先に読み込むため必要

  /*------以下の書き方だと１回しか経過時間を取れない（プログラムが１回しか走らないから）------*/

  // const startTime = Date.now()*1000;               //現在の時間を取得(Date.now()で、1/1000秒を取得するので1000倍にして小数点以下切り捨て)
  // const time = (Date.now()*1000) - startTime;      // 経過時間を秒で取得

  /*-----------------------------------------------------------------------------*/



  /*------うまくclassが付かない-----------------------------------------------------*/

  // const sliderTime = document.querySelector('#slider');

  // let count = 0;//初期値として0を代入

  // const countUp = () => {
  //   count++;                                          //現在のcountの値に1を足す
  // }

  // setInterval(countUp,1000);                          //変数countUpの処理を1000ミリ秒後（＝1秒後）に繰り返し

  // if(countUp % 2 === 0){                              //「%」は割り算の余り、2で割って余り0で、2の倍数ということ
  //   sliderTime.classList.toggle('is-active');         //2秒ごとに「is-active」を付けて消すを繰り返し
  // }

  /*-----------------------------------------------------------------------------*/



});