<!DOCTYPE html>
<?php
include ('header.html');
?>
<html>
    
    <body>
        <main class="container py-5">
        
        <div class="dropdown" style="margin-left: 15px; margin-top: 5px;">
             <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <h1 class="mb-0 me-2">Biblioteca</h1>
             </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">Todo</a></li>
                <li><a class="dropdown-item" href="#">Leído</a></li>
                <li><a class="dropdown-item" href="#">Sin leer</a></li>
                <li><a class="dropdown-item" href="#">Terminado</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Recientes</a></li>
                <li><a class="dropdown-item" href="#">Fecha en que se agregó</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Listas de </a></li>
            </ul>
        </div>

        <div class="container py-4">
        <input class="form-control buscar" type="text" placeholder="Buscar" aria-label="Search">
        </div>
        
        <div class="container py-4">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active custom-button" id="nav-todo-tab" data-bs-toggle="tab" data-bs-target="#nav-todo" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Todo</button>
                    <button class="nav-link custom-button" id="nav-archive-tab" data-bs-toggle="tab" data-bs-target="#nav-archive" type="button" role="tab" aria-controls="nav-archive" aria-selected="false">Archivo</button>
                </div>
            </nav>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-todo" role="tabpanel" aria-labelledby="nav-todo-tab">
                <div class="container marketing">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                            <a href="#"><img class="portada" src="images/1.png" alt=""></a>
                            <div class="container py-4 text-center">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="progress mb-3 " style="width: 50%;">
                                        <div class="progress-bar linea text-dark" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                </div>
                                <p class="" style="">magic garden</p>
                                <p class="" style="">@xxxxx</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6  text-center">
                            <a href="#"><img class="portada" src="images/2.png" alt=""></a>
                            <div class="container py-4 text-center">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="progress mb-3 " style="width: 50%;">
                                        <div class="progress-bar linea text-dark" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                </div>
                                <p class="" style="">the tarot book</p>
                                <p class="" style="">@xxxxx</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6  text-center">
                            <a href="#"><img class="portada" src="images/3.png" alt=""></a>
                            <div class="container py-4 text-center">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="progress mb-3 " style="width: 50%;">
                                        <div class="progress-bar linea text-dark" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                                    </div>
                                </div>
                                <p class="" style="">journey to the stars</p>
                                <p class="" style="">@xxxxx</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6  text-center">
                            <a href="#"><img class="portada" src="images/4.png" alt=""></a>
                            <div class="container py-4 text-center">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="progress mb-3 " style="width: 50%;">
                                        <div class="progress-bar linea text-dark" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </div>
                                <p class="" style="">notes</p>
                                <p class="" style="">@xxxxx</p>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
            <div class="tab-pane fade" id="nav-archive" role="tabpanel" aria-labelledby="nav-archive-tab">
                <div class="container marketing">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6  text-center">
                            <a href="#"><img class="portada" src="images/5.png" alt=""></a>
                            <div class="container py-4 text-center">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="progress mb-3 " style="width: 50%;">
                                        <div class="progress-bar linea text-dark" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </div>
                                <p class="" style="">orange juice</p>
                                <p class="" style="">@xxxxx</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6  text-center">
                            <a href="#"><img class="portada" src="images/6.png" alt=""></a>
                            <div class="container py-4 text-center">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="progress mb-3 " style="width: 50%;">
                                        <div class="progress-bar linea text-dark" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </div>
                                <p class="" style="">the art of the conversations</p>
                                <p class="" style="">@xxxxx</p>
                            </div>
                        </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>  
    </body>
</html>

<script>
        // Función para mostrar la pestaña seleccionada
        function showTab(tabIndex) {
            const tabs = document.querySelectorAll('.tab');
            const tabLinks = document.querySelectorAll('.tab-link');

            tabs.forEach((tab, index) => {
                if (index === tabIndex - 1) {
                    tab.classList.add('active');
                    tabLinks[index].classList.add('active');
                } else {
                    tab.classList.remove('active');
                    tabLinks[index].classList.remove('active');
                }
            });
        }
    </script>