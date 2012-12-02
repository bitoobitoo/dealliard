<?php
/**/

$this->pageTitle = Yii::app()->name;
?>

<div class="Manufacturer" onclick="manufacturer()"><?php echo Yii::t('app','�������������')?></div>
<div class="Wholesaler" onclick="wholesaler()"><?php echo Yii::t('app','�������')?></div>
<div class="Retail" onclick="retail()"><?php echo Yii::t('app','�������')?></div>
<div class="Supplier" onclick="supplier()"><?php echo Yii::t('app','���������� �����')?></div>
<div class="Consumer" onclick="consumer()"><?php echo Yii::t('app','�������� �����������')?></div>

<div class="Agreement" style="visibility:hidden">
	<div class="InfoText"></div>
	<input type="checkbox" class="AgreeCheckbox" onclick="check()">
	<a href="index.php?r=site/agreement"><?php echo Yii::t('app','���������������� ����������')?></a>
</div>

<input type="button" class="Next" onclick="redirect()" value="<?php echo Yii::t('app','����������')?>" style="visibility:hidden">


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">

	function manufacturer()
	{
		if ($(".InfoText").is(":hidden"))
		{
			$(".Agreement").css("visibility","visible");
		}
		$(".InfoText").html("<?php echo Yii::t('app','manufacturer') ?>");
	}
	
	function wholesaler()
	{
		if ($(".InfoText").is(":hidden"))
		{
			$(".Agreement").css("visibility","visible");
		}
		$(".InfoText").html("<?php echo Yii::t('app','wholesaler') ?>");
	}
	
	function retail()
	{
		if ($(".InfoText").is(":hidden"))
		{
			$(".Agreement").css("visibility","visible");
		}
		$(".InfoText").html("<?php echo Yii::t('app','retail') ?>");
	}
	
	function supplier()
	{
		if ($(".InfoText").is(":hidden"))
		{
			$(".Agreement").css("visibility","visible");
		}
		$(".InfoText").html("<?php echo Yii::t('app','supplier') ?>");
	}
	
	function consumer()
	{
		if ($(".InfoText").is(":hidden"))
		{
			$(".Agreement").css("visibility","visible");
		}
		$(".InfoText").html("<?php echo Yii::t('app','consumer') ?>");
	}
	
	function check()
	{
		if ($(".AgreeCheckbox").is(":checked"))
		{
			$(".Next").css("visibility","visible");
		}
		else
		{
			$(".Next").css("visibility","hidden");
		}
	}
	
	function redirect()
	{
		window.location = "/index.php?r=site/join";
	}
	
</script>