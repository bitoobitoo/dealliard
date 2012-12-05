<?php /* @var $this Controller */ ?>
<?php
$cs = Yii::app()->clientScript;
$cs->registerCssFile(Yii::app()->request->baseUrl . '/css/welcome.css');
$cs->registerCssFile(Yii::app()->request->baseUrl . '/css/base.css');
?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="bg_header">
	<?php echo $this->renderPartial('//site/header',array('model'=>new LoginForm)); ?>
</div>

<div class="mid">
	<?php echo $content; ?>
</div><!-- content -->

<div class="footer">
	<?php echo $this->renderPartial('//site/footer'); ?>
</div>
<?php echo $this->endContent(); ?>