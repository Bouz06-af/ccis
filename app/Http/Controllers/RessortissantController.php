<?php

namespace App\Http\Controllers;
use App\Models\Ressortissant;
use Illuminate\Http\Request;
use PDF;
class RessortissantController extends Controller
{
    public function index()
    {
        $Ressortissants = Ressortissant::all();
      
        return view(' admin.ressortissants.ressortissant',['Ressortissants'=>$Ressortissants]);
    }
    public function show($id){

        $Ressortissant = Ressortissant::find($id);
        return view('Ressortissant.show',['Ressortissant'=>$Ressortissant]);
    }

    public function create()
    {
        return view('admin.ressortissants.create');

    }

    public function store(Request $request)
    {
        $request->validate([ 'annexe'=> 'required' ]);
        $request->validate([ 'membre'=> 'required' ]);
        $request->validate([ 'adherent'=> 'required' ]);
        $request->validate([ 'nom_complet'=> 'required' ]);
        $request->validate([ 'fonction'=> 'required' ]);
        $request->validate([ 'profil'=> 'required' ]);
        $request->validate([ 'email'=> 'required' ]);
        $request->validate([ 'tel'=> 'required' ]);
        $request->validate([ 'ice'=> 'required' ]);
        $request->validate([ 'patente'=> 'required' ]);
        $request->validate([ 'raison_social'=> 'required' ]);
        $request->validate([ 'statut_juridique'=> 'required' ]);
        $request->validate([ 'college'=> 'required' ]);
        $request->validate([ 'secteur'=> 'required' ]);
        $request->validate([ 'effectif'=> 'required' ]);
        $request->validate([ 'ca'=> 'required' ]);
        $request->validate([ 'pays'=> 'required' ]);
        $request->validate([ 'ville'=> 'required' ]);
        $request->validate([ 'adresse'=> 'required' ]);
        $request->validate([ 'tel_entreprise'=> 'required' ]);
        $request->validate([ 'email_entreprise'=> 'required' ]);
        $request->validate([ 'nom_complet_dirigeant'=> 'required' ]);


        $Ressortissant = new Ressortissant();
        $Ressortissant->annexe = $request->input('annexe');
        $Ressortissant->membre = $request->input('membre');
        $Ressortissant->adherent = $request->input('adherent');
        $Ressortissant->nom_complet = $request->input('nom_complet');
        $Ressortissant->fonction = $request->input('fonction');
        $Ressortissant->profil = $request->input('profil');
        $Ressortissant->email = $request->input('email');
        $Ressortissant->tel = $request->input('tel');
        $Ressortissant->ice = $request->input('ice');
        $Ressortissant->patente = $request->input('patente');
        $Ressortissant->raison_social = $request->input('raison_social');
        $Ressortissant->statut_juridique = $request->input('statut_juridique');
        $Ressortissant->college = $request->input('college');
        $Ressortissant->secteur = $request->input('secteur');
        $Ressortissant->effectif = $request->input('effectif');
        $Ressortissant->ca = $request->input('ca');
        $Ressortissant->pays = $request->input('pays');
        $Ressortissant->ville = $request->input('ville');
        $Ressortissant->adresse = $request->input('adresse');
        $Ressortissant->tel_entreprise = $request->input('tel_entreprise');
        $Ressortissant->email_entreprise = $request->input('email_entreprise');
        $Ressortissant->nom_complet_dirigeant = $request->input('nom_complet_dirigeant');
        
        $Ressortissant->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('ressortissants');
    }

    public function edit($id)
    {
        $Ressortissant = Ressortissant::findOrFail($id);
       // Debugbar::info($Association);
        return view('admin.ressortissants.edit',['Ressortissant'=>$Ressortissant]);
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
        $request->validate([ 'nom_complet'=> 'required' ]);
        $request->validate([ 'fonction'=> 'required' ]);
        $request->validate([ 'profil'=> 'required' ]);
        $request->validate([ 'email'=> 'required' ]);
        $request->validate([ 'tel'=> 'required' ]);
        $request->validate([ 'ice'=> 'required' ]);
        $request->validate([ 'patente'=> 'required' ]);
        $request->validate([ 'raison_social'=> 'required' ]);
        $request->validate([ 'statut_juridique'=> 'required' ]);
        $request->validate([ 'college'=> 'required' ]);
        $request->validate([ 'secteur'=> 'required' ]);
        $request->validate([ 'effectif'=> 'required' ]);
        $request->validate([ 'ca'=> 'required' ]);
        $request->validate([ 'pays'=> 'required' ]);
        $request->validate([ 'ville'=> 'required' ]);
        $request->validate([ 'adresse'=> 'required' ]);
        $request->validate([ 'tel_entreprise'=> 'required' ]);
        $request->validate([ 'email_entreprise'=> 'required' ]);
        $request->validate([ 'nom_complet_dirigeant'=> 'required' ]);


        $Ressortissant = Ressortissant::findOrFail($id);

        $Ressortissant->annexe = $request->input('annexe');
        $Ressortissant->membre = $request->input('membre');
        $Ressortissant->adherent = $request->input('adherent');
        $Ressortissant->nom_complet = $request->input('nom_complet');
        $Ressortissant->fonction = $request->input('fonction');
        $Ressortissant->profil = $request->input('profil');
        $Ressortissant->email = $request->input('email');
        $Ressortissant->tel = $request->input('tel');
        $Ressortissant->ice = $request->input('ice');
        $Ressortissant->patente = $request->input('patente');
        $Ressortissant->raison_social = $request->input('raison_social');
        $Ressortissant->statut_juridique = $request->input('statut_juridique');
        $Ressortissant->college = $request->input('college');
        $Ressortissant->secteur = $request->input('secteur');
        $Ressortissant->effectif = $request->input('effectif');
        $Ressortissant->ca = $request->input('ca');
        $Ressortissant->pays = $request->input('pays');
        $Ressortissant->ville = $request->input('ville');
        $Ressortissant->adresse = $request->input('adresse');
        $Ressortissant->tel_entreprise = $request->input('tel_entreprise');
        $Ressortissant->email_entreprise = $request->input('email_entreprise');
        $Ressortissant->nom_complet_dirigeant = $request->input('nom_complet_dirigeant');
        $Ressortissant->update();
        $request->session()->flash('status', 'Task Update was successful!');

        return redirect('ressortissants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id){
        $Ressortissant = Ressortissant::findOrFail($id);
      
        $Ressortissant->delete();

        $request->session()->flash('status', 'Task Delete was successful!');
        return redirect('ressortissants');
    }
    
    public function pdf(){
        $Ressortissant = Ressortissant::All();
        view()->share(compact('Ressortissant'));
        $pdf = PDF::loadView('pdf/ressortissant',compact('Ressortissant'));

        return $pdf->download('liste_ressortissants.pdf');
    }
}
