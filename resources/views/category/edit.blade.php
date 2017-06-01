@extends('template.master')
@section('pageTitle', 'Sửa danh mục')
@section('content')
    <div class="col-lg-8 col-md-7" style="float:none;margin: 0 auto">
        <div class="card">
            <div class="header">
                <h4 class="title">Danh mục: <?php echo $cate->name?></h4>
            </div>
            <div class="content">
                {!! Form::model($cate, ['method' => 'PATCH', 'action' => ['CategoriesController@update',$cate->id]]) !!}
                @include('category.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop