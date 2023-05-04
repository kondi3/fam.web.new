<?php

namespace App\Http\Controllers;

use App\Events\VisitorContactedEvent;
use App\Models\Document;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;

class MainSiteController extends Controller
{
    public function index() : Response
    {
        return inertia('Main/Index');
    }

    public function about() : Response
    {
        return inertia('Main/About');
    }

    public function programmes() : Response
    {
        return inertia('Main/Programmes');
    }

    public function gbv() : Response
    {
        return inertia('Main/GBV');
    }

    public function policies() : Response
    {
        $documents = Document::query()->latest()->paginate(10);

        return inertia('Main/Policies', ['documents' => $documents]);
    }

    public function contacts() : Response
    {
        return inertia('Main/Contacts');
    }

    public function success() : Response
    {
        return inertia('Main/Success');
    }

    public function notify(Request $request) : RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // notify admin
        event(new VisitorContactedEvent($validated));

        return redirect(route('site.success'));
    }
}
