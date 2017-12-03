<?php $this->need('header.php'); ?>

<div class="post-page" id="main" role="main">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <hr>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>