<?php
/**/

$this->pageTitle = Yii::app()->name;
?>
<div class="welcome_container">
    <div class="welcome_social">
		<div class="welcome_social_one">
		</div>
		<div class="welcome_social_one">
		</div>
	</div>
	<?php echo CHtml::beginForm(); ?>
	<?php echo CHtml::activeHiddenField($model,'type',array("id"=>"type")); ?>
	<div class="welcome">    
		<div class="welcome_note">
			<p class="note_text">„тобы зарегистрироватьс€, выберите, к какой категории относитс€ ваша компани€:</p>
		</div>
		<div class="welcome_main">
			<div class="welcome_inner_box">
				<div class="welcome-titles">
					<span class="block1"><?php echo Yii::t('app','Manufacturer')?></span><br />
					<span class="block2"><?php echo Yii::t('app','Wholesale')?></span><br />
					<span class="block3"><?php echo Yii::t('app','Retail')?></span><br />
					<span class="block4"><?php echo Yii::t('app','Supplier')?></span><br />
					<span class="block5"><?php echo Yii::t('app','Consumer')?></span><br />
				</div>
				<img style="margin:35px 0 0 -0px" src="<?php echo Yii::app()->request->baseUrl; ?>/images/join/all.png" >
				<div class="right"></div>
			</div>
		</div>	
	</div>
	<div class="agreement" style="visibility:hidden">
		<input type="checkbox" class="AgreeCheckbox" onclick="check()">
		<a href="index.php?r=site/agreement"><?php echo Yii::t('app','User Agreement')?></a>
		<br/>
		<?php echo CHtml::submitButton(Yii::t('app','Proceed'),array("id"=>"proceed","class"=>"button","style"=>"visibility:hidden")); ?>	
	</div>
	<?php echo CHtml::endForm(); ?>
</div>
<div id="leave_email_dialog" title="Basic dialog" style="display: none;">
	<p>Some text</p>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
	
	$(".block1").live("click",function(){
		$(".right").html('<img style="position:absolute;  top:50px ;left:-280px" src="./images/join/line1.png">');
		$(".right").append('<img  src="./images/join/fill1.png">');
		$(".right").append('<p class="parts_text"><?php echo Yii::t('app','Manufacturer Info Text Part 1') ?></p>');
		$(".right").append('<p class="parts_text"><?php echo Yii::t('app','Manufacturer Info Text Part 2') ?></p>');
		$(".right").append('<img src="./images/join/pic1.png" >');
		$(".right").append('<p class="parts_text_blue"><?php echo Yii::t('app','Manufacturer Info Text Part 3') ?></p>');
		$(".right").append('<p class="parts_text_bold"><?php echo Yii::t('app','Manufacturer Info Text Part 4') ?></p>');
		$(".agreement").css("visibility","visible");
		$("#type").val("manufacturer");
	});
	
	$(".block2").live("click",function(){
		$(".right").html('<img style="position:absolute; top:45px ;left:-280px" src="./images/join/line2.png">');
		$(".right").append('<img  src="./images/join/fill2.png">');
		$(".right").append('<p class="parts_text"><?php echo Yii::t('app','Wholesaler Info Text Part 1') ?></p>');
		$(".right").append('<p class="parts_text"><?php echo Yii::t('app','Wholesaler Info Text Part 2') ?></p>');
		$(".right").append('<img src="./images/join/pic2.png" >');
		$(".right").append('<p class="parts_text_blue"><?php echo Yii::t('app','Wholesaler Info Text Part 3') ?></p>');
		$(".right").append('<p class="parts_text_bold"><?php echo Yii::t('app','Wholesaler Info Text Part 4') ?></p>');
		$(".agreement").css("visibility","visible");
		$("#type").val("wholesaler");
	});
	
	$(".block3").live("click",function(){
		$(".right").html('<img style="position:absolute; top:128px ;left:-280px; " src="./images/join/line3A.png">');
		$(".right").append('<img style="position:absolute; top:128px ;left:-82px; " src="./images/join/line3B.png">');
		$(".right").append('<img  src="./images/join/fill3.png">');
		$(".right").append('<p class="parts_text"><?php echo Yii::t('app','Retail Info Text Part 1') ?></p>');
		$(".right").append('<img src="./images/join/pic3.png" >');
		$(".right").append('<p class="parts_text_blue"><?php echo Yii::t('app','Retail Info Text Part 2') ?></p>');
		$(".right").append('<p class="parts_text_bold"><?php echo Yii::t('app','Retail Info Text Part 3') ?></p>');
		$(".agreement").css("visibility","visible");
		$("#type").val("retail");
	});
	
	$(".block4").live("click",function(){
		$(".right").html('<img style="position:absolute; top:160px ;left:-280px ;z-index:1" src="./images/join/line4.png">');
		$(".right").append('<img  src="./images/join/fill4.png">');
		$(".right").append('<p class="parts_text"><?php echo Yii::t('app','Supplier Info Text Part 1') ?></p>');
		$(".right").append('<p class="parts_text"><?php echo Yii::t('app','Supplier Info Text Part 2') ?></p>');
		$(".right").append('<img src="./images/join/pic4.png" >');
		$(".right").append('<p class="parts_text_blue"><?php echo Yii::t('app','Supplier Info Text Part 3') ?></p>');
		$(".right").append('<p class="parts_text_bold"><?php echo Yii::t('app','Supplier Info Text Part 4') ?></p>');
		$(".agreement").css("visibility","visible");
		$("#type").val("supplier");
	});
	
	$(".block5").live("click",function(){
		$(".right").html('<img style="position:absolute; top:200px ;left:-280px" src="./images/join/line5.png">');
		$(".right").append('<img style="margin: 10px 10px 0 -19px  " src="./images/join/fill5.png">');
		$(".right").append('<p class="parts_text" style="margin-top:5px"><?php echo Yii::t('app','Consumer Info Text Part 1') ?></p>');
		$(".right").append('<p class="parts_text"><?php echo Yii::t('app','Consumer Info Text Part 2') ?></p>');
		$(".right").append('<img src="./images/join/pic5.png" width="100px" >');
		$(".right").append('<p class="parts_text_blue"><?php echo Yii::t('app','Consumer Info Text Part 3') ?></p>');
		$(".right").append('<p class="parts_text_bold"><?php echo Yii::t('app','Consumer Info Text Part 4') ?></p>');
		$(".agreement").css("visibility","visible");
		$("#type").val("consumer");
	});
	
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