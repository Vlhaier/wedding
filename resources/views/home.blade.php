@extends('layouts.app')

@section('content')

    @include('layouts._navbar')

    <div class="xl:ml-navbar lg:ml-navbar-lg sm:ml-17 sm:mt-0 mt-14">
        <div class="fixed bottom-0 left-0 right-0 top-0 xl:ml-navbar lg:ml-navbar-lg sm:ml-17 sm:mt-0 mt-14 sm:bg-40% bg-contain bg-no-repeat xl:bg-right-custom lg:bg-right-custom-lg sm:bg-right-custom-md bg-right h-screen w-full" style="background-image: url('images/bg-1.png')"></div>
        <div class="w-full">
            <div id="home" data-link="0" class="section container mx-auto relative sm:min-h-screen min-h-mobile bg-gray-500 sm:bg-contain bg-cover bg-no-repeat bg-center" style="background-image: url('images/bg.png')">
                <div class="absolute top-1/2 left-0 right-0 transform -translate-y-1/2 sm:mt-0 -mt-12">
                    <h2 class="sm:text-4xl text-3xl text-green-800 text-center">Te invitamos a nuestra boda</h2>
                    <h1 class="xl:text-8xl sm:text-7xl text-5xl text-green-800 text-center mt-4">Katya & Carlos</h1>
                    <h2 class="sm:text-4xl text-3xl text-center font-medium mt-2">Sábado,</h2>
                    <h2 class="sm:text-4xl text-3xl text-center -mt-1">26 de Noviembre 2022</h2>
                </div>
                <div class="inline-flex flex-col justify-center items-center absolute bottom-0 left-1/2 transform -translate-x-1/2 sm:pb-0 pb-16">
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
                <div class="container mx-auto relative h-full sm:px-10 px-4 pt-5 xl:pb-32 md:pb-20 pb-14">
                    <h2 class="md:text-5xl text-4xl text-green-800 font-semibold">Celebración religiosa</h2>
                    <div class="md:grid grid-cols-12 sm:mt-6 mt-3">
                        <div class="col-span-4">
                            <p class="text-xl">Hora de la ceremonia</p>
                            <h2 class="xl:text-5xl sm:text-4xl text-3xl font-medium sm:mt-3 mt-1">5:00 PM</h2>
                        </div>
                        <div class="col-span-8 md:mt-0 sm:mt-5 mt-3">
                            <p class="text-xl">Lugar de la ceremonia</p>
                            <h2 class="xl:text-5xl sm:text-4xl text-3xl font-normal sm:mt-3 mt-1">Catedral de San Cristóbal de las Casas, Chiapas</h2>
                        </div>
                    </div>
                    <img src="/images/mass.png" class="xl:block hidden absolute bottom-0 right-0 h-80 mb-32" alt="Imagen de la Catedral de San Crsitóbal de las Casas">
                    <p class="text-lg sm:mt-5 mt-3">Mapa del lugar</p>
                    <div class="map-mass font-thin sm:mt-3 mt-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910.392429476662!2d-92.63886834421237!3d16.737583125625775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed453df3525fdb%3A0x6b2596848ccc3f87!2sCatedral%20de%20San%20Crist%C3%B3bal%20de%20las%20Casas!5e0!3m2!1ses!2smx!4v1657755859599!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <p class="sm:mt-5 mt-3">Plaza 31 de Marzo Norte #3, Centro, 29200 San Cristóbal de las Casas, Chis.</p>
                    <a
                        href="https://www.google.com/maps/dir//Catedral+de+San+Crist%C3%B3bal+de+las+Casas+Plaza+31+de+Marzo+Norte+No.+3+Centro+29200+San+Crist%C3%B3bal+de+las+Casas,+Chis./@16.7376572,-92.6727937,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x85ed453df3525fdb:0x6b2596848ccc3f87!2m2!1d-92.637774!2d16.737578!3e0"
                        class="btn btn-green inline-block px-4 py-2 sm:mt-8 mt-3"
                        target="_blank"
                        rel="nofollow noopener noreferrer"
                    >
                        ¿Cómo llegar?
                    </a>
                </div>
            </div>

            <div id="party" data-link="2" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative h-full sm:px-10 px-4 pt-5 xl:pb-28 md:pb-20 pb-14">
                    <h2 class="md:text-5xl text-4xl text-green-800 font-semibold">Recepción</h2>
                    <div class="md:grid grid-cols-12 sm:mt-6 mt-3">
                        <div class="col-span-4">
                            <p class="text-xl">Hora del evento</p>
                            <h2 class="xl:text-5xl sm:text-4xl text-3xl font-medium sm:mt-3 mt-1">7:00 PM</h2>
                        </div>
                        <div class="col-span-8 md:mt-0 sm:mt-5 mt-3">
                            <p class="text-xl">Lugar del evento</p>
                            <h2 class="xl:text-5xl sm:text-4xl text-3xl font-normal sm:mt-3 mt-1">Salón Miraval en San Cristóbal de las Casas, Chiapas</h2>
                        </div>
                    </div>
                    <img src="/images/party.png" class="xl:block hidden absolute bottom-0 right-0 h-80 mb-52" alt="Imagen de la Catedral de San Crsitóbal de las Casas">
                    <p class="font-JetBrains text-green-800 uppercase font-medium sm:text-base text-sm sm:mt-6 mt-3">El Salón Miraval cuenta con una de las mejores vistas de la ciudad, por lo que una Urvan estará saliendo cada 4 min de la explanada del Hotel Rocaval para que puedas acceder al salón y no tengas que subir caminando. Si llevas tu coche deberá quedar en el estacionamiento del hotel.</p>
                    <p class="text-lg sm:mt-5 mt-3">Mapa del lugar</p>
                    <div class="map-mass font-thin sm:mt-3 mt-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.907166834182!2d-92.65704157778634!3d16.73148318895141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed450b5f91d04f%3A0x4bf35078a8a99aa0!2sMiraval%20Chiapas!5e0!3m2!1ses!2smx!4v1657757195367!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <p class="sm:mt-5 mt-3">México #5, Barrio de Fátima, 29264 San Cristóbal de las Casas, Chis.</p>
                    <a
                        href="https://www.google.com/maps/dir//Miraval+Chiapas+M%C3%A9xico+%235+Barrio+de+Fatima+29264+San+Crist%C3%B3bal+de+las+Casas,+Chis./@16.7314781,-92.6525569,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x85ed450b5f91d04f:0x4bf35078a8a99aa0"
                        class="btn btn-green inline-block px-4 py-2 sm:mt-8 mt-3"
                        target="_blank"
                        rel="nofollow noopener noreferrer"
                    >
                        ¿Cómo llegar?
                    </a>
                </div>
            </div>

            <div id="hotel" data-link="3" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative h-full sm:px-10 px-4 pt-5 md:pb-20 pb-14">
                    <div class="sm:flex items-center">
                        <h2 class="md:text-5xl text-4xl text-green-800 font-semibold">Hotel Rocaval</h2>
                        <p class="inline-flex items-center bg-yellow-400 rounded px-2 sm:ml-6 md:-mt-3 sm:-mt-2">
                            <svg class="h-4" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#554716" d="m10 15.77 6.18 3.73-1.64-7.03L20 7.74l-7.19-.61L10 .5 7.19 7.13 0 7.74l5.46 4.73-1.64 7.03L10 15.77Z"/>
                            </svg>
                            <span class="pt-1 ml-2">Tarifa especial</span>
                        </p>
                    </div>
                    <div class="sm:flex items-center xl:gap-8 gap-4 sm:mt-6 mt-3">
                        <img src="/images/hotel/hotel-1.png" class="sm:w-1/2 w-full xl:h-80 md:h-60 h-40 sm:object-auto object-cover sm:object-center object-bottom rounded-md" alt="Imagen de hotel">
                        <img src="/images/hotel/hotel-2.png" class="sm:block hidden w-1/2 xl:h-80 md:h-60 h-40 object-auto rounded-md" alt="Imagen de hotel">
                    </div>
                    <div class="flex items-start sm:mt-6 mt-3">
                        <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="ml-2">
                            <span class="font-JetBrains uppercase">Descripción</span>
                            <p class="font-JetBrains font-medium text-green-800 uppercase mt-2">El Salón se encuentra dentro del recinto de este hotel, esta podría ser la mejor opción pensando en tu comodidad para el regreso de la fiesta a tu hospedaje. Aprovecha la tarifa especial.</p>
                        </div>
                    </div>
                    <div class="md:grid xl:grid-cols-7 grid-cols-8 xl:gap-6 gap-3 mt-5">
                        <div class="xl:col-span-4 col-span-5">
                            <div class="flex items-start">
                                <svg class="text-amber-500 flex-shrink-0 w-4 pt-2" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M6 9.5c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3Zm0-4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1Zm12-3h-8v8H2V.5H0v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4Zm2 8h-8v-6h6c1.1 0 2 .9 2 2v4Z"/>
                                </svg>
                                <div class="ml-2">
                                    <span class="font-JetBrains uppercase">¿Qué incluye?</span>
                                    <p class="font-JetBrains font-medium text-green-800 text-lg uppercase mt-2">Habitación estándar sencilla o doble</p>
                                    <p class="font-JetBrains font-medium text-green-800 mt-1">* Puedes preguntar por la Junior Suite</p>
                                    <p class="font-JetBrains font-medium text-green-800 mt-2">* El hotel incluye estacionamiento</p>
                                </div>
                            </div>
                            <div class="flex items-start mt-5">
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
                        </div>
                        <div class="xl:col-span-3 col-span-3 md:mt-0 mt-5">
                            <div class="flex items-start pl-2">
                                <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M12 18h-2v-2h2v2Zm-2-7H8v5h2v-5Zm8-2h-2v4h2V9Zm-2-2h-2v2h2V7ZM4 9H2v2h2V9ZM2 7H0v2h2V7Zm7-5h2V0H9v2Zm-7.5-.5v3h3v-3h-3ZM6 6H0V0h6v6Zm-4.5 7.5v3h3v-3h-3ZM6 18H0v-6h6v6Zm7.5-16.5v3h3v-3h-3ZM18 6h-6V0h6v6Zm-2 10v-3h-4v2h2v3h4v-2h-2Zm-2-7h-4v2h4V9Zm-4-2H4v2h2v2h2V9h2V7Zm1-1V4H9V2H7v4h4ZM3.75 2.25h-1.5v1.5h1.5v-1.5Zm0 12h-1.5v1.5h1.5v-1.5Zm12-12h-1.5v1.5h1.5v-1.5Z"/>
                                </svg>
                                <p class="font-JetBrains uppercase ml-3">Escanea el QR para reservar</p>
                            </div>
                            <img src="/images/qr.svg" class="h-56 object-auto mt-2" alt="Imagen del QR">
                        </div>
                    </div>
                    <div class="sm:mt-14 mt-10">
                        <div class="flex items-start sm:border-t sm:border-amber-500 pt-5">
                            <h3 class="sm:text-3xl text-2xl sm:bg-gray-500 pr-7 -mt-11">Más opciones de reservación</h3>
                        </div>
                        <div class="md:grid grid-cols-11 xl:gap-6 lg:gap-3 sm:mt-4 mt-0">
                            <div class="xl:col-span-3 col-span-3 first:mt-0 md:mt-0 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M3.54 2c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51Zm9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19ZM4.5 0H1C.45 0 0 .45 0 1c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 5.5 1c0-.55-.45-1-1-1Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Teléfono</span>
                                        <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">
                                            <a href="tel:9676749500" class="block">967 674 9500</a>
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
                            <div class="xl:col-span-5 col-span-5 first:mt-0 md:mt-0 mt-5">
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
                            <div class="xl:col-span-3 col-span-3 first:mt-0 md:mt-0 mt-5">
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
                    <div class="sm:mt-14 mt-10">
                        <div class="flex items-start sm:border-t sm:border-amber-500 pt-5">
                            <h3 class="sm:text-3xl text-2xl sm:bg-gray-500 pr-7 -mt-11">Mapa del hotel</h3>
                        </div>
                        <div class="map-party sm:mt-3 -mt-1">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.8958172287753!2d-92.65479868542732!3d16.73204932577838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed459f42fe3553%3A0xbf248228ff13ad37!2sHotel%20Rocaval!5e0!3m2!1ses!2smx!4v1658544955171!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <p class="sm:mt-5 mt-3">México #5, Barrio de Fátima, 29264 San Cristóbal de las Casas, Chis.</p>
                    </div>
                </div>
            </div>

            <div id="airport" data-link="4" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative h-full sm:px-10 px-4 pt-5 md:pb-20 pb-14">
                    <h2 class="md:text-5xl text-4xl text-green-800 font-semibold">Aeropuerto</h2>
                    <h3 class="md:text-3xl text-2xl sm:mt-6 mt-3">Sobre tu llegada a Chiapas</h3>
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
                    <div class="slider-home grid grid-cols-3 gap-6 sm:mt-8 mt-3 xl:mx-0 md:-mx-2">
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
                            <h4>Taxi Seguro SC</h4>
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
                            <h4>Afuera del aeropuerto</h4>
                            <img src="/images/taxis/taxi-6.jpg" class="h-18 object-contain rounded-md mx-auto mt-3" alt="Imagen de Taxi">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5 xl:pb-0 lg:pb-24 md:pb-18 pb-24">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Información</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Precio: $350.00 MXN a $450.00 MXN - 1 persona
                                        </p>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2 xl:pb-0 pb-1">
                                            Desde el aeropuerto al centro de Tuxtla Gutiérrez
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Renta de auto</h4>
                            <img src="/images/taxis/rent.png" class="h-18 object-contain rounded-md mx-auto mt-3" alt="Imagen de Taxi">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5 xl:pb-0 pb-16">
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
                                        <p class="font-JetBrains font-medium text-green-800 mt-2 xl:pb-0 pb-2">
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
                <div class="container mx-auto relative h-full sm:px-10 px-4 pt-5 md:pb-20 pb-14">
                    <h2 class="md:text-5xl text-4xl text-green-800 font-semibold">Taxis</h2>
                    <h3 class="md:text-3xl text-2xl sm:mt-6 mt-3">Dentro de San Cristóbal de las Casas</h3>
                    <p class="font-JetBrains font-medium text-green-800 uppercase mt-1">Reservar con anticipación (<strong class="font-black">15 minutos</strong> de espera aproximadamente). <strong class="font-black">No</strong> cuentan con taxímetros. Dentro de la ciudad cobran un promedio de <strong class="font-black">$50.00 MXN</strong> por viaje.</p>
                    <div class="slider-home grid grid-cols-3 gap-6 sm:mt-8 mt-3 xl:mx-0 md:-mx-2">
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Hosp. de las Culturas</h4>
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
                            <h4>Taxi Seguro SC</h4>
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
                    <h3 class="md:text-3xl text-2xl xl:mt-12 sm:mt-20 mt-16">De Tuxtla Gutiérrez a San Cristóbal de las Casas</h3>
                    <p class="font-JetBrains font-medium text-green-800 uppercase mt-1">Los taxis pueden ser colectivos teniendo un costo de <strong class="font-black">$70.00 MXN</strong> por persona. El trayecto es de aproximadamente 1 hora y 35 minutos.</p>
                    <div class="slider-home grid grid-cols-3 gap-6 sm:mt-8 mt-3 xl:mx-0 md:-mx-2">
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
                                            Boulevard Antonio Pariente Algarín #551, Los Cafetales, 29030 Tuxtla Gutiérrez, Chis.
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
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5 xl:pb-0 pb-12">
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
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5 xl:pb-0 pb-12">
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
                <div class="container mx-auto relative h-full sm:px-10 px-4 pt-5 md:pb-20 pb-14">
                    <h2 class="md:text-5xl text-4xl text-green-800 font-semibold pt-2">Restaurantes</h2>
                    <div class="border border-amber-500 rounded relative px-4 py-3 sm:mt-5 mt-4">
                        <h3>Las Pichanchas</h3>
                        <div class="grid xl:grid-cols-12 grid-cols-7 gap-6 w-full sm:mt-2 mt-1">
                            <div class="col-span-5 xl:block hidden">
                                <img src="/images/restaurants/restaurant-1.png" class="w-full object-contain rounded-md" alt="Imagen de Restaurant">
                            </div>
                            <div class="col-span-7">
                                <div class="md:grid xl:grid-cols-2 grid-cols-3 gap-3">
                                    <div class="col-span-1 xl:hidden">
                                        <img src="/images/restaurants/restaurant-1.png" class="w-full md:h-auto h-40 md:object-contain object-cover rounded-md" alt="Imagen de Restaurant">
                                    </div>
                                    <div class="col-span-1 md:mt-0 mt-5">
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
                                    <div class="col-span-1 md:mt-0 mt-5">
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
                    <div class="border border-amber-500 rounded relative px-4 py-3 sm:mt-5 mt-4">
                        <h3>Sarajevo Café Jardin</h3>
                        <div class="grid xl:grid-cols-12 grid-cols-7 gap-6 w-full sm:mt-2 mt-1">
                            <div class="col-span-5 xl:block hidden">
                                <img src="/images/restaurants/restaurant-2.png" class="w-full object-contain rounded-md" alt="Imagen de Restaurant">
                            </div>
                            <div class="col-span-7">
                                <div class="md:grid xl:grid-cols-2 grid-cols-3 gap-3">
                                    <div class="col-span-1 xl:hidden">
                                        <img src="/images/restaurants/restaurant-2.png" class="w-full md:h-auto h-40 md:object-contain object-cover rounded-md" alt="Imagen de Restaurant">
                                    </div>
                                    <div class="col-span-1 md:mt-0 mt-5">
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
                                    <div class="col-span-1 md:mt-0 mt-5">
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
                    <div class="border border-amber-500 rounded relative px-4 py-3 sm:mt-5 mt-4">
                        <h3>El Fogón de Jovel</h3>
                        <div class="grid xl:grid-cols-12 grid-cols-7 gap-6 w-full sm:mt-2 mt-1">
                            <div class="col-span-5 xl:block hidden">
                                <img src="/images/restaurants/restaurant-3.png" class="w-full object-contain rounded-md" alt="Imagen de Restaurant">
                            </div>
                            <div class="col-span-7">
                                <div class="md:grid xl:grid-cols-2 grid-cols-3 gap-3">
                                    <div class="col-span-1 xl:hidden">
                                        <img src="/images/restaurants/restaurant-3.png" class="w-full md:h-auto h-40 md:object-contain object-cover rounded-md" alt="Imagen de Restaurant">
                                    </div>
                                    <div class="col-span-1 md:mt-0 mt-5">
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
                                    <div class="col-span-1 md:mt-0 mt-5">
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
                    <div class="border border-amber-500 rounded relative px-4 py-3 sm:mt-5 mt-4">
                        <h3>Sensaciones de Chiapas</h3>
                        <div class="grid xl:grid-cols-12 grid-cols-7 gap-6 w-full sm:mt-2 mt-1">
                            <div class="col-span-5 xl:block hidden">
                                <img src="/images/restaurants/restaurant-4.png" class="w-full object-contain rounded-md" alt="Imagen de Restaurant">
                            </div>
                            <div class="col-span-7">
                                <div class="md:grid xl:grid-cols-2 grid-cols-3 gap-3">
                                    <div class="col-span-1 xl:hidden">
                                        <img src="/images/restaurants/restaurant-4.png" class="w-full md:h-auto h-40 md:object-contain object-cover rounded-md" alt="Imagen de Restaurant">
                                    </div>
                                    <div class="col-span-1 md:mt-0 mt-5">
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
                                    <div class="col-span-1 md:mt-0 mt-5">
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
                    <div class="border border-amber-500 rounded relative px-4 py-3 sm:mt-5 mt-4">
                        <h3>Cacao Nativa</h3>
                        <div class="grid xl:grid-cols-12 grid-cols-7 gap-6 w-full sm:mt-2 mt-1">
                            <div class="col-span-5 xl:block hidden">
                                <img src="/images/restaurants/restaurant-5.png" class="w-full object-contain rounded-md" alt="Imagen de Restaurant">
                            </div>
                            <div class="col-span-7">
                                <div class="md:grid xl:grid-cols-2 grid-cols-3 gap-3">
                                    <div class="col-span-1 xl:hidden">
                                        <img src="/images/restaurants/restaurant-5.png" class="w-full md:h-auto h-40 md:object-contain object-cover rounded-md" alt="Imagen de Restaurant">
                                    </div>
                                    <div class="col-span-1 md:mt-0 mt-5">
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
                                    <div class="col-span-1 md:mt-0 mt-5">
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
                <div class="container mx-auto relative h-full sm:px-10 px-4 pt-5 md:pb-20 pb-14">
                    <h2 class="md:text-5xl text-4xl text-green-800 font-semibold">¿Qué hacer en Chiapas?</h2>
                    <h3 class="md:text-3xl text-2xl sm:mt-6 mt-3">San Cristóbal de las Casas</h3>
                    <div class="slider-home grid grid-cols-3 gap-6 sm:mt-4 mt-3 xl:mx-0 md:-mx-2">
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Museo del Ámbar</h4>
                            <img src="/images/locations/place-1.png" class="w-full h-44 object-cover rounded-md mx-auto mt-3" alt="Imagen de Lugar">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Calle Diego de Mazariegos S/N, Barrio de la Merced, 29240 San Cristóbal de las Casas, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <a
                                        href="http://museodelambardechiapas.org.mx/es/home/"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Casa Na Bolom</h4>
                            <img src="/images/locations/place-2.png" class="w-full h-44 object-cover rounded-md mx-auto mt-3" alt="Imagen de Lugar">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Av. Vicente Guerrero #33, Barrio del Cerrillo, 29220 San Cristóbal de las Casas, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <a
                                        href="https://nabolom.org/museo-na-bolom/"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4 class="truncat">Mercado de dulces</h4>
                            <img src="/images/locations/place-3.png" class="w-full h-44 object-cover rounded-md mx-auto mt-3" alt="Imagen de Lugar">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Av Insurgentes #24, Barrio Santa Lucía, 29250 San Cristóbal de las Casas, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <a
                                        href="https://es.foursquare.com/v/mercado-de-dulces-y-artesan%C3%ADas/4c559c4e4623be9a26c8c3f4"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Mercado de artesanías SD</h4>
                            <img src="/images/locations/place-4.png" class="w-full h-44 object-cover rounded-md mx-auto mt-3" alt="Imagen de Lugar">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Av 20 de Noviembre #36, Barrio de Mexicanos, 29240 San Cristóbal de las Casas, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <a
                                        href="https://www.tripadvisor.com.mx/Attraction_Review-g150802-d10747838-Reviews-Mercado_de_Artesanias_de_Santo_Domingo-San_Cristobal_de_las_Casas_Southern_Mexic.html"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Andador Eclesiastico</h4>
                            <img src="/images/locations/place-5.png" class="w-full h-44 object-cover rounded-md mx-auto mt-3" alt="Imagen de Lugar">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Av 20 de Noviembre #8, Zona Centro, 29218 San Cristóbal de las Casas, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 xl:mt-11 lg:mt-11 md:mt-5 mt-11">
                                <div class="flex items-start">
                                    <a
                                        href="http://www.turismochiapas.gob.mx/st/andadores-tursticos-de-san-cristbal-de-las-casas"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Andador de Guadalupe</h4>
                            <img src="/images/locations/place-6.png" class="w-full h-44 object-cover rounded-md mx-auto mt-3" alt="Imagen de Lugar">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Real de Guadalupe, Barrio de Guadalupe, 29230 San Cristóbal de las Casas, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <a
                                        href="https://www.mexicodesconocido.com.mx/escapadas/andador-real-de-guadalupe"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="md:text-3xl text-2xl xl:mt-12 sm:mt-20 mt-16">Tuxtla Gutiérrez</h3>
                    <div class="slider-home grid grid-cols-3 gap-6 sm:mt-4 mt-3 xl:mx-0 md:-mx-2">
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Parque de la Marimba</h4>
                            <img src="/images/locations/place-7.png" class="w-full h-44 object-cover rounded-md mx-auto mt-3" alt="Imagen de Lugar">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Av Central entre 7 y 8 Poniente S/N, Colonia Centro, 29000 Tuxtla Gutiérrez, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <a
                                        href="http://www.turismochiapas.gob.mx/st/parque-de-la-marimba"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Museo Regional de Chis.</h4>
                            <img src="/images/locations/place-8.png" class="w-full h-44 object-cover rounded-md mx-auto mt-3" alt="Imagen de Lugar">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Calzada de los Hombres Ilustres de la Revolución Mexicana #885, 29000 Tuxtla Gutiérrez, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <a
                                        href="https://www.inah.gob.mx/red-de-museos/236-museo-regional-de-chiapas"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4 class="truncat">ZOOMAT</h4>
                            <img src="/images/locations/place-9.png" class="w-full h-44 object-cover rounded-md mx-auto mt-3" alt="Imagen de Lugar">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Calzada Cerro Hueco s/n, El Zapotal, 29094 Tuxtla Gutiérrez, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-11">
                                <div class="flex items-start">
                                    <a
                                        href="https://www.facebook.com/ZoomatOficial/"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="md:text-3xl text-2xl xl:mt-12 sm:mt-20 mt-16">Chiapa de Corzo</h3>
                    <div class="slider-home grid grid-cols-3 gap-6 sm:mt-4 mt-3 xl:mx-0 md:-mx-2">
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Plaza Central</h4>
                            <img src="/images/locations/place-10.png" class="w-full h-44 object-cover rounded-md mx-auto mt-3" alt="Imagen de Lugar">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            5 de Febrero, Colonia Centro, 29160 Chiapa de Corzo, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <a
                                        href="https://www.visitmexico.com/chiapas/chiapa-de-corzo/centro-historico"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4>Cañón del Sumidero</h4>
                            <img src="/images/locations/place-11.png" class="w-full h-44 object-cover rounded-md mx-auto mt-3" alt="Imagen de Lugar">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Capitán Vicente López #7, San Jacinto, 29160 Chiapa de Corzo, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <a
                                        href="https://www.tripadvisor.com/Attraction_Review-g499408-d1925372-Reviews-Parque_Nacional_Canon_del_Sumidero-Chiapa_de_Corzo_Southern_Mexico.html"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                            <h4 class="truncat">Exconvento de SD</h4>
                            <img src="/images/locations/place-12.png" class="w-full h-44 object-cover rounded-md mx-auto mt-3" alt="Imagen de Lugar">
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M8 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2Zm6-1.8C14 4.57 11.35 2 8 2S2 4.57 2 8.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14ZM8 0c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C0 3.22 3.8 0 8 0Z"/>
                                    </svg>
                                    <div class="ml-2">
                                        <span class="font-JetBrains uppercase">Ubicación</span>
                                        <p class="font-JetBrains font-medium text-green-800 mt-2">
                                            Av Mexicanidad Chiapaneca #10, Centro, 29160 Chiapa de Corzo, Chis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                <div class="flex items-start">
                                    <a
                                        href="http://sic.gob.mx/ficha.php?table=museo&table_id=860"
                                        class="btn btn-green stretched-link inline-block px-5 py-2"
                                        target="_blank"
                                        rel="nofollow noopener noreferrer"
                                    >
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="gifts" data-link="8" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative min-h-screen sm:px-10 px-4 pt-5 pb-20">
                    <div class="xl:absolute xl:left-1/2 xl:right-auto xl:top-1/2 xl:transform xl:-translate-x-1/2 xl:-translate-y-1/2 w-full xl:px-10">
                        <div>
                            <h2 class="md:text-5xl text-4xl text-green-800 font-semibold">Mesa de regalos</h2>
                            <h4 class="md:text-2xl text-xl xl:mt-6 mt-3">Tu presencia será nuestro mejor regalo, sin embargo, si quieres hacernos un obsequio de bodas te compartimos algunas opciones:</h4>
                            <div class="slider-home grid grid-cols-3 gap-6 xl:mt-14 mt-4 xl:mx-0 md:-mx-2">
                                <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                                    <h3>Liverpool</h3>
                                    <img src="/images/brands/liverpool.png" class="w-2/3 h-18 object-contain mx-auto mt-4" alt="Imagen de Liverpool">
                                    <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                        <svg class="text-amber-500 flex-shrink-0 w-4 pt-2px" viewBox="0 0 20 24" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="m10.787 21.502-9.79-9.79v2c0 .53.21 1.04.59 1.41l7.79 7.79c.78.78 2.05.78 2.83 0l6.21-6.21c.78-.78.78-2.05 0-2.83l-7.63 7.63Z"/>
                                            <path fill="currentColor" d="M9.377 17.912c.39.39.9.59 1.41.59.51 0 1.02-.2 1.41-.59l6.21-6.21c.78-.78.78-2.05 0-2.83l-7.79-7.79c-.37-.37-.88-.58-1.41-.58h-6.21c-1.1 0-2 .9-2 2v6.21c0 .53.21 1.04.59 1.41l7.79 7.79Zm-6.38-15.41h6.21l7.79 7.79-6.21 6.21-7.79-7.79v-6.21Z"/>
                                            <path fill="currentColor" d="M5.247 6.002a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5Z"/>
                                        </svg>
                                        <div class="ml-2">
                                            <span class="font-JetBrains uppercase">Código de mesa de regalos</span>
                                            <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">50942558</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center border-t border-amber-500 pt-5 lg:mt-5 mt-12">
                                        <a
                                            href="https://mesaderegalos.liverpool.com.mx/milistaderegalos/50942558"
                                            class="btn btn-green stretched-link inline-block px-5 py-2"
                                            target="_blank"
                                            rel="nofollow noopener noreferrer"
                                        >
                                            Ir al sitio
                                        </a>
                                    </div>
                                </div>
                                <div class="col-span-1 border border-amber-500 rounded relative px-4 py-4">
                                    <h3>Amazon</h3>
                                    <img src="/images/brands/amazon.png" class="w-2/3 h-18 object-contain mx-auto mt-4" alt="Imagen de Amazon">
                                    <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                        <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                        <div class="ml-2">
                                            <span class="font-JetBrains uppercase">Búsqueda de mesa de regalos</span>
                                            <p class="font-JetBrains font-medium text-green-800 text-lg mt-2">Katya Carlos</p>
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
                                    <h3>Transferencia</h3>
                                    <img src="/images/brands/banamex.png" class="w-2/3 h-18 object-contain mx-auto mt-4" alt="Imagen de Citibanamex">
                                    <div class="flex items-start border-t border-amber-500 pt-5 mt-5">
                                        <svg class="text-amber-500 flex-shrink-0 w-5 pt-2px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                        </svg>
                                        <div class="w-full ml-2">
                                            <span class="font-JetBrains uppercase">CLABE Interbancaria</span>
                                            <div class="w-full relative">
                                                <p class="clipboard-content font-JetBrains font-medium text-green-800 text-lg mt-2">002180902254138854</p>
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
                                    <p class="text-green-800 font-JetBrains font-medium lg:mt-6 md:mt-7 mt-14">Citibanamex</p>
                                    <p class="text-green-800 font-JetBrains font-medium mt-1">Carlos Armando Hernández Anza</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="confirm" data-link="9" class="section container mx-auto relative min-h-screen">
                <div class="container mx-auto relative min-h-screen sm:px-10 px-4 pt-5">
                    <div class="xl:absolute xl:left-1/2 xl:right-auto xl:top-1/2 xl:transform xl:-translate-x-1/2 xl:-translate-y-1/2 w-full xl:px-10 xl:py-20 pb-10">
                        <h2 class="sm:text-4xl text-3xl text-green-800 text-center sm:mt-0 mt-8">Familia</h2>
                        <h1 class="xl:text-6xl sm:text-5xl text-4xl text-green-800 text-center md:mt-3">Lorem Ipsum</h1>
                        <div class="bg-white xl:w-3/5 lg:w-4/5 md:w-5/6 sm:w-11/12 w-full rounded-lg mx-auto py-4 md:mt-6 mt-3">
                            <div class="text-center text-green-800">
                                <h4 class="sm:text-2xl text-xl">Esperamos verlos en nuestra boda</h4>
                                <h2 class="sm:text-4xl text-3xl text-green-800 -mt-1">Katya & Carlos</h2>
                            </div>
                            <div class="mt-2">
                                <div class="bg-green-300 md:px-10 sm:px-5 px-6 py-1">
                                    <p class="text-white pt-1">Tomar en cuenta esto para tu asistencia</p>
                                </div>
                                <div class="sm:grid grid-cols-2 md:gap-x-6 sm:gap-y-1 gap-y-3 md:px-10 sm:px-5 px-6 sm:py-4 py-3">
                                    <p class="col-span-1 flex items-center">
                                        <svg class="w-5" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M19.656 3.5a2.74 2.74 0 0 1 2.75-2.75 2.74 2.74 0 0 1 2.75 2.75 2.74 2.74 0 0 1-2.75 2.75 2.74 2.74 0 0 1-2.75-2.75Zm5.5 24.75V20h3.438L25.1 9.509a2.763 2.763 0 0 0-2.612-1.884h-.165a2.75 2.75 0 0 0-2.613 1.884l-1.182 3.547c1.485.825 2.502 2.379 2.502 4.194v11h4.125ZM14.844 13.812a2.06 2.06 0 0 0 2.062-2.062 2.06 2.06 0 0 0-2.062-2.063 2.06 2.06 0 0 0-2.063 2.063 2.06 2.06 0 0 0 2.063 2.063ZM5.219 6.25a2.74 2.74 0 0 0 2.75-2.75A2.74 2.74 0 0 0 5.219.75a2.74 2.74 0 0 0-2.75 2.75 2.74 2.74 0 0 0 2.75 2.75Zm2.75 22v-9.625h2.062v-8.25a2.758 2.758 0 0 0-2.75-2.75H3.156a2.758 2.758 0 0 0-2.75 2.75v8.25H2.47v9.625h5.5Zm8.937 0v-5.5h1.375v-5.5a2.077 2.077 0 0 0-2.062-2.063h-2.75a2.078 2.078 0 0 0-2.063 2.063v5.5h1.375v5.5h4.125Z"/>
                                        </svg>
                                        <span class="sm:text-lg font-medium pt-1 ml-3">Sin niños</span>
                                    </p>
                                    <p class="col-span-1 flex items-center">
                                        <svg class="h-5 ml-1" viewBox="0 0 9 23" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M4.5 5.313a2.4 2.4 0 0 0 2.406-2.407A2.4 2.4 0 0 0 4.5.5a2.4 2.4 0 0 0-2.406 2.406A2.4 2.4 0 0 0 4.5 5.312ZM7.25 22.5v-6.875h1.375V9.437a2.758 2.758 0 0 0-2.75-2.75h-2.75a2.758 2.758 0 0 0-2.75 2.75v6.188H1.75V22.5h5.5Z"/>
                                        </svg>
                                        <span class="sm:text-lg font-medium pt-1 sm:ml-4 ml-5">Vestimenta formal</span>
                                    </p>
                                    <p class="col-span-1 flex items-center">
                                        <svg class="h-5" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="m.23 21.27 14-5-9-9-5 14Zm10.35-5.82-7.05 2.52 2.52-7.05 4.53 4.53ZM12.76 11.8l5.59-5.59a1.25 1.25 0 0 1 1.77 0l.59.59 1.06-1.06-.59-.59a2.758 2.758 0 0 0-3.89 0l-5.59 5.59 1.06 1.06ZM8.29 6.15l-.59.59L8.76 7.8l.59-.59a2.758 2.758 0 0 0 0-3.89l-.59-.59L7.7 3.8l.59.59c.48.48.48 1.28 0 1.76ZM15.29 11.15l-1.59 1.59 1.06 1.06 1.59-1.59a1.25 1.25 0 0 1 1.77 0l1.61 1.61 1.06-1.06-1.61-1.61a2.758 2.758 0 0 0-3.89 0ZM13.29 5.15 9.7 8.74l1.06 1.06 3.59-3.59a2.758 2.758 0 0 0 0-3.89L12.76.73 11.7 1.79l1.59 1.59c.48.49.48 1.29 0 1.77Z"/>
                                        </svg>
                                        <span class="sm:text-lg font-medium pt-1 ml-3">Divertirte mucho</span>
                                    </p>
                                    <p class="col-span-1 flex items-center">
                                        <svg class="h-4" viewBox="0 0 31 31" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M8.666 5.806 3.8 10.674c-4.565 4.565-4.565 11.962 0 16.527 4.565 4.565 11.962 4.565 16.527 0l8.264-8.264c1.334-1.333 1.334-3.52 0-4.867a3.263 3.263 0 0 0-.536-.44l.536-.536c1.334-1.334 1.334-3.52 0-4.868a3.651 3.651 0 0 0-.742-.564 3.433 3.433 0 0 0-.715-3.808 3.444 3.444 0 0 0-4.4-.385 3.734 3.734 0 0 0-.468-.578c-1.334-1.333-3.52-1.333-4.867 0l-3.452 3.452a3.428 3.428 0 0 0-5.28-.536Zm1.939 1.953a.68.68 0 0 1 .976 0 .68.68 0 0 1 0 .976L7.21 13.108a4.125 4.125 0 0 1 0 5.83l1.939 1.938a6.88 6.88 0 0 0 1.54-7.37l8.662-8.662a.68.68 0 0 1 .976 0 .68.68 0 0 1 0 .976l-6.325 6.325 1.939 1.939 8.264-8.264a.68.68 0 0 1 .976 0 .68.68 0 0 1 0 .976l-8.264 8.264 1.939 1.939 6.806-6.806a.68.68 0 0 1 .976 0 .68.68 0 0 1 0 .976l-7.782 7.782 1.939 1.939 4.867-4.867a.68.68 0 0 1 .976 0 .68.68 0 0 1 0 .976l-8.25 8.264a8.93 8.93 0 0 1-12.636 0 8.93 8.93 0 0 1 0-12.637l4.854-4.867Zm20.02 14.616c0 4.551-3.699 8.25-8.25 8.25v-2.063a6.197 6.197 0 0 0 6.188-6.187h2.062ZM.375 8.625c0-4.551 3.699-8.25 8.25-8.25v2.063a6.197 6.197 0 0 0-6.188 6.187H.376Z"/>
                                        </svg>
                                        <span class="sm:text-lg font-medium pt-1 ml-3">Aplaudirle a los novios</span>
                                    </p>
                                </div>
                            </div>
                            <div class="border-t border-amber-500 pt-4 pb-3">
                                <h3 class="sm:text-3xl text-2xl text-center font-medium">Pase para <span class="text-amber-800 sm:text-5xl text-4xl font-medium px-1">{{ $user->companion }}</span> personas</h3>
                                <confirm-attend :current-user="{{ json_encode(auth()->check() ? auth()->user() : null) }}" /></confirm-attend>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
