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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// routes for users.
$route['manage-users']="UsersController/ManageUsers";
$route['change-status-users/(:num)']="UsersController/changeStatusUsers/$1";
$route['edit-users/(:num)']="UsersController/editUsers/$1";
$route['edit-users-post']="UsersController/editUsersPost";
$route['delete-users/(:num)']="UsersController/deleteUsers/$1";
$route['add-users']="UsersController/addUsers";
$route['add-users-post']="UsersController/addUsersPost";
$route['view-users/(:num)']="UsersController/viewUsers/$1";
// end of users routes.

// routes for todays_word.
$route['manage-todays_word']="Todays_wordController/ManageTodays_word";
$route['change-status-todays_word/(:num)']="Todays_wordController/changeStatusTodays_word/$1";
$route['edit-todays_word/(:num)']="Todays_wordController/editTodays_word/$1";
$route['edit-todays_word-post']="Todays_wordController/editTodays_wordPost";
$route['delete-todays_word/(:num)']="Todays_wordController/deleteTodays_word/$1";
$route['add-todays_word']="Todays_wordController/addTodays_word";
$route['add-todays_word-post']="Todays_wordController/addTodays_wordPost";
$route['view-todays_word/(:num)']="Todays_wordController/viewTodays_word/$1";
// end of todays_word routes

// routes for news_event.
$route['manage-news_event']="News_eventController/ManageNews_event";
$route['change-status-news_event/(:num)']="News_eventController/changeStatusNews_event/$1";
$route['edit-news_event/(:num)']="News_eventController/editNews_event/$1";
$route['edit-news_event-post']="News_eventController/editNews_eventPost";
$route['delete-news_event/(:num)']="News_eventController/deleteNews_event/$1";
$route['add-news_event']="News_eventController/addNews_event";
$route['add-news_event-post']="News_eventController/addNews_eventPost";
$route['view-news_event/(:num)']="News_eventController/viewNews_event/$1";
// end of news_event routes

// routes for gallery.
$route['manage-gallery']="GalleryController/ManageGallery";
$route['change-status-gallery/(:num)']="GalleryController/changeStatusGallery/$1";
$route['edit-gallery/(:num)']="GalleryController/editGallery/$1";
$route['edit-gallery-post']="GalleryController/editGalleryPost";
$route['delete-gallery/(:num)']="GalleryController/deleteGallery/$1";
$route['add-gallery']="GalleryController/addGallery";
$route['add-gallery-post']="GalleryController/addGalleryPost";
$route['view-gallery/(:num)']="GalleryController/viewGallery/$1";
// end of gallery routes

// routes for birthdays.
$route['manage-birthdays']="BirthdaysController/ManageBirthdays";
$route['change-status-birthdays/(:num)']="BirthdaysController/changeStatusBirthdays/$1";
$route['edit-birthdays/(:num)']="BirthdaysController/editBirthdays/$1";
$route['edit-birthdays-post']="BirthdaysController/editBirthdaysPost";
$route['delete-birthdays/(:num)']="BirthdaysController/deleteBirthdays/$1";
$route['add-birthdays']="BirthdaysController/addBirthdays";
$route['add-birthdays-post']="BirthdaysController/addBirthdaysPost";
$route['view-birthdays/(:num)']="BirthdaysController/viewBirthdays/$1";
// end of birthdays routes

// routes for dashboard.
$route['dashboard']="DashboardController/index";
// end of dashboard routes

//Gallery
$route['gallery']="Welcome/gallery";