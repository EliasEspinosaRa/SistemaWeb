<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Http\Requests\StoreUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuariosRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuarios): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuariosRequest $request, Usuarios $usuarios): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuarios $usuarios): RedirectResponse
    {
        //
    }
}
