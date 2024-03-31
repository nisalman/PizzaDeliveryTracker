<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PizzaController extends Controller
{
    public function index(): Response
    {
        $pizzas = Pizza::all();

        return Inertia::render('Pizzas/All', [
            'pizzas' => $pizzas
        ]);
    }

    public function edit(Pizza $pizzas): Response
    {
        return Inertia::render('Pizzas/Edit', [
            'pizzas' => $pizzas
        ]);
    }

    public function update(Pizza $pizza, Request $request): void
    {

    }
}
