<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        // $role = User::where('role', $id);
        $title = 'index ';
        $user = User::all();

        return view('user.guru.index', compact('title', 'user', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = ' tambah ';

        return view('user.guru.tambahguru', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pesan = [
            'name.min' => "kelebihan coo namanya ",

            'email.min' => "dikit banget si nomernya ",
            'role.min' => "dikit banget si namanya ",

            'password.min' => "password minimal 4 cuyy (bu yuyun mode) "
        ];
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'min:3',
            'email' => 'min:3',
            'role' => 'min:3',
            'password' => 'min:4',

        ], $pesan);

        if ($validator->fails()) {
            return back()->withInput();
        }

        $input['password'] = password_hash($request->input('password'), PASSWORD_DEFAULT);

        User::create($input);

        return redirect('/guru');



        // $user = $request->all();

        // $user = User::create([

        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'role' => $request->role,
        //     'password' => Hash::make($request->password),

        // ]);

        // Alert::success('Berhasil', 'Petugas baru ditambahkan');
        // return redirect('/guru');
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
        $title = 'edit';
        $user = User::find($id);
        return view('user.guru.editguru', compact('title', 'user'));
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
        $user = User::find($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'min:1',
            'email'      => 'min:1',
            'role'      => 'min:1',
        ]);

        if ($validator->fails()) {
            return back()->withInput();
        }

        if ($request->input('password')) {
            $input['password'] = password_hash($request->input('password'), PASSWORD_DEFAULT);
        } else {
            $input = Arr::except($input, ['password']);
        }


        $user->update($input);
        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return back();
    }
}
