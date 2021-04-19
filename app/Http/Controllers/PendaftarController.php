<?php
  
namespace App\Http\Controllers;
  
use App\Pendaftar;
use Illuminate\Http\Request;
  
class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftars = Pendaftar::latest()->paginate(5);
  
        return view('pendaftars.index',compact('pendaftars'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaftars.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'noreg' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'asal_sekolah' => 'required',
            'minat_jurusan' => 'required',
        ]);
  
        Pendaftar::create($request->all());
   
        return redirect()->route('pendaftars.index')
                        ->with('success','Data Berhasil di Tambahkan');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftar $pendaftar)
    {
        return view('pendaftars.show',compact('pendaftar'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftar $pendaftar)
    {
        return view('pendaftars.edit',compact('pendaftar'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftar $pendaftar)
    {
        $request->validate([
            'noreg' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'asal_sekolah' => 'required',
            'minat_jurusan' => 'required',
        ]);
  
        $pendaftar->update($request->all());
  
        return redirect()->route('pendaftars.index')
                        ->with('success','Data Berhasil di Perbarui');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftar $pendaftar)
    {
        $pendaftar->delete();
  
        return redirect()->route('pendaftars.index')
                        ->with('success','Data Berhasil di Hapus');
    }
}