<?php

namespace App\Http\Controllers;

use mikehaertl\pdftk\Pdf;
use \Mail;
use App\OrangeInternetTv;
use Illuminate\Http\Request;


class PdfController extends Controller
{
    public function generatePDF()
    {
        // return view('internet_tv.pdf');
//        $orangeInternetTv =  OrangeInternetTv::findOrFail(1);
//        $pdf = PDF::loadView('internet_tv.pdf');

//        $pdf = PDF::loadView('emails.myTestMail');

//        Mail::send(['name' => 'emails.report'], function($message)use( $pdf) {
//            $message->to('lasha@studiodlvx.be','musmangeee@gmail.com')
//                ->subject('Orange Report')
//                ->attachData($pdf->output(), "report.pdf");
//        });

        $pdf = new Pdf(public_path('notfill.pdf'), [
//            'command' => '/some/other/path/to/pdftk',
            // or on most Windows systems:
            'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe',
            'useExec' => true,  // May help on Windows systems if execution fails
        ]);
//        $pdf = new Pdf(public_path('test.pdf'));
//        dd($pdf->getDataFields(), $pdf->getError());
//        dd($pdf);
        $data = OrangeInternetTv::findOrFail(1)->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs('filled.pdf');;



        Mail::send('emails.report', $data, function ($message) use ($data, $pdf) {
            $message->to('musmangeee@gmail.com')
                ->subject(Auth()->user()->name . " has submitted SSM Report." . 'Hello')
//                ->cc($recipients)
//                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
                ->attach(public_path('filled.pdf'), [
                    'as' => 'name.pdf',
                    'mime' => 'application/pdf',
                ]);
        });
//        Mail::send(['name' => 'emails.report'], function ($message) use ($pdf) {
//            $message->to('lasha@studiodlvx.be', 'musmangeee@gmail.com')
//                ->subject('Orange Report')
//                ->attachData( public_path('filled.pdf'), "report.pdf");
//        });



        if ($result === false) {
            return $pdf->getError();
            $error = $pdf->getError();
        }
//        dd($result);
//        $pdf->setPaper('B4');
//        return $pdf->stream();;

//        $converter = new Converter($string);
    }

    function forge_xfdf($file, $info, $enc = 'UTF-8')
    {
        $data = '<?xml version="1.0" encoding="' . $enc . '"?>' . "\n" .
            '<xfdf xmlns="http://ns.adobe.com/xfdf/" xml:space="preserve">' . "\n" .
            '<fields>' . "\n";
        foreach ($info as $field => $val) {
            $data .= '<field name="' . $field . '">' . "\n";
            if (is_array($val)) {
                $data .= '<</T(' . $field . ')/V[';
                foreach ($val as $opt)
                    $data .= '<value>' . $opt . '</value>' . "\n";
            } else {
                $data .= '<value>' . $val . '</value>' . "\n";
            }
            $data .= '</field>' . "\n";
        }
        $data .= '</fields>' . "\n" .
            '<ids original="' . md5($file) . '" modified="' . time() . '" />' . "\n" .
            '<f href="' . $file . '" />' . "\n" .
            '</xfdf>' . "\n";
        return $data;
    }
}
