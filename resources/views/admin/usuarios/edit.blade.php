@extends('layouts.admin')

@section('content')

<div class="row">
    <h1>ACTUALIZACIÓN DE DATOS DEL USUARIO</h1>
</div>
<hr>
<div class="col-md-6">
    <div class="card card-outline card-success">
        <div class="card-header">
            <h3 class="card-title">Tabla de datos</h3>
        </div> <!-- /.card-header -->
        <div class="card-body">
            <div class="card-body">
                <!-- AQUI VA EL CONTENIDO -->
                <form action="{{url('/admin/usuarios', $usuario->id)}}" method="post">
                    <!--begin::Body-->
                    {{ csrf_field() }}
                    @method('PUT')

                    <div class="card-body">
                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                value="{{ $usuario->name }}" required>
                        </div>

                        <div class=" mb-3"> <label for="exampleInputEmail1" class="form-label">Correo</label>
                            <input id="email" type="email"
                                class="form-control bg-light @error('email') is-invalid @enderror" name="email"
                                value="{{ $usuario->email }}" placeholder="Correo" autofocus required>
                            @error('email')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-3"> <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                required>
                            @error('password')
                            <small style=" color: red">{{$message}}</small>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">Confirmar Contraseña</label>
                            <div class="mb-3">
                                <input id="password-confirmation" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                        </div>



                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <a href="{{url('/admin/usuarios')}}" class="btn btn-danger">Cancelar</a>
                        <button type="submit" class="btn btn-success"><i class="bi bi-arrow-repeat"></i>
                            Actualizar</button>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
        </div> <!-- /.card-body -->
    </div> <!-- /.card -->
</div> <!-- /.col -->





@endsection