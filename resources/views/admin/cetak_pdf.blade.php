  {{-- Tabel Cetak PDF --}}
    <h3 align="center"><b>Laporan Data Santri </br> <b>Pondok Pesantren Al Muntadhor Kabupaten Cirebon</b></h3>
    <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th>No.</th>
            <th>NIS</th>
            <th>Nama Santri</th>
            <th>Tanggal Lahir</th>
            <th>Angkatan</th>
            <th>Alamat Lengkap</th>
        </tr>
        {{--  Perulangan  --}}
        @foreach ($datas as $data)
        {{--  Pengambilan data dari database  --}}
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $data->nis }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->tgl_lahir }}</td>
            <td>{{ $data->angkatan }}</td>
            <td>{{ $data->alamat }}</td>
        </tr>
        @endforeach
    </table>