@extends("layout.main")
@section('title', 'Add Cate')
@section('main-content')

<form action="" method="post">

    <div class="form-group">
        <label for="">Tên Danh Mục</label>
        <input class="form-control" type="text" name="cate_name" value="{{isset($data['name']) ? $data['name'] : ''}}">
        <span style="color:red">{{isset($err['name']) ? $err['name'] : ""}}</span>
    </div>
    <div class="form-group"> <label for="">Mô Tả </label>
        <textarea class="form-control" cols="50" rows="5" name="desc">{{isset($data['mota']) ? $data['mota'] : ''}}</textarea>
        <span style="color:red">{{isset($err['mota']) ? $err['mota'] : ""}}</span>
    </div>
    <div class="form-group"> <label for="">Show_Menu </label>
       <input type="checkbox" name="show_menu" value="1">
    </div>
    <div >
        <button class="btn btn-primary" type="submit"> Submit </button>

    </div>
</form>
@endsection