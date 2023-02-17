@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Cambiar Contraseña</h4>
                            <form method="post" action="{{ route('update.password') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="oldpassword" class="col-sm-2 col-form-label">Contraseña Anterior</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="oldpassword" id="oldpassword">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="newpassword" class="col-sm-2 col-form-label">Nueva Contraseña</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="newpassword" id="newpassword">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="confirm_password" class="col-sm-2 col-form-label">Confirmar Nueva Contraseña</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="confirm_password" id="confirm_password">
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Cambiar Contraseña">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

@endsection

