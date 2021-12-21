<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Formulir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\CloudinaryStorage;

class FormController extends Controller
{

    // public function editfile()
    // {
    //     $title = 'editfile';
    //     $user = Auth::user();
    //     $formulir = Formulir::where('user_id', '=', $user->id)->first();
    //     if ($formulir) {
    //         return view('user.content.editdata', compact('title', 'user', 'formulir'));
    //     } else {
    //         return view('user.content.formulir', compact('title', 'user', 'formulir'));
    //     }
    // }


    // public function updatefile(Request $request, $id)
    // {
    //     $title = 'update';
    //     $formulir = Formulir::find($id);
    //     Storage::delete([$formulir->photo, $formulir->rapot, $formulir->ijazah, $formulir->file_prestasi]);
    //     $formulir->update([
    //         'photo'         => $request->file('photo')->store('image-data'),
    //         'rapot'         => $request->file('rapot')->store('rapot-data'),
    //         'ijazah'         => $request->file('ijazah')->store('ijazah-data'),
    //         'file_prestasi'         => $request->file('file_prestasi')->store('prestasi-data'),
    //     ]);

    //     $formulir->save();

    //     dd($formulir);

    // return view('user.userdata.beforedetail', compact('formulir', 'title'))->with('success', ' EditData berhasil ditambahkan.');
    // }

    public function edit()
    {
        $title = 'edit';
        $user = Auth::user();
        $formulir = Formulir::where('user_id', '=', $user->id)->first();
        if ($formulir) {


            return view('user.content.editformulir', compact('title', 'user', 'formulir'));
        } else {
            return view('user.content.formulir', compact('title', 'user', 'formulir'));
        }
    }

