<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Annonce;
use Illuminate\Support\Facades\Mail;
use App\Mail\ValideAnnonce;
use App\Mail\DeleteAnnonce;
use App\Mail\CheckedAnnonce;

class AnnonceController extends Controller
{
    public function index()
    {
        $annonces = Annonce::where('status', true)->get();

        return view('annonces.index', compact('annonces'));
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

        $data['token'] = Str::random(25);
        $data['status'] = 0;

        $annonce = Annonce::create($data);

        Mail::to($data['email'])->send(new ValideAnnonce($annonce));

        return redirect()->route('annonces.index')->with('success', 'Annonce as been created successfully!');
    }

    public function validateAnnonce($token)
    {
        $data = Annonce::where('token', $token)->first();

    $data->status = 1;
    $data->save();

    Mail::to($data->email)->send(new CheckedAnnonce($data));

    return view('annonces.validation');
    }

    public function delete($token)
    {
        $annonce = Annonce::where('token', $token)->firstOrFail();

        $annonce->delete();

        return redirect()->route('annonces.index')->with('success', 'Your annonce has been successfully deleted.');
    }
}
