<?php
$this->layout="front";
?>

<h2>hey<h2>

<?php 
  echo $this->Html->link(_('click me'),'#', array(
  'class'=>'btn btn-primary',
  )
 );
 ?>