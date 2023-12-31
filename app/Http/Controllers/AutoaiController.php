<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpWord\IOFactory;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Artisan;
use RealRashid\SweetAlert\Facades\Alert;

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

        $fileExtension = $file->getClientOriginalExtension();
        if ($fileExtension != 'docx') {
            unlink(public_path($filename));
            Alert::error('Gagal Convert','Wajib docx');
            return redirect()->back();
        }
        $domPdfPath = base_path('vendor/dompdf/dompdf');
        Settings::setPdfRendererPath($domPdfPath);
        Settings::setPdfRendererName('DomPDF');

        $content = IOFactory::load(public_path($filename));
        $pdfwritter = IOFactory::createWriter($content, 'PDF');
        $pdfwritter->save(public_path('get-pdf.pdf'));
        return response()->download(public_path('get-pdf.pdf'), 'get-pdf.pdf');
        Alert::success('Berhasil','File berhasil di convert');
        unlink(public_path('get-pdf.pdf'));
        return redirect()->back();
    }
}
