@extends ("layout")
@section("menu")
    <x-layout.menu class="justify-start">
        @hasanyrole(['gestor', 'administrador'])
        <x-form.a_href href="{{route('facturas.create')}}" class="mx-2">Crear factura</x-form.a_href>
        @endhasanyrole
        <x-form.a_href href="{{route('main')}}" class="mx-2">Volver</x-form.a_href>

    </x-layout.menu>
@endsection
@section("contenido")
    <tabla
        consulta="facturas"
        filas_serializadas='@json($filas)'
        campos_serializados='@json($campos)'
        nombre_tabla="Facturas"
        rol="{{ auth()->user()->getRoleNames()[0] }}"
    >
    </tabla>
@endsection
