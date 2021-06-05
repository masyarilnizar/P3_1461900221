<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Controller0221 extends Controller

{
    public function pelanggan(){
        $pelanggan = DB::table('pelanggan')->select(DB::raw('pelanggan.id as id_pelanggan, pelanggan.nama as nama_pelanggan, alamat'))->join('transaksi','pelanggan.id','=','transaksi.id_pelanggan')->get();
        
        return view('pelanggan0221',['pelanggan' => $pelanggan]);
    }
    public function create(){
        
        
        return view('tambah0221');
    }
    public function cari(Request $request)
    {
        
        $cari = $request->cari;
        $pelanggan = DB::table('transaksi')
        ->select(DB::raw('pelanggan.id as id_pl,pelanggan.nama as nama_pl,pelanggan.alamat,barang.id as id_br,transaksi.id_barang,barang.nama as nama_br,barang.harga,transaksi.id,transaksi.id_pelanggan'))
        ->join('barang','transaksi.id','=','barang.id')  
        ->join('pelanggan','transaksi.id','=','pelanggan.id') 
        ->where('pelanggan.nama','like',"%".$cari."%")
        ->paginate();
     
            
        return view('home0221',['home' => $pelanggan]);
    }
    
    
    
    public function home(Request $request){
        
        // $home = DB::table('pelanggan')
        //         ->select('pelanggan.id','pelanggan.nama','pelanggan.alamat','transaksi.id_pelanggan')
        //         ->join('transaksi','pelanggan.id','=','transaksi.id_pelanggan')
        //         ->get();
        $home = DB::table('transaksi')
                
                ->select(DB::raw('pelanggan.id as id_pl,pelanggan.nama as nama_pl,pelanggan.alamat,barang.id as id_br,transaksi.id_barang,barang.nama as nama_br,barang.harga,transaksi.id,transaksi.id_pelanggan'))
                ->join('barang','transaksi.id','=','barang.id')  
                ->join('pelanggan','transaksi.id','=','pelanggan.id')  
                      
                // ->where('buku_judul','LIKE',"%Slider%")
                ->get();
    
                return view('home0221',['home' => $home]);
        }

        public function index()
        {
            //Menampilkan data
            $home = pelanggan::all();
            return view('edit',['pelanggan' => $home]);
    
        }
        public function update(request $request){
            // $data = User::where('id',$request->id)->fir;
            DB::table('pelanggan')->where('id',$request->id)->update([
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
                
            ]);
            // dd($data->all());
            return redirect('/home0221');
        }
        // SELECT tk.nik, tk.nama, tk.gender, tk.kd_jabatan
        // FROM tbl_karyawan AS tk;

        // SELECT barang.id, transaksi.id_barang, barang.nama, barang.harga, transaksi.id, pelanggan.nama, pelanggan.alamat
        // FROM transaksi
        // INNER JOIN barang ON transaksi.id = barang.id
        // INNER JOIN pelanggan ON transaksi.id = pelanggan.id

        // SELECT pelanggan.id, transaksi.id_pelanggan, pelanggan.nama, pelanggan.alamat
        // FROM pelanggan
        // INNER JOIN transaksi ON pelanggan.id = transaksi.id_pelanggan

        // SELECT barang.id, transaksi.id_barang, barang.nama, barang.harga
        // FROM barang
        // INNER JOIN transaksi ON barang.id = transaksi.id_barang
}