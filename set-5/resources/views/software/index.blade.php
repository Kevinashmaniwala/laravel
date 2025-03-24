<div>
    <a href="{{route('software.create')}}">Add Details</a>
    <table class="table">
        <thead>
            <tr>
                <th>name</th>
                <th>version</th>
                <th>licence type</th>
                <th>price</th>
</tr>
</thead>
<tbody>
    @foreach($softwares as $software)
    <tr>
        <td>{{$software->name}}</td>
        <td>{{$software->version}}</td>
        <td>{{$software->licencetype}}</td>
        <td>{{$software->price}}</td>
        <td>
            <a href="{{route('software.show',$software->id)}}">view</a>
            <a href="{{route('software.edit',$software->id)}}">edit</a>
            <form action="{{route('software.destroy',$software->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('are you sure want to dalete')">delete</button>
</form>


</td>
</tr>
@endforeach
</tbody>
</table>
</div>