<?php $this->need('header.php'); ?>

	<div class="post-page" id="main" role="main">
		<h1 class="post-title"><?php $this->title() ?></h1>
		<ul class="post-meta">
            <li><?php _e('作者: '); ?><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
            <li>|<?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></li>
            <li>|<?php _e('分类: '); ?><?php $this->category(','); ?></li>
        </ul>
        <hr>
	<div class="post-content">
            <?php $this->content(); ?>
        </div>
        <hr>
		<p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
        <hr>
		<?php $this->need('comments.php'); ?>
		<hr>
		<ul class="post-near">
			<li class="post-near-front">上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
			<li class="post-near-next">下一篇: <?php $this->theNext('%s','没有了'); ?></li>
		</ul>
	</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
