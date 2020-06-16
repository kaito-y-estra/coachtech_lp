    <footer>
      <div class="footer__content flex__item flex__item--center">
        <a class="footer__content-child footer__content-child--first" href="https://estra.jp"
          >運営会社</a
        >
        <a class="footer__content-child" href="<?php echo get_page_link( 6 ); ?>">プライバシーポリシー</a>
        <a class="footer__content-child" href="<?php echo get_page_link( 49 ); ?>">特定商取引法に基づく表記</a>
      </div>
      <p class="footer_message">
        &copy;Copyright
        <?php echo date('Y');?>
        estra inc
        All Rights Reserved.
      </p>
    </footer>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>