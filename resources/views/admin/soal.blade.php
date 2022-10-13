@extends('admin.layouts.main')

@section('container')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-sm btn-success">Show Materi</button>
                <a href="{{ url('admin/soal/' . $id . '/create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Soal</th>
                                <th>Pilihan A</th>
                                <th>Pilihan B</th>
                                <th>Pilihan C</th>
                                <th>Pilihan D</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $item->soal }}</td>
                                    <td>{!! ($item->kunci == 'a') ? '<span class="text-white p-1" style="background-color: #198754; border-radius: 1000px;">' . $item->pilihana . '<span data-feather="check"></span></span>' : $item->pilihana !!}</td>
                                    <td>{!! ($item->kunci == 'b') ? '<span class="text-white p-1" style="background-color: #198754; border-radius: 1000px;">' . $item->pilihanb . '<span data-feather="check"></span></span>' : $item->pilihanb !!}</td>
                                    <td>{!! ($item->kunci == 'c') ? '<span class="text-white p-1" style="background-color: #198754; border-radius: 1000px;">' . $item->pilihanc . '<span data-feather="check"></span></span>' : $item->pilihanc !!}</td>
                                    <td>{!! ($item->kunci == 'd') ? '<span class="text-white p-1" style="background-color: #198754; border-radius: 1000px;">' . $item->pilihand . '<span data-feather="check"></span></span>' : $item->pilihand !!}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at}}</td>
                                    <td>
                                        <a href="{{ url('admin/soal/'. $item->ujian_id .'/edit') . '/' . $item->id }}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{ url('admin/soal/'. $item->ujian_id .'/destroy') . '/' . $item->id }}" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-sm btn-danger">Delete</a>
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