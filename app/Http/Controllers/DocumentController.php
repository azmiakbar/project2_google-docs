<?php

namespace App\Http\Controllers;
use App\Models\Document;
use App\Models\DocumentHistory;
use App\Models\DocumentPresence;
use App\Events\DocumentUpdated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $documents = Document::where('user_id', Auth::id())->get();

    return view('documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Document::create([
        'user_id' => Auth::id(),
        'title' => $request->title,
        'content' => $request->content,
        
        ]);
        
        return redirect('/documents');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $document = Document::findOrFail($id);

         DocumentPresence::updateOrCreate(
            [
                'document_id' => $document->id,
                'user_id' => Auth::id(),
            ]
        );

        $presenceCount = DocumentPresence::where(
            'document_id',
            $document->id
        )->count();
         
         return view('documents.show', compact('document', 'presenceCount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $document = Document::find($id);
        
        return view('documents.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $document = Document::find($id);

        if ($request->last_updated_at != $document->updated_at) {
            return back()->with(
                'error',
                'Dokumen sudah diubah oleh user lain.'
            );
        }

        DocumentHistory::create([
            'document_id' => $document->id,
            'user_id' => Auth::id(),
            'content' => $document->content,
        ]);
        
        $document->update([
        'title' => $request->title,
        'content' => $request->content,

        ]);

        broadcast(new DocumentUpdated($document))->toOthers();
        
        return redirect('/documents');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $document = Document::find($id);
        
        $document->delete();
        
        return redirect('/documents');
    }
}
