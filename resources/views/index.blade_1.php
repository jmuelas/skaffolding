<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body >
    @include('layouts.menu')
    <section class="section">
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-half">
            <article class="message" id="noticias">
              <div class="message-header">
                <p>Noticias</p>
              </div>
              <div class="message-body">
                  <h3><strong><u>Primer EP</u></strong></h3>
                  <p>
                    Nos encontramos ensayando para la 
                    preparación de nuestro primer EP de estudio.
                  </p>
                  <p>
                    Temazos como 'Descalzo', 'Summer Time', 'Tormento de Rosas'
                    o los temas inéditos 'Punto de (no) retorno' y '¿Qué no valgo!', harán las delicias 
                    de los amantes de la <strong>#RumbaTrepidante</strong>
                  </p>
                  <br>
                  <p><small><i>15/01/2020</i></small></p>
                  <hr>
                  <h3><strong><u>Fin de gira en Errekaleor</u></strong></h3>
                  <p>
                    Estuvimos cerrando gira en el barrio
                    autogestionado de <strong>Errekaleor</strong>, 
                    en la ciudad de Vitoria-Gasteiz.
                  </p>
                  <br>
                  <p><small><i>01/11/2019</i></small></p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  
  </body>
</html>
<script src="{{ asset('js/app.js') }}"></script>