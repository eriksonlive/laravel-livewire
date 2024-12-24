<form wire:submit="guardar" class="m-4">

    <label for="prefix" class="form-label">{{ __('Prefix') }}</label>
    <input type="text" id="prefix" aria-describedby="helper-text-explanation" class="form-control"
        wire:model="prefix" />

    <div class="flex flex-row mt-4 gap-4">
        <div class="basis-1/2">
            <label for="num-init" class="form-label">{{ __('Numero Inicial') }}</label>
            <input type="number" id="num-init" aria-describedby="helper-text-explanation" class="form-control"
                wire:model="num_init" />
        </div>

        <div class="basis-1/2">
            <label for="num-end" class="form-label">{{ __('Numero final') }}</label>
            <input type="number" id="num-end" aria-describedby="helper-text-explanation" class="form-control"
                wire:model="num_end" />
        </div>
    </div>

    <button class="btn p-2.5 mt-4" type="submit">{{ __('Save') }}</button>
</form>
