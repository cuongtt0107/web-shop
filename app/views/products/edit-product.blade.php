@extends("layout.main")
@section('title', 'Edit Product')
@section('main-content')
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <input class="form-control" type="hidden" name="id" value="{{ $productdetail->id }}">
        <label for="">Name</label>
        <input class="form-control" type="text" name="name" value="{{ $productdetail->name }}">
    </div> <br>
    <div class="form-group">
    <img width="100px" src="{{ $productdetail->image }}" alt=""> <br>
       <input type="hidden" name="image" value="{{ $productdetail->image }}">
        <label for="">image</label>
        <input class="form-control" type="file" name="file">
    </div>
    <div class="form-group">
        <label for="">price</label>
        <input class="form-control" type="number" name="price" value="{{ $productdetail->price }}">
    </div>
    <div class="form-group">
            <select class="form-control" name="cate_id">
           <?php foreach($cate as $ct) : ?>

                    <?php if($ct->id == $productdetail->cate_id) : ?>
                    <option selected="selected" value="{{ $ct->id }}">{{ $ct->cate_name }}</option>
                    <?php else: ?>
                        <option value="{{ $ct->id }}">{{ $ct->cate_name }}</option>
                    <?php endif;?>    
           <?php endforeach; ?>
            </select>
    </div>
    <div class="form-group">
       <label for="">short desc</label>
       <input class="form-control" type="text" name="short_desc"  value="{{ $productdetail->short_desc }}">
    </div>
    <div class="form-group">
       <label for="">detail</label>
     <textarea class="form-control" name="detail" id="" cols="30" rows="10">{{ $productdetail->detail }}</textarea>
    </div>
    <div>
        <button  class="btn btn-primary" type="submit">update</button>
    </div>
</form>
@endsection