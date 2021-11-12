<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<form action="" method="get">
    <div>
        <label for="">Từ khóa</label>
        <input type="text" name="keyword" value="{{$searchData['keyword']}}" placeholder="Tìm theo tên sản phẩm">
    </div>
    <div>
        <label for="">Danh mục</label>
        <select name="cate_id" >
            <option value="">Tất cả</option>
            @foreach ($categories as $item)
                <option @if($item->id == $searchData['cate_id']) selected @endif value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="">Tên cột</label>
        <select name="column_names" >
            @foreach ($column_names as $key => $item)
                <option  @if($key == $searchData['column_names']) selected @endif value="{{$key}}">{{$item}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="">Sắp xếp theo</label>
        <select name="order_by" >
            @foreach ($order_by as $key => $item)
                <option @if($key == $searchData['order_by']) selected @endif value="{{$key}}">{{$item}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Tìm kiếm</button>
    </div>
</form>
<table>
    <thead>
        <th>STT</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>
            <a href="">Add new</a>
        </th>
    </thead>
    <tbody>
        @foreach ($products as $item)
            <tr>
                <td>{{($products->currentPage() - 1)*$products->perPage() + $loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->cate_id}}</td>
                <td>
                    <a href="">Edit</a>
                    <a href="{{route('product.remove', ['id' => $item->id])}}">Remove</a>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5">
                {{$products->onEachSide(1)->links()}}
            </td>
        </tr>
    </tbody>
</table>