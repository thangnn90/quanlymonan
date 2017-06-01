<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Tên danh mục</label>
            {!! Form::text('name', null, ['class' => 'form-control border-input']) !!}
        </div>
    </div>
    {{--<div class="col-md-6">--}}
    {{--<div class="form-group">--}}
    {{--<label>Trạng thái</label>--}}
    {{--<select name="" id="" class="form-control border-input">--}}
    {{--<option value="1">Khả dụng</option>--}}
    {{--<option value="0">Không khả dụng</option>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--</div>--}}
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>Mô tả</label>
            {!! Form::text('mota', null, ['class' => 'form-control border-input']) !!}
        </div>
    </div>
</div>
<div class="text-center">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-info btn-fill btn-wd']) !!}
</div>
<div class="clearfix"></div>