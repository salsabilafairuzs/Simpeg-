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
                    <h5 class="card-title fw-semibold mb-4">Data Kategori</h5>
                    <a href="/kategori/create" class="btn btn-primary mb-3"
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
                                        <h6 class="fw-semibold mb-0">Kategori</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $item)
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="mb-1">{{ $item->nama_kategori }}</h6>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <div>
                                            <a href="{{ route('kategori.edit', $item->id) }}" class="text-primary me-2" title="Edit">
                                                <i class="ti ti-edit" style="font-size: 1.5rem;"></i>
                                            </a>
                                            <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');">
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
                    {{-- <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
