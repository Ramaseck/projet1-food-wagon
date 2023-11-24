<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class ControllerItems extends Controller
{
    //
    public function details()
    {
        return view('layouts/details');
    }
    public function store(Request $request)
        {
            // 
            $request->validate([
                'telephone'=>'required',
                'prix'=>'required',
                'email'=>'required',
                'address'=>'required',

    
            ]);
            $commande=new Commande();
            $commande->telephone =$request->telephone;
            $commande->prix = $request->prix;
            $commande->email = $request->email;
            $commande->address = $request->address;
            $commande->save();
    
            return redirect('/details')->with('status',"le commande a bien été enregistrer");
    
    
        } 
}
