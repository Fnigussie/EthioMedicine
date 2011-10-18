<?php $this->pageTitle=Yii::app()->name; ?>
<?php
$this->widget('ext.adGallery.AdGallery',
        array(
		    'agWidth' => 200, //450 px wide main image
            'agHeight' => 230, //200 px wide main image
            'agThumbHeight' => 45, //75px tall thumb images
            //'agEffect' => 'slide-vert', //vertically slide between images
            'agSlideShowAutoStart' => 'true', //Automatically start a slide show
			
            'imageList' => array(
                array(
                    'image_url' => 'images/1.jpg',
                    'title' => 'Test tile',
                    'link' => 'http://www.google.com/',
                    'alt' => 'Something something',
                ),
                array(
                    'image_url' => 'images/2.jpg',
                    'title' => 'Test tile sdfjaskdf',
                    'link' => 'http://www.msn.com/',
                ),
                'images/3.jpg',
                'images/4.jpg',
                'images/5.jpg',
                'images/6.jpg',
				'images/7.jpg',
            ),
        )
    );
	?>
	
	
<?php $this->beginWidget('application.extensions.EReadMore', array('linkUrl'=>'http://www.google.com'));?>
      <br>Go to google website
<?php $this->endWidget(); ?>

