@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ $title }}</div>
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
               <img src='{{ asset("images/$biodata->url_foto") }}' class='img-thumbnail' alt='User Image'>
                    <table class="table table-sm">
                      <tbody>
                        <tr>
                          <td class="table-info" width="200px">Nama Pendaftar</td>
                          <td>{{ $biodata->nama }}</td>
                        </tr>
                        <tr>
                          <td class="table-info">Nama Masjid</td>
                          <td>{{ $biodata->nis }}</td>
                        </tr>
                        <tr>
                          <td class="table-info">TTL</td>
                          <td>{{ $biodata->tempat_lahir }}, {{ $biodata->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                          <td class="table-info">ID Masjid</td>
                          <td>{{ $biodata->nem }}</td>
                        </tr>
                        <tr>
                          <td class="table-info">Luas Bangunan</td>
                          <td>{{ $biodata->no_ijazah }}</td>
                        </tr>
                        <tr>
                          <td class="table-info">Alamat Lengkap Masjid</td>
                          <td>{{ $biodata->alamat }}</td>
                        </tr>                
                      </tbody>
                    </table>
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection