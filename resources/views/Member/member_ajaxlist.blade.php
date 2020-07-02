@foreach($members as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->member_name }}</td>
        <td>{{$value->member_mobilenumber}}</td>
        <td>{{$value->member_email}}</td>
        <td>{{$value->member_web}}</td>
        <td>{{$value->member_description}}</td>
        <td>{{$value->status}}</td>
        <td>{{$value->created_at}}</td>
        <td>
            <a href="#" class="btn btn-success btn-xs"><i class="fa fa-file" aria-hidden="true"></i></a>
        </td>
</tr>        
@endforeach
