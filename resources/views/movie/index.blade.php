@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Entries Column -->
            <div class="col-md-8">

                <!-- Title -->
                <h1>{{ $movie->title }}</h1>

                <!-- Genres -->
                <p class="lead">
                    @foreach($movie->genres as $genre)
                        <span style="font-size: 15px;" class="label label-default">{{ $genre->name }}</span>
                    @endforeach
                </p>

                <hr>
                <div class="container">
                    <!-- Movie's poster -->
                    <div class="content-img">
                        @if($movie->poster)
                            <img width="270" class="img-responsive" src="{{ $movie->poster }}">
                        @else
                            <img width="270" class="img-responsive" src="https://lightning.od-cdn.com/17.0.1-build-1201-master/public/img/no-cover_en_US.jpg"> {{--Imagen por defecto (imagen no disponible)--}}
                        @endif
                        {{--<img class="img-responsive center-block" src="{{ $movie->genres  }}" alt="{{ $image->name }}">--}}
                    </div>
                    <!-- Movie's info -->
                    <div class="content-info">
                        <p style="font-size: 18px;"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $movie->duration." min"}} </p>
                        <p style="font-size: 18px;"><span style="font-size: 10px;" class="label label-default">PG</span> {{ $movie->parental_guide->name }} </p>
                        @if ($movie->availables <= 0)
                          <p style="font-size: 18px;"><i class="fa fa-clock-o" aria-hidden="true"></i> No hay copia disponible para alquilar </p>
                        @else <!--Si hay peliculas disponibles , se checkea que esté loggeado para mostrar botón de ALQUILAR-->
                          @if(Auth::user())
                            @if (Auth::user()->type == 'member') <!--SI ESTA LOGGEADO se checkea que botón se coloca-->
                            <a href="{{ route('rents.stores', $movie->id) }}" onClick="return confirm('¿Desea alquilar {{$movie->title}}?')" class="btn btn-primary btn-sm" role="button">{{ __('messages.rent') }} <span class="glyphicon glyphicon-usd"></span></a>
                            @else
                            <a href="{{ route('rents.create', $movie->id) }}" class="btn btn-primary btn-sm" role="button">{{ __('messages.rent') }} <span class="glyphicon glyphicon-usd"></span></a>
                            @endif
                          @endif
                      @endif
                    </div>
                </div>

                <br>
                <br>

                <!-- Trailer -->
                <!-- 16:9 aspect ratio -->
                @if(isset($movie->trailer))
                    <h3>Trailer</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ $movie->trailer }}" allowfullscreen></iframe>
                    </div>
                @endif

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                @include('layouts.aside')

            </div>

        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            @include('layouts.footer')
        </footer>

    </div>
    <!-- /.container -->
@endsection
