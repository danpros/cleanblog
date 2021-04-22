<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <?php if (config('category.info') === 'true'):?>
            <?php if (!empty($category)): ?>
                <div class="category-info">
                    <blockquote class="category">                                   
                        <?php echo $category->body; ?>
                    </blockquote>
                    <hr>
                </div>
            <?php endif; ?>
        <?php endif; ?>
            <?php foreach ($posts as $p): ?>
            <div class="post-preview">
                <a href="<?php echo $p->url; ?>">
                    <h2 class="post-title">
                        <?php echo $p->title; ?>
                    </h2>
                </a>
                <p class="post-meta">Posted in <?php echo $p->category; ?> by <a href="<?php echo $p->authorUrl; ?>"><?php echo $p->authorName; ?></a> on <?php echo format_date($p->date); ?></p>
                <?php echo get_teaser($p->body, $p->url); ?>
            </div>
            <hr>
            <?php endforeach; ?>
            <?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
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
        </div>
    </div>
</div>