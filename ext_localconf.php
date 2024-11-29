<?php

defined('TYPO3') or die();

use Passionweb\ExtensionBasics\Controller\ImpressionController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'ExtensionBasics',
    'Impression',
    [
        ImpressionController::class => 'printImpression'
    ],
    [
        ImpressionController::class => 'printImpression'
    ]
);
