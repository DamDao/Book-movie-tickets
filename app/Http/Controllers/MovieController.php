<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $movies = Movie::all();
        dd($movies);
        return view('client.index', ['movies' => $movies]);

    }

    public function movieList()
    {
        //
        $movies = Movie::all();
        return view('client.movie-list', ['movies' => $movies]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
        return view('client.detail');

    }

    public function ticket()
    {
        //
        return view('client.movie-ticket-plan');
    }

    public function seat()
    {
        //
        return view('client.movie-seat-plan');
    }

    public function checkout()
    {
        //
        return view('client.movie-checkout');
    }

    public function FormSignUp()
    {
        //
        return view('client.acount.sign-up');
    }

    public function FormSignIn()
    {
        //
        return view('client.acount.sign-in');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
