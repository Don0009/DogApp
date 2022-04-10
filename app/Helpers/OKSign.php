<?php

use GuzzleHttp\Client;

class OKSign
{

    /**
     * Uploading Documents
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function document_upload($uploaded_file_path, $okSign_filename)
    {

        // request
        $headers = array(
            'x-oksign-authorization' => '07371;331544-A8F511FD-9CFE-2C83-691B-D2CFF9B0F11A;contract', // Organisational token
            'accept' => 'application/json',
            'x-oksign-filename' => $okSign_filename,
            'content-type' => 'application/pdf'
        );

        $payload = file_get_contents($uploaded_file_path);

        $client = new Client(['headers' => $headers, 'body' => $payload]);

        // handle the response
        $response = $client->post('https://www.oksign.be/services/rest/v1/document/upload');

        if ($response->getStatusCode() === 200) {
            $response = json_decode($response->getBody()->getContents());
            if ($response->status === 'OK') {
                echo 'documentID: ' . $response->reason;
            } else {
                echo 'Error: ' . $response->reason;
            }
        } else {
            echo 'Upload Failed';
        }
    }
}
