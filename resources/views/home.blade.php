@extends('layouts.app')

@section('content')

    @include('layouts._navbar')

    <div class="ml-navbar">
        <div class="fixed bottom-0 left-0 right-0 top-0 ml-navbar sm:bg-40% bg-auto bg-no-repeat bg-right-custom h-screen w-full" style="background-image: url('images/bg-1.png')"></div>
        <div class="w-full">
            <div id="home" data-link="0" class="section container mx-auto relative min-h-screen bg-gray-500 sm:bg-contain bg-auto bg-no-repeat bg-center" style="background-image: url('images/bg.png')">
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

            <div id="mass" data-link="1" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative h-full px-10 pt-5 pb-32">
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
                    <img src="/images/mass.png" class="absolute bottom-0 right-0 h-80 mb-20" alt="Imagen de la Catedral de San Crsitóbal de las Casas">
                    <p class="text-lg mt-5">Mapa del lugar</p>
                    <div class="map-mass font-thin mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910.392429476662!2d-92.63886834421237!3d16.737583125625775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed453df3525fdb%3A0x6b2596848ccc3f87!2sCatedral%20de%20San%20Crist%C3%B3bal%20de%20las%20Casas!5e0!3m2!1ses!2smx!4v1657755859599!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <a
                        href="https://www.google.com/maps/dir//Catedral+de+San+Crist%C3%B3bal+de+las+Casas+Plaza+31+de+Marzo+Norte+No.+3+Centro+29200+San+Crist%C3%B3bal+de+las+Casas,+Chis./@16.7376572,-92.6727937,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x85ed453df3525fdb:0x6b2596848ccc3f87!2m2!1d-92.637774!2d16.737578!3e0"
                        class="btn btn-green inline-block px-4 py-2 mt-8"
                        target="_blank"
                        rel="nofollow noopener noreferrer"
                    >
                        ¿Cómo llegar?
                    </a>
                </div>
            </div>

            <div id="party" data-link="2" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative h-full px-10 pt-5 pb-32">
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
                    <img src="/images/party.png" class="absolute bottom-0 right-0 h-80 mb-20" alt="Imagen de la Catedral de San Crsitóbal de las Casas">
                    <p class="text-lg mt-5">Mapa del lugar</p>
                    <div class="map-mass font-thin mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.907166834182!2d-92.65704157778634!3d16.73148318895141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed450b5f91d04f%3A0x4bf35078a8a99aa0!2sMiraval%20Chiapas!5e0!3m2!1ses!2smx!4v1657757195367!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <a
                        href="https://www.google.com/maps/dir//Miraval+Chiapas+M%C3%A9xico+%235+Barrio+de+Fatima+29264+San+Crist%C3%B3bal+de+las+Casas,+Chis./@16.7314781,-92.6525569,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x85ed450b5f91d04f:0x4bf35078a8a99aa0"
                        class="btn btn-green inline-block px-4 py-2 mt-8"
                        target="_blank"
                        rel="nofollow noopener noreferrer"
                    >
                        ¿Cómo llegar?
                    </a>
                </div>
            </div>

            <div id="hotel" data-link="3" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative h-full px-10 pt-5 pb-20">
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
                        <img src="/images/hotel/hotel-1.png" class="w-1/2 h-80 object-auto rounded-md" alt="Imagen de hotel">
                        <img src="/images/hotel/hotel-2.png" class="w-1/2 h-80 object-auto rounded-md" alt="Imagen de hotel">
                    </div>
                    <div class="flex items-start mt-6">
                        <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="ml-2">
                            <span class="font-JetBrains uppercase">Descripción</span>
                            <p class="font-JetBrains font-medium text-green-800 uppercase mt-2">Puedes hospedarte en el hotel Rocaval que se encuentra en la misma ubicación del salón Miraval</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-6 mt-5">
                        <div class="col-span-1">
                            <div class="flex items-start">
                                <svg class="text-amber-500 flex-shrink-0 h-5 pt-1" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill="currentColor" d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0Zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8Zm.89-8.9c-1.78-.59-2.64-.96-2.64-1.9 0-1.02 1.11-1.39 1.81-1.39 1.31 0 1.79.99 1.9 1.34l1.58-.67c-.15-.44-.82-1.91-2.66-2.23V3H9.13v1.26c-2.6.56-2.62 2.85-2.62 2.96 0 2.27 2.25 2.91 3.35 3.31 1.58.56 2.28 1.07 2.28 2.03 0 1.13-1.05 1.61-1.98 1.61-1.82 0-2.34-1.87-2.4-2.09l-1.66.67c.63 2.19 2.28 2.78 3.02 2.96V17h1.75v-1.24c.52-.09 3.02-.59 3.02-3.22.01-1.39-.6-2.61-3-3.44Z"/>
                                </svg>
                                <div class="ml-2 pl-2px">
                                    <span class="font-JetBrains uppercase">Precio por noche</span>
                                    <p class="font-JetBrains font-medium text-green-800 uppercase mt-2">$1,099.00 MXN</p>
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
                                    <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">Carlos & Katya</p>
                                </div>
                            </div>
                            <div class="flex items-start mt-5">
                                <svg class="text-amber-500 flex-shrink-0 w-4 pt-2" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M6 9.5c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3Zm0-4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1Zm12-3h-8v8H2V.5H0v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4Zm2 8h-8v-6h6c1.1 0 2 .9 2 2v4Z"/>
                                </svg>
                                <div class="ml-2">
                                    <span class="font-JetBrains uppercase">¿Qué incluye?</span>
                                    <p class="font-JetBrains font-medium text-green-800 text-lg uppercase mt-2">Habitación estándar sencilla o doble</p>
                                    <p class="font-JetBrains font-medium text-green-800 mt-2">* Disponible del 23 al 29 Noviembre 2022</p>
                                    <p class="font-JetBrains font-medium text-green-800 mt-1">* Pregunta por la Junior Suite</p>
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
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a href="tel:9676749500" class="block">(967) 674 9500</a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-0">
                                            <a href="tel:9676781622" class="block">967 678 1622</a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-0">
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
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a href="mailto:miraval@hotelrocaval.com" class="block">miraval@hotelrocaval.com</a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-0">
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
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a href="https://wa.me/+529671411741/?text=Deseo%20reservar%20y%20vivir%20la%20mejor%20estancia%20de%20mi%20vida.%0A%23ExperienciaRocaval" class="block uppercase" target="_blank" rel="nofollow noopener noreferrer">Whatsapp</a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-0">
                                            <a href="https://www.facebook.com/HotelRocaval/" class="block uppercase" target="_blank" rel="nofollow noopener noreferrer">Facebook</a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-0">
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

            <div id="airport" data-link="4" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative h-full px-10 pt-5 pb-20">
                    <h2 class="text-5xl text-green-800 font-semibold pt-2">Aeropuerto</h2>
                    <h4 class="mt-6">Sobre tu llegada a Chiapas</h4>
                    <p class="font-JetBrains font-medium text-green-800 uppercase mt-1">
                        El aeropuerto más cercano a San Cristóbal de las Casas es el Aeropuerto Internacional Ángel Albino Corzo. Para ir a San Cristóbal de las Casas te sugerimos estas opciones y si necesitas más información de transporte puedes
                        <a
                            href="http://www.chiapasdespega.com/?fbclid=IwAR3sp98MtNkWoMjRR-QgShIa4Ukb8J_dOSudYVEo_2GQa8-m2P7-UOiZ2QM"
                            class="inline-flex items-center font-medium normal-case text-lg"
                            target="_blank"
                            rel="nofollow noopener noreferrer"
                        >
                            <svg class="text-green-800 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            <span class="ml-2">Ir al sitio</span>
                        </a>
                    </p>
                    <div class="grid grid-cols-3 gap-7 mt-8">
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>ADO</h4>
                            <img src="/images/taxis/ado.png" class="h-18 object-contain rounded-md mx-auto mt-3" alt="Imagen de ADO">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0Zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8Zm.89-8.9c-1.78-.59-2.64-.96-2.64-1.9 0-1.02 1.11-1.39 1.81-1.39 1.31 0 1.79.99 1.9 1.34l1.58-.67c-.15-.44-.82-1.91-2.66-2.23V3H9.13v1.26c-2.6.56-2.62 2.85-2.62 2.96 0 2.27 2.25 2.91 3.35 3.31 1.58.56 2.28 1.07 2.28 2.03 0 1.13-1.05 1.61-1.98 1.61-1.82 0-2.34-1.87-2.4-2.09l-1.66.67c.63 2.19 2.28 2.78 3.02 2.96V17h1.75v-1.24c.52-.09 3.02-.59 3.02-3.22.01-1.39-.6-2.61-3-3.44Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Comprar</span>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a
                                                href="https://www.ado.com.mx/viajes/terminal-aeropuerto-angel-albino-a-terminal-san-cristobal-de-las-casas/?fechaIda=25/11/2022%2000:00:00"
                                                class="flex items-center"
                                                target="_blank"
                                                rel="nofollow noopener noreferrer"
                                            >
                                                <svg class="text-green-800 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                </svg>
                                                <span class="ml-2">Ir al sitio</span>
                                            </a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-0">
                                            <a href="https://wa.me/5215543864652" class="flex items-center" target="_blank" rel="nofollow noopener noreferrer">
                                                <svg class="text-green-800 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                                </svg>
                                                <span class="ml-3">55 4386 4652</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Información</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Precio: $250.00 MXN - 1 persona
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800">
                                            Corroborar fecha y hora
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Taxi Seguro San Cristóbal</h4>
                            <img src="/images/taxis/taxi-2.jpg" class="h-18 object-contain rounded-md mx-auto mt-3" alt="Imagen de Taxi">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0Zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8Zm.89-8.9c-1.78-.59-2.64-.96-2.64-1.9 0-1.02 1.11-1.39 1.81-1.39 1.31 0 1.79.99 1.9 1.34l1.58-.67c-.15-.44-.82-1.91-2.66-2.23V3H9.13v1.26c-2.6.56-2.62 2.85-2.62 2.96 0 2.27 2.25 2.91 3.35 3.31 1.58.56 2.28 1.07 2.28 2.03 0 1.13-1.05 1.61-1.98 1.61-1.82 0-2.34-1.87-2.4-2.09l-1.66.67c.63 2.19 2.28 2.78 3.02 2.96V17h1.75v-1.24c.52-.09 3.02-.59 3.02-3.22.01-1.39-.6-2.61-3-3.44Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Comprar</span>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a href="tel:9671849708" class="block">967 184 9708</a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-0">
                                            <a href="https://wa.me/+529671849708" class="flex items-center" target="_blank" rel="nofollow noopener noreferrer">
                                                <svg class="text-green-800 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                                </svg>
                                                <span class="ml-2">967 184 9708</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Información</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Precio: $900.00 MXN - 4 personas
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800">
                                            De 08:00 a 22:00 horas
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Taxis azules</h4>
                            <img src="/images/taxis/taxi-4.png" class="h-18 object-contain rounded-md mx-auto mt-3" alt="Imagen de Taxi">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0Zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8Zm.89-8.9c-1.78-.59-2.64-.96-2.64-1.9 0-1.02 1.11-1.39 1.81-1.39 1.31 0 1.79.99 1.9 1.34l1.58-.67c-.15-.44-.82-1.91-2.66-2.23V3H9.13v1.26c-2.6.56-2.62 2.85-2.62 2.96 0 2.27 2.25 2.91 3.35 3.31 1.58.56 2.28 1.07 2.28 2.03 0 1.13-1.05 1.61-1.98 1.61-1.82 0-2.34-1.87-2.4-2.09l-1.66.67c.63 2.19 2.28 2.78 3.02 2.96V17h1.75v-1.24c.52-.09 3.02-.59 3.02-3.22.01-1.39-.6-2.61-3-3.44Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Comprar</span>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a href="tel:9616145246" class="block">961 614 5246</a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-0">
                                            <a href="https://wa.me/+529611107321" class="flex items-center" target="_blank" rel="nofollow noopener noreferrer">
                                                <svg class="text-green-800 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                                </svg>
                                                <span class="ml-2">961 110 7321</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Información</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Precio: $900.00 MXN - 4 personas
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800">
                                            De 08:00 a 22:00 horas
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Taxi plus verdes</h4>
                            <img src="/images/taxis/taxi-5.png" class="h-18 object-contain rounded-md mx-auto mt-3" alt="Imagen de Taxi">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0Zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8Zm.89-8.9c-1.78-.59-2.64-.96-2.64-1.9 0-1.02 1.11-1.39 1.81-1.39 1.31 0 1.79.99 1.9 1.34l1.58-.67c-.15-.44-.82-1.91-2.66-2.23V3H9.13v1.26c-2.6.56-2.62 2.85-2.62 2.96 0 2.27 2.25 2.91 3.35 3.31 1.58.56 2.28 1.07 2.28 2.03 0 1.13-1.05 1.61-1.98 1.61-1.82 0-2.34-1.87-2.4-2.09l-1.66.67c.63 2.19 2.28 2.78 3.02 2.96V17h1.75v-1.24c.52-.09 3.02-.59 3.02-3.22.01-1.39-.6-2.61-3-3.44Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Comprar</span>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a href="tel:9612346718" class="block">961 234 6718</a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-0">
                                            <a href="https://wa.me/+529612346718" class="flex items-center" target="_blank" rel="nofollow noopener noreferrer">
                                                <svg class="text-green-800 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                                </svg>
                                                <span class="ml-2">961 234 6718</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Información</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Precio: $900.00 MXN - 4 personas
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800">
                                            De 08:00 a 22:00 horas
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Taxis afuera del aeropuerto</h4>
                            <img src="/images/taxis/taxi-6.jpg" class="h-18 object-contain rounded-md mx-auto mt-3" alt="Imagen de Taxi">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Información</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Precio: $350.00 MXN a $450.00 MXN - 1 persona
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Desde el aeropuerto al centro de Tuxtla Gutiérrez
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Renta de auto</h4>
                            <img src="/images/taxis/rent.png" class="h-18 object-contain rounded-md mx-auto mt-3" alt="Imagen de Taxi">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Información</span>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a
                                                href="http://www.chiapasdespega.com/?fbclid=IwAR3sp98MtNkWoMjRR-QgShIa4Ukb8J_dOSudYVEo_2GQa8-m2P7-UOiZ2QM#matrix_1437115"
                                                class="flex items-center"
                                                target="_blank"
                                                rel="nofollow noopener noreferrer"
                                            >
                                                <svg class="text-green-800 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                </svg>
                                                <span class="ml-2">Obtener información</span>
                                            </a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Desde el aeropuerto puedes rentar un auto. Existen muchas compañías para poder hacerlo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="taxis" data-link="5" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative h-full px-10 pt-5 pb-20">
                    <h2 class="text-5xl text-green-800 font-semibold">Taxis</h2>
                    <h4 class="mt-6">Dentro de San Cristóbal de las Casas</h4>
                    <p class="font-JetBrains font-medium text-green-800 uppercase mt-1">Se recomienda llamar con mucho tiempo de anticipación (<strong class="font-black">15 minutos</strong> de espera aproximadamente). <strong class="font-black">No</strong> cuentan con taxímetros. Dentro de la ciudad cobran un promedio de <strong class="font-black">$50.00 MXN</strong> por viaje.</p>
                    <div class="grid grid-cols-3 gap-7 mt-8">
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Hospital de las Culturas</h4>
                            <img src="/images/taxis/taxi-1.jpg" class="h-28 object-contain rounded-md mx-auto mt-3" alt="Imagen de Taxi">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M3.54 2c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51Zm9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19ZM4.5 0H1C.45 0 0 .45 0 1c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 5.5 1c0-.55-.45-1-1-1Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Teléfono</span>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a href="tel:9671222851" class="block">967 122 2851</a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-0">
                                            <a href="tel:9676832047" class="block">967 683 2047</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Horario</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            24 horas del día los 7 días de la semana
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Taxi Seguro San Cristóbal</h4>
                            <img src="/images/taxis/taxi-2.jpg" class="h-28 object-contain rounded-md mx-auto mt-3" alt="Imagen de Taxi">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M3.54 2c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51Zm9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19ZM4.5 0H1C.45 0 0 .45 0 1c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 5.5 1c0-.55-.45-1-1-1Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Teléfono</span>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a href="tel:9671849708" class="block">967 184 9708</a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-0">
                                            <a href="https://wa.me/+529671849708" class="flex items-center" target="_blank" rel="nofollow noopener noreferrer">
                                                <svg class="text-green-800 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                                </svg>
                                                <span class="ml-2">967 184 9708</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Horario</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            De 08:00 a 22:00 horas los 7 días de la semana
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>TaxiLeto San Cristobal</h4>
                            <img src="/images/taxis/taxi-3.jpg" class="h-28 object-contain rounded-md mx-auto mt-3" alt="Imagen de Taxi">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M3.54 2c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51Zm9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19ZM4.5 0H1C.45 0 0 .45 0 1c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 5.5 1c0-.55-.45-1-1-1Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Teléfono</span>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a href="tel:9671345393" class="block">967 134 5393</a>
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-0">
                                            <a href="https://wa.me/+529671345393" class="flex items-center" target="_blank" rel="nofollow noopener noreferrer">
                                                <svg class="text-green-800 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                                </svg>
                                                <span class="ml-2">967 134 5393</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Horario</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            24 horas del día los 7 días de la semana
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="mt-12">De Tuxtla Gutiérrez a San Cristóbal de las Casas</h4>
                    <p class="font-JetBrains font-medium text-green-800 uppercase mt-1">Los taxis pueden ser colectivos teniendo un costo de <strong class="font-black">$70.00 MXN</strong> por persona. El trayecto es de aproximadamente 1 hora y 35 minutos.</p>
                    <div class="grid grid-cols-3 gap-7 mt-8">
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>ADO</h4>
                            <img src="/images/taxis/ado.png" class="h-28 object-contain rounded-md mx-auto mt-3" alt="Imagen de ADO">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0Zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8Zm.89-8.9c-1.78-.59-2.64-.96-2.64-1.9 0-1.02 1.11-1.39 1.81-1.39 1.31 0 1.79.99 1.9 1.34l1.58-.67c-.15-.44-.82-1.91-2.66-2.23V3H9.13v1.26c-2.6.56-2.62 2.85-2.62 2.96 0 2.27 2.25 2.91 3.35 3.31 1.58.56 2.28 1.07 2.28 2.03 0 1.13-1.05 1.61-1.98 1.61-1.82 0-2.34-1.87-2.4-2.09l-1.66.67c.63 2.19 2.28 2.78 3.02 2.96V17h1.75v-1.24c.52-.09 3.02-.59 3.02-3.22.01-1.39-.6-2.61-3-3.44Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Comprar</span>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a
                                                href="https://www.ado.com.mx/viajes/ciudad-tuxtla-gutierrez-chis-a-ciudad-san-cristobal-de-las-casas-chis/?fechaIda=25/11/2022%2000:00:00"
                                                class="flex items-center"
                                                target="_blank"
                                                rel="nofollow noopener noreferrer"
                                            >
                                                <svg class="text-green-800 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                </svg>
                                                <span class="ml-2">Ir al sitio</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Información</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Precio: $50.00 MXN - 1 persona
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800">
                                            Corroborar fecha y hora
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Boulevard Antonio Pariente Algarín #551, Los Cafetales, 29030 Tuxtla Gutitrrez, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Taxis Jovel</h4>
                            <img src="/images/taxis/taxi-7.png" class="h-28 object-contain rounded-md mx-auto mt-3" alt="Imagen de Taxi">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M3.54 2c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51Zm9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19ZM4.5 0H1C.45 0 0 .45 0 1c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 5.5 1c0-.55-.45-1-1-1Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Teléfono</span>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a href="tel:9616121669" class="block">961 612 1669</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Información</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Precio: $280.00 MXN - 4 personas
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            12 Oriente y 3 Sur #390, Centro, 29000 Tuxtla Gutiérrez, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Taxis Mactumatzá</h4>
                            <img src="/images/taxis/taxi-8.png" class="h-28 object-contain rounded-md mx-auto mt-3" alt="Imagen de Taxi">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M3.54 2c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51Zm9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19ZM4.5 0H1C.45 0 0 .45 0 1c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 5.5 1c0-.55-.45-1-1-1Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Teléfono</span>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a href="tel:9616137179" class="block">961 613 7179</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Información</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Precio: $280.00 MXN - 4 personas
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            3 Sur y 12 oriente #1238, Centro, 29000 Tuxtla Gutiérrez, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="restaurants" data-link="6" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative h-full px-10 pt-5 pb-20">
                    <h2 class="text-5xl text-green-800 font-semibold pt-2">Restaurantes</h2>
                    <div class="border border-amber-500 rounded relative px-4 py-3 mt-5">
                        <h3>Las Pichanchas</h3>
                        <div class="grid grid-cols-12 gap-6 w-full mt-2">
                            <div class="col-span-5">
                                <img src="/images/restaurants/restaurant-1.png" class="w-full object-contain rounded-md" alt="Imagen de Restaurant">
                            </div>
                            <div class="col-span-7">
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="col-span-1">
                                        <div class="flex items-start">
                                            <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <div class="ml-2">
                                                <span class="font-JetBrains uppercase">Horario</span>
                                                <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                    De 12:00 a 23:00 horas los 7 días de la semana
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="flex items-start">
                                            <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" d="M3.54 2c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51Zm9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19ZM4.5 0H1C.45 0 0 .45 0 1c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 5.5 1c0-.55-.45-1-1-1Z"/>
                                            </svg>
                                            <div class="ml-2">
                                                <span class="font-JetBrains uppercase">Teléfono</span>
                                                <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                                    <a href="tel:9676315235" class="block">967 631 5235</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-start mt-6">
                                        <svg class="text-amber-500 flex-shrink-0 w-5 pt-px" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M0 20.98c0 .56.45 1.01 1.01 1.01H14c.56 0 1.01-.45 1.01-1.01V20H0v.98ZM7.5 7.99C3.75 7.99 0 10 0 14h15c0-4-3.75-6.01-7.5-6.01ZM2.62 12c1.11-1.55 3.47-2.01 4.88-2.01 1.41 0 3.77.46 4.88 2.01H2.62ZM0 16h15v2H0v-2ZM17 4V0h-2v4h-5l.23 2h9.56l-1.4 14H17v2h1.72c.84 0 1.53-.65 1.63-1.47L22 4h-5Z"/>
                                        </svg>
                                        <div class="ml-2">
                                            <span class="font-JetBrains uppercase">Opciones de servicio</span>
                                            <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                Consumo en el lugar • Para llevar • Música en vivo • Informal • Se aceptan reservas • Pago con tarjeta
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start mt-6">
                                        <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                        </svg>
                                        <div class="ml-2">
                                            <span class="font-JetBrains uppercase">Ubicación</span>
                                            <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                Crescencio Rosas #4, Zona Centro, 29200 San Cristóbal de las Casas, Chis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center border-t border-amber-500 pt-5 mt-5 pb-2">
                                        <a
                                            href="https://www.google.com/maps/dir//Restaurante+Las+Pichanchas,+Crescencio+Rosas+4,+Zona+Centro,+29200+San+Crist%C3%B3bal+de+las+Casas,+Chis./@16.7361169,-92.6475596,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x85ed4515ff8eaaad:0xc17f69350d5c5f87!2m2!1d-92.6388274!2d16.7361153!3e0"
                                            class="btn btn-green stretched-link inline-block px-5 py-2"
                                            target="_blank"
                                            rel="nofollow noopener noreferrer"
                                        >
                                            ¿Cómo llegar?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-amber-500 rounded relative px-4 py-3 mt-5">
                        <h3>Sarajevo Café Jardin</h3>
                        <div class="grid grid-cols-12 gap-6 w-full mt-2">
                            <div class="col-span-5">
                                <img src="/images/restaurants/restaurant-2.png" class="w-full object-contain rounded-md" alt="Imagen de Restaurant">
                            </div>
                            <div class="col-span-7">
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="col-span-1">
                                        <div class="flex items-start">
                                            <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <div class="ml-2">
                                                <span class="font-JetBrains uppercase">Horario</span>
                                                <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                    De 08:00 a 23:30 horas los 7 días de la semana
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="flex items-start">
                                            <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" d="M3.54 2c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51Zm9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19ZM4.5 0H1C.45 0 0 .45 0 1c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 5.5 1c0-.55-.45-1-1-1Z"/>
                                            </svg>
                                            <div class="ml-2">
                                                <span class="font-JetBrains uppercase">Teléfono</span>
                                                <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                                    <a href="tel:9671330415" class="block">967 133 0415</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-start mt-6">
                                        <svg class="text-amber-500 flex-shrink-0 w-5 pt-px" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M0 20.98c0 .56.45 1.01 1.01 1.01H14c.56 0 1.01-.45 1.01-1.01V20H0v.98ZM7.5 7.99C3.75 7.99 0 10 0 14h15c0-4-3.75-6.01-7.5-6.01ZM2.62 12c1.11-1.55 3.47-2.01 4.88-2.01 1.41 0 3.77.46 4.88 2.01H2.62ZM0 16h15v2H0v-2ZM17 4V0h-2v4h-5l.23 2h9.56l-1.4 14H17v2h1.72c.84 0 1.53-.65 1.63-1.47L22 4h-5Z"/>
                                        </svg>
                                        <div class="ml-2">
                                            <span class="font-JetBrains uppercase">Opciones de servicio</span>
                                            <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                Consumo en el lugar • Para llevar • Informal • Pago con tarjeta
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start mt-6">
                                        <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                        </svg>
                                        <div class="ml-2">
                                            <span class="font-JetBrains uppercase">Ubicación</span>
                                            <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                Flavio A. Paniagua #32, Barrio de Guadalupe, 29230 San Cristóbal de las Casas, Chis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center border-t border-amber-500 pt-5 mt-5 pb-2">
                                        <a
                                            href="https://www.google.com/maps/dir//Sarajevo+Caf%C3%A9+Jardin,+Flavio+A.+Paniagua+32,+Barrio+de+Guadalupe,+29230+San+Crist%C3%B3bal+de+las+Casas,+Chis./@16.7391785,-92.6353864,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x85ed45acbb7c6a41:0x10c6b24b0b114b27!2m2!1d-92.6331977!2d16.7391785!3e0"
                                            class="btn btn-green stretched-link inline-block px-5 py-2"
                                            target="_blank"
                                            rel="nofollow noopener noreferrer"
                                        >
                                            ¿Cómo llegar?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-amber-500 rounded relative px-4 py-3 mt-5">
                        <h3>El Fogón de Jovel</h3>
                        <div class="grid grid-cols-12 gap-6 w-full mt-2">
                            <div class="col-span-5">
                                <img src="/images/restaurants/restaurant-3.png" class="w-full object-contain rounded-md" alt="Imagen de Restaurant">
                            </div>
                            <div class="col-span-7">
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="col-span-1">
                                        <div class="flex items-start">
                                            <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <div class="ml-2">
                                                <span class="font-JetBrains uppercase">Horario</span>
                                                <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                    De 09:00 a 22:00 horas los 7 días de la semana
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="flex items-start">
                                            <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" d="M3.54 2c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51Zm9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19ZM4.5 0H1C.45 0 0 .45 0 1c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 5.5 1c0-.55-.45-1-1-1Z"/>
                                            </svg>
                                            <div class="ml-2">
                                                <span class="font-JetBrains uppercase">Teléfono</span>
                                                <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                                    <a href="tel:9676781153" class="block">967 678 1153</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-start mt-6">
                                        <svg class="text-amber-500 flex-shrink-0 w-5 pt-px" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M0 20.98c0 .56.45 1.01 1.01 1.01H14c.56 0 1.01-.45 1.01-1.01V20H0v.98ZM7.5 7.99C3.75 7.99 0 10 0 14h15c0-4-3.75-6.01-7.5-6.01ZM2.62 12c1.11-1.55 3.47-2.01 4.88-2.01 1.41 0 3.77.46 4.88 2.01H2.62ZM0 16h15v2H0v-2ZM17 4V0h-2v4h-5l.23 2h9.56l-1.4 14H17v2h1.72c.84 0 1.53-.65 1.63-1.47L22 4h-5Z"/>
                                        </svg>
                                        <div class="ml-2">
                                            <span class="font-JetBrains uppercase">Opciones de servicio</span>
                                            <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                Consumo en el lugar • Para llevar • Informal • Música en vivo • Se aceptan reservas • Pago con tarjeta
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start mt-6">
                                        <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                        </svg>
                                        <div class="ml-2">
                                            <span class="font-JetBrains uppercase">Ubicación</span>
                                            <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                Av. 16 de Septiembre #11, Centro, 29200 San Cristóbal de las Casas, Chis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center border-t border-amber-500 pt-5 mt-5 pb-2">
                                        <a
                                            href="https://www.google.com/maps/dir//Restaurante+el+Fog%C3%B3n+de+Jovel,+Av,+16+de+Septiembre+%23+11,+Centro,+29200+San+Crist%C3%B3bal+de+las+Casas,+Chis./@16.7380026,-92.6408608,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x85ed45111e3c6311:0xc662514f2d909cb!2m2!1d-92.6387444!2d16.7380017!3e0"
                                            class="btn btn-green stretched-link inline-block px-5 py-2"
                                            target="_blank"
                                            rel="nofollow noopener noreferrer"
                                        >
                                            ¿Cómo llegar?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-amber-500 rounded relative px-4 py-3 mt-5">
                        <h3>Sensaciones de Chiapas</h3>
                        <div class="grid grid-cols-12 gap-6 w-full mt-2">
                            <div class="col-span-5">
                                <img src="/images/restaurants/restaurant-4.png" class="w-full object-contain rounded-md" alt="Imagen de Restaurant">
                            </div>
                            <div class="col-span-7">
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="col-span-1">
                                        <div class="flex items-start">
                                            <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <div class="ml-2">
                                                <span class="font-JetBrains uppercase">Horario</span>
                                                <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                    De 07:00 a 17:00 horas los 7 días de la semana
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="flex items-start">
                                            <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" d="M3.54 2c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51Zm9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19ZM4.5 0H1C.45 0 0 .45 0 1c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 5.5 1c0-.55-.45-1-1-1Z"/>
                                            </svg>
                                            <div class="ml-2">
                                                <span class="font-JetBrains uppercase">Teléfono</span>
                                                <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                                    <a href="tel:9676780464" class="block">967 678 0464</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-start mt-6">
                                        <svg class="text-amber-500 flex-shrink-0 w-5 pt-px" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M0 20.98c0 .56.45 1.01 1.01 1.01H14c.56 0 1.01-.45 1.01-1.01V20H0v.98ZM7.5 7.99C3.75 7.99 0 10 0 14h15c0-4-3.75-6.01-7.5-6.01ZM2.62 12c1.11-1.55 3.47-2.01 4.88-2.01 1.41 0 3.77.46 4.88 2.01H2.62ZM0 16h15v2H0v-2ZM17 4V0h-2v4h-5l.23 2h9.56l-1.4 14H17v2h1.72c.84 0 1.53-.65 1.63-1.47L22 4h-5Z"/>
                                        </svg>
                                        <div class="ml-2">
                                            <span class="font-JetBrains uppercase">Opciones de servicio</span>
                                            <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                Asientos al aire libre • Consumo en el lugar • Para llevar • Informal • Se aceptan reservas • Pago con tarjeta
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start mt-6">
                                        <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                        </svg>
                                        <div class="ml-2">
                                            <span class="font-JetBrains uppercase">Ubicación</span>
                                            <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                Av. 16 de Septiembre #11, Centro, 29200 San Cristóbal de las Casas, Chis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center border-t border-amber-500 pt-5 mt-5 pb-2">
                                        <a
                                            href="https://www.google.com/maps/dir//Sensaciones+de+Chiapas+Cocina+Regional,+Plaza+31+de+marzo+-+Z%C3%B3calo,+Calle+Diego+de+Mazariegos+10,+Zona+Centro,+29200+San+Crist%C3%B3bal+de+las+Casas,+Chis./@16.736621,-92.6461917,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x85ed453dddc4929f:0xeb681683e9369946!2m2!1d-92.637437!2d16.736621!3e0"
                                            class="btn btn-green stretched-link inline-block px-5 py-2"
                                            target="_blank"
                                            rel="nofollow noopener noreferrer"
                                        >
                                            ¿Cómo llegar?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-amber-500 rounded relative px-4 py-3 mt-5">
                        <h3>Cacao Nativa</h3>
                        <div class="grid grid-cols-12 gap-6 w-full mt-2">
                            <div class="col-span-5">
                                <img src="/images/restaurants/restaurant-5.png" class="w-full object-contain rounded-md" alt="Imagen de Restaurant">
                            </div>
                            <div class="col-span-7">
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="col-span-1">
                                        <div class="flex items-start">
                                            <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <div class="ml-2">
                                                <span class="font-JetBrains uppercase">Horario</span>
                                                <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                    De 08:00 a 22:30 horas los 7 días de la semana
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="flex items-start">
                                            <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" d="M3.54 2c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51Zm9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19ZM4.5 0H1C.45 0 0 .45 0 1c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 5.5 1c0-.55-.45-1-1-1Z"/>
                                            </svg>
                                            <div class="ml-2">
                                                <span class="font-JetBrains uppercase">Teléfono</span>
                                                <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                                    <a href="tel:9676314724" class="block">967 631 4724</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-start mt-6">
                                        <svg class="text-amber-500 flex-shrink-0 w-5 pt-px" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M0 20.98c0 .56.45 1.01 1.01 1.01H14c.56 0 1.01-.45 1.01-1.01V20H0v.98ZM7.5 7.99C3.75 7.99 0 10 0 14h15c0-4-3.75-6.01-7.5-6.01ZM2.62 12c1.11-1.55 3.47-2.01 4.88-2.01 1.41 0 3.77.46 4.88 2.01H2.62ZM0 16h15v2H0v-2ZM17 4V0h-2v4h-5l.23 2h9.56l-1.4 14H17v2h1.72c.84 0 1.53-.65 1.63-1.47L22 4h-5Z"/>
                                        </svg>
                                        <div class="ml-2">
                                            <span class="font-JetBrains uppercase">Opciones de servicio</span>
                                            <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                Consumo en el lugar • Para llevar • Informal • Pago con tarjeta
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start mt-6">
                                        <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                        </svg>
                                        <div class="ml-2">
                                            <span class="font-JetBrains uppercase">Ubicación</span>
                                            <p class="font-JetBrains font-medium text-green-800 mt-2">
                                                México #5, Barrio de Fátima, 29264 San Cristóbal de las Casas, Chis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center border-t border-amber-500 pt-5 mt-5 pb-2">
                                        <a
                                            href="https://www.google.com/maps/dir//Chocolateria+-+Cacao+Nativa+Suc.+Balam+-+Fatima,+de+las+Americas+5-B-5-B,+Barrio+de+Fatima,+29264+San+Crist%C3%B3bal+de+las+Casas,+Chis./@16.7320544,-92.656283,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x85ed453e8ade642f:0xe0e1b44876bd620c!2m2!1d-92.6519056!2d16.7320544!3e0"
                                            class="btn btn-green stretched-link inline-block px-5 py-2"
                                            target="_blank"
                                            rel="nofollow noopener noreferrer"
                                        >
                                            ¿Cómo llegar?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="location" data-link="7" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative h-full px-10 pt-5 pb-20">
                    <h2 class="text-5xl text-green-800 font-semibold pt-2">¿Qué hacer en Chiapas?</h2>
                </div>
            </div>

            <div id="gifts" data-link="8" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative min-h-screen px-10 pt-5 pb-20">
                    <div class="absolute left-1/2 right-auto top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full px-10">
                        <div>
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
                                    <img src="/images/brands/banamex.png" class="w-2/3 h-18 object-contain mx-auto mt-6" alt="Imagen de Citibanamex">
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
            </div>

            <div id="confirm" data-link="9" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative min-h-screen px-10 pt-5">
                    <div class="absolute left-1/2 right-auto top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full px-10 py-20">
                        <h1 class="text-green-800 text-center">Familia Lorem Ipsum</h1>
                        <h2 class="text-center mt-6">Vestimenta formal</h2>
                        <h2 class="text-center">Sin niños</h2>
                        <h2 class="text-center font-medium mt-6">Pase para <span class="font-JetBrains underline text-green-800 font-bold">{{ $user->companion }}</span> personas</h2>

                        <confirm-attend :current-user="{{ json_encode(auth()->check() ? auth()->user() : null) }}" /></confirm-attend>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
