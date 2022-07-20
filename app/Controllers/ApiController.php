<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ApiController extends BaseController
{
    public function index()
    {
        //data indonesia
        $url = "https://data.covid19.go.id/public/api/update.json";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Accept: */*",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
        $dataIndonesia = json_decode($resp);
        // dd($dataIndonesia);
        $data = [
            'dataIndonesia' => $dataIndonesia,
            'tanggalIndonesia' => $dataIndonesia->update->penambahan->created,
            'dataHarian' => $dataIndonesia->update->penambahan,
        ];

        return view("index", $data);
    }
}
