@extends('navegador')

@section('Contenido')
<div class="max-w-2xl mx-auto bg-white p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <h1 class="text-center font-bold text-3xl mb-5">GESTIONAR PRODUCTO</h1>
            <form action="{{Route('Producto.update',$Producto->id_producto)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                <div class="grid gap-4 grid-cols-2">
                    <div class="mb-1">
                        <label for="nombre" class="mb-3 block text-base font-medium text-[#07074D]">
                            Nombre Completo:
                        </label>
                        <input type="text" name="nombre" id="nombre" value="{{$Producto->nombre}}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-1">
                        <label for="precio" class="mb-3 block text-base font-medium text-[#07074D]">
                            Precio:
                        </label>
                        <input type="text" name="precio" id="precio" value="{{$Producto->precio}}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-1">
                        <label for="cantidad" class="mb-3 block text-base font-medium text-[#07074D]">
                            Cantidad:
                        </label>
                        <input type="number" name="cantidad" id="cantidad" value="{{$Producto->cantidad}}" placeholder=""
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-1">
                        <label for="tipo" class="mb-3 block text-base font-medium text-[#07074D]">
                            Categoria:
                        </label>
                        <select name="tipo" id="tipo"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            @foreach ($tipo as $r)
                                <option value="{{$r->id_tipo_plato}}">{{$r->Categoria}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="url" class="mb-3 block text-base font-medium text-[#07074D]">
                        Imagen:
                    </label>
                    <input type="text" name="url" id="url" value="{{$Producto->url}}" placeholder=""
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-1">
                    <label for="Descripcion" class="mb-3 block text-base font-medium text-[#07074D]">
                        Descripcion:
                    </label>
                    <textarea name="descripcion" id="Descripcion" value="{{$Producto->descripcion}}" cols="30" rows="4"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                </div>
                <div>
                    <button type="submit"
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
</div>
@endsection
