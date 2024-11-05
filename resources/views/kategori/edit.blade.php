@extends('template.template')
@section('konten')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Edit Data Kategori</h5>
            <form action="{{url('kategori',$ControllerKategori->id) }}" method="POST">
                @csrf @method('PATCH')
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text" class="form-control" name="kategori" required value="{{ $ControllerKategori->nama_kategori }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
