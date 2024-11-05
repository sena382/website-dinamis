<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Custom CSS untuk gambar header */
        .carousel-header-img {
            height: 400px;
            /* Sesuaikan tinggi untuk header */
            object-fit: cover;
            /* Menyesuaikan gambar tanpa merusak aspek rasio */
            object-position: center;
            /* Fokus ke tengah gambar */
        }

        .color {
            background-color: rgba(0, 0, 0, 0.5);
            /* Background hitam transparan */
            padding: 10px;
            /* Memberikan jarak antara teks dan tepi */
            border-radius: 8px;
            /* Membuat sudut background menjadi bulat */
            display: inline-block;
            /* Agar background hanya di sekitar teks */
        }
    </style>
</head>

<body>
<div class = "card">
    <div class="container d-flex justify-content-center mt-3">
        <div class="card" style="width: 60%;">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="includes/G/avanza.png" class="d-block w-100 carousel-header-img" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="color">Avanza in Tokyo</h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="includes/G/century.png" class="d-block w-100 carousel-header-img" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="color">Toyota Century in Tokyo</h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="includes/G/vw.png" class="d-block w-100 carousel-header-img" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="color">Old Classic VW Car in Tokyo</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>