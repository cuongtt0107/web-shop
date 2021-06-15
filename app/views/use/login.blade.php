@extends("layout.main-use");
@section("title","Đăng Nhập")
@section('use')

<form class="use" action="{{BASE_URL.'login'}}" method="post">
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control form-control-user" type="text" name="email">
    </div>
    <div class="form-group"> 
     <label for="">Password</label>
      <input class="form-control form-control-user" type="password" name="password">
    </div>
   
    <div >
        <button class="btn btn-primary" type="submit"> Submit </button>
        <a href="registerfrom">đăng ký </a>
    </div>
</form>
@endsection