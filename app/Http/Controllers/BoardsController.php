<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Board;
use App\Item;
use App\Admin;
use Session;

class BoardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $boardList = Board::all();
        return view('boards.index', compact('boardList'));
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
        $itemList = Item::all();
        return view("boards.create", compact('itemList'));
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
        $board = new Board();
        $board->boardTitle = $request->boardTitle;
        $board->content = $request->content;
        $board->boardName = $request->boardName;
        $board->itemId = $request->itemId;
        $board->save();
        return redirect("/boards");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        //$board = Board::find($id);
        $board = Board::leftJoin('items', 'boards.itemId', '=', 'items.itemId')->where('boards.boardId', $id)->first();
        return view("boards.detail", compact('board'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if (Session::get('name') == "") {
            return redirect("/boards");
        }
        $board = Board::find($id);
        $itemList = Item::all();
        return view('boards.edit', compact('board', 'itemList'));
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
        if ($request->okOrCancel == "Cancel") {
            return redirect("/boards");
        }
        $board = Board::find($id);
        $board->boardTitle = $request->boardTitle;
        $board->content = $request->content;
        $board->boardName = $request->boardName;
        $board->itemId = $request->itemId;
        $board->save();
        return redirect("/boards");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Session::get('name') == "") {
            return redirect("/boards");
        }
        $board = Board::find($id);
        $board->delete();
        return redirect("/boards");
    }

    public function login_create(Request $request)
    {
        $fail = $request->fail;
        return view("boards.login", compact('fail'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $admin = Admin::where('account', $request->account)->where('pwd', md5($request->password))->get();
        if ($admin->first()) {
            Session::put('id', $admin->first()->adminId);
            Session::put('name', $admin->first()->account);
            return redirect("/boards");
        } else {
            return redirect("/loginPage?fail=y");
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect("/boards");
    }
}
