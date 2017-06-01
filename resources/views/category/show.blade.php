@extends('template.master')
@section('pageTitle','Danh mục')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Striped Table</h4>
                    <p class="category">Here is a subtitle for this table</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <th>Mã</th>
                        <th>Tên danh mục</th>
                        <th>Trạng thái</th>
                        </thead>
                        <tbody>
                        <?php foreach ($cates as $cate):?>
                        <tr>
                            <td><?php echo $cate->id?></td>
                            <td>
                                <?php echo $cate->name?><br>
                                <span class="text-muted"><?php echo $cate->mota?></span>
                            </td>
                            <td><?php echo ($cate->status == 1) ? 'Khả dụng' : 'Không khả dụng'?></td>
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop