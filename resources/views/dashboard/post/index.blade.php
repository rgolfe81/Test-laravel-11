@extends('dashboard.master')

@section('content')
    <h2>Publicaciones</h2>
    <a class="btn btn-primary my-3" href="{{ route('post.create') }}" target="blank">Crear</a>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Título
                </th>
                <th>
                    Publicado
                </th>
                <th>
                    Categoría
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($posts as $post)
                <tr>
                    <td>
                        {{ $post->id }}
                    </td>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->posted }}
                    </td>
                    <td>
                        {{ $post->category->title }}
                    </td>
                    <td>
                        <a class="btn btn-success mt-2" href="{{ route('post.show',$post) }}">Mostrar</a>
                        <a class="btn btn-warning mt-2" href="{{ route('post.edit',$post) }}">Editar</a>
                        <form action="{{ route('post.destroy', $post) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger mt-2" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="pagination" class="mt-2">
        {{ $posts->links() }}
    </div>
@endsection