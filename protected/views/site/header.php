<div class="container">
	<a  href="index.php">
		<img class="logo" src="/images/logo.png" alt="Dealliard" title="Dealliard">
	</a>
	<?php echo CHtml::beginForm(); ?>
	<table>
		<tr>
			<td>
				<?php echo CHtml::activeLabel($model,Yii::t('app','Email'),array("class"=>"welcome_login_p"))?>
			</td>
			<td>	
				<?php echo CHtml::activeTextField($model,'username',array("class"=>"welcome_login_input")); ?>
			</td>
			<td>
				<?php echo CHtml::activeCheckBox($model,'rememberMe',array("style"=>"float:left")); ?>
				<?php echo CHtml::activeLabel($model,Yii::t('app','Remember Me'),array("style"=>"font-size:12px"))?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo CHtml::activeLabel($model,Yii::t('app','Password'),array("class"=>"welcome_login_input"))?>
			</td>
			<td>
				<?php echo CHtml::activePasswordField($model,'password',array("class"=>"welcome_login_input")); ?>
			</td>
			<td>
				<?php echo CHtml::submitButton(Yii::t('app','Enter'),array("id"=>"enter","class"=>"button")); ?>
			</td>
		</tr>
	</table>
	<?php echo CHtml::endForm(); ?>
</div>