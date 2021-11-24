<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>@yield('title')</title>
</head>
{{-- Favicon --}}
{{-- Estilos --}}

<body>
    {{-- Header --}}
    {{-- nav --}}


    <nav class="flex items-center justify-between flex-wrap bg-white p-6 fixed w-full z-10 top-0">
        <div class="flex items-center flex-shrink-0 text-white mr-5">

            {{-- Logo --}}
            <a class="md:py-0" href="/">
                <img class="h-35 w-60 pl-6 self-center text-black mx-10" src="{{url('images/JORRIFADI_LOGO.png')}}"
                    alt="Logotipo Empresa">
            </a>
        </div>

        {{-- Menu --}}
        <div class="block lg:hidden">
            <button id="nav-toggle"
                class="flex items-center px-3 py-2 border rounded text-black-500 border-gray-600 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>

        {{-- Texto del menu --}}

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center text-xl no-underline">
                <li class="mr-3 no-underline">
                    <a class=" inline-block py-2 px-4 text-black hover:text-yellow-500 no-underline"
                        href="{{route('index')}}">Inicio</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black hover:text-yellow-500  py-2 px-4 no-underline"
                        href="{{route('nosotros')}}">Nosotros</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black hover:text-yellow-500 py-2 px-4 no-underline"
                        href="{{route('servicios')}}">Servicios</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black  hover:text-yellow-500  py-2 px-4 no-underline"
                        href="{{route('proyectos')}}">Proyectos</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black hover:text-yellow-500  py-2 px-4 no-underline"
                        href="{{route('contactanos')}}">Contáctanos</a>
                </li>

            </ul>
        </div>
    </nav>

    {{-- Termina header --}}

    <br>
    <br>
    <br>
    <br>
    <br>


    {{-- Icono watsap --}}
    @yield('content')
    <a href="https://api.whatsapp.com/send?phone=+52{{$datos1->Telefono}}&text=Hola,%20quiero%20informacion.%20"
        class="whatsapp" target="_blank">
        <i class="fa fa-whatsapp whatsapp-icon">
        </i>
    </a>
    {{-- termina Icono watsap --}}


    {{-- Script --}}

    <script>
        //Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function(){
			document.getElementById("nav-content").classList.toggle("hidden");
		}
    </script>

</body>


{{-- Footer --}}

<footer class="footer bg-gray-300 relative pt-2 gab-y ">
    <div class="container mx-auto px-2">

        <div class="sm:flex sm:mt-auto">
            <div class=" mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">



                <div class="flex flex-col">
                    <span class="font-bold text-blue-800 uppercase mt-4 md:mt-0 mb-2">Nuestra empresa</span>
                    <span class="my-1"><a href="{{route('index')}}"
                            class="text-black  text-md hover:text-yellow-500">Inicio</a></span>
                    <span class="my-1"><a href="{{route('nosotros')}}"
                            class="text-black  text-md hover:text-yellow-500">Nosotros</a></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Servicios</a></span>
                    <span class="my-1"><a href="{{route('proyectos')}}"
                            class="text-black  text-md hover:text-yellow-500">Proyectos</a></span>
                    <span class="my-1"><a href="{{route('contactanos')}}"
                            class="text-black  text-md hover:text-yellow-500">Contáctanos</a></span>
                </div>

                <div class="flex flex-col">
                    <span class="font-bold text-blue-800 uppercase mt-4 md:mt-0 mb-2">Servicios</span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Proyectos
                            ejecutivos</b></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Construcción y/o
                            remodelaciones en general</a></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Ejecución y
                            supervisión de obras </a></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Trámites ante
                            entidades municipales, estatales y federales<a></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Unidad de
                            verificación de instalaciones eléctrica<a></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Servicio de
                            asesoría</a></span>
                </div>



                <div class="flex flex-col">
                    <span class="font-bold text-blue-800 uppercase mt-4 md:mt-0 mb-2">Contáctanos</span>
                    <span class="my-1"><i class="fa fa-mobile"></i><a
                            class="text-black ml-1.5 text-md hover:text-yellow-500"> {{$datos1->Telefono}}</a></span>
                    <span class="my-1"><i class="fa fa-envelope"></i><a
                            class="text-black mr-1  text-md hover:text-yellow-500"> {{$datos1->Correo}}</a></span>

 
                    {{-- Logo redes sociales --}}
                    {{-- Facebook --}}

                    <div>
                    <a href="https://www.facebook.com/Jorrifadi-Instalaciones-y-Proyectos-SA-de-CV-103039931507645/" target="_blank" style="color:black">
                    <P class = " fa fa-facebook hover:text-yellow-500" > Facebook </P>
                    </a>

                    
                      
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Franja naranja --}}
    <div class=" bg-yellow-500 mx-auto px-5">
        <div class="mt-5  flex flex-col items-center">
            <div class="sm:w-2/4 text-center py-4">
                <h1 class="text-sm text-black-700 font-bold mb-2">
                    © 2021 Jodifarri Instalación y Proyectos S.A. de C.V. ​Todos los Derechos Reservados.
                </h1>
            </div>
        </div>
    </div>




</footer>



{{-- Termina Footer --}}

</html>