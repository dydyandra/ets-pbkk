@extends('layouts.template')

@section('container')
<article class="my-5">
    <h3>{{ $record->nama }}                   
    </h3>
    <h6>By: <a href="/pasien/{{ $record->pasien->nama }}">{{ $record->pasien->nama }}</a> in <a href="/dokter/{{ $record->dokter->slug }}">{{ $record->dokter->nama }}</a></h6>

    <p class="mt-4"> {!! $record->kondisi !!}
    </p>
</article>
@endsection
