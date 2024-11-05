@extends('template.template')
@section('konten')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambah Data Merk</h5>
            <form action="{{ url('merk') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="kategori" class="form-control">
                        @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Merk</label>
                    <input type="text" class="form-control" name="merk" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
