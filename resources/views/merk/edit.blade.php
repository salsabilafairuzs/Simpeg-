@extends('template.template')
@section('konten')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Edit Data Merk</h5>
            <form action="{{ url('merk', $merk->id) }}" method="POST">
                @csrf @method('PATCH')
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
                    <input type="text" class="form-control" name="merk" required value="{{ $merk->nama_merk }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
