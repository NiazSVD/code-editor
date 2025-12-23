<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Landing page
    public function index()
    {
        return view('frontend.index');
    }

    // Language-specific editor page
    public function editor($language)
    {
        return view('frontend.editor', compact('language'));
    }

    // Run code via Piston API
    public function runCode(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'language' => 'required|string',
            'stdin' => 'nullable|string'
        ]);

        // Language alias mapping for Piston API
        $aliases = [
            'cpp' => 'c++',
            'csharp' => 'csharp.net',
            'cs'     => 'csharp.net',
            'js' => 'javascript',
            'node' => 'javascript',
            'ts' => 'typescript',
            'ruby' => 'ruby',
            'go' => 'go',
            'rust' => 'rust',
            'swift' => 'swift'
        ];

        $language = $aliases[$request->language] ?? $request->language;

        // fetch runtimes
        $runtimes = Http::get('https://emkc.org/api/v2/piston/runtimes')->json();

        $runtime = collect($runtimes)->firstWhere('language', $language);

        if (!$runtime) {
            return response()->json([
                'message' => "Runtime for {$request->language} not found!"
            ], 400);
        }

        $version = $runtime['version'];

        // file name
        if ($language === 'java') $fileName = 'Main.java';
        elseif ($language === 'cs') $fileName = 'Program.cs';
        elseif ($language === 'c') $fileName = 'main.c';
        elseif ($language === 'c++') $fileName = 'main.cpp';
        elseif ($language === 'kotlin') $fileName = 'Main.kt';
        elseif ($language === 'swift') $fileName = 'main.swift';
        elseif ($language === 'dart') $fileName = 'main.dart';
        elseif ($language === 'typescript') $fileName = 'main.ts';
        elseif ($language === 'javascript') $fileName = 'main.js';
        else $fileName = 'main.txt';

        $files = [
            ['name' => $fileName, 'content' => $request->code]
        ];

        // Execute code
        $response = Http::post('https://emkc.org/api/v2/piston/execute', [
            'language' => $language,
            'version' => $version,
            'files' => $files,
            'stdin' => $request->stdin ?? ''
        ]);

        $data = $response->json();

        // Format output
        if (isset($data['run'])) {
            $run = $data['run'];
            return response()->json([
                'stdout' => $run['stdout'] ?? '',
                'stderr' => $run['stderr'] ?? '',
                'code'   => $run['code'] ?? null,
                'output' => $run['output'] ?? ''
            ]);
        }

        return $data;
    }
}
