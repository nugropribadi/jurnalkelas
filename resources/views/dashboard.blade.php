@extends('layouts.add')
@section('main')
    <h1>Jurnal Harian</h1>

    <!--  Row 1 -->
    <div class="row">
        {{-- <h1>{{ auth()->user()->rombel_id }}</h1> --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! session('success') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('successEdit'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {!! session('successEdit') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('successDelete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {!! session('successDelete') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-200">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Jurnal Harian</h5>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle table-hover display" id="myTable">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0 align-middle" rowspan="2">
                                            <h6 class="fw-semibold mb-0">Tanggal</h6>
                                        </th>
                                        <th class="border-bottom-0 align-middle" rowspan="2">
                                            <h6 class="fw-semibold mb-0">Kelas</h6>
                                        </th>
                                        <th class="border-bottom-0 align-middle" rowspan="2">
                                            <h6 class="fw-semibold mb-0">Nama Guru</h6>
                                        </th>
                                        <th class="border-bottom-0 align-middle" rowspan="2">
                                            <h6 class="fw-semibold mb-0">Mapel</h6>
                                        </th>
                                        <th class="border-bottom-0 align-middle" rowspan="2">
                                            <h6 class="fw-semibold mb-0">Kehadiran Guru</h6>
                                        </th>
                                        <th class="border-bottom-0 align-middle" rowspan="2">
                                            <h6 class="fw-semibold mb-0">Mulai Jam Ke</h6>
                                        </th>
                                        <th class="border-bottom-0 align-middle" rowspan="2">
                                            <h6 class="fw-semibold mb-0">Selesai Jam Ke</h6>
                                        </th>
                                        <th class="border-bottom-0 align-middle" rowspan="2">
                                            <h6 class="fw-semibold mb-0">Materi</h6>
                                        </th>
                                        <th class="border-bottom-0 align-middle" rowspan="2">
                                            <h6 class="fw-semibold mb-0">Tugas</h6>
                                        </th>
                                        <th class="border-bottom-0 align-middle" colspan="3">
                                            <h6 class="fw-semibold mb-0">Kehadiran Siswa</h6>
                                        <th class="border-bottom-0 align-middle" rowspan="2">
                                            <h6 class="fw-semibold mb-0">Keterangan</h6>
                                        </th>
                                    </tr>
                                    <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">S</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">I</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">A</h6>
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $jurnal)
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $jurnal->date }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $jurnal->name }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $jurnal->teacher_name }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $jurnal->mapel_name }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                
                                            <span 
                                            @if ($jurnal->kehadiran_guru === 'Hadir') class="badge bg-success rounded-3 fw-semibold" @else class="badge bg-danger rounded-3 fw-semibold" @endif>
                                                {{ $jurnal->kehadiran_guru }}
                                            </span>
                                            
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1 text-center">{{ $jurnal->start }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1 text-center">{{ $jurnal->finish }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $jurnal->material }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $jurnal->task }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <span class="badge bg-warning rounded-3 fw-semibold">
                                                    @if ($jurnal->sakit > 0)
                                                        {{ $jurnal->sakit }}
                                                    @else
                                                        0
                                                    @endif
                                                </span>
                                            </td>
                                            <td class="border-bottom-0">
                                                <span class="badge bg-warning rounded-3 fw-semibold">
                                                    @if ($jurnal->izin > 0)
                                                        {{ $jurnal->izin }}
                                                    @else
                                                        0
                                                    @endif
                                                </span>
                                            </td>
                                            <td class="border-bottom-0">
                                                <span class="badge bg-danger rounded-3 fw-semibold">
                                                    @if ($jurnal->alpha > 0)
                                                        {{ $jurnal->alpha }}
                                                    @else
                                                        0
                                                    @endif
                                                </span>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $jurnal->detail }}</h6>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="11" class="text-center">
                                                Belum ada jurnal
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            Created By Najwa Latifah - XII RPL
        </div>
    </div>
@endsection