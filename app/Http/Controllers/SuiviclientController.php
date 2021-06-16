<?php

namespace App\Http\Controllers;
use App\Models\Suiviclient;
use Illuminate\Http\Request;
use PDF;
class SuiviclientController extends Controller
{
    public function index()
    {
        $Suiviclients = Suiviclient::all();
        return view(' admin.suiviclients.suiviclient',['Suiviclients'=>$Suiviclients]);
    }

    public function create()
    {

        return view('admin.suiviclients.create');

    }

    public function store(Request $request)
    {
        $request->validate([ 'date'=> 'required' ]);
        $request->validate([ 'trimestre'=> 'required' ]);
        $request->validate([ 'annexe'=> 'required' ]);
        $request->validate([ 'membre'=> 'required' ]);
        $request->validate([ 'adherent'=> 'required' ]);
        $request->validate([ 'nom_visiteur'=> 'required' ]);
        $request->validate([ 'fonction_visiteur'=> 'required' ]);
        $request->validate([ 'profil_visiteur'=> 'required' ]);
        $request->validate([ 'email_visiteur'=> 'required' ]);
        $request->validate([ 'tel_visiteur'=> 'required' ]);
        $request->validate([ 'ice'=> 'required' ]);
        $request->validate([ 'patente'=> 'required' ]);
        $request->validate([ 'raison_social'=> 'required' ]);
        $request->validate([ 'statut_juridique'=> 'required' ]);
        $request->validate([ 'college'=> 'required' ]);
        $request->validate([ 'secteur'=> 'required' ]);
        $request->validate([ 'ca'=> 'required' ]);
        $request->validate([ 'pays'=> 'required' ]);
        $request->validate([ 'adresse'=> 'required' ]);
        $request->validate([ 'tel_entreprise'=> 'required' ]);
        $request->validate([ 'email_entreprise'=> 'required' ]);
        $request->validate([ 'nom_dirigeant'=> 'required' ]);
        $request->validate([ 'responsable'=> 'required' ]);
        $request->validate([ 'delai_traitement'=> 'required' ]);

        $Suiviclient = new Suiviclient();

        $Suiviclient->date = $request->input('date');
        $Suiviclient->trimestre = $request->input('trimestre');
        $Suiviclient->annexe = $request->input('annexe');
        $Suiviclient->membre = $request->input('membre');
        $Suiviclient->adherent = $request->input('adherent');
        $Suiviclient->nom_visiteur = $request->input('nom_visiteur');
        $Suiviclient->fonction_visiteur = $request->input('fonction_visiteur');
        $Suiviclient->profil_visiteur = $request->input('profil_visiteur');
        $Suiviclient->email_visiteur = $request->input('email_visiteur');
        $Suiviclient->tel_visiteur = $request->input('tel_visiteur');
        $Suiviclient->ice = $request->input('ice');
        $Suiviclient->patente = $request->input('patente');
        $Suiviclient->raison_social = $request->input('raison_social');
        $Suiviclient->statut_juridique = $request->input('statut_juridique');
        $Suiviclient->college = $request->input('college');
        $Suiviclient->secteur = $request->input('secteur');
        $Suiviclient->ca = $request->input('ca');
        $Suiviclient->pays = $request->input('pays');
        $Suiviclient->ville = $request->input('ville');
        $Suiviclient->adresse = $request->input('adresse'); 
        $Suiviclient->tel_entreprise = $request->input('tel_entreprise');
        $Suiviclient->email_entreprise = $request->input('email_entreprise');
        $Suiviclient->nom_dirigeant = $request->input('nom_dirigeant');
        $Suiviclient->responsable = $request->input('responsable');
        $Suiviclient->delai_traitement = $request->input('delai_traitement');
 
      
      
      
      
      
      
      
      
        $Suiviclient->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('suiviclients');
    }

