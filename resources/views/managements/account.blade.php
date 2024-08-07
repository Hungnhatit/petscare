@extends('master.master')
@section('content')
<table class="mt-4 col-md-10 table table-striped table-hover table-bordered">
   <thead>
      <tr>
         <th class="font-family text-center text-uppercase" scope="col">STT</th>
         <th class="font-family text-center text-uppercase" scope="col">Mã cửa hàng</th>
         <th class="font-family text-center text-uppercase" scope="col">Tên đăng nhập</th>
         <th class="font-family text-center text-uppercase" scope="col">Email</th>
         <th class="font-family text-center text-uppercase" scope="col">Tên cửa hàng</th>
         <th class="font-family text-center text-uppercase" scope="col">Số điện thoại</th>
         <th class="font-family text-center text-uppercase" scope="col">Địa chỉ</th>
         <th class="font-family text-center text-uppercase" scope="col">Trạng thái</th>
         <th class="font-family text-center text-uppercase" class="text-center" scope="col" colspan="2">Hành động</th>
      </tr>
   </thead>
   <tbody>

      @foreach($stores as $store)
      <tr>
         <th class="text-center">{{$loop->iteration}}</th>
         <td>{{$store->IDCH}}</td>
         <td>{{$store->TENDN}}</td>
         <td>{{$store->EMAIL}}</td>
         <td>{{$store->TENCUAHANG}}</td>
         <td>{{$store->SDT}}</td>
         <td>{{$store->DIACHI}}</td>
         <td>{{$store->TRANGTHAI}}</td>
         <td class="text-center">
            <!-- <a href="{{ url('/update-status/' . $store->IDCH) }}" class="btn btn-primary">Duyệt</a> -->

            <form action="{{'/update-status/' . $store->IDCH }}" method="POST">
               @csrf
               @method("POST")
               @if ($store->TRANGTHAI=='Đã duyệt')
               <button type="submit" name="submit" class="btn btn-secondart" disabled>Duyệt</button>
               @else
               <button type="submit" name="submit" class="btn btn-primary">Duyệt</button>
               @endif
               @csrf
            </form>
         </td>
         <td class="text-center">
            <form action="{{ url('/delete-member/' . $store->IDCH) }}" method="POST">
               @csrf
               @method('DELETE')
               <button type="submit" name="submit" class="btn btn-danger">Xoá</button>
            </form>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>

@endsection