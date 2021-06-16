<?php

namespace App\Http\Controllers;
use App\Models\Cooperative;
use App\Models\Association;
use App\Models\Outilsinfo;
use Illuminate\Http\Request;
use PDF;
class CooperativeController extends Controller
{
    public function index(){

        $Cooperatives=Cooperative::all();
        return view('admin.cooperatives.cooperative',['Cooperatives'=>$Cooperatives]);
    }
    public function show($id){

        $Cooperative = Cooperative::find($id);
        return view('Cooperative.show',['Cooperative'=>$Cooperative]);
    }

    public function create(){
        return view('admin.cooperatives.create');
    }

    public function store(Request $request)
    {
        $request->validate([ 'nom'=> 'required|min:4|max:10' ]);
        $request->validate([ 'president'=> 'required' ]);
        $request->validate([ 'tel'=> 'required' ]);
      
        $request->validate([ 'date_creation'=> 'required' ]);
        $request->validate([ 'email'=> '' ]);
        $request->validate([ 'active'=> 'required' ]);
        $request->validate([ 'remarque'=> 'required' ]);
        $request->validate([ 'ville'=> 'required' ]);


        $Cooperative = new Cooperative();

        $Cooperative->nom = $request->input('nom');
        $Cooperative->president = $request->input('president');
        if($request->input('tel')==null)
        $Cooperative->tel = "";
        else
        $Cooperative->tel = $request->input('tel');
        $Cooperative->siege = $request->input('ville');
        $Cooperative->date_creation = $request->input('date_creation');
        if($request->input('email')==null)
        $Cooperative->email="";
        else
        $Cooperative->email = $request->input('email');
        $Cooperative->active = $request->input('active');
        if($request->input('remarque')==null)
        $Cooperative->remarque="";
        else
        $Cooperative->remarque = $request->input('remarque');
        $Cooperative->ville = $request->input('ville');
       
        $Cooperative->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('cooperatives');
    }

    public function edit($id)
    {
        $Cooperative = Cooperative::findOrFail($id);
       // Debugbar::info($Association);
        return view('admin.cooperatives.edit',['Cooperative'=>$Cooperative]);
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
        $request->validate([ 'president'=> 'required' ]);
        $request->validate([ 'tel'=> '' ]);
        
        $request->validate([ 'date_creation'=> 'required' ]);
        $request->validate([ 'email'=> '' ]);
        $request->validate([ 'active'=> 'required' ]);
        $request->validate([ 'remarque'=> '' ]);
        $request->validate([ 'ville'=> 'required' ]);
        $Cooperative = Cooperative::findOrFail($id);

        $Cooperative->nom = $request->input('nom');
        $Cooperative->president = $request->input('president');
        if($request->input('tel')==null)
        $Cooperative->tel = "";
        else
        $Cooperative->tel = $request->input('tel');
        $Cooperative->siege = $request->input('ville');
        $Cooperative->date_creation = $request->input('date_creation');
        if($request->input('email')==null)
        $Cooperative->email="";
        else
        $Cooperative->email = $request->input('email');
        $Cooperative->active = $request->input('active');
        if($request->input('remarque')==null)
        $Cooperative->remarque="";
        else
        $Cooperative->remarque = $request->input('remarque');
        $Cooperative->ville = $request->input('ville');
        $Cooperative->update();
        $request->session()->flash('status', 'Task Update was successful!');

        return redirect('cooperatives');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id){
        $Cooperative = Cooperative::findOrFail($id);
      
        $Cooperative->delete();

        $request->session()->flash('status', 'Task Delete was successful!');
        return redirect('cooperatives');
    }
    public function type(Request $request,$id)
    {
        $cooperatives=Cooperative::where('ville',$id)->get();
        
        $request->session()->flash('status','voici le résultat!');
        //return view('books.books',['books'=>$books]);
        return view('admin.cooperatives.search',['cooperatives'=>$cooperatives]);
    }
    
    public function pdf(){
        $Cooperative = Cooperative::All();
        view()->share(compact('Cooperative'));
        $pdf = PDF::loadView('pdf/cooperative',compact('Cooperative'));

        return $pdf->download('liste_cooperatives.pdf');
    }
    public function admin(){
        $Cooperative=Cooperative::all()->count();
        $Association=Association::all()->count();
        $Outilsinfo=Outilsinfo::all()->count();
        return view('admin.admin',['Cooperative'=>$Cooperative,'Association'=>$Association,'Outilsinfo'=>$Outilsinfo]);
    }
}