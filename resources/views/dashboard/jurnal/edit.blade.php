@extends('layouts.app')
@section('main')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2><a href="/dashboard/jurnal"><i class="ti ti-arrow-left"></i></a> Edit Jurnal</h2>
        </div>
    </div>
    <form action="/dashboard/jurnal/{{ $jurnal->id }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Data Guru</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="date" class="form-label">Tanggal Jurnal</label>
                                    <input type="date" class="form-control @error('date') is-invalid @enderror"
                                        id="date" name="date" value="{{ old('date', $jurnal->date) }}">
                                    @error('date')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="jadwal_id" class="form-label">Jadwal</label>
                                    <select class="form-select @error('jadwal_id') is-invalid @enderror"
                                        aria-label="Default select example" id="jadwal_id" name="jadwal_id">
                                        <option value="" selected>Set pelajaran</option>
                                        @forelse ($jadwals as $jadwal)
                                            <option value="{{ $jadwal->id }}"
                                                @if ($jurnal->jadwal_id === $jadwal->id) selected @endif>
                                                {{ $jadwal->day . ', ' . $jadwal->teacher->teacher_name . ' - ' . $jadwal->mapel->mapel_name }}
                                            </option>
                                        @empty
                                            <option value="">Belum diset</option>
                                        @endforelse
                                    </select>
                                    @error('jadwal_id')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="kehadiran_guru" class="form-label">Kehadiran Guru</label>

                                    <select class="form-select @error('kehadiran_guru') is-invalid @enderror"
                                    aria-label="Default select example" id="kehadiran_guru" name="kehadiran_guru">
                                    <option value="{{ old('kehadiran_guru', $jurnal->kehadiran_guru) }}" selected>{{ old('kehadiran_guru', $jurnal->kehadiran_guru) }}</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Izin">Izin</option>
                                    <option value="Sakit">Sakit</option>
                                    <option value="Dinas Luar">Dinas Luar</option>
                                    </select>

                                    @error('kehadiran_guru')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="material" class="form-label">Materi</label>
                                    <textarea type="text" name="material" id="material" cols="160" rows="5"
                                        class="form-control @error('material') is-invalid @enderror" value="">{{ old('material', $jurnal->material) }}</textarea>
                                    @error('material')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="task" class="form-label">Tugas</label>
                                    <textarea type="text" name="task" id="" cols="160" rows="5"
                                        class="form-control @error('task') is-invalid @enderror" value="">{{ old('task', $jurnal->task) }}</textarea>
                                    @error('task')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-4">
                                    <label for="sakit" class="form-label">Jumlah Sakit</label>
                                    <input type="number" name="sakit"
                                        class="form-control @error('sakit') is-invalid @enderror"
                                        value="{{ old('sakit', $jurnal->sakit) }}" id="sakit">
                                    @error('sakit')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-4">
                                    <label for="izin" class="form-label">Jumlah Izin</label>
                                    <input type="number" name="izin"
                                        class="form-control @error('izin') is-invalid @enderror"
                                        value="{{ old('izin', $jurnal->izin) }}" id="izin">
                                    @error('izin')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-4">
                                    <label for="alpha" class="form-label">Jumlah Alpha</label>
                                    <input type="number" name="alpha"
                                        class="form-control @error('alpha') is-invalid @enderror"
                                        value="{{ old('alpha', $jurnal->alpha) }}" id="alpha">
                                    @error('alpha')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-4">
                                    <label for="hadir" class="form-label">Jumlah Hadir</label>
                                    <input type="number" name="hadir"
                                        class="form-control @error('hadir') is-invalid @enderror"
                                        value="{{ old('hadir', $jurnal->hadir) }}" id="hadir">
                                    @error('hadir')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label for="detail" class="form-label">Keterangan</label>
                                    <textarea type="text" name="detail" id="detail" cols="160" rows="5"
                                        class="form-control @error('detail') is-invalid @enderror" value="">{{ old('detail', $jurnal->detail) }}</textarea>
                                    @error('detail')
                                        <p class="invalid" style="color: red">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- hidden --}}
        <input type="hidden" name="rombel_id" value="{{ auth()->user()->rombel_id }}">
        <div class="row">
            <div class="col-lg-3">
                <button type="submit" class="btn btn-warning" style="margin-right: 15px">Ubah Jurnal <i
                        class="ti ti-pencil"></i></button>
                <a href="/dashboard/jurnal" class="btn btn-outline-warning">Batal</a>
            </div>
        </div>
    </form>
    {{-- @dd(url()->full()) --}}
@endsection
