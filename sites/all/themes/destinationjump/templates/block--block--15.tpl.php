<div id="block-<?php print $block->module .'-'. $block->delta ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="block-inner">
<!--   <div id="sidebar-whats-new-icon"><img src="/sites/default/files/dj_content_j_icon.png" alt=""></div>    -->

 <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <h2 class="block-title"<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
    <?php endif;?>
    <?php print render($title_suffix); ?>


    <div class="content" <?php print $content_attributes; ?>>
      <?php print $content; ?>
    </div>

  </div>
</div> <!-- /block-inner /block -->