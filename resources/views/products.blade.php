@extends('layouts.schema')
@section('name')
@endsection
@section('title')
Productos
@endsection
@section('content')
<!-- Informacion introductoria -->
<div class="section">
    <section class="about">
        <div class="img">
            <img src="{{ asset('inicio/img/1.jpg') }}" alt="casco">
        </div>
        <div class="cont">
            <h2 class="heading">Cascos para niños</h2>
            <p class="txt">
                Si estás buscando los mejores cascos a medida en Valencia, los encontrarás con Ortopedia Velásquez.
                Contamos con un amplia experiencia ofreciendo atención personalizada y asesoramiento profesional.
                Disponemos de un amplio catálogo de productos de primera calidad, entre ellos destacamos los cascos de
                ortopedia infantil hechos totalmente a medida. Los cascos que ofrecemos están elaborados a partir de un
                escáner
                3D del cráneo del bebé, y su función es la de corregir la forma del cráneo y ayudarlo a desarrollarse
                con normalidad.
            </p>
            <br>
            <a href="#" class="btn btn3">MAS INFO</a>
        </div>
    </section>
</div>

<!-- Productos -->
<div class="section">
    <section class="prod">
        <h2 class="heading">Productos Disponibles</h2>
        <div class="container">
            @foreach ($products as $p)
                <div class="prodBx">
                    <div>
                        <a href="#">
                            <img src="/images/products/{{ $p->photo }}" >
                        </a>
                        <h2>{{ $p->name }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
