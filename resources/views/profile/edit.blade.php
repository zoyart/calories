@extends('layouts.layout')

@section('head-title')
    Главная
@endsection


@section('content')
    <div class="container">
        <div class="edit__data">
            <form action="{{ route('profile.update') }}" method="post">
                @csrf
                @method('put')
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text" value="{{ $user->name }}" aria-label="default input example"
                           name="name" id="name">
                </div>
                <div>
                    <label for="purpose" class="form-label">Purpose</label>
                    <input class="form-control" type="text" value="{{ $user->purpose }}"
                           aria-label="default input example"
                           name="purpose" id="purpose">
                </div>
                <div>
                    <label for="weight" class="form-label">Weight</label>
                    <input class="form-control" type="text" value="{{ $user->weight }}"
                           aria-label="default input example"
                           name="weight" id="weight">
                </div>
                <button type="submit" class="btn btn-outline-success mt-3">Обновить</button>
            </form>
        </div>
    </div>

@endsection
