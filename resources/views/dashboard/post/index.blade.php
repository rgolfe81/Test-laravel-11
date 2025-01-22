@extends('dashboard.master')

@section('content')
    <h4>Publicaciones</h4>
    <a href="{{ route('post.create') }}" target="blank">Crear</a>
    <table>
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
        <tbody>
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
                        <a href="{{ route('post.show',$post) }}">Mostrar</a>
                        <a href="{{ route('post.edit',$post) }}">Editar</a>
                        <form action="{{ route('post.destroy', $post) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection