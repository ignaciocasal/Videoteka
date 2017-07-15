<!-- Search Well -->
<div class="well">
    <h4>{{ __('messages.search') }}</h4>
    {{--<div class="input-group">
        <input type="text" class="form-control">
        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
    </div>
    <!-- /.input-group -->--}}
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
                {{--<a href="">{{ $genre->name }}</a>--}}
                <a href="{{ route('home.search.movies.from.genre', $genre->name) }}">{{ $genre->name }}</a>
                <span class="badge">{{ $genre->movies->count() }}</span>
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

@section('js')
    {{--<script>
        $(document).ready(function(){
            // add button style
            $(".poll_bar").addClass("btn btn-default");
            // Add button style with alignment to left with margin.
            $(".poll_bar").css({"text-align":"left","margin":"5px"});

            //loop
            $(".poll_bar").each(
                function(i){
                    //get poll value
                    var bar_width = (parseFloat($(".poll_val").eq(i).text())/1.3).toString();
                    bar_width = bar_width + "%"; //add percentage sign.
                    //set bar button width as per poll value mention in span.
                    $(".poll_bar").eq(i).width(bar_width);

                    //Define rules.
                    var bar_width_rule = parseFloat($(".poll_val").eq(i).text());
                    if(bar_width_rule >= 50){$(".poll_bar").eq(i).addClass("btn btn-sm btn-success")}
                    if(bar_width_rule <  50){$(".poll_bar").eq(i).addClass("btn btn-sm btn-warning")}
                    if(bar_width_rule <= 10){$(".poll_bar").eq(i).addClass("btn btn-sm btn-danger")}
                });
        });
    </script>--}}
@endsection

