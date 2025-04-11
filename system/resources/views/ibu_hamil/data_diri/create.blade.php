@extends('ibu_hamil.layouts.base')
@section('content')
<style>
body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f7f9fb;
  color: #333;
}

/* Container Form */
form {
  background: #ffffff;
  padding: 25px;
  max-width: 800px;
  margin: auto;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
  font-size: 14px;
}

/* Judul section */
h2, h3 {
  margin-bottom: 15px;
  font-size: 18px;
  color: #2c3e50;
  border-bottom: 2px solid #e0e0e0;
  padding-bottom: 5px;
}

/* Struktur dua kolom */
.form-row {
  display: flex;
  gap: 20px;
  margin-bottom: 15px;
}

.form-col {
  flex: 1;
}

/* Label dan Input */
label {
  display: block;
  font-weight: 500;
  margin-bottom: 6px;
  color: #444;
}

input[type="text"],
input[type="number"],
input[type="date"],
textarea {
  width: 100%;
  padding: 8px 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 14px;
  background-color: #fefefe;
  box-sizing: border-box;
  transition: border-color 0.2s ease;
}

input:focus,
textarea:focus {
  border-color: #3498db;
  outline: none;
}

/* Textarea */
textarea {
  resize: vertical;
  min-height: 60px;
}

/* Tombol */
button {
  display: inline-block;
  margin-top: 25px;
  padding: 10px 20px;
  font-size: 14px;
  background-color: #3498db;
  color: white;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #2980b9;
}

/* Responsive di layar kecil */
@media (max-width: 600px) {
  .form-row {
    flex-direction: column;
  }
}

</style>

  <h2>Identitas Ibu</h2>
  <div class="form-row">
    <div class="form-col">
      <label>Nama</label>
      <input type="text" name="ibu_nama">
    </div>
    <div class="form-col">
      <label>NIK</label>
      <input type="text" name="ibu_nik">
    </div>
  </div>

  <div class="form-row">
    <div class="form-col">
      <label>No. JKN</label>
      <input type="text" name="ibu_jkn">
    </div>
    <div class="form-col">
      <label>Faskes TK1</label>
      <input type="text" name="ibu_faskes_tk1">
    </div>
  </div>

  <div class="form-row">
    <div class="form-col">
      <label>Faskes Rujukan</label>
      <input type="text" name="ibu_faskes_rujukan">
    </div>
    <div class="form-col">
      <label>Tempat/Tanggal Lahir</label>
      <input type="text" name="ibu_ttl">
    </div>
  </div>
  <div class="form-row">
    <div class="form-col">
      <label>Pendidikan</label>
      <input type="text" name="ibu_pendidikan">
    </div>
    <div class="form-col">
      <label>Pekerjaan</label>
      <input type="text" name="ibu_pekerjaan">
    </div>
  </div>

  <div class="form-row">

    <div class="form-col">
        <label>Golongan Darah</label>
        <input type="text" name="ibu_telepon">
      </div>
    <div class="form-col">
      <label>Telepon</label>
      <input type="text" name="ibu_telepon">
    </div>
  </div>
  <div class="form-col">
    <label>Alamat Rumah</label>
    <textarea name="ibu_alamat"></textarea>
  </div>
  <h2>Identitas Suami/Keluarga</h2>
  <div class="form-row">
    <div class="form-col">
      <label>Nama</label>
      <input type="text" name="suami_nama">
    </div>
    <div class="form-col">
      <label>NIK</label>
      <input type="text" name="suami_nik">
    </div>
  </div>
  <div class="form-row">
    <div class="form-col">
      <label>No. JKN</label>
      <input type="text" name="suami_jkn">
    </div>
    <div class="form-col">
      <label>Faskes TK1</label>
      <input type="text" name="suami_faskes_tk1">
    </div>
  </div>

  <div class="form-row">
    <div class="form-col">
      <label>Faskes Rujukan</label>
      <input type="text" name="suami_faskes_rujukan">
    </div>
    <div class="form-col">
      <label>Tempat/Tanggal Lahir</label>
      <input type="text" name="suami_ttl">
    </div>
  </div>

  <div class="form-row">
    <div class="form-col">
      <label>Pendidikan</label>
      <input type="text" name="suami_pendidikan">
    </div>
    <div class="form-col">
      <label>Pekerjaan</label>
      <input type="text" name="suami_pekerjaan">
    </div>
  </div>

  <div class="form-row">
    <div class="form-col">
      <label>Alamat Rumah</label>
      <textarea name="suami_alamat"></textarea>
    </div>
    <div class="form-col">
      <label>Telepon</label>
      <input type="text" name="suami_telepon">
    </div>
  </div>

  <h2>Identitas Anak</h2>

  <div class="form-row">
    <div class="form-col">
      <label>Anak ke-</label>
      <input type="number" name="anak_ke">
    </div>
    <div class="form-col">
      <label>Nomor Akta Kelahiran</label>
      <input type="text" name="akta_kelahiran">
    </div>
  </div>

  <div class="form-row">
    <div class="form-col">
      <label>Golongan Darah</label>
      <input type="text" name="gol_darah">
    </div>
  </div>

  <h3>Pembiayaan Lain</h3>
  <div class="form-row">
    <div class="form-col">
      <label>Asuransi Lain</label>
      <input type="text" name="asuransi_lain">
    </div>
    <div class="form-col">
      <label>Nomor</label>
      <input type="text" name="no_asuransi">
    </div>
  </div>

  <div class="form-row">
    <div class="form-col">
      <label>Tanggal Berlaku</label>
      <input type="date" name="tgl_berlaku">
    </div>
  </div>

  <h2>Fasilitas Pelayanan Kesehatan</h2>

  <h3>Primer</h3>
  <div class="form-row">
    <div class="form-col">
      <label>Puskesmas Domisili</label>
      <input type="text" name="puskesmas">
    </div>
    <div class="form-col">
      <label>No. Reg. Kohort Ibu</label>
      <input type="text" name="kohort_ibu">
    </div>
  </div>

  <div class="form-row">
    <div class="form-col">
      <label>No. Reg. Kohort Bayi</label>
      <input type="text" name="kohort_bayi">
    </div>
    <div class="form-col">
      <label>No. Reg. Kohort Balita dan Anak Pra-Sekolah</label>
      <input type="text" name="kohort_balita">
    </div>
  </div>

  <h3>Sekunder</h3>
  <div class="form-row">
    <div class="form-col">
      <label>No. Catatan Medik RS</label>
      <input type="text" name="medik_rs">
    </div>
  </div>

  <button type="submit">Simpan Data</button>



@endsection
