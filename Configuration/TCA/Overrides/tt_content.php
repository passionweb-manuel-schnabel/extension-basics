<?php
defined('TYPO3') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'ExtensionBasics',
    'Impression',
    'LLL:EXT:extension_basics/Resources/Private/Language/locallang_db.xlf:plugin.impression.title',
    'tx-extensionbasics-plugin-impression',
    'plugins',
    'LLL:EXT:extension_basics/Resources/Private/Language/locallang_db.xlf:plugin.impression.description'
);

