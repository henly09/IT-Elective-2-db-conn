<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemsController extends Controller
{
    public function index() {
        $items = Items::all(); // SELECT * FROM `items`

        return view('items', compact('items'));
    }
}
