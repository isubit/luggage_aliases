<div class="media">
    <?php if(!$aliasName): ?>
    <div class="media-left">
        <a href="<?php print $url; ?>">
            <img src="<?php print $image_src; ?>" class="img-circle img-avatar">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading">
            <a href="<?php print $url; ?>"><?php print $name; ?>
            </a>
            <br />
            <small><?php print $created; ?></small>
        </h4>

    </div>
    <?php else: ?>
    <h4 class="media-heading">
        <a href="<?php print $GLOBALS['base_url']; ?><?php if(!$aliasName) print "/" . drupal_get_path_alias('node/' . $url); else print $url; ?>">
            <?php print $aliasName; ?>
        </a>
        <br />
        <small><?php print $created; ?></small>
    </h4>
    <?php endif; ?>
</div>