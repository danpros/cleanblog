<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php if (login()) { echo tab($p); } ?> 
                <?php echo $p->body;?>
				
                <?php if (!empty($next) || !empty($prev)): ?>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <?php if (!empty($next)): ?>
                    <li class="next pull-left">
                        <a href="<?php echo($next['url']); ?>" rel="next">&larr; <?php echo($next['title']); ?></a>
                    </li>
                    <?php endif;?>
                    <?php if (!empty($prev)): ?>
                    <li class="prev pull-right">
                        <a href="<?php echo($prev['url']); ?>" rel="prev"><?php echo($prev['title']); ?> &rarr;</a>
                    </li>
                    <?php endif;?>
                </ul>
                <?php endif; ?>						
				
            </div>
        </div>
    </div>
</article>