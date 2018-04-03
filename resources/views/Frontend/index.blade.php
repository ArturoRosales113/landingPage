@extends('Layouts.Frontend.app')
@section('body_class')
signup-page
@endsection
@section('content')
 <div class="page-header section-image">
    <div class="page-header-image" style="background-image:url('{{url('img/landing_background_hd.jpg')}}')"></div>
    <div class="content">

     <div class="container">
      @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li style="color:#fff;">{{ $error }}</li>
          @endforeach
      </ul>
  </div>
 @endif
           <div class="row">
               <div class="col-xs-12 col-lg-8 ml-auto mr-auto">

                 <h2>¡Participa cada mes para ganar un <br> <strong>Certificado de $500.00!</strong></h2>
                 <p class="description text-justify">
                  El ganador será quien más tickets registre durante el mes y se anunciará los primeros días del mes posterior.
                  Registra tus tickets de consumo aquí.
                  <br><br>
                  En caso de ganar, recibirás un correo con información para canjear tu certificado.
                 </p>
                 <h5>¡Gracias por preferir <a href="http://www.ilveneziano.com.mx">Il Veneziano!</a></h5>
                 <div class="row mt-5 mb-5">

                  <div class="col-xs-6 col-lg-8 offset-lg-2">
                   <h6 class="text-left">Condiciones: </h6>
                   <ul class="text-left">
                    <li>No acumulable con otras promociones.</li>
                    <li>No incluye el servicio.</li>
                    <li>Utilizable sólo en una visita.</li>
                    <li>Válido durante el mes en el que se entrega.</li>
                   </ul>
                  </div>
                 </div>
               </div>
               <div class="col-xs-12 col-lg-4 mr-auto">

                   <div class="card card-signup">
                       <div class="card-body">
                        <h4 class="card-title text-center">Registrar Ticket</h4>
                         {!! Form::open(['route' => ['front.subscribe'], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                         <h6 class="font-weight-bold text-dark text-left">Nombre</h6>
                         <div class="input-group">

                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                          </div>
                          {!!Form::text('name',null,array('class' => 'form-control', 'placeholder' => 'Nombre'))!!}
                         </div>
                           <h6 class="font-weight-bold text-dark text-left">Correo</h6>
                         <div class="input-group">
                          <div class="input-group-prepend">
                           <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                          </div>
                          {!!Form::email('email',null,array('class' => 'form-control', 'placeholder' => 'email'))!!}
                         </div>
                           <h6 class="font-weight-bold text-dark text-left">No. de ticket</h6>
                         <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="now-ui-icons education_agenda-bookmark"></i></span>
                          </div>
                          {!!Form::text('ticket',null,array('class' => 'form-control', 'placeholder' => 'ticket'))!!}
                          </div>
                          <div class="input-group">

                          </div>
                          <div class="form-check text-left">
                  								<label class="form-check-label">
                  									{!!Form::checkbox('privacy', 'accepted', false,array('class' => 'form-check-input'))!!}
                  									<span class="form-check-sign"></span>
                  									He leído el <a href="#">Aviso de Privacidad</a>.
                  								</label>

                  							</div>
                         <div class="form-check  text-left">
                          <label class="form-check-label">
                           {!!Form::checkbox('add_mail', 'accepted', true,array('class' => 'form-check-input'))!!}
                           <span class="form-check-sign"></span>
                           Añadirme al newsletter
                          </label>
                        </div>
                          <div class="input-group">
                           {!! Form::submit('Enviar',array('class' => 'btn btn-lg btn-primary mx-auto')) !!}
                          </div>
                        {!! Form::close() !!}
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>


    <footer class="footer ">


    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        Aviso de Privacidad
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright">
            © <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script>document.write(new Date().getFullYear())</script>, Diseñado por <a href="http://www.fireboy.com.mx" target="_blank">Fireboy</a>
        </div>
    </div>


</footer>

</div>
@endsection
