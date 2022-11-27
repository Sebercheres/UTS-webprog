<?php

namespace App\Http\Controllers;

use App\Models\Publisher;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = Publisher::all();
        return view('publisher', compact('publishers'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function show($publisherId)
    {
        $publisher = Publisher::find($publisherId);
        $books = $publisher->books;
        return view('publisherdetail', compact('publisher', 'books'));
    }

}
