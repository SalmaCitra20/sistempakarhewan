@extends('layouts/master')

@section('layoutContent')
<div class="row">
    <a name="" class="btn btn-primary" href="{{route('diagnosa.create')}}" role="button">+ Tambah Penyakit</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Penyakit</th>
                <th scope="col">Detail Penyakit</th>
                <th scope="col">Saran</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($diagnosa as $b)
            <tr>
                <th scope="row">{{$b->id}}</th>
                <td>{{$b->nama}}</td>
                <td>{{$b->detail}}</td>
                <td>{{$b->saran}}</td>
                <td>
                    <a name="" class="btn btn-warning btn-line btn-rect" href="{{route('diagnosa.edit', $b->id)}}"
                        role="button">
                        <i class="ti-pencil-alt"></i> EDIT</a>
                    <a class="btn btn-danger btn-line btn-rect" href="{{ route('diagnosa.index') }}" onclick="event.preventDefault();
                    document.getElementById('delete-form-{{$b->id}}').submit();"> <i class="ti-trash"></i> HAPUS</a>
                </td>
                <form id="delete-form-{{$b->id}}" + action="{{route('diagnosa.destroy', $b->id)}}" method="post">
                    @csrf @method('DELETE')
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection