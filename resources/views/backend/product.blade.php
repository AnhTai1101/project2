
@extends('backend.master')
@section('title','Danh sách sản phẩm')
@section('main')
    <br><br><br>
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:40%">Product</th>
                    <th style="width:10%">Giá thực</th>
                    <th style="width:10%">Giá sale</th>
                    <th style="width:10%">Số lượng</th>
                    <th style="width:10%" class="text-center">Thuộc</th>
                    <th style="width:10%">Danh mục</th>
                    <th style="width:10%">Tác vụ</th>
                </tr>
            </thead>
            @foreach ($product as $product)
                <tbody>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs"><img src="public/image/{{ $product->image1 }}" alt="..." class="img-responsive"/></div>
                                <div class="col-sm-10">
                                    <h4 class="nomargin">Product 1</h4>
                                    <p>{{ $product->name }}</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">{{ number_format($product->price_unit) }}</td>
                        <td data-th="Price">{{ number_format($product->price_promotion) }}</td>
                        <td data-th="Quantity" class="text-center">{{ $total }}
                            {{--  <input type="number" class="form-control text-center" value="">  --}}
                        </td>
                        <td data-th="Subtotal" class="text-center">{{ $product->type_info->name }}</td>
                        <td data-th="type-product" >{{ $product->type_product->name }}</td>
                        <td class="actions" data-th="">
                            <button title="Sửa" class="btn btn-info btn-sm"><i class="fa fa-refresh"><a href="admin/product/detail/{{ $product->id }}"></a></i></button>
                            <button title="Xóa" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>								
                        </td>
                    </tr>
                </tbody>
            @endforeach
            {{--  <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total 1.99</strong></td>
                </tr>
                <tr>
                    <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                    <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                </tr>
            </tfoot>  --}}
        </table>
    </div>
@endsection