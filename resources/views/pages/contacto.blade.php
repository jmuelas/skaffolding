<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('includes.head')
</head>
<body >
  @include('layouts.menu')
    <section class="section" id="media-section">
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-three-quarters">
            <article class="message" id="panel">
              <h1><strong>Contacto</strong></h1>
              <p>
              Rellena el siguiente formulario, o contáctanos a través del email <strong><a href="mailto:skaffoldingrumba@gmail.com">skaffoldingrumba@gmail.com</a></strong>
              </p>
              <div class="content" id="form-contacto">
                <div class="field">
                  <label class="label">Nombre</label>
                  <div class="control has-icons-left has-icons-right">
                    <input class="input" type="text" placeholder="Nombre">
                    <span class="icon is-small is-left">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Email</label>
                  <div class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="Introduce un email">
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Mensaje</label>
                  <div class="control">
                    <textarea class="textarea" placeholder="Mensaje"></textarea>
                  </div>
                </div>
                <div class="field is-grouped">
                  <div class="control">
                    <button class="button is-link">Enviar</button>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  
  </body>
</html>
<script src="{{ asset('js/app.js') }}"></script>