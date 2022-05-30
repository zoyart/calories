@extends('layouts.layout') // Тут мы наследуем наш шаблон layout 

@section('head-title')
    Заголовок у вкладки
@endsection


@section('content')
    Тут идёт весь контент страницы
    <button>кнопка</button>
@endsection

<!-- Таким бразом мы можем изменить header и он поменяется везде, где наследован шаблон "layout". А так же-->