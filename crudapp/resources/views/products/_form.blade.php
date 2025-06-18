@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name ?? '') }}">
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ old('price', $product->price ?? '') }}">
</div>
<button type="submit" class="btn btn-primary">Save</button>
