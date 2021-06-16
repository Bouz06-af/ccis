<?php

namespace App\Http\Controllers;
use App\Models\Outilsinfo;
use Illuminate\Http\Request;
use PDF;
class OutilsinfoController extends Controller
{
    public function index()
    {
        $Outilsinfos = Outilsinfo::all();
        return view(' admin.outilsinfos.outilsinfo',['Outilsinfos'=>$Outilsinfos]);
    }
  

    public function create()
    {
        return view('admin.outilsinfos.create');
    }

    public function store(Request $request)
    {
        $request->validate([ 'nom'=> 'required' ]);
        $request->validate([ 'ville'=> 'required' ]);
        $request->validate([ 'president'=> 'required' ]);
        $request->validate([ 'directeur'=> 'required' ]);
        $request->validate([ 'adresse'=> 'required' ]);
        $request->validate([ 'tel'=> 'required' ]);
        $request->validate([ 'email'=> 'required' ]);

        $Outilsinfo = new Outilsinfo();

        $Outilsinfo->nom = $request->input('nom');
        $Outilsinfo->ville = $request->input('ville');
        $Outilsinfo->president = $request->input('president');
        $Outilsinfo->directeur = $request->input('directeur');
       
        $Outilsinfo->adresse = $request->input('adresse');
        $Outilsinfo->tel = $request->input('tel');
        if($request->input('email')==null)
        $Outilsinfo->email="";
        else 
        $Outilsinfo->email = $request->input('email');
      
      
        $Outilsinfo->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('outilsinfos');
    }

    public function edit($id)
    {
        $Outilsinfo = Outilsinfo::findOrFail($id);
        
        return view('admin.outilsinfos.edit',['Outilsinfo'=>$Outilsinfo]);
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
        $request->validate([ 'ville'=> 'required' ]);
        $request->validate([ 'president'=> 'required' ]);
        $request->validate([ 'directeur'=> 'required' ]);
        $request->validate([ 'adresse'=> 'required' ]);
        $request->validate([ 'tel'=> 'required' ]);
        $request->validate([ 'email'=> '' ]);


        $Outilsinfo = Outilsinfo::findOrFail($id);
        $Outilsinfo->ville = $request->input('ville');
        $Outilsinfo->president = $request->input('president');
        $Outilsinfo->directeur = $request->input('directeur');
       
        $Outilsinfo->adresse = $request->input('adresse');
        $Outilsinfo->tel = $request->input('tel');
        if($request->input('email')==null)
        $Outilsinfo->email="";
        else 
        $Outilsinfo->email = $request->input('email');
      
      
      
        $Outilsinfo->update();
        $request->session()->flash('status', 'Task Update was successful!');

        return redirect('outilsinfos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id){
        $Outilsinfo = Outilsinfo::findOrFail($id);
      
        $Outilsinfo->delete();

        $request->session()->flash('status', 'Task Delete was successful!');
        return redirect('outilsinfos');
    }
    public function pdf(){
        $Outilsinfo = Outilsinfo::All();
        view()->share(compact('Outilsinfo'));
        $pdf = PDF::loadView('pdf/outilsinfo',compact('Outilsinfo'));
        return $pdf->download('liste_outilsinfo.pdf');
    }
}
