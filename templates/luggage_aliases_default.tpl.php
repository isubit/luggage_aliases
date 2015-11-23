<div href="<?php print $GLOBALS['base_url']; ?><?php if(!$aliasName) print "/" . drupal_get_path_alias('node/' . $url); else print $url; ?>" class="media">
    <?php if(!$aliasName): ?>
    <div class="media-left">
        <img src="<?php print $image_src; ?>" style="min-width:64px;width:64px">
    </div>
    <div class="media-body">
        <h4 class="media-heading"><?php print $firstname; ?> <?php print $lastname; ?> <small><em><?php print $position; ?></em></small></h4>
        <small><?php print $bio; ?></small>
    </div>
    <?php else: ?>
      <h4 class="media-heading"><?php print $aliasName; ?></h4>
    <?php endif; ?>
</div>
