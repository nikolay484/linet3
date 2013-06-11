<?php
$this->breadcrumbs=array(
	'Currates',
);

$this->menu=array(
	array('label'=>'Create Currates', 'url'=>array('create')),
	array('label'=>'Manage Currates', 'url'=>array('admin')),
);
?>

<h1>Currates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
