<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php if (login()) { echo tab($p); } ?> 
                <?php echo $p->body;?>
            </div>
        </div>
    </div>
</article>