<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnemoral;
use PDF;
class PersonnemoralController extends Controller
{

    public function index()
    {
        $Personnemorals = Personnemoral::all();
      
        return view(' admin.personnemorals.personnemoral',['Personnemorals'=>$Personnemorals]);
    }
    public function show($id){

        $Personnemoral = Personnemoral::find($id);
        return view('Personnemoral.show',['Personnemoral'=>$Personnemoral]);
    }

    public function create()
    {
        return view('admin.personnemorals.create');

    }

    public function store(Request $request)
    {
        $request->validate([ 'denomination'=> 'required' ]);
        $request->validate([ 'gerant'=> 'required' ]);
        $request->validate([ 'ville'=> 'required' ]);
        $request->validate([ 'if'=> 'required' ]);
        $request->validate([ 'rc'=> 'required' ]);
        $request->validate([ 'ice'=> 'required' ]);
        $request->validate([ 'activite'=> 'required' ]);
        $request->validate([ 'forme_juridique'=> 'required' ]);
        $request->validate([ 'date_creation'=> 'required' ]);
        $request->validate([ 'adresse'=> 'required' ]);
        $request->validate([ 'email'=> '' ]);
        $request->validate([ 'tel'=> 'required' ]);
    
        $Personnemoral = new Personnemoral();
        $Personnemoral->denomination = $request->input('denomination');
        $Personnemoral->gerant = $request->input('gerant');
        $Personnemoral->ville = $request->input('ville');
        $Personnemoral->if = $request->input('if');
        $Personnemoral->rc = $request->input('rc');
        $Personnemoral->ice = $request->input('ice');
        $Personnemoral->activite = $request->input('activite');
        $Personnemoral->forme_juridique = $request->input('forme_juridique');
        $Personnemoral->date_creation = $request->input('date_creation');
        $Personnemoral->adresse = $request->input('adresse');
        if($request->input('email')==null)
        $Personnemoral->email ="";
        else
        $Personnemoral->email = $request->input('email');
        $Personnemoral->tel = $request->input('tel');
        $Personnemoral->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('personnemorals');
    }

    public function edit($id)
    {
        $Personnemoral = Personnemoral::findOrFail($id);
       // Debugbar::info($Association);
        return view('admin.personnemorals.edit',['Personnemoral'=>$Personnemoral]);
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
        $request->validate([ 'denomination'=> 'required' ]);
        $request->validate([ 'gerant'=> 'required' ]);
        $request->validate([ 'ville'=> 'required' ]);
        $request->validate([ 'if'=> 'required' ]);
        $request->validate([ 'rc'=> 'required' ]);
        $request->validate([ 'ice'=> 'required' ]);
        $request->validate([ 'activite'=> 'required' ]);
        $request->validate([ 'forme_juridique'=> 'required' ]);
        $request->validate([ 'date_creation'=> 'required' ]);
        $request->validate([ 'adresse'=> 'required' ]);
        $request->validate([ 'email'=> 'required' ]);
        $request->validate([ 'tel'=> 'required' ]);
        $Personnemoral = Personnemoral::findOrFail($id);

        $Personnemoral->denomination = $request->input('denomination');
        $Personnemoral->gerant = $request->input('gerant');
        $Personnemoral->ville = $request->input('ville');
        $Personnemoral->if = $request->input('if');
        $Personnemoral->rc = $request->input('rc');
        $Personnemoral->ice = $request->input('ice');
        $Personnemoral->activite = $request->input('activite');
        $Personnemoral->forme_juridique = $request->input('forme_juridique');
        $Personnemoral->date_creation = $request->input('date_creation');
        $Personnemoral->adresse = $request->input('adresse');
        if($request->input('email')==null)
        $Personnemoral->email ="";
        else
        $Personnemoral->email = $request->input('email');
        $Personnemoral->tel = $request->input('tel');
        
        $Personnemoral->update();
        $request->session()->flash('status', 'Task Update was successful!');

        return redirect('personnemorals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id){
        $Personnemoral = Personnemoral::findOrFail($id);
      
        $Personnemoral->delete();

        $request->session()->flash('status', 'Task Delete was successful!');
        return redirect('personnemorals');
    }
    
    public function pdf(){
        $Personnemoral = Personnemoral::All();
        view()->share(compact('Personnemoral'));
        $pdf = PDF::loadView('pdf/personnemoral',compact('Personnemoral'));

        return $pdf->download('liste_personnemorals.pdf');
    }


}