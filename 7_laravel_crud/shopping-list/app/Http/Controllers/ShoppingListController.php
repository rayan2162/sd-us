<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingListController extends Controller

// CRUD

{
    // index homepage dekhar/view function
    public function index(){
        $items = DB::table('shopping_item')->get();
        return view('shopping_list.index', compact('items'));
    }

    // Store -> CREATE
    public function store(Request $request){
        DB::table('shopping_item')->insert([
            'name'=> $request -> name,
            'quantity'=> $request -> quantity,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect() -> route('shopping.list.index')-> with('success!');
    }


    // Delete
    public function destory($id){
        DB::table('shopping_item')->where('id', $id)->delete();
        return redirect() -> route('shopping.list.index');
    }


    // edit

    public function edit($id){
        $item = DB::table('shopping_item')->where('id', $id)->first();
        return view('shopping_list.edit', compact('item'));
    }   

    // Update
     public function update(Request $request, $id){
        DB::table('shopping_item')->where('id', $id)->update([
            'name' => $request -> name,
            'quantity' => $request -> quantity,
            'updated_at' => now()
        ]);
        return redirect() -> route('shopping.list.index');
     }


}
