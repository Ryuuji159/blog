@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('meta-description')
    <meta name="autor" content="Daniel Cortés"/>
    <meta name="description" content="Hola, soy un estudiante de ingeniería en informática al que le gusta programar, jugar videojuegos cuando puede y escuchar música, mucha, mucha música.">
@endsection

@section('title')
    <title>About - Daniel Cortes</title>
@endsection

@section('content')
        <article>
            <header>
                <h1 class="post-title">About</h1>
            </header>
            <p>Hola, soy un estudiante de ingeniería en informática al que le gusta programar, jugar videojuegos cuando puede y escuchar música, mucha, mucha música.</p>
            <p>Me gusta aprender nuevos lenguajes de programación pero generalmente estoy seco de ideas con lo que me cuesta bastante avanzar en lenguajes como C y C++, los que simplemente no se hacer.</p>
            <p>Este blog lo cree principalmente porque quería un proyecto secundario en el que trabajar, que no tuviera tanta importancia y lo hiciera de relax, la idea es publicar snipets de código que generalmente se me olvidan y siempre estoy volviendo a ellos, si en algún momento me emociono quizás publico algo totalmente distinto.</p>
            <p>Para ver los proyectos que he hecho puedes verlos entre <a href="https://github.com/Ryuuji159">Github</a> y <a href="https://git.sr.ht/~skrd159">Source Hut</a>.</p>
            <p>Socialmente me muevo entre <a href="https://twitter.com/skrd159">Twitter</a> y <a href="https://www.reddit.com/user/Ryuuji159">Reddit</a> aunque estoy intentando dejar las redes sociales y ya lo hice totalmente con Facebook.</p>
            <p>Finalmente, si quieres enviarme un correo mi dirección es skrd159@gmail.com</p>
            <p><em>Gracias por venir aquí.<em></p>
        </article>
@endsection
