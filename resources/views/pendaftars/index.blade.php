@extends('pendaftars.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PPDB SMK Merdeka Belajar</h2>
            </div>
            <div class="pull-right">
              <a href="{{ route('laporans.print') }}" class="btn btn-info mb-3 ml-2">Cetak</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>No. Reg</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Asal Sekolah</th>
            <th>Minat Jurusan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pendaftars as $pendaftar)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pendaftar->noreg }}</td>
            <td>{{ $pendaftar->nama }}</td>
            <td>{{ $pendaftar->jk }}</td>
            <td>{{ $pendaftar->alamat }}</td>
            <td>{{ $pendaftar->agama }}</td>
            <td>{{ $pendaftar->asal_sekolah }}</td>
            <td>{{ $pendaftar->minat_jurusan }}</td>
            <td>
                <form action="{{ route('pendaftars.destroy',$pendaftar->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pendaftars.show',$pendaftar->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pendaftars.edit',$pendaftar->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Apakah yakin data akan di hapus ?')"type="submit"class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pendaftars->links() !!}
      
@endsection