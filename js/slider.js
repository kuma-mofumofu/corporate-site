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
  //   console.log(count);
  //   return count;
  // }

  // console.log(count);


  // setInterval(countUp,1000);                          //変数countUpの処理を1000ミリ秒後（＝1秒後）に繰り返し

  // if(countUp % 2 === 0){                              //「%」は割り算の余り、2で割って余り0で、2の倍数ということ
  //   sliderTime.classList.toggle('is-active');         //2秒ごとに「is-active」を付けて消すを繰り返し
  // }

  /*-----------------------------------------------------------------------------*/

  /* ========================================================================================
  # ２秒毎にclass「is-active」を付けて消す
  =========================================================================================== */

  // let count = 0;                                         //初期値として0を代入

  // const countUp = () => {                                //ここの変数名は「セット名」で、ループで増えたcountの値が入ってるわけではない

  //   count++;                                             //現在のcountの値に1を足す

  //   let sliderTime = document.querySelector('#slider');  //「querySelector」の引数に指定したclass・idを変数に入れる

  //   if(count % 2 === 0){
  //     sliderTime.classList.toggle('is-active');
  //   }
  // }

  // setInterval(countUp,2000);                             //変数countUpの処理を1000ミリ秒後（＝2秒後）に繰り返し



  /* =========================================================================================
  # classを渡していく方法
  ============================================================================================ */

  const images = document.querySelectorAll(".slider--image--inner img")
  //①画像全部を指定で入れる

  var i = 1
  //⑥ループさせる為のカウンター

  setInterval(()=>{
  //②「setInterval」関数で、２秒毎に繰り返す

    i++
    //⑦１回動くごとに、１ずつ増えるようにする

    const image = document.querySelector(".slider--image--inner .is-active")
    //③「image」に「is-active」を入れる

    image.classList.remove("is-active")
    //④「remove」で「is-active」を取り除く

    if(i > images.length){
      //⑧「i」が「images(画像)」の数より大きい時

      images[0].classList.add("is-active")
      //⑧配列「images」の最初の画像に「is-active」を付ける

      i = 1
      //⑧「i」を１に戻す

    }else{
      //⑨上記の条件が当てはまらない時に、class移動を実行

      image.nextElementSibling.classList.add("is-active")
      //⑤「nextElementSibling」で兄弟要素の指定、「classList.add」classを付ける(class移動)
    }
  },7000)//1000 = １秒


});