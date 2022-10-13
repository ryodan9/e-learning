{{-- @extends('layouts.main')

@section('container')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Soal</th>
                                <th>Jawab Pilihan</th>
                                <th>Kunci Jawaban</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                            <tr
                                style="background-color: {{ $item->pilihan == $item->soal->kunci ? '#BFFFDF' : '#FFBFC0'}};">
                                <td>{{ $i+1 }}</td>
                                <td>{{ $item->soal->soal }}</td>
                                <td>{{ strtoupper($item->pilihan) }}</td>
                                <td>{{ strtoupper($item->soal->kunci) }}</td>
                                <td style="font-weight: bold;">{{ $item->pilihan == $item->soal->kunci ? 'Benar' :
                                    'Salah'}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.main')

@section('container')
<div class="row mt-4">
    @foreach ($data as $i => $item)
    <div class="col-12 p-3" style="background-color: {{ $item->pilihan == $item->soal->kunci ? '#BFFFDF' : '#FFBFC0'}}; border-radius: 8px; margin: 5px auto;">
        <div><strong>{{ $i+1 }}.</strong> {{ $item->soal->soal }}</div>
        <div class="row mt-2">
            <div class="col-12 col-md-6">
                <input type="radio" readonly {{ $item->pilihan == 'a' ? 'checked' : '' }}>
                <label> A. {{ $item->soal->pilihana }} {!! $item->pilihan == 'a' ? ($item->pilihan == $item->soal->kunci ? '<span data-feather="check"></span>' : '<span data-feather="x"></span>') : '' !!}</label>
            </div>
            <div class="col-12 col-md-6">
                <input type="radio" readonly {{ $item->pilihan == 'b' ? 'checked' : '' }}>
                <label> B. {{ $item->soal->pilihanb }} {!! $item->pilihan == 'b' ? ($item->pilihan == $item->soal->kunci ? '<span data-feather="check"></span>' : '<span data-feather="x"></span>') : '' !!}</label>
            </div>
            <div class="col-12 col-md-6">
                <input type="radio" readonly {{ $item->pilihan == 'c' ? 'checked' : '' }}>
                <label> C. {{ $item->soal->pilihanc }} {!! $item->pilihan == 'c' ? ($item->pilihan == $item->soal->kunci ? '<span data-feather="check"></span>' : '<span data-feather="x"></span>') : '' !!}</label>
            </div>
            <div class="col-12 col-md-6">
                <input type="radio" readonly {{ $item->pilihan == 'd' ? 'checked' : '' }}>
                <label> D. {{ $item->soal->pilihand }} {!! $item->pilihan == 'd' ? ($item->pilihan == $item->soal->kunci ? '<span data-feather="check"></span>' : '<span data-feather="x"></span>') : '' !!}</label>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection