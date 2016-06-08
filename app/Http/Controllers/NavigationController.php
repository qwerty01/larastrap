<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Route;

class NavigationController extends Controller
{
	public static $nav = [
		'about' => [
			'route' => 'NavigationController@about',
			'name' => 'About'
		],
		'services' => [
			'route' => 'NavigationController@services',
			'name' => 'Services'
		],
		'contact' => [
			'route' => 'NavigationController@contact',
			'name' => 'Contact'
		],
		'portfolio' => [
			'children' => [
				'pf1c' => [
					'route' => 'NavigationController@pf1c',
					'name' => '1 Column Portfolio'
				],
				'pf2c' => [
					'route' => 'NavigationController@pf2c',
					'name' => '2 Column Portfolio'
				],
				'pf3c' => [
					'route' => 'NavigationController@pf3c',
					'name' => '3 Column Portfolio'
				],
				'pf4c' => [
					'route' => 'NavigationController@pf4c',
					'name' => '4 Column Portfolio'
				],
				'pfi' => [
					'route' => 'NavigationController@pfi',
					'name' => 'Portfolio Item'
				]
			],
			'name' => 'Portfolio'
		],
		'blog' => [
			'children' => [
				'bh1' => [
					'route' => 'NavigationController@bh1',
					'name' => 'Blog Home 1'
				],
				'bh2' => [
					'route' => 'NavigationController@bh2',
					'name' => 'Blog Home 2'
				],
				'bp' => [
					'route' => 'NavigationController@bp',
					'name' => 'Blog Post'
				]
			],
			'name' => 'Blog'
		],
		'other' => [
			'children' => [
				'fw' => [
					'route' => 'NavigationController@fw',
					'name' => 'Full Width Page'
				],
				'sidebar' => [
					'route' => 'NavigationController@sidebar',
					'name' => 'Sidebar Page'
				],
				'faq' => [
					'route' => 'NavigationController@faq',
					'name' => 'FAQ'
				],
				'error' => [
					'route' => 'NavigationController@error',
					'name' => '404'
				],
				'pricing' => [
					'route' => 'NavigationController@pricing',
					'name' => 'pricing'
				]
			],
			'name' => 'Other Pages'
		]
	];

	public static function GetRoutes()
	{
		foreach (NavigationController::$nav as $route => $info)
			if (array_key_exists('children', $info))
				foreach ($info['children'] as $child => $cinfo)
					Route::get($child, $cinfo['route']);
			else
				Route::get($route, $info['route']);
	}

	public function about(Request $request)
	{
		return view('modern_business.about');
	}

	public function services(Request $request)
	{
		return view('modern_business.services');
	}

	public function contact(Request $request)
	{
		return view('modern_business.contact');
	}

	public function pf1c(Request $request)
	{
		return view('modern_business.pf1c');
	}

	public function pf2c(Request $request)
	{
		return view('modern_business.pf2c');
	}

	public function pf3c(Request $request)
	{
		return view('modern_business.pf3c');
	}

	public function pf4c(Request $request)
	{
		return view('modern_business.pf4c');
	}

	public function pfi(Request $request)
	{
		return view('modern_business.pfi');
	}

	public function bh1(Request $request)
	{
		return view('modern_business.bh1');
	}

	public function bh2(Request $request)
	{
		return view('modern_business.bh2');
	}

	public function bp(Request $request)
	{
		return view('modern_business.bp');
	}

	public function fw(Request $request)
	{
		return view('modern_business.fw');
	}

	public function sidebar(Request $request)
	{
		return view('modern_business.sidebar');
	}

	public function faq(Request $request)
	{
		return view('modern_business.faq');
	}

	public function error(Request $request)
	{
		return view('modern_business.error');
	}

	public function pricing(Request $request)
	{
		return view('modern_business.pricing');
	}
}
