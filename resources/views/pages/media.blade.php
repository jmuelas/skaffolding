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
              <h1><strong>Skaffolding - Descalzo</strong></h1>
              <br>  
              <iframe width="560" height="315" src="https://www.youtube.com/embed/0UPS9d_QWss" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <br>
            </article>
            <article class="message" id="panel">
              <h1><strong>Skaffolding en Spotify</strong></h1>
              <br>  
              <iframe src="https://open.spotify.com/embed/artist/4lnhnvgRMvJXjOrXuDD7Uk" width="300" height="240" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
              <br>
            </article>
          </div>
        </div>
      </div>
    </section>
  
  </body>
</html>
<script src="{{ asset('js/app.js') }}"></script>