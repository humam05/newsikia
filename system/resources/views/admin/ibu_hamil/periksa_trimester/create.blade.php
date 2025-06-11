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
                <h4 class="header-title mb-3">Form Pemeriksaan Trimester Ibu {{ $identitas->ibu_nama }}</h4>
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
                <input type="text" name="nama_dokter" class="form-control" required>
            </div>

            <!-- Dropdown Pilihan Trimester -->
            <div class="form-col mb-4">
                <label for="trimester">Trimester Ke-</label>
                <select name="trimester" id="trimester" class="form-control" required
                    onchange="showTrimesterForm(this.value)">
                    <option value="">-- Pilih --</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
        <!-- Form Trimester 1 -->
        <div id="form-trimester-1" class="form-section hidden">
            <div class="form-row">
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
                        <option value="Normal">Ikterik</option>
                        <option value="Tidak normal">Tidak Ikterik</option>
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
                        <option value="Tunggal">Tunggal</option>
                        <option value="Kembar">Kembar</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Diameter GS/Kantung Kehamilan</label>
                    <input type="number" name="diameter_gs" class="form-control">
                </div>
                <div class="form-col">
                    <label>GS Sesuai Umur Kehamilan</label>
                    <input type="text" name="umur_diameter_gs" class="form-control">
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
                    <select name="jumlah_bayi" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Tunggal">Tunggal</option>
                        <option value="Kembar">Kembar</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Letak Produk Kehamilan</label>
                    <select name="letak_produk_kehamilan" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Intrauterin">Intrauterin</option>
                        <option value="Extrauterin">Extrauterin</option>
                        <option value="Tidak dapat ditentukan">Tidak dapat ditentukan</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Pulsasi Jantung</label>
                    <select name="pulsasi_jantung" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Terlihat">Terlihat</option>
                        <option value="Tidak Terlihat">Tidak Terlihat</option>
                    </select>
                </div>
            </div>

            {{-- Temuan Abnormal --}}
            <div class="form-group">
                <label>Temuan Abnormal</label>
                <select name="temuan_abnormal" id="temuan_abnormal" class="form-control"
                    onchange="toggleTemuanAbnormal()">
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
                        <option value="reaktif">Reaktif</option>
                        <option value="nonreaktif">Nonreaktif</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Hasil Sifilis</label>
                    <select name="hasil_s" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="reaktif">Reaktif</option>
                        <option value="nonreaktif">Nonreaktif</option>
                    </select>
                </div>
            </div>
            <div>
                <label>Hasil Hepatitis B</label>
                <select name="hasil_hepatitis_b" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="reaktif">Reaktif</option>
                    <option value="nonreaktif">Nonreaktif</option>
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

        </div>











        <div id="form-trimester-2" class="form-section hidden">
            <div class="form-row">
                <div class="form-col">
                    <label>Tanggal Periksa</label>
                    <input type="date" name="tanggal_periksa_2" class="form-control" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-col">
                    <label>Keluhan</label>
                    <textarea name="rekomendasi" class="form-control"></textarea>
                </div>
                <div class="form-col">
                    <label>Pemeriksaan</label>
                    <textarea name="rekomendasi" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-row">

                <div class="form-col">
                    <label>Tindakan</label>
                    <textarea name="rekomendasi" class="form-control"></textarea>
                </div>
                <div class="form-col">
                    <label>Saran</label>
                    <textarea name="rekomendasi" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-col">
                    <label>Tanggal Kembali</label>
                    <input type="date" name="hpht" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Pemeriksaan</button>


        </div>


















        <div id="form-trimester-3" class="form-section hidden">
            <div class="form-row">
                <div class="form-col">
                    <label>Tanggal Periksa</label>
                    <input type="date" name="tanggal_periksa_3" class="form-control" required>
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
                        <option value="Normal">Ikterik</option>
                        <option value="Tidak normal">Tidak Ikterik</option>
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
            </div><br>
            <div class="form-row">
                <div class="form-col">
                    <label>Umur Kehamilan Berdasarkan USG Trimester 1 (Minggu)</label>
                    <input type="number" name="umur_kehamilan_usg" class="form-control">
                </div>
                <div class="form-col">
                    <label>Umur Kehamilan Berdasarkan HPHT Pada Siklus Haid Teratur (Minggu)</label>
                    <input type="number" name="umur_kehamilan_hpht" class="form-control">
                </div>
                <div class="form-col">
                    <label>Umur Kehamilan Berdasarkan Biometri Bayi USG Trimester 3 (Minggu)</label>
                    <input type="number" name="usg_trimester_3" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-col">
                    <label>Jumlah Bayi</label>
                    <select name="jumlah_bayi" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Tunggal">Tunggal</option>
                        <option value="Kembar">Kembar</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Letak Bayi</label>
                    <select name="letak_produk_kehamilan" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Intrauterin">Intrauterin</option>
                        <option value="Extrauterin">Extrauterin</option>
                        <option value="Tidak dapat ditentukan">Tidak dapat ditentukan</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Presentasi Bayi</label>
                    <select name="presentasi_bayi" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Kepala">Kepala</option>
                        <option value="Bokong">Bokong</option>
                        <option value="Letak Lintang">Letak Lintang</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Keadaan Bayi</label>
                    <select name="keadaan_bayi" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Hidup">Hidup</option>
                        <option value="Meninggal">Meninggal</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Denyut Jantung Bayi</label>
                    <input type="number" name="djj" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-col">
                    <label>Irama Denyut Jantung Bayi</label>
                    <select name="irama_djj" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Normal">Normal</option>
                        <option value="Tidak Normal">Tidak Normal</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Lokasi Plasenta</label>
                    <select name="lokasi_plasenta" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Fundus">Fundus</option>
                        <option value="Corpus">Corpus</option>
                        <option value="Letak Rendah">Letak Rendah</option>
                        <option value="Previa">Previa</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Jumlah Cairan Ketuban</label>
                    <select name="jumlah_cairan_ketuban" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Cukup">Cukup</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Berlebih">Berlebih</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>SDP Cairan Ketuban</label>
                    <input type="number" name="sdp" class="form-control">
                </div>
                <div class="form-col">
                    <label>BPD</label>
                    <input type="number" name="bpd" class="form-control">
                </div>
                <div class="form-col">
                    <label>BPD Sesuai</label>
                    <input type="number" name="bpd_sesuai" class="form-control">
                </div>

            </div>
            <div class="form-row">
                <div class="form-col">
                    <label>HC</label>
                    <input type="number" name="hc" class="form-control">
                </div>
                <div class="form-col">
                    <label>HC Sesuai</label>
                    <input type="number" name="hc_sesuai" class="form-control">
                </div>
                <div class="form-col">
                    <label>AC</label>
                    <input type="number" name="ac" class="form-control">
                </div>
                <div class="form-col">
                    <label>AC Sesuai</label>
                    <input type="number" name="ac_sesuai" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-col">
                    <label>FL</label>
                    <input type="number" name="fl" class="form-control">
                </div>
                <div class="form-col">
                    <label>FL Sesuai</label>
                    <input type="number" name="fl_sesuai" class="form-control">
                </div>
                <div class="form-col">
                    <label>EFW/TBJ</label>
                    <input type="number" name="efw_tbj" class="form-control">
                </div>
                <div class="form-col">
                    <label>EFW/TBJ Sesuai</label>
                    <input type="number" name="efw_tbj_sesuai" class="form-control">
                </div>
            </div>


            {{-- Temuan Abnormal --}}
            <div class="form-group">
                <label>Temuan Abnormal</label>
                <select name="temuan_abnormal" id="temuan_abnormal" class="form-control"
                    onchange="toggleTemuanAbnormal()">
                    <option value="">-- Pilih --</option>
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>
            <div class="form-group hidden" id="temuan_abnormal_sebutkan_group">
                <label>Sebutkan Temuan Abnormal</label>
                <input type="text" name="temuan_abnormal_sebutkan" class="form-control">
            </div>

            <!-- Pemeriksaan Laboratorium -->
            <h5>Pemeriksaan Laboratorium</h5>
            <div class="form-row">
                <div class="form-col">
                    <label>Hemoglobin (g/dL)</label>
                    <input type="number" step="0.01" name="hemoglobin" class="form-control">
                </div>
                <div class="form-col">
                    <label>Protein Urin (Mg/dL)</label>
                    <input type="text" name="protein_urin" class="form-control">
                </div>
                <div class="form-col">
                    <label>Urin Reduksi</label>
                    <select name="urin_reduksi" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="negatif">Negatif</option>
                        <option value="+1">+1</option>
                        <option value="+2">+2</option>
                        <option value="+3">+3</option>
                        <option value="+4">+4</option>
                    </select>
                </div>
            </div>

            <!-- Skrining Kesehatan Jiwa -->
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
                <div class="form-col">
                    <label>Perlu Rujukan?</label>
                    <select name="perlu_rujukan" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="ya">Ya</option>
                        <option value="tidak">Tidak</option>
                    </select>
                </div>
            </div>

            <!-- Rencana Konsultasi -->
            <div class="form-row">
                <div class="form-col">
                    <label>Rencana Konsultasi</label>
                    <select name="rencana_konsultasi" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="gizi">Gizi</option>
                        <option value="kebidanan">Kebidanan</option>
                        <option value="anak">Anak</option>
                        <option value="penyakit dalam">Penyakit Dalam</option>
                        <option value="neurologi">Neurologi</option>
                        <option value="tht">THT</option>
                        <option value="psikiatri">Psikiatri</option>
                        <option value="lain lain">Lain-lain</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Rencana Melahirkan</label>
                    <select name="rencana_melahirkan" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="normal">Normal</option>
                        <option value="pervaginam berbantu">Pervaginam Berbantu</option>
                        <option value="sectio caesaria">Sectio Caesaria</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Rencana Kontrasepsi</label>
                    <select name="rencana_kontrasepsi" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="akdr">AKDR</option>
                        <option value="pil">Pil</option>
                        <option value="suntik">Suntik</option>
                        <option value="steril">Steril</option>
                        <option value="mal">MAL</option>
                        <option value="implan">Implan</option>
                        <option value="belum memilih">Belum Memilih</option>
                    </select>
                </div>
                <div class="form-col">
                    <label>Konseling</label>
                    <select name="konseling" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="ya">Ya</option>
                        <option value="tidak">Tidak</option>
                    </select>
                </div>
            </div>

            <!-- Penjelasan -->
            <div class="form-row">
                <div class="form-col">
                    <label>Penjelasan</label>
                    <textarea name="penjelasan" class="form-control" rows="3"></textarea>
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
    <script>
        function showTrimesterForm(value) {
            // Sembunyikan semua form terlebih dahulu
            document.querySelectorAll('.form-section').forEach(function(el) {
                el.classList.add('hidden');
            });

            // Tampilkan form sesuai trimester yang dipilih
            if (value === "1") {
                document.getElementById('form-trimester-1').classList.remove('hidden');
            } else if (value === "2") {
                document.getElementById('form-trimester-2').classList.remove('hidden');
            } else if (value === "3") {
                document.getElementById('form-trimester-3').classList.remove('hidden');
            }
        }
    </script>
@endsection
