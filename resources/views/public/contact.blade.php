@extends('layouts.main')
@section('content')
    <div>
        <div class="lg:rounded-2xl bg-white dark:bg-[#111111]">
            <div class="pt-12 md:py-12 px-2 sm:px-5 md:px-10 lg:px-14">
                <h2 class="after-effect after:left-52">Contacto</h2>

                <div class="pt-6 max-w-2xl">
                    <p class="text-[#44566c] dark:text-color-910 leading-7">Si quieres ponerte en contacto, usa el formulario o los datos de contacto en el lateral. Este formulario es de ejemplo; conecta con tu controlador o servicio de correo según necesites.</p>

                    <form class="mt-6 space-y-6 bg-[#F3F6F6] dark:bg-[#1D1D1D] p-6 rounded-2xl shadow-sm" method="POST" action="#">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs text-[#44566C] dark:text-[#A6A6A6] font-medium">Nombre</label>
                                <input name="name" type="text" placeholder="Tu nombre" required
                                    class="w-full mt-2 rounded-lg border border-[#E3E3E3] dark:border-[#3D3A3A] bg-white dark:bg-[#0D0D0D] px-4 py-3 text-gray-700 dark:text-[#A6A6A6] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#E93B81]" />
                            </div>
                            <div>
                                <label class="block text-xs text-[#44566C] dark:text-[#A6A6A6] font-medium">Email</label>
                                <input name="email" type="email" placeholder="tu@correo.com" required
                                    class="w-full mt-2 rounded-lg border border-[#E3E3E3] dark:border-[#3D3A3A] bg-white dark:bg-[#0D0D0D] px-4 py-3 text-gray-700 dark:text-[#A6A6A6] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#E93B81]" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs text-[#44566C] dark:text-[#A6A6A6] font-medium">Asunto</label>
                            <input name="subject" type="text" placeholder="Asunto" class="w-full mt-2 rounded-lg border border-[#E3E3E3] dark:border-[#3D3A3A] bg-white dark:bg-[#0D0D0D] px-4 py-3 text-gray-700 dark:text-[#A6A6A6] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#E93B81]" />
                        </div>

                        <div>
                            <label class="block text-xs text-[#44566C] dark:text-[#A6A6A6] font-medium">Mensaje</label>
                            <textarea name="message" rows="6" placeholder="Escribe tu mensaje..." required
                                class="w-full mt-2 rounded-lg border border-[#E3E3E3] dark:border-[#3D3A3A] bg-white dark:bg-[#0D0D0D] px-4 py-3 text-gray-700 dark:text-[#A6A6A6] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#E93B81]"></textarea>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="button" class="dowanload-btn" javascript="return false;">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
