@extends('template')
@section('content')
    <div class="row">
        <h2>Últimos posts</h2>

        <!--Loop-->
        @foreach($posts as $post)
            <div class="col-md-3">
                <div class="post">
                    <h4>{{$post['titulo']}}</h4>
                    <img src="{{$post['imagem']}}" alt="">
                    <p>
                        {{$post['texto']}}
                    </p>
                    <a href="">Saiba mais</a>
                </div>
            </div>
        @endforeach
        <!--/loop-->

    </div>
@stop