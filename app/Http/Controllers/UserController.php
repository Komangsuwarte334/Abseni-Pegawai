<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function index(Request $request)
    {
        // $dtUser = User::all();
        // return view('Datapegawai.Data-pegawai', compact('dtUser'));
        $keyword = $request->keyword;

        $dtUser = User::where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('nik', 'LIKE', '%' . $keyword . '%')

            ->paginate(5);
        return view('Datapegawai.Data-pegawai', compact('dtUser'));
    }

    public function registrasi()
    {
        return view('Datapegawai.registrasi');
    }

    public function simpanregistrasi(Request $request)
    {
        // dd($request->all());
        $request->validate([

            'nik' => 'required|min:8|unique:users,nik',
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'no_telp' => 'required|unique:users,no_telp',
            'tglhr' => 'required',
            'alamat' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6',

        ]);



        User::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'level' => '2',
            'leve' => $request->level,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'tglhr' => $request->tglhr,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),

        ]);


        return redirect('data-pegawai')->with('status', 'Data berhasil ditambah!');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $Usr = User::findorfail($id);
        return view('Datapegawai.Edit-pegawai', compact('Usr'));
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
        $Usr = User::findorfail($id);
        $Usr->update($request->all());
        return redirect('data-pegawai')->with('status', 'Data berhasil diedit!');
    }

    public function cetakPegawai()
    {
        $dtCetakPegawai = User::paginate()->all();
        return view('Datapegawai.Cetak-pegawai', compact('dtCetakPegawai'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Usr = User::findorfail($id);
        $Usr->delete();
        return redirect('data-pegawai')->with('status', 'Data berhasil dihapus!');
    }
}
