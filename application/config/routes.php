<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// $route['default_controller'] = "login";
$route['default_controller'] = "home";
$route['404_override'] = 'error';

$route['about_us'] = 'home/about_us';
$route['service'] = 'home/service';
$route['service/(:any)'] = "home/service/$1";
$route['partners'] = 'home/partners';
$route['testimonials'] = 'home/testimonials';
$route['contact_us'] = 'home/contact_us';
$route['grow_your_welth'] = 'home/grow_your_welth';
$route['products'] = 'home/products';
$route['products/(:any)'] = "home/products/$1";
$route['our_team'] = 'home/our_team';
$route['disclaimer'] = 'home/disclaimer';
$route['privacy_policy'] = 'home/privacy_policy';
$route['demo_sample'] = 'home/demo_sample';
/*********** USER DEFINED ROUTES *******************/

$route['updateSettings'] = "settings";
$route['updateSettingsData'] = "settings/updateSettingsData";

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';

$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";
$route['login-history'] = "user/loginHistoy";
$route['login-history/(:num)'] = "user/loginHistoy/$1";
$route['login-history/(:num)/(:num)'] = "user/loginHistoy/$1/$2";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";

/*$route['newSlide'] = "slide/newSlide";
$route['addNewSlide'] = "slide/addNewSlide";
$route['manageSlide/(:num)'] = "slide/manageSlide/$1";
$route['manageSlide'] = "slide/manageSlide";
$route['editSlide'] = "slide/editSlide";
$route['updateSlide/(:num)'] = "slide/updateSlide/$1";
$route['editSlide/(:num)'] = "slide/editSlide/$1";
$route['deleteSlide/(:num)'] = "slide/deleteSlide/$1";*/

$route['newAccordianImage'] 			= "homepage/newAccordianImage";
$route['addNewAccordianImage'] 			= "homepage/addNewAccordianImage";
$route['manageHPSlider/(:num)'] 	    = "homepage/manageHPSlider/$1";
$route['manageHPSlider'] 			    = "homepage/manageHPSlider";
$route['editAccordianImage'] 			= "homepage/editAccordianImage";
$route['editAccordianImage/(:num)'] 	= "homepage/editAccordianImage/$1";
$route['updateAccordianImage/(:num)']   = "homepage/updateAccordianImage/$1";
$route['deleteAccordianImage/(:num)']   = "homepage/deleteAccordianImage/$1";



$route['newStaticpage'] = "staticpages/newStaticpage";
$route['addNewStaticpage'] = "staticpages/addNewStaticpage";
$route['manageStaticpages/(:num)'] = "staticpages/manageStaticpages/$1";
$route['manageStaticpages'] = "staticpages/manageStaticpages";
$route['editStaticpages'] = "staticpages/editStaticpages";
$route['editStaticpages/(:num)'] = "staticpages/editStaticpages/$1";
$route['updateStaticpages/(:num)'] = "staticpages/updateStaticpages/$1";
$route['deleteStaticpages/(:num)'] = "staticpages/deleteStaticpage/$1";


$route['newFaqs'] = "faqs/newFaqs";
$route['addNewFaqs'] = "faqs/addNewFaqs";
$route['manageFaqs/(:num)'] = "faqs/manageFaqs/$1";
$route['manageFaqs'] = "faqs/manageFaqs";
$route['editFaqs'] = "faqs/editFaqs";
$route['editFaqs/(:num)'] = "faqs/editFaqs/$1";
$route['updateFaqs/(:num)'] = "faqs/updateFaqs/$1";
$route['deleteFaqs/(:num)'] = "faqs/deleteFaqs/$1";

$route['newOneliner'] = "oneliner/newOneliner";
$route['addNewOneliner'] = "oneliner/addNewOneliner";
$route['manageOneliner/(:num)'] = "oneliner/manageOneliner/$1";
$route['manageOneliner'] = "oneliner/manageOneliner";
$route['editOneliner'] = "oneliner/editOneliner";
$route['editOneliner/(:num)'] = "oneliner/editOneliner/$1";
$route['updateOneliner/(:num)'] = "oneliner/updateOneliner/$1";
$route['deleteOneliner/(:num)'] = "oneliner/deleteOneliner/$1";

$route['newEmailsubscription'] = "emailsubscription/newEmailsubscription";
$route['addNewEmailsubscription'] = "emailsubscription/addNewEmailsubscription";
$route['manageEmailsubscription/(:num)'] = "emailsubscription/manageEmailsubscription/$1";
$route['manageEmailsubscription'] = "emailsubscription/manageEmailsubscription";
$route['editEmailsubscription'] = "emailsubscription/editEmailsubscription";
$route['editEmailsubscription/(:num)'] = "emailsubscription/editEmailsubscription/$1";
$route['updateEmailsubscription/(:num)'] = "emailsubscription/updateEmailsubscription/$1";
$route['deleteEmailsubscription/(:num)'] = "emailsubscription/deleteEmailsubscription/$1";

