@extends('template.template')
@section('konten')
    <style>
        /* Gaya untuk tabel */
        .table {
            border-collapse: collapse;
            /* Menggabungkan border */
            width: 100%;
            /* Lebar tabel 100% */
            border: 1px solid #dee2e6;
            /* Garis di sekitar tabel */
        }

        .table th,
        .table td {
            border: 1px solid #dee2e6;
            /* Warna border untuk sel */
            padding: 10px;
            /* Jarak dalam sel */
            text-align: center;
            /* Teks di tengah */
        }

        .table th {
            background-color: #f8f9fa;
            /* Warna latar belakang untuk header */
        }
    </style>
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Data Barang</h5>
                    <a href="{{ url('/barang-tambah') }}" class="btn btn-primary mb-3"
                        style="margin-top: -10px; display: inline-flex; align-items: center;">
                        <i class="ti ti-plus" style="font-size: 1.3rem; margin-right: 8px; height: 1.5rem; width: 1rem;"></i>
                        <span class="fw-semibold">Tambah</span>
                    </a>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nama Barang</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Kategori</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Merk</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Jumlah</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Asal Barang</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Tanggal</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $item)
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-normal mb-0">{{ $loop->iteration }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="mb-1 fw-normal">{{ $item->nama_barang }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="mb-0 fw-normal">{{ $item->kategori->nama_kategori }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="mb-0 fw-normal">{{ $item->merk->nama_merk }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-normal mb-0">{{ $item->jumlah }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-normal mb-0">{{ $item->asal_barang }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-normal mb-0">{{ $item->tanggal }}</h6>                                    
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <div>
                                            <a href="{{ url('barang-edit', $item->id) }}" class="text-primary me-2" title="Edit">
                                                <i class="ti ti-edit" style="font-size: 1.5rem;"></i>
                                            </a>
                                            <form action="{{ url('barang-hapus', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="text-danger" title="Delete" style="border: none; background: none; padding: 0;">
                                                    <i class="ti ti-trash" style="font-size: 1.5rem;"></i>
                                                </button>
                                            </form>
                                        </div>
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
