<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use OpenAI\Laravel\Facades\OpenAI;

class AutoaiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->quote == 'quote') {
            Artisan::call('inspire');
            trim(Artisan::output());
            return response()->json();
        }
    }

    public function schedule(Request $request)
    {
        OpenAI::completions()->create([
            'model' => 'ada',
            'prompt' => $request->schedule,
            'temperature' => 0.5,
            'max_tokens'=> 200
        ]);
        return response()->json();
    }

    public function task(Request $request)
    {
        OpenAI::completions()->create([
            'model' => 'ada',
            'prompt' => $request->task,
            'temperature' => 0.5,
            'max_tokens'=> 100
        ]);
        return response()->json();
    }
}
