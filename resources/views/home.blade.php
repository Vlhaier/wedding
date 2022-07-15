@extends('layouts.app')

@section('content')

    @include('layouts._navbar')

    <div class="ml-navbar">
        <div class="fixed bottom-0 left-0 right-0 top-0 ml-navbar sm:bg-contain bg-auto bg-no-repeat bg-center h-screen w-full" style="background-image: url('images/bg.png')"></div>
        <div class="h-screen w-full">
            <div id="home" data-link="0" class="section container mx-auto relative h-screen">
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
        </div>
    </div>

@endsection
