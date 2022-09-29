<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbData = User::all();

        return Inertia::render('User', [
            "dbData" => $dbData,
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

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()
            ->with('message', 'Estabelecimento deleted successfully.');
    }
}
