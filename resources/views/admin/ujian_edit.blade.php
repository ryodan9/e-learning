@extends('admin.layouts.main')

@section('container')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <form class="card-body" action="{{ url('admin/ujian/update') . '/' . $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama Ujian</label>
                    <input type="text" name="nama_ujian" id="" class="form-control" placeholder="Masukkan Nama Ujian" value="{{ $data->nama_ujian }}" required>
                </div>
                <div class="form-group mt-2">
                    <label for="">Materi (<a href="{{ asset(str_replace('public', 'storage', $data->materi)) }}">{{ $data->materi }}</a>)</label>
                    <input type="file" name="materi" id="" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="">Mata Pelajaran</label>
                    <select name="mapel_id" id="" class="form-control">
                        @foreach ($mapel as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $data->mapel_id ? 'selected' : '' }}>{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="">Kelas</label>
                    <select name="kelas_id" id="" class="form-control">
                        @foreach ($kelas as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $data->kelas_id ? 'selected' : '' }}>{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-4 text-center">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection