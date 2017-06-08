<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="user-scalable=no,width=400">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="//cdnjscn.b0.upaiyun.com/libs/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<header id="header">
        <nav>
            <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><img class="topbar" style="border-radius: 9em;" src="<?php $this->options->themeUrl('img/'); ?>home.jpg"><?php _e('首页'); ?></a>

            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while($category->next()): ?>
                <a<?php if($this->is('category', $category->slug)): ?> class="current"<?php endif; ?> href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>">
                <img src="<?php $this->options->themeUrl('img/category/'); ?><?php echo $category->slug() . '.svg'; ?>">
                <?php $category->name(); ?>
                </a>
            <?php endwhile; ?>

            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
                <img src="<?php $this->options->themeUrl('img/pages/'); ?><?php echo $pages->slug() . '.svg'; ?>">
                <?php $pages->title(); ?>
                 </a>
            <?php endwhile; ?>
        </nav>
            <div class="search">
                <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                    <input type="text" name="s" class="text" placeholder="<?php _e('搜索'); ?>" />
                    <!-- <button type="submit" class="submit"><?php _e('搜索'); ?></button> -->
                </form>
            </div>
</header><!-- end #header -->
<div id="body">
