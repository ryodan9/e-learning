@extends('layouts.main')

@section('container')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Ujian</th>
                                <th>Jumlah Benar</th>
                                <th>Jumlah Salah</th>
                                <th>Jumlah Kosong</th>
                                <th>Jumlah Soal</th>
                                <th>Nilai</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $item->ujian->nama_ujian }}</td>
                                <td>{{ $item->jml_benar }}</td>
                                <td>{{ $item->jml_salah }}</td>
                                <td>{{ $item->jml_soal - ($item->jml_benar+$item->jml_salah) }}</td>
                                <td>{{ $item->jml_soal }}</td>
                                <td><span class="btn-primary" style="padding: 0px 5px; border-radius: 100px;">{{ $item->nilai }}</span></td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <a href="{{ url('user/jawaban/' . $item->group_user_jwb) }}" class="btn btn-sm btn-success">Detail Jawaban</a>
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