$route['newProfile'] = "profile/newProfile";
$route['addNewProfile'] = "profile/addNewProfile";
$route['manageProfile/(:num)'] = "profile/manageProfile/$1";
$route['manageProfile'] = "profile/manageProfile";
$route['editProfile'] = "profile/editProfile";
$route['editProfile/(:num)'] = "profile/editProfile/$1";
$route['updateProfile/(:num)'] = "profile/updateProfile/$1";
$route['deleteProfile/(:num)'] = "profile/deleteProfile/$1";

$route['newProfileCat'] = "profile/newProfileCat";
$route['addNewProfileCat'] = "profile/addNewProfileCat";
$route['manageProfileCat/(:num)'] = "profile/manageProfileCat/$1";
$route['manageProfileCat'] = "profile/manageProfileCat";
$route['editProfileCat'] = "profile/editProfileCat";
$route['editProfileCat/(:num)'] = "profile/editProfileCat/$1";
$route['updateProfileCat/(:num)'] = "profile/updateProfileCat/$1";
$route['deleteProfileCat/(:num)'] = "profile/deleteProfileCat/$1";


$route['newProgramme'] = "programme/newProgramme";
$route['addNewProgramme'] = "programme/addNewProgramme";
$route['manageProgramme/(:num)'] = "programme/manageProgramme/$1";
$route['manageProgramme'] = "programme/manageProgramme";
$route['editProgramme'] = "programme/editProgramme";
$route['editProgramme/(:num)'] = "programme/editProgramme/$1";
$route['updateProgramme/(:num)'] = "programme/updateProgramme/$1";
$route['deleteProgramme/(:num)'] = "programme/deleteProgramme/$1";


$route['newTestimonials'] = "testimonials/newTestimonials";
$route['addNewTestimonials'] = "testimonials/addNewTestimonials";
$route['manageTestimonials/(:num)'] = "testimonials/manageTestimonials/$1";
$route['manageTestimonials'] = "testimonials/manageTestimonials";
$route['editTestimonials'] = "testimonials/editTestimonials";
$route['editTestimonials/(:num)'] = "testimonials/editTestimonials/$1";
$route['updateTestimonials/(:num)'] = "testimonials/updateTestimonials/$1";
$route['deleteTestimonials/(:num)'] = "testimonials/deleteTestimonials/$1";

$route['newBrands'] = "brands/newBrands";
$route['addNewBrands'] = "brands/addNewBrands";
$route['manageBrands/(:num)'] = "brands/manageBrands/$1";
$route['manageBrands'] = "brands/manageBrands";
$route['editBrands'] = "brands/editBrands";
$route['editBrands/(:num)'] = "brands/editBrands/$1";
$route['updateBrands/(:num)'] = "brands/updateBrands/$1";
$route['deleteBrands/(:num)'] = "brands/deleteBrands/$1";


$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";
//echo '<pre>';print_r($route);die;
//$route['cron/generate'] = "cron/generateCubeJson";

/* End of file routes.php */
/* Location: ./application/config/routes.php */

$route['newBanners'] = "banners/newBanners";
$route['addNewBanners'] = "banners/addNewBanners";
$route['manageBanners/(:num)'] = "banners/manageBanners/$1";
$route['manageBanners'] = "banners/manageBanners";
$route['editBanners'] = "banners/editBanners";
$route['editBanners/(:num)'] = "banners/editBanners/$1";
$route['updateBanners/(:num)'] = "banners/updateBanners/$1";
$route['deleteBanners/(:num)'] = "banners/deleteBanners/$1";

$route['newVideos'] = "videos/newVideos";
$route['addNewVideos'] = "videos/addNewVideos";
$route['manageVideos/(:num)'] = "videos/manageVideos/$1";
$route['manageVideos'] = "videos/manageVideos";
$route['editVideos'] = "videos/editVideos";
$route['editVideos/(:num)'] = "videos/editVideos/$1";
$route['updateVideos/(:num)'] = "videos/updateVideos/$1";
$route['deleteVideos/(:num)'] = "videos/deleteVideos/$1";


$route['newGallery'] = "gallery/newGallery";
$route['addNewGallery'] = "gallery/addNewGallery";
$route['manageGallery/(:num)'] = "gallery/manageGallery/$1";
$route['manageGallery'] = "gallery/manageGallery";
$route['editGallery'] = "gallery/editGallery";
$route['editGallery/(:num)'] = "gallery/editGallery/$1";
$route['updateGallery/(:num)'] = "gallery/updateGallery/$1";
$route['deleteGallery/(:num)'] = "gallery/deleteGallery/$1";