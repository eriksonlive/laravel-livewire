<div x-data="alertComponent()" x-init="$watch('alerts', value => {
    value.forEach((alert) => {
        if (alert.open && !alert.timeoutId) {
            alert.timeoutId = setTimeout(() => {
                // Usamos el identificador único para eliminar la alerta de manera correcta
                alerts = alerts.filter(a => a.id !== alert.id);
            }, 3000); // Elimina la alerta después de 3 segundos
        }
    });
})">

    <!-- Botón para agregar un nuevo alert -->
    <button class="fixed z-50 btn p-2 mb-10 ml-4 bg-green-500 text-teal-50" @click="showAlert('success')">
        Success
    </button>

    <!-- Itera sobre los alerts -->
    <template x-for="(alert, index) in alerts" :key="alert.id">
        <div class="fixed right-0 m-4 transition-all" :style="`bottom: ${index * 4}rem;`" x-data="{ open: false }"
            x-init="$nextTick(() => { open = true })" x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-x-16" x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-0 translate-x-16">
            <div class="p-1">
                <div class="flex items-center text-white text-sm font-bold px-4 py-3 rounded shadow-md"
                    :class="alert.backgroundColor" role="alert">
                    <span x-html="alert.message" class="flex"></span>
                    <button type="button" class="flex" @click="alerts = alerts.filter(a => a.id !== alert.id)">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 ml-4">
                            <path d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </template>
</div>

<script>
    window.alertComponent = function() {
        return {
            alerts: [], // Almacena múltiples alerts
            showAlert(type) {
                // Agrega un nuevo alert al array
                this.alerts.push({
                    id: Date.now(), // Usamos un ID único basado en el timestamp
                    open: true,
                    timeoutId: null, // Inicializa el timeoutId para cada alerta
                    backgroundColor: this.getBackgroundColor(type),
                    message: this.getAlertMessage(type)
                });
            },
            getBackgroundColor(type) {
                switch (type) {
                    case 'success':
                        return 'bg-green-300';
                    case 'info':
                        return 'bg-blue-300';
                    case 'warning':
                        return 'bg-yellow-300';
                    case 'danger':
                        return 'bg-red-300';
                    default:
                        return 'bg-gray-300';
                }
            },
            getAlertMessage(type) {
                switch (type) {
                    case 'success':
                        return `${this.successIcon} ${this.defaultSuccessMessage}`;
                    case 'info':
                        return `${this.infoIcon} ${this.defaultInfoMessage}`;
                    case 'warning':
                        return `${this.warningIcon} ${this.defaultWarningMessage}`;
                    case 'danger':
                        return `${this.dangerIcon} ${this.defaultDangerMessage}`;
                    default:
                        return 'This is a default alert.';
                }
            },
            successIcon: `<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2 text-white"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>`,
            infoIcon: `<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2 text-white"><path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>`,
            warningIcon: `<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2 text-white"><path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>`,
            dangerIcon: `<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2 text-white"><path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>`,
            defaultInfoMessage: `This alert contains info message.`,
            defaultSuccessMessage: `This alert contains success message.`,
            defaultWarningMessage: `This alert contains warning message.`,
            defaultDangerMessage: `This alert contains danger message.`,
        }
    }
</script>
