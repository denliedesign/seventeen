
<div class="form-group">
    <label for="name">Promo Name</label>
    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ?? $promo->name }}">
    <div>{{ $errors->first('name') }}</div>
</div>
<div class="form-group">
    <label for="description">Promo Description</label>
    <textarea name="description" id="mytextarea" cols="30" rows="10" class="form-control">{{ old('description') ?? $promo->description }}</textarea>
    <div>{{ $errors->first('description') }}</div>
</div>

<div class="form-group">
    <label for="image">Promo Image</label>
    <input type="file" class="form-control-file" name="image">
    <div>{{ $errors->first('image') }}</div>
</div>


@csrf
