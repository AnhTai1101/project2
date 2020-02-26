@extends('backend.master')
@section('title','Chi tiết sản phẩm')
@section('main')
<br><br><br>
    @foreach ($detail as $detail)
        <div class="container">
            <section class="panel panel-default">
                <div class="panel-heading"> 
                    <h3 class="panel-title">{{ $detail->name }}</h3> 
                </div> 
                <div class="panel-body">
                    <form action="designer-finish.html" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Tên sản phẩm</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name" value="{{ $detail->name }}">
                            </div>
                        </div> <!-- form-group // -->

                        <!-- desciption // -->
                        <div class="form-group">
                            <label for="about" class="col-sm-3 control-label">Mô tả sản phẩm</label>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control">{{$detail->description}}</textarea>
                            </div>
                        </div> <!-- form-group // -->

                        <!-- Quantity // -->
                        <div class="form-group">
                            <label for="qty" class="col-sm-3 control-label">Số lượng</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" name="qty" id="qty" value="{{ $total }}">
                            </div>
                        </div> <!-- form-group // -->

                        <!-- price_unit // -->
                        <div class="form-group">
                            <label for="qty" class="col-sm-3 control-label">Giá bán chính thức</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" name="qty" id="qty" value="{{ $detail->price_unit }}">
                            </div>
                        </div> <!-- form-group // -->

                        <!-- price_promotion // -->
                        <div class="form-group">
                            <label for="qty" class="col-sm-3 control-label">Giá khuyến mại</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" name="qty" id="qty" value="{{ $detail->promotion==0 ? 0 : $detail->promotion }}">
                            </div>
                        </div> <!-- form-group // -->

                        <!-- Category // -->
                        <div class="form-group">
                            <label for="qty" class="col-sm-3 control-label">Danh mục</label>
                            <div class="col-sm-3">
                                <select id="product_categorie" name="product_categorie" class="form-control">
                                    <option>{{ $detail->type_product->name }}</option>
                                    @foreach ($type_product as $item)
                                        @if ($item->name !== $detail->type_product->name)
                                        <option>{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <label for="qty" class="col-sm-3 control-label">Phân khúc</label>
                            <div class="col-sm-3">
                                <select id="product_categorie" name="product_categorie" class="form-control">
                                    <option>{{ $detail->type_info->name }}</option>
                                    @foreach ($type_info as $item)
                                        @if ($item->name !== $detail->type_info->name)
                                        <option>{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div> <!-- form-group // -->

                        <!-- image // -->
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Ảnh</label>
                            <div class="col-sm-3">
                                <label class="control-label small" for="file_img">Ảnh chính (jpg/png):</label> <input type="file" name="file_img">
                            </div>
                            <br>
                            <div class="col-sm-3">
                                <label class="control-label small" for="file_img">Ảnh phụ 1:</label>  <input type="file" name="file_archive">
                            </div>
                            <br>
                            <div class="col-sm-3">
                                <label class="control-label small" for="file_img">Ảnh phụ 2:</label>  <input type="file" name="file_archive">
                            </div>
                        </div> <!-- form-group // -->

                        <hr>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                        </div> <!-- form-group // -->
                    </form>
                </div><!-- panel-body // -->
            </section><!-- panel// -->
        </div> <!-- container// -->
    @endforeach
@endsection