<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <?php include('navbar.php'); ?>

    <div class="container">
        <div class="card">
            <div class="card-header">Kuisioner Tracer Study Untuk Lulus SMK Bisa</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Mis : Budi Budiman" />
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Mis : Pulau Rakyat" />
                    </div>

                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="L" name="jenis_kelamin" value="L">
                            <label class="form-check-label" for="L">L</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="P" name="jenis_kelamin" value="P">
                            <label class="form-check-label" for="P">P</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="alamat_tetap" class="form-label">Alamat Tetap<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="alamat_tetap" id="alamat_tetap" placeholder="Mis : Pulau Rakyat" />
                    </div>

                    <div class="mb-3">
                        <label for="alamat_sekarang" class="form-label">Alamat Sekarang<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="alamat_sekarang" id="alamat_sekarang" placeholder="Mis : Pulau Rakyat" />
                    </div>

                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No Telp/Hp<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Mis : 08221212313" />
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Mis : ananda@gmail.com" />
                    </div>

                    <div class="mb-3">
                        <label for="tahun_masuk" class="form-label">Tahun Masuk<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="tahun_masuk" id="tahun_masuk" placeholder="Mis : 2020" />
                    </div>

                    <div class="mb-3">
                        <label for="tahun_lulus" class="form-label">Tahun Lulus<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="tahun_lulus" id="tahun_lulus" placeholder="Mis : 2023" />
                    </div>

                    <div class="mb-3">
                        <label for="program_keahlian" class="form-label">Program Keahlian<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="program_keahlian" id="program_keahlian" placeholder="Mis : ananda@gmail.com" />
                    </div>

                    <div class="mb-3">
                        <label for="status_pekerjaan" class="form-label">Status Pekerjaan Anda Saat Ini<span class="text-danger"> (Pilih salah satu)</span></label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="Bekerja Full Time" name="status_pekerjaan" value="Bekerja Full Time">
                            <label class="form-check-label" for="Bekerja Full Time">Bekerja Full Time</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="Bekerja Part Time" name="status_pekerjaan" value="Bekerja Part Time">
                            <label class="form-check-label" for="Bekerja Part Time">Bekerja Part Time</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="Tidak berkerja/Sedang mencari pekerjaan" name="status_pekerjaan" value="Tidak berkerja/Sedang mencari pekerjaan">
                            <label class="form-check-label" for="Tidak berkerja/Sedang mencari pekerjaan">Tidak berkerja/Sedang mencari pekerjaan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="Wirausaha" name="status_pekerjaan" value="Wirausaha">
                            <label class="form-check-label" for="Wirausaha">Wirausaha</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="Melanjutkan Pendidikan" name="status_pekerjaan" value="Melanjutkan Pendidikan">
                            <label class="form-check-label" for="Melanjutkan Pendidikan">Melanjutkan Pendidikan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="Lainnya" name="status_pekerjaan" value="Lainnya">
                            <label class="form-check-label" for="Lainnya">Lainnya</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="nama_instansi" class="form-label">Nama Instansi / Usaha</label>
                        <input type="text" class="form-control" name="nama_instansi" id="nama_instansi" placeholder="Mis : Pulau Rakyat" />
                    </div>
                    <div class="mb-3">
                        <label for="alamat_instansi" class="form-label">Alamat Instansi / Usaha</label>
                        <input type="text" class="form-control" name="alamat_instansi" id="alamat_instansi" placeholder="Mis : Pulau Rakyat" />
                    </div>

                    <div class="mb-3">
                        <label for="no_telp_instansi" class="form-label">No Telp/Hp<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="no_telp_instansi" id="no_telp_instansi" placeholder="Mis : 08221212313" />
                    </div>

                    <div class="mb-3">
                        <label for="email_instansi" class="form-label">Email<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="email_instansi" id="email_instansi" placeholder="Mis : ananda@gmail.com" />
                    </div>

                    <div class="mb-3">
                        <label for="lama_pendidikan" class="form-label">Berapa lama anda menyelesaikan pendidikan SMK ini?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="3 Tahun" name="lama_pendidikan" value="3 Tahun">
                            <label class="form-check-label" for="3 Tahun">3 Tahun</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="4 Tahun" name="lama_pendidikan" value="4 Tahun">
                            <label class="form-check-label" for="4 Tahun">4 Tahun</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="suasana_kegiatan" class="form-label">Apakah suasana dan kegiatan akademik selama disekolah telah sesuai dengan harapan anda?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="Sesuai" name="suasana_kegiatan" value="Sesuai">
                            <label class="form-check-label" for="Sesuai">Sesuai</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="Tidak Sesuai" name="suasana_kegiatan" value="Tidak Sesuai">
                            <label class="form-check-label" for="Tidak Sesuai">Tidak Sesuai</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="status_pekerjaan" class="form-label">Jika tidak sesuai, faktor apa yang membuat tidak sesuai<span class="text-danger"> (Dapat lebih dari satu pilihan)</span></label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Desain Kurikulum" name="status_pekerjaan" value="Desain Kurikulum">
                            <label class="form-check-label" for="Desain Kurikulum">Desain Kurikulum</label>
                        </div>
                     
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Metode Pembelajaran" name="status_pekerjaan" value="Metode Pembelajaran">
                            <label class="form-check-label" for="Metode Pembelajaran">Metode Pembelajaran</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Sarana Pembelajaran / Kelas" name="status_pekerjaan" value="Sarana Pembelajaran / Kelas">
                            <label class="form-check-label" for="Sarana Pembelajaran / Kelas">Sarana Pembelajaran / Kelas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Sarana Laboratorium / Bengkel" name="status_pekerjaan" value="Sarana Laboratorium / Bengkel">
                            <label class="form-check-label" for="Sarana Laboratorium / Bengkel">Sarana Laboratorium / Bengkel</label>
                        </div>
                     
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Pelayanan Administrasi / Akademik" name="status_pekerjaan" value="Pelayanan Administrasi / Akademik">
                            <label class="form-check-label" for="Pelayanan Administrasi / Akademik">Pelayanan Administrasi / Akademik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Lainnya" name="status_pekerjaan" value="Lainnya">
                            <label class="form-check-label" for="Lainnya">Lainnya</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="permasalahan" class="form-label">Permasalahan apa yang dihadapi selamat study di SMK</label>
                        <textarea class="form-control" name="permasalahan" id="permasalahan" rows="3"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>