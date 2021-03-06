<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
</head>

<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form class="p-5" action="nilai_siswa.php" method="POST">
        <div class="form-group row">
            <label for="nama" class="col-5 col-form-label">Nama Lengkap</label>
            <div class="col-7">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-5 col-form-label">Mata Kuliah</label>
            <div class="col-7">
                <select id="matkul" name="matkul" required="required" class="custom-select">
                    <option value="ddp">Dasar Dasar Pemrograman</option>
                    <option value="bdi">Basis Data I</option>
                    <option value="web1">Pemrograman Web</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_uts" class="col-5 col-form-label">Nilai UTS</label>
            <div class="col-7">
                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_uas" class="col-5 col-form-label">NIlai UAS</label>
            <div class="col-7">
                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_tugas" class="col-5 col-form-label">Nilai Tugas/Praktikum</label>
            <div class="col-7">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-5 col-7">
                <button name="submit" type="submit" name="proses" value="Simpan" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
    <div class="row p-5">
    <?php
        if(!empty($_POST['submit'])){
            $proses = $_POST['submit'];
            $nama_siswa = $_POST['nama'];
            $mata_kuliah = $_POST['matkul'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];

            echo "Proses : $proses";
            echo "<br> Nama : $nama_siswa";
            echo "<br> Mata Kuliah : $mata_kuliah";
            echo "<br> Nilai UTS : $nilai_uts";
            echo "<br> Nilai UAS : $nilai_uas";
            echo "<br> Nilai Tugas / Praktikum : $nilai_tugas";
        }
    ?>
    </div>
    
</body>

</html>