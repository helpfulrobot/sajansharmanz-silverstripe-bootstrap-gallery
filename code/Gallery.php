<?php
/**
 * Responsive Bootstrap Gallery for Silverstripe
 *
 * @package Bootstrap Gallery
 * @author Creative Gorillas (Sajan Sharma) - <sajansharmanz@gmail.com>
 *
 */
class GalleryExtension extends DataExtension {

	/**
	 * Many Many Relationship
	 *
	 * @var array
	 */
	private static $many_many = array(
		'Images' => 'Image'
	);

	/**
	 * Adds Sortable Field to Relation Table with Images
	 *
	 * @var array
	 */
	private static $many_many_extraFields = array(
		'Images' => array('SortOrder' => 'Int')
	);

	private static $summary_fields = array(
		'Thumbnail' => 'Image'
	);

	/**
	 * Add CMS Fields for Gallery
	 *
	 * @var FieldList $fields
	 */
	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.Gallery', $GalleryImages = SortableUploadField::create('Images', 'Gallery Images'));

		$GalleryImages->setFolderName('gallery-images');
		$GalleryImages->getValidator()->setAllowedExtensions('png', 'gif', 'jpeg', 'jpg');
	}

	/**
	 * Function to call Images - Used in sajansharmanz/swipestripe-gallery module (DO NOT REMOVE!)
	 */
	public function OrderedImages() {
		return $this->owner->Images()->sort('SortOrder');
	}
}

class GalleryImageExtension extends DataExtension {

	/**
	 * Belongs Many Many Relationship
	 *
	 * @var array
	 */
	private static $many_many = array(
		'Pages' => 'Page'
	);
}