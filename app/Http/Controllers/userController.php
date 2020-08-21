<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reg=DB::table('userinfo')->get();
        return view('show',['reg'=>$reg]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $reg=DB::table('userinfo')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
 
        return redirect('/users/reg');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
       
        $reg=DB::table('userinfo')->where('id',$id)->get();
        
        return view ('edit',['reg'=>$reg]);
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
        //
        $update=DB::table('userinfo')->where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->roll,
            'password'=>$request->password

        ]);
        return redirect()->route('show');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {   //
        $reg=DB::table('userinfo')->where('id',$id)->delete();
        return redirect()->route('/users/reg');
    }
}
