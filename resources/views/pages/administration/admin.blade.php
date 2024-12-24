<div class=" rounded">
    <div class="grid grid-cols-2 gap-4">
        <div>
            <div class="shadow-md p-4 bg-white rounded">
                <h2 class="text-[20px] text-gray-400">Numeración de recibos</h2>

                <livewire:admin.config.prefix-num-facturation />
            </div>
        </div>

        <div>
            <div class="shadow-md p-4 bg-white rounded">
                <div class="flex justify-between">
                    <h2 class="text-[20px] text-gray-400">Medios de Pago</h2>

                    <livewire:admin.config.form-method-pay />
                </div>

                <div class="mt-6">
                    <livewire:admin.config.method-pay-dt />
                </div>
            </div>
        </div>
    </div>
</div>
