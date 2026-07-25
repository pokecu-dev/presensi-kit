<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\absen;
use Illuminate\Database\Events\TransactionRolledBack;

// use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function GetDataSiswa(){
        $siswa = Siswa::with('kelas')->get();

        $absen = absen::with('siswa.kelas')->get();

        return response()->json([
            'data siswa' => [
                'data' => $siswa
            ],
            'data absen' => [
                'data' => $absen
            ]
        ]);
    }

    public function GetDataAbsen(){

        $absen = absen::with('siswa.kelas')->get();

        $AbsenHariIni = absen::with('siswa.kelas')->WhereDate('created_at', today())->get() ?? null;

        return response()->json([
            'status' => 'success',
            'data' => [
                'today' => $AbsenHariIni,
                'all' => $absen
            ]
        ]);

    }




    public function Absen(Request $request){

        $status = $request->input('status') ?? 'datang'; // isinya status nanti pulang dan datang wahai teman teman my friend gwah:D

        $siswa = Siswa::with('kelas')->where('nis',$request->input('nis') ?? Siswa::find(1)?->nis)->first();

        $cek = absen::with('siswa.kelas')->where('status',$status)->whereDate('created_at', today())->exisbts();

        if($cek){
            return response()->json([
                'status' => 'error',
                'message' => 'kamu udah absen woi,jan malah buat db gemuk >:('
            ]);
        }

        $absen = absen::create([
            'id_siswa' => $siswa->id,
            'status' => $status
        ]);

        return response()->json([
            'data' => $siswa
        ]);

    }

}
