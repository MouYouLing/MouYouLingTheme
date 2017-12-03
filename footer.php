	</div>
<?php if ($this->options->theme_color): ?>
	<footer id="footer" role="contentinfo" style="background-color:rgba(<?php echo hexdec(substr($this->options->theme_color,1,2)) , "," , hexdec(substr($this->options->theme_color,3,2)) , "," , hexdec(substr($this->options->theme_color,5,2)); ?>,0.618)">
<?php else: ?>
	<footer id="footer" role="contentinfo" style="background-color:rgba(102,204,255,0.618)">
<?php endif; ?>
		<div class="links">友情链接 | <a href="https://www.mouyouling.com" title="某幽灵" target="某幽灵">MouYouLing</a></div>
		<div class="site">&copy; 2016-<?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
		<?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
                Theme by <a href="https://www.mouyouling.com/hello/theme-by-mouyouling.html">MouYouLing</a>.</div>
	</footer>
		
	<?php $this->footer(); ?>
	<script src="<?php $this->options->themeUrl('main.js'); ?>"></script>	
</body>
</html>