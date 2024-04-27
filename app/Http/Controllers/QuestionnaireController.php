<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire; /* Makes the Questionnaire, Question, and Option models available to the contorller. */
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
        // return view for questionnaire index page that shows all questionnaires
   
   
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

        $questionnaire = Questionnaire::where('questionnaire_id', $id)->first(); /* Selects the questionnaire by its id number*/

        $questionnairequestions = Question::where('questionnaire_assigned_to', $id)->first(); /* Displays just the questions that are assigned to this questionnaire */

        $question_id = Question::pluck('question_id'); /* gets the question id */

        $questionoptions = Option::where('question_assigned_to', $question_id)->first(); /* Displays just the options assigned to this question */
   
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
            // get the questionnaire which was selected
            $questionnaire = Questionnaire::where('questionnaire_id',$id)->first();
        
            // if questionnaire selected does not exist return to list
            if(!$questionnaire)
            {
                return redirect('/questionnaire');
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
            // get the questionnaire which was selected
            $questionnaire = Questionnaire::where('questionnaire_id',$id)->first();
        
            // if questionnaire selected does not exist return to list
            if(!$questionnaire)
            {
                return redirect('/questionnaire');
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
