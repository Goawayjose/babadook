<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monster;

use App\Http\requests\monsterStore;
use App\Http\requests\MonsterUpdate;

use Image;

class MonsterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monsters = monster::all();
        return view('monsters.index', compact('monsters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monsters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(monsterStore $request)
    {
      $monster = new Monster;
      $monster->name = $request -> input('name');
      $monster->size = $request -> input('size');
      $monster->color = $request -> input('color');
      $monster->weight = $request -> input('weight');
      $monster->image = 'temp';
      $monster -> save();

      $monster->image = 'images/monster'.$monster->id.'jpg';
      $monster -> save();

      Image::make($request->file('image'))->save($monster->image);


      return redirect('/monsters/'.$monster->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monster = Monster::find($id);
        return view('monsters.show', compact('monster'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $monster = Monster::find($id);

        return view('monsters.edit', compact('monster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(monsterUpdate $request, $id)
    {
      $monster = Monster::find($id);
      $monster->name = $request -> input('name');
      $monster->size = $request -> input('size');
      $monster->color = $request -> input('color');
      $monster->weight = $request -> input('weight');

      $monster->image = 'images/monster'.$monster->id.'jpg';
      $monster -> save();
      if($request -> has('image')){
        Image::make($request->file('image'))->save($monster->image);
      }

      return back() -> with('status', 'Updated Monster');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monster = Monster::find($id);
        $monster -> delete();

        return redirect('monsters') -> with('status', 'Monster Deleted');
    }
}
