@extends('template.master')
@section('pageTitle', 'Thêm danh mục')
@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-7" style="float:none;margin: 0 auto">
            <div class="card">
                <div class="header">
                    <h4 class="title">Thêm danh mục</h4>
                </div>
                <div class="content">
                    {!! Form::open(['action' => 'CategoriesController@store']) !!}
                    @include('category.form', ['submitButtonText' => 'Add new'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop