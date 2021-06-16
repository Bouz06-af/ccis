<?php

namespace App\Http\Controllers;
use App\Models\Statistique;
use Illuminate\Http\Request;

class StatistiqueController extends Controller
{
    public function index()
    {
        $Statistique = Statistique::all();
        return view('admin.statistiques.statistique',['Statistique'=>$Statistique]);
    }
    public function show($id){

        $Statistique = Statistique::find($id);
        return view('Statistique.show',['Statistique'=>$Statistique]);
    }

    public function create()
    {
        return view('admin.statistiques.create');
    }


    public function store(Request $request)
    {
        $request->validate([ 'adherent'=> 'required' ]);
        $request->validate([ 'Tel'=> 'required' ]);
        $request->validate([ 'besoin'=> 'required' ]);
        $request->validate([ 'document'=> 'required' ]);
        $request->validate([ 'infos'=> 'required' ]);
        $request->validate([ 'acceuil'=> 'required' ]);
        $request->validate([ 'mois'=> 'required' ]);
        $request->validate([ 'annee'=> 'required' ]);
        
        $Statistique = new Statistique();

        $Statistique->adherent = $request->input('adherent');    
        $Statistique->Tel = $request->input('Tel');
        $Statistique->besoin = $request->input('besoin');
        $Statistique->document = $request->input('document');
        $Statistique->infos = $request->input('infos');
        $Statistique->acceuil = $request->input('acceuil');   
        $Statistique->mois = $request->input('mois');
        $Statistique->annee = $request->input('annee');   
        $Statistique->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('statistiques');
    }

    public function edit($id)
    {
        $Statistique = Statistique::findOrFail($id);
        
        return view('admin.statistiques.edit',['Statistique'=>$Statistique]);
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
        $request->validate([ 'adherent'=> 'required' ]);
        $request->validate([ 'Tel'=> 'required' ]);
        $request->validate([ 'besoin'=> 'required' ]);
        $request->validate([ 'document'=> 'required' ]);
        $request->validate([ 'infos'=> 'required' ]);
        $request->validate([ 'acceuil'=> 'required' ]);
        $request->validate([ 'mois'=> 'required' ]);
        $request->validate([ 'annee'=> 'required' ]);
       
        $Statistique = Statistique::findOrFail($id);
        $Statistique->adherent = $request->input('adherent');    
        $Statistique->Tel = $request->input('Tel');
        $Statistique->besoin = $request->input('besoin');
        $Statistique->document = $request->input('document');
        $Statistique->infos = $request->input('infos');
        $Statistique->acceuil = $request->input('acceuil');   
        $Statistique->mois = $request->input('mois');
        $Statistique->annee = $request->input('annee'); 
        $Statistique->update();
        $request->session()->flash('status', 'Task Update was successful!');

        return redirect('statistiques');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id){
        $Statistique = Statistique::findOrFail($id);
      
        $Statistique->delete();

        $request->session()->flash('status', 'Task Delete was successful!');
        return redirect('statistiques');
    }


}
