<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        //Query builders
    //     $post = DB::select("SELECT * FROM posts WHERE id = :id;",
    // [
    //     'id' => 3 //anh xa id de tranh SQL injection
    // ]);
    //$post = DB::table("posts")->where("id", 10); // = select * from post where id=10
    //$post = DB::table("posts")
              // ->count() //dem xem co bao nhieu ban ghi
              //->find(3) //tim kiem theo id = 3
            //   ->where("id", 10) = select title from posts where id = 10
            //->whereBetween("id", [15, 20]) //= select * form where id between and
            //->whereNotNull("body") //= select * from where body is NOT NULL
            //->orderByDesc("id")
            //->latest() //theo thoi gian moi nhat
             // ->select("body")
              //->get()
              //;
        // $post = DB::table('posts')->where("id", "=", 10)->update([
        //     'title'=>"Hehe",
        //     'body'=>"this is body tung"
        // ]); //update row in table
        $post = DB::table('posts')->where("id", "=", 3)->delete();//delete row in table
        dd($post);
        //return view('posts.index');
    }
}
