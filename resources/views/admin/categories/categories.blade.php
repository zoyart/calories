@extends('layouts.admin_layout')

@section('head-title')
    Categories
@endsection


@section('content')
    <div class="content m-5 w-100">
        <div class="row mb-3 fs-2">
            <div class="col">
                Categories
            </div>
        </div>
        <div class="row pb-4 ">
            <div class="col">
                <a href="{{ route('admin.recipes.index') }}" class="link-dark" style="text-decoration: none;">
                    <div class="card" style=" margin: 0px 20px 20px 0px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $recipesCount }}</h5>
                            <p class="card-text">Recipes</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.categories.index') }}" class="link-dark" style="text-decoration: none;">
                    <div class="card border-primary" style=" margin: 0px 20px 20px 0px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $categoriesCount }}</h5>
                            <p class="card-text">Categories</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="" class="link-dark" style="text-decoration: none;">
                    <div class="card" style=" margin: 0px 20px 20px 0px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">0</h5>
                            <p class="card-text">Unpublished recipes</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <!-- Button trigger modal -->
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-success me-3" data-bs-toggle="modal"
                            data-bs-target="#create_category">
                        Create category
                    </button>
                    <div class="collapse" id="delete_items">
                        <div class=" d-flex">
                            <button type="button" class="btn btn-outline-danger me-2"
                                    data-bs-toggle="modal" data-bs-target="#delete_category">Delete
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="create_category" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.categories.store') }}" id="create_category_form"
                                      method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Category name</label>
                                        <input class="form-control" type="text" placeholder="Juice"
                                               aria-label="name" name="name" id="name">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button form="create_category_form" type="submit" class="btn btn-outline-success">
                                    Create
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="delete_category" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button form="table_checkbox" type="button" class="btn btn-outline-danger"
                                        id="btn_delete_categories">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="w-100">
                    <input type="text" class="form-control" id="search" placeholder="Categories Search">
                </div>
            </div>
        </div>
        <div class="row pb-4">
            <div class="col">
                <form action="{{ route('admin.categories.edit') }}" method="get" id="table_checkbox">
                    @csrf
                    <table class="table table-borderless" id="table">
                        <thead>
                        <tr>
                            <th scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="select_all">
                                </div>
                            </th>
                            <th scope="col">Category name</th>
                            <th scope="col">Author</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input checkbox" type="checkbox"
                                               value="{{ $category['id'] }}" name="{{ $category['id'] }}"
                                                id="table_checkbox">
                                    </div>
                                </td>
                                <td>
                                    {{ $category['name'] }}
                                </td>
                                <td>{{ $category['author'] }}</td>
                                <td>{{ $category['created_at'] }}</td>
                                <td>{{ $category['updated_at'] }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        // Показывать/скрывать панель действий с элементами
        $('.checkbox').click(function () {
            if ($('#delete_items').hasClass('collapse')) {
                $('#delete_items').removeClass('collapse');
            } else {
                if (!$('.checkbox').is(":checked")) {
                    $('#delete_items').addClass('collapse');
                }
            }
        });
        $('#select_all').click(function () {
            if ($('#delete_items').hasClass('collapse')) {
                $('#delete_items').removeClass('collapse');
            } else {
                if (!$('.checkbox').is(":checked")) {
                    $('#delete_items').addClass('collapse');
                }
            }
        });


        //  Отправка чекбоксов на удаление
        $('#btn_delete_categories').click(function (){
            const sendData = async (url) => {
                // Получение массива отмеченных чекбоксов
                let checkboxes_array = [];
                $('#table #table_checkbox').each(function (index, element) {
                    if ($(element).is(":checked")) {
                        checkboxes_array.push($(element).attr('name'));
                    }
                });
                // Обязательный токен для запроса
                const token = $('meta[name=_token]').attr('content');
                // Запрос
                const response = await fetch(url, {
                    method: 'POST',
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-Token": token,
                    },
                    body: JSON.stringify(checkboxes_array),
                });
                console.log(JSON.stringify(checkboxes_array));

                if (!response.ok) {
                    throw new Error('Ошибка запроса или сервера');
                }

                location.reload();
                return await response.json();
            }

            sendData('http://calories/admin/categories/destroy_few').then((data)=> console.log(data))
        });
    </script>
@endsection
