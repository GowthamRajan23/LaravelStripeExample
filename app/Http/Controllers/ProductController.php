<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

class ProductController extends Controller
{
    public function index(){
		return view('product.product-list', [
			'dataProvider' => new EloquentDataProvider(Product::query())
		]);
	}
}
