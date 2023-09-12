<?php

namespace App\Http\Controllers;

use App\Models\InformasiKegiatan;
use App\Models\JadwalKegiatan;
use Illuminate\Http\Request;
use Lang;
use Session;

class AdminController extends Controller
{
     public function index()
    {
        $tanggal= date('Y-m-d',);
        $nama_bulan = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
        );
       $tanggal_today = date('d', strtotime($tanggal)) . ' ' . $nama_bulan[date('m', strtotime($tanggal))] . ' ' . date('Y', strtotime($tanggal));
        $judul = 'Dashboard';
        $informasi = InformasiKegiatan::all()->count();
        $jadwal = JadwalKegiatan::all()->count();
        return view('admin.pages.dashboard.index')->with(compact('judul','informasi','jadwal','tanggal_today'));
    }
     public function informasiKegiatan()
    {   
        $judul = 'Informasi kegiatan';
        $datas = InformasiKegiatan::all();
        return view('admin.pages.informasi-kegiatan.index')->with(compact('judul', 'datas'));
    }
     public function jadwalKegiatan()
    {   
        $judul = 'Jadwal kegiatan';
        $datas = JadwalKegiatan::all();
        return view('admin.pages.jadwal-kegiatan.index')->with(compact('judul', 'datas'));
    }

    
    public function createInformasiKegiatan(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'nama' => 'required',
        //     'operasional' => 'required',
        // ]);
    
        // if ($validator->fails()) {
        //     $validator->errors()->add('message', $validator);
        //     return redirect()->back()->withInput()->withErrors($validator);
        // }
        $check = InformasiKegiatan::where('nama', $request->nama)->first();
        if($check){
            return redirect()->back()->withInput()->withErrors(['message'=>'Nama kegiatan sudah ada!']);
        }else{
        $no = InformasiKegiatan::all()->count();
        $file = $request->file('dokumentasi');
        $tujuan_upload = 'Dokumentasi';
        // dd($file->move($tujuan_upload, 'Dokumentasi-' . sprintf($no + 1) . '.' . $file->getClientOriginalExtension()));
        $file->move($tujuan_upload, 'Dokumentasi-' . sprintf($no + 1) . '.' . $file->getClientOriginalExtension());
            $ifk = new InformasiKegiatan;
            $ifk->nama = $request->nama;
            $ifk->deskripsi = $request->deskripsi;
            $ifk->dokumentasi = 'Dokumentasi-'.sprintf($no+1).'.'.$file->getClientOriginalExtension();;
            $ifk->save();
        // dd($user);
        // dd(Mail::to($user->email)->send(new sendRegister()));
            // Mengirim email
    
            Session::flash('message', Lang::get('Data Berhasil Masuk'));
            return redirect()->route('admin.informasi-kegiatan.index');
        }
        
    }
    public function editInformasiKegiatan(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'nama' => 'required',
        //     'operasional' => 'required',
        // ]);
    
        // if ($validator->fails()) {
        //     $validator->errors()->add('message', $validator);
        //     return redirect()->back()->withInput()->withErrors($validator);
        // }
       
        // $no = InformasiKegiatan::all()->count();
          if ($request->hasFile('dokumentasi')) {
             $file = $request->file('dokumentasi');
        // dd($file);
        $tujuan_upload = 'Dokumentasi';
        // dd($file->move($tujuan_upload, 'Dokumentasi-' . sprintf($no + 1) . '.' . $file->getClientOriginalExtension()));
        $file->move($tujuan_upload, 'Dokumentasi-' . sprintf($id) . '.' . $file->getClientOriginalExtension());
            $ifk = InformasiKegiatan::where('id',$id)->first();
            $ifk->nama = $request->nama;
            $ifk->deskripsi = $request->deskripsi;
            $ifk->dokumentasi = 'Dokumentasi-'.sprintf($id).'.'.$file->getClientOriginalExtension();
            $ifk->save();
          }
          else{
             $ifk = InformasiKegiatan::where('id',$id)->first();
            $ifk->nama = $request->nama;
            $ifk->deskripsi = $request->deskripsi;
            $ifk->save();
          }
       
        // dd($user);
        // dd(Mail::to($user->email)->send(new sendRegister()));
            // Mengirim email
    
            Session::flash('message', Lang::get('Data Berhasil Diubah'));
            return redirect()->route('admin.informasi-kegiatan.index');
        
        
    }
      public function deleteInformasiKegiatan($id) {
        InformasiKegiatan::find($id)->delete();
        Session::flash('message', Lang::get('Data Berhasil Dihapus'));
        return redirect()->route('admin.informasi-kegiatan.index');
    }
     public function createJadwalKegiatan(Request $request)
    {
       
        $check = JadwalKegiatan::where('nama', $request->nama)->first();
        if($check){
            return redirect()->back()->withInput()->withErrors(['message'=>'Jadwal kegiatan sudah ada!']);
        }else{
  
     
            $jk = new JadwalKegiatan;
            $jk->nama = $request->nama;
            $jk->tanggal = $request->tanggal;
            $jk->save();
        // dd($user);
        // dd(Mail::to($user->email)->send(new sendRegister()));
            // Mengirim email
    
            Session::flash('message', Lang::get('Data Berhasil Masuk'));
            return redirect()->route('admin.jadwal-kegiatan.index');
        }
        
    }
     public function editJadwalKegiatan(Request $request, $id)
    {
       
  
     
            $jk = JadwalKegiatan::where('id',$id)->first();
            $jk->nama = $request->nama;
            $jk->tanggal = $request->tanggal;
            $jk->save();
        // dd($user);
        // dd(Mail::to($user->email)->send(new sendRegister()));
            // Mengirim email
    
            Session::flash('message', Lang::get('Data Berhasil Edit'));
            return redirect()->route('admin.jadwal-kegiatan.index');
        
        
    }
     public function deleteJadwalKegiatan($id) {
        JadwalKegiatan::find($id)->delete();
        Session::flash('message', Lang::get('Data Berhasil Dihapus'));
        return redirect()->route('admin.jadwal-kegiatan.index');
    }
    
}
