<!DOCTYPE html>
<?php
include ('header.html');
?>
<html>
    
    <body>
        <main class="container py-5">
            <div class="card">
                <img class="card-img-top" src="images/head-profile.png" alt="Card image cap">
                <div class="d-flex justify-content-between">
                    <div class="bg-light  rounded">
                        <div class="card-body little-profile">
                        <div class="bg-light  rounded">
                        <div class="card-body little-profile">
                            <div class="d-flex align-items-start">
                            <div class="profile pro-img" style="margin-top: -50px;">
                                <img src="images/profile.jpg" alt="user">
                            </div>
                                <div style="margin-left: 15px;">
                                    <h2>Nombre de usuario</h2>
                                    <p>@xxxxx</p>
                                </div>
                            </div>
                            <a href="#" class="btn btn-p" id="followButton" style="margin-left: 35px;">Siguiendo</a>
                            <a href="#" class="btn btn-don " id="followButton" style="margin-left: 35px;">$</a>
                        </div>

                    </div>
                            
                        </div>
                    </div>
                    <div class="bg-transparent p-4 text-center">
                        <ul class="list-inline mb-0">
                            <!-- <li class="list-inline-item">
                                <h5 class="font-weight-bold mb-0 d-block">4</h5>
                                <small class="text-muted"><i class="fas fa-image mr-1"></i>Historias</small>
                            </li> -->
                            <li class="list-inline-item">
                                <h5 class="font-weight-bold mb-0 d-block">745</h5>
                                <small class="text-muted"><i class="fas fa-user mr-1"></i>Seguidoras</small>
                            </li>
                            <li class="list-inline-item">
                                <h5 class="font-weight-bold mb-0 d-block">340</h5>
                                <small class="text-muted"><i class="fas fa-user mr-1"></i>Siguiendo</small>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-md-4">
                        <div class="p-5  rounded" style="background-color:#FFC9DA; margin-left:5%; margin-down:5%;">
                            <p class="mb-0" >Breve descripción sobre la persona.</p>
                            <div class="text-center" >
                                <a href="https://open.spotify.com/user/a3lz6e532siaiv69492351rim?si=2f0330f54e9b488d" target="_blank"><img class="social"  src="images/spotify.png" alt="spotify"></a>
                                <a href="https://twitter.com/alltoomxroon" target="_blank"><img class="social"  src="images/x.svg" alt="twitter"></a>
                                <a href="https://www.goodreads.com/user/show/33060991-aftxescilx" target="_blank"><img class="social"  src="images/goodreads.png" alt="goodreads"></a>
                            </div>
                        </div>

                       
                    </div>
                                        <div class="col-md-8">
                        <div class="position-sticky" style="top: 2rem;">
                            <div class="p-4 mb-3 bg-light rounded">
                                <h2 class="">Historias favoritas</h2>                   
                                <div class="container marketing">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="#"><img class="portada" src="images/1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="#"><img class="portada" src="images/2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="#"><img class="portada" src="images/3.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="#"><img class="portada" src="images/4.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <!-- <div class="p-4 mb-3 bg-light rounded">
                                <h2 class="">Recomendaciones</h2>                   
                                <div class="container marketing">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="#"><img class="portada" src="images/1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="#"><img class="portada" src="images/2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="#"><img class="portada" src="images/3.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="#"><img class="portada" src="images/4.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>  
                            </div> -->
                            <div class="p-4 mb-3 bg-light rounded">
                                <h2 class="">Autoras favoritas</h2>                   
                                <div class="container marketing">
                                    <div class="row text-center">
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="perfilAutora1.php"><img class="portada" src="images/icon1.jpg" alt="" style="border-radius: 100%"></a>
                                            <p class="" style="">@xxxxx</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="perfilAutora1.php"><img class="portada" src="images/icon2.jpg" alt="" style="border-radius: 100%"></a>
                                            <p class="" style="">@xxxxx</p>

                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="perfilAutora3.php"><img class="portada" src="images/icon3.jpg" alt="" style="border-radius: 100%"></a>
                                            <p class="" style="">@xxxxx</p>

                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="perfilAutora4.php"><img class="portada" src="images/icon4.jpg" alt="" style="border-radius: 100%"></a>
                                            <p class="" style="">@xxxxx</p>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                        </div>
                    </div>
                </div>
                
            </div>
        </main>
    </body>
</html>