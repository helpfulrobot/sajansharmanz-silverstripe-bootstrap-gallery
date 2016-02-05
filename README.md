# Silverstripe Bootstrap Gallery Module

## Description
Add a responsive bootstrap gallery to your website

## Author
This module was created by Creative Gorillas (Sajan Sharma). This module is based on the "frankmullenger/silverstripe-gallery" created by [frank-mullenger](https://github.com/frankmullenger) 

###### Improvements Made
- Used free [Blueimp Bootstrap Gallery Plugin](https://github.com/blueimp/Bootstrap-Image-Gallery) (To avoid paying FancyBox Licensing Fees)
- Added Pagination on Gallery Page - Displays 12 images per page by default
- Added Gallery Icon to Gallery Page in Site Tree
- Gallery Page 100% Repsonsive using [Bootstrap](http://www.getbootstrap.com)
- Uses default Silverstripe UploadField instead of customized one
- Uses [bummzack/sortablefile](https://github.com/bummzack/sortablefile) to enable drag-n-drop resorting

###### Still To Do:
- Position UploadField at top of Admin Section permanently so user doesn't have to scroll right to the bottom each time
- Possibly add a GridField or Pagination in Admin Section so there is not a very long list of uploaded images all on one page. This is to improve loading time - but this may limit use ordering images potentially

## Installation
Manual Installation:
- Download Zip File
- Extract Zip File
- Locate folder inside Zip File
- Rename folder to "gallery" - without quotations
- Place this gallery folder into your projects root directory
- Run http://yoursiteurl/dev/build?flush=1

Composer Installtion:

=====================================================================
	composer require sajansharmanz/silverstripe-bootstrap-gallery
=====================================================================

- Run http://yoursiteurl/dev/build?flush=1

## Usage
Once successfully installed we are ready to implement the a Gallery Page to our website

Add Gallery Page to Website:

- Login to the Silverstripe Admin Interface
- Select Pages from the Admin Interface
- Click Add New
- Choose the position where the page will go (Top-Level or Under Another Page)
- From the Page Type select a Gallery Page
- The new gallery page will load with the Main Content editor showing
- Provide your gallery page a name
- Select the Gallery Tab
- Upload Images (You can drag and drop multiple images at one time or select from computer)
- Save and Publish (IMPORTANT!)
- You can now view these images on the FrontEnd

###### Things to Note
- The images on the FrontEnd are displayed in DESCENDING order. Therefore, the latest uploaded images are displayed first (ie. the images closer to the bottom in the admin section are displayed first). If you wish to reverse this find the PaginatedImages function in the GalleryPage.php file and change 'SortOrder DESC' to 'SortOrder ASC'

## License
This module is available under the BSD 3-clause

## Additional Information
You are not required to add the Bootstrap Framework or Blueimp Bootstrap Gallery to your project to get this Gallery working. I have included the necessary files for it to work within the module itself, therefore, it will work on any project out of the box

I am still fairly new to creating Silverstripe Modules, the frank-mullenger module was used as guidance and this module. I have tested the module and it was working fine, however, if you find any errors or bugs, please let me know.

Good Luck and Enjoy!