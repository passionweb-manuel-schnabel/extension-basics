<?php

namespace Passionweb\ExtensionBasics\Domain\Repository;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class ImpressionRepository extends Repository
{
    public function initializeObject(): void
    {
        $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }

    /**
     * @throws InvalidQueryException
     */
    public function findByCategory(int $categoryUid): QueryResultInterface|array
    {
        $query = $this->createQuery();
        $query->matching(
            $query->contains('categories', $categoryUid)
        );
        return $query->execute();
    }
}
