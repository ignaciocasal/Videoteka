<!-- Search Well -->
<div class="well">
    <h4>{{ __('messages.search') }}</h4>
    <div class="input-group">
        {!!   Form::open(['route' => 'home.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
        <div class="form-group">
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar películas..']) !!}
        </div>
        <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
        {!! Form::close() !!}
    </div>
</div>


<!-- Genres Well -->
<div class="well">
    <h4>{{ __('messages.genres') }}</h4>
    <ul class="list-group">
        @foreach($genres as $genre)
            <li class="list-group-item">
                <a href="{{ route('home.search.movies.from.genre', $genre->name) }}">{{ $genre->name }}</a>
                <span class="badge">{{ $genre->movies->where('availables', '>', 0)->count() }}</span>
            </li>
        @endforeach
    </ul>
</div>


<!-- Side Text-Widget Well -->
{{--
<div class="well">
    <h4>Side Widget Well</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>--}}


