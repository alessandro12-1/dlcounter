<?php
use Plib\View;

if (!isset($this)) {http_response_code(403); exit;}

/**
 * @var View $this
 * @var string $actionUrl
 * @var string $basename
 * @var string $size
 * @var int $times
 * 
 * changed october 2026 - Alessandro Lin
 */
$actionUrl = $this->esc($_data['actionUrl']);
$basename = $this->esc($_data['basename']);
$size = $this->esc($_data['size']);
?>

<form class="dlcounter" action="<?=$actionUrl?>" method="post">
  <input type="hidden" name="dlcounter" value="<?=$basename?>">
  <button class="dlcounter_button">
    <span><?=$this->text('label_download', $basename, $size)?></span>
    <span class="dlcounter_count"><?=$this->plural('label_dlcount', (int)$this->esc($_data['times']))?></span>
  </button>
</form>