    public function update(Request $request, $id)
    {


        $pesan = [
            'full_name.required' => "namanya ga boleh kosong  ",
            'photo.required' => "photo ga boleh kosong  ",
            'ijazah.required' => "kalo g ada skhun aja  ",
            'rapot.required' => "rapot ga boleh kosong  ",
            'photo.required' => "photo ga boleh kosong  ",
            'school.required' => "sekolah asal ga boleh kosong  ",
            'place.required' => "tempat lahir ga boleh kosong  ",
            'file_berkas.required' => "file_berkas ga boleh kosong  ",
            'birthday.required' => "tanggal lahir ga boleh kosong  ",

            'email.required' => "email diisi dong ",
            'email.unique' => "email udah ada yang punya",
            'email.email' => "email ngga valid nih", // mesti ada @ nya\

            'password.required' => "password diisi dong ",
            'photo.mimes' => "photo nya png to jpg yaa "
        ];

        $request->validate([
            'full_name' => "required",
            'nisn' => "required",
            'place' => "required",
            'birthday' => "required",
            'agama' => "required",
            'address' => "required",
            'anak_ke' => "required",
            'jml_saudara' => "required",
            'school' => "required",
            'gender' => "required",
            'tinggal_dengan' => "required",
            'nama_ayah' => "required",
            'nama_ibu' => "required",
            'kerja_ayah' => "required",
            'kerja_ibu' => "required",
            'pend_akhira' => "required",
            'pend_akhiri' => "required",
            'photo'         => "required|mimes:png,jpg|max:3072",
            'rapot'         => "required|mimes:pdf,png,jpg|max:3072",
            'ijazah'         => "required|mimes:pdf,jpg,png|max:3072",
            'file_prestasi'         => "required|mimes:pdf,jpg,png|max:3072",
            'phone' => "required",
            'no_telpayah' => "required",
            'no_telpibu' => "required",

        ], $pesan);
        if (empty($request->file('photo')) && empty($request->file('raport')) && empty($request->file('file_prestasi')) && empty($request->file('ijazah'))) {
            $title = 'update';
            $formulir = formulir::findOrFail($id);
            $formulir->update([
                'full_name' => $request->full_name,
                'nisn' => $request->nisn,
                'place' => $request->place,
                'birthday' => $request->birthday,
                'agama' => $request->agama,
                'address' => $request->address,
                'anak_ke' => $request->anak_ke,
                'jml_saudara' => $request->jml_saudara,
                'school' => $request->school,
                'gender' => $request->gender,
                'tinggal_dengan' => $request->tinggal_dengan,

                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'kerja_ayah' => $request->kerja_ayah,
                'kerja_ibu' => $request->kerja_ibu,
                'pend_akhira' => $request->pend_akhira,
                'pend_akhiri' => $request->pend_akhiri,

                'prestasi' => $request->prestasi,
                'phone' => $request->phone,
                'no_telpayah' => $request->no_telpayah,
                'no_telpibu' => $request->no_telpibu,


            ]);
            // dd($formulir);
            return view('user.userdata.beforedetail', compact('formulir', 'title'))->with('success', ' EditData berhasil ditambahkan.');
        } else {

            $title = 'update';
            $formulir = formulir::findOrFail($id);
            // Storage::delete($formulir->photo);
            // Storage::delete($formulir->rapot);
            // Storage::delete($formulir->ijazah);
            // Storage::delete($formulir->file_prestasi);

            $imagePhoto  = $request->file('photo');
            $imageIjazah  = $request->file('ijazah');
            $imageRapot  = $request->file('rapot');
            $imagePrestasi  = $request->file('file_prestasi');

            $resultIjazah = '';
            $resultPhoto = '';
            $resultPrestasi = '';
            $resultRapot = '';

            if ($request->hasfile('photo')) {
                $resultPhoto = CloudinaryStorage::upload($imagePhoto->getRealPath(), $imagePhoto->getClientOriginalName());
            }
            if ($request->hasfile('ijazah')) {
                $resultPhoto = CloudinaryStorage::upload($imageIjazah->getRealPath(), $imageIjazah->getClientOriginalName());
            }
            if ($request->hasfile('rapot')) {
                $resultPhoto = CloudinaryStorage::upload($imageRapot->getRealPath(), $imageRapot->getClientOriginalName());
            }
            if ($request->hasfile('file_prestasi')) {
                $resultPhoto = CloudinaryStorage::upload($imagePrestasi->getRealPath(), $imagePrestasi->getClientOriginalName());
            }

            // $resultPhoto = CloudinaryStorage::upload($imagePhoto->getRealPath(), $imagePhoto->getClientOriginalName());
            // $resultIjazah = CloudinaryStorage::upload($imageIjazah->getRealPath(), $imageIjazah->getClientOriginalName());
            // $resultRapot = CloudinaryStorage::upload($imageRapot->getRealPath(), $imageRapot->getClientOriginalName());
            // $resultPrestasi = CloudinaryStorage::upload($imagePrestasi->getRealPath(), $imagePrestasi->getClientOriginalName());
            // $formulir->update([
            //     'ijazah' => $result,
            //     'photo' => $result,
            //     'rapot' => $result,
            //     'file_prestasi' => $result,
            // ]);

            $formulir->update([
                'full_name' => $request->full_name,
                'nisn' => $request->nisn,
                'place' => $request->place,
                'birthday' => $request->birthday,
                'agama' => $request->agama,
                'address' => $request->address,
                'anak_ke' => $request->anak_ke,
                'jml_saudara' => $request->jml_saudara,
                'school' => $request->school,
                'gender' => $request->gender,
                'tinggal_dengan' => $request->tinggal_dengan,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'kerja_ayah' => $request->kerja_ayah,
                'kerja_ibu' => $request->kerja_ibu,
                'pend_akhira' => $request->pend_akhira,
                'pend_akhiri' => $request->pend_akhiri,
                'prestasi' => $request->prestasi,
                'phone' => $request->phone,
                'no_telpayah' => $request->no_telpayah,
                'no_telpibu' => $request->no_telpibu,
                'photo'         => $resultPhoto,
                'rapot'         => $resultRapot,
                'ijazah'         => $resultIjazah,
                'file_prestasi'         => $resultPrestasi,
            ]);

            // dd($result);
            return view('user.userdata.beforedetail', compact('formulir', 'title'))->with('success', ' EditData berhasil ditambahkan.');
        }
    }

