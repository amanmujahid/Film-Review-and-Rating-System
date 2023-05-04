<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    //

    public function movies(){

        $movies = DB::table('movies')->get();
        return view('index',['movies'=>$movies]);    
    }

    public function write_review(Request $request){
        $id = $request->input('id');

        $reviews = DB::table('reviews')->where('movie_id',$id)->get();
        $total = 0;

        foreach($reviews as $review){
            $total = $total + $review->review;
        }
        
        if(count($reviews) != 0){
        $current_review = $total/count($reviews);
        }else{
            $current_review = $total;
        }

        return view('reviews',['reviews'=>$reviews,'current_review'=>round($current_review,2), 'id'=>$id]);

    }

    public function insert_review(Request $request){

        DB::table('reviews')->insert([
            'review'=>$request->input('number'),
            'text'=>$request->input('text'),
            'movie_id'=>$request->input('id')
        ]);

        $request->session()->put('message','Your review has been inserted into the system');


        return \redirect('/');
    }
}