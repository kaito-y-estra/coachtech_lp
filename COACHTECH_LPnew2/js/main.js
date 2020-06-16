//ハンバーガー
jQuery(function ($) {
  (function ($) {
    $(function () {
      $(".hamburger").on("click", function () {
        $(".top-header__nav--sp").toggleClass("open");
        $(".hamburger").toggleClass("active");
        //bodyをタップしたら閉じる処理
        if ($(".top-header__nav--sp").hasClass("open")) {
          $("main").on("click", function () {
            $(".top-header__nav--sp").removeClass("open");
            $(".hamburger").removeClass("active");
          });
        }
        $(".top-header__nav--sp a[href]").on("click", function (event) {
          $(".top-header__nav--sp").removeClass("open");
          $(".hamburger").removeClass("active");
        });
      });
    });
  })(jQuery);
  //qa
  $(".answer").hide();
  $(".qa__item").on("click", function () {
    $(this).toggleClass("open");
    $(this).next(".answer").slideToggle();
  });

  jQuery(function ($) {
    $(".tab__btn").click(function () {
      $("is-active-item").removeClass("is-active-item");
      $(this).addClass("is-active-item");
      $(".is-active-item").removeClass("is-active-item");
      const index = $(this).index();
      $(".tab__item").eq(index).addClass("is-active-item");
      $(".tab__btn").removeClass(".is-active-btn");
      $(this).addClass("is-active-btn");
      $(".is-active-btn").removeClass("is-active-btn");
      $(".tab__btn").eq(index).addClass("is-active-btn");
    });
  });
});
