<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;

class DocumentsController extends Controller
{
    public function index() : Response
    {
        $documents = Document::query()->latest()->with('user')->paginate(10);
        
        return inertia('Documents/Index', ['documents' => $documents]);
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'document' => 'required'
        ]);

        // store file
        $document = $request->file('document');

        $path = $document->store();

        if (!$path) {
            return back()->withErrors(['document' => 'Failed to upload document'])->onlyInput();
        }

        Document::query()->create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'size' => $document->getSize(),
            'path' => $path,
        ]);

        return back();
    }

    public function delete(Document $document) : RedirectResponse
    {
        $document->delete();

        return back();
    }

    public function view(Document $document)
    {
        if ($document === null) {
            // alert user
            return back();
        }

        return response()->file('storage/'.$document->path);
    }

    public function download(Document $document)
    {
        if ($document === null) {
            return back();
        }

        return response()->download('storage/'.$document->path, name: $document->name);
    }
}
