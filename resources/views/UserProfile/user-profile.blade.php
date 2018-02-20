@extends('layouts.site')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="text-center justify-content-center">
                <h1 class="header-home-page"><p>Имя пользователя:{{ $user->name }}</p></h1>
                <h1 class="header-home-page">Мыло:{{ $user->email }}</h1>
                <a class="btn btn-info btn-sm" role="button"
                   href="{{ route('change',['id' => $user->id]) }}">Редактировать личные данные</a>
            </div>
        </div>
    </div>

@endsection