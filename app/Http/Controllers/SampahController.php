<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class SampahController extends Controller
{
    public function index()
    {
        // $data = (new BaseApi)->index('api/students');
        // $students = $data->json();

        $data = (new BaseApi)->index('/api/sampahs');
        // dd($data);
        $sampahs = $data->json();
        return view('sampah.index')->with(['sampahs' => $sampahs['data']]);
    }

    public function create()
    {
        return view('sampah.create');
    }

    public function store(Request $request)
    {
        $kriteria = ($request->total_karung_sampah > 3) ? 'collapse' : 'standar';
        $upload = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' =>$request->no_rumah,
            'rt_rw'=>$request->rt_rw,
            'total_karung_sampah' =>$request->total_karung_sampah,
            'kriteria'=>$kriteria,
            'tanggal_pengangkutan' =>$request->tanggal_pengangkutan,
        ];

        $proses = (new BaseApi)->store('/api/sampahs/tambah-data',$upload);
            if($proses->failed()) {
                $errors=$proses->json('data');
                return redirect()->back()->with(['errors' => $errors]);
            }else {
                return redirect('/')->with('success','Berhasil Menambahkan Data Baru Ke Students API');
            }
        }

    public function show ($id)
    {
        $data = (new BaseApi)->detail('/api/sampahs/'. $id);
        $sampahs = $data->json();
        return view('sampah.show')->with('sampahs', $sampahs['data']);

    }

    public function edit ($id)
    {
        $data = (new BaseApi)->edit('/api/sampahs/'.$id);
        if($data->failed()){
            // dd($data);
        $errors = $data->json('data');
        return redirect()->back()->with(['errors' => $errors]);
        }else {
            $sampahs = $data->json('data');
            return view('sampah.edit')->with(['sampahs' => $sampahs]);
        }
    }

    public function update(Request $request, $id)
    {
        $payload = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' =>$request->no_rumah,
            'rt_rw'=>$request->rt_rw,
            'total_karung_sampah' =>$request->total_karung_sampah,
            'tanggal_pengangkutan' =>$request->tanggal_pengangkutan,
        ];

        $response = (new BaseApi)->update('/api/sampahs/update/'. $id, $payload);
        if ($response->failed()) {
            $errors = $response->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }
        return redirect('/');
    }

    public function destroy($id)
    {
        $proses = (new BaseApi)->delete('/api/sampahs/delete/'.$id);

        if($proses->failed()) {
            dd($proses);                                                                            
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
    }else {
        return redirect('/')->with('success','Berhasil Menghapus data siswa');
    }

}
public function trash()
    {
        $proses = (new BaseApi)->trash('/api/sampahs/show/trash');
        if ($proses->failed()) {
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            $sampahsTrash = $proses->json('data');
            return view('sampah.trash')->with(['sampahsTrash' => $sampahsTrash]);
        }
    }

    public function permanent($id)
    {
        $proses = (new BaseApi)->permanent('/api/sampahs/trash/delete/permanent/'.$id);
        if ($proses->failed()) {
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect()->back()->with('success', 'data berhasil di hapus secara permanent!');
        }
    }

    public function restore($id)
    {
        $proses = (new BaseApi)->restore('/api/sampahs/trash/restore/'.$id);
        if ($proses->failed()) {
            // dd($proses);
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect('/')->with('success', 'Berhasil mengembalikan data dari sampah!');
        }
    }
    
}


    
