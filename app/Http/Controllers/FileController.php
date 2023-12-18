<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'files' => 'required',
            // 'files.*' => 'required|mimes:pdf,xlx,csv,docx|max:2048',
        ]);

        $files = [];
        if ($request->file('files')) {
            foreach ($request->file('files') as $key => $file) {
                $file_name = time() . rand(1, 99) . '.' . $file->extension();
                $file->move(public_path('uploads'), $file_name);
                $files[]['name'] = $file_name;
            }
        }

        foreach ($files as $key => $file) {
            File::create($file);
        }

        return back()->with('success', 'File uploaded successfully');
    }
}
