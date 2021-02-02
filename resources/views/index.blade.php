<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('includes.head')
</head>
<body >
  @include('layouts.menu')
  <div class="column is-12" id="foto_index"></div>
    <section class="section">
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-three-quarters">
            <article class="message" id="panel">
              <h1><strong>Primer EP</strong></h1>
              <p>
                Nos encontramos preparando nuestro primer EP de estudio con Alfre Camarote a los mandos de la producción.
              </p>
              <img src="/images/skaffolding_logo.png">
              <p>
                Temazos como 'Descalzo', 'Tormento de Rosas'
                o los temas inéditos 'Punto de (no) retorno', 'Barrio Lunar' y '¿Qué no valgo!', harán las delicias
                de los amantes de la <strong>#RumbaTrepidante</strong>
              </p>
            </article>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>
<script src="{{ asset('js/app.js') }}"></script>
