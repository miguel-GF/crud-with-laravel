<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
    	$items = Item::orderBy('created_at', 'desc')->get();
    	// $items = Item::all();

    	return view('item.index', compact('items'));
    }
}
