<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option; //makes option model available to the controller.
use App\Category;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $options = Option::all();
   
        return view('option/index', ['options' => $options]);
        // return view for options index page.
   
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('/option/create');
        //returns view for create new option page.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $option = Option::create($request->all());
        $option->options()->attach($request->input('option'));

        return redirect('/option'); //stores new option in database and then redurects back to options index page.
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $option = Option::where('option_id', $id)->first(); //shows selected option (not used in this site)
   
        return view('option/show', ['options' => $options]);
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
            // get the option
            $option = Option::where('option_id',$id)->first();
        
            // if option does not exist return to list
            if(!$option)
            {
                return redirect('/option');
            }
            return view('/option/edit')->with('option', $option);
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
            // get the option
            $option = Option::where('option_id',$id)->first();
        
            // if option does not exist return to list
            if(!$option)
            {
                return redirect('/option');
            }
            return view('/option/edit')->with('option', $option);
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
