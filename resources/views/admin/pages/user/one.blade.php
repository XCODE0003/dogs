@extends('admin.layouts.layout')

@section('content')
    <section class="content" id="wrapperContent">
        <div class="content__inner content__inner--sm">
            <header class="content__title">
                <h1>Редактирование <small>{{ $item->first_name }} {{ $item->second_name }}</small></h1>
            </header>

            <div class="card new-contact">
                <div class="new-contact__header">
                    <img src="/temple/logo.jpg" class="new-contact__img" alt="title">
                </div>

                <div class="card-body">
                    <div class="row">
                        <input type="hidden" value="{{ $item->id }}" name="id">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text" value="{{ $item->first_name }}" name="first_name" readonly class="form-control"
                                    placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label>Фамилия</label>
                                <input type="text" value="{{ $item->second_name }}" readonly name="second_name" class="form-control"
                                    placeholder="Title">
                            </div>
                        </div>
  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" value="{{ $item->email }}" name="email" readonly class="form-control"
                                    placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label>Роль</label>
                                <input type="text" value="{{ $item->role }}" name="role" readonly class="form-control"
                                    placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label>Дата создания</label>
                                <input type="text" value="{{ $item->created_at }}" name="created_at" readonly class="form-control"
                                    placeholder="Title">
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="{{ route('admin-users') }}" class="btn btn-theme">Назад</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
