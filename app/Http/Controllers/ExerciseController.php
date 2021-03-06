<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Exercise;

class ExerciseController extends Controller
{
    public function index($category, $title = NULL){

    	if( $title == NULL ){
    		$exercises = Exercise::where('category', '=', $category)->get();
    	}else{
    		$exercises =  Exercise::where('title', '=', $title)
              // ->orderBy('name', 'desc')
             //  ->take(10)
               ->get();
    	}

    	if (count($exercises) < 1){
    		$exercises = Exercise::all();
    	}
    	return view('exercises.index', ['exercises' => $exercises]);
    }


    public function store(Request $request){

    	$exercise = new Exercise;
    	$exercise->category = $request->category;
        $exercise->title = $request->title;
        $exercise->body = $request->body;
        $exercise->solution = $request->solution;

    	if ($exercise->save()) {
    		return redirect('/' .$exercise->category. '/' .$exercise->title);
    	}
     
    	return view('exercises.index', ['exercises' => $exercise]);

    }

    public function update(Request $request){

        $exercise = Exercise::findOrFail($request->get('id'));
        $category = $request->get('category');
        if ($exercise->update($request->all())) {
           
            return redirect('/' .$category);

        }

        return view('exercises.edit', ['exercise' => $exercise]);


    }

    public function edit($id){

        $exercise = Exercise::find($id);
        return view('exercises.edit', ['exercise' => $exercise]);

    }
 /*
    public function store(Request $request){

        $exercise = new Exercise;
        $exercise->category = $request->category;
        $exercise->title = $request->title;
        $exercise->body = $request->body;
        $exercise->solution = $request->solution;

        if ($exercise->save()) {        
            return redirect('/' .$exercise->category. '/' .$exercise->title);
        }

        return view('exercises.index');
    } */
}