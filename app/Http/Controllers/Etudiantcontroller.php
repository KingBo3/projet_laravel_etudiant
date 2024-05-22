<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
class Etudiantcontroller extends Controller
{
    public function delete_etudiant($id){
        $etudiant=Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status','L"étudiant a bien été supprimer avec succes.');
    }
    public function update_etudiant_traitment(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe'=>'required',
        ]);
        $etudiant=Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->update();
        return redirect('/etudiant')->with('status','L"étudiant a bien été modifier avec succes.');
    }
    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        return view('etudiant.update', compact('etudiants'));
    
    }
    public function liste_etudiant(){
        $etudiants = Etudiant::all();
        
        return view('etudiant.liste', compact('etudiants'));
    }
    public function ajouter_etudiant(){
        return view('etudiant.ajouter');
    }
    public function ajouter_etudiant_traitment(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe'=>'required',
        ]);
        $etudiant=new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->save();
        return redirect('/ajouter')->with('status','L"étudiant a bien été ajouté avec succes.');
    }
}
