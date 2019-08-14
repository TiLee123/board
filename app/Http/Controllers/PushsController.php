<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Push;
use Session;

class PushsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Session::get('name') == "") {
            return redirect("/boards");
        }
        $push = Push::where('adminId', Session::get('id'))->get();
        if ($push->first()) {
            $push=$push->first();
        } else {
            $push="n";
        }
        return view("pushs.create", compact('push'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->okOrCancel == "Cancel") {
            return redirect("/boards");
        }
        $push = Push::where('adminId', Session::get('id'))->get();
        if ($push->first()) {
            $push = Push::find($push->first()->pushId);
        } else {
            $push = new Push();
        }
        $push->tel = $request->tel;
        $push->adminId = Session::get('id');
        $push->save();
        return redirect("/boards");
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
        //
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
