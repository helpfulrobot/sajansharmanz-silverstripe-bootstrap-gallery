<?php
/**
 * Responsive Bootstrap Gallery for Silverstripe
 *
 * @package Bootstrap Gallery
 * @author Creative Gorillas (Sajan Sharma) - <sajansharmanz@gmail.com>
 *
 */
class BootstrapGallery extends DataExtension {

	/**
	 * Using Requirements we will add all the CSS and Javascript Files
	 */
	public function onAfterInit() {
		// CSS Files
		Requirements::css('gallery/css/blueimp-gallery.min.css');
		Requirements::css('gallery/css/bootstrap-image-gallery.min.css');
		Requirements::css('gallery/css/bootstrap.min.css');
		Requirements::css('gallery/css/custom.css');

		// Javascript Files
		Requirements::javascript('gallery/javascript/jquery.min.js');
		Requirements::javascript('gallery/javascript/jquery.blueimp-gallery.min.js');
		Requirements::javascript('gallery/javascript/bootstrap-image-gallery.min.js');
		Requirements::javascript('gallery/javascript/bootstrap.min.js');
	}

}