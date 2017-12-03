<div id="comments">
	<div class="sho-comments">
		<?php $this->comments()->to($comments); ?>
		<?php if ($comments->have()): ?>
		<div><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></div>
		<?php $comments->listComments(); ?>
		<?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
		<?php endif; ?>
	</div>
	<?php if($this->allow('comment')): ?>
        <hr>
	<div class="write-comments">
		<div id="response" style="font-size:18px">写个评论</div>
		<!-- 输入表单开始 -->
		<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form" style="position: relative;">
			<?php if($this->user->hasLogin()): ?>
			<!-- 显示当前登录用户的用户名以及登出连接 -->
			<p>正以 <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a> 身份登陆. 
			<a href="<?php $this->options->logoutUrl(); ?>" title="Logout">登出 &raquo;</a></p>
			<?php else: ?>
				<!-- 要求输入名字、邮箱、网址 -->
			<p><input type="text" name="author" class="text" size="35" value="<?php $this->remember('author'); ?>" /><label>君の名は</label></p>
			<p><input type="text" name="mail" class="text" size="35" value="<?php $this->remember('mail'); ?>" /><label>君のE-mail</label></p>
			<p><input type="text" name="url" class="text" size="35" value="<?php $this->remember('url'); ?>" /><label>君の网址</label></p>
			<?php endif; ?>
 
			<!-- 输入要回复的内容 -->
			<p style="position: relative;"><textarea rows="10" cols="50" name="text" class="textarer"><?php $this->remember('text'); ?></textarea><label style="position:absolute; margin-left:10px;">君の评论</label></p>
			<p class="submitcomments"><button type="submit" class="submit-comments"><div class="submit-button">提交评论</div></button></p>
		</form>
	</div>
	<?php else: ?>
	<div class="close-comments">评论已关闭</div>
	<?php endif; ?>
</div>
