<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/translit.js" type="text/javascript"></script>
        <script type="text/javascript">

        function processKeys(event) {

            //if (event.keyCode == 27 && !isExplorer()) { //escape to
            realTime = document.getElementById("Amh").checked;
            if (realTime) {
                translitonkey(event);
            }

        }
	</script>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css3.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jui/base/jquery-ui.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
	

	
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home |', 'url'=>array('/site/index')),
				array('label'=>'About | ', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact | ', 'url'=>array('/site/contact')),
				array('label'=>'FAQ | ', 'url'=>array('/site/page', 'view'=>'faq')),
			),
		)); ?>
	</div><!-- mb_mainmenu -->

    <div id="top_right_box_social">
			<?php $this->widget('application.extensions.social.social', array(
				'style'=>'vertical', 
					'networks' => array(
					'twitter'=>array(
						'data-via'=>'', //http://twitter.com/#!/YourPageAccount if exists else leave empty
						), 
					'googleplusone'=>array(
						"size"=>"medium",
						"annotation"=>"bubble",
					), 
					'facebook'=>array(
						'href'=>'https://www.facebook.com/your_facebook_page',//asociate your page http://www.facebook.com/page 
						'action'=>'recommend',//recommend, like
						'colorscheme'=>'light',
						'width'=>'120px',
						)
					)
			));?>
	</div>
	<div id="top_right_box">

	    <input id="Amh" type="checkbox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/et.jpeg" alt="Change input method to Amharic" title="Change input method to Amharic" />
	     &nbsp;|&nbsp;
		 <?php echo CHtml::link('Home',array('/site/index')); ?>
		 &nbsp;|&nbsp;
			<?php echo CHtml::link('Contact',array('/site/contact')); ?>
		&nbsp;|&nbsp;
		<?php echo CHtml::link('About',array('/site/page?view=about')); 
		     // echo CHtml::link('Logout ('.Yii::app()->user->name.')',array('/site/logout'));
		?>
	</div> 

	<div id="content">

	<div id="leftcolumn"><?php require_once 'leftbar.php';	?></div>
				<div id="centercolumn"><?php echo $content; ?></div>
	</div><!-- content -->
</div><!-- page -->
	<div id="footer">Copyright &copy; <?php echo date('Y'); ?> by the <a href="http://www.vedtechpro.com">Vedtechpro</a> Software Systems.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->
</body>
</html>
