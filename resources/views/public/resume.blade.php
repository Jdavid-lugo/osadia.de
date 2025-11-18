@extends('layouts.main')
@section('content')
    <div>
        <div class="lg:rounded-2xl bg-white dark:bg-[#111111]">
            <div class="pt-12 md:py-12 px-2 sm:px-5 md:px-10 lg:px-14">
                <h2 class="after-effect after:left-52">Resumen</h2>

                <div class="lg:grid grid-cols-12 md:gap-10 pt-4 md:pt-[30px] items-center hidden">
                    <div class="col-span-12 space-y-6">
                        <div class="lg:mr-16">
                            <p class="text-[#44566c] dark:text-color-910 leading-7 mt-2">Soy Ingeniero de Software con más de 15 años de experiencia diseñando, desarrollando y manteniendo aplicaciones web y sistemas de misión crítica. Mi trayectoria combina desarrollo full‑stack, administración de bases de datos (DBA) y consultoría técnica para clientes empresariales y productos SaaS.</p>

                            <h4 class="mt-4 font-semibold dark:text-white">Enfoque y proceso</h4>
                            <p class="text-[#44566c] dark:text-color-910 leading-7 mt-2">Trabajo orientado a resultados reales: priorizo la entrega incremental, calidad de código y observabilidad. Mi proceso incluye análisis del problema, diseño centrado en el usuario, pruebas automatizadas cuando aplica, y despliegues reproducibles con contenedores y pipelines CI/CD.</p>

                            <h4 class="mt-4 font-semibold dark:text-white">Habilidades clave</h4>
                            <ul class="list-disc ml-5 mt-2 text-gray-lite dark:text-[#A6A6A6] leading-7">
                                <li>Backend: PHP (Laravel), diseño de APIs REST, microservicios, rendimiento y seguridad.</li>
                                <li>Frontend: Vue.js, componentes reusables, TailwindCSS, experiencia UI/UX.</li>
                                <li>Bases de datos: MySQL/PostgreSQL, optimización de consultas, replicación y migraciones (DBA).</li>
                                <li>Infra & DevOps: Docker, Docker Compose / Sail, despliegues automatizados, monitoreo y backups.</li>
                                <li>Tecnologías adicionales: Redis, Elasticsearch, OCR/FaceID integrations, Stripe, Charts.js.</li>
                            </ul>

                            <h4 class="mt-4 font-semibold dark:text-white">Proyectos destacados</h4>
                            <ul class="list-disc ml-5 mt-2 text-gray-lite dark:text-[#A6A6A6] leading-7">
                                <li><strong>Facial-Id SDK / Validación Fácil</strong> — Desarrollo de una solución de validación de identidad con captura OCR, verificación automática y panel administrativo, integrada con APIs para verificación en tiempo real.</li>
                                <li><strong>Portal de Gestión de Inventarios</strong> — Plataforma para control de stock y pedidos en retailers, con reportes en tiempo real y procesamiento de altas cargas.</li>
                                <li><strong>Plataforma eCommerce y Reservas</strong> — Implementación de tiendas online y sistemas de reservas con pasarelas de pago y gestión de catálogos.</li>
                                <li><strong>Consultoría DBA</strong> — Proyectos de optimización, migración y securización de bases de datos para clientes corporativos.</li>
                            </ul>

                            <h4 class="mt-4 font-semibold dark:text-white">Resultados y valores</h4>
                            <p class="text-[#44566c] dark:text-color-910 leading-7 mt-2">Mi trabajo suele traducirse en mejoras medibles: reducción de tiempos de respuesta, mayor estabilidad en producción, procesos de despliegue más seguros y entregas que alinean producto y negocio. Valoro la comunicación clara, documentación práctica y la formación continua.</p>

                            <p class="text-[#44566c] dark:text-color-910 leading-7 mt-3">Si quieres, puedo convertir este resumen en un CV descargable más detallado o crear páginas de caso de estudio para cada proyecto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
