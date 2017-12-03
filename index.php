<?php
/**
 * 这是MouYouLing为<a href="https://www.mouyouling.com" >MouYouLing.com</a> 量身打造的主题
 * 
 * @package MouYouLingTheme 
 * @author MouYouLing
 * @version 1.0.0
 * @link https://www.mouyouling.com/theme.html
 */
 
include('header.php');
?>
<div class="main-page" id="homepage">
	<?php while($this->next()): ?>
		<div class="post">
			<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
				<div class="post-data">
				<li chass="texy_writer" ><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></li> 
				<li class="text_time">|<?php $this->date('F j, Y'); ?></li> 
				<li class="text_category">|<?php $this->category(','); ?></li>
				<li>|<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('没有评论', '只有1条评论', '已有%d条评论'); ?></a></li>
				</div>
			<div class="post-content">
				<?php $this->content('- 阅读剩余部分 -'); ?>
			</div>
		</div>
	<?php endwhile; ?>
	<?php $this->pageNav(); ?>
</div>
	
<?php include('sidebar.php');?>
<?php include('footer.php');?>