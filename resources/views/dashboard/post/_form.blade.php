@csrf
<div>
    <label for="">Título</label>
    <input class="form-controller" type="text" name="title" id="" value="{{ old('title', $post->title) }}">
    <label for="">Slug</label>
    <input class="form-controller" type="text" name="slug" id="" value="{{ old('slug', $post->title) }}">
</div>
<div>
    <label for="">Contenido</label>
    <textarea class="form-controller" name="content" id="">{{ old('content', $post->title) }}</textarea>
</div>
<div>
    <label for="">Categoria</label>
    <select  class="form-controller" name="category_id">
        @foreach($categories as $title => $id)
            <option {{ old('category_id',$post->category_id) == $id ? 'selected' : ''}} value="{{ $id }}">
                {{ $title }}
            </option>
        @endforeach
    </select>
</div>
<div>
    <label for="">Descripción</label>
    <textarea class="form-controller" name="description" id="" cols="30" rows="10">
        {{ old('description', $post->description) }}
    </textarea>
</div>
<div>
    <label for="">Publicado</label>
    <select  class="form-controller" name="posted" id="">
        <option {{ old('posted', $post->posted) == 'no' ? 'selected' : '' }} value="no">No</option>
        <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">Si</option>
    </select>
</div>
<div>
    @if (isset($task) && $task == 'edit')
        <label for="">Imagen</label>
        <input class="form-controller" type="file" name="image">
    @endif
</div>
<div>
    <button class="btn btn-success mt-2" type="submit">Enviar</button>
</div>