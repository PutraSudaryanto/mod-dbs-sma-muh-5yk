<?php
/**
 * Dbs Student Addresses (dbs-student-address)
 * @var $this AddressController
 * @var $model DbsStudentAddress
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2016 Ommu Platform (opensource.ommu.co)
 * @created date 27 July 2016, 02:53 WIB
 * @link https://github.com/ommu/PSB
 *
 */

	$this->breadcrumbs=array(
		'Dbs Student Addresses'=>array('manage'),
		'Create',
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
