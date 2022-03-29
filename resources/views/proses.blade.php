@extends('layouts.template')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6">
        {{-- untuk flash message sukses  --}}
        <div class="alert alert-success">
            <button type="button" class="close close-alert" data-dismiss="alert">x</button>
            {{ session()->get('success') }}
        </div>
        <div class="card mt-5">
            <div class="card-body">
                <h3>Isian Form</h3>
                <h3 class="my-4">Data Yang Di Input: </h3>

                <table class="table table-bordered table-striped">
                    {{-- menampilkan isian form --}}
                    <tr>
                        <td style="width:150px"><strong>Nama pasien</td>
                        <td>{{ $data->pasien }}</td>
                    </tr>
                    <tr>
                        <td><strong>Nama Dokter</td>
                        <td>{{ $data->dokter}}</td>
                    </tr>
                    <tr>
                        <td><strong>Kondisi</td>
                        <td>{{ $data->kondisi }}</td>
                    </tr>
                    <tr>
                        <td><strong>Suhu</td>
                        <td>{{ $data->suhu }}</td>
                    </tr>
                    <tr>
                        <td><strong>Gambar Resep</td>
                        <td>
                            {{-- untuk menampilkan gambar pada halaman --}}
                            <img src="{{ asset('images/' . $data->gambar) }}" class="img-thumbnail"
                                alt="gambar resep">

                                {{-- <img src="{{ asset('images/'.$data->gambar) }}" alt="tes" title="" /> --}}
                        </td>
                    </tr>
                </table>

                <a href="/input" class="btn btn-primary" style="background-color:blue; width:100%">Kembali ke Form</a>

            </div>
        </div>
    </div>
</div>
@endsection

