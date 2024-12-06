<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

$pluginSignature = \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'ExtensionBasics',
    'Impression',
    'LLL:EXT:extension_basics/Resources/Private/Language/locallang_db.xlf:plugin.impression.title',
    'tx-extensionbasics-plugin-impression',
    'plugins',
    'LLL:EXT:extension_basics/Resources/Private/Language/locallang_db.xlf:plugin.impression.description'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'ExtensionBasics',
    'ImpressionDetails',
    'LLL:EXT:extension_basics/Resources/Private/Language/locallang_db.xlf:plugin.impressiondetails.title',
    'tx-extensionbasics-plugin-impression',
    'plugins',
    'LLL:EXT:extension_basics/Resources/Private/Language/locallang_db.xlf:plugin.impressiondetails.description'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tx_extensionbasics_domain_model_impression',
    'categories'
);


$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:extension_basics/Configuration/FlexForms/PluginPrintImpression.xml'
);