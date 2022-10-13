@extends('admin.layouts.main')

@section('container')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <form action="{{ url('admin/soal/update/' . $data->id) }}" class="card-body" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Soal</label>
                    <input type="hidden" name="ujian_id" id="" value="{{ $data->ujian_id }}">
                    <textarea name="soal" id="" class="form-control" placeholder="Masukkan Soal" required>{{ $data->soal }}</textarea>
                </div>
                <div class="form-group mt-2">
                    <input type="radio" name="kunci" id="kuncia" value="a" {{ $data->kunci == 'a' ? 'checked' : ''}}>
                    <label for="kuncia">Pilihan A</label>
                    <input type="text" name="pilihana" id="" class="form-control" value="{{ $data->pilihana }}" required>
                </div>
                <div class="form-group mt-2">
                    <input type="radio" name="kunci" id="kuncib" value="b" {{ $data->kunci == 'b' ? 'checked' : ''}}>
                    <label for="kuncib">Pilihan B</label>
                    <input type="text" name="pilihanb" id="" class="form-control" value="{{ $data->pilihanb }}" required>
                </div>
                <div class="form-group mt-2">
                    <input type="radio" name="kunci" id="kuncic" value="c" {{ $data->kunci == 'c' ? 'checked' : ''}}>
                    <label for="kuncic">Pilihan C</label>
                    <input type="text" name="pilihanc" id="" class="form-control" value="{{ $data->pilihanc }}" required>
                </div>
                <div class="form-group mt-2">
                    <input type="radio" name="kunci" id="kuncid" value="d" {{ $data->kunci == 'd' ? 'checked' : ''}}>
                    <label for="kuncid">Pilihan D</label>
                    <input type="text" name="pilihand" id="" class="form-control" value="{{ $data->pilihand }}" required>
                </div>
                <div class="form-group mt-4 text-center">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection