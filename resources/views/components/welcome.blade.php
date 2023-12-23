<div class="flex flex-col">
    <div class="mb-4">
        <div>
            <!-- Video de presentación -->
            <div class="relative aspect-w-16 aspect-h-9">
                <!-- Contenedor del video -->
                <div class="w-full mx-auto h-[94vh]">
                    <video class="object-cover w-full h-full" src="{{ asset('video/video.mp4') }}" autoplay muted
                        loop></video>
                </div>
                <!-- Contenedor del mensaje superpuesto -->
                <div class="absolute inset-0 flex items-center justify-center w-full h-full bg-black bg-opacity-50">
                    <div class="p-4 text-center text-gray-300">
                        <h2 class="text-6xl font-bold">¡Bienvenido a BlanuSeguros!</h2>
                        <p class="mt-2 text-4xl">"Tu seguridad, nuestro compromiso."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="features"
        class="container mx-auto px-4 space-y-6 bg-slate-50 py-8 dark:bg-transparent md:py-12 lg:py-20">

        <div class="mx-auto text-center">
            <div class="max-w-[58rem] mx-auto flex flex-col items-center space-y-4">
                <h2 class="font-bold text-5xl leading-[1.1] text-[#183252] sm:text-6xl md:text-7xl">Descubre Nuestros
                    Servicios de Seguros</h2>

                <p class="max-w-[85%] mx-auto leading-normal text-muted-foreground sm:text-2xl sm:leading-7">
                    Brindamos servicios personalizados que se adaptan a tus necesidades. Tu seguridad es nuestra
                    prioridad.
                </p>
            </div>
        </div>

        <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3">


            <div
                class="relative overflow-hidden rounded-lg border bg-white hover:bg-blue-100 transition-all duration-300 select-none hover:shadow hover:shadow-blue-900 p-2">
                <div class="flex h-[250px] flex-col justify-between rounded-md p-6">
                    <a href="#">
                        <i class="fa-solid fa-car fa-3x text-orange-900"></i>
                        <div class="space-y-2">
                            <h3 class="font-bold text-orange-900 text-2xl">Seguro de Automóviles</h3>
                            <p class="text-md text-muted-foreground">Tu seguridad en la carretera es nuestra prioridad.
                                Protegemos tu vehículo y a ti en caso de cualquier imprevisto.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div
                class="relative overflow-hidden rounded-lg border bg-white hover:bg-blue-100 transition-all duration-300 select-none hover:shadow hover:shadow-blue-900 p-2">
                <div class="flex h-[250px] flex-col justify-between rounded-md p-6">
                    <a href="#">
                        <i class="fa-solid fa-house fa-3x text-sky-500"></i>
                        <div class="space-y-2">
                            <h3 class="font-bold text-sky-500 text-2xl">Seguro de Vivienda</h3>
                            <p class="text-md text-muted-foreground">Protegemos tu hogar contra riesgos como incendios,
                                robos y daños estructurales, brindándote tranquilidad y seguridad.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div
                class="relative overflow-hidden rounded-lg border bg-white hover:bg-blue-100 transition-all duration-300 select-none hover:shadow hover:shadow-blue-900 p-2">
                <div class="flex h-[250px] flex-col justify-between rounded-md p-6">
                    <a href="#">
                        <i class="fa-solid fa-notes-medical fa-3x text-emerald-500"></i>
                        <div class="space-y-2">
                            <h3 class="font-bold text-emerald-500 text-2xl">Seguro de Salud</h3>
                            <p class="text-md text-muted-foreground">Cuida de tu bienestar y el de tu familia. Nuestro
                                seguro de salud ofrece cobertura integral para gastos médicos y hospitalarios.</p>
                    </a>
                </div>
            </div>
        </div>

        <div
            class="relative overflow-hidden rounded-lg border bg-white hover:bg-blue-100 transition-all duration-300 select-none hover:shadow hover:shadow-blue-900 p-2">
            <div class="flex h-[250px] flex-col justify-between rounded-md p-6">
                <a href="#">
                    <i class="fa-solid fa-plane fa-3x text-yellow-400"></i>
                    <div class="space-y-2">
                        <h3 class="font-bold text-yellow-400 text-2xl">Seguro de Viaje</h3>
                        <p class="text-md text-muted-foreground">Viaja con confianza. Nuestro seguro de viaje te protege
                            ante imprevistos, como cancelaciones, pérdida de equipaje y asistencia médica en el
                            extranjero.</p>
                    </div>
                </a>
            </div>
        </div>

        <div
            class="relative overflow-hidden rounded-lg border bg-white hover:bg-blue-100 transition-all duration-300 select-none hover:shadow hover:shadow-blue-900 p-2">
            <div class="flex h-[250px] flex-col justify-between rounded-md p-6">
                <a href="#">
                    <i class="fa-solid fa-heart-pulse fa-3x text-red-300"></i>
                    <div class="space-y-2">
                        <h3 class="font-bold text-red-300 text-2xl">Seguro de Vida</h3>
                        <p class="text-md text-muted-foreground">Protege el futuro de tus seres queridos. Nuestro seguro
                            de vida ofrece cobertura en caso de fallecimiento, proporcionando apoyo financiero y
                            seguridad económica.</p>
                    </div>
                </a>
            </div>
        </div>

        <div
            class="relative overflow-hidden rounded-lg border bg-white hover:bg-blue-100 transition-all duration-300 select-none hover:shadow hover:shadow-blue-900 p-2">
            <div class="flex h-[250px] flex-col justify-between rounded-md p-6">
                <a href="#">
                    <i class="fa-solid fa-briefcase fa-3x text-purple-700"></i>
                    <div class="space-y-2 p-2">
                        <h3 class="font-bold text-purple-700 text-2xl">Seguro de Negocios</h3>
                        <p class="text-md text-muted-foreground">Asegura la continuidad de tu empresa. Ofrecemos
                            soluciones de seguros para proteger tus activos, responsabilidad civil y mantener la
                            estabilidad financiera de tu negocio.
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <div
            class="relative overflow-hidden rounded-lg border bg-white hover:bg-blue-100 transition-all duration-300 select-none hover:shadow hover:shadow-blue-900 p-2">
            <div class="flex h-[270px] flex-col justify-between rounded-md p-6">
                <a href="#">
                    <i class="fa-solid fa-shield-dog fa-3x text-gray-500"></i>
                    <div class="space-y-2">
                        <h3 class="font-bold text-gray-500 text-2xl">Seguro de Mascotas</h3>
                        <p class="text-md text-muted-foreground">Protege a tu mejor amigo. Nuestro seguro de mascotas
                            cubre gastos veterinarios, cuidados preventivos y situaciones imprevistas que puedan afectar
                            la salud de tu mascota.</p>

                    </div>
                </a>
            </div>
        </div>

        <div
            class="relative overflow-hidden rounded-lg border bg-white hover:bg-blue-100 transition-all duration-300 select-none hover:shadow hover:shadow-blue-900 p-2">
            <div class="flex h-[270px] flex-col justify-between rounded-md p-6">
                <a href="#">
                    <i class="fa-solid fa-briefcase-medical fa-3x text-blue-500"></i>
                    <div class="space-y-2">
                        <h3 class="font-bold text-blue-500 text-2xl">Seguro de Salud Empresarial</h3>
                        <p class="text-md text-muted-foreground">Cuida de la salud de tus empleados. Nuestro seguro de
                            salud empresarial proporciona cobertura integral para gastos médicos y promueve el bienestar
                            de tu equipo.</p>
                    </div>
                </a>
            </div>
        </div>

        <div
            class="relative overflow-hidden rounded-lg border bg-white hover:bg-blue-100 transition-all duration-300 select-none hover:shadow hover:shadow-blue-900 p-2">
            <div class="flex h-[270px] flex-col justify-between rounded-md p-6">
                <a href="#">
                    <i class="fa-solid fa-graduation-cap fa-3x text-pink-500"></i>
                    <div class="space-y-2">
                        <h3 class="font-bold text-pink-500 text-2xl">Seguro de Educación</h3>
                        <p class="text-sm text-muted-foreground">Invierte en el futuro de tus seres queridos. Nuestro
                            seguro de educación proporciona beneficios para la educación de tus hijos, asegurando su
                            crecimiento académico.</p>
                    </div>
                </a>
            </div>
        </div>
</div>
</section>

<div class="flex  justify-center mb-10 "><a href="#"
        class="text-indigo-900 hover:font-semibold hover:underline text-xl hover:text-indigo-700"> Ver más</a></div>

<x-footer />
</div>