    public function daftar()
    {
        $title = 'Formulir';
        $user = Auth::user();
        $formulir = Formulir::where('user_id', '=', $user->id)->first();

        if ($formulir) {
            //tampilkan dashboard jika sudah mendaftar
            return view('user.userdata.beforedetail', [
                'user' => $user,
                'formulir' => $formulir,
                'title' => $title,


            ]);
        } else {
            //redirect ke form pendaftaran jika belum mendaftar
            return view('user.content.formulir', [
                'user' => $user,
                'formulir' => $formulir,
                'title' => $title,

            ]);
        }
    }
    public function insert(Request $request)
    {
        $title = 'form';
        $pesan = [
            'full_name.required' => "namanya ga boleh kosong  ",
            'photo.required' => "photo ga boleh kosong  ",
            'ijazah.required' => "kalo g ada skhun aja  ",
            'rapot.required' => "rapot ga boleh kosong  ",
            'photo.required' => "photo ga boleh kosong  ",

            'email.required' => "email diisi dong ",
            'email.unique' => "email udah ada yang punya",
            'email.email' => "email ngga valid nih", // mesti ada @ nya\

            'password.required' => "password diisi dong ",
            'photo.mimes' => "photo nya png to jpg yaa "
        ];

        $request->validate([
            'full_name' => "required",
            'nisn' => "required",
            'place' => "required",
            'birthday' => "required",
            'agama' => "required",
            'address' => "required",
            'anak_ke' => "required",
            'jml_saudara' => "required",
            'school' => "required",
            'gender' => "required",
            'tinggal_dengan' => "required",
            'nama_ayah' => "required",
            'nama_ibu' => "required",
            'kerja_ayah' => "required",
            'kerja_ibu' => "required",
            'pend_akhira' => "required",
            'pend_akhiri' => "required",
            'photo'         => "required|mimes:png,jpg|max:3072",
            'rapot'         => "required|mimes:pdf,png,jpg|max:3072",
            'ijazah'         => "mimes:pdf,jpg,png|max:3072",
            'file_prestasi'         => "mimes:pdf,jpg,png|max:3072",
            'phone' => "required",
            'no_telpayah' => "required",
            'no_telpibu' => "required",

        ], $pesan);

        //awal nya kan $image yaa
        //kaya di cloudinarystorage, kalo beda , bkalan nge fek ga?
        //oalh
        $imagePhoto  = $request->file('photo');
        $imageIjazah  = $request->file('ijazah');
        $imageRapot  = $request->file('rapot');
        $imagePrestasi  = $request->file('file_prestasi');

        $resultIjazah = '';
        $resultPhoto = '';
        $resultPrestasi = '';
        $resultRapot = '';

        if ($request->hasfile('photo')) {
            $resultPhoto = CloudinaryStorage::upload($imagePhoto->getRealPath(), $imagePhoto->getClientOriginalName());
        }
        if ($request->hasfile('ijazah')) {
            $resultPhoto = CloudinaryStorage::upload($imageIjazah->getRealPath(), $imageIjazah->getClientOriginalName());
        }
        if ($request->hasfile('rapot')) {
            $resultPhoto = CloudinaryStorage::upload($imageRapot->getRealPath(), $imageRapot->getClientOriginalName());
        }
        if ($request->hasfile('file_prestasi')) {
            $resultPhoto = CloudinaryStorage::upload($imagePrestasi->getRealPath(), $imagePrestasi->getClientOriginalName());
        }
        // kenapa?
        // $resultIjazah = CloudinaryStorage::upload($imageIjazah->getRealPath(), $imageIjazah->getClientOriginalName());
        // $resultRapot = CloudinaryStorage::upload($imageRapot->getRealPath(), $imageRapot->getClientOriginalName());
        // $resultPrestasi = CloudinaryStorage::upload($imagePrestasi->getRealPath(), $imagePrestasi->getClientOriginalName());

        $formulir = Formulir::create([
            'full_name' => $request->full_name,
            'nisn' => $request->nisn,
            'place' => $request->place,
            'birthday' => $request->birthday,
            'agama' => $request->agama,
            'address' => $request->address,
            'anak_ke' => $request->anak_ke,
            'jml_saudara' => $request->jml_saudara,
            'school' => $request->school,
            'gender' => $request->gender,
            'tinggal_dengan' => $request->tinggal_dengan,
            'penyakit' => $request->penyakit,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'kerja_ayah' => $request->kerja_ayah,
            'kerja_ibu' => $request->kerja_ibu,
            'pend_akhira' => $request->pend_akhira,
            'pend_akhiri' => $request->pend_akhiri,
            'infoppdb' => $request->infoppdb,
            'prestasi' => $request->prestasi,
            'photo'         => $resultPhoto,
            'rapot'         => $resultRapot,
            'ijazah'         => $resultIjazah,
            'file_prestasi'  => $resultPrestasi,
            'phone' => $request->phone,
            'no_telpayah' => $request->no_telpayah,
            'no_telpibu' => $request->no_telpibu,
            'user_id' => Auth::user()->id,
            //ana push ya?
            //local udh berantakan
            //keknya g bisa jalan


        ]);
        // $image  = $request->file(['photo', 'ijazah', 'rapot']);
        // $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
        // Formulir::create([
        //     'photo' => $result,
        //     'ijazah' => $result,
        //     'rapot' => $result,
        // ]);

        // dd($result);
        return view('user.userdata.beforedetail', compact('title', 'formulir',));



        // $input = date('d-m-Y', strtotime('birthday'));
        // $input['birthday'] = date('d-m-Y');
        // $date = Carbon::createFromFormat('d/m/Y', $input);
        // $date = $date->format('F');
        // dd($input);
        // return back()->with('success', 'User created successfully.');
        // dd($data);

    }

