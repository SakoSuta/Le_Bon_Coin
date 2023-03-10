<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;

class AnnonceController extends Controller
{
    public function index()
    {
        $annonces = Annonce::where('status', 1)->get();

        return view('annonces.index',compact('annonces'));
    }

    public function show($id)
    {
        $annonce = Annonce::findOrFail($id);

        return view('annonces.show', compact('annonce'));
    }

    public function create()
    {
        return view('annonces.create');
    }

    public function createdOnDB(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:15',
            'location' => 'required',
            'price' => 'required|numeric',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $data['token'] = Str::random(32);
        $data['status'] = 0;

        $annonce = Annonce::create($data);

        return redirect()->route('annonces.index')->with('success', 'Annonce as been created successfully!');
    }

    public function validation()
    {
        return view('annonces.validation');
    }

    public function delete()
    {
        $annonce = Annonce::where('token', $token)->firstOrFail();

        $annonce->delete();

        return redirect()->route('annonces.index')->with('success', 'Your annonce has been successfully deleted.');
    }
}
