<?php

namespace App\Http\Controllers;
use App\Models\Acceuil;
use Illuminate\Http\Request;
use PDF;
class AcceuilController extends Controller
{
    public function index()
    {
        $Acceuils = Acceuil::all();
        return view('admin.acceuils.acceuil',['Acceuils'=>$Acceuils]);
    }
    public function show($id){

        $Acceuil = Acceuil::find($id);
        return view('Acceuil.show',['Acceuil'=>$Acceuil]);
    }

    public function create()
    {
        return view('admin.acceuils.create');

    }


    public function store(Request $request)
    {
        $request->validate([ 'date'=> 'required' ]);
        $request->validate([ 'annexe'=> 'required' ]);
        $request->validate([ 'membre'=> 'required' ]);
        $request->validate([ 'adherent'=> 'required' ]);
        $request->validate([ 'nom_visiteur'=> 'required' ]);
        $request->validate([ 'prenom_visiteur'=> 'required' ]);
        $request->validate([ 'fonction_visiteur'=> 'required' ]);
        $request->validate([ 'profil_visiteur'=> 'required' ]);
        $request->validate([ 'email_visiteur'=> 'required' ]);
        $request->validate([ 'tel_visiteur'=> 'required' ]);
        $request->validate([ 'raison_social'=> 'required' ]);
        $request->validate([ 'prestation_demandee'=> 'required' ]);
        $request->validate([ 'departement_chargee'=> 'required' ]);
        $request->validate([ 'responsable_chargee'=> 'required' ]);


        $Acceuil = new Acceuil();

        $Acceuil->date = $request->input('date');
        $Acceuil->annexe = $request->input('annexe');
        $Acceuil->membre = $request->input('membre');
        $Acceuil->adherent = $request->input('adherent');
        $Acceuil->nom_visiteur = $request->input('nom_visiteur');
        $Acceuil->prenom_visiteur = $request->input('prenom_visiteur');
        $Acceuil->fonction_visiteur = $request->input('fonction_visiteur');
        $Acceuil->profil_visiteur = $request->input('profil_visiteur');
        $Acceuil->email_visiteur = $request->input('email_visiteur');
        $Acceuil->tel_visiteur = $request->input('tel_visiteur');
        $Acceuil->raison_social = $request->input('raison_social');
        $Acceuil->prestation_demandee = $request->input('prestation_demandee');
        $Acceuil->departement_chargee = $request->input('departement_chargee');
        $Acceuil->responsable_chargee = $request->input('responsable_chargee');
        $Acceuil->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('acceuils');
    }

    public function edit($id)
    {
        $Acceuil = Acceuil::findOrFail($id);
        
        return view('admin.acceuils.edit',['Acceuil'=>$Acceuil]);
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
        $request->validate([ 'annexe'=> 'required' ]);
        $request->validate([ 'membre'=> 'required' ]);
        $request->validate([ 'adherent'=> 'required' ]);
        $request->validate([ 'nom_visiteur'=> 'required' ]);
        $request->validate([ 'prenom_visiteur'=> 'required' ]);
        $request->validate([ 'fonction_visiteur'=> 'required' ]);
        $request->validate([ 'profil_visiteur'=> 'required' ]);
        $request->validate([ 'email_visiteur'=> 'required' ]);
        $request->validate([ 'tel_visiteur'=> 'required' ]);
        $request->validate([ 'raison_social'=> 'required' ]);
        $request->validate([ 'prestation_demandee'=> 'required' ]);
        $request->validate([ 'departement_chargee'=> 'required' ]);
        $request->validate([ 'responsable_chargee'=> 'required' ]);

        $Acceuil = Acceuil::findOrFail($id);
        $Acceuil->date = $request->input('date');
        $Acceuil->annexe = $request->input('annexe');
        $Acceuil->membre = $request->input('membre');
        $Acceuil->adherent = $request->input('adherent');
        $Acceuil->nom_visiteur = $request->input('nom_visiteur');
        $Acceuil->prenom_visiteur = $request->input('prenom_visiteur');
        $Acceuil->fonction_visiteur = $request->input('fonction_visiteur');
        $Acceuil->profil_visiteur = $request->input('profil_visiteur');
        $Acceuil->email_visiteur = $request->input('email_visiteur');
        $Acceuil->tel_visiteur = $request->input('tel_visiteur');
        $Acceuil->raison_social = $request->input('raison_social');
        $Acceuil->prestation_demandee = $request->input('prestation_demandee');
        $Acceuil->departement_chargee = $request->input('departement_chargee');
        $Acceuil->responsable_chargee = $request->input('responsable_chargee');
      
      
        $Acceuil->update();
        $request->session()->flash('status', 'Task Update was successful!');

        return redirect('acceuils');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id){
        $Acceuil = Acceuil::findOrFail($id);
      
        $Acceuil->delete();

        $request->session()->flash('status', 'Task Delete was successful!');
        return redirect('acceuils');
    }

    public function pdf(){
        $Acceuil = Acceuil::All();
        view()->share(compact('Acceuil'));
        $pdf = PDF::loadView('pdf/acceuil',compact('Acceuil'));

        return $pdf->download('liste_acceuils.pdf');
    }

}
