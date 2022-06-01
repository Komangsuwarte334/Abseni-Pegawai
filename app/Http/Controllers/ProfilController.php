<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Admin

    public function index()
    {
        $Usr = auth()->user();
        return view('Profil.Admin.profil-admin', compact('Usr'));
    }

    public function editprofil($id)
    {

        $Usr = User::findorfail($id);
        return view('Profil.Admin.edit-profil-admin', compact('Usr'));
    }

    public function update(Request $request, $id)
    {


        $this->validate(request(), [
            'name' => 'required',
            'tglhr' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'image' => 'image',
        ]);



        $Usr = User::findorfail($id);

        $Usr->nik = $request->nik;
        $Usr->name = $request->name;
        $Usr->tglhr = $request->tglhr;
        $Usr->no_telp = $request->no_telp;
        $Usr->email = $request->email;
        $Usr->alamat = $request->alamat;
        if ($request->file('image')) {
            $Usr['image'] = $request->file('image')->store('post-images');
        }
        $Usr->save();

        return redirect('profil')->with('status', 'Profil berhasil diupdate!');
    }



    //User 

    // public function user()
    // {
    //     $Usr = auth()->user();
    //     return view('Profil.User.profil-user', compact('Usr'));
    // }

    // public function editprofilusr($id)
    // {

    //     $Usr = User::findorfail($id);
    //     return view('Profil.User.edit-profil-user', compact('Usr'));
    // }

    // public function updateuser(Request $request, $id)
    // {


    //     $this->validate(request(), [
    //         'name' => 'required',
    //         'tglhr' => 'required',
    //         'no_telp' => 'required',
    //         'email' => 'required',
    //         'alamat' => 'required',
    //         'image' => 'image',
    //     ]);



    //     $Usr = User::findorfail($id);

    //     $Usr->nik = $request->nik;
    //     $Usr->name = $request->name;
    //     $Usr->tglhr = $request->tglhr;
    //     $Usr->no_telp = $request->no_telp;
    //     $Usr->email = $request->email;
    //     $Usr->alamat = $request->alamat;
    //     if ($request->file('image')) {
    //         $Usr['image'] = $request->file('image')->store('post-images');
    //     }
    //     $Usr->save();

    //     return redirect('profil-user')->with('toast_success', 'Profil berhasil diupdate');
    // }



    public function destroy($id)
    {
        //
    }
}
