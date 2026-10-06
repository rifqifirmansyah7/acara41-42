<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index()
    {
        return response()->json(Pendidikan::all());
    }

    public function store(Request $request)
    {
        $pendidikan = Pendidikan::create($request->all());
        return response()->json($pendidikan, 201);
    }
}