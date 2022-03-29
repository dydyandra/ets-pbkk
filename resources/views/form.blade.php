@extends('layouts.template')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card mt-4">
            <div class="card-body">
                <h3 class="text-center">Form Rekam Medis</h3>
                <h5 class="text-center">Dyandra Paramitha</h5>
                <h5 class="text-center">05111940000119</h5>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <br />
                <!-- form validasi -->
                <form action="/proses" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="pasien">Nama Pasien</label><br>
                        <select name="pasien" id="pasien" class="form-control" value="{{ old('pasien') }}">
                            <option value="">Select Pasien</option>
                            @foreach ($pasien as $id => $nama)
                                <option value="{{ $id }}">{{ $nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dokter">Nama Dokter</label><br>
                        <select name="dokter" id="dokter" class="form-control" value="{{ old('dokter') }}">
                            <option value="">Select Dokter</option>
                            @foreach ($dokter as $id => $nama)
                                <option value="{{ $id }}">{{ $nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="dokter">Nama Dokter</label>
                        <input class="form-control" type="text" name="dokter" value="{{ old('dokter') }}">
                    </div> --}}
                    <div class="form-group">
                        <label for="kondisi">Kondisi Kesehatan</label>
                        <input class="form-control" type="text" name="kondisi" value="{{ old('kondisi') }}">
                    </div>
                    <div class="form-group">
                        <label for="suhu">Suhu Tubuh (C)</label>
                        <input class="form-control" type="text" name="suhu" value="{{ old('suhu') }}">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Resep Dokter</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Submit"
                            style="background-color:blue; width:100%">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

