<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php echo $about; ?>
                <h3>Posts by this author</h3>
                <?php if (!empty($posts)) { ?>
                    <ul class="post-list">
                        <?php foreach ($posts as $p): ?>
                            <li class="item">
                                <span><a href="<?php echo $p->url ?>"><?php echo $p->title ?></a></span> on
                                <span><?php echo format_date($p->date); ?></span> - Posted in <span><?php echo $p->category ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php } else {
                    echo 'No posts found!';
                } ?>
                <?php if (!empty($posts)) { ?>
                <?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <?php if (!empty($pagination['prev'])): ?>
                    <li class="prev pull-left">
                        <a class="prev page-numbers" href="?page=<?php echo $page - 1 ?>" rel="prev">&larr; Newer Posts</a>
                    </li>
                    <?php endif;?>
                    <?php if (!empty($pagination['next'])): ?>
                    <li class="next pull-right">
                        <a class="next page-numbers" href="?page=<?php echo $page + 1 ?>" rel="next">Older Posts &rarr;</a>
                    </li>
                    <?php endif;?>
                </ul>
                <?php endif; ?>
                <?php } ?>
            </div>
        </div>
    </div>
</article>