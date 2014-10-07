<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// register driver
$TYPO3_CONF_VARS['SYS']['fal']['registeredDrivers'][\AUS\AusDriverLocalCdn\Driver\LocalCdnDriver::DRIVER_TYPE] = array(
	'class' => 'AUS\AusDriverLocalCdn\Driver\LocalCdnDriver',
	'label' => 'Local filesystem, CDN',
	'flexFormDS' => 'FILE:EXT:aus_driver_local_cdn/Configuration/FlexForm/AusDriverLocalCdnFlexForm.xml'
);
