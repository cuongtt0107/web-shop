@extends('layout.main')
@section('title', 'Chi tiết hóa đơn ')
@section('main-content')
<table class="table table-striped">
    <thead>
        <th>STT</th>
        <th>Mã hóa đơn </th>
        <th>Tên sản phẩm </th>
        <th>Ảnh</th>
        <th>Số lượng</th>
        <th>Price</th>
       
    </thead>
    <tbody>
        @foreach ($invoiceDetail as $c)
            <tr>
                <td>{{ $loop->iteration}} </td>
                <td>{{$c->invoice_id}}</td>
                <td>{{$c->product->name}} </td>
                <td><img width="50px" src="{{$c->product->image}}" alt=""></td>
                <td>{{$c->quanity}}</td>
                <td>{{$c->unit_price}}</td> 
            </tr>
        @endforeach
    </tbody>
</table>
@endsection