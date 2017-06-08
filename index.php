<?php
/**
 * 一个简约的萌系单栏主题
 *
 * @package Theme of mooe
 * @author Mooe
 * @version alpha
 * @link https://mooe.me
 *
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="main">
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

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->
