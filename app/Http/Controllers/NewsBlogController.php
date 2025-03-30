<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\NewsBlog;

class NewsBlogController extends Controller
{
    public function index()
    {
        $newsblogs = NewsBlog::all(); 

        return view('newsblog.index', compact('newsblogs'));
    }

    public function show($id)
    {
        $newsblog = NewsBlog::findOrFail($id);
        return view('newsblog.show', compact('newsblog'));
    }

    public function create()
    {
        return view('newsblog.create');
    }

    // Method untuk API
    public function getAllNews()
    {
        return response()->json(NewsBlog::select('id', 'title', 'author', 'published_at', 'content', 'image')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required|string|max:255',
            'published_at' => 'required|date'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public');
            
            $imagePath = basename($imagePath);
        }

        NewsBlog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath, 
            'author' => $request->author,
            'published_at' => $request->published_at
        ]);

        return redirect()->route('newsblog.index')->with('success', 'News added successfully!');
    }

    public function edit($id)
    {
        $news = NewsBlog::findOrFail($id);
        return view('newsblog.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = NewsBlog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required|string|max:255',
            'published_at' => 'required|date'
        ]);

        $imagePath = $news->image; // Default gunakan gambar lama jika tidak diubah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($news->image && Storage::exists('public/news_images/' . $news->image)) {
                Storage::delete('public/news_images/' . $news->image);
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('news_images', 'public');
            $imagePath = basename($imagePath); // Simpan hanya nama file
        }

        // Update data berita
        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
            'author' => $request->author,
            'published_at' => $request->published_at
        ]);

        return redirect()->route('newsblog.index')->with('success', 'News updated successfully!');
    }

    public function destroy($id)
    {
        $news = NewsBlog::findOrFail($id);

        if ($news->image && Storage::exists('public/news_images/' . $news->image)) {
            Storage::delete('public/news_images/' . $news->image);
        }

        $news->delete();

        return redirect()->route('newsblog.index')->with('success', 'News deleted successfully!');
    }


}
