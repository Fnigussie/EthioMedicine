<?php
/**
* This is the base config file.  Other config files may extend this.  See development.php
*/


// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Ethio Pharmacy',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),


	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'uiSettings'=>array(
			'class'=>'UiSettings',
		),

		'sc'=>array(
			'class' => 'application.components.SrcCollect',
		),
		/*'dbManager'=>array(
			'class' => 'application.components.DbManager',
		), */
		'lc'=>array(
			'class' => 'application.components.LocaleManager',
		),
	
		
		'db'=>array
			(
				'class'=>'CDbConnection',
				'connectionString'=>'oci:dbname=10.1.0.9:1521/datanew;charset=UTF8',
				'username'=>'antenehg',
				'password'=>'antenehg',
			),
		// uncomment the following to use a MySQL database
		/*'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=test',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),*/
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),
	
	'modules' => array(
		'user' => array(
                        'debug' => true,
                        ),
						
	    'gii'=>array(
						'class'=>'system.gii.GiiModule',
						'password'=>'@ngeboY1',
						'ipFilters'=>array('127.0.0.1'),
				), 
		'AjaxModule',
		'UiModule',
		'InternationalizationModule',
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'database_format'=>array(
			'date'=>'yyyy-MM-dd',
			'time'=>'HH:mm:ss',
			'dateTimeFormat'=>'{1} {0}',
		),
	),
);