<?php

namespace App\Http\Controllers;
use App\Models\history;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



class SortController extends Controller
{
    public function processForm(Request $request)
    {
        $argoID = $request->input('identifierArgo');
        return view('booking')->with('identifier', $argoID);
    }

    public function cariTiket(Request $request)
    {
        $awal = $request->input('stAwal');
        $akhir = $request->input('stAkhir');
        $tgl = $request->input('tanggal');

        return view('searchSorted')->with('stasiunAwal', $awal)
        ->with('stasiunAkhir', $akhir)
        ->with('tanggalBrgkt', $tgl);
    }

    public function prosesTiket(Request $request)
    {
        $userID = auth()->user()->id;

        $datapenumpang = $request->validate([
            'titelnama' => 'required',
            'namalengkap' => 'required|string|max:255',
            'nomortelp' => 'required|numeric',
            'emailpen' => 'required|email',
            'nikpen' => 'required|numeric|regex:/^[0-9]{16}$/',
        ]);

        // $titel = $request->validate([
        //     'titelnama' => 'required',
        // ])['titelnama'];

        // $nama = $request->validate([
        //     'namalengkap' => 'required|string|max:255',
        // ])['namalengkap'];

        // $telp = $request->validate([
        //     'nomortelp' => 'required|numeric',
        // ])['nomortelp'];

        // $email = $request->validate([
        //     'emailpen' => 'required|email',
        // ])['emailpen'];

        // $NIK = $request->validate([
        //     'nikpen' => 'required|numeric|regex:/^[0-9]{16}$/',
        // ])['nikpen'];

        $arr = explode(':', $request->input('bookseat'));

        $data = ['userID' => $userID,
                'argoID' =>  $arr[0],
                'gerbongID' => $arr[1],
                'kursiNo' => $arr[2],
                'titel' => $datapenumpang['titelnama'],
                'namalengkap' => $datapenumpang['namalengkap'],
                'telepon' => $datapenumpang['nomortelp'],
                'email' => $datapenumpang['emailpen'],
                'NIK' => $datapenumpang['nikpen']
        ];

        DB::table('history')->insert($data);

        DB::table('gerbong')->where('argoID', $arr[0])
                                ->where('gerbongID', $arr[1])
                                ->where('kursiNo', $arr[2])
                                ->update(['occupied' => 1]);

        return redirect('test')->with('success', 'Order placed successfully!');
    }
}
