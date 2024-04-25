<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;
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
        // return view('/home');
   
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('/option/create');
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

        return redirect('/option');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $options = Option::all();
   
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
            // get the user
            $option = Option::where('id',$id)->first();
        
            // if user does not exist return to list
            if(!$option)
            {
                return redirect('/option');
                // you could add on here the flash messaging of article does not exist.
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
        $option = Option::findOrFail($id);

        return redirect('/option');
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
