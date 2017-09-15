@extends('layouts.app')

@section('content')
    <h1>Liste des posts</h1>

    @foreach($posts as $article)
        <h2>
            <a href="{{route('PostsShow', ['id'=>$article->id ])}}">{{$article->title}}</a>
        </h2>
        <div>Créé par <strong>{{$article->user->username}}</strong>, le {{$article->created_at}}</div>
        <div>{{$article->content}}</div>
        <h3>Réponses</h3>
        @foreach($article->answers as $reponse)
            <div>
                Le {{$reponse->created_at}}, <strong>{{$reponse->user->username}} : </strong>{{$reponse->content}}
            </div>

        @endforeach()
    @endforeach()

@endsection
