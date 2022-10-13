@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            @if (session()->has('msg_nilai'))
            <div class="alert alert-success" role="alert">
                <h6>Hasil Anda</h6>
                @php
                    $msg_nilai = json_decode(session()->get('msg_nilai'));
                @endphp
                <ul>
                    <li>Benar : {{ $msg_nilai->jml_benar }}</li>
                    <li>Salah : {{ $msg_nilai->jml_salah }}</li>
                    <li>Kosong : {{ $msg_nilai->jml_kosong }}</li>
                    <li>Total Soal : {{ $msg_nilai->jml_soal }}</li>
                    <li>Nilai : <strong>{{ $msg_nilai->nilai }}</strong></li>
                </ul>
              </div>
            @endif
            <ul class="list-group">
                @foreach ($data as $item)
                <li class="list-group-item d-flex flex-column">
                    <h6>{{ $item->nama_ujian }} - Kelas {{ $item->kelas->nama }}</h6>
                    <div>
                        <span data-feather="file"></span>
                        <a href="{{ asset('storage/' . str_replace('public/', '', $item->materi)) }}"
                            style="text-decoration: none;">Materi Ujian</a>
                    </div>
                    <div>
                        <span data-feather="file"></span>
                        <a href="{{ url('user/ujian/' . $mapel->slug . '/' . $item->id) }}"
                            style="text-decoration: none;">Mulai Ujian</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection