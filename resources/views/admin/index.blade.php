@extends('layouts.admin_layout')

@section('head-title')
    Admin home
@endsection


@section('content')

    <div class="content m-5 w-100">
        <div class="row mb-3 fs-2">
            <div class="col">
                Users
            </div>
        </div>
        <div class="row pb-4 ">
            <div class="col">
                <a href="" class="link-dark" style="text-decoration: none;">
                    <div class="card" style=" margin: 0px 20px 20px 0px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $usersCount }}</h5>
                            <p class="card-text">Users</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="" class="link-dark" style="text-decoration: none;">
                    <div class="card" style="margin: 0px 20px 20px 0px;">
                        <div class="card-body text-center">
                            <h5 class="card-title"></h5>
                            <p class="card-text">Employee</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <div class="card" style=" margin: 0px 20px 20px 0px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">0</h5>
                        <p class="card-text">Unpublished</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
