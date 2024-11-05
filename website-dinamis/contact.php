<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kontak</title>
    <style>
        .bunga {
            background-image: url("includes/G/mountain.png");
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <!-- Bagian Header -->
    <header class="bg-primary text-white text-center py-5 bunga">
        <h1>Kontak Kami</h1>
        <p style="color:white; background:rgba(0, 0, 0, 0.5);">Silakan hubungi kami untuk informasi lebih lanjut</p>
    </header>
    <!-- Konten Utama -->
    <div class="container my-5">
        <div class="row">
            <!-- Form Kontak -->
            <div class="col-md-6">
                <h3>Kirim Pesan</h3>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="email@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>
                    <a button type="submit" class="btn btn-primary" href="?page=contact">Kirim Pesan</a>
                </form>
            </div>
            <!-- Informasi Kontak -->
            <div class="col-md-6">
                <h3>Informasi Kontak</h3>
                <ul class="list-unstyled">
                    <li><strong>Alamat:</strong> Jl. Contoh No. 123, Kota Contoh</li>
                    <li><strong>Email:</strong> info@example.com</li>
                    <li><strong>Telepon:</strong> +62 123 456 789</li>
                </ul>
                <h4>Ikuti Kami</h4>
                <div class="d-flex">
                    <a href="#" class="me-3 text-primary"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#" class="me-3 text-info"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="#" class="text-danger"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>