    public function absen()
    {
        // $formulir = Formulir::orderBy('id', 'desc')->paginate(5);

        $i = 1;
        $title = 'absen';
        $formulir = Formulir::all();
        return view('user.userdata.absen', compact('formulir', 'title', 'i'));
    }
    public function showtable()
    {
        // $formulir = Formulir::orderBy('id', 'desc')->paginate(5);

        $i = 1;
        $title = 'berkas';
        $formulir = Formulir::all();
        return view('user.content.tableuser', compact('formulir', 'title', 'i'));
    }
    public function showDetail($id)
    {
        // $user = User::find($id);
        // $formulir = Formulir::with([
        //     'details', 'user'
        // ])->findOrFail($id);


        $title = 'berkas';
        $formulir = Formulir::find($id);

        return view('user.userdata.detail', compact('formulir', 'title'));
    }
    public function showform()
    {
        $title = 'detail';
        $user = Auth::user();
        $formulir = Formulir::where('user_id', '=', $user->id)->first();

        if ($formulir) {
            //tampilkan detail jika sudah mendaftar
            return view('user.userdata.detail', [
                'user' => $user,
                'formulir' => $formulir,
                'title' => $title,

            ]);
        } else {
            //redirect ke form pendaftaran jika belum mendaftar
            return view('user.content.formulir', compact('title'));
        }

        // $title = 'form';
        // // $user = User::find($id);
        // // $formulir = Formulir::with([
        // //     'details', 'user'
        // // ])->findOrFail($id);
        // $formulir = Formulir::where('id', $id)->first();
        // // $formulir = Formulir::find($id);
        // return dd($formulir);
        // return view('user.userdata.detail', compact('formulir', 'title'));
    }

    public function editdata($id)
    {
        $form = Formulir::find($id);
        $title = 'edit data';
        return view('user.userdata.edit', compact('title', 'form'));
    }

    public function updatedata(Request $request, $id)
    {
        // $formulir = Formulir::where('id', $id)->first();
        // $user = User::find($id);
        // $user = Auth::user();
        // $formulir = Formulir::where('user_id', '=', $user->id)->first();
        // dd($request);
        // $formulir = Formulir::with([
        //     'details', 'user'
        // ])->findOrFail($id);

        $total = $request->nilai1 + $request->nilai2;
        $title = 'detail';
        $formulir = formulir::find($id);
        $formulir->update([
            'nilai1'          => $request->nilai1,
            'nilai2'      => $request->nilai2,
            // 'status'      => $request->status,


        ]);

        $formulir->save();


        // dd($formulir);
        return view('user.userdata.afterdetail', [
            'formulir'  => $formulir,
            'title' => $title,
            'total' => $total,


        ]);
    }

    public function showUser()
    {
        $title = 'detailUser';
        $user = Auth::user();
        $formulir = Formulir::where('user_id', '=', $user->id)->first();




        if ($formulir) {


            //tampilkan dashboard jika sudah mendaftar
            return view('user.userdata.afterdetail', [
                'user' => $user,
                'formulir' => $formulir,
                'title' => $title
            ]);
        } else {
            $title = 'detailUser';
            $formulir = Formulir::where('user_id', '=', $user->id)->first();
            //redirect ke form pendaftaran jika belum mendaftar
            return view('user.userdata.beforedetail', compact('title', 'formulir'));
        }
    }

    // $title = 'form';
    // // $user = User::find($id);
    // // $formulir = Formulir::with([
    // //     'details', 'user'
    // // ])->findOrFail($id);
    // $formulir = Formulir::where('id', $id)->first();
    // // $formulir = Formulir::find($id);
    // return dd($formulir);
    // return view('user.userdata.detail', compact('formulir', 'title'));

    public function showbeforenilai()
    {
        $title = 'detail';
        $user = Auth::user();
        $formulir = Formulir::where('user_id', '=', $user->id)->first();



        if ($formulir) {
            //tampilkan dashboard jika sudah mendaftar
            return view('user.userdata.beforedetail', [
                'user' => $user,
                'formulir' => $formulir,
                'title' => $title,

            ]);
        } else {
            //redirect ke form pendaftaran jika belum mendaftar
            return view('user.content.formulir', compact('title'));
        }
    }
}
