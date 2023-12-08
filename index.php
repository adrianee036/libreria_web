<?php 
    include 'bd/conexion.php';
?>


<?php 
    include 'nav.html';
?>

    <h4 id="encabezado">Libros</h4>


    <div
    id="carouselMultiItemExample"
    class="carousel slide carousel-dark text-center"
    data-mdb-ride="carousel"
    >
    <!-- Inner -->
    <div class="carousel-inner py-4">
        <!-- Single item -->
        <div class="carousel-item active">
        <div class="container">
            <div class="row">

            <?php 

                $libreria = new DBLibreria();
                $libros = $libreria->obtenerLibros();

                foreach($libros as $registro){
                    print('<div class="col-lg-4 d-none d-lg-block" id="espacio">
                    <div class="card">
                    <img
                        src="imagenes_libros/'.$registro['nombre_imagen'].'"
                        class="card-img-top"
                        height="400px"
                        alt="'.$registro['nombre_libro'].'"
                    />
                    <div class="card-body">
                        <h5 class="card-title">'.$registro['nombre_libro'].'</h5>
                        <p class="card-text">'
                            .$registro['ano'].'
                        </p>
                    </div>
                    </div>
                </div>');
                }

                ?>

            </div>
        </div>
        </div>

    </div>
    <!-- Inner -->
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>