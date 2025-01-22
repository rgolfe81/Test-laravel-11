@if ($errors->any())
<h4>Errores</h4>
@foreach ($errors->all() as $error)
    <div>
        {{ $error }}
    </div>
@endforeach
@endif