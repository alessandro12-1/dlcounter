<?php
use Plib\View;

if (!isset($this)) {http_response_code(403); exit;}

/**
 * @var View $this
 * @var string $version
 * @var list<array{class:string,label:string,stateLabel:string}> $checks
 */
/*
 * Changed by Alessandro Lin - www.cmsimple.it - october 2026
*/
?>
<h1>Dlcounter <?=$this->esc($_data['version'])?></h1>
<div>
  <h2><?=$this->text('synopsis_title')?></h2>
  <pre>{{{dlcounter('<?=$this->text('synopsis_filename')?>')}}}</pre>
</div>
<div>
  <h2><?php echo $this->text('syscheck_title'); ?></h2>
<?php
/* sostituito con questo blocco */
foreach ($_data['checks'] as $check) {
  $pClass = $this->esc($check['class']);
  $pTx = $this->text('syscheck_message', $check['label'], $check['stateLabel']);

  $par = <<<ARA
  <p class="{$pClass}">{$pTx}</p>
ARA;
  echo $par;
}
?>
</div>
