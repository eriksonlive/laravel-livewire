<div x-data="modal()" x-init="initializeModal()" class="relative">
    <!-- Botón para abrir el modal -->
    <button @click="open"
        class="bg-blue-600 text-white text-[14px] px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
        Abrir Modal
    </button>

    <!-- Fondo del Modal -->
    <div @click.self="close"
        :class="{
            'opacity-100 visible': isVisible,
            'opacity-0': !isVisible,
            'invisible': !isVisible && isCompletelyHidden,
        }"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 transition-opacity duration-300 flex items-center justify-center">
        <!-- Contenedor del Modal -->
        <div :class="{
            'translate-y-0 opacity-100': isVisible,
            '-translate-y-full': !isVisible,
            'opacity-0': !isVisible && isCompletelyHidden,
        }"
            {{ $attributes->merge([
                'class' => 'bg-white rounded-lg shadow-lg w-full p-5 relative z-50 transition-transform transform duration-500',
            ]) }}>
            <header class="flex items-center justify-between pb-2 md:pb-2 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    @if (isset($title))
                        {{ $title }}
                    @else
                        Tutulo Modal
                    @endif
                </h3>
                <button type="button" @click="close()"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </header>
            <main class="mt-4">
                {{ $slot }}
            </main>
            @if (isset($footer))
                <footer class="flex justify-end mt-4 gap-2">
                    <button type="button"
                        class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                </footer>
            @endif
        </div>
    </div>
</div>

<script>
    modal = () => {
        return {
            isVisible: false, // Controla si el modal está visible o no
            isCompletelyHidden: true,
            initializeModal() {
                // Esto asegura que el modal no sea visible cuando la página se recarga
                this.isVisible = false;
                this.isCompletelyHidden = true;
            },
            open() {
                this.isVisible = true;
                this.isCompletelyHidden = false;
                document.body.classList.add('overflow-hidden'); // Evita scroll en el fondo
            },
            close() {
                this.isVisible = false;
                setTimeout(() => {
                    this.isCompletelyHidden =
                        true; // Aplica "invisible" después de que la animación termine
                    document.body.classList.remove('overflow-hidden'); // Habilita scroll en el fondo
                }, 500);
            },
        };
    }
</script>
