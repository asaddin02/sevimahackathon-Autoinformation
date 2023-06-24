<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use OpenAI\Laravel\Facades\OpenAI;

class AutoaiController extends Controller
{
    public function index(Request $request)
    {
        // $result = OpenAI::completions()->create([
        //     'model' => 'ada',
        //     'prompt' => 'Give me inspirational quotes!',
        //     'temperature' => 0.5,
        //     'max_tokens'=> 100
        // ]);
        // echo $result['choices'][0]['text'];
        if($request->inspiration){
            Artisan::call('inspire');
            $quote = trim(Artisan::output());
            dd($quote);
        }
    }
}
