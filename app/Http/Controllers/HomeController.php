<?php namespace App\Http\Controllers;
use Request;
use Carbon\Carbon;

class HomeController extends Controller {

	
	public function index()
	{
		$table = '0';
		return view('home', compact('table'));
	}

	public function postProducts()
	{
		$table ='1';
		$product_name = Request::get('product_name');
		$stock_quantity = Request::get('stock_quantity');
		$price = Request::get('price');
		$date = Carbon::now();

		return view('home', compact('table', 'product_name', 'stock_quantity', 'price', 'date' ));

	}

	public function editProduct($product_name, $stock_quantity, $price, $date)
	{
		$table = '0';
		return view('edit', compact('table', 'product_name', 'stock_quantity', 'price', 'date' ));

	}

}
