<div>
    <form action="{{route('software.update',$software->id)}}"method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>name</label>
            <input type="text" name="name" class-form="form control" value="{{$software->name}}">
</div>
<div class="form-group">
            <label>version</label>
            <input type="text" name="version" class-form="form control" value="{{$software->version}}">
</div>

<div class="form-group">
            <label>licence type</label>
            <input type="text" name="licence type" class-form="form control" value="{{$software->licence type}}">
</div>
<div class="form-group">
            <label>price</label>
            <input type="text" name="price" class-form="form control" value="{{$software->price}}">
</div>
<button type="submit" class="btn-btn-primary">Add product</button>
</form>
</div>