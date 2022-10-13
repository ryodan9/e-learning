@extends('admin.layouts.main')

@section('container')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ url('admin/ujian/create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Ujian</th>
                                <th>Mata Pelajaran</th>
                                <th>Kelas</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $item->nama_ujian }}</td>
                                    <td>{{ $item->mapel->nama }}</td>
                                    <td>{{ $item->kelas->nama }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at}}</td>
                                    <td>
                                        <a href="{{ url('admin/soal') . '/' . $item->id }}" class="btn btn-sm btn-success">Soal</a>
                                        <a href="{{ url('admin/ujian/edit') . '/' . $item->id }}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{ url('admin/ujian/destroy') . '/' . $item->id }}" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection