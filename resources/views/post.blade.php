

<a> post </a>
<table>
    @foreach($postList as $key => $item)
    <thead>
        <tr>  
            <td>{{$item -> id}}</td>
            <td>{{$item -> title}}</td>
            <td>{{$item -> body}}</td>
        </tr>
    </thead>
    @endforeach
    <thead>
        <tr>
            <td>
                <a href="" type="submit" class=" btn btn-primary " > Thêm người dùng </a>
            </td>
        </tr>
    </thead> 
</table>    