    public function edit($id)
    {
        $Suiviclient = Suiviclient::findOrFail($id);
        
        return view('admin.suiviclients.edit',['Suiviclient'=>$Suiviclient]);
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
        $request->validate([ 'date'=> 'required' ]);
        $request->validate([ 'trimestre'=> 'required' ]);
        $request->validate([ 'annexe'=> 'required' ]);
        $request->validate([ 'membre'=> 'required' ]);
        $request->validate([ 'adherent'=> 'required' ]);
        $request->validate([ 'nom_visiteur'=> 'required' ]);
        $request->validate([ 'fonction_visiteur'=> 'required' ]);
        $request->validate([ 'profil_visiteur'=> 'required' ]);
        $request->validate([ 'email_visiteur'=> 'required' ]);
        $request->validate([ 'tel_visiteur'=> 'required' ]);
        $request->validate([ 'ice'=> 'required' ]);
        $request->validate([ 'patente'=> 'required' ]);
        $request->validate([ 'raison_social'=> 'required' ]);
        $request->validate([ 'statut_juridique'=> 'required' ]);
        $request->validate([ 'college'=> 'required' ]);
        $request->validate([ 'secteur'=> 'required' ]);
        $request->validate([ 'ca'=> 'required' ]);
        $request->validate([ 'pays'=> 'required' ]);
        $request->validate([ 'adresse'=> 'required' ]);
        $request->validate([ 'tel_entreprise'=> 'required' ]);
        $request->validate([ 'email_entreprise'=> 'required' ]);
        $request->validate([ 'nom_dirigeant'=> 'required' ]);
        $request->validate([ 'responsable'=> 'required' ]);
        $request->validate([ 'delai_traitement'=> 'required' ]);
        $Suiviclient = Suiviclient::findOrFail($id);
      
        $Suiviclient->date = $request->input('date');
        $Suiviclient->trimestre = $request->input('trimestre');
        $Suiviclient->annexe = $request->input('annexe');
        $Suiviclient->membre = $request->input('membre');
        $Suiviclient->adherent = $request->input('adherent');
        $Suiviclient->nom_visiteur = $request->input('nom_visiteur');
        $Suiviclient->fonction_visiteur = $request->input('fonction_visiteur');
        $Suiviclient->profil_visiteur = $request->input('profil_visiteur');
        $Suiviclient->email_visiteur = $request->input('email_visiteur');
        $Suiviclient->tel_visiteur = $request->input('tel_visiteur');
        $Suiviclient->ice = $request->input('ice');
        $Suiviclient->patente = $request->input('patente');
        $Suiviclient->raison_social = $request->input('raison_social');
        $Suiviclient->statut_juridique = $request->input('statut_juridique');
        $Suiviclient->college = $request->input('college');
        $Suiviclient->secteur = $request->input('secteur');
        $Suiviclient->ca = $request->input('ca');
        $Suiviclient->pays = $request->input('pays');
        $Suiviclient->ville = $request->input('ville');
        $Suiviclient->adresse = $request->input('adresse'); 
        $Suiviclient->tel_entreprise = $request->input('tel_entreprise');
        $Suiviclient->email_entreprise = $request->input('email_entreprise');
        $Suiviclient->nom_dirigeant = $request->input('nom_dirigeant');
        $Suiviclient->responsable = $request->input('responsable');
        $Suiviclient->delai_traitement = $request->input('delai_traitement');
 
      
      
      
      
        $Suiviclient->update();
        $request->session()->flash('status', 'Task Update was successful!');

        return redirect('suiviclients');
    }

    public function destroy(Request $request,$id){
        $Suiviclient = Suiviclient::findOrFail($id);
      
        $Suiviclient->delete();

        $request->session()->flash('status', 'Task Delete was successful!');
        return redirect('suiviclients');
    }
    public function pdf(){
        $Suiviclient = Suiviclient::All();
        view()->share(compact('Suiviclient'));
        $pdf = PDF::loadView('pdf/suiviclient',compact('Suiviclient'));

        return $pdf->download('liste_suiviclient.pdf');
    }
}