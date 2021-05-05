@extends('layouts.app')

@section('title-block')Список оборудования@endsection

@section('content')
    <h1>Список оборудования</h1>  
     {{-- @foreach ($data as $el)
       <div class="alert alert-info">
           <h3> {{ $el->subject }} </h3>
           <p> {{ $el->email }} </p>
           <p><small> {{ $el->created_at }} </small></p>
           <a href="{{ route('contact-date-one', $el->id)}}"><button class="btn btn-warning">Детальнее</button></a>
    </div> 
    @endforeach  --}}

    <div class="container bg-white shadow rounded my-3 py-3">
      <div class="row">
          <div class="col">
              <div class="table-responsive">

                  <table class="table table-striped" id="album-table">
                      <thead>
                          <tr>
                              <th>Инвентарный номер</th>
                              <th>Наименование</th>
                              <th>Дата внесения</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $el)
                        <tr>
                          <th scope="row h5">{{$el->invent}}</th>
                          <td class="h5">{{ $el->name }}</td>
                          <td class="h5">{{ $el->created_at}}</td>
                          <td class="p-2"><a href="{{ route('contact-date-one', $el->id)}}"><button class="btn btn-warning btn-sm">Детальнее</button></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>

              </div>
          </div>
      </div>
  </div>


    {{-- <table class="table">
        <thead>
          <tr>
            <th scope="col">Тема</th>
            <th scope="col">Email</th>
            <th scope="col">Дата создания</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $el)
          <tr>
            <th scope="row h5">{{$el->subject}}</th>
            <td class="h5">{{ $el->email }}</td>
            <td class="h5">{{ $el->created_at}}</td>
            <td class="p-2"><a href="{{ route('contact-date-one', $el->id)}}"><button class="btn btn-warning btn-sm">Детальнее</button></a></td>
          </tr>
          @endforeach
        </tbody>
    
      </table>  --}}

      
    

@endsection

