<div class=" {{-- p-4 bg-white overflow-hidden sm:rounded-lg --}} ">
    <div class="relative grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 grid-auto-rows-auto">
        <x-tailwind.cardBase class="bg-red-500" attrOne="bg-red-400" attrTwo="bg-red-300">
            <div class="flex justify-between" x-data="{ drop: true }" @click.away="drop = true">
                <div class="flex w-12 h-12 bg-red-400 rounded justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-7 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </div>

                <div class="flex w-10 h-10 p-2 bg-red-500 rounded justify-center items-center z-10"
                    @click="drop = !drop">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-6 text-red-200">
                        <path fill-rule="evenodd"
                            d="M10.5 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <div class="absolute rounded bg-white right-4 top-16 shadow-lg transition-all duration-300 ease-in-out z-10 overflow-hidden"
                    :class="{ 'max-h-0': drop, 'max-h-full': !drop }">
                    <ul class="flex flex-col space-y-1 text-sm py-1">
                        <li class="hover:bg-gray-300 px-4 py-1">Import Card</li>
                        <li class="hover:bg-gray-300 px-4 py-1">Copy Data</li>
                        <li class="hover:bg-gray-300 px-4 py-1">Export</li>
                        <li class="hover:bg-gray-300 px-4 py-1">Archive File</li>
                    </ul>
                </div>
            </div>

            <div class="flex w-full mt-5">
                <h3 class="text-white text-3xl">
                    $100.00
                </h3>
                <div class="flex rounded-full bg-white w-6 h-6 ml-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4 text-red-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>
                </div>
            </div>
            <div class="flex w-full text-white my-2">
                <p>Total Earning</p>
            </div>
        </x-tailwind.cardBase>

        <x-tailwind.cardBase class="bg-blue-600" attrOne="bg-blue-400" attrTwo="bg-blue-300">
            <div class="flex justify-between">
                <div class="flex w-12 h-12 bg-blue-400 rounded justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-7 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </div>
                <div class="flex w-10 h-10 p-2 bg-blue-500 rounded justify-center items-center z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-blue-200">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </div>
            </div>
            <div class="flex w-full mt-5">
                <h3 class="text-white text-3xl">
                    $100.00
                </h3>
                <div class="flex rounded-full bg-white w-6 h-6 ml-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4 text-blue-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>
                </div>
            </div>
            <div class="flex w-full text-white my-2">
                <p>Total Earning</p>
            </div>
        </x-tailwind.cardBase>

        <div
            class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4 sm:col-span-2 md:col-span-1 md:flex-col md:space-y-2 md:space-x-0">
            <div class="relative flex bg-blue-700 px-4 py-2 rounded-md shadow-md flex-1 items-center overflow-hidden">
                <div class="bg-white w-fit p-3 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5 text-blue-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>
                </div>
                <div class="flex flex-col ml-3">
                    <p class="text-white font-bold">$230k</p>
                    <p class="text-white text-xs">Total Income</p>
                </div>
                <!-- Círculos decorativos -->
                <div
                    class="absolute rounded-full bg-blue-300 opacity-75 w-40 h-40 top-[-90px] right-[-120px] sm:top-[-130%] sm:right-[-17%]">
                </div>
                <div
                    class="absolute rounded-full bg-blue-500 opacity-50 w-40 h-40 top-[-120px] right-[-50px] sm:top-[-55%] sm:right-[-30%]">
                </div>
            </div>
            <div class="relative flex bg-white px-4 py-2 rounded-md shadow-md flex-1 items-center overflow-hidden">
                <div class="bg-amber-400 w-fit p-3 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>
                </div>
                <div class="flex flex-col ml-3">
                    <p class=" font-bold">$230k</p>
                    <p class=" text-xs">Total Income</p>
                </div>
                <!-- Círculos decorativos -->
                <div
                    class="absolute rounded-full bg-amber-200 opacity-75 w-40 h-40 top-[-90px] right-[-120px] sm:top-[-130%] sm:right-[-17%]">
                </div>
                <div
                    class="absolute rounded-full bg-amber-400 opacity-50 w-40 h-40 top-[-120px] right-[-50px] sm:top-[-55%] sm:right-[-30%]">
                </div>
            </div>
        </div>

        <div class="col-span-1 sm:col-span-2 md:col-span-2 ">
            <div class="w-full p-5 bg-white rounded">
                <div class="flex flex-row justify-between">
                    <div>
                        <h6 class="text-gray-400 text-[12px]">Total Growth</h6>
                        <h5 class="text-gray-600 text-xl font-bold">$2.324.00</h5>
                    </div>
                    <div x-data="dropClick()" class="relative mt-2">
                        <!-- Botón principal -->
                        <button type="button" @click="toggle()"
                            class="grid w-full cursor-default grid-cols-1 rounded-md bg-white py-1.5 pl-3 pr-2 text-left text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            <span class="col-start-1 row-start-1 flex items-center gap-3 pr-6">
                                <img :src="selected.image" alt="" :class="{ 'hidden': !selected.image }"
                                    class="size-5 shrink-0 rounded-full" loading="lazy">
                                <span class="block truncate" x-text="selected.name"></span>
                            </span>
                            <svg class="col-start-1 row-start-1 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                                viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.22 10.22a.75.75 0 0 1 1.06 0L8 11.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 0 1 0-1.06ZM10.78 5.78a.75.75 0 0 1-1.06 0L8 4.06 6.28 5.78a.75.75 0 0 1-1.06-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Menú desplegable -->
                        <ul x-show="open" @click.away="close()"
                            class="absolute z-20 mt-1 max-h-56 w-100 right-0 overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black/5 focus:outline-none sm:text-sm"
                            tabindex="-1" role="listbox">
                            <template x-for="(option, index) in options" :key="index">
                                <li @click="select(option)"
                                    class="relative cursor-pointer select-none py-2 pl-3 pr-9 text-gray-900 hover:bg-gray-200">
                                    <div class="flex items-center">

                                        <img :src="option.image" :class="{ 'hidden': !option.image }" alt=""
                                            class="size-5 shrink-0 rounded-full" loading="lazy">
                                        <span class="ml-3 block truncate" x-text="option.name"></span>
                                    </div>
                                    <span x-show="option.name === selected.name"
                                        class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>

                <div x-data="chartConfig()" x-init="initLazyChart()"
                    class="w-full h-96 overflow-hidden mt-6 bottom-0">
                    <div id="chart"></div>
                </div>
            </div>
        </div>

        <div class="sm:col-span-2 md:col-span-1">
            <div class="relative w-full h-auto p-4 bg-white rounded">
                <div class="flex justify-between">
                    <div class="mt-2">
                        <h5 class="font-bold text-gray-500 text-[18px]">Popular Stock</h5>
                    </div>
                    <div x-data="{ drop: true }" @click.away="drop = true">
                        <div class="flex w-10 h-10 p-2 bg-red-500 rounded justify-center items-center z-10"
                            @click="drop = !drop">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 text-red-200">
                                <path fill-rule="evenodd"
                                    d="M10.5 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div class="absolute rounded bg-white right-4 top-16 shadow-lg transition-all duration-300 ease-in-out z-10 overflow-hidden"
                            :class="{ 'max-h-0': drop, 'max-h-full': !drop }">
                            <ul class="flex flex-col space-y-1 text-sm py-1">
                                <li class="hover:bg-gray-300 px-4 py-1">Import Card</li>
                                <li class="hover:bg-gray-300 px-4 py-1">Copy Data</li>
                                <li class="hover:bg-gray-300 px-4 py-1">Export</li>
                                <li class="hover:bg-gray-300 px-4 py-1">Archive File</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <x-tailwind.cardBase class="mt-4 h-full bg-gray-200 p-0" decoration="{{ false }}">
                    <div class="flex flex-row justify-between px-4 pt-4">
                        <div class="">
                            <p class="text-[16px] text-violet-700">Bajaj Finery</p>
                            <p class="text-[14px] text-gray-400">10% Profit</p>
                        </div>
                        <div>
                            <h6 class="text-[18px] font-extrabold text-gray-500">$1839.00</h6>
                        </div>
                    </div>

                    <div x-data="chartConfigLine()" x-init="initLazyChart()" class="m-0 p-0">
                        <div class="" id="chart-line"></div>
                    </div>
                </x-tailwind.cardBase>

                <div class="mt-6">
                    <div class="flex justify-between mt-2 p-2 border-b-2">
                        <div>
                            <p class="text-[13px]">Bajaj Finery</p>
                            <p class="text-[12px] text-green-700">10% Profit</p>
                        </div>
                        <div class="flex">
                            <p class="text-[13px]">$1839.00</p>
                            <div class="ml-4 w-4 h-4 bg-green-500 rounded flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-3 text-green-900">
                                    <path fill-rule="evenodd"
                                        d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between mt-2 p-2 border-b-2">
                        <div>
                            <p class="text-[13px]">TTML</p>
                            <p class="text-[12px] text-orange-600">10% Loss</p>
                        </div>
                        <div class="flex">
                            <p class="text-[13px]">$1839.00</p>
                            <div class="ml-4 w-4 h-4 bg-orange-500 rounded flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-3 text-orange-900">
                                    <path fill-rule="evenodd"
                                        d="M3.97 3.97a.75.75 0 0 1 1.06 0l13.72 13.72V8.25a.75.75 0 0 1 1.5 0V19.5a.75.75 0 0 1-.75.75H8.25a.75.75 0 0 1 0-1.5h9.44L3.97 5.03a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between mt-2 p-2 border-b-2">
                        <div>
                            <p class="text-[13px]">Bajaj Finery</p>
                            <p class="text-[12px] text-green-700">10% Profit</p>
                        </div>
                        <div class="flex">
                            <p class="text-[13px]">$1839.00</p>
                            <div class="ml-4 w-4 h-4 bg-green-500 rounded flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-3 text-green-900">
                                    <path fill-rule="evenodd"
                                        d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between mt-2 p-2 border-b-2">
                        <div>
                            <p class="text-[13px]">Bajaj Finery</p>
                            <p class="text-[12px] text-green-700">10% Profit</p>
                        </div>
                        <div class="flex">
                            <p class="text-[13px]">$1839.00</p>
                            <div class="ml-4 w-4 h-4 bg-green-500 rounded flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-3 text-green-900">
                                    <path fill-rule="evenodd"
                                        d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between mt-2 p-2 border-b-2">
                        <div>
                            <p class="text-[13px]">Bajaj Finery</p>
                            <p class="text-[12px] text-green-700">10% Profit</p>
                        </div>
                        <div class="flex">
                            <p class="text-[13px]">$1839.00</p>
                            <div class="ml-4 w-4 h-4 bg-green-500 rounded flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-3 text-green-900">
                                    <path fill-rule="evenodd"
                                        d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    if (!this.chart) {
        this.chart = new ApexCharts(document.querySelector("#chart"), this.options);
        this.chart1 = new ApexCharts(document.querySelector("#chart-line"), this.options);
        this.chart.render();
        this.chart1.render();
    }

    if (typeof dropClick === 'undefined') {

        window.dropClick = () => {
            return {
                open: false,
                selected: {
                    name: "Today",
                },
                options: [{
                        name: 'Today'
                    },
                    {
                        name: "Month",
                    },
                    {
                        name: "This year",
                    },
                ],
                toggle() {
                    this.open = !this.open;
                },
                close() {
                    this.open = false;
                },
                select(option) {
                    this.selected = option;
                    this.close();
                }
            };

        }
    }

    if (typeof chartConfig === 'undefined') {

        window.chartConfig = () => {
            return {
                chart: null, // Variable para almacenar el gráfico
                options: {
                    series: [{
                        name: 'Net Profit',
                        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                    }, {
                        name: 'Revenue',
                        data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                    }],
                    chart: {
                        type: 'bar',
                        height: '100%',
                        stacked: true,
                        width: '95%',
                        animations: {
                            enabled: false
                        },
                        toolbar: {
                            show: true
                        },
                        zoom: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '30%',
                            borderRadius: 0
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    xaxis: {
                        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct']
                    },
                    yaxis: {
                        title: {
                            text: 'Example'
                        }
                    },
                    fill: {
                        opacity: 1
                    }
                },
                initLazyChart() {
                    // Usamos Intersection Observer para detectar cuando el gráfico es visible
                    const observer = new IntersectionObserver((entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                this.initChart();
                                observer.unobserve(entry
                                    .target
                                ); // Deja de observar una vez que se ha cargado el gráfico
                            }
                        });
                    });

                    observer.observe(document.querySelector("#chart"));
                },
                initChart() {
                    // Inicializa el gráfico solo cuando sea visible
                    this.chart = new ApexCharts(document.querySelector("#chart"), this.options);
                    this.chart.render();
                }
            }
        }
    }

    if (typeof chartConfigLine === 'undefined') {
        window.chartConfigLine = () => {
            return {
                chart: null, // Variable para almacenar el gráfico
                options: {
                    series: [{
                        name: 'Desktops',
                        data: [10, 35, 20, 45, 7]
                    }],
                    chart: {
                        type: 'area',
                        stacked: false,
                        width: '100%',
                        height: '100%',
                        offsetY: -30,
                        animations: {
                            enabled: false
                        },
                        zoom: {
                            enabled: false
                        },
                        toolbar: {
                            show: false // Oculta las herramientas
                        }
                    },
                    dataLabels: {
                        enabled: false // Desactiva etiquetas sobre los puntos
                    },
                    stroke: {
                        curve: 'smooth', // Línea recta
                        colors: 'blue'
                    },
                    xaxis: {
                        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun'],
                        labels: {
                            style: {
                                colors: '#333' // Estilo de las etiquetas en el eje x
                            },
                            show: false,
                        }
                    },
                    yaxis: {
                        show: false // Oculta el eje y
                    },
                    grid: {
                        show: false // Oculta las líneas de la cuadrícula
                    },
                    legend: {
                        show: false // Oculta las leyendas
                    },
                    tooltip: {
                        enabled: true, // Desactiva el tooltip
                        fixed: {
                            offsetY: -80
                        },
                        marker: {
                            show: false
                        }
                    },
                    fill: {
                        opacity: 1
                    }
                },
                initLazyChart() {
                    // Usamos Intersection Observer para detectar cuando el gráfico es visible
                    const observer = new IntersectionObserver((entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                this.initChart();
                                observer.unobserve(entry
                                    .target
                                ); // Deja de observar una vez que se ha cargado el gráfico
                            }
                        });
                    });

                    observer.observe(document.querySelector("#chart-line"));
                },
                initChart() {
                    // Inicializa el gráfico solo cuando sea visible
                    this.chart = new ApexCharts(document.querySelector("#chart-line"), this.options);
                    this.chart.render();
                }
            }
        }
    }

    // document.addEventListener('alpine:init', () => {
    //     Alpine.data('example', () => ({
    //         open: false,
    //         isClick: false,
    //         toogle() {
    //             this.open = true;
    //             setTimeout(() => {
    //                 this.open = false;
    //             }, 150);
    //             this.isClick = !this.isClick;
    //         }
    //     }))
    // });
</script>
