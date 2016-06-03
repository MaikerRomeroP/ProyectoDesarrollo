<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/css/custom.css" rel="stylesheet">
    
  </head>

  <body style="background:#F7F7F7;">
    <div class="">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>

      <div id="wrapper">
        <div id="login" class="well form">
          <section class="login_content">
            {!! Form::open(['route' => 'login.ingresar', 'method' => 'POST', 'role' => 'form']) !!}
              <h1>Iniciar Sesi&oacute;n</h1>
              <div>
                {!!Form::email('email', null , ['class' => 'form-control', 'placeholder' => 'Email', 'required'])!!}
              </div>
              <div>
                {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña', 'required'])!!}
              </div>
              <div>
                <button class="btn btn-info btn-block"> Ingresar</button>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
              </div>
            {!! Form::close() !!}
          </section>
          <p class="text-danger">
            {!! Session::get('mensaje')!!}
          </p>
        </div>
      </div>
    </div>
  </body>
</html>