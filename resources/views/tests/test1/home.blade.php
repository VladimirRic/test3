@extends('layouts.master')

@section('title', 'Приветствуем')

@section('content')
    <form class="form-horizontal" role="form" method="POST" action="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <h1>Приветствуем</h1>
        <p>Прочитайте, пожалуйста, каждую пару утверждений и отметьте крестиком то положение, которое выражает степень Вашей близости к той или иной позиции.</p>
        <p>Давайте договоримся, что мы не будем считать наркотиками сигареты и алкоголь, тогда как клей, бензин, растворитель и т.д. – это наркотики.</p>
        <div class="form-group" style="text-align: right;">
            <button class="btn btn-primary" type="submit" style="margin-right: 15px;">Продолжить</button>
        </div>
    </form>
@endsection