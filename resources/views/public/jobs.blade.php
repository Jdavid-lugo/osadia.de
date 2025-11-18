@extends('layouts.main')
@section('content')
    <div>
        <div class="lg:rounded-2xl bg-white dark:bg-[#111111]">
            <div class="pt-12 md:py-12 px-2 sm:px-5 md:px-10 lg:px-14">
                <h2 class="after-effect after:left-52 " style="">Trabajos</h2>
                <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
                    <!-- 1) Validación Fácil (prioritario) -->
                    <div class="about-box bg-[#fcf4ff] dark:bg-transparent">
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold ">App "FacialId SDK"</h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]">Aplicación para identidades de manera rápida y sencilla, pensada para instituciones y comercios que requieren verificación inmediata.</p>
                            <div class="mt-3">
                                <a href="{{ url('https://facialid.osadia.de/') }}" class="inline-block text-sm text-[#1773EA] hover:underline">Ver más</a>
                            </div>
                        </div>
                    </div>

                    <!-- 2) Diseño UI/UX -->
                    <div class="about-box bg-[#fefaf0] dark:bg-transparent">
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold ">Diseño UI/UX</h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]">Diseño interfaces web preparadas para conseguir un atractivo y una funcionalidad exquisita con las nuevas tecnologías.</p>
                            <div class="mt-3">
                                <a href="{{ url('/jobs') }}" class="inline-block text-sm text-[#1773EA] hover:underline">Ver más</a>
                            </div>
                        </div>
                    </div>

                    <!-- 3) Portal de Gestión de Inventarios -->
                    <div class="about-box bg-[#fff0f8] dark:bg-transparent">
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold ">Portal de Gestión de Inventarios</h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]">Sistema web para control de stock, pedidos y reportes en tiempo real para cadenas de tiendas.</p>
                            <div class="mt-3">
                                <a href="{{ url('/jobs') }}" class="inline-block text-sm text-[#1773EA] hover:underline">Ver más</a>
                            </div>
                        </div>
                    </div>

                    <!-- 4) Plataforma de Reservas -->
                    <div class="about-box bg-[#f3faff] dark:bg-transparent">
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold ">Plataforma de Reservas</h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]">Aplicación para reservar servicios y gestionar horarios, con integración de pasarela de pago.</p>
                            <div class="mt-3">
                                <a href="{{ url('/jobs') }}" class="inline-block text-sm text-[#1773EA] hover:underline">Ver más</a>
                            </div>
                        </div>
                    </div>

                    <!-- 5) Consultoría en Bases de Datos -->
                    <div class="about-box bg-[#f3faff] dark:bg-transparent">
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold ">Consultoría en Bases de Datos</h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]">Servicios de optimización, migración y securización de bases de datos para clientes empresariales.</p>
                            <div class="mt-3">
                                <a href="{{ url('/jobs') }}" class="inline-block text-sm text-[#1773EA] hover:underline">Ver más</a>
                            </div>
                        </div>
                    </div>

                    <!-- 6) Plataforma eCommerce -->
                    <div class="about-box bg-[#F3F6F6] dark:bg-transparent">
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold ">Plataforma eCommerce</h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]">Tienda online con gestión de catálogos, integración logística y sistema de cupones.</p>
                            <div class="mt-3">
                                <a href="{{ url('/jobs') }}" class="inline-block text-sm text-[#1773EA] hover:underline">Ver más</a>
                            </div>
                        </div>
                    </div>

                    <!-- 7) Sistema de Reportes Analíticos -->
                    <div class="about-box bg-[#fefaf0] dark:bg-transparent">
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold ">Sistema de Reportes Analíticos</h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]">Plataforma para agregación y visualización de métricas empresariales con paneles interactivos.</p>
                            <div class="mt-3">
                                <a href="{{ url('/jobs') }}" class="inline-block text-sm text-[#1773EA] hover:underline">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
