<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home(): Response
    {
        return Inertia::render('Home');
    }

    /**
     * Display the products page.
     */
    public function products(): Response
    {
        return Inertia::render('Products');
    }

    /**
     * Display the about page.
     */
    public function about(): Response
    {
        return Inertia::render('About');
    }

    /**
     * Display the contact page.
     */
    public function contact(): Response
    {
        return Inertia::render('Contact');
    }
}
