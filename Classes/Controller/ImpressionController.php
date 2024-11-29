<?php

namespace Passionweb\ExtensionBasics\Controller;

use Passionweb\ExtensionBasics\Domain\Repository\ImpressionRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ImpressionController extends ActionController
{
    protected ImpressionRepository $impressionRepository;
    public function __construct(ImpressionRepository $impressionRepository)
    {
        $this->impressionRepository = $impressionRepository;
    }

    public function printImpressionAction() : ResponseInterface
    {
        $impressions = $this->impressionRepository->foundAll();
        $this->view->assignMultiple([
            'impressions' => $impressions
        ]);
        return $this->htmlResponse();
    }
}
