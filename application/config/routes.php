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
// $route['default_controller'] = 'welcome';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;

    $route['default_controller'] = 'users/login';
   // $route['pages/(:any)'] = 'home/index/$1';
   // $route['default_controller'] = 'users/login';


    $users      =   $route[('users')]      =   'users/login/'; //alternative login implementation
    $user_login =   $route[('login')]      =   'Login/index/$1';
    $about      =   $route[('about')]      =   'about/aboutpage/$1';
    $services   =   $route[('services')]   =   'services/Mainpage/$1';
	$home       =   $route['(home)']       =   'home/index/$1';
	$pricing    =   $route['(pricing)']    =   'pricing/pricings/$1'; 
	$blog       =   $route['(blog)']       =   'blog/blogpage/$1';
	$ourworks   =   $route['(ourworks)']   =   'ourworks/workpage/$1';
	$process    =   $route['(process)']    =   'process/processpage/$1';
	$contact    =   $route['(contact)']    =   'contact/contactpage/$1';

	$route['pages/(:num)'] = 'home/index/$1';

	$controller = array(
		$users      =>  'users',
        $user_login =>  'login',
        $about      =>  'about',
        $services   =>  'Services',
		$home       =>  'home',
		$pricing    =>  'pricing',
		$blog 	    =>  'blog',
		$ourworks 	=>  'ourworks',
		$process    =>  'work-process',
		$contact    =>  'contact'

		);

	if (array_search($this->uri->segment(1), $controller, TRUE)) {

		//$route['default_controller'] = 'home';
		$route['default_controller'] = 'users/login';
	}


