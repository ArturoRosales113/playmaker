@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
@include('users.partials.header', [
'title' => __('Hola') . ' '. $player->user->name,
'description' => __('Esta es tu ficha de jugador'),
'class' => 'col-lg-12',
'portada' => asset('images/bg/players.png')
])

<div class="container-fluid mt-5">
    <div class="row">

        <div class="col-xl-5">
            <div class="card card-profile shadow">

                        <div class="tarjeta" style="background: url({{ $player->icon_path == null ? asset('argon/img/theme/team-4-800x800.jpg') :asset( $player->icon_path) }}) #fff;">
                            <span class="rounded-circle">
                                &nbsp;
                            </span>

                </div>
                <!--
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-info mr-4">{{ __('Connect') }}</a>
                            <a href="#" class="btn btn-sm btn-default float-right">{{ __('Message') }}</a>
                        </div>
                    </div>
                -->
                <div class="card-body pt-md-4 ">
                    <div class="row ">
                        <div class="col-12">
                                
                            <div class="itemplayer">
                                <div class="number">
                                    <span class="numb-number">{{ $player->numero }}</span>
                                </div> 
                                <div class="playerinfo">
                                    <span class="heading">{{ $player->user->name }}</span> <br/>  
                                    <span class="alias">{{ $player->apodo }}</span></span>&nbsp;//&nbsp;
                                    <span>{{ $player->posicion }}</span>
                                </div>
                            </div>
                   
                            <div class="col-12 escudo-img">
                                <img alt="" class="img-fluid" src="{{ $player->team->icon_path == null ? asset('argon/img/theme/team-4-800x800.jpg') :asset( $player->team->icon_path) }}">
                            </div>
                            <p style="text-align: center;"><span class="heading">{{ $player->team->name }}</span></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7 ">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="yellow">Estadisticas Individuales</h3>
                        </div>
                    </div>
                </div>
                <!-- Projects table -->
                <table class="table align-items-center estadisticas">
                    <!--
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" data="icon_path">
                                &nbsp;
                            </th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Anotaciones</th>
                        </tr>
                    </thead>
                    -->
                    <tbody>
                        <tr>
                            <th scope="row">
                                Puntos
                            </th>
                            <td class="right">
                                50
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Asistencias
                            </th>
                            <td class="right">
                                55
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Rebotes
                            </th>
                            <td class="right">
                                23
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Robos
                            </th>
                            <td class="right">
                                55
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>



            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="yellow">Información personal</h3>
                        </div>
                    </div>
                </div>
                <!-- Projects table -->
                <table class="table align-items-center estadisticas">
                    <!--
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" data="icon_path">
                                &nbsp;
                            </th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Anotaciones</th>
                        </tr>
                    </thead>
                    -->
                    <tbody>
                        <tr>
                            <th scope="row">
                                Total de puntos logrados
                            </th>
                            <td class="right">
                                50
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Triples dobles
                            </th>
                            <td class="right">
                                55
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Asistencias
                            </th>
                            <td class="right">
                                23
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Faltas
                            </th>
                            <td class="right">
                                5
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    
    @include('layouts.footers.auth')
</div>
@endsection
