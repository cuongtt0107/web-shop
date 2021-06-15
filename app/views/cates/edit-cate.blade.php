@extends("layout.main")
@section('title', 'Edit Cate')
@section('main-content')
<form action="" method="post">
    <div class="form-group">
        <label for="">Tên Danh Mục</label>
        <input class="form-control" type="text" name="cate_name" value="{{isset($value['value_name']) ? $value['value_name'] : $cate->cate_name}}" />    
         
       @if(isset($err['cate_name']))
                <span style="color: red;"> {{$err['cate_name']}} </span>
       @endif
    </div>
    <div class="form-group"> <label for="">Mô Tả </label>
        <textarea class="form-control" cols="50" rows="5" name="desc" >{{isset($value['value_desc']) ? $value['value_desc'] : $cate->desc}}</textarea>
    </div>
    @if(isset($err['desc']))
                <span style="color: red;"> {{$err['desc']}} </span>
       @endif
    <div class="form-group"> <label for="">Show_Menu </label>
       <input type="checkbox"
            @if( $cate->show_menu == 1 )
            checked 
            @endif
        name="show_menu" value="1" >
    </div>
    <div >
        <button class="btn btn-primary" type="submit"> Submit </button>

    </div>
</form>
@endsection