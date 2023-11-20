<?php

namespace App\Http\Controllers;

use App\Models\Bien;

use Illuminate\Http\Request;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biens = Bien::where('statut', 'disponible')->paginate(3);
        return view('biens.bien',compact('biens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ajoutBien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nom'=>'bail|required|string|',
            'categorie'=>'bail|required|string|',
           'image'=>'required|image',
            'description'=>'bail|required|string|',
            'adresse'=>'bail|required|string|',
            'statut'=>'bail|string|'
        ]);
        $bien = new Bien();

            $bien->nom =$request->nom;
            $bien->categorie =$request->categorie;
            $bien->description =$request->description;
            $bien->adresse =$request->adresse;
            $bien->statut =$request->statut;

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/images'), $filename);
                $bien['image']= $filename;
            }
            $bien->save();

        return redirect(route("biens.create"))->with('status', 'Bien enrigistré avec succés !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bien = Bien::findOrFail($id);
        return view('biens.detail',compact('bien'));
    }

    // public function index_admin(){
    //     $biens = Bien::where('statut', 'disponible')->get();
    //     return view('admin.index',compact('biens'));
    // }

    public function show_admin(string $id){
        $bien = Bien::findOrFail($id);
        return view('admin.detail_admin',compact('bien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $bien = Bien::find($id);
        return view('admin.update', compact('bien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom'=>'bail|required|string|',
            'categorie'=>'bail|required|string|',
           'image'=>'sometimes|image|mimes:jpeg,png,jpg,gif',
            'description'=>'bail|required|string|',
            'adresse'=>'bail|required|string|',
            'statut'=>'bail|string|'
        ]);
        $bien = Bien::find($id);

            $bien->nom =$request->nom;
            $bien->categorie =$request->categorie;
            $bien->description =$request->description;
            $bien->adresse =$request->adresse;
            $bien->statut =$request->statut;

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/images'), $filename);
                $bien['image']= $filename;
            }
            $bien->update();
            return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bien = Bien::find($id);
        $bien->delete();
        return redirect('/admin');
    }
}
