@extends ("layout")
@section("menu")
    <x-layout.menu class="justify-start">
        @hasanyrole(['gestor', 'administrador'])
        <x-form.a_href href="{{route('clientes.create')}}" class="mx-2">Crear cliente</x-form.a_href>
        @endhasanyrole
        <x-form.a_href href="{{route('main')}}" class="mx-2">Volver</x-form.a_href>
    </x-layout.menu>
@endsection
@section("contenido")
    <tabla
        consulta="clientes"
        filas_serializadas='@json($filas)'
        campos_serializados='@json($campos)'
        nombre_tabla="Clientes"
        rol="{{ auth()->user()->getRoleNames()[0] }}"
    >
    </tabla>
@endsection
