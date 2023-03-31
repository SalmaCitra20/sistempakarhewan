@extends('layouts/master')

@section('layoutContent')
<div class="row">
    <form style="width:512px" action="{{route('diagnosa.store')}}" method="post">
        <button type="submit" class="btn btn-inverse btn-round"> <i class="ti-close"></i> CANCEL</button>
        @csrf
        <div class="form-group">
            <label>Nama Penyakit</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama penyakit" />
        </div>
        <div class="form-group">
            <label>Detail Penyakit</label>
            <textarea type="text" name="detail" class="form-control" placeholder="Detail penyakit"></textarea>
        </div>
        <div class="form-group">
            <label>Saran Penyakit</label>
            <textarea type="text" name="saran" class="form-control" placeholder="Saran penyakit"></textarea>
        </div>
        
      
        <button type="submit" class="btn btn-primary btn-round"><i class="ti-plus"></i> TAMBAH</button>
    </form>
</div>
@endsection