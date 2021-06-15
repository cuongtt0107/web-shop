@extends('layout.main')
@section('title', 'Danh sách hóa đơn ')
@section('main-content')
<table class="table table-striped">
    <thead>
    <th>STT</th>
        <th>ID</th>
        <th>Khách hàng</th>
        <th>SDT</th>
        <th>Email</th>
        <th>Địa chỉ </th>
        <th>Tổng giá</th>
        <th>Hành động</th>
    </thead>
    <tbody>
        @foreach ($invoice as $c)
            <tr> <td>{{ $loop->iteration }}</td>
                <td>{{$c->id}}</td>
                <td>{{$c->customer_name}}</td>
                <td>{{$c->customer_phone_number	}}</td>
                <td>{{$c->customer_email}}</td>
                <td>{{$c->customer_address	}}</td>
                <td>{{$c->total_price	}}</td>
                <td><a href="invoicedetail?id={{$c->id}}">chi  tiết</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection