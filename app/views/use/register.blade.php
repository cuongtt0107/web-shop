@extends("layout.main-use");
@section("title","Đăng Ký")
@section('use')

<form class="use" action="{{BASE_URL.'register'}}" method="post" enctype="multipart/form-data">
       @isset($_GET['err'])
       <h5>{{$_GET['err']}} </h5>
    @endisset
    <div class="form-group">
    <input type="name" class="form-control" name="name"  aria-describedby="emailHelp" placeholder="Full Nanme">
  </div>
  <div class="form-group">
    <input type="Email" class="form-control" name="email" placeholder="Email Your">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="Password Your">
  </div>
  <div class="form-group"> 
     <input class="form-control" type="password" name="password_nhaplai" placeholder="Enter the password"> 
    </div>
    <div class="form-group">
        <label for="">Avatar</label>
        <input class="form-control" type="file" name="avatar">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
@endsection