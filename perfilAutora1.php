<!DOCTYPE html>
<?php
include ('header.html');
?>
<html>
    
    <body>
        <main class="container py-5">
            <div class="card">
                <img class="card-img-top" src="images/header2.png" alt="Card image cap">
                <div class="d-flex justify-content-between">
                    <div class="bg-light  rounded">
                        <div class="card-body little-profile">
                            <div class="d-flex align-items-start">
                                <div class="pro-img" style="margin-top: -50px;">
                                    <img src="images/icon1.jpg" alt="user">
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
                    <div class="bg-transparent p-4 text-center">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <h5 class="font-weight-bold mb-0 d-block">1</h5>
                                <small class="text-muted"><i class="fas fa-image mr-1"></i>Historias</small>
                            </li>
                            <li class="list-inline-item">
                                <h5 class="font-weight-bold mb-0 d-block">12,545</h5>
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
                                <a href="https://open.spotify.com/user/u7npaqsbd594llnradtp6ndj6?si=52443eb775c84f11" target="_blank"><img class="social"  src="images/spotify.png" alt="spotify"></a>
                                <a href="https://twitter.com/dftmono" target="_blank"><img class="social"  src="images/x.svg" alt="twitter"></a>
                                <!-- <a href="https://www.goodreads.com/user/show/33060991-aftxescilx" target="_blank"><img class="social"  src="images/goodreads.png" alt="goodreads"></a> -->
                            </div>
                        </div>

                       
                    </div>
                    <div class="col-md-8">
                        <div class="position-sticky" style="top: 2rem;">
                            
                            <div class="p-4 mb-3 bg-light rounded">
                                <h2 class="">Historias</h2>                   
                                <div class="container marketing">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="#"><img class="portada" src="images/1.png" alt=""></a>
                                        </div>
                                       
                                    </div>
                                </div>  
                            </div>
                            <div class="p-4 mb-3 bg-light rounded">
                                <h2 class="">Recomendaciones</h2>                   
                                <div class="container marketing">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="#"><img class="portada" src="images/5.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="#"><img class="portada" src="images/6.png" alt=""></a>
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
<script>
  const followButton = document.getElementById('followButton');

  followButton.addEventListener('click', function () {
    if (followButton.textContent === 'Siguiendo') {
      followButton.textContent = 'Seguir';
    } else {
      followButton.textContent = 'Siguiendo';
    }
  });
</script>
