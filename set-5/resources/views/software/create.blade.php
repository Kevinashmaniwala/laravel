<div>
    <form action="{{route('software.store')}}"method="post">
        @csrf
        <div class="form-group">
            <label>name</label>
            <input type="text" name="name" class-form="form control">
</div>
<div class="form-group">
            <label>version</label>
            <input type="text" name="version" class-form="form control">
</div>

<div class="form-group">
            <label>licence type</label>
            <input type="text" name="licence type" class-form="form control">
</div>
<div class="form-group">
            <label>price</label>
            <input type="text" name="price" class-form="form control">
</div>
<button type="submit" class="btn-btn-primary">Add product</button>
</form>
</div>