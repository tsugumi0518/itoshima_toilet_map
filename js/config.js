$(function() {

  $(window).scroll(function() {
    let scrollHeight = $(window).height();
    let scrollTop = $(window).scrollTop(); // スクロール上部の位置
    let targetPosition = $(".desc").offset().top;

    /* 230518 佐藤追加　ここから↓ */
    // フェードイン
    $(".desc").each(function(){
      if(scrollTop > targetPosition - scrollHeight + 100){
      $(this).addClass("fadeInUp");
      }
    });
    /* 230518 佐藤追加　ここまで↑ */

    //戻るボタン
    let areaTop = $("#result_area").offset().top; // 対象エリアの上部の位置
    let areaBottom = areaTop + $("#result_area").innerHeight(); // 対象エリアの下部の位置
  
    if (scrollTop > areaTop && scrollTop < areaBottom) {
      $(".re_search").addClass("active"); // スクロールが対象エリアに入った場合
    } else {
      $(".re_search").removeClass("active"); // スクロールが対象エリアから出ている場合
    }
  });
  
  
});

// loadイベント
$(window).on("load", function() {

  // TOP地図アニメーション用のクラスを1秒後に追加
  setTimeout(function () {
    $(".hero_area_wrap").addClass("active");
  }, 800);
 
});

