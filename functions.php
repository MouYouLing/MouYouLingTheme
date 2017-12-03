<?php

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);

	$theme_color = new Typecho_Widget_Helper_Form_Element_Text('theme_color', NULL, NULL, _t('站点配色'), _t('在这里填入一个Web颜色，不填则默认为<div style="color:#66CCFF">#66CCFF</div>'));
	$form->addInput($theme_color);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
	
	$cdnUrl = new Typecho_Widget_Helper_Form_Element_Text('cdnUrl', NULL, NULL, _t('资源CDN地址'), _t('在这里填入一个CDN地址, 主题中的所有图片都会从CDN目录下加载'));
	$form->addInput($cdnUrl);
}
