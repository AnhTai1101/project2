@extends('backend.master')
@section('title','Chỉnh sửa thông tin')
@section('main')
    <div class="container">
        @foreach ($detail as $detail)
            <form class="info-product" action="index.php?area=backend&controller=product&action=go_add" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="id">ID sản phẩm</label>
                    <input type="number" class="form-control" id="" value="{{ $detail->id }}">
                </div>
                <div class="form-group">
                    <label for="title">Tên sản phẩm</label>
                    <input value="{{ $detail->name }}" type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="price_unit">Giá sản phẩm gốc: &nbsp;</label>
                    <input name="price_unit" type="number" value="{{ $detail->price_unit }}"> .đ
                </div>
                <div class="form-group">
                    <label for="price_promotion">Giá sản phẩm khuyến mại:</label>
                    <input name="price_promotion" type="number" value="{{ $detail->price_promotion }}"> .đ
                </div>
                <div class="form-group">
                    <label for="content">Thông tin giới thiệu</label>
                    <input type="text" value="{{ $detail->content }}" class="form-control" id="content" name="content">
                </div>
                <div class="form-group">
                    <label for="description">Chi tiết sản phẩm:</label>
                    <input type="text" class="form-control" id="description" value="{{ $detail->description }}" name="description">
                </div>
                <div class="form-group">
                    <label for="status">Số lượng:</label>
                    <input value="{{ $total }}" type="number" class="form-control" id="status" name="status">
                </div>
                <!-- <div class="form-group">
                    <label for="category_id">Danh mục sản phẩm:</label>
                    <input type="number" class="form-control" id="category_id" name="category_id">
                </div> -->
                <div>
                    <label for="category">Danh mục người dùng:</label>
                    <select name="category_id" id="category">
                        <option>{{ $detail->type_info->name }}</option>
                        @foreach ($type_info as $item)
                            @if ($item->name !== $detail->type_info->name)
                            <option>{{ $item->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="category">Danh mục thể loại: &nbsp; &nbsp;</label>
                    <select name="category_id" id="category">
                        <option>{{ $detail->type_product->name }}</option>
                        @foreach ($type_product as $item)
                            @if ($item->name !== $detail->type_product->name)
                            <option>{{ $item->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Ảnh chính</div>
                    <div class="avatar-wrap col-md-2">
                            <img src="public/image/{{ $detail->image1 }}" alt="Ảnh chính">
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="image">
                    </div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Ảnh phụ 1:</div>
                    <div class="avatar-wrap col-md-2">
                            <img src="public/image/{{ $detail->image2 }}" alt="Ảnh phụ 1">
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="image1">
                    </div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Ảnh phụ 2</div>
                    <div class="avatar-wrap col-md-2">
                            <img src="public/image/{{ $detail->image3 }}" alt="Ảnh phụ 2">
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="image2">
                    </div>
                </div>
                <!-- <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div> -->
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        @endforeach
    </div>
@endsection