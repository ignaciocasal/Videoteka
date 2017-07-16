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
                            <img class="img-responsive" src="{{ $movie->poster }}">
                        @else
                            <img class="img-responsive" src="https://lightning.od-cdn.com/17.0.1-build-1201-master/public/img/no-cover_en_US.jpg"> {{--Imagen por defecto (imagen no disponible)--}}
                        @endif
                        {{--<img class="img-responsive center-block" src="{{ $movie->genres  }}" alt="{{ $image->name }}">--}}
                    </div>
                    <!-- Movie's info -->
                    <div class="content-info">
                        <p style="font-size: 18px;"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $movie->duration." min"}} </p>
                        <p style="font-size: 18px;"><span style="font-size: 10px;" class="label label-default">PG</span> {{ $movie->parental_guide->name }} </p>

                        <div class="rent">
                            <a href="#" class="btn btn-primary btn-group-lg" role="button">{{ __('messages.rent') }} <span class="glyphicon glyphicon-usd"></span></a>
                        </div>
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

                <br>
                <hr>


            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                @include('layouts.aside')

            </div>

        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            {{--@include('layouts.footer')--}}
        </footer>

    </div>
    <!-- /.container -->
@endsection