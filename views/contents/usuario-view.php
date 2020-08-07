
<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Administracion de Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=URL_BASE?>home">Inicio</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">

<div class="card">
              <div class="card-header">              
                        <h1 class="card-title">Usuarios      <button class="btn btn-success m-1"  id="btnagregar"data-toggle="modal" data-target="#modalAgregarUsuario"><i class="fa fa-plus-circle"></i>Agregar</button></h1>
              </div>              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Perfil</th>
                    <th>Foto</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td>X</td>
                  </tr>                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Perfil</th>
                    <th>Foto</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

</section>
</div>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->
<div class="modal fade" id="modalAgregarUsuario">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar Usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="" role="form" method="POST">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="ingresar su nombre" name="usuario_nombre_new">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="ingresar su usuario" name="usuario_usuario_new>">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="ingresar su clave" name="usuario_clave_new>">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-users"></i></span>
                  </div>
                  <select class="form-control"  name="usuario_perfil_new>">
                      <option value="">-Seleccione perfil-</option>
                      <option value="Administrador">Administrador</option>
                      <option value="Supervisor">Supervisor</option>
                      <option value="Usuario">Usuario</option>
                  </select>
                </div>
                <div class="input-group mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card w-75">
                                <div class="card-header"> <h3 class="card-title">Subir Foto</h3></div>
                                <div class="card-body">
                                    <input type="file" class="custom-file-input" name="usuario_foto_new" id="imagen_usuario">
                                    <label class="custom-file-label" for="imagen_usuario">Buscar foto...</label>
                                    <p class="help-block">Peso máximo de la foto 2MB</p>
                                    <img src="<?=URL_BASE?>views/assets/img/anonymous.png" class="img-thumbnail previsualizar" width="100px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>

            
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default " data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary pull-left">Guardar Cambios</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<!--=====================================
MODAL EDITAR USUARIO
======================================-->

