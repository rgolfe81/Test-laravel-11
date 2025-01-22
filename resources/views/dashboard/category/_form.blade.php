@csrf

<label for="">Título</label>
<input type="text" name="title" value="{{ old('title', $category->title) }}">

<label for="">Slug</label>
<input type="text" name="slug" value="{{ old('slug', $category->slug) }}">
<br /><br />
<div>
    <button type="submit">Enviar</button>
</div>