<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use OpenAI\Laravel\Facades\OpenAI;

class AutoaiController extends Controller
{
    public function index()
    {
        $result = OpenAI::completions()->create([
            'model' => 'ada',
            'prompt' => 'Give me words of encouragement!',
            'temperature' => 0.5
        ]);
        echo $result['choices'][0]['text'];
        // $response = Http::withHeaders([
        //     'Authorization' => 'Bearer ' . config('openai.api_key'),
        // ])->get('https://api.openai.com/v1/models');
    
        // $models = json_decode($response->getBody(), true);
    
        // // Lakukan sesuatu dengan daftar model dalam format array
        // return $models;
    }
}
