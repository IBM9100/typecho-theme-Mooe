<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

        <article class="post">
            <a href="<?php $this->permalink() ?>">
                <h2><?php $this->title() ?></h2>
                <time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
            </a>

            <div class="post-content">
                <?php $this->content(); ?>
                <span class="left">上一篇: <?php $this->thePrev('%s','没有了'); ?></span>
                <span class="right">下一篇: <?php $this->theNext('%s','没有了'); ?></span>
            </div>

        </article>

   <?php $this->need('comments.php'); ?>


<?php $this->need('footer.php'); ?>
