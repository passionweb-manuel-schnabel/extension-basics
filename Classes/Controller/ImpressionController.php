<?php

namespace Passionweb\ExtensionBasics\Controller;

use Passionweb\ExtensionBasics\Domain\Repository\ImpressionRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ImpressionController extends ActionController
{
    protected ImpressionRepository $impressionRepository;

    public function __construct(ImpressionRepository $impressionRepository, private readonly ExtensionConfiguration $extensionConfiguration)
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
        $detailpageUid = $this->extensionConfiguration->get('extension_basics', 'detailpageUid');
        $this->view->assign('detailpageUid', $detailpageUid);
        return $this->htmlResponse();
    }

    public function printDetailedImpressionAction() : ResponseInterface
    {
        if($this->request->hasArgument('impression')){
            $this->view->assign('impression', $this->impressionRepository->findByUid($this->request->getArgument('impression')));
        }
        return $this->htmlResponse();
    }
}
