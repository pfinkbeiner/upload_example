<?php
namespace Helhum\UploadExample\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Helmut Hummel
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
 * Class FileReference
 */
class FileReference extends \TYPO3\CMS\Extbase\Domain\Model\FileReference {

	/**
	 * We need this property so that the Extbase persistence can properly persist the object
	 *
	 * @var integer
	 */
	protected $uidLocal;

	/**
	 * title 
	 *
	 * @var string
	 */
	protected $title;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * @param \TYPO3\CMS\Core\Resource\FileReference $originalResource
	 */
	public function setOriginalResource(\TYPO3\CMS\Core\Resource\FileReference $originalResource) {
		$this->originalResource = $originalResource;
		$this->uidLocal = $originalResource->getOriginalFile()->getUid();
	}

	/**
	 * Set title
	 *
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Get title
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Get description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

}