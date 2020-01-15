<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('includes.head')
</head>
<body >
  @include('layouts.menu')
  <div class="column is-12" id="foto_bio"></div>
    <section class="section">
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-three-quarters">
            <article class="message" id="panel">
              <h1><strong>Biografía Skaffolding</strong></h1>
              <p>
               Skaffolding somos un grupo madrileño de #RumbaTrepidante,
               estilo que mezcla rumba con ska/punk con letras cargadas
               de historias y compromiso social. 
              </p>
              <p>
              Cerramos 2018 con unos 21 conciertos, y en este 2019 hemos
              llegado hasta los 23, tocando en diferentes espacios de Madrid
              como el ES La Salamandra de Moratalaz, Mercados municipales,
              fiestas populares y eventos de distintas asociaciones,
              y habiendo salido de Madrid en 4 ocasiones para tocar en Pamplona,
              en un pueblecito en la provincia de Cuenca (Villaconejos de Trabaque),
              en Lekeitio y en Vitoria.
              </p>
              <p>
              Nuestra formación esta compuesta por dos chicas y dos chicos
              en la que contamos con un cajón, guitarra flamenca, bajo
              y trombón. Tenemos un repertorio de 1 hora y 15 minutos.
              </p>
            </article>
          </div>
        </div>
      </div>
    </section>
  
  </body>
</html>
<script src="{{ asset('js/app.js') }}"></script>