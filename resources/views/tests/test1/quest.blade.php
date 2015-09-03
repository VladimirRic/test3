@extends('layouts.master')

@section('title', 'Приветствуем')

@section('content')
    <form class="form-horizontal" role="form" method="POST" action="/">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <h1>Вопрос №{{ $num }}</h1>
        <div class="row">
            @if ($info!='')
                <div class="center-block" style="width: 50%; text-align: center;">
                    {{$info}}
                </div>
            @endif
            <div class="form-group">
                <div class="col-md-3">
                    {{ $var1 }}
                </div>
                <div class="col-md-1">
                    <input type="radio" name="answer" value="6">
                </div>
                <div class="col-md-1">
                    <input type="radio" name="answer" value="5">
                </div>
                <div class="col-md-1">
                    <input type="radio" name="answer" value="4">
                </div>
                <div class="col-md-1">
                    <input type="radio" name="answer" value="3">
                </div>
                <div class="col-md-1">
                    <input type="radio" name="answer" value="2">
                </div>
                <div class="col-md-1">
                    <input type="radio" name="answer" value="1">
                </div>
                <div class="col-md-3">
                    {{ $var2 }}
                </div>
            </div>
        </div>
        <div class="form-group" style="text-align: right;">
            <button class="btn btn-primary" type="submit" style="margin-right: 15px;">Продолжить</button>
        </div>
    </form>
@endsection