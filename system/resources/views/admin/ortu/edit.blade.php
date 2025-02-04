<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit ortu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin-top: 5%;
        }

        .card {
            padding: 2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            border: none;
        }

        .form-label {
            font-weight: 600;
        }

        .btn-success {
            background: #28a745;
            font-weight: bold;
            padding: 10px 20px;
        }

        .btn-secondary {
            font-weight: bold;
            padding: 10px 20px;
        }

        .btn i {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1 class="text-center mb-4">Edit ortu</h1>
            <form action="{{ url('admin/ortu/update', $detail->id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="form-label"><i class="fas fa-graduation-cap"></i> Nama
                        </label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $detail->nama }}"
                        required>
                </div>
                <div class="mb-4">
                    <label for="jk_ortu" class="form-label"><i class="fas fa-code-branch"></i> Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jk_ortu" name="jk_ortu"
                        value="{{ $detail->jk_ortu }}" required>
                </div>
                <div class="mb-4">
                    <label for="tmp_lahir_ortu" class="form-label"><i class="fas fa-user-tie"></i> Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmp_lahir_ortu" name="tmp_lahir_ortu"
                        value="{{ $detail->tmp_lahir_ortu }}" required>
                </div>
                <div class="mb-4">
                    <label for="tgl_lahir_ortu" class="form-label"><i class="fas fa-user-tie"></i> Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tgl_lahir_ortu" name="tgl_lahir_ortu" value="{{ $detail->tgl_lahir_ortu }}"
                        required>
                </div>
                <div class="mb-4">
                    <label for="tlp" class="form-label"><i class="fas fa-user-tie"></i> No Telpon</label>
                    <input type="text" class="form-control" id="tlp" name="tlp"
                        value="{{ $detail->tlp }}" required>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="form-label"><i class="fas fa-user-tie"></i> Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat"
                        value="{{ $detail->alamat }}" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                    <a href="{{ url('admin/ortu') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>
                        Batal</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
