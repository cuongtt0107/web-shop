@extends('layout.main')
@section('title', 'Danh sách danh mục')
@section('main-content')
<table class="table table-striped">
    <thead>
        <th>STT</th>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Hiển thị menu</th>
        <th>Số Sản Phẩm </th>
        <th>
            <a href="new-cate">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        @foreach ($cates as $c)
            <tr>
            <td>{{ $loop->iteration }}</td>
                <td>{{$c->id}}</td>
                <td>{{$c->cate_name}}</td>
                <td>{{$c->desc}}</td>
                <td>{{$c->show_menu == 1 ? "Có" : "Không"}}</td>
                <td>{{count($c->products)}}</td>
                <td>
                    <a href="edit-cate?id={{$c->id}}">Sửa</a>
                    <a href="remove-cate?id={{$c->id}}">Xóa</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection