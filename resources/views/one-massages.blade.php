@extends('layouts.app')

@section('title-block'){{$data->subject}}@endsection


@section('content')
    <h1>{{$data->invent}}</h1>  
       <div class="alert alert-info">
           <p> {{$data->name}} </p>
           <p> {{ $data->col }} - {{$data->col * $data->price}}  </p>
           <p> {{$data->message}} </p>
           <p><small> Дата создания - {{ $data->created_at }} </small></p>
           <p><small> Дата обновления - {{ $data->updated_at }} </small></p>
           <a href="{{ route('contact-update', $data->id)}}"><button class="btn btn-primary">Редактировать</button></a>
           <a href="{{ route('contact-delete', $data->id)}}"><button class="btn btn-danger">Удалить</button></a>
    </div> 
@endsection

