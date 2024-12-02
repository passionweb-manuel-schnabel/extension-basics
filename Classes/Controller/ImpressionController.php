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
        if((int) $this->settings["filterEntries"] === -1) {
            $impressions = $this->impressionRepository->findAll();
        } else {
            $impressions = $this->impressionRepository->findByCategory($this->settings["filterEntries"]);
        }
        $this->view->assign('impressions', $impressions);
        return $this->htmlResponse();
    }
}
