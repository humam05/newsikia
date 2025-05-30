@extends('admin.layouts.base')

@section('content')
    <style>
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .form-col {
            flex: 1;
        }

        .hidden {
            display: none;
        }
    </style>

    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Form Pemeriksaan Trimester I Ibu {{ $identitas->ibu_nama }}</h4>
            </div>
        </div>
    </div>

    <form action="{{ url('admin/ibu_hamil/periksa_trimester/store') }}" method="POST">
        @csrf

        {{-- Identitas --}}
        <input type="hidden" name="identitas_id" value="{{ $identitas->id }}">
        <div class="form-row">
            <div class="form-col">
                <label>Nama Ibu</label>
                <input type="text" name="ibu_nama" class="form-control" value="{{ $identitas->ibu_nama }}" readonly>
            </div>
            <div class="form-col">
                <label>NIK</label>
                <input type="text" name="ibu_nik" class="form-control" value="{{ $identitas->ibu_nik }}" readonly>
            </div>
        </div>
        <div class="form-row">
            {{-- Tanggal Periksa --}}
            <div class="form-col">
                <label>Nama Dokter</label>
                <input type="teks" name="nama_dokter" class="form-control" required>
            </div>
            {{-- Tanggal Periksa --}}
            <div class="form-col">
                <label>Tanggal Periksa</label>
                <input type="date" name="tanggal_periksa" class="form-control" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label>Konjungtiva</label>
                <select name="konjungtiva" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal">Normal</option>
                    <option value="Tidak normal">Tidak normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>Sklera</label>
                <select name="sklera" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal">Normal</option>
                    <option value="Tidak normal">Tidak normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>Kulit</label>
                <select name="kulit" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal">Normal</option>
                    <option value="Tidak normal">Tidak normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>Leher</label>
                <select name="leher" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal">Normal</option>
                    <option value="Tidak normal">Tidak normal</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label>Gigi Mulut</label>
                <select name="gigi_mulut" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal">Normal</option>
                    <option value="Tidak normal">Tidak normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>THT</label>
                <select name="tht" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal">Normal</option>
                    <option value="Tidak normal">Tidak normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>Jantung</label>
                <select name="dada" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal">Normal</option>
                    <option value="Tidak normal">Tidak normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>Paru</label>
                <select name="paru" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal">Normal</option>
                    <option value="Tidak normal">Tidak normal</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label>Perut</label>
                <select name="perut" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal">Normal</option>
                    <option value="Tidak normal">Tidak normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>Tungkai</label>
                <select name="tungkai" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal">Normal</option>
                    <option value="Tidak normal">Tidak normal</option>
                </select>
            </div>
             <div class="form-col">
                <label>HPHT</label>
                <input type="date" name="hpht" class="form-control">
            </div>

            {{-- Keterangan Haid --}}
            <div class="form-col">
                <label>Keterangan Haid</label>
                <select name="keterangan_haid" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Teratur">Teratur</option>
                    <option value="Tidak Teratur">Tidak Teratur</option>
                </select>
            </div>
        </div><br>
        <div class="form-row">
            <div class="form-col">
                <label>Umur Kehamilan Berdasarkan HPHT Pada Siklus Haid Teratur (Minggu)</label>
                <input type="number" name="umur_kehamilan_hpht" class="form-control">
            </div>
            <div class="form-col">
                <label>HPL Berdasarkan HPHT Pada Siklus Haid Teratur</label>
                <input type="date" name="hpl_hpht" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label>Umur Kehamilan Berdasarkan USG (Minggu)</label>
                <input type="number" name="umur_kehamilan_usg" class="form-control">
            </div>
            <div class="form-col">
                <label>HPL Berdasarkan USG</label>
                <input type="date" name="hpl_usg" class="form-control">
            </div>
        </div>

        {{-- Temuan Abnormal --}}
        <div class="form-group">
            <label>Temuan Abnormal</label>
            <select name="temuan_abnormal" id="temuan_abnormal" class="form-control" onchange="toggleTemuanAbnormal()">
                <option value="">-- Pilih --</option>
                <option value="ya">Ya</option>
                <option value="tidak">Tidak</option>
            </select>
        </div>

        <div class="form-group hidden" id="temuan_abnormal_sebutkan_group">
            <label>Sebutkan Temuan Abnormal</label>
            <input type="text" name="temuan_abnormal_sebutkan" class="form-control">
        </div>

        {{-- Pemeriksaan Lab (contoh 1 field) --}}
        <div class="form-group">
            <label>Hemoglobin</label>
            <input type="text" name="hemoglobin" class="form-control">
        </div>

        {{-- Kesimpulan & Rekomendasi --}}
        <div class="form-group">
            <label>Kesimpulan</label>
            <textarea name="kesimpulan" class="form-control" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label>Rekomendasi</label>
            <textarea name="rekomendasi" class="form-control" rows="2"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Pemeriksaan</button>
    </form>

    <script>
        function toggleTemuanAbnormal() {
            const select = document.getElementById('temuan_abnormal');
            const field = document.getElementById('temuan_abnormal_sebutkan_group');
            if (select.value === 'ya') {
                field.classList.remove('hidden');
            } else {
                field.classList.add('hidden');
            }
        }
    </script>
@endsection
