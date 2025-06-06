@extends('nakes.layouts.base')

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
    </style>

    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Edit Pemeriksaan Trimester I</h4>
            </div>
        </div>
    </div>

    <form action="{{ url('nakes/ibu_hamil/periksa_trimester/update', $periksaTrimester->id) }}" method="POST">
        @csrf

        <input type="hidden" name="identitas_id" value="{{ $periksaTrimester->identitas_id }}">

        <div class="form-row">
            <div class="form-col">
                <label>Nama Ibu</label>
                <input type="text" class="form-control" value="{{ $periksaTrimester->identitas->ibu_nama }}" readonly>
            </div>
            <div class="form-col">
                <label>NIK</label>
                <input type="text" class="form-control" value="{{ $periksaTrimester->identitas->ibu_nik }}" readonly>
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Tanggal Periksa</label>
                <input type="date" name="tanggal_periksa" class="form-control"
                    value="{{ $periksaTrimester->tanggal_periksa }}">
            </div>
            <div class="form-col">
                <label>Trimester Ke-</label>
                <select name="trimester" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option value="1" {{ old('trimester', $periksaTrimester->trimester) == '1' ? 'selected' : '' }}>1
                    </option>
                    <option value="2" {{ old('trimester', $periksaTrimester->trimester) == '2' ? 'selected' : '' }}>2
                    </option>
                    <option value="3" {{ old('trimester', $periksaTrimester->trimester) == '3' ? 'selected' : '' }}>3
                    </option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Konjungtiva</label>
                <select name="konjungtiva" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal" {{ $periksaTrimester->konjungtiva == 'Normal' ? 'selected' : '' }}>Normal
                    </option>
                    <option value="Tidak normal" {{ $periksaTrimester->konjungtiva == 'Tidak normal' ? 'selected' : '' }}>
                        Tidak normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>Sklera</label>
                <select name="sklera" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal" {{ $periksaTrimester->sklera == 'Normal' ? 'selected' : '' }}>Normal</option>
                    <option value="Tidak normal" {{ $periksaTrimester->sklera == 'Tidak normal' ? 'selected' : '' }}>Tidak
                        normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>Kulit</label>
                <select name="kulit" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal" {{ $periksaTrimester->kulit == 'Normal' ? 'selected' : '' }}>Normal</option>
                    <option value="Tidak normal" {{ $periksaTrimester->kulit == 'Tidak normal' ? 'selected' : '' }}>Tidak
                        normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>Leher</label>
                <select name="leher" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal" {{ $periksaTrimester->leher == 'Normal' ? 'selected' : '' }}>Normal</option>
                    <option value="Tidak normal" {{ $periksaTrimester->leher == 'Tidak normal' ? 'selected' : '' }}>Tidak
                        normal</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Gigi Mulut</label>
                <select name="gigi_mulut" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal" {{ $periksaTrimester->gigi_mulut == 'Normal' ? 'selected' : '' }}>Normal
                    </option>
                    <option value="Tidak normal" {{ $periksaTrimester->gigi_mulut == 'Tidak normal' ? 'selected' : '' }}>
                        Tidak normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>THT</label>
                <select name="tht" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal" {{ $periksaTrimester->tht == 'Normal' ? 'selected' : '' }}>Normal</option>
                    <option value="Tidak normal" {{ $periksaTrimester->tht == 'Tidak normal' ? 'selected' : '' }}>Tidak
                        normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>Jantung</label>
                <select name="dada" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal" {{ $periksaTrimester->dada == 'Normal' ? 'selected' : '' }}>Normal</option>
                    <option value="Tidak normal" {{ $periksaTrimester->dada == 'Tidak normal' ? 'selected' : '' }}>Tidak
                        normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>Paru</label>
                <select name="paru" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal" {{ $periksaTrimester->paru == 'Normal' ? 'selected' : '' }}>Normal</option>
                    <option value="Tidak normal" {{ $periksaTrimester->paru == 'Tidak normal' ? 'selected' : '' }}>Tidak
                        normal</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Perut</label>
                <select name="perut" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal" {{ $periksaTrimester->perut == 'Normal' ? 'selected' : '' }}>Normal</option>
                    <option value="Tidak normal" {{ $periksaTrimester->perut == 'Tidak normal' ? 'selected' : '' }}>Tidak
                        normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>Tungkai</label>
                <select name="tungkai" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Normal" {{ $periksaTrimester->tungkai == 'Normal' ? 'selected' : '' }}>Normal</option>
                    <option value="Tidak normal" {{ $periksaTrimester->tungkai == 'Tidak normal' ? 'selected' : '' }}>Tidak
                        normal</option>
                </select>
            </div>
            <div class="form-col">
                <label>HPHT</label>
                <input type="date" name="hpht" class="form-control" value="{{ $periksaTrimester->hpht }}">
            </div>
            <div class="form-col">
                <label>Keterangan Haid</label>
                <select name="keterangan_haid" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Teratur" {{ $periksaTrimester->keterangan_haid == 'Teratur' ? 'selected' : '' }}>
                        Teratur</option>
                    <option value="Tidak Teratur"
                        {{ $periksaTrimester->keterangan_haid == 'Tidak Teratur' ? 'selected' : '' }}>Tidak Teratur
                    </option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Umur Kehamilan Berdasarkan HPHT Pada Siklus Haid Teratur (Minggu)</label>
                <input type="number" name="umur_kehamilan_hpht" class="form-control"
                    value="{{ $periksaTrimester->umur_kehamilan_hpht }}">
            </div>
            <div class="form-col">
                <label>HPL Berdasarkan HPHT Pada Siklus Haid Teratur</label>
                <input type="date" name="hpl_hpht" class="form-control" value="{{ $periksaTrimester->hpl_hpht }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Umur Kehamilan Berdasarkan USG (Minggu)</label>
                <input type="number" name="umur_kehamilan_usg" class="form-control"
                    value="{{ $periksaTrimester->umur_kehamilan_usg }}">
            </div>
            <div class="form-col">
                <label>HPL Berdasarkan USG</label>
                <input type="date" name="hpl_usg" class="form-control" value="{{ $periksaTrimester->hpl_usg }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Jumlah GS/Kantung Kehamilan</label>
                <select name="jumlah_gs" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Tunggal" {{ $periksaTrimester->jumlah_gs == 'Tunggal' ? 'selected' : '' }}>Tunggal
                    </option>
                    <option value="Kembar" {{ $periksaTrimester->jumlah_gs == 'Kembar' ? 'selected' : '' }}>Kembar
                    </option>
                </select>
            </div>
            <div class="form-col">
                <label>Diameter GS/Kantung Kehamilan</label>
                <input type="number" name="diameter_gs" class="form-control"
                    value="{{ $periksaTrimester->diameter_gs }}">
            </div>
            <div class="form-col">
                <label>GS Sesuai Umur Kehamilan</label>
                <input type="text" name="umur_diameter_gs" class="form-control"
                    value="{{ $periksaTrimester->umur_diameter_gs }}">
            </div>
            <div class="form-col">
                <label>CRL/Jarak Puncak Kepala Bokong</label>
                <input type="number" name="crl" class="form-control" value="{{ $periksaTrimester->crl }}">
            </div>
            <div class="form-col">
                <label>CRL Sesuai Umur Kehamilan</label>
                <input type="date" name="umur_crl" class="form-control" value="{{ $periksaTrimester->umur_crl }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Jumlah Bayi</label>
                <select name="jumlah_bayi" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Tunggal" {{ $periksaTrimester->jumlah_bayi == 'Tunggal' ? 'selected' : '' }}>Tunggal
                    </option>
                    <option value="Kembar" {{ $periksaTrimester->jumlah_bayi == 'Kembar' ? 'selected' : '' }}>Kembar
                    </option>
                </select>
            </div>
            <div class="form-col">
                <label>Letak Produk Kehamilan</label>
                <select name="letak_produk_kehamilan" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Intrauterin"
                        {{ $periksaTrimester->letak_produk_kehamilan == 'Intrauterin' ? 'selected' : '' }}>Intrauterin
                    </option>
                    <option value="Extrauterin"
                        {{ $periksaTrimester->letak_produk_kehamilan == 'Extrauterin' ? 'selected' : '' }}>Extrauterin
                    </option>
                    <option value="Tidak dapat ditentukan"
                        {{ $periksaTrimester->letak_produk_kehamilan == 'Tidak dapat ditentukan' ? 'selected' : '' }}>Tidak
                        dapat ditentukan</option>
                </select>
            </div>
            <div class="form-col">
                <label>Pulsasi Jantung</label>
                <select name="pulsasi_jantung" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Terlihat" {{ $periksaTrimester->pulsasi_jantung == 'Terlihat' ? 'selected' : '' }}>
                        Terlihat</option>
                    <option value="Tidak Terlihat"
                        {{ $periksaTrimester->pulsasi_jantung == 'Tidak Terlihat' ? 'selected' : '' }}>Tidak Terlihat
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Temuan Abnormal</label>
            <select name="temuan_abnormal" id="temuan_abnormal" class="form-control" onchange="toggleTemuanAbnormal()">
                <option value="">-- Pilih --</option>
                <option value="ya" {{ $periksaTrimester->temuan_abnormal == 'ya' ? 'selected' : '' }}>Ya</option>
                <option value="tidak" {{ $periksaTrimester->temuan_abnormal == 'tidak' ? 'selected' : '' }}>Tidak
                </option>
            </select>
        </div>

        <div class="form-group" id="temuan_abnormal_sebutkan_group"
            style="display: {{ $periksaTrimester->temuan_abnormal == 'ya' ? 'block' : 'none' }};">
            <label>Sebutkan Temuan Abnormal</label>
            <input type="text" name="temuan_abnormal_sebutkan" class="form-control"
                value="{{ $periksaTrimester->temuan_abnormal_sebutkan }}">
        </div>

        <h5>Pemeriksaan Laboratorium</h5>
        <div class="form-row">
            <div class="form-col">
                <label>Hemoglobin (g/dL)</label>
                <input type="number" step="0.01" name="hemoglobin" class="form-control"
                    value="{{ $periksaTrimester->hemoglobin }}">
            </div>
            <div class="form-col">
                <label>Golongan Darah</label>
                <input type="text" name="golongan_darah" class="form-control"
                    value="{{ $periksaTrimester->golongan_darah }}">
            </div>
            <div class="form-col">
                <label>Rhesus</label>
                <input type="text" name="rhesus" class="form-control" value="{{ $periksaTrimester->rhesus }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Gula Darah Sewaktu (mg/dL)</label>
                <input type="number" step="0.01" name="gula_darah_sewaktu" class="form-control"
                    value="{{ $periksaTrimester->gula_darah_sewaktu }}">
            </div>
            <div class="form-col">
                <label>Hasil HIV</label>
                <select name="hasil_h" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="reaktif" {{ $periksaTrimester->hasil_h == 'reaktif' ? 'selected' : '' }}>Reaktif
                    </option>
                    <option value="nonreaktif" {{ $periksaTrimester->hasil_h == 'nonreaktif' ? 'selected' : '' }}>
                        Nonreaktif</option>
                </select>
            </div>
            <div class="form-col">
                <label>Hasil Sifilis</label>
                <select name="hasil_s" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="reaktif" {{ $periksaTrimester->hasil_s == 'reaktif' ? 'selected' : '' }}>Reaktif
                    </option>
                    <option value="nonreaktif" {{ $periksaTrimester->hasil_s == 'nonreaktif' ? 'selected' : '' }}>
                        Nonreaktif</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Hasil Hepatitis B</label>
            <select name="hasil_hepatitis_b" class="form-control">
                <option value="">-- Pilih --</option>
                <option value="reaktif" {{ $periksaTrimester->hasil_hepatitis_b == 'reaktif' ? 'selected' : '' }}>Reaktif
                </option>
                <option value="nonreaktif" {{ $periksaTrimester->hasil_hepatitis_b == 'nonreaktif' ? 'selected' : '' }}>
                    Nonreaktif</option>
            </select>
        </div>

        <h5>Skrining Kesehatan Jiwa</h5>
        <div class="form-row">
            <div class="form-col">
                <label>Skrining Dilakukan?</label>
                <select name="skrining_kesehatan_jiwa" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="ya" {{ $periksaTrimester->skrining_kesehatan_jiwa == 'ya' ? 'selected' : '' }}>Ya
                    </option>
                    <option value="tidak" {{ $periksaTrimester->skrining_kesehatan_jiwa == 'tidak' ? 'selected' : '' }}>
                        Tidak</option>
                </select>
            </div>
            <div class="form-col">
                <label>Tindak Lanjut</label>
                <input type="text" name="tindak_lanjut_jiwa" class="form-control"
                    value="{{ $periksaTrimester->tindak_lanjut_jiwa }}">
            </div>
        </div>

        <div class="form-group">
            <label>Perlu Rujukan?</label>
            <select name="perlu_rujukan" class="form-control">
                <option value="">-- Pilih --</option>
                <option value="ya" {{ $periksaTrimester->perlu_rujukan == 'ya' ? 'selected' : '' }}>Ya</option>
                <option value="tidak" {{ $periksaTrimester->perlu_rujukan == 'tidak' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <div class="form-row">
            <div class="form-col">
                <label>Kesimpulan</label>
                <textarea name="kesimpulan" class="form-control" rows="3">{{ $periksaTrimester->kesimpulan }}</textarea>
            </div>
            <div class="form-col">
                <label>Rekomendasi</label>
                <textarea name="rekomendasi" class="form-control" rows="3">{{ $periksaTrimester->rekomendasi }}</textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Pemeriksaan</button>
    </form>

    <script>
        function toggleTemuanAbnormal() {
            const select = document.getElementById('temuan_abnormal');
            const field = document.getElementById('temuan_abnormal_sebutkan_group');
            if (select.value === 'ya') {
                field.style.display = 'block';
            } else {
                field.style.display = 'none';
            }
        }

        // Jalankan toggle saat halaman dimuat untuk menyesuaikan display awal
        document.addEventListener('DOMContentLoaded', function() {
            toggleTemuanAbnormal();
        });
    </script>
@endsection
