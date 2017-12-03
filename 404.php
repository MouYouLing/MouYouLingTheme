<?php $this->need('header.php'); ?>

<div class="post-page" id="main" role="main">
        <h1 class="post-title">链接不存在_(:з」∠)_<a href="<?php $this->options->siteUrl() ?>">(点我即可回到主城)</a></h1>
        <div class="post-content">
            <p class="404-image"><img src="<?php $this->options->cdnUrl(); ?>/image/404.jpg"/></p>
        </div>
<script type="text/javascript" language=JavaScript charset="UTF-8">
      document.onkeydown=function(event){
            var e = event || window.event || arguments.callee.caller.arguments[0];
            if(e && e.keyCode==66){
                document.location.assign(<?php $this->options->siteUrl() ?>);
              }
        }; 
</script>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>