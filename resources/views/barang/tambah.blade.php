@extends('template.template')
@section('konten')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambah Data Kategori</h5>
            <form action="{{ url('barang-tambah') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="barang" required >
                </div>
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
                    <select name="merk" class="form-control">
                        @foreach ($merk as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_merk}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Asal Barang</label>
                    <input type="text" class="form-control" name="asal_barang" required >
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" required >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
