<?php

defined('TYPO3') or die();


use Passionweb\ExtensionBasics\Controller\ImpressionController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

(static function (string $extensionName): void {
    ExtensionUtility::configurePlugin(
        $extensionName,
        'Impression',
        [
            ImpressionController::class => 'printImpression'
        ]
    );
})('ExtensionBasics');