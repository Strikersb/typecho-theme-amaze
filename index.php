<?php
/**
 * 这是基于AmazeUI&Jeklly theme的主题
 * 
 * @package Amaze Theme
 * @author Spiritree
 * @version 1.1.0
 * @link spiritree.me
 */


if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<!-- header end -->

<!-- content start -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-lg-8 am-u-sm-12">
        <?php while($this->next()): ?>
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-lg-12 am-u-sm-12 blog-entry-text">
                <h1><a target="_blank" itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
            <div>
    		<?php $this->excerpt(200, '...'); ?>
            </div>

            <div class="am-g blog-meta">
                <div class="am-u-lg-6 am-text-left">
                    Posted by <?php $this->author(); ?> on <?php $this->date('Y/m/d'); ?>
                </div>

                <div class="am-u-lg-6 am-text-right post-tags">
                    <?php $this->category(' '); ?>
                </div>
            </div>
              
            </div>
        </article>
        <?php endwhile; ?>
        <ul class="am-pagination">
            <?php $this->pageLink('&laquo; Prev','prev');?>
            <?php $this->pageLink('Next &raquo;','next');?>
        </ul>
    </div>
    <?php $this->need('sidebar.php'); ?>
</div>
<!-- content end -->

<!-- footer start -->
<?php $this->need('footer.php'); ?>
<!-- footer end -->