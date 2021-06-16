<?php

namespace App\Http\Controllers;
use App\Models\Association;
use Illuminate\Http\Request;
use App\Http\Controllers\Debugbar;
use PDF;
class AssociationController extends Controller
{
    public function index()
    {
        $Associations = Association::all();
        return view('admin.associations.association',['Associations'=>$Associations]);
    }
    public function show($id){

        $Association = Association::find($id);
        return view('Association.show',['Association'=>$Association]);
    }

    public function create()
    {
        return view('admin.associations.create');

    }

    public function store(Request $request)
    {
        $request->validate([ 'nom'=> 'required' ]);
        $request->validate([ 'tel'=> 'required' ]);
        $request->validate([ 'email'=> 'required' ]);
        $request->validate([ 'adresse'=> 'required' ]);
        $request->validate([ 'president'=> 'required' ]);
        $request->validate([ 'ville'=> 'required' ]);
        $request->validate([ 'activite'=> 'required' ]);

        $Association = new Association();

        $Association->nom = $request->input('nom');
        $Association->tel = $request->input('tel');
        if($request->input('email')==null)
        $Association->email="";
        else
        $Association->email = $request->input('email');
        if($request->input('adresse')==null)
        $Association->adresse="";
        else
        $Association->adresse = $request->input('adresse');
        $Association->president = $request->input('president');
        $Association->ville = $request->input('ville');
        $Association->activite = $request->input('activite');
       
        $Association->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('associations');
    }

    public function edit($id)
    {
        $Association = Association::findOrFail($id);
        
        return view('admin.associations.edit',['Association'=>$Association]);
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
        $request->validate([ 'nom'=> 'required' ]);
        $request->validate([ 'tel'=> 'required' ]);
        $request->validate([ 'email'=> '' ]);
        $request->validate([ 'adresse'=> '' ]);
        $request->validate([ 'president'=> 'required' ]);
        $request->validate([ 'ville'=> 'required' ]);
        $request->validate([ 'activite'=> 'required' ]);

        $Association = Association::findOrFail($id);

        $Association->nom = $request->input('nom');
        $Association->tel = $request->input('tel');
        if($request->input('email')==null)
        $Association->email="";
        else
        $Association->email = $request->input('email');
        if($request->input('adresse')==null)
        $Association->adresse="";
        else
        $Association->adresse = $request->input('adresse');
        $Association->president = $request->input('president');
        $Association->ville = $request->input('ville');
        $Association->activite = $request->input('activite');

        $Association->update();
        $request->session()->flash('status', 'Task Update was successful!');

        return redirect('associations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id){
        $Association = Association::findOrFail($id);
      
        $Association->delete();

        $request->session()->flash('status', 'Task Delete was successful!');
        return redirect('associations');
    }
    public function admin(){

        $associations=Association::all()->count();
        $cooperatives=Cooperative::all()->count();
        
        return view('admin.admin',['associations'=>$associations,'Cooperative'=>$cooperatives]);
    }

    public function pdf(){
        $Association = Association::All();
        view()->share(compact('Association'));
        $pdf = PDF::loadView('pdf/association',compact('Association'));

        return $pdf->download('liste_associations.pdf');
    }

  }
