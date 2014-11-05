<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<?php echo CHtml::cssFile('css/bootstrap/css/bootstrap.min.css'); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="background-color: #808080;">

<!-- header -->
<?php $this->beginContent('/layouts/menu'); ?>
<?php $this->endContent(); ?>

<div class="container">

	<div style="background-color: white; padding: 20px; border-top-left-radius: 30px; border-top-right-radius: 30px;">
		<?php echo $content; ?>
	</div>

	<div class="clear"></div>

	<?php echo CHtml::scriptFile('css/bootstrap/js/jquery.min.js'); ?>
	<?php echo CHtml::scriptFile('css/bootstrap/js/bootstrap.min.js'); ?>

</div><!-- page -->

<div align="center" style="background-color: #202020; padding: 10px; color: white; font-size: 14pt;">
	Copyright &copy; <?php echo date('Y'); ?> by ชมรมคอมพิวเตอร์ มทส.<br/>
	All Rights Reserved.<br/>
	<?php echo Yii::powered(); ?>
</div><!-- footer -->

</body>
</html>
