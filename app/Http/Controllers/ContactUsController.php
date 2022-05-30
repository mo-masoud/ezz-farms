<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class ContactUsController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('ContactUs');
    }

    public function store()
    {

    }
}
