<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Question;
use App\Option;
use App\Category;

class QuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $questionnaires = Questionnaire::all();
   
        return view('questionnaire/index', ['questionnaires' => $questionnaires]);
        // return view('/home');
   
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('/questionnaire/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $questionnaire = Questionnaire::create($request->all());
        $questionnaire->questionnaires()->attach($request->input('questionnaire'));

        return redirect('/questionnaire');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $questionnaire = Questionnaire::where('questionnaire_id', $id)->first();

        $questionnairequestions = Question::where('questionnaire_assigned_to', $id)->first();

        $question_id = Question::pluck('question_id');

        $questionoptions = Option::where('question_assigned_to', $question_id)->first();
   
        return view('questionnaire/show', ['questionnaire' => $questionnaire], ['questionnairequestions' => $questionnairequestions], ['questionoptions' => $questionoptions]);
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
            $questionnaire = Questionnaire::where('questionnaire_id',$id)->first();
        
            // if user does not exist return to list
            if(!$questionnaire)
            {
                return redirect('/questionnaire');
                // you could add on here the flash messaging of article does not exist.
            }
            return view('/questionnaire/edit')->with('questionnaire', $questionnaire);
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
            $questionnaire = Questionnaire::where('questionnaire_id',$id)->first();
        
            // if user does not exist return to list
            if(!$questionnaire)
            {
                return redirect('/questionnaire');
                // you could add on here the flash messaging of article does not exist.
            }
            return view('/questionnaire/edit')->with('questionnaire', $questionnaire);
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
