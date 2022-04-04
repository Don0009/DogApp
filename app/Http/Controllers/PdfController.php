<?php

namespace App\Http\Controllers;

use AmoCRM\Models\LeadModel;
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

//        $pdf = new Pdf(public_path('notfill.pdf'), [
////            'command' => '/some/other/path/to/pdftk',
//            // or on most Windows systems:
//            'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe',
//            'useExec' => true,  // May help on Windows systems if execution fails
//        ]);
//        $pdf = new Pdf(public_path('test.pdf'));
//        dd($pdf->getDataFields(), $pdf->getError());
//        dd($pdf);
//        $data = OrangeInternetTv::findOrFail(1)->toArray();
//        $result = $pdf->fillForm($data)->flatten()->needAppearances()
//            ->saveAs('filled.pdf');;
//
//
//
//        Mail::send('emails.report', $data, function ($message) use ($data, $pdf) {
//            $message->to('musmangeee@gmail.com')
//                ->subject(Auth()->user()->name . " has submitted SSM Report." . 'Hello')
////                ->cc($recipients)
////                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
//                ->attach(public_path('filled.pdf'), [
//                    'as' => 'name.pdf',
//                    'mime' => 'application/pdf',
//                ]);
//        });
//        Mail::send(['name' => 'emails.report'], function ($message) use ($pdf) {
//            $message->to('lasha@studiodlvx.be', 'musmangeee@gmail.com')
//                ->subject('Orange Report')
//                ->attachData( public_path('filled.pdf'), "report.pdf");
//        });


//        if ($result === false) {
//            return $pdf->getError();
//            $error = $pdf->getError();
//        }
//        dd($result);
//        $pdf->setPaper('B4');
//        return $pdf->stream();;

//        $converter = new Converter($string);

        $clientId = '4733cb95-e4d9-41bd-b8f7-c1279c96c0c6';
        $clientSecret = '2XYhPrUzgUaJYkwvUKL8D6qfQQFeJGy20tccCUwjMMgdRslvWz8PrWzqj1gc1dcG';
        $redirectUri = 'https://sophiepeloquin.amocrm.com/';



//        try {

            $apiClient = new \AmoCRM\Client\AmoCRMApiClient($clientId, $clientSecret, $redirectUri);
        $accessToken = $apiClient->getOAuthClient()->getAccessTokenByCode('def50200d00f19ca6c95e5eaf8a67214b823793036c1325df091fb2ce1d9a5dcdcd409b05ad83c0e403642c228ffc2135e512d5ce850bdd50f3a3e085e61aee2bcec46cfe04806c0e57a5075e36759d07ae52a55d06acc3b230bc8545786e8bbbe6eb71c9864eeaf4d86fe7db2f60125aecda7c7e0a1cd36f0b5830504b04701063494e316f33ae404cca20bd57339eec44534b4719f87d764cf04d27fa7ff2abc0e2901e2a97047c152ce172a58870f31ba9b69688a85af4f28946c42bf089b76a2ebcab5c08761f9065e0a61e4f77c598255662fcb92c94c2281e0daffa59c9f30e39490f1cf496a33c74568be689475b067394fa1f5e26fd813b76d03fa43def248e4a31bbae64bca455decd5b8b076f665e388c197ca3a036ac1dfc991cd24eca41be57e7d32fa1fc59cf3757a03081a9f9119ad05ff7ddbe59976fb4e24d9865d5e729c1da148333b5bf3a186b1abb2c13d55d1a9e9d25dcdd330a4cb7c10da308129ab0590e83f45ec6fe920ad8225feeb985a1b4cbb197e2d8279b9c6b58fcd6b8950077cd6cd13111e7ac492cf7a4ccd016d3121f7d62e88737b0af15b9c74c6c7955a045eacc5fc4ab64c4e2710c8fbb35813a7b476c821d600ce48b5a20ac6f5e057d52896d6');
            $apiClient
        ->setAccountBaseDomain($accessToken->getValues()['baseDomain'])
        ->onAccessTokenRefresh(
            function (\League\OAuth2\Client\Token\AccessTokenInterface $accessToken, $baseDomain) {
                saveToken(
                    [
                        'accessToken' => $accessToken->getToken(),
                        'refreshToken' => $accessToken->getRefreshToken(),
                        'expires' => $accessToken->getExpires(),
                        'baseDomain' => $baseDomain,
                    ]
                );
            });
            dd($accessToken);
//            $lead = new  LeadModel();
//            dd($apiClient);
            dd($leadsService = $apiClient->leads());
//        } catch (\AmoCRM\Exceptions\AmoCRMMissedTokenException $e) {
//
//            dd($e->getDescription());
//        }

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
