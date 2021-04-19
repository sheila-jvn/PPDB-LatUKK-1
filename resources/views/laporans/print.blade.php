<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }} ">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body onafterprint="redirect()">
    <br>
    @php if(isset($startDate) && isset($endDate)){ @endphp
    <h2 style="margin-left: 1%;">Laporan Kejadian: @php echo $startDate @endphp sampai @php echo $endDate @endphp</h2>
    @php }else{ @endphp
    <h2><center>Laporan</center></h2>
    @php } @endphp
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No. Registrasi</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Minat Jurusan</th>
                </tr>
            </thead>
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
            
            </tr>
            @endforeach
        </table>
    </div>
</body>

 <h6 align="right">
@php $tgl=date('d-m-Y'); @endphp
   Bogor,{{$tgl}} 
   </br>
Kepala SMK Merdeka Belajar
</h6>
</br>
</br>
</br>
</br>
</br>

<h6 align="right"> 
Ilyas ,S.Si.

</h6>
<script type="text/javascript">
    window.print();
</script>


<script type="text/javascript">
    function redirect() {
        window.location.href = '@php echo $redirect; @endphp';
    }
</script>
</html>