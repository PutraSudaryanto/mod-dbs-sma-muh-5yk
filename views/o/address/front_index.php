<?php
/**
 * Dbs Student Addresses (dbs-student-address)
 * @var $this AddressController
 * @var $model DbsStudentAddress
 * @var $dataProvider CActiveDataProvider
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2016 Ommu Platform (opensource.ommu.co)
 * @created date 27 July 2016, 02:53 WIB
 * @link https://github.com/ommu/PSB
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Dbs Student Addresses',
	);
?>

<?php $this->widget('application.libraries.core.components.system.FListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager' => array(
		'header' => '',
	), 
	'summaryText' => '',
	'itemsCssClass' => 'items clearfix',
	'pagerCssClass'=>'pager clearfix',
)); ?>
