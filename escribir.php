<!DOCTYPE html>
<?php
    include ('header.html');
?>
<html>
    <body>
        <main class="container py-5">   
            <h1 class="mt-5">Mis historias</h1>
            <button class="btn btn-lg btn-tag" type="button">Nueva historia</button>

            <div class="row align-items-md-stretch py-5" id="historia">
                <div class="col-md-6">
                    <div class="p-5 bg-light border rounded-3 position-relative ">
                        <div class="d-flex align-items-center">
                            <a type="button" class="btn-close position-absolute top-0 end-0" style="margin-top: 15px;margin-right: 15px;" disabled aria-label="Close" data-bs-toggle="modal" data-bs-target="#confirmationModal"></a>
                            <div class="col-lg-3 col-md-3 col-sm-6" id="postada">
                                <a href="#"><img class="portada" src="images/7.png" alt=""></a>
                            </div>
                            <div style="margin-left: 25px;">
                                <p class="" style="">Archivada</p>

                                <h2>Nombre</h2>
                                <p class="" style="">3 capítulos - Solo yo</p>

                            </div>
                            <div style="margin-left: 25px;">
                                <button class="btn btn-outline-secondary" type="button">Configuración</button>
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
        ¿Está seguro de que desea eliminar esta historia?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="confirmDelete">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<script>
  // Evento para realizar la acción de eliminación después de la confirmación
  document.getElementById('confirmDelete').addEventListener('click', function () {
    // Cierra el modal
    var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    confirmationModal.hide();

    // Oculta el elemento específico que deseas eliminar
    var historiaDiv = document.getElementById('historia');
    historiaDiv.style.display = 'none';
  });

  // Evento para cerrar el modal cuando se presiona "Cancelar"
  document.querySelector('[data-bs-dismiss="modal"]').addEventListener('click', function () {
    // Cierra el modal
    var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    confirmationModal.hide();
  });
</script>

    </body>

    

</html>
