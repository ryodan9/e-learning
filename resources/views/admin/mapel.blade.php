@extends('admin.layouts.main')

@section('container')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{ url('admin/mapel/store') }}" method="POST">
                    @csrf
                    <div class="form-group d-flex">
                        <input type="text" name="nama" id="" class="form-control" placeholder="Masukkan Mata Pelajaran"
                            required>
                        <input type="submit" value="Tambah Data" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <a href="{{ url('admin/mapel/destroy') . '/' . $item->id }}" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-sm btn-danger">Delete</a>
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