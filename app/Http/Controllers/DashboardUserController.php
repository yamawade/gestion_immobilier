<?php

namespace App\Http\Controllers;

use App\Models\Bien;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $biens = Bien::where('statut', 'disponible')->get();
        return view('admin.listeBien',compact('biens'));
        // return view('admin.index');
    }

    public function statistique(){
        $bien = Bien::where('statut','disponible')->count();
        $bienIndispo = Bien::where('statut','indisponible')->count();
        $users=User::where('role','user')->count();
        $admins=User::where('role','admin')->count();
        $bienCountPercent = DB::table('biens')->select('statut', DB::raw('count(*) as total'))
        ->groupBy('statut')->get();
       // dd($bienCountPercent);
        return view ('admin.statistique',compact('bien','users','bienIndispo','admins','bienCountPercent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('user.DashboardUser');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
