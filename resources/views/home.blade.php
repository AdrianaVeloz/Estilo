@extends('app')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
<div class="main">
      <div id="carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="img/img1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="img/img2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="img/img3.jpg" class="d-block w-100" alt="...">
              </div>

              <div class="overlay">
                  <div class="container">
                      <div class="row h-100 align-items-center">
                          <div class="offset-md-6 col-md-6 text-md-right text-center">
                              <h3>Moda</h3>
                              <p class="d-none d-md-block">Conoce las ultimas tendencias en moda, cuales son
                                  las opciones que van con tu estilo. Y siéntente comoda al usarlo.
                              </p>
                              <a href="#" class="btn btn-outline-light">Quiero suscribirme</a>
                              <a href="#" class="btn btn-tecnoeduca">Mas informacion</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a> -->
      </div>
  </div>
    <!-- Fin del Main -->


<!-- Clase online -->
<section id="clases">
    <div class="container-fluid">
      <div class="row">
        <div class="col col-lg-6 col-12 pl-0 pr-0">
           <img src="img/incribete.jpg" alt=""> 
          
        </div>
        <div class="col-lg-6 col-12 pt-4 pb-4"> 
          <h2>Clase de estilo y moda online Agosto 2021</h2>
          <p>
              Registrate en el curso que mejor vaya con tu estilo, rellena el formulario para poder contactarte y así mismo se adapte a tus necesidades. Para que tengas la mejor atención y clases personalizadas si lo requieres.
          </p>
          <a href="#" class="btn btn-outline-light" >Registrarme</a>
        </div>
      </div>
    </div>
  </section>
<!-- Fin clase Online -->



    <!-- Cursos -->
        <section id="cursos" class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col text-center text-uppercase">
                        <small>conoce nuestros</small>  <h2>Cursos</h2>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-4 mb-4">
                        <div class="card" >
                          

                             <img src="img/fancy.jpg" class="card-img-top" alt="...">  
                            <div class="card-body">
                              <h5 class="card-title">Social</h5>
                              <p class="card-text">Si buscas vestidos y modelos de vestidos que se adapten a tu personalidad, 
                                  este curso es para ti.</p>
                              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#htmlModal">Ver curso</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="card" >
                            <img src="img/oversize.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Comodidad</h5>
                              <p class="card-text">Lo primordial es el placer, la individualidad, la comodidad al llevar cualquier
                                  tipo de ropa. </p>
                              <a href="#" class="btn btn-primary" data-toggle="modal"data-target="#htmlModal1">Ver curso</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="card" >
                            <img src="img/vintage.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Etiqueta</h5>
                              <p class="card-text">En este curso se aprendera los mejores consejos de etiqueta para cualquier evento
                                  tanto para hombres como para mujeres.
                              </p>
                              <a href="#" class="btn btn-primary"data-toggle="modal"data-target="#htmlModal2">Ver curso</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Fin de cursos -->
    
    <div id="fechas"id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/fondo.jpg"  max-height: 70vh; class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="container-fluid ">
                    <h2 class="text-center">PROXIMAS FECHAS DE INICIO</h2>
                    <table id="table" class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Curso</th>
                            <th scope="col">Periodo</th>
                            <th scope="col">Días</th>
                            <th scope="col">Horario</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="col">Social</th>
                            <td>Agosto 9 -Agosto 31</td>
                            <td>Martes y jueves</td>
                            <td>11:00-2:00 Jueves 26:11:00-1:00</td>
                          </tr>
                          <tr>
                            <th scope="col">Comodidad</th>
                            <td>Septiembre 7- Septiembre 24</td>
                            <td>Martes y jueves</td>
                            <td>11:00-2:00 Jueves 24:11:00-1:00</td>
                          </tr>
                          <tr>
                            <th scope="col">Etiqueta</th>
                            <td >Octubre 5- Octubre 21</td>
                            <td>Martes y jueves</td>
                            <td>11:00-2:00 Jueves 21:11:00-1:00</td>
                          </tr>
                        </tbody>
                      </table>
                      <p class="text-center">Cupo limitado reserva con anticipo</p>
                      <p>Elige tu estilo se reserva el derecho de cambio de fechas o cierre. 
                          Las promociones no son acumulables, en caso de examen se entregara el 
                          certificado 1 semena después de que el curso haya finalizado.
                      </p>
                </div>
            </div>
          </div>
      </div>
      <div class="modal fade" id="htmlModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Temario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Tipo de vestidos
            <span class="badge badge-primary badge-pill">2 hrs.</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Tipos de cuerpos
            <span class="badge badge-primary badge-pill">2 hrs.</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Telas
            <span class="badge badge-primary badge-pill">1 hr.</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Paleta de colores
            <span class="badge badge-primary badge-pill">3 hrs</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Accesorios
            <span class="badge badge-primary badge-pill">3 hrs.</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Examen
            <span class="badge badge-primary badge-pill">5 hrs.</span>
          </li>
        </ul>
        <div class="alert alert-success pt-2" role="alert">
          17 hrs de curso
        </div>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="htmlModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Temario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Casual
              <span class="badge badge-primary badge-pill">2 hrs.</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Tipos de jeans
              <span class="badge badge-primary badge-pill">2 hrs.</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Telas
              <span class="badge badge-primary badge-pill">1 hr.</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Paleta de colores
              <span class="badge badge-primary badge-pill">3 hrs</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Oversize
              <span class="badge badge-primary badge-pill">3 hrs.</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Look final
              <span class="badge badge-primary badge-pill">5 hrs.</span>
            </li>
          </ul>
          <div class="alert alert-success pt-2" role="alert">
            17 hrs de curso
          </div>
        </div> 
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="htmlModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Temario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Principios de la etiqueta
              <span class="badge badge-primary badge-pill">2 hrs.</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Tipos de cuerpos
              <span class="badge badge-primary badge-pill">2 hrs.</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Telas
              <span class="badge badge-primary badge-pill">1 hr.</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Paleta de colores
              <span class="badge badge-primary badge-pill">3 hrs</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Etiqueta para hombre y para mujer
              <span class="badge badge-primary badge-pill">5 hrs.</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Look final
              <span class="badge badge-primary badge-pill">3 hrs.</span>
            </li>
          </ul>
          <div class="alert alert-success pt-2" role="alert">
            17 hrs de curso
          </div>
        </div> 
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    <!-- FIN MODAL -->
    <script src="js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
@endsection