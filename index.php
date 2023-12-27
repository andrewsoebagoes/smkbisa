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
            <div class="card-header">Form Buku Tamu</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Mis : Budi Budiman" />
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK <span class=" fs-6">(Optional)</span></label>
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="Mis : 1220000000001" />
                    </div>

                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan<span class=" fs-6">(Optional)</span></label>
                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Mis : Orang Tua" />
                    </div>

                    <div class="mb-3">
                        <label for="kunjungan" class="form-label">Permasalahan Kunjungan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="kunjungan" id="kunjungan" placeholder="Mis : Menjenguk Anak" />
                    </div>


                    <div class="mb-3">
                        <label for="saran" class="form-label">Saran dan Harapan<span class="text-danger">*</span></label>
                        <textarea class="form-control" name="saran" id="saran" rows="3"></textarea>
                    </div>


                    <div class=" mb-3">
                        <label for="foto" class="form-label">Foto</label><br>
                        <input type="file" class="form-control" name="foto" id="foto" />
                    </div>
                    
                    <label for="ttd" class="form-label">Tanda Tangan</label><br>
                    <div class="wrapper mb-3">
                        <canvas id="signature-pad" class="signature-pad"></canvas>
                    </div>
                    <div class="tombol mb-4">
                        <button class="btn btn-sm btn-secondary" type="button" id="save-png">Save as PNG</button>
                        <button class="btn btn-sm btn-secondary" type="button" id="save-jpeg">Save as JPEG</button>
                        <button class="btn btn-sm btn-secondary" type="button" id="save-svg">Save as SVG</button>

                        <button class="btn btn-sm btn-secondary" type="button" id="undo">Undo</button>
                        <button class="btn btn-sm btn-secondary" type="button" id="clear">Clear</button>
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
    <script>
        var canvas = document.getElementById('signature-pad');

        // Adjust canvas coordinate space taking into account pixel ratio,
        // to make it look crisp on mobile devices.
        // This also causes canvas to be cleared.
        function resizeCanvas() {
            // When zoomed out to less than 100%, for some very strange reason,
            // some browsers report devicePixelRatio as less than 1
            // and only part of the canvas is cleared then.
            var ratio = Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            canvas.getContext("2d").scale(ratio, ratio);
        }

        window.onresize = resizeCanvas;
        resizeCanvas();

        var signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
        });

        document.getElementById('save-png').addEventListener('click', function() {
            if (signaturePad.isEmpty()) {
                return alert("Please provide a signature first.");
            }

            var data = signaturePad.toDataURL('image/png');
            console.log(data);
            window.open(data);
        });

        document.getElementById('save-jpeg').addEventListener('click', function() {
            if (signaturePad.isEmpty()) {
                return alert("Please provide a signature first.");
            }

            var data = signaturePad.toDataURL('image/jpeg');
            console.log(data);
            window.open(data);
        });

        document.getElementById('save-svg').addEventListener('click', function() {
            if (signaturePad.isEmpty()) {
                return alert("Please provide a signature first.");
            }

            var data = signaturePad.toDataURL('image/svg+xml');
            console.log(data);
            console.log(atob(data.split(',')[1]));
            window.open(data);
        });

        document.getElementById('clear').addEventListener('click', function() {
            signaturePad.clear();
        });

        document.getElementById('undo').addEventListener('click', function() {
            var data = signaturePad.toData();
            if (data) {
                data.pop(); // remove the last dot or line
                signaturePad.fromData(data);
            }
        });
    </script>
</body>

</html>