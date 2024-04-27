<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $questions = Question::all();
   
        return view('question/index', ['questions' => $questions]);
        // return view('/home');
   
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('/question/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = Question::create($request->all());
        $question->questions()->attach($request->input('question'));

        return redirect('/question');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::where('question_id', $id)->first();
   
        return view('question/show', ['question' => $question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            // get the user
            $question = Question::where('question_id',$id)->first();
        
            // if user does not exist return to list
            if(!$question)
            {
                return redirect('/question');
                // you could add on here the flash messaging of article does not exist.
            }
            return view('/question/edit')->with('question', $question);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
            // get the user
            $question = Question::where('question_id',$id)->first();
        
            // if user does not exist return to list
            if(!$question)
            {
                return redirect('/question');
                // you could add on here the flash messaging of article does not exist.
            }
            return view('/question/edit')->with('question', $question);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
