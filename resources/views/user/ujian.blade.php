@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
</div>

<div class="container">
    <form class="row" action="{{ url('user/ujian/' . $mapel->slug . '/' . $ujian->id . '/save') }}" method="POST">
        @csrf
        <input type="number" class="d-none" name="soal" value="{{ $soal }}">
        @foreach ($data as $i => $item)
        <div class="col-12">
            <div><strong>{{ $i+1 }}.</strong> {{ $item->soal }}</div>
            <div class="row mt-2">
                <div class="col-12 col-md-6">
                    <input type="radio" name="radio[{{ $item->id }}]" id="a{{ $item->id }}" data-id="{{ $item->id }}" value="a">
                    <label for="a{{ $item->id }}"> A. {{ $item->pilihana }}</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="radio" name="radio[{{ $item->id }}]" id="b{{ $item->id }}" data-id="{{ $item->id }}" value="b">
                    <label for="b{{ $item->id }}"> B. {{ $item->pilihanb }}</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="radio" name="radio[{{ $item->id }}]" id="c{{ $item->id }}" data-id="{{ $item->id }}" value="c">
                    <label for="c{{ $item->id }}"> C. {{ $item->pilihanc }}</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="radio" name="radio[{{ $item->id }}]" id="d{{ $item->id }}" data-id="{{ $item->id }}" value="d">
                    <label for="d{{ $item->id }}"> D. {{ $item->pilihand }}</label>
                </div>
                <input type="hidden" name="jwb[{{ $item->id }}]" id="" value="">
            </div>
            <hr>
        </div>
        @endforeach
        <div class="text-center">
            <input type="submit" value="Selesai" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection

@section('footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $("input[type='radio']").change(function(e){
            e.preventDefault();
            const id = $(this).data("id");
            const value = $(this).val();
            $(`input[name='jwb[${id}]']`).val(value)
        })
    </script>
@endsection