<?php

namespace App\Http\Controllers;

use App\Models\Recense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data = Recense::orderBy('id','DESC')->paginate(5);
        return view('users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view('users.create');
    }

    public function createMobile(Request $request){
        $user = new Recense();
        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->postnom=$request->postnom;
        $user->lieu_de_naissance=$request->lieu_de_naissance;
        $user->nom_mere=$request->nom_mere;
        $user->nom_pere=$request->nom_pere;
        $user->pays=$request->pays;
        $user->sexe=$request->sexe;
        $user->etat_civil=$request->etat_civil;
        $user->province=$request->province;
        $user->nationalite=$request->nationalite;
        $user->commune=$request->commune;
        $user->quartier=$request->quartier;
        $user->avenue=$request->avenue;
        $result = $user->save();
        if($result){
            return 'Data have been sent succesfuly';
        } else {
            return 'Operation fails';
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'postnom' => 'required',
            'lieu_de_naissance' => 'required',
            'nom_mere' => 'required',
            'nom_pere' => 'required',
            'pays' => 'required',
            'sexe' => 'required',
            'etat_civil' => 'required',
            'province' => 'required',
            'nationalite' => 'required',
            'commune' => 'required',
            'quartier' => 'required',
            'avenue' => 'required'
        ]);
    
        Recense::create($request->all());
     
        return redirect()->route('user.index')
                        ->with('success','User created successfully.');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recense  $recense
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return Recense::all();
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recense  $recense
     * @return \Illuminate\Http\Response
     */
    public function edit(Recense $user)
    {
        return view('users.edit',compact('user'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recense  $recense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recense $user)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'postnom' => 'required',
            'lieu_de_naissance' => 'required',
            'nom_mere' => 'required',
            'nom_pere' => 'required',
            'pays' => 'required',
            'sexe' => 'required',
            'etat_civil' => 'required',
            'province' => 'required',
            'nationalite' => 'required',
            'commune' => 'required',
            'quartier' => 'required',
            'avenue' => 'required'
        ]);
    
        $user->update($request->all());
    
        return redirect()->route('user.index')
                        ->with('success','User updated successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recense  $recense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recense $user)
    {
        $user->delete();
    
        return redirect()->route('user.index')
                        ->with('success','User deleted successfully');
        //
    }
}
