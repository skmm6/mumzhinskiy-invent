@extends('layouts.app')

@section('title-block')Обновление записи@endsection

@section('content')
    <h1>Обновление записи</h1>  



    <form action="{{ route('contact-update-submit', $data->id) }}" method="POST">
        @csrf

        <div class="form-group p-2">
            <label for="invent">Введите инвентарный номер</label>
            <input type="text" name="invent" placeholder="Введите инвентарный номер" id="invent" class="form-control">
        </div>
        <div class="form-group p-2">
            <label for="name">Введите наименование оборудования</label>
            <input type="text" name="name" placeholder="Введите наименование оборудования" id="name" class="form-control">
        </div>
        <div class="form-group p-2">
            <label for="col">Введите количество оборудования</label>
            <input type="text" name="col" placeholder="Введите количество оборудования" id="col" class="form-control">
        </div>
        <div class="form-group p-2">
            <label for="price">Введите цену за 1 шт. в Руб.</label>
            <input type="text" name="price" placeholder="Введите цену за 1 шт. в Руб." id="price" class="form-control">
        </div>
        <div class="form-group p-2">
            <label for="message">Примичание</label>
          <textarea name="message" id="message" placeholder="Примичание" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection




