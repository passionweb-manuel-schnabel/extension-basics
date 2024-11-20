<?php

namespace Passionweb\ExtensionBasics\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ImpressionController extends ActionController
{
    public function printImpressionAction() : ResponseInterface
    {
        return $this->htmlResponse();
    }
}
