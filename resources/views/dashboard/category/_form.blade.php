@csrf

<label for="">Título</label>
<input class="form-controller" type="text" name="title" value="{{ old('title', $category->title) }}">

<label for="">Slug</label>
<input class="form-controller" type="text" name="slug" value="{{ old('slug', $category->slug) }}">
<br /><br />
<div>
    <button class="btn btn-success mt-2" type="submit">Enviar</button>
</div>