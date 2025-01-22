@csrf
<div>
    <label for="">Título</label>
    <input type="text" name="title" id="" value="{{ old('title', $post->title) }}">
    <label for="">Slug</label>
    <input type="text" name="slug" id="" value="{{ old('slug', $post->title) }}">
</div>
<div>
    <label for="">Contenido</label>
    <textarea name="content" id="">{{ old('content', $post->title) }}</textarea>
</div>
<div>
    <label for="">Categoria</label>
    <select name="category_id">
        @foreach($categories as $title => $id)
            <option {{ old('category_id',$post->category_id) == $id ? 'selected' : ''}} value="{{ $id }}">
                {{ $title }}
            </option>
        @endforeach
    </select>
</div>
<div>
    <label for="">Descripción</label>
    <textarea name="description" id="" cols="30" rows="10">
        {{ old('description', $post->description) }}
    </textarea>
</div>
<div>
    <label for="">Publicado</label>
    <select name="posted" id="">
        <option {{ old('posted', $post->posted) == 'no' ? 'selected' : '' }} value="no">No</option>
        <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">Si</option>
    </select>
</div>
<div>
    @if (isset($task) && $task == 'edit')
        <label for="">Imagen</label>
        <input type="file" name="image">
    @endif
</div>
<div>
    <button type="submit">Enviar</button>
</div>