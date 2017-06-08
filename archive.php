<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div id="main" role="main">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
        <article class="post">
            <a href="<?php $this->permalink() ?>">
                <h2><?php $this->title() ?></h2>
                <time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
                <div class="post-content" >
                    <?php $this->content(); ?>
                </div>
            </a>
        </article>
    <?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title" style="margin: 100px 0;"><?php _e('没有找到文章呢'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div><!-- end #main -->

	<?php $this->need('footer.php'); ?>
