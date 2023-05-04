<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $name = $document->hashName();
        $path = ROOT_DIR . '/storage/' . $name;

        // $path = $document->store();
        if (!move_uploaded_file($document->path(), $path)) {
            return back()->withErrors(['document' => 'Failed to upload file.']);
        }

        if (!$path) {
            return back()->withErrors(['document' => 'Failed to upload document'])->onlyInput();
        }

        Document::query()->create([
            'uuid' => uniqid(),
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'size' => $document->getSize(),
            'path' => $name,
        ]);

        return back();
    }

    public function destroy(Document $document) : RedirectResponse
    {
        File::delete('storage/'.$document->path);

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
