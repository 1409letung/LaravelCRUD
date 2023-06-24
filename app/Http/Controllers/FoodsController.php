<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Console\View\Components\Alert;
use Symfony\Component\Console\Input\Input;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return Illuminate\Http\Response
     */
    public function index(){
        $foods = Food::all(); //select * from food;
        //$foods = Food::where('name', '=', 'shusi')->get();
        //dd($foods);
        return view("foods.index", [
            'foods' => $foods
        ]);
    }

    /**
     * Show the form for creating a new resource
     *
     * @return Illuminate\Http\Response
     */
    public function create(){
        //insert new food
        return view('foods.create');
    }


    /**
     * Store a newly created resource in storage
     *
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store( Request $request){
       //dd('this is store');
       //C1: insert
    //    $food = new Food();
    //    $food->name = $request->input('name');
    //    $food->count = $request->input('count');
    //    $food->desciption = $request->input('des');
    //    $food->save();
    //return redirect('/foods');
    //C2: insert
    $food = Food::create([
        'name'=> $request->input('name'),
        'count'=> $request->input('count'),
        'desciption'=> $request->input('des'),
    ]);
    $food->save();
    return redirect('/foods');
    }

    /**
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function edit($id){
        //dd($id);
        //$food = Food::where('id', '=', $id)->get();
        $food = Food::find($id);
        //dd($food);
        return view('foods.edit')->with('food', $food);
    }

    /**
     * update
     * @param Illuminate\Http\Request $request
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id){
       $food = Food::where('id', $id)
                   ->update([
                    'name' => $request->input('name'),
                    'count' => $request->input('count'),
                    'desciption' => $request->input('des')
                   ]);
        return redirect('/foods');
    }

    /**
     * delete
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function destroy($id){
        //dd($id);
        $food = Food::where('id', $id)->delete();
        return redirect('/foods');
    }
}
