<?php 
    include 'conexion.php';
?>

<?php 
    include 'nav.html';
?>

<?php 
    include 'bd/conexion.php';
?>

<?php 
    include 'nav.html';
?>

<h4 id="encabezado">Autores</h4>


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
                $autores = $libreria->obtenerAutores();
                
                foreach($autores as $registro){
                    print('<div class="col-lg-4 d-none d-lg-block" id="espacio">
                    <div class="card">
                    <img
                        src="imagenes_autores/'.$registro['nombre_imagen'].'"
                        class="card-img-top"
                        height="400px"
                        alt="'.$registro['nombre_autor'].'"
                    />
                    <div class="card-body">
                        <h5 class="card-title">'.$registro['nombre_autor'].'</h5>
                        <p class="card-text">'
                            .$registro['pais'].'
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
</body>
</html>
