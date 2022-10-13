@extends('admin.layouts.main')

@section('container')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <form action="{{ url('admin/soal/store') }}" class="card-body" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Soal</label>
                    <input type="hidden" name="ujian_id" id="" value="{{ $id }}">
                    <textarea name="soal" id="" class="form-control" placeholder="Masukkan Soal" required></textarea>
                </div>
                <div class="form-group mt-2">
                    <input type="radio" name="kunci" id="kuncia" value="a">
                    <label for="kuncia">Pilihan A</label>
                    <input type="text" name="pilihana" id="" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <input type="radio" name="kunci" id="kuncib" value="b">
                    <label for="kuncib">Pilihan B</label>
                    <input type="text" name="pilihanb" id="" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <input type="radio" name="kunci" id="kuncic" value="c">
                    <label for="kuncic">Pilihan C</label>
                    <input type="text" name="pilihanc" id="" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <input type="radio" name="kunci" id="kuncid" value="d">
                    <label for="kuncid">Pilihan D</label>
                    <input type="text" name="pilihand" id="" class="form-control" required>
                </div>
                <div class="form-group mt-4 text-center">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection