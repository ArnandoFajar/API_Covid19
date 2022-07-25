<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use phpDocumentor\Reflection\PseudoTypes\False_;

class ApiController extends BaseController
{
    public function __construct()
    {
        //kirim notifikasi ke bot telegram
        define('BOT_TOKEN', '5559758612:AAHpkTe4Pgu1bCJ11zzGPUI8X8X-rhu6GZM');
        define('CHAT_ID', '-799465355');
        // define('CHAT_ID', '-743753311');
    }
    public function index()
    {
        return view("index");
    }

    public function sendTelegram()
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

        $kasus = $dataIndonesia->update->harian;

        if ($kasus) {
            // kirim notifikasi ke bot telegram
            function kirimTelegram($pesan)
            {
                $API = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendmessage?chat_id=" . CHAT_ID . "&text=$pesan";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                curl_setopt($ch, CURLOPT_URL, $API);
                $result = curl_exec($ch);
                curl_close($ch);
                return $result;
            }

            kirimTelegram(urlencode("Kasus Covid-19 di indonesia terbaru Tanggal " . date('d-m-Y', strtotime($dataIndonesia->update->penambahan->created)) . "\n\n" .
                "Positif : " . $dataIndonesia->update->penambahan->jumlah_positif . "\n" .
                "Sembuh : " . $dataIndonesia->update->penambahan->jumlah_sembuh . "\n" .
                "Meninggal : " . $dataIndonesia->update->penambahan->jumlah_meninggal));

            $msg = [
                'status' => 'success',
                'message' => 'Data berhasil dikirm',
            ];
        } else {
            $msg = [
                'status' => 'error',
                'message' => 'Gagal Mengirim Pesan',
            ];
        }

        echo json_encode($msg);
    }

    public function getKasus()
    {
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

        $kasus = $dataIndonesia->update->harian;
        $d = date('d-m-Y', strtotime($kasus[0]->key_as_string));

        // dd($d);
        // dd($kasus[0]->key_as_string);
        // die;

        for ($i = 0; $i < count($kasus); $i++) {
            $case = $kasus[$i]->jumlah_positif->value;
            $tanggalCase = $kasus[$i]->key_as_string;
        }


        $data = [
            'dataIndonesia' => $dataIndonesia,
            'tanggalIndonesia' => $dataIndonesia->update->penambahan->created,
            'dataHarian' => $dataIndonesia->update->penambahan,
            'kasus' => $kasus
        ];

        return json_encode($data);
    }
}
