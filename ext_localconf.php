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

// register extractor
\TYPO3\CMS\Core\Resource\Index\ExtractorRegistry::getInstance()->registerExtractionService('AUS\AusDriverLocalCdn\Index\Extractor');

/* @var $signalSlotDispatcher \TYPO3\CMS\Extbase\SignalSlot\Dispatcher */
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Extbase\SignalSlot\Dispatcher');
$signalSlotDispatcher->connect('TYPO3\\CMS\\Core\\Resource\\Index\\FileIndexRepository', 'recordUpdated', 'AUS\AusDriverLocalCdn\Signal\FileIndexRepository', 'recordUpdatedOrCreated');
$signalSlotDispatcher->connect('TYPO3\\CMS\\Core\\Resource\\Index\\FileIndexRepository', 'recordCreated', 'AUS\AusDriverLocalCdn\Signal\FileIndexRepository', 'recordUpdatedOrCreated');
