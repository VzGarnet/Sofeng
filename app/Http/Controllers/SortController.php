<?php

namespace App\Http\Controllers;
use App\Models\history;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        $titel = $request->input('titelnama');
        $nama = $request->input('namalengkap');
        $telp = $request->input('nomortelp');
        $email = $request->input('emailpen');
        $NIK = $request->input('nikpen');

        $arr = explode(':', $request->input('bookseat'));

        $data = ['userID' => $userID,
                'argoID' =>  $arr[0],
                'gerbongID' => $arr[1],
                'kursiNo' => $arr[2],
                'titel' => $titel,
                'namalengkap' => $nama,
                'telepon' => $telp,
                'email' => $email,
                'NIK' => $NIK];

        DB::table('history')->insert($data);

        DB::table('gerbong')->where('argoID', $arr[0])
        ->where('gerbongID', $arr[1])
        ->where('kursiNo', $arr[2])
        ->update(['occupied' => 1]);

        return redirect('test')->with('success', 'Order placed successfully!');
    }
}
