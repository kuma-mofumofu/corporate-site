$(function () {


  // class追加
  $('.openbtn').on('click',function () {
    $(this).toggleClass('active')

        //指定するクラスに〇〇があるか調べて、true・farceで返す
        if ($(this).hasClass('is_active') == true) {
          console.log('aaa') //ある時（true）の処理
        } else {
          console.log('bbb') //ない時(farce)の処理
        }
    
  })



})