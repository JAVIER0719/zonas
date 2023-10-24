<?php
include("db.php");
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="modulo/css1/estini.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<section class="portfolio" id="portfolio">
    <div class="container-fluid">
        <div class="row">

            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="gallery-title">Galería</h1>
            </div>

            <div align="center">
                <button class="filter-button" data-filter="all">Todo</button>
                <button class="filter-button" data-filter="category1">Pinturas</button>
                <button class="filter-button" data-filter="category2">fotografias</button>
                <button class="filter-button" data-filter="category3">Videos</button>
            </div>

            <br />
            <?php
            $galeria = $conn->query("SELECT * FROM `recursos`;");

            while ($mostrar = $galeria->fetch_object()) {
                $titulo = $mostrar->nombre_imagen;
                $texto = $mostrar->descripcion;
                $imageData = $mostrar->imagen;
                $base64Image = base64_encode($imageData);
                ?>
                <div class="gallery_product col-sm-3 col-xs-6 filter category1 gallery-product">
                    <a class="fancybox" rel="ligthbox" href="data:image/jpeg;base64,<?= $base64Image ?>">
                        <img class="img-responsive" alt="" src="data:image/jpeg;base64,<?= $base64Image ?>" />
                        <div class='img-info'>
                            <h4>
                                <?= $titulo ?>
                            </h4>
                            <p>
                                <?= $texto ?>
                            </p>
                        </div>
                    </a>
                </div>

                <?php
            }
            ?>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {

        $(".gallery_product").each(function (index) {
            var $image = $(this);
            $image.hide().delay(200 * index).fadeIn(1000);
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
<script src="http://localhost/zonas/htmls/menu/modulo/js/jsgale.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>