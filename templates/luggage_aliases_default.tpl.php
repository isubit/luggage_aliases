<div class="media">
    <?php if(!$aliasName): ?>
    <div class="media-left">
        <a href="<?php print $GLOBALS['base_url']; ?><?php if(!$aliasName) print "/" . drupal_get_path_alias('node/' . $url); else print $url; ?>">
            <img src="<?php print $image_src; ?>">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading">
            <a href="<?php print $GLOBALS['base_url']; ?><?php if(!$aliasName) print "/" . drupal_get_path_alias('node/' . $url); else print $url; ?>"><?php print $firstname; ?> <?php print $lastname; ?> <small><em><?php print $position; ?></em></small>
            </a>
        </h4>
        <small><?php print $bio; ?></small>
    </div>
    <?php else: ?>
    <h4 class="media-heading">
        <a href="<?php print $GLOBALS['base_url']; ?><?php if(!$aliasName) print "/" . drupal_get_path_alias('node/' . $url); else print $url; ?>">
            <?php print $aliasName; ?>
        </a>
    </h4>
    <?php endif; ?>
</div>