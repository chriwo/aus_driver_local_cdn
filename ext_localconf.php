<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// register driver
/** @var \TYPO3\CMS\Core\Resource\Driver\DriverRegistry $driverRegistry */
$driverRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Resource\\Driver\\DriverRegistry');
$driverRegistry->registerDriverClass(
	'AUS\AusDriverLocalCdn\Driver\LocalCdnDriver',
	\AUS\AusDriverLocalCdn\Driver\LocalCdnDriver::DRIVER_TYPE,
	'Local filesystem, CDN',
	'FILE:EXT:' . \AUS\AusDriverLocalCdn\Driver\LocalCdnDriver::EXTENSION_KEY . '/Configuration/FlexForm/AusDriverLocalCdnFlexForm.xml'
);
