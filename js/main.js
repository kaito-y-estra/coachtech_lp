//ハンバーガー
jQuery(function($) {
  (function($) {
    $(function() {
      $(".hamburger").on("click", function() {
        $("body").toggleClass("open");
      });
    });
  })(jQuery);
  //qa
  $(".qa__item").on("click", function() {
    $(this).toggleClass("open");
    $(this)
      .next(".answer")
      .slideToggle();
  });
  //
  $(".mobile__nav__box li a[href]").on("click", function() {
    $("body").removeClass("open");
  });
});
