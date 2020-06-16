<?php
/*
Template Name: thanks
*/
?>


<?php get_header(); ?>

<main>
      <div class="eyecatch">
        <div class="eyecatch__bg">
          <div class="eyecatch__content">
          <h2 class="eyecatch__txt">
            お申込ありがとうございます。
          </h2>
          </div>
        </div>
      </div>
        

      <div class="single__container flex__item flex__item--around container">

        <div class="relation flex__item flex__item--between">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
        </div>
    </main>
    <script>
(function(){
var uqid   = "a7aae3hG5Gd55930";
var gid    = "1";
var uid   = "";
var uid2   = "";
var af   = "";
var pid    = "";
var amount = "";

var a=document.createElement("script");
a.src="//ac.coachtech.site/ac/action_js.php";
a.id="afadaction-"+Date.now();
a.addEventListener("load",function(){(new fpcAction(a.id)).groupAction(gid, af, [uid, uid2], pid, amount, uqid)});
document.body.appendChild(a)})();
</script>

<style>
.eyecatch__txt{
    line-height:1;
}
</style>
<?php get_footer(); ?>