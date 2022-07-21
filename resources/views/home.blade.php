@extends('layouts.app')

@section('content')

    @include('layouts._navbar')

    <div class="ml-navbar">
        <div class="fixed bottom-0 left-0 right-0 top-0 ml-navbar sm:bg-40% bg-auto bg-no-repeat bg-right-custom h-screen w-full" style="background-image: url('images/bg-1.png')"></div>
        <div class="h-screen w-full">
            <div id="home" data-link="0" class="section container mx-auto relative h-screen bg-gray-500 sm:bg-contain bg-auto bg-no-repeat bg-center" style="background-image: url('images/bg.png')">
                <div class="absolute top-1/2 left-0 right-0 transform -translate-y-1/2">
                    <h2 class="text-green-800 text-center">Te invitamos a nuestra boda</h2>
                    <h1 class="sm:text-8xl text-5xl text-green-800 text-center mt-4">Katya & Carlos</h1>
                    <h2 class="text-center font-medium mt-2">Sábado,</h2>
                    <h2 class="text-center -mt-3">26 de Noviembre 2022</h2>
                </div>
                <div class="inline-flex flex-col justify-center items-center absolute bottom-0 left-1/2 transform -translate-x-1/2">
                    <div class="home-dotted border-l border-amber-500 border-dotted"></div>
                    <div class="flex items-center justify-center border border-amber-500 text-amber-500 rounded-full w-10 h-10">
                        <svg class="w-3 home-arrow" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m16 8-1.41-1.41L9 12.17V0H7v12.17L1.42 6.58 0 8l8 8 8-8Z"/>
                        </svg>
                    </div>
                    <p class="text-center font-JetBrains uppercase text-xs my-4">Sigue avanzando</p>
                </div>
            </div>

            <div id="mass" data-link="1" class="section section-overflow h-screen">
                <div class="container mx-auto relative h-full">
                    <div class="absolute top-1/2 left-0 right-0 transform -translate-y-1/2 px-10">
                        <h2 class="text-5xl text-green-800 font-semibold">Celebración religiosa</h2>
                        <div class="grid grid-cols-12 mt-6">
                            <div class="col-span-4">
                                <p class="text-xl">Hora de la ceremonia</p>
                                <h2 class="text-5xl font-medium mt-3">5:00 PM</h2>
                            </div>
                            <div class="col-span-8">
                                <p class="text-xl">Lugar de la ceremonia</p>
                                <h2 class="text-5xl font-normal mt-3">Catedral de San Cristóbal de las Casas, Chiapas</h2>
                            </div>
                        </div>
                        <img src="/images/mass.png" class="absolute bottom-0 right-0 h-80" alt="Imagen de la Catedral de San Crsitóbal de las Casas">
                        <p class="text-lg mt-5">Mapa del lugar</p>
                        <div class="map-mass font-thin mt-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910.392429476662!2d-92.63886834421237!3d16.737583125625775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed453df3525fdb%3A0x6b2596848ccc3f87!2sCatedral%20de%20San%20Crist%C3%B3bal%20de%20las%20Casas!5e0!3m2!1ses!2smx!4v1657755859599!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <a href="#" class="btn btn-green inline-block px-4 py-2 mt-8">¿Cómo llegar?</a>
                    </div>
                </div>
            </div>

            <div id="party" data-link="2" class="section section-overflow h-screen">
                <div class="container mx-auto relative h-full">
                    <div class="absolute top-1/2 left-0 right-0 transform -translate-y-1/2 px-10">
                        <h2 class="text-5xl text-green-800 font-semibold">Recepción</h2>
                        <div class="grid grid-cols-12 mt-6">
                            <div class="col-span-4">
                                <p class="text-xl">Hora del evento</p>
                                <h2 class="text-5xl font-medium mt-3">7:00 PM</h2>
                            </div>
                            <div class="col-span-8">
                                <p class="text-xl">Lugar del evento</p>
                                <h2 class="text-5xl font-normal mt-3">Salón Miraval en San Cristóbal de las Casas, Chiapas</h2>
                            </div>
                        </div>
                        <img src="/images/party.png" class="absolute bottom-0 right-0 h-80" alt="Imagen de la Catedral de San Crsitóbal de las Casas">
                        <p class="text-lg mt-5">Mapa del lugar</p>
                        <div class="map-mass font-thin mt-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.907166834182!2d-92.65704157778634!3d16.73148318895141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed450b5f91d04f%3A0x4bf35078a8a99aa0!2sMiraval%20Chiapas!5e0!3m2!1ses!2smx!4v1657757195367!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <a href="#" class="btn btn-green inline-block px-4 py-2 mt-8">¿Cómo llegar?</a>
                    </div>
                </div>
            </div>

            <div id="hotel" data-link="3" class="section container mx-auto relative h-screen">
                <div class="container mx-auto relative h-full px-10 pt-5 pb-32">
                    <div class="flex items-center">
                        <h2 class="text-5xl text-green-800 font-semibold pt-2">Rocaval</h2>
                        <p class="inline-flex items-center bg-yellow-400 rounded px-2 ml-6">
                            <svg class="h-4" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#554716" d="m10 15.77 6.18 3.73-1.64-7.03L20 7.74l-7.19-.61L10 .5 7.19 7.13 0 7.74l5.46 4.73-1.64 7.03L10 15.77Z"/>
                            </svg>
                            <span class="pt-1 ml-2">Tarifa especial</span>
                        </p>
                    </div>
                    <div class="flex items-center gap-8 mt-6">
                        <img src="/images/hotel/hotel-1.png" class="w-1/2 h-80 object-auto" alt="Imagen de hotel">
                        <img src="/images/hotel/hotel-2.png" class="w-1/2 h-80 object-auto" alt="Imagen de hotel">
                    </div>
                    <div class="flex items-start mt-6">
                        <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="ml-2">
                            <span class="font-JetBrains uppercase">Descripción</span>
                            <p class="font-JetBrains text-green-800 uppercase mt-2">Puedes hospedarte en el hotel Rocaval que se encuentra en la misma ubicación del salón Miraval</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-6 mt-5">
                        <div class="col-span-1">
                            <div class="flex items-start">
                                <svg class="text-amber-500 flex-shrink-0 h-5 pt-1" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill="currentColor" d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0Zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8Zm.89-8.9c-1.78-.59-2.64-.96-2.64-1.9 0-1.02 1.11-1.39 1.81-1.39 1.31 0 1.79.99 1.9 1.34l1.58-.67c-.15-.44-.82-1.91-2.66-2.23V3H9.13v1.26c-2.6.56-2.62 2.85-2.62 2.96 0 2.27 2.25 2.91 3.35 3.31 1.58.56 2.28 1.07 2.28 2.03 0 1.13-1.05 1.61-1.98 1.61-1.82 0-2.34-1.87-2.4-2.09l-1.66.67c.63 2.19 2.28 2.78 3.02 2.96V17h1.75v-1.24c.52-.09 3.02-.59 3.02-3.22.01-1.39-.6-2.61-3-3.44Z"/>
                                </svg>
                                <div class="ml-2 pl-2px">
                                    <span class="font-JetBrains">Precio por noche</span>
                                    <p class="font-JetBrains text-green-800 uppercase mt-2">$1,099.00 MXN</p>
                                </div>
                            </div>
                            <div class="flex items-start mt-5">
                                <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 20 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="m10.787 21.502-9.79-9.79v2c0 .53.21 1.04.59 1.41l7.79 7.79c.78.78 2.05.78 2.83 0l6.21-6.21c.78-.78.78-2.05 0-2.83l-7.63 7.63Z"/>
                                    <path fill="currentColor" d="M9.377 17.912c.39.39.9.59 1.41.59.51 0 1.02-.2 1.41-.59l6.21-6.21c.78-.78.78-2.05 0-2.83l-7.79-7.79c-.37-.37-.88-.58-1.41-.58h-6.21c-1.1 0-2 .9-2 2v6.21c0 .53.21 1.04.59 1.41l7.79 7.79Zm-6.38-15.41h6.21l7.79 7.79-6.21 6.21-7.79-7.79v-6.21Z"/>
                                    <path fill="currentColor" d="M5.247 6.002a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5Z"/>
                                </svg>
                                <div class="ml-2">
                                    <span class="font-JetBrains uppercase">ID de descuento</span>
                                    <p class="font-JetBrains text-green-800 text-lg mt-2">Carlos & Katya</p>
                                    <p class="font-JetBrains text-green-800 text-lg mt-0">23 - 29 Noviembre 2022</p>
                                </div>
                            </div>
                            <div class="flex items-start mt-5">
                                <svg class="text-amber-500 flex-shrink-0 w-4 pt-2" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M6 9.5c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3Zm0-4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1Zm12-3h-8v8H2V.5H0v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4Zm2 8h-8v-6h6c1.1 0 2 .9 2 2v4Z"/>
                                </svg>
                                <div class="ml-2">
                                    <span class="font-JetBrains uppercase">¿Qué incluye?</span>
                                    <p class="font-JetBrains text-green-800 text-lg mt-2">Habitación estándar sencilla o doble</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="flex items-start pl-2">
                                <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M12 18h-2v-2h2v2Zm-2-7H8v5h2v-5Zm8-2h-2v4h2V9Zm-2-2h-2v2h2V7ZM4 9H2v2h2V9ZM2 7H0v2h2V7Zm7-5h2V0H9v2Zm-7.5-.5v3h3v-3h-3ZM6 6H0V0h6v6Zm-4.5 7.5v3h3v-3h-3ZM6 18H0v-6h6v6Zm7.5-16.5v3h3v-3h-3ZM18 6h-6V0h6v6Zm-2 10v-3h-4v2h2v3h4v-2h-2Zm-2-7h-4v2h4V9Zm-4-2H4v2h2v2h2V9h2V7Zm1-1V4H9V2H7v4h4ZM3.75 2.25h-1.5v1.5h1.5v-1.5Zm0 12h-1.5v1.5h1.5v-1.5Zm12-12h-1.5v1.5h1.5v-1.5Z"/>
                                </svg>
                                <p class="font-JetBrains uppercase ml-3">Escanea el QR para reservar</p>
                            </div>
                            <img src="/images/qr.svg" class="h-56 object-auto mt-2" alt="Imagen del QR">
                        </div>
                    </div>
                    <div class="mt-14">
                        <div class="flex items-start border-t border-amber-500 pt-5">
                            <h2 class="bg-gray-500 pr-7 -mt-12">Más opciones de reservación</h2>
                        </div>
                        <div class="grid grid-cols-3 gap-6 mt-4">
                            <div class="col-span-1">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M3.54 2c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51Zm9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19ZM4.5 0H1C.45 0 0 .45 0 1c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 5.5 1c0-.55-.45-1-1-1Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Teléfono</span>
                                        <p class="font-JetBrains text-green-800 text-lg mt-2">
                                            <a href="tel:9676749500" class="block">(967) 674 9500</a>
                                        </p>
                                        <p class="font-JetBrains text-green-800 text-lg mt-0">
                                            <a href="tel:9676781622" class="block">967 678 1622</a>
                                        </p>
                                        <p class="font-JetBrains text-green-800 text-lg mt-0">
                                            <a href="tel:9671380872" class="block">967 138 0872</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Correo electrónico</span>
                                        <p class="font-JetBrains text-green-800 text-lg mt-2">
                                            <a href="mailto:miraval@hotelrocaval.com" class="block">miraval@hotelrocaval.com</a>
                                        </p>
                                        <p class="font-JetBrains text-green-800 text-lg mt-0">
                                            <a href="mailto:ventas@hotelrocaval.com" class="block">ventas@hotelrocaval.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Redes sociales</span>
                                        <p class="font-JetBrains text-green-800 text-lg mt-2">
                                            <a href="https://wa.me/+529671411741/?text=Deseo%20reservar%20y%20vivir%20la%20mejor%20estancia%20de%20mi%20vida.%0A%23ExperienciaRocaval" class="block uppercase" target="_blank" rel="nofollow noopener noreferrer">Whatsapp</a>
                                        </p>
                                        <p class="font-JetBrains text-green-800 text-lg mt-0">
                                            <a href="https://www.facebook.com/HotelRocaval/" class="block uppercase" target="_blank" rel="nofollow noopener noreferrer">Facebook</a>
                                        </p>
                                        <p class="font-JetBrains text-green-800 text-lg mt-0">
                                            <a href="https://www.instagram.com/hotelrocaval" class="block uppercase" target="_blank" rel="nofollow noopener noreferrer">Instagram</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-14">
                        <div class="flex items-start border-t border-amber-500 pt-5">
                            <h2 class="bg-gray-500 pr-7 -mt-12">Mapa del hotel</h2>
                        </div>
                        <div class="map-party mt-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.907166834182!2d-92.65704157778634!3d16.73148318895141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed450b5f91d04f%3A0x4bf35078a8a99aa0!2sMiraval%20Chiapas!5e0!3m2!1ses!2smx!4v1657757195367!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div id="taxis" data-link="4" class="section container mx-auto relative h-screen"></div>
            <div id="restaurants" data-link="5" class="section container mx-auto relative h-screen"></div>
            <div id="location" data-link="6" class="section container mx-auto relative h-screen"></div>
            <div id="airport" data-link="7" class="section container mx-auto relative h-screen"></div>

            <div id="gifts" data-link="8" class="section section-overflow h-screen">
                <div class="container mx-auto relative h-full">
                    <div class="absolute top-1/2 left-0 right-0 transform -translate-y-1/2 px-10">
                        <h2 class="text-5xl text-green-800 font-semibold">Mesa de regalos</h2>
                        <h4 class="mt-6">Nuestro mayor anhelo es tu presencia; pero, si deseas hacernos un obsequio te sugerimos estas opciones:</h4>
                        <div class="grid grid-cols-3 gap-7 mt-14">
                            <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                                <h2>Liverpool</h2>
                                <img src="/images/brands/liverpool.png" class="w-2/3 h-18 object-contain mx-auto mt-6" alt="Imagen de Liverpool">
                                <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 20 24" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="m10.787 21.502-9.79-9.79v2c0 .53.21 1.04.59 1.41l7.79 7.79c.78.78 2.05.78 2.83 0l6.21-6.21c.78-.78.78-2.05 0-2.83l-7.63 7.63Z"/>
                                        <path fill="currentColor" d="M9.377 17.912c.39.39.9.59 1.41.59.51 0 1.02-.2 1.41-.59l6.21-6.21c.78-.78.78-2.05 0-2.83l-7.79-7.79c-.37-.37-.88-.58-1.41-.58h-6.21c-1.1 0-2 .9-2 2v6.21c0 .53.21 1.04.59 1.41l7.79 7.79Zm-6.38-15.41h6.21l7.79 7.79-6.21 6.21-7.79-7.79v-6.21Z"/>
                                        <path fill="currentColor" d="M5.247 6.002a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Código de mesa de regalos</span>
                                        <p class="font-JetBrains text-green-800 text-lg mt-2">50942558</p>
                                    </div>
                                </div>
                                <div class="flex items-center border-t border-amber-500 pt-5 mt-5">
                                    <a
                                        href="https://mesaderegalos.liverpool.com.mx/eventodebusqueda#eventnumber"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ir al sitio
                                    </a>
                                </div>
                            </div>
                            <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                                <h2>Amazon</h2>
                                <img src="/images/brands/amazon.png" class="w-2/3 h-18 object-contain mx-auto mt-6" alt="Imagen de Amazon">
                                <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Búsqueda de mesa de regalos</span>
                                        <p class="font-JetBrains text-green-800 text-lg mt-2">Katya Carlos</p>
                                    </div>
                                </div>
                                <div class="flex items-center border-t border-amber-500 pt-5 mt-5">
                                    <a
                                        href="https://www.amazon.com.mx/wedding/registry/2HPPOD6V3RLEV?ref=wr_search_page_result_"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ir al sitio
                                    </a>
                                </div>
                            </div>
                            <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                                <h2>Transferencia</h2>
                                <img src="/images/brands/banamex.png" class="w-2/3 h-18 object-contain mx-auto mt-6" alt="Imagen de Amazon">
                                <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                    </svg>
                                    <div class="w-full ml-2">
                                        <span class="font-JetBrains uppercase">CLABE Interbancaria</span>
                                        <div class="w-full relative">
                                            <p class="clipboard-content font-JetBrains text-green-800 text-lg mt-2">002180902254138854</p>
                                            <a href="#" class="clipboard-copy absolute right-0 top-0 block">
                                                <abbr class="clipboard-defult" title="Copiar">
                                                    <svg class="text-amber-500 hover:scale-110 duration-300 ease-in-out flex-shrink-0 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                                    </svg>
                                                </abbr>
                                                <abbr class="clipboard-success" title="Copiado">
                                                    <svg class="text-green-500 flex-shrink-0 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </abbr>
                                                <abbr class="clipboard-error" title="Error al copiar">
                                                    <svg class="text-red-500 flex-shrink-0 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </abbr>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-green-800 font-JetBrains mt-6">Citibanamex</p>
                                <p class="text-green-800 font-JetBrains mt-1">Carlos Armando Hernández Anza</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="notes" data-link="9" class="section container mx-auto relative h-screen"></div>

            <div id="confirm" data-link="10" class="section container mx-auto relative h-screen">
                <div class="absolute top-1/2 left-0 right-0 transform -translate-y-1/2">
                    <h1 class="text-green-800 text-center">Familia Lorem Ipsum</h1>
                    <h2 class="text-center mt-6">Vestimenta formal</h2>
                    <h2 class="text-center">Sin niños</h2>
                    <h2 class="text-center font-medium mt-6">Pase para <span class="font-JetBrains underline text-green-800 font-bold">{{ $user->companion }}</span> personas</h2>
                    
                    <confirm-attend :current-user="{{ json_encode(auth()->check() ? auth()->user() : null) }}" />></confirm-attend>

                </div>
            </div>
        </div>
    </div>

@endsection
