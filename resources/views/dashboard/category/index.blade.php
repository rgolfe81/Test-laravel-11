@extends('dashboard.master')

@section('content')
    <h4>Categorías</h4>
    <a href="{{ route('category.create') }}" target="blank">Crear</a>
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
                        <a href="{{ route('category.show',$category) }}">Mostrar</a>
                        <a href="{{ route('category.edit',$category) }}">Editar</a>
                        <form action="{{ route('category.destroy', $category) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection