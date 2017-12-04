<!DOCTYPE HTML>
<script>
/*if(location.hostname!="mouyouling.com")window.location.assign("https://mouyouling.com"+location.pathname);*/
var d = new Date();
var bgimgurl="<?php $this->options->cdnUrl() ?>"+"/image/";
if(screen.availWidth>screen.availHeight)bgimgurl+="bg-"+d.getDate()%13+".jpg";
else bgimgurl+="mbg-"+d.getDate()%5+".jpg";
document.write('<html style="background-image:url('+bgimgurl+'); background-size:cover; background-attachment:fixed;">');
</script>
<head>
<meta charset="<?php $this->options->charset(); ?>">
<?php if ($this->options->theme_color): ?>
<meta name="theme-color" content="<?php $this->options->theme_color() ?>">
<?php else: ?>
<meta name="theme-color" content="#66CCFF">
<?php endif; ?>
<title><?php $this->archiveTitle(array(
	'category'  =>  _t('%s 分类下的东东_(:з」∠)_'),
	'search'    =>  _t('带有 %s 这个词的东东_(:з」∠)_'),
	'tag'       =>  _t('贴了 %s 标签的东东_(:з」∠)_'),
	'author'    =>  _t('%s 写的东东_(:з」∠)_')
	), '', ' - '); ?><?php $this->options->title(); ?></title>
<link href="<?php $this->options->themeUrl('style.css'); ?>" rel="stylesheet">
<?php $this->header(); ?>
</head>
<body>
<?php if ($this->options->theme_color): ?>
	<header id="header" class="header" style="background-color:rgba(<?php echo hexdec(substr($this->options->theme_color,1,2)) , "," , hexdec(substr($this->options->theme_color,3,2)) , "," , hexdec(substr($this->options->theme_color,5,2)); ?>,0.618)">
<?php else: ?>
	<header id="header" class="header" style="background-color:rgba(102,204,255,0.618)">
<?php endif; ?>
		<div class="logo">
			<?php if ($this->options->logoUrl): ?>
			<img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
			<?php endif; ?>
		</div>
		<div class="site-name"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></div>
		<div class="description">/*<?php $this->options->description() ?>*/</div>
		<div class="site-search">
			<form method="post" id="searchform" action="<?php $this->options->siteUrl(); ?>" role="search">
				<fieldset class="search">
					<input type="text" name="s" class="box" id="searchbox" placeholder="Search" required />
					<button class="btn submit" type="submit" title="Submit Search" >Search</button>
				</fieldset>
			</form>
		</div>
	<div class="page">
                <nav id="nav-menu" class="clearfix" role="navigation">
                    <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>">Home</a>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                </nav>
	</div>
	</header>
	<div id="body">
