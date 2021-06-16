<?php

namespace App\Http\Controllers;
use App\Models\Personnephysique;
use Illuminate\Http\Request;
use PDF;
class PersonnephysiqueController extends Controller
{
    public function index()
    {
        $Personnephysiques = Personnephysique::all();
      
        return view(' admin.personnephysiques.personnephysique',['Personnephysiques'=>$Personnephysiques]);
    }
    public function show($id){

        $Personnephysique = Personnephysique::find($id);
        return view('Personnephysique.show',['Personnephysique'=>$Personnephysique]);
    }

    public function create()
    {
        return view('admin.personnephysiques.create');

    }

    public function store(Request $request)
    {
        $request->validate([ 'annexe'=> 'required' ]);
        $request->validate([ 'membre'=> 'required' ]);
        $request->validate([ 'adherent'=> 'required' ]);
        $request->validate([ 'nom'=> 'required' ]);
        $request->validate([ 'prenom'=> 'required' ]);
        $request->validate([ 'fonction'=> 'required' ]);
        $request->validate([ 'profil'=> 'required' ]);
        $request->validate([ 'email'=> 'required' ]);
        $request->validate([ 'tel'=> 'required' ]);
        $request->validate([ 'raison_social'=> 'required' ]);
        $request->validate([ 'statut_juridique'=> 'required' ]);
        $request->validate([ 'college'=> 'required' ]);
        $request->validate([ 'secteur'=> 'required' ]);
        $request->validate([ 'activite'=> 'required' ]);
        $request->validate([ 'effectif'=> 'required' ]);
        $request->validate([ 'ca'=> 'required' ]);
        $request->validate([ 'ville'=> 'required' ]);
        $request->validate([ 'adresse'=> 'required' ]);


        $Personnephysique = new Personnephysique();
        $Personnephysique->annexe = $request->input('annexe');
        $Personnephysique->membre = $request->input('membre');
        $Personnephysique->adherent = $request->input('adherent');
        $Personnephysique->nom = $request->input('nom');
        $Personnephysique->prenom = $request->input('prenom');
        $Personnephysique->fonction = $request->input('fonction');
        $Personnephysique->profil = $request->input('profil');
        $Personnephysique->email = $request->input('email');
        $Personnephysique->tel = $request->input('tel');
        $Personnephysique->raison_social = $request->input('raison_social');
        $Personnephysique->statut_juridique = $request->input('statut_juridique');
        $Personnephysique->college = $request->input('college');
        $Personnephysique->secteur = $request->input('secteur');
        $Personnephysique->activite = $request->input('activite');
        $Personnephysique->effectif = $request->input('effectif');
        $Personnephysique->ca = $request->input('ca');
        $Personnephysique->ville = $request->input('ville');
        $Personnephysique->adresse = $request->input('adresse');

        $Personnephysique->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('personnephysiques');
    }

    public function edit($id)
    {
        $Personnephysique = Personnephysique::findOrFail($id);
       // Debugbar::info($Association);
        return view('admin.personnephysiques.edit',['Personnephysique'=>$Personnephysique]);
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
        $request->validate([ 'annexe'=> 'required' ]);
        $request->validate([ 'membre'=> 'required' ]);
        $request->validate([ 'adherent'=> 'required' ]);
        $request->validate([ 'nom'=> 'required' ]);
        $request->validate([ 'prenom'=> 'required' ]);
        $request->validate([ 'fonction'=> 'required' ]);
        $request->validate([ 'profil'=> 'required' ]);
        $request->validate([ 'email'=> 'required' ]);
        $request->validate([ 'tel'=> 'required' ]);
        $request->validate([ 'raison_social'=> 'required' ]);
        $request->validate([ 'statut_juridique'=> 'required' ]);
        $request->validate([ 'college'=> 'required' ]);
        $request->validate([ 'secteur'=> 'required' ]);
        $request->validate([ 'activite'=> 'required' ]);
        $request->validate([ 'effectif'=> 'required' ]);
        $request->validate([ 'ca'=> 'required' ]);
        $request->validate([ 'ville'=> 'required' ]);
        $request->validate([ 'adresse'=> 'required' ]);

        $Personnephysique = Personnephysique::findOrFail($id);

        $Personnephysique->annexe = $request->input('annexe');
        $Personnephysique->membre = $request->input('membre');
        $Personnephysique->adherent = $request->input('adherent');
        $Personnephysique->nom = $request->input('nom');
        $Personnephysique->prenom = $request->input('prenom');
        $Personnephysique->fonction = $request->input('fonction');
        $Personnephysique->profil = $request->input('profil');
        $Personnephysique->email = $request->input('email');
        $Personnephysique->tel = $request->input('tel');
        $Personnephysique->raison_social = $request->input('raison_social');
        $Personnephysique->statut_juridique = $request->input('statut_juridique');
        $Personnephysique->college = $request->input('college');
        $Personnephysique->secteur = $request->input('secteur');
        $Personnephysique->activite = $request->input('activite');
        $Personnephysique->effectif = $request->input('effectif');
        $Personnephysique->ca = $request->input('ca');
        $Personnephysique->ville = $request->input('ville');
        $Personnephysique->adresse = $request->input('adresse');
        $Personnephysique->update();
        $request->session()->flash('status', 'Task Update was successful!');

        return redirect('personnephysiques');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id){
        $Personnephysique = Personnephysique::findOrFail($id);
      
        $Personnephysique->delete();

        $request->session()->flash('status', 'Task Delete was successful!');
        return redirect('personnephysiques');
    }
    
    public function pdf(){
        $Personnephysique = Personnephysique::All();
        view()->share(compact('Personnephysique'));
        $pdf = PDF::loadView('pdf/personnephysique',compact('Personnephysique'));

        return $pdf->download('liste_personnephysiques.pdf');
    }

}
