<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Realisation;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    public function projects()
    {
        $realisations = Realisation::all();
        return view('portfolio.realisations', compact('realisations'));
    }
    public function show($id)
    {
        $realisation = Realisation::findOrFail($id); // Récupère une seule réalisation par son ID
        return view('portfolio.realisation', compact('realisation')); // Renvoie à la vue "realisation"
    }

    public function index()
    {
        return view('portfolio.index');  // Assurez-vous que le chemin de la vue est correct
    }

    public function contact()
    {
        return view('portfolio.contact');
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('ton.email@exemple.com')->send(new ContactMail($validated));

        return redirect()->route('contact')->with('success', 'Votre message a bien été envoyé.');
    }
    // Afficher le formulaire d'ajout
    public function create()
    {
        return view('portfolio.create');
    }

    // Enregistrer une nouvelle réalisation
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'url' => 'nullable|url',
        ]);

        // Gérer l'upload de l'image si elle existe
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        // Créer la nouvelle réalisation
        Realisation::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'technologies' => $validated['technologies'],
            'image' => $imagePath,
            'url' => $validated['url'],
        ]);

        return redirect()->route('projects')->with('success', 'Réalisation ajoutée avec succès.');
    }

}
