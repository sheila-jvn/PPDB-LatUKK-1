@extends('pendaftars.layout')
 
@section('content')
    <div class="row" class="form-control">
        <div class="col-lg-12 margin-tb">
      
            <div class="pull-left">
            <br>
                <h2>Laporan Data Pendaftar</h2>
                <br>
                <div class="col-lg-12 margin-tb">
                        <a href="{{ route('laporans.print') }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                       
                    </div>
            </div>
        </div>
    </div>
  </form>

</form> 
    <table class="table table-bordered">
    <br>
        <tr>


            <th>No. Registrasi</th>

            <th>Nama</th>

            <th>Jenis Kelamin</th>

            <th>Alamat</th>

            <th>Agama</th>

            <th>Asal Sekolah</th>

            <th>Minat Jurusan</th>
           
        </tr>
         @foreach ($pendaftars as $pendaftar)
        <tr>
  

            <td>{{ $pendaftar->noreg }}</td>

            <td>{{ $pendaftar->nama }}</td>

            <td>{{ $pendaftar->jk }}</td>

            <td>{{ $pendaftar->alamat }}</td>

            <td>{{ $pendaftar->agama }}</td>

            <td>{{ $pendaftar->asal_sekolah }}</td>

            <td>{{ $pendaftar->minat_jurusan }}</td>

            
        </tr>
        @endforeach
   		 </table>
     	
     @endsection