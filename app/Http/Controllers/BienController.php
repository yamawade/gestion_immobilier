<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\User;

use App\Models\Chambre;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Notifications\NotifBien;
use Illuminate\Support\Facades\Redirect;

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
        $request->validate([
            'nom'=>'bail|required|string|',
            'categorie'=>'bail|required|string|',
            'image'=>'required|image|max:1000',
            'description'=>'bail|required|string|',
            'adresse'=>'bail|required|string|',
            'dimension_bien'=>'bail|required|',
            'espace_vert'=>'bail|required|string|',
            'nombre_balcon'=>'bail|required|integer|',
            'nombre_toilette'=>'bail|required|integer',
            'nombre_chambre'=>'bail|required|integer|',
            'statut'=>'bail|string|'
        ]);
        $bien = new Bien();

            $bien->nom =$request->nom;
            $bien->categorie =$request->categorie;
            $bien->description =$request->description;
            $bien->adresse =$request->adresse;
            $bien->statut =$request->statut;
            $bien->dimension_bien =$request->dimension_bien;
            $bien->espace_vert =$request->espace_vert;
            $bien->nombre_balcon =$request->nombre_balcon;
            $bien->nombre_toilette =$request->nombre_toilette;
            $bien->user_id =$request->user_id;
            $bien->nombre_chambre =$request->nombre_chambre;


            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/images'), $filename);
                $bien['image']= $filename;
            }
           if($bien->save()){
            $clients = User::all();
            foreach($clients as $client){
                $client->notify(new NotifBien());
            }
           }

        return redirect(route("biens.create"))->with('status', 'Bien enrigistré avec succés !!');
    }

    public function create_chambre(string $id){
        $bien = Bien::findOrFail($id);
        return view('admin.ajoutChambreBien',compact('bien'));
    }

    public function storeChambre(Request $request){
        $request->validate([
            'image.*'=>'required|image|max:5000',
            'dimension'=>'bail|required|',
        ]);
        $chambre = new Chambre();
        $chambre->dimension =$request->dimension;
        $chambre->bien_id =$request->bien_id;
        $chambre->image = $request->image;
        // dd($chambre);
            $imageNames = [];
        foreach ($request->image as $value){
            $imageName = time().'_'.$value->getClientOriginalName();
            $value-> move(public_path('/images'), $imageName);
            $imageNames[] = $imageName;
        }
        $chambre->image = json_encode($imageNames);
        $chambre->save();
        $idbien=$chambre->bien_id;
        return Redirect::route('biens.show_admin',['id'=>$idbien]);

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comments = Comment::where('bien_id',$id)->get();
        $bien = Bien::findOrFail($id);
        return view('biens.detail',compact('bien' ,'comments'));
    }

    // public function index_admin(){
    //     $biens = Bien::where('statut', 'disponible')->get();
    //     return view('admin.index',compact('biens'));
    // }

    public function show_admin(string $id){
        $comments = Comment::where('bien_id',$id)->get();
        $bien = Bien::findOrFail($id);
        //$chambre = Chambre::findOrFail($id);
        $chambres = Chambre::where('bien_id',$id)->get();         
        // dd($images);     
        return view('admin.detail_admin',compact('bien', 'comments','chambres'));
        
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

