<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetitionRequest;
use Illuminate\Http\Request;
use App\Petition;
use Illuminate\Support\Facades\Auth;

class PetititonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index (){
        $petition = Petition::all();
        return view('petition.index',compact('petition'));
    }
    public function show ($id){
        $petition = Petition::find($id);
        return view('petition.show',compact('petition'));
    }
    public function create (){
        return view('petition.create');

    }
    public function store (PetitionRequest $request){
         $input = $request->input();

         $petitions = New Petition($input);

         Auth::user()->petitions()->save($petitions);

         return redirect(url('petitions'));
    }
    public function edit ($id){
        $petition = Petition::find ($id);
        return view('petition.edit',compact('petition'));
    }
    public function update (PetitionRequest $request,$id){
        $petition = Petition::find($id);

        $input = $request->input();

        $petition->update($input);

        return redirect(url('petitions/'.$id));
    }
    public function destroy ($id){
        $petition = Petition::find($id);

        $petition->delete();

        return redirect(url('petitions'));
    }
}
