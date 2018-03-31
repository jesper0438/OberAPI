<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
    public function show ($id) {

    	return new ProductResource(Product::find($id));
    }

    // first start to receive an array after API-call (GET-req.)
    public function arraytest() {
    	$arraytest = [

	[	
		'name' => 'Jepper',
		'place' => 'School',
		'address' => 'eenstraat'
	],

	[ 
		'name' => 'Jano',
	  	'place' => 'Ookopschool',
	  	'address' => 'geheim'
	]


		];
    }
}
