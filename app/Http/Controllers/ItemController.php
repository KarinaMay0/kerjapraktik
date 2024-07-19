<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\View\View;

class ItemController extends Controller
{
    //

    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $item = Barang::latest()->paginate(10);

        //render view with products
        return view('item.index', compact('item'));
    }
}
