<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $title = 'dashboard';
        $auth = Auth::user();
        $form = Formulir::where('user_id', '=', $auth->id)->first();



        $formulir = Formulir::count();
        // $pending = Formulir::where('status', '<', 2)->count();
        // $lolos = Formulir::where('status', '>',  1)->count();
        $user = User::where('role', '=', 'User')->count();
        $guru = User::where('role', '=', 'Guru')->count();
        $admin = User::where('role', '=', 'Admin')->count();





        return view('user.content.index', compact('title', 'user', 'guru', 'admin', 'form', 'auth', 'formulir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // ini rencana nya buat kalo si dasbord mesti lebih dari 1 blade
        // jadi punya admin gruu ama user dipisah semua
        // $title = 'dashboard';
        // $user = Auth::user();
        // $formulir = Formulir::where('user_id', '=', $user->id)->first();

        // if ($formulir) {


        //     //tampilkan dashboard jika sudah mendaftar
        //     return view('user.userdata.done', [
        //         'user' => $user,
        //         'formulir' => $formulir,
        //         'title' => $title,



        //     ]);
        // } else {
        //     //redirect ke form pendaftaran jika belum mendaftar
        //     return view('user.userdata.still', [
        //         'user' => $user,
        //         'formulir' => $formulir,
        //         'title' => $title,

        //     ]);}

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
