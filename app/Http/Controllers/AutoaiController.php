<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use OpenAI\Laravel\Facades\OpenAI;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;

class AutoaiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->quote == 'quote') {
            Artisan::call('inspire');
            $quote = trim(Artisan::output());
            return view('welcome', compact('quote'));
        }
    }

    public function schedule(Request $request)
    {
        $scheduleResponse = OpenAI::completions()->create([
            'model' => 'ada',
            'prompt' => $request->schedule,
            'temperature' => 0.5,
            'max_tokens' => 300
        ]);
        $schedule = $scheduleResponse->toArray()['choices'][0]['text'];
        return view('welcome', compact('schedule'));
    }

    public function task(Request $request)
    {
        $taskResponse = OpenAI::completions()->create([
            'model' => 'ada',
            'prompt' => $request->task,
            'temperature' => 0.5,
            'max_tokens' => 300
        ]);
        $task = $taskResponse->toArray()['choices'][0]['text'];
        return view('welcome', compact('task'));
    }

    public function convert(Request $request)
    {
        $file = $request->convert;
        $filename = time() . '-' . $file->getClientOriginalName();

        $destinationpath = public_path('/');
        $file->move($destinationpath, $filename);

        $domPdfPath = base_path('vendor/dompdf/dompdf');
        Settings::setPdfRendererPath($domPdfPath);
        Settings::setPdfRendererName('DomPDF');

        try {
            $content = IOFactory::load(public_path($filename));
            $pdfwritter = IOFactory::createWriter($content, 'PDF');
            $pdfwritter->save(public_path('get-pdf.pdf'));
            return response()->download(public_path('get-pdf.pdf'), 'get-pdf.pdf');
        } catch (\PhpOffice\PhpWord\Exception\Exception $e) {
            // Tangani kesalahan saat memuat file
            return back();
        }
        return back();
    }
}
