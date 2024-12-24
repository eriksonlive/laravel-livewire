<form wire:submit="save">
    <div class="flex">
        {{-- <label for="" class="form-label">Example</label> --}}
        <input wire:model="method" type="text" class="form-control" placeholder="Metodo de pago">
        <button class="btn ml-3 p-2.5">
            Agregar
        </button>
    </div>
    @error('method')
        <span class="text-red-500 text-[13px] fade-in"> {{ $message }} </span>
    @enderror

</form>
