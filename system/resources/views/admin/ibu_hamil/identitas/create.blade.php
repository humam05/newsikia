@extends('admin.layouts.base')
@section('content')
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f7f9fb;
            color: #333;
        }

        form {
            background: #ffffff;
            padding: 25px;
            max-width: 100%;
            width: 100%;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
            font-size: 14px;
        }

        h2,
        h3 {
            margin-bottom: 15px;
            font-size: 18px;
            color: #2c3e50;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 5px;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .form-col {
            flex: 1;
        }

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

        textarea {
            resize: vertical;
            min-height: 60px;
        }

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

        @media (max-width: 600px) {
            .form-row {
                flex-direction: column;
            }
        }

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .btn-orange {
            background-color: #2a8f28;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: 0.3s ease;
        }

        .btn-orange:hover {
            background-color: #034709;
        }

        .btn-orange:disabled {
            background-color: #ccc;
            color: #666;
        }
    </style>
    <form action="{{ url('admin/ibu_hamil/identitas/store') }}" method="POST" id="multiStepForm">
        @csrf

        {{-- STEP 1: Data Ibu --}}
        <div class="form-step active">

            <h2>Identitas Ibu</h2>

            <div class="form-row">
                <div class="form-col">
                    <label>Nama</label>
                    <input type="text" name="ibu_nama" required>
                </div>
                <div class="form-col">
                    <label>NIK</label>
                    <input type="text" name="ibu_nik" maxlength="16" minlength="16" required>
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
                    <input type="text" name="ibu_gol_darah">
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

            <div class="form-row">
                <div class="form-col">
                    <label>Asuransi Lain</label>
                    <input type="text" name="ibu_asuransi_lain">
                </div>
                <div class="form-col">
                    <label>Nomor</label>
                    <input type="text" name="ibu_asuransi_nomor">
                </div>
            </div>

            <div class="form-col">
                <label>Tanggal Berlaku</label>
                <input type="date" name="ibu_asuransi_berlaku">
            </div>
        </div>

        {{-- STEP 2: Data Suami --}}
        <div class="form-step">
            <h2>Identitas Suami/Keluarga</h2>
            <div class="form-row">
                <div class="form-col">
                    <label>Nama</label>
                    <input type="text" name="suami_nama" required>
                </div>
                <div class="form-col">
                    <label>NIK</label>
                    <input type="text" name="suami_nik" maxlength="16" minlength="16" required>
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
                    <label>Golongan Darah</label>
                    <input type="text" name="suami_gol_darah">
                </div>
                <div class="form-col">
                    <label>Telepon</label>
                    <input type="text" name="suami_telepon">
                </div>
            </div>

            <div class="form-col">
                <label>Alamat Rumah</label>
                <textarea name="suami_alamat"></textarea>
            </div>

            <div class="form-row">
                <div class="form-col">
                    <label>Asuransi Lain</label>
                    <input type="text" name="suami_asuransi_lain">
                </div>
                <div class="form-col">
                    <label>Nomor</label>
                    <input type="text" name="suami_asuransi_nomor">
                </div>
            </div>

            <div class="form-col">
                <label>Tanggal Berlaku</label>
                <input type="date" name="suami_asuransi_berlaku">
            </div>
        </div>

        {{-- STEP 3: Data Anak & Fasilitas --}}
        <div class="form-step">
            <h2>Identitas Anak</h2>
            <div class="form-row">
                <div class="form-col">
                    <label>Nama</label>
                    <input type="text" name="anak_nama">
                </div>
                <div class="form-col">
                    <label>NIK</label>
                    <input type="text" name="anak_nik" maxlength="16" minlength="16">
                </div>
            </div>

            <div class="form-row">
                <div class="form-col">
                    <label>No. JKN</label>
                    <input type="text" name="anak_jkn">
                </div>
                <div class="form-col">
                    <label>Fasilitas Kesehatan TK1</label>
                    <input type="text" name="anak_faskes_tk1">
                </div>
            </div>

            <div class="form-row">
                <div class="form-col">
                    <label>Fasilitas Kesehatan Rujukan</label>
                    <input type="text" name="anak_faskes_rujukan">
                </div>
                <div class="form-col">
                    <label>Tempat Lahir</label>
                    <input type="text" name="anak_tempat_lahir">
                </div>
            </div>

            <div class="form-row">
                <div class="form-col">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="anak_tanggal_lahir">
                </div>
                <div class="form-col">
                    <label>Alamat Rumah</label>
                    <textarea name="anak_alamat"></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-col">
                    <label>Anak ke-</label>
                    <input type="number" name="anak_ke">
                </div>
                <div class="form-col">
                    <label>Nomor Akta Kelahiran</label>
                    <input type="text" name="anak_akta_kelahiran">
                </div>
            </div>

            <div class="form-row">
                <div class="form-col">
                    <label>Golongan Darah</label>
                    <input type="text" name="anak_gol_darah">
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
        </div>
        {{-- Tombol Navigasi --}}
        <div class="d-flex justify-content-end gap-2">
            <button type="button" class="btn-orange" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" class="btn-orange" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn-orange w-100" id="submitBtn">Simpan</button>
        </div>
    </form>
@endsection
@section('scripts')
    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll(".form-step");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");
        const submitBtn = document.getElementById("submitBtn");

        showStep(currentStep);

        function showStep(n) {
            steps.forEach((step, index) => {
                step.classList.remove("active");
                if (index === n) step.classList.add("active");
            });

            prevBtn.style.display = n === 0 ? "none" : "inline-block";
            nextBtn.style.display = n === steps.length - 1 ? "none" : "inline-block";
            submitBtn.style.display = n === steps.length - 1 ? "inline-block" : "none";
        }

        function nextPrev(n) {
            currentStep += n;
            if (currentStep >= steps.length) {
                document.getElementById("multiStepForm").submit();
                return false;
            }
            showStep(currentStep);
        }
    </script>
@endsection
