<table height="10%" Width="50%" >
<h1>Danh sach khach hang</h1>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
  </tr>
  @foreach($Show as $Key => $Item)
  <tr>
    <td>{{$Item -> Name }}</td>
    <td>{{$Item -> email }}</td>
    <td>{{$Item -> phone }}</td>
    <td>{{$Item -> address }}</td>
    <td><a href="{{route('DA.get-edit',['id'=> $Item -> id])}}">Sua</a>
     | <a onclick="return confirm('ban chac chan muon xoa')"  href="{{route('DA.delete',['id'=> $Item -> id])}}">Xoa</a></td>
  </tr>
  @endforeach
</table>
<a href="{{route('DA.add')}}">Them Khach Hang</a>