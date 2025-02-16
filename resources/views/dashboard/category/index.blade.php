@extends('dashboard.master')

@section('content')
    <h2>Categorías</h2>
    <a class="btn btn-primary my-3" href="{{ route('category.create') }}" target="blank">Crear</a>
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
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{ $category->id }}
                    </td>
                    <td>
                        {{ $category->title }}
                    </td>
                    <td>
                        <a class="btn btn-success mt-2" href="{{ route('category.show', $category) }}">Mostrar</a>
                        <a class="btn btn-warning mt-2" href="{{ route('category.edit', $category) }}">Editar</a>
                        <form action="{{ route('category.destroy', $category) }}" method="post">
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
        {{ $categories->links() }}
    </div>
@endsection
