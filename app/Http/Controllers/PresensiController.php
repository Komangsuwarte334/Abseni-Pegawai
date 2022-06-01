<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('presensi.Masuk');
    }

    public function keluar()
    {
        return view('presensi.Keluar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timezone = 'Asia/Makassar';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id', '=', auth()->user()->id],
            ['user_nik', '=', auth()->user()->id],
            ['tgl', '=', $tanggal],
        ])->first();
        if ($presensi) {

            return redirect('presensi-masuk')->with('info', 'Absensi masuk telah tersimpan!');
        } else {
            Presensi::create([
                'user_id' => auth()->user()->id,
                'user_nik' => auth()->user()->id,
                'tgl' => $tanggal,
                'jammasuk' => $localtime,
            ]);
        }


        return redirect('presensi-masuk')->with('status', 'Absensi masuk berhasil!');
    }

    public function presensipulang()
    {
        $timezone = 'Asia/Makassar';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id', '=', auth()->user()->id],
            ['user_nik', '=', auth()->user()->id],
            ['tgl', '=', $tanggal],
        ])->first();

        $dt = [
            'jamkeluar' => $localtime,
            'jamkerja' => date('H:i:s', strtotime($localtime) - strtotime($presensi->jammasuk))
        ];

        if ($presensi->jamkeluar == "") {
            $presensi->update($dt);
            return redirect('presensi-keluar')->with('status', 'Absensi pulang berhasil ');
        } else {

            return redirect('presensi-keluar')->with('info', 'Absensi pulang telah tersimpan! ');
        }
    }

    public function tampildatakeseluruhan($tglawal, $tglakhir)
    {
        $presensi = Presensi::with('user')->whereBetween('tgl', [$tglawal, $tglakhir])->orderBy('tgl', 'asc')->get();
        return view('Presensi.Rekap-karyawan', compact('presensi'));
    }

    public function halamanrekap()
    {
        return view('Presensi.Halaman-rekap-karyawan');
    }

    public function cetakAbsensi()
    {
        $dtCetakAbsensi = Presensi::paginate()->all();
        return view('Presensi.Cetak-absensi', compact('dtCetakAbsensi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
