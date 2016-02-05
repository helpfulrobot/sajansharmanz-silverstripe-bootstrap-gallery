<?php
/**
 * Responsive Bootstrap Gallery for Silverstripe
 *
 * @package Bootstrap Gallery
 * @author Creative Gorillas (Sajan Sharma) - <sajansharmanz@gmail.com>
 *
 */
class GalleryPage extends Page {

	/**
	 * Description shown when adding page to Site Tree
	 *
	 * @var string
	 */
	private static $description = 'Add responsive image gallery to website';

	/**
	 * Icon that displays in Site Tree for Gallery Page
	 *
	 * @var string
	 */
	private static $icon = 'gallery/img/sitetree/gallery-icon.png';
}

class GalleryPage_Controller extends Page_Controller {

	/**
	 * Loads the init function on Gallery Page
	 *
	 * @var function
	 */
	public function init() {
		parent::init();
	}
	
	/**
	 * Pagination - Displays 12 Images Per page
	 *
	 * @var string
	 */
	public function PaginatedImages() {
		$getImages = $this->owner->Images()->sort('SortOrder DESC');
		$getRequest = $this->getRequest();

		$paginatedImages = PaginatedList::create(
			$getImages,
			$getRequest
		)->setPageLength(12);

		return $paginatedImages;
	}	
}

class GalleryPage_Images extends DataObject {

	/**
	 * Database Fields for Images
	 *
	 * @var array
	 */
	private static $db = array(
		'PageID' => 'Int',
		'ImageID' => 'Int',
		'SortOrder' => 'Int',
	);
}