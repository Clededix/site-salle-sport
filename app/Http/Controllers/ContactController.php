<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Méthode pour afficher le formulaire de contact
    public function index()
    {
        return view('contact');
    }

    // Méthode pour traiter le formulaire de contact
    public function create(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'titre' => 'required|in:M.,Mme', // Exemple de validation pour 'titre'
            'nom' => 'required|min:1|max:255',  // Exemple de validation pour 'nom'
            'prenom' => 'required|min:1|max:255', // Exemple de validation pour 'prenom'
            'email' => 'required|email', // Validation de l'email
            'message' => 'required|min:10', // Exemple de validation pour 'message'
        ]);

        // Si les données sont valides, on effectue d'autres actions ici, par exemple, envoyer un email

        // Redirection vers la page de confirmation après le traitement du formulaire
        return redirect()->route('contact.confirmation'); // Assurez-vous que cette route est définie dans 'web.php'
    }
}
