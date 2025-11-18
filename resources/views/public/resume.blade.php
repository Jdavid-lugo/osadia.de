@extends('layouts.main')
@section('content')
    <div>
        <div class="lg:rounded-2xl bg-white dark:bg-[#111111]">
            <div class="pt-12 md:py-12 px-2 sm:px-5 md:px-10 lg:px-14">
                <h2 class="after-effect after:left-52">Resumen</h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 pt-4 md:pt-[30px]">
                    <div class="space-y-6 px-4 lg:px-0">
                        <div>
                            <p class="text-[#44566c] dark:text-color-910 leading-7">Soy Ingeniero de Software con más de 15 años de experiencia diseñando, desarrollando y manteniendo aplicaciones web y sistemas de misión crítica. Mi trayectoria combina desarrollo full‑stack, administración de bases de datos (DBA) y consultoría técnica para clientes empresariales y productos SaaS.</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold dark:text-white mb-2">Enfoque y proceso</h4>
                            <p class="text-[#44566c] dark:text-color-910 leading-7">Trabajo orientado a resultados reales: priorizo la entrega incremental, calidad de código y observabilidad. Mi proceso incluye análisis del problema, diseño centrado en el usuario, pruebas automatizadas cuando aplica, y despliegues reproducibles con contenedores y pipelines CI/CD.</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold dark:text-white mb-2">Resultados y valores</h4>
                            <p class="text-[#44566c] dark:text-color-910 leading-7">Mi trabajo suele traducirse en mejoras medibles: reducción de tiempos de respuesta, mayor estabilidad en producción, procesos de despliegue más seguros y entregas que alinean producto y negocio. Valoro la comunicación clara, documentación práctica y la formación continua.</p>
                            <p class="text-[#44566c] dark:text-color-910 leading-7 mt-3">Si quieres, puedo convertir este resumen en un CV descargable más detallado o crear páginas de caso de estudio para cada proyecto.</p>
                        </div>
                    </div>
                    <div class="space-y-6 px-4 lg:px-0">
                        <div>
                            <h4 class="text-lg font-semibold dark:text-white mb-2">Habilidades clave</h4>
                            <ul class="list-disc ml-5 text-gray-lite dark:text-[#A6A6A6] leading-7">
                                <li>Backend: PHP (Laravel), diseño de APIs REST, microservicios.</li>
                                <li>Frontend: Vue.js, componentes reusables, TailwindCSS.</li>
                                <li>Bases de datos: MySQL/PostgreSQL, optimización y replicación (DBA).</li>
                                <li>Infra & DevOps: Docker, Docker Compose, despliegues automatizados.</li>
                                <li>Tecnologías adicionales: Redis, Elasticsearch, Stripe, Charts.js.</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold dark:text-white mb-2">Proyectos destacados</h4>
                            <ul class="list-disc ml-5 text-gray-lite dark:text-[#A6A6A6] leading-7">
                                <li><strong>Facial-Id SDK / Validación Fácil</strong> — Solución de validación de identidad con OCR y APIs en tiempo real.</li>
                                <li><strong>Portal de Gestión de Inventarios</strong> — Plataforma para control de stock y pedidos en retailers con reportes en tiempo real.</li>
                                <li><strong>Plataforma eCommerce y Reservas</strong> — Tiendas online y sistemas de reservas con pasarelas de pago.</li>
                                <li><strong>Consultoría DBA</strong> — Optimización, migración y securización de bases de datos corporativas.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
