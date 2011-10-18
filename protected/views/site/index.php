<?php $this->pageTitle=Yii::app()->name; ?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php
$this->widget('ext.bbcnewsticker.EBBCNewsTicker',
            array('items'=>array(
                           'Yii Framework is great'=>'http://www.yiiframework.com/download/', 'Anteneh is also great'=>'http://www.vtp.com/',
                           ),
                              'wrapperTag'=>'div', //if you want a wrapper around the newsticker
                              'wrapperHtmlOptions'=>array('class'=>'mynewsticker'),
                              'options'=>array(
        'tickerRate' => 100, // time gap between display of each letter (ms)
        'startDelay' => 100, // delay before first run of the ticker (ms)
        'loopDelay' => 2000, //time for which full text of each item is shown at end of print-out (ms)
        'placeHolder1' => ' |', // character placeholder shown on even loops
        'placeHolder2' => '_', // character placeholder shown on odd loops
        'controls' => false,  // show resume / stop controls (see below for the markup added)
        'ownControls' => false,  // use own markup for controls (sets controls = true)
        'stopOnHover' => true,  // trigger the stop action on hovering over the links
        'resumeOffHover' => false  // trigger the resume action on mouseout from the links. NB the links must be block display for this to work reliably with stopOnHover
    )   
             )
); ?>
<div class="form">
    <?php $this->beginWidget('application.extensions.coolfieldset.JCollapsibleFieldset', array(
        'onlyFieldset'=>true,
        'legend'=>'Message of Director General'
    )); ?>
			
    <?php $this->endWidget('application.extensions.coolfieldset.JCollapsibleFieldset'); ?><!-- collabsible fieldset -->
 



    <?php $this->beginWidget('application.extensions.coolfieldset.JCollapsibleFieldset', array(
        'collapsed'=>false,
       # 'animation'=>true,
        'legend'=>'Notes :'
    )); ?>
    <ul>        
        <li>Edit the <b>jquery.coolfieldset.css</b> to change the fieldset style.</li>
    </ul>
    <?php $this->endWidget('application.extensions.coolfieldset.JCollapsibleFieldset'); ?><!-- collabsible fieldset -->
    
	  <?php $this->beginWidget('application.extensions.coolfieldset.JCollapsibleFieldset', array(
        'legend'=>'Watch/Listen to TV and Radio Program'
    )); ?>

    <?php $this->endWidget(); ?><!-- collabsible fieldset -->
	
	    <?php $this->beginWidget('application.extensions.coolfieldset.JCollapsibleFieldset', array(
        'collapsed'=>false,
        'legend'=>'Ethiopian Pharmacies!',
        'legendHtmlOptions'=>array('title'=>'Click me with the mouse!')
    )); ?>
	  <table width="100%" border="0">
				 <tr>
					   <td width="33.3%" valign="top" align="left">
							<a target="_blank" href="#" title="telecommunication">Zenbaba </a>
					   </td>
					   <td class="othergweb" width="33.3%" valign="top" align="left">
							<a target="_blank" href="#" title="Ministry of Education"> Addis </a>
					   </td>
					   <td width="33.3%" valign="top" align="left">
							<a target="_blank" href="http://www.ethionet.et" title="Telecommunication"> www.ethionet.et </a>
					   </td>
				  </tr>
			      <tr>
						<td valign="top" align="left">
							<a target="_blank" href="http://www.ethiopia.gov.et" title="EFDRE Website"> www.ethiopia.gov.et </a>
						</td>
						<td class="othergweb" valign="top" align="left">
							<a href="http://www.moh.gov.et" title="Ministry ot Health"> www.moh.gov.et </a>
						</td>
						<td valign="top" align="left">
							<a target="_blank" href="http://www.flyethiopian.com" title="Ethiopian Airlines"> www.flyethiopian.com </a>
						</td>
				 </tr>
				 <tr>
						<td class="othergweb" valign="top" align="left">
							<a href="http://www.mofed.gov.et" title="Ministry of Finance and Economic development "> www.mofed.gov.et </a>
						</td>
						<td valign="top" align="left">
							<a target="_blank" href="http://www.nbe.gov.et" title="National Bank of Ethiopia"> www.nbe.gov.et </a>
						</td>
						<td class="othergweb" valign="top" align="left">
							<a href="http://www.combanketh.com" title="Commercial Bank of Ethiopia"> www.combanketh.com </a>
						</td>
				</tr>
			</table>
    <?php $this->endWidget('application.extensions.coolfieldset.JCollapsibleFieldset'); ?><!-- collabsible fieldset -->
</div><!-- form -->

