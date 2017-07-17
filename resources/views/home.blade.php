@extends('layouts.app')

@section('title','Home')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    {{ __('messages.movies') }}
                    <small>
                        @if(isset($genre))
                            {{ $genre->name }}
                        @endif
                    </small>
                </h1>
                {{--<div class="row">--}}
                @if(count($movies)>0)
                    @foreach($movies as $movie)

                        {{--           <i class="fa fa-folder-open-o" aria-hidden="true"></i> <a href="">{{ $movie->genre->name }}</a>
                        <i class="fa fa-folder-open-o" aria-hidden="true"></i> <a href="{{ route('home.search.category', $article->category->name) }}">{{ $article->category->name }}</a>
                        <div class="pull-right">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> <small>{{  $article->created_at->diffForHumans() }} </small>
                        </div>
                        @foreach($article->images as $image)
                        <hr>
                            <img class="img-responsive center-block" src="{{ $movie->poster }}" alt="{{ $movie->title }}">
                        @endforeach
                        <hr>
                        @if(strlen($article->content) < 240)
                            <p>{!! $article->content !!}</p>
                        @else
                            <p>{!! substr($article->content, 0, 240).'...' !!}</p>
                        @endif
                        <a class="btn btn-primary" href="">{{ __('messages.see_more') }} <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a class="btn btn-primary" href="{{ route('home.view.article', $article->slug) }}">{{ __('messages.read_more') }} <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>--}}

                            <div class="singular">
                                <div class="content">
                                    @if($movie->poster)
                                        <img src="{{ $movie->poster }}">
                                    @else
                                        <img src="https://lightning.od-cdn.com/17.0.1-build-1201-master/public/img/no-cover_en_US.jpg"> {{--Imagen por defecto (imagen no disponible)--}}
                                    @endif
                                    <div class="info">
                                        <div class="name">{{ $movie->title }}</div>
                                        <div class="genres">
                                            @foreach($movie->genres as $genre)
                                                {{  "• ".$genre->name }}
                                            @endforeach
                                        </div>
                                        @if (Auth::user() && $movie->availables > 0)
                                            @if (Auth::user()->type == 'admin')
                                            <a href="{{ route('rents.create', $movie->id) }}" class="btn btn-primary btn-sm" role="button">{{ __('messages.rent') }} <span class="glyphicon glyphicon-usd"></span></a>
                                            @endif
                                            @if (Auth::user()->type == 'member')
                                            {!! Form::open(['route'=>'rents.store', 'method'=>'POST']) !!}
                                                <input name="movie_id"  value="{{ $movie->id }}" hidden></input> <!-- Acá se manda el id de la película -->
                                                <input name="user_id"  value="{{ Auth::user()->id }}" hidden></input>
                                                {!! Form::submit('Alquilar',['class'=>'btn btn-primary']) !!}
                                                <!--<a href="#" class="btn btn-primary btn-sm" role="button">{{ __('messages.rent') }} <span class="glyphicon glyphicon-usd"></span></a> -->
                                          {!! Form::close() !!}


                                            @endif
                                        @endif
                                        <a href="{{ route('home.view.movie', $movie->slug) }}" class="btn btn-default btn-sm" role="button">{{ __('messages.see_more') }} <span class="glyphicon glyphicon-chevron-right"></span></a>
                                    </div>
                                </div>
                            </div>

                    @endforeach

                @else
                    <p class="text-center">{{ __('messages.empty_movies') }}</p>
                @endif
                {{--</div>--}}
                <!-- Pager -->
                <div class="text-right">
                    {{ $movies->links() }}
                </div>


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
