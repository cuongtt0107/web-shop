  @extends('layout.main')
  @section('title', 'Danh sách sản phẩm ')
  @section('main-content')
  <style>
        .ok{
            padding: 10px;
            display: inline-block;
            background-color: #333;
        }
        .ok a {
            color: white;
            margin-left: 20px;
        }
  </style>
  <table class="table table-striped">
      <thead>
          <tr>
              <th>STT</th>
              <th>Name</th>
              <th>Image</th>
              <th>Price</th>
              <th>Detail</th>
              <th>Category</th>
              <th>
                  <a href="newproduct">Tạo mới</a>
              </th>

          </tr>
      </thead>
      <tbody>
          @foreach($products as $pr)
          <tr>
              <td>{{ $loop->iteration + $stt}}</td>
              <td>{{$pr->name}}</td>
              <td><img width="40px" src="{{$pr->image}}" alt=""></td>
              <td>{{$pr->price}}</td>
              <td>{{$pr->detail}}</td>
              <td>{{$pr->categories->cate_name}}</td>
              <td>
                  <a href="removeproduct&id=<?=$pr->id?>">xóa </a>
                  <a href="editproduct&id=<?=$pr->id?>">sửa</a>
              </td>
          </tr>
          @endforeach
          <tr>
              <td colspan="7" style="text-align: center;">
              <div class="ok">
                      @for($i = 1;$i<= $totalPage;$i++)
                          <a href="{{BASE_URL.'products?page='.$i}}">{{$i}} </a>
                        @endfor
                </div>
              </td>
          </tr>
      </tbody>
  </table>
  @endsection