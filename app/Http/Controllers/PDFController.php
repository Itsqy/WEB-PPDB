<?php



namespace App\Http\Controllers;

use App\Models\Formulir;
use App\Models\User;
use Dompdf\Adapter\PDFLib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;



class PDFController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function generatePDF($id)
    {
        // $formulir = Formulir::find($id);
        $formulir = Formulir::with([
            'details', 'user'
        ])->findOrFail($id);

        $pdf = PDF::loadview('user.userdata.cetak', compact('formulir'))->setPaper('a4');
        // return $pdf->download('laporan-pengaduan.pdf');
        return $pdf->download("{$formulir->full_name}.pdf");
    }
    public function generatecard($id)
    {

        // $formulir = Formulir::find($id);
        // $formulir = Formulir::with([
        //     'details', 'user'
        // ])->findOrFail($id);
        $formulir = Formulir::findOrfail($id);
        return view('user.userdata.cetakcard', compact('formulir',));
        // $pdf = PDF::loadview('user.userdata.cetakcard', compact('formulir'))->setPaper('a4');
        // // return $pdf->download('laporan-pengaduan.pdf');
        // return $pdf->download("{$formulir->full_name}.pdf");
    }
    public function generateabsen()
    {
        $title = 'cetak absen';
        $i = '1';
        $formulir = Formulir::all();
        return view('user.userdata.cetakabsen', compact('formulir', 'title', 'i'));
        // $pdf = PDF::loadview('user.userdata.cetakcard', compact('formulir'))->setPaper('a4');
        // // return $pdf->download('laporan-pengaduan.pdf');
        // return $pdf->download("{$formulir->full_name}.pdf");
    }

    public function card()
    {
        $title = 'detail';
        $user = Auth::user();
        $formulir = Formulir::where('user_id', '=', $user->id)->first();

        if ($formulir) {
            //tampilkan dashboard jika sudah mendaftar
            return view('user.userdata.card', [
                'user' => $user,
                'formulir' => $formulir,
                'title' => $title
            ]);
        } else {
            //redirect ke form pendaftaran jika belum mendaftar
            return redirect('/formulir');
        }
        // $title = 'card';
        // return view('user.userdata.card', compact('title'));
    }
}
