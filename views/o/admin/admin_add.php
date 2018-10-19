<?php
/**
 * Dbs Students (dbs-students)
 * @var $this AdminController
 * @var $model DbsStudents
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2016 Ommu Platform (www.ommu.co)
 * @created date 27 July 2016, 02:52 WIB
 * @link https://github.com/ommu/PSB
 *
 */

	$this->breadcrumbs=array(
		'Dbs Students'=>array('manage'),
		Yii::t('phrase', 'Create'),
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
