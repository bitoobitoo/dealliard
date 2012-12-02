<?php
/**/

$this->pageTitle = Yii::app()->name;
?>

<div class="Manufacturer" onclick="manufacturer()"><?php echo Yii::t('app','Manufacturer')?></div>
<div class="Wholesaler" onclick="wholesaler()"><?php echo Yii::t('app','Wholesaler')?></div>
<div class="Retail" onclick="retail()"><?php echo Yii::t('app','Retail')?></div>
<div class="Supplier" onclick="supplier()"><?php echo Yii::t('app','Supplier')?></div>
<div class="Consumer" onclick="consumer()"><?php echo Yii::t('app','Consumer')?></div>

<?php echo CHtml::beginForm(); ?>
<?php echo CHtml::activeHiddenField($model,'type',array("id"=>"type")); ?>

<div class="Agreement" style="visibility:hidden">
	<div class="InfoText"></div>
	<input type="checkbox" class="AgreeCheckbox" onclick="check()">
	<a href="index.php?r=site/agreement"><?php echo Yii::t('app','User Agreement')?></a>
</div>

<?php echo CHtml::submitButton(Yii::t('app','Proceed'),array("id"=>"proceed")); ?>
<?php echo CHtml::endForm(); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$("#proceed").css("visibility","hidden");
	});
	
	function manufacturer()
	{
		if ($(".InfoText").is(":hidden"))
		{
			$(".Agreement").css("visibility","visible");
		}
		$(".InfoText").html("<?php echo Yii::t('app','Manufacturer Info Text') ?>");
		$("#type").val("manufacturer");
	}
	
	function wholesaler()
	{
		if ($(".InfoText").is(":hidden"))
		{
			$(".Agreement").css("visibility","visible");
		}
		$(".InfoText").html("<?php echo Yii::t('app','Wholesaler Info Text') ?>");
		$("#type").val("wholesaler");
	}
	
	function retail()
	{
		if ($(".InfoText").is(":hidden"))
		{
			$(".Agreement").css("visibility","visible");
		}
		$(".InfoText").html("<?php echo Yii::t('app','Retail Info Text') ?>");
		$("#type").val("retail");
	}
	
	function supplier()
	{
		if ($(".InfoText").is(":hidden"))
		{
			$(".Agreement").css("visibility","visible");
		}
		$(".InfoText").html("<?php echo Yii::t('app','Supplier Info Text') ?>");
		$("#type").val("supplier");
	}
	
	function consumer()
	{
		if ($(".InfoText").is(":hidden"))
		{
			$(".Agreement").css("visibility","visible");
		}
		$(".InfoText").html("<?php echo Yii::t('app','Consumer Info Text') ?>");
		$("#type").val("consumer");
	}
	
	function check()
	{
		if ($(".AgreeCheckbox").is(":checked"))
		{
			$("#proceed").css("visibility","visible");
		}
		else
		{
			$("#proceed").css("visibility","hidden");
		}
	}
	
</script>