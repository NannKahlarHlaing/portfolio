<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    @vite('resources/css/app.css')
</head>
{{-- <style>
    @import url('https://fonts.googleapis.com/css2?family=Patua+One&display=swap');
</style> --}}
<body class="font-cormorant text-custom-secondary">
    <nav class="bg-white font-kaushan-script hidden md:block">
        <div class="container mx-auto lg:px-40 md:px-10 px-5">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-3xl font-semibold">{{ config('services.profile.name') }}</a>
                </div>
                <div class="">
                    <a href="#" class="ml-4">Link 1</a>
                    <a href="#" class="ml-4">Link 2</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mx-auto lg:px-40 md:px-10 px-5">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 md:pt-16 pt-5 relative">
            <div class="flex flex-col">
                <div class="font-semibold 2xl:text-9xl lg:text-8xl md:text-5xl text-3xl leading-tight font-kaushan-script">Hello</div>
                <div class="font-semibold 2xl:text-9xl lg:text-8xl md:text-5xl text-3xl leading-tight mb-5 font-kaushan-script">I'm Nann !</div>
                <div class="font-medium mb-3">
                    I'm a self-taught Web Developer with a strong foundation in coding and a passion for creating dynamic digital experiences.
                </div>
                <div class="font-bold font-kaushan-script flex justify-start">
                    <span class="me-4">Social Links :</span>
                    <a href="{{ config('services.profile.facebook') }}" target="blank" class="me-4 hover:-mt-2 duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class=" text-custom-secondary w-5 h-5">
                        <path fill="currentColor" d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/>
                        </svg>
                    </a>
                    <a href="{{ config('services.profile.instagram') }}" target="blank" class="me-4 hover:-mt-2 duration-500">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=" text-custom-secondary w-5 h-5">
                        <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                    </svg>
                    </a>
                    <a href="{{ config('services.profile.git') }}" target="blank" class="me-4 hover:-mt-2 duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class=" text-custom-secondary w-5 h-5">
                            <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/>
                        </svg>
                    </a>
                    <a href="{{ config('services.profile.linkedIn') }}" target="blank" class="me-4 hover:-mt-2 duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=" text-custom-secondary w-5 h-5">
                            <path fill="currentColor" d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/>
                        </svg>
                    </a>
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="blank" class="me-4 hover:-mt-2 duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=" text-custom-secondary w-5 h-5">
                            <path fill="currentColor" d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-center items-end">
                <div class="max-w-sm rounded relative">
                    <div class="columns-1">
                        <img src="{{ asset('images/20240303_102332.jpg') }}" alt="" class="w-full z-0 ">
                        <div class="px-6 py-4 bg-custom-secondary -mt-24 z-10 absolute text-center text-white w-full">
                            <div class="font-bold md:text-5xl text-3xl mb-2 font-kaushan-script">Contact</div>
                            <p class="flex justify-center mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                                    <path fill-rule="evenodd" d="m9.69 18.933.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 1 0 3 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 0 0 2.273 1.765 11.842 11.842 0 0 0 .976.544l.062.029.018.008.006.003ZM10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z" clip-rule="evenodd" />
                                </svg>
                                {{ config('services.profile.address') }}
                            </p>
                            <p class="flex justify-center mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                                    <path fill-rule="evenodd" d="M2.106 6.447A2 2 0 0 0 1 8.237V16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.236a2 2 0 0 0-1.106-1.789l-7-3.5a2 2 0 0 0-1.788 0l-7 3.5Zm1.48 4.007a.75.75 0 0 0-.671 1.342l5.855 2.928a2.75 2.75 0 0 0 2.46 0l5.852-2.927a.75.75 0 1 0-.67-1.341l-5.853 2.926a1.25 1.25 0 0 1-1.118 0l-5.856-2.928Z" clip-rule="evenodd" />
                                  </svg>
                                {{ config('services.profile.email') }}
                            </p>
                            <p class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                                    <path d="M8 16.25a.75.75 0 0 1 .75-.75h2.5a.75.75 0 0 1 0 1.5h-2.5a.75.75 0 0 1-.75-.75Z" />
                                    <path fill-rule="evenodd" d="M4 4a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4Zm4-1.5v.75c0 .414.336.75.75.75h2.5a.75.75 0 0 0 .75-.75V2.5h1A1.5 1.5 0 0 1 14.5 4v12a1.5 1.5 0 0 1-1.5 1.5H7A1.5 1.5 0 0 1 5.5 16V4A1.5 1.5 0 0 1 7 2.5h1Z" clip-rule="evenodd" />
                                  </svg>
                                {{ config('services.profile.phone') }}
                            </p>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="bg-custom-primary w-full mb-5">
        <div class="container mx-auto lg:px-40 md:px-10 px-5 text-white">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 ">
                <div class="">
                    <div class="lg:py-16 py-32">
                        <div class="md:text-5xl text-3xl font-bold font-kaushan-script mb-8">
                            Education
                        </div>
                        <div class="grid grid-cols-6 md:font-bold md:text-xl mb-5">
                            <div class="col-start-1 col-end-3 flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                    <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                    <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                    <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                                </svg>
                                2000 - 2011
                            </div>
                            <div class="col-start-3 col-end-7 flex flex-col justify-start font-semibold">
                               <div class="mb-2 text-base">Basic Education High School, PhaungByin</div>
                               <div class="text-sm"></div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 md:font-bold md:text-xl mb-5">
                            <div class="col-start-1 col-end-3 flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                    <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                    <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                    <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                                </svg>
                                2012 - 2017
                            </div>
                            <div class="col-start-3 col-end-7 flex flex-col justify-start font-semibold">
                               <div class="mb-2 text-base">Monywa Computer University</div>
                               <div class="text-sm"> B.C.Sc</div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 md:font-bold md:text-xl mb-5">
                            <div class="col-start-1 col-end-3 flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                    <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                    <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                    <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                                </svg>
                                2018 - 2019
                            </div>
                            <div class="col-start-3 col-end-7 flex justify-start flex-col font-semibold">
                                <div class="mb-2 text-base">Myanmar IT Consulting</div>
                                <div class="text-sm">PHP Web Developer Bootcamp</div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 md:font-bold md:text-xl mb-5">
                            <div class="col-start-1 col-end-3 flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                    <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                    <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                    <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                                </svg>
                                2023 - 2024
                            </div>
                            <div class="col-start-3 col-end-7 flex flex-col justify-start font-semibold">
                                <div class="mb-2 text-base">Japanese Language Proficency Test</div>
                                <div class="text-sm">N4</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-custom-secondary lg:-ms-8 md:-ms-10 -mx-5 md:-mt-32 -mt-20 lg:-mt-9 md:ps-8 ps-5 py-10 md:absolute relative lg:w-100 md:w-70">
                        <div class="md:text-5xl text-3xl font-bold font-kaushan-script mb-8">
                            Experience
                        </div>
                        <div class="grid grid-cols-6 md:font-bold md:text-xl mb-5">
                            <div class="col-start-1 col-end-3 flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                    <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 0 0 3 3h.27l-.155 1.705A1.875 1.875 0 0 0 7.232 22.5h9.536a1.875 1.875 0 0 0 1.867-2.045l-.155-1.705h.27a3 3 0 0 0 3-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0 0 18 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM16.5 6.205v-2.83A.375.375 0 0 0 16.125 3h-8.25a.375.375 0 0 0-.375.375v2.83a49.353 49.353 0 0 1 9 0Zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 0 1-.374.409H7.232a.375.375 0 0 1-.374-.409l.526-5.784a.373.373 0 0 1 .333-.337 41.741 41.741 0 0 1 8.566 0Zm.967-3.97a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H18a.75.75 0 0 1-.75-.75V10.5ZM15 9.75a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V10.5a.75.75 0 0 0-.75-.75H15Z" clip-rule="evenodd" />
                                </svg>
                                2019 - 2021
                            </div>
                            <div class="col-start-3 col-end-7 flex flex-col justify-start font-semibold">
                                <div class="mb-2 text-base">Netware Information Technology</div>
                                <div class="text-sm">Fullstack Web Developer</div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 md:font-bold md:text-xl mb-5">
                            <div class="col-start-1 col-end-3 flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                    <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 0 0 3 3h.27l-.155 1.705A1.875 1.875 0 0 0 7.232 22.5h9.536a1.875 1.875 0 0 0 1.867-2.045l-.155-1.705h.27a3 3 0 0 0 3-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0 0 18 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM16.5 6.205v-2.83A.375.375 0 0 0 16.125 3h-8.25a.375.375 0 0 0-.375.375v2.83a49.353 49.353 0 0 1 9 0Zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 0 1-.374.409H7.232a.375.375 0 0 1-.374-.409l.526-5.784a.373.373 0 0 1 .333-.337 41.741 41.741 0 0 1 8.566 0Zm.967-3.97a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H18a.75.75 0 0 1-.75-.75V10.5ZM15 9.75a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V10.5a.75.75 0 0 0-.75-.75H15Z" clip-rule="evenodd" />
                                </svg>
                                2022 - now
                            </div>
                            <div class="col-start-3 col-end-7 flex flex-col justify-start font-semibold">
                                <div class="mb-2 text-base">Freelancer</div>
                                <div class="text-sm">Fullstack Web Developer</div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 md:font-bold md:text-xl">
                            <div class="col-start-1 col-end-3 flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                    <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 0 0 3 3h.27l-.155 1.705A1.875 1.875 0 0 0 7.232 22.5h9.536a1.875 1.875 0 0 0 1.867-2.045l-.155-1.705h.27a3 3 0 0 0 3-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0 0 18 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM16.5 6.205v-2.83A.375.375 0 0 0 16.125 3h-8.25a.375.375 0 0 0-.375.375v2.83a49.353 49.353 0 0 1 9 0Zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 0 1-.374.409H7.232a.375.375 0 0 1-.374-.409l.526-5.784a.373.373 0 0 1 .333-.337 41.741 41.741 0 0 1 8.566 0Zm.967-3.97a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H18a.75.75 0 0 1-.75-.75V10.5ZM15 9.75a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V10.5a.75.75 0 0 0-.75-.75H15Z" clip-rule="evenodd" />
                                </svg>
                                2023 - now
                            </div>
                            <div class="col-start-3 col-end-7 flex flex-col justify-start font-semibold">
                                <div class="mb-2 text-base">iMyanmarHouse.com</div>
                                <div class="text-sm">Fullstack Web Developer</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-end -mt-14 pb-3 md:pb-72 pb lg:pb-24">
                    <div class="outlined-text text-9xl f text-transparent animate-pulse hidden md:block" >RESUME</div>
                    <div class="outlined-text text-9xl f text-transparent animate-pulse hidden md:block" >RESUME</div>
                    <div class="outlined-text text-9xl f text-transparent animate-pulse hidden md:block  z-0">RESUME</div>
                    <div class="md:text-5xl text-3xl font-bold self-start lg:-mt-14 md:-mt-36 mt-24 mb-8 font-kaushan-script z-10">
                        Technical Skills
                    </div>
                    <div class="self-start w-full grid grid-cols-2 md:grid-cols-3 gap-3 text-sm pb-5">
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            PHP
                        </div>
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            Laravel
                        </div>
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            Wordpress
                        </div>
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            TypeScript
                        </div>
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            MySQL
                        </div>
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            HTML
                        </div>
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            CSS
                        </div>
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            Bootstrap
                        </div>
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            Tailwind
                        </div>
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            JavaScript
                        </div>
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            JQuery
                        </div>
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            AJAX
                        </div>
                        <div class="flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 me-2">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                            </svg>
                            React
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto lg:px-40 md:px-10 px-5 text-custom-secondary md:pt-32 lg:pt-0">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 flex-row-reverse">
            <div class="md:pt-56 pb-16 flex flex-col items-center lg:order-first md:order-first order-last">
                <a href="">
                    <div class="lg:w-3/4 md:w-4/5 border-2 border-custom-primary rounded-2xl animate-pulse hover:animate-none mb-16">
                        <div class="border-b-2 border-b-custom-primary py-2 px-4 flex flex-row">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-3">
                                <g clip-path="url(#clip0_1545_13337)">
                                <path d="M7.84729 14.25C11.4371 14.25 14.3473 11.3399 14.3473 7.75C14.3473 4.16015 11.4371 1.25 7.84729 1.25C4.25744 1.25 1.34729 4.16015 1.34729 7.75C1.34729 11.3399 4.25744 14.25 7.84729 14.25Z" fill="#7CBCC0"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1545_13337">
                                <rect width="14" height="14" fill="white" transform="translate(0.84729 0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-3">
                                <g clip-path="url(#clip0_1545_13337)">
                                <path d="M7.84729 14.25C11.4371 14.25 14.3473 11.3399 14.3473 7.75C14.3473 4.16015 11.4371 1.25 7.84729 1.25C4.25744 1.25 1.34729 4.16015 1.34729 7.75C1.34729 11.3399 4.25744 14.25 7.84729 14.25Z" fill="#7CBCC0"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1545_13337">
                                <rect width="14" height="14" fill="white" transform="translate(0.84729 0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1545_13337)">
                                <path d="M7.84729 14.25C11.4371 14.25 14.3473 11.3399 14.3473 7.75C14.3473 4.16015 11.4371 1.25 7.84729 1.25C4.25744 1.25 1.34729 4.16015 1.34729 7.75C1.34729 11.3399 4.25744 14.25 7.84729 14.25Z" fill="#7CBCC0"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1545_13337">
                                <rect width="14" height="14" fill="white" transform="translate(0.84729 0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="px-4 py-3">
                            <div class="font-semibold text-xl mb-3">iMyanmar Jobs 1</div>
                            <div class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi neque reiciendis modi, adipisci, natus placeat corporis magni quaerat dolores dolor voluptatem maiores quos! Inventore necessitatibus, culpa est consequatur reiciendis quidem.</div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="lg:w-3/4 md:w-4/5 border-2 border-custom-primary rounded-2xl animate-pulse hover:animate-none self-start">
                        <div class="border-b-2 border-b-custom-primary py-2 px-4 flex flex-row">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-3">
                                <g clip-path="url(#clip0_1545_13337)">
                                <path d="M7.84729 14.25C11.4371 14.25 14.3473 11.3399 14.3473 7.75C14.3473 4.16015 11.4371 1.25 7.84729 1.25C4.25744 1.25 1.34729 4.16015 1.34729 7.75C1.34729 11.3399 4.25744 14.25 7.84729 14.25Z" fill="#7CBCC0"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1545_13337">
                                <rect width="14" height="14" fill="white" transform="translate(0.84729 0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-3">
                                <g clip-path="url(#clip0_1545_13337)">
                                <path d="M7.84729 14.25C11.4371 14.25 14.3473 11.3399 14.3473 7.75C14.3473 4.16015 11.4371 1.25 7.84729 1.25C4.25744 1.25 1.34729 4.16015 1.34729 7.75C1.34729 11.3399 4.25744 14.25 7.84729 14.25Z" fill="#7CBCC0"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1545_13337">
                                <rect width="14" height="14" fill="white" transform="translate(0.84729 0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1545_13337)">
                                <path d="M7.84729 14.25C11.4371 14.25 14.3473 11.3399 14.3473 7.75C14.3473 4.16015 11.4371 1.25 7.84729 1.25C4.25744 1.25 1.34729 4.16015 1.34729 7.75C1.34729 11.3399 4.25744 14.25 7.84729 14.25Z" fill="#7CBCC0"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1545_13337">
                                <rect width="14" height="14" fill="white" transform="translate(0.84729 0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="px-4 py-3">
                            <div class="font-semibold text-xl mb-3">iMyanmar Jobs 2</div>
                            <div class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi neque reiciendis modi, adipisci, natus placeat corporis magni quaerat dolores dolor voluptatem maiores quos! Inventore necessitatibus, culpa est consequatur reiciendis quidem.</div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="py-12 flex flex-col">
                <div class="md:text-5xl text-3xl font-bold font-kaushan-script mb-10 w-full">
                    Projects
                </div>
                <a href="">
                    <div class="lg:w-3/4 md:w-4/5 border-2 border-custom-primary rounded-2xl animate-pulse hover:animate-none mb-16 self-center">
                        <div class="border-b-2 border-b-custom-primary py-2 px-4 flex flex-row">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-3">
                                <g clip-path="url(#clip0_1545_13337)">
                                <path d="M7.84729 14.25C11.4371 14.25 14.3473 11.3399 14.3473 7.75C14.3473 4.16015 11.4371 1.25 7.84729 1.25C4.25744 1.25 1.34729 4.16015 1.34729 7.75C1.34729 11.3399 4.25744 14.25 7.84729 14.25Z" fill="#7CBCC0"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1545_13337">
                                <rect width="14" height="14" fill="white" transform="translate(0.84729 0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-3">
                                <g clip-path="url(#clip0_1545_13337)">
                                <path d="M7.84729 14.25C11.4371 14.25 14.3473 11.3399 14.3473 7.75C14.3473 4.16015 11.4371 1.25 7.84729 1.25C4.25744 1.25 1.34729 4.16015 1.34729 7.75C1.34729 11.3399 4.25744 14.25 7.84729 14.25Z" fill="#7CBCC0"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1545_13337">
                                <rect width="14" height="14" fill="white" transform="translate(0.84729 0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1545_13337)">
                                <path d="M7.84729 14.25C11.4371 14.25 14.3473 11.3399 14.3473 7.75C14.3473 4.16015 11.4371 1.25 7.84729 1.25C4.25744 1.25 1.34729 4.16015 1.34729 7.75C1.34729 11.3399 4.25744 14.25 7.84729 14.25Z" fill="#7CBCC0"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1545_13337">
                                <rect width="14" height="14" fill="white" transform="translate(0.84729 0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="px-4 py-3">
                            <div class="font-semibold text-xl mb-3">iMyanmar Jobs 3</div>
                            <div class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi neque reiciendis modi, adipisci, natus placeat corporis magni quaerat dolores dolor voluptatem maiores quos! Inventore necessitatibus, culpa est consequatur reiciendis quidem.</div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="lg:w-3/4 md:w-4/5 border-2 border-custom-primary rounded-2xl animate-pulse hover:animate-none">
                        <div class="border-b-2 border-b-custom-primary py-2 px-4 flex flex-row">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-3">
                                <g clip-path="url(#clip0_1545_13337)">
                                <path d="M7.84729 14.25C11.4371 14.25 14.3473 11.3399 14.3473 7.75C14.3473 4.16015 11.4371 1.25 7.84729 1.25C4.25744 1.25 1.34729 4.16015 1.34729 7.75C1.34729 11.3399 4.25744 14.25 7.84729 14.25Z" fill="#7CBCC0"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1545_13337">
                                <rect width="14" height="14" fill="white" transform="translate(0.84729 0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-3">
                                <g clip-path="url(#clip0_1545_13337)">
                                <path d="M7.84729 14.25C11.4371 14.25 14.3473 11.3399 14.3473 7.75C14.3473 4.16015 11.4371 1.25 7.84729 1.25C4.25744 1.25 1.34729 4.16015 1.34729 7.75C1.34729 11.3399 4.25744 14.25 7.84729 14.25Z" fill="#7CBCC0"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1545_13337">
                                <rect width="14" height="14" fill="white" transform="translate(0.84729 0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1545_13337)">
                                <path d="M7.84729 14.25C11.4371 14.25 14.3473 11.3399 14.3473 7.75C14.3473 4.16015 11.4371 1.25 7.84729 1.25C4.25744 1.25 1.34729 4.16015 1.34729 7.75C1.34729 11.3399 4.25744 14.25 7.84729 14.25Z" fill="#7CBCC0"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1545_13337">
                                <rect width="14" height="14" fill="white" transform="translate(0.84729 0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="px-4 py-3">
                            <div class="font-semibold text-xl mb-3">iMyanmar Jobs 4</div>
                            <div class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi neque reiciendis modi, adipisci, natus placeat corporis magni quaerat dolores dolor voluptatem maiores quos! Inventore necessitatibus, culpa est consequatur reiciendis quidem.</div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <div class="container mx-auto lg:px-40 md:px-0 px-0 mb-10">
        <div class="lg:w-3/5 w-100 lg:-ms-8 px-8 py-10 bg-custom-secondary text-white">
            <div class="md:text-5xl text-3xl font-bold font-kaushan-script mb-8 ">
                Get In Touch
            </div>
            @if (Session::has('message'))
                <div class=" text-green-500" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif

            <form action="{{ route('contact.email') }}" method="POST" class="w-full">
                @csrf
                <div class="mb-5">
                    <input type="text" name="name" class="appearance-none bg-transparent border-0 border-b-2 @if($errors->has('name')) border-red-600 @else border-gray-400 @endif w-full py-2 px-0 focus:outline-none focus:border-slate-200 placeholder-gray-400" placeholder="Enter your name">
                    @error('name')
                            <div class=" text-red-500">
                                {{$message}}
                            </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="email" name="email" class="appearance-none bg-transparent border-0 border-b-2 @if($errors->has('email')) border-red-600 @else border-gray-400 @endif w-full py-2 px-0 focus:outline-none focus:border-slate-200 placeholder-gray-400" placeholder="Enter your email">
                    @error('email')
                            <div class=" text-red-500">
                                {{$message}}
                            </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <textarea name="message" id="" cols="30" rows="3" class="appearance-none bg-transparent border-0 border-b-2 @if($errors->has('message')) border-red-600 @else border-gray-400 @endif w-full py-2 px-0 focus:outline-none focus:border-slate-200"></textarea>
                    @error('message')
                            <div class=" text-red-500">
                                {{$message}}
                            </div>
                    @enderror
                </div>
                <button type="submit" class="bg-white hover:bg-slate-200 text-custom-primary font-bold py-2 px-4 rounded-xl focus:outline-none focus:shadow-outline">Send Message</button>
            </form>

        </div>
    </div>
    <div class="bg-custom-primary w-full py-3 text-white font-kaushan-script">
        <div class="text-center">
            ©2023 Nann Kahlar, All rights reserved.
        </div>
    </div>

</body>
</html>
