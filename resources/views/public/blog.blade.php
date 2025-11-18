@extends('layouts.main')
@section('content')
    <div>
        <div class="lg:rounded-2xl bg-white dark:bg-[#111111]">
            <div class="pt-12 md:py-12 px-2 sm:px-5 md:px-10 lg:px-14">
                <h2 class="after-effect after:left-52">Blog</h2>

                <div class="pt-6 grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                    <article class="bg-white dark:bg-[#0d0d0d] rounded-lg p-6 shadow-sm">
                        <h3 class="text-xl font-semibold dark:text-white">Entrada reciente</h3>
                        <p class="text-gray-lite dark:text-[#A6A6A6] mt-2">Resumen breve de la entrada del blog. Sustituye por el contenido real o itera con un loop de posts si integras un CMS / DB.</p>
                    </article>
                    <article class="bg-white dark:bg-[#0d0d0d] rounded-lg p-6 shadow-sm">
                        <h3 class="text-xl font-semibold dark:text-white">Otra entrada</h3>
                        <p class="text-gray-lite dark:text-[#A6A6A6] mt-2">Pequeña descripción. Añade enlaces a posts individuales si es necesario.</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
