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

    public function create() {
        return view('create');
    }

    public function store(Request $request) {

        Items::create([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('items');
    }
}
