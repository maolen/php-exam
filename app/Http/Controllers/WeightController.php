<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{

    public function index()
    {
        return view('weights.form',
        [
            'title' => 'Weight Control Site!'
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Weight $weight)
    {
        //
    }

    public function edit(Weight $weight)
    {
        //
    }

    public function update(Request $request, Weight $weight)
    {
        //
    }

    public function destroy(Weight $weight)
    {
        //
    }
}
