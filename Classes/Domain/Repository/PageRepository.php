<?php
namespace Portrino\PxSemantic\Domain\Repository;

    /***************************************************************
     *
     *  Copyright notice
     *
     *  (c) 2014 André Wuttig <wuttig@portrino.de>, portrino GmbH
     *
     *  All rights reserved
     *
     *  This script is part of the TYPO3 project. The TYPO3 project is
     *  free software; you can redistribute it and/or modify
     *  it under the terms of the GNU General Public License as published by
     *  the Free Software Foundation; either version 3 of the License, or
     *  (at your option) any later version.
     *
     *  The GNU General Public License can be found at
     *  http://www.gnu.org/copyleft/gpl.html.
     *
     *  This script is distributed in the hope that it will be useful,
     *  but WITHOUT ANY WARRANTY; without even the implied warranty of
     *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *  GNU General Public License for more details.
     *
     *  This copyright notice MUST APPEAR in all copies of the script!
     ***************************************************************/
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

/**
 * Class PageRepository
 *
 * @package Portrino\PxSemantic\Domain\Repository
 */
class PageRepository extends \TYPO3\CMS\Extbase\Persistence\Repository implements RestRepositoryInterface
{

    /**
     * @var array $defaultOrderings
     */
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    ];

    /**
     * Returns all objects of this repository limited by offset and limit constraint
     *
     * @param int $offset
     * @param int $limit
     *
     * @return QueryResultInterface|array
     */
    public function findByOffsetAndLimit($offset = 0, $limit = -1)
    {
        $query = $this->createQuery();

        if ($offset > 0) {
            $query->setOffset($offset);
        }

        if ($limit > -1) {
            $query->setLimit($limit);
        }

        return $query->execute();
    }


}
