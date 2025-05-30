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
           <div class="form-col">
                <label>Trimester Ke-</label>
                <input type="text" name="trimester" class="form-control" required>
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
        <div class="form-row">
            <div class="form-col">
                <label>Jumlah GS/Kantung Kehamilan</label>
                <select name="jumlah_gs" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Teratur">Tunggal</option>
                    <option value="Tidak Teratur">Kembar</option>
                </select>
            </div>
            <div class="form-col">
                <label>Diameter GS/Kantung Kehamilan</label>
                <input type="number" name="diameter_gs" class="form-control">
            </div>
            <div class="form-col">
                <label>GS Sesuai Umur Kehamilan</label>
                <input type="date" name="umur_diameter_gs" class="form-control">
            </div>
            <div class="form-col">
                <label>Jumlah Bayi</label>
                <select name="jumlah_bayi" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Teratur">Tunggal</option>
                    <option value="Tidak Teratur">Kembar</option>
                </select>
            </div>
            <div class="form-col">
                <label>CRL/Jarak Puncak Kepala Bokong</label>
                <input type="number" name="crl" class="form-control">
            </div>
            <div class="form-col">
                <label>CRL Sesuai Umur Kehamilan</label>
                <input type="date" name="umur_crl" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label>Jumlah Bayi</label>
                <select name="jumlah_gs" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Teratur">Tunggal</option>
                    <option value="Tidak Teratur">Kembar</option>
                </select>
            </div>
            <div class="form-col">
                <label>Letak Produk Kehamilan</label>
                <select name="letak_produk_kehamilan" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Teratur">Intrauterin</option>
                    <option value="Tidak Teratur">Extrauterin</option>
                    <option value="Tidak Teratur">Tidak dapat ditentukan</option>
                </select>
            </div>
            <div class="form-col">
                <label>Pulsasi Jantung</label>
                <select name="pulsasi_jantung" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Teratur">Tampak</option>
                    <option value="Tidak Teratur">Tidak Tampak</option>
                </select>
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

        <h5>Pemeriksaan Laboratorium</h5>
        <div class="form-row">
            <div class="form-col">
                <label>Hemoglobin (g/dL)</label>
                <input type="number" step="0.01" name="hemoglobin" class="form-control">
            </div>
            <div class="form-col">
                <label>Golongan Darah</label>
                <input type="text" name="golongan_darah" class="form-control">
            </div>
            <div class="form-col">
                <label>Rhesus</label>
                <input type="text" name="rhesus" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label>Gula Darah Sewaktu (mg/dL)</label>
                <input type="number" step="0.01" name="gula_darah_sewaktu" class="form-control">
            </div>
            <div class="form-col">
                <label>Hasil HIV</label>
                <select name="hasil_h" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="ya">Reaktif</option>
                    <option value="tidak">Nonreaktif</option>
                </select>
            </div>
            <div class="form-col">
                <label>Hasil Sifilis</label>
                <select name="hasil_s" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="ya">Reaktif</option>
                    <option value="tidak">Nonreaktif</option>
                </select>
            </div>
        </div>
        <div>
            <label>Hasil Hepatitis B</label>
            <select name="hasil_hepatitis_b" class="form-control">
                <option value="">-- Pilih --</option>
                <option value="ya">Reaktif</option>
                <option value="tidak">Nonreaktif</option>
            </select>
        </div>

        <h5>Skrining Kesehatan Jiwa</h5>
        <div class="form-row">
            <div class="form-col">
                <label>Skrining Dilakukan?</label>
                <select name="skrining_kesehatan_jiwa" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>
            <div class="form-col">
                <label>Tindak Lanjut</label>
                <input type="text" name="tindak_lanjut_jiwa" class="form-control">
            </div>
        </div>
        <div>
            <label>Perlu Rujukan?</label>
            <select name="perlu_rujukan" class="form-control">
                <option value="">-- Pilih --</option>
                <option value="ya">Ya</option>
                <option value="tidak">Tidak</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label>Kesimpulan</label>
                <textarea name="kesimpulan" class="form-control"></textarea>
            </div>
            <div class="form-col">
                <label>Rekomendasi</label>
                <textarea name="rekomendasi" class="form-control"></textarea>
            </div>
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
