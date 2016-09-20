<!DOCTYPE html>
<html<?php print $html_attributes . $rdf_namespaces; ?>>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
  <div id="skip">
    <a href="#content"><?php print t('Jump to Navigation'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
  <script src="https://www.smartwaiver.com/m/webpl/f.js?webpl_waiver=569568daeb6b5&webpl_title=Sign%20our%20waiver!&webpl_align=Right&webpl_fontsize=20&webpl_background=%2359f731&webpl_fontcolor=%23031045&webpl_font=Verdana" type="text/javascript"></script>
  
</body>
</html>