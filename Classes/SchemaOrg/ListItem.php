<?php
namespace Portrino\PxSemantic\SchemaOrg;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Andre Wuttig <wuttig@portrino.de>, portrino GmbH
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

/**
 * An list item, e.g. a step in a checklist or how-to description.
 *
 * @see http://schema.org/ListItem Documentation on Schema.org
 *
 * @author Andre Wuttig<wuttig@portrino.de>
 */
class ListItem extends Intangible
{

    /**
     * @var Thing An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
     */
    protected $item;

    /**
     * @return Thing
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Thing $item
     */
    public function setItem($item)
    {
        $this->item = $item;
    }
}
