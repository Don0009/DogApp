<?php

namespace App\Http\Controllers\OKSign;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class OKSignController extends Controller
{
    public function document_upload($uploaded_file_path, $okSign_filename)
    {

        // request
        $headers = array(
            'x-oksign-authorization' => env('OKSIGN_AUTH'), // Organisational token
            'accept' => 'application/json',
            'x-oksign-filename' => $okSign_filename,
            'content-type' => 'application/pdf'
        );

        $payload = file_get_contents($uploaded_file_path);

        $client = new Client(['headers' => $headers, 'body' => $payload]);

        // handle the response
        $response = $client->post(env('OKSIGN_URL') . '/services/rest/v1/document/upload');

        if ($response->getStatusCode() === 200) {
            $response = json_decode($response->getBody()->getContents());
            if ($response->status === 'OK') {
                return $response->reason;
            } else {
                echo 'Error: ' . $response->reason;
            }
        } else {
            echo 'Upload Failed';
        }
    }


    public function form_description_upload($doc_id, $payload)
    {
        $headers = array(
            'x-oksign-authorization' => env('OKSIGN_AUTH'), // Organisational token
            'x-oksign-docid' => $doc_id, // DocumentID
            'accept' => 'application/json',
            'content-type' => 'application/json'
        );


        $client = new Client(['headers' => $headers, 'body' => $payload]);

// handle the response
        $response = $client->post(env('OKSIGN_URL') . '/services/rest/v1/formdesc/upload');

        if ($response->getStatusCode() === 200) {
            $response = json_decode($response->getBody()->getContents());
            if ($response->status === 'OK') {
                return $response->reason;
            } else {
                echo 'Error: ' . $response->reason;
            }
        } else {
            echo 'Error';
        }
    }


    public function download_document($document_id){
        // request
        $headers = array(
            'x-oksign-authorization' => env('OKSIGN_AUTH'), // Organisational token
            'x-oksign-docid' => $document_id, // DocumentID
            'accept' => 'application/json'
        );

        $client = new Client([ 'headers' => $headers ]);

// handle the response
        $response = $client->get('https://www.oksign.be/services/rest/v1/document/retrieve');

        $filename = Carbon::now()->timestamp;
        if($response->getStatusCode() === 200){
            $raw = $response->getBody()->getContents();
            file_put_contents(public_path($filename . '.pdf'), $raw);
            return response()->file(public_path($filename . '.pdf'));
        } else {
            echo 'Error';
        }
    }


    public function orange_internet_tv($path, $filename)
    {
        $payload = '{"reusable":false,"fields":[{"signerid":"bt_00000000-0000-0000-0000-000000000001","height":66.14,"inputtype":"CanvasSIG","name":"SIG_FIELD_1","pagenbr":0,"posX":28.94,"posY":609.33,"readonly":false,"required":true,"signingoptions":{"eid":{},"pen":{},"tan":{},"itsme":{}},"width":162.87},{"signerid":"bt_00000000-0000-0000-0000-000000000001","height":49.61,"inputtype":"CanvasSIG","name":"SIG_FIELD_2","pagenbr":2,"posX":31.42,"posY":558.9,"readonly":false,"required":true,"signingoptions":{"eid":{},"pen":{},"tan":{},"itsme":{}},"width":122.36}],"signersinfo":[{"mobile":"","name":"Signer-1","actingas":"","id":"bt_00000000-0000-0000-0000-000000000001","email":""},{"mobile":"","name":"Signer-1","actingas":"","id":"bt_00000000-0000-0000-0000-000000000001","email":""}]}';

        $doc_id = $this->document_upload($path, $filename);
        $sign_url = $this->form_description_upload($doc_id, $payload);
        if (isset($sign_url[0])){
            $sign_url = json_decode(json_encode($sign_url[0]), true);
        }
//        dd($sign_url);
        if (isset($sign_url['url'])){
            $sign_url = $sign_url['url'];
        }
        return [
            'document_id' => $doc_id,
            'document_sign_url' => $sign_url
        ];

    }


}
