<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Partenaire;

class PublicController extends Controller
{
    // Méthode pour afficher la page d'accueil
    public function welcome()
    {
        $events = Blog::where('type', 'evenement')->where('statut', 'active')->get();
        $partenaires = Partenaire::all();

        return view('welcome',compact('events','partenaires'));
    }

    // Méthode pour afficher la page "About"
    public function about()
    {
        $partenaires = Partenaire::all();

        return view('public.about',compact('partenaires'));
    }

    // Méthode pour afficher la page "Partner"
    public function partner()
    {
        $partenaires = Partenaire::all();

        return view('public.partner',compact('partenaires'));
    }

    // Méthode pour afficher la page "Contact Us"
    public function contactUs()
    {
        return view('public.contactus');
    }

    // Méthode pour afficher la page "Events"
    public function events()
    {
        $events = Blog::where('type', 'evenement')->where('statut', 'active')->get();
        $webinars = Blog::where('type', 'webinaire')->where('statut', 'active')->get();
        return view('public.events', compact('events','webinars'));    }
    public function formation()
    {
        return view('public.formations');
    }

    public function showEvent($id)
{
    $event = Blog::findOrFail($id);
    return view('public.event-detail', compact('event'));
}

    public function formationcontinue()
    {
        $partenaires = Partenaire::where('type', 'ecole')->get();
        return view('public.formationcontinue', compact('partenaires'));
    }
    public function formationexec()
    {
        $partenaires = Partenaire::where('type', 'ecole')->get();

        return view('public.formationexec', compact('partenaires'));
    }
    public function formationorg()
    {
        $partenaires = Partenaire::where('type', 'ecole')->get();

        return view('public.formationorg', compact('partenaires'));
    }


    public function actualite()
    {
        return view('public.blog');
    }
}