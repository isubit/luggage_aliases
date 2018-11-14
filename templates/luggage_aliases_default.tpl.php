<div class="media">
    <?php if(!$aliasName): ?>
    <div class="media-left">
        <a href="<?php print $GLOBALS['base_url']; ?><?php if(!$aliasName) print "/" . drupal_get_path_alias('node/' . $url); else print $url; ?>">
            <img src="<?php print $image_src; ?>">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading">
            <a href="<?php print $GLOBALS['base_url']; ?><?php if(!$aliasName) print "/" . drupal_get_path_alias('node/' . $url); else print $url; ?>">
                <div class="luggage-alias_name">
                    <?php print $firstname; ?> <?php print $lastname; ?>
                </div>
                <div class="luggage-alias_position">
                    <?php print $position; ?>
                </div>
            </a>
        </h4>
        <div class="luggage-alias_bio">
            <?php print $bio; ?>
        </div>
    </div>
    <?php else: ?>
    <h4 class="media-heading">
        <a href="<?php print $GLOBALS['base_url']; ?><?php if(!$aliasName) print "/" . drupal_get_path_alias('node/' . $url); else print $url; ?>">
            <?php print $aliasName; ?>
        </a>
    </h4>
    <?php endif; ?>
</div>