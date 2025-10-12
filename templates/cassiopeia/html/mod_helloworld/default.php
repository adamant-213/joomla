<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_helloworld
 */

defined('_JEXEC') or die;
?>

<div class="mod-helloworld" style="padding: 2rem 0; text-align: center;">
  <h3 style="margin-bottom: 2rem;"><?php echo htmlspecialchars($message); ?></h3>
<div style="display: flex; justify-content: center; align-items: center;">
  <iframe
    src="https://www.youtube.com/embed/dQw4w9WgXcQ"
    title="YouTube video player"
    style="width: 50%; aspect-ratio: 16/9; border: 0;"
    allowfullscreen
    loading="lazy">
  </iframe>
</div>
</div>