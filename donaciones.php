<!DOCTYPE html>
<?php
    include ('header.html');
?>
<html>
    <body>
        <main class="container py-5">   
            <h1 class="mt-5">Donaciones</h1>
            <div class="container py-4">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active custom-button" id="nav-todo-tab" data-bs-toggle="tab" data-bs-target="#nav-current" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Actuales</button>
                        <button class="nav-link custom-button" id="nav-archive-tab" data-bs-toggle="tab" data-bs-target="#nav-past" type="button" role="tab" aria-controls="nav-archive" aria-selected="false">Anteriores</button>
                    </div>
                </nav>
            </div>
            
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-current" role="tabpanel" aria-labelledby="nav-todo-tab">
                    <div class="row align-items-md-stretch">
                        <div class="col-md-6" id="donacion">
                            <div class="p-5 bg-light border rounded-3 position-relative ">
                                <div class="d-flex align-items-center">
                                <a type="button" class="btn-close position-absolute top-0 end-0" style="margin-top: 15px;margin-right: 15px;" disabled aria-label="Close" data-bs-toggle="modal" data-bs-target="#confirmationModal"></a>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <a href="#"><img class="portada" src="images/icon1.jpg" alt="" style="border-radius: 100%"></a>
                                    </div>
                                    <div style="margin-left: 25px;">
                                        <h2>Nombre</h2>
                                        <p class="" style="">@xxxxx</p>
                                    </div>
                                    <div style="margin-left: 25px;">
                                        <button class="btn btn-outline-secondary" type="button">Configuración</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" id="donacion2">
                            <div class=" p-5 bg-light border rounded-3 position-relative ">
                                <div class="d-flex align-items-center">
                                <a type="button" class="btn-close position-absolute top-0 end-0" style="margin-top: 15px;margin-right: 15px;" disabled aria-label="Close" data-bs-toggle="modal" data-bs-target="#confirmationModal"></a>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <a href="#"><img class="portada" src="images/icon4.jpg" alt="" style="border-radius: 100%"></a>
                                    </div>
                                    <div style="margin-left: 25px;">
                                        <h2>Nombre</h2>
                                        <p class="" style="">@xxxxx</p>
                                    </div>
                                    <div style="margin-left: 25px;">
                                        <button class="btn btn-outline-secondary" type="button">Configuración</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-past" role="tabpanel" aria-labelledby="nav-archive-tab">
                    <div class="container marketing">
                        <div class="row">
                            <div class="col-md-6" id="donacion3">
                                <div class="p-5 bg-light border rounded-3 position-relative ">
                                    <div class="d-flex align-items-center">
                                    <a type="button" class="btn-close position-absolute top-0 end-0" style="margin-top: 15px;margin-right: 15px;" disabled aria-label="Close" data-bs-toggle="modal" data-bs-target="#confirmationModal"></a>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <a href="#"><img class="portada" src="images/icon3.jpg" alt="" style="border-radius: 100%"></a>
                                        </div>
                                        <div style="margin-left: 25px;">
                                            <h2>Nombre</h2>
                                            <p class="" style="">@xxxxx</p>
                                        </div>
                                        <div style="margin-left: 25px;">
                                            <button class="btn btn-outline-secondary" type="button">Configuración</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>
                </div>
            </div>
        </main>
         <!-- Modal de confirmación -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmationModalLabel">Confirmación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Está seguro de que desea eliminar esta donación?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="confirmDelete">Eliminar</button>
      </div>
    </div>
  </div>
</div>
  
    </body>
</html>
<script>
  // Evento para realizar la acción de eliminación después de la confirmación
  document.getElementById('confirmDelete').addEventListener('click', function () {
    // Cierra el modal
    var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    confirmationModal.hide();

    // Oculta el elemento específico que deseas eliminar
    var historiaDiv = document.getElementById('donacion');
    historiaDiv.style.display = 'none';
  });

  // Evento para cerrar el modal cuando se presiona "Cancelar"
  document.querySelector('[data-bs-dismiss="modal"]').addEventListener('click', function () {
    // Cierra el modal
    var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    confirmationModal.hide();
  });
</script> 
<script>
  // Evento para realizar la acción de eliminación después de la confirmación
  document.getElementById('confirmDelete').addEventListener('click', function () {
    // Cierra el modal
    var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    confirmationModal.hide();

    // Oculta el elemento específico que deseas eliminar
    var historiaDiv = document.getElementById('donacion2');
    historiaDiv.style.display = 'none';
  });

  // Evento para cerrar el modal cuando se presiona "Cancelar"
  document.querySelector('[data-bs-dismiss="modal"]').addEventListener('click', function () {
    // Cierra el modal
    var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    confirmationModal.hide();
  });
</script> 
<script>
  // Evento para realizar la acción de eliminación después de la confirmación
  document.getElementById('confirmDelete').addEventListener('click', function () {
    // Cierra el modal
    var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    confirmationModal.hide();

    // Oculta el elemento específico que deseas eliminar
    var historiaDiv = document.getElementById('donacion3');
    historiaDiv.style.display = 'none';
  });

  // Evento para cerrar el modal cuando se presiona "Cancelar"
  document.querySelector('[data-bs-dismiss="modal"]').addEventListener('click', function () {
    // Cierra el modal
    var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    confirmationModal.hide();
  });
</script> 
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