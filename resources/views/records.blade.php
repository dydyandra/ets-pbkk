@extends('layouts.template')

@section('container')
    <h1>{{  $title  }}</h1>
    <hr/>
    @foreach($records as $record)
    <div class="card my-3">
        <article class="mb-2 mx-2 card-body">
            <h3 class="card-title">
                <a href="/record/{{ $record->slug }}">
                {{ $record->nama }}
                </a>                    
            </h3>
            <h6>Pasien: <a href="/pasien/{{ $record->pasien->slug }}">{{ $record->pasien->nama }}</a><br> Dokter: <a href="/dokter/{{ $record->dokter->slug }}">{{ $record->dokter->nama }}</a></h6>
            
            <a href="/record/{{ $record->slug }}">
                Read more...
                </a>     
            </article>
    </div>

    @endforeach
@endsection


