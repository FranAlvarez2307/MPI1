<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="/css/datatables.min.css" rel="stylesheet">

        <script src="/js/bootstrap.js"></script>
        <script src="/js/datatables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/12.3.1/math.js"></script>
        <style>
            a:link{
                color:#fff;
            }
            a:visited{
                color:#fff;
            }
            a:hover{
                color:#0167bb;
            }
            a.listheader:hover{
                color:#0167bb;
                background:#fff;
            }

            .card{
                width: 98%;
                border-style: solid;
                border-width: 4px 4px 4px 4px;
                border-color: #141931;
                border-radius: 10px;
                margin: 0px 20px 10px 20px;
            }
            .card-header{
                background-color: #141931; 
                font-family: Montserrat;
                font-size: 24px; 
                color: #fff; 
                text-align: center;
            }
            .card-body{
                font-family: Montserrat;
                font-size: 16px; 
                padding: 10px 10px;  
                background-color: #202020; 
            }
            .bodyMobile{
                display: block;
                height: 0;
                overflow: hidden;
                transition: 0s;
                padding-top: 60px;
                background-color: #141931; 
            }
            h1{
                color:#fff;
                text-align: center;
            }
            p{
                margin: 30px 80px;
                color:#fff;
                font-size: 30px;
                text-align: justify;
            }
            img.examples{
                width:20%;
                margin:30px 40%
            }
        </style>
    </head>
    <body class="antialiased" style="background-color:#8c2436">
        <nav class="navbar navbar-expand-md shadow-sm" style="background-color:#141931; width:100%">
                <div class="contain" style="width:100%">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->

                        <ul class="navbar-nav me-auto">
                            <img src='/images/upq.png' class="nav-item" style="margin-left:30px; width:15%; padding-right:30px; border-right: solid; border-color: #fff" alt="Logo">
                            <a href="\"><h5 style="margin-left:30px; margin-top: 35px; color:#fff">MATEMATICAS PARA INGENIERIA I </h5></a>
                        </ul>
                        
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <button id="navbarDropdown" class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="border-color: #fff; font-weight: 800; color: #fff; background-color: #141931; margin: 10px 50px 10px 10px;" onMouseOver="this.style.cssText='border-color: #fff;font-weight: 800; color: #141931; background-color: #fff; margin: 10px 50px 10px 10px;'" onMouseOut="this.style.cssText='border-color: #fff; font-weight: 800; color: #fff; background-color: #141931; margin: 10px 50px 10px 10px;'">
                                    Funciones
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" style="background-color: #141931;" aria-labelledby="navbarDropdown">
                                    <p style="margin:0px 10px; text-align:justify;color:#fff; font-size:15px;font-family: Montserrat; text-transform: uppercase;">Varias Variables</p>
                                    <a class="dropdown-item" style="font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;" onMouseOver="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #141931; background-color: #fff;'" onMouseOut="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;'" href="/funcionesEscalables">Funciones Escalables</a>
                                    <a class="dropdown-item" style="font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;" onMouseOver="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #141931; background-color: #fff;'" onMouseOut="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;'" href="/planosSuperficies">Planos y Superficies</a>
                                    <a class="dropdown-item" style=" font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;" onMouseOver="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #141931; background-color: #fff;'" onMouseOut="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;'" href="/limitesContinuidad">Limites y contuinidad</a>
                                    <br>
                                    <p style="margin:0px 10px; text-align:justify;color:#fff; font-size:15px;font-family: Montserrat; text-transform: uppercase;">Vectoriales</p>
                                    <a class="dropdown-item" style=" font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;" onMouseOver="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #141931; background-color: #fff;'" onMouseOut="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;'" href="/ecuacionesParametricas">Ecuaciones Paramétricas</a>
                                    <a class="dropdown-item" style=" font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;" onMouseOver="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #141931; background-color: #fff;'" onMouseOut="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;'" href="/calculoFuncionesVectoriales">Cálculo en Funciones Vectoriales</a>
                                    <a class="dropdown-item" style=" font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;" onMouseOver="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #141931; background-color: #fff;'" onMouseOut="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;'" href="/integralLinea">Integral de Linea</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <button id="navbarDropdown" class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="border-color: #fff; font-weight: 800; color: #fff; background-color: #141931; margin: 10px 50px 10px 10px;" onMouseOver="this.style.cssText='border-color: #fff;font-weight: 800; color: #141931; background-color: #fff; margin: 10px 50px 10px 10px;'" onMouseOut="this.style.cssText='border-color: #fff; font-weight: 800; color: #fff; background-color: #141931; margin: 10px 50px 10px 10px;'">
                                    Derivadas
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" style="background-color: #141931;" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style=" font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;" onMouseOver="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #141931; background-color: #fff;'" onMouseOut="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;'" href="/derivadaParcial">Derivada Parcial</a>
                                    <a class="dropdown-item" style=" font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;" onMouseOver="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #141931; background-color: #fff;'" onMouseOut="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;'" href="/vectorGradiente">Vector gradiente y<br> Derivada Direccional</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <button id="navbarDropdown" class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="border-color: #fff; font-weight: 800; color: #fff; background-color: #141931; margin: 10px 50px 10px 10px;" onMouseOver="this.style.cssText='border-color: #fff;font-weight: 800; color: #141931; background-color: #fff; margin: 10px 50px 10px 10px;'" onMouseOut="this.style.cssText='border-color: #fff; font-weight: 800; color: #fff; background-color: #141931; margin: 10px 50px 10px 10px;'">
                                    Integrales
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" style="background-color: #141931;" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style=" font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;" onMouseOver="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #141931; background-color: #fff;'" onMouseOut="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;'" href="/integralDobleTriple">Integral Doble y Triple</a>
                                    <a class="dropdown-item" style=" font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;" onMouseOver="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #141931; background-color: #fff;'" onMouseOut="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;'" href="/regionesGenerales">Áreas de <br>Regiones Generales</a>
                                    <a class="dropdown-item" style=" font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;" onMouseOver="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #141931; background-color: #fff;'" onMouseOut="this.style.cssText=' font-family: Montserrat; font-weight: 500; color: #fff; background-color: #141931;'" href="/volumenes">Volumenes</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="containe" style="margin: 30px 15px">
                <div class="col-md-16">
                    <div class="card">
                        <div class="card-header">
                            {{ __('Integral Doble y Triple') }}
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist" >
                                <li class="nav-item"><a class="nav-link active listheader" data-bs-toggle="tab" href="#VID">Integral Iterada Doble</a></li>
                                <li class="nav-item"><a class="nav-link  listheader" data-bs-toggle="tab" href="#DR">Integral Iterada Triple</a></li>
                            </ul>
                            <div class="tab-content" style="width:100%">
                                <div id="VID" class="containe tab-pane active">
                                    <br>
                                    <ul class="nav nav-tabs" role="tablist" >
                                        <li class="nav-item"><a class="nav-link active listheader" data-bs-toggle="tab" href="#VIDD">Definición</a></li>
                                        <li class="nav-item"><a class="nav-link  listheader" data-bs-toggle="tab" href="#VIDE1">Ejemplos</a></li>
                                        <li class="nav-item"><a class="nav-link  listheader" data-bs-toggle="tab" href="#VIDE2">Ejercicios</a></li>
                                    </ul>
                                    <div class="tab-content" style="width:100%">
                                        <div id="VIDD" class="containe tab-pane active">
                                            <br>
                                            <h1>Integral Iterada Doble</h1>
                                            <p>Una integral doble se utiliza para calcular el area bajo una superficie en un plano xy o la masa o el centroide de una lámina bidimensional. La integral doble de una función f(x,y) sobre un dominio D en el plano xy se denota como:</p><img src="/images/int1.png" class="examples"><p>Para evaluar una integral doble, se divide el dominio D en regiones más pequeñas, se aproxima la función f(x,y) en cada región y luego se suma el producto de la función aproximada y el área de cada región. Este proceso se conoce como integración doble por suma de Riemann.</p>
                                        </div>
                                        <div id="VIDE1" class="containe tab-pane">
                                            <br>
                                            <h1>Ejemplo</h1>
                                            <p>Para este ejemplo buscamos calcular el área de una region delimitada por dos curvas <img src="/images/int3.png"> en un plano xy. Para obtener el area primero debemos de  visualizar la región D que queremos evaluar, por ello si se nos dice que la región se define <img src="/images/int4.png">, la nuestra integral quedaria de la siguiente manera: <img src="/images/int5.png">, apartir de esto comenzamos a integrar.</p><p>1. El primer paso consiste en integrar desde adentro hacia afuera, por lo cual, empezamos integrando la variable y, para despues sustituir las variables que nos da la integral definida:</p><img src="/images/int6.png" class="examples"><p>2. El segundo paso integramos con respecto a la variable faltante que en este caso seria x</p><img src="/images/int7.png" class="examples"><p>Por lo que podemos concluir que el área de la región D es 4/3.</p>
                                        </div>
                                        <div id="VIDE2" class="containe tab-pane fade">
                                            <br>
                                            <h1>Ejercicio</h1>
                                            <p>Obten de dominio D de un área de la región delimitada por las curvas <img src="/images/int13.png"> en el plano xy y ademas calcula el área resultante.</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="DR" class="containe tab-pane">
                                    <br>
                                    <ul class="nav nav-tabs" role="tablist" >
                                        <li class="nav-item"><a class="nav-link active listheader" data-bs-toggle="tab" href="#DRD">Definición</a></li>
                                        <li class="nav-item"><a class="nav-link  listheader" data-bs-toggle="tab" href="#DRE1">Ejemplos</a></li>
                                        <li class="nav-item"><a class="nav-link  listheader" data-bs-toggle="tab" href="#DRE2">Ejercicios</a></li>
                                    </ul>
                                    <div class="tab-content" style="width:100%">
                                        <div id="DRD" class="containe tab-pane active">
                                            <br>
                                            <h1>Integral Iterada Triple</h1>
                                            <p>Una integral triple se utiliza para calcular el volumen bajo una superficie en el espacio tridimensional o la masa o el centroide de un sólido tridimensional. La integral triple de una función f(x,y,z) sobre un dominio D en el espacio tridimensional se denota como:</p><img src="/images/int2.png" class="examples"><p>Al igual que con las integrales dobles, para evaluar una integral triple, se divide el dominio D en regiones más pequeñas, se aproxima la función f(x,y,z) en cada región y luego se suma el producto de la función aproximada y el volumen de cada región.</p>
                                        </div>
                                        <div id="DRE1" class="containe tab-pane">
                                            <br>
                                            <h1>Ejemplo</h1>
                                            <p>Queremos calcular el volumen de un sólido que esta encerrado por los planos x = 0, y = 0, z = 0 y x + y + z = 1. Este sólido es un tatraedro con vértices en los puntos (0,0,0), (1,0,0), (0,1,0) y (0,0,1). Donde V es el volumen o el dominio D delimitado por los planos</p><p>Tomando en cuenta todo lo anterior nos queria nuestra integral de la siguiente manera:</p><img src="/images/int8.png" class="examples"><p>Con nuestra integral ya establecida, comenzamos a realizarla por pasos:</p><p>1. Igual que la integral doble, comenzamos a integrar desde adentro hacia afuera, primero integrando x y luego sustituyendo los valores que nos indica la integral definida.</p><img src="/images/int9.png" class="examples"><p>2. Despues continuamos integrando la siguiente variable que en este caso seria la y, para despues sustituir los valores que nos indica la integral definida.</p><img src="/images/int10.png" class="examples"><img src="/images/int11.png" class="examples"><p>3. Finalmente repetimos el procedimiento con la variable faltante que seria la z.</p><img src="/images/int12.png" class="examples">
                                        </div>
                                        <div id="DRE2" class="containe tab-pane fade">
                                            <br>
                                            <h1>Ejercicio</h1>
                                            <p>Calcula el Volumen del sólido encerrado por los planos x = 0, y = 0, z = 0 y x + y + z = 2 en el plano tridimensional.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <footer class=" text-center" style=" background-color:#141931;">
            <div class="container p-4">
                <section class="mb-4">
                    <p style="margin:30px 38px;color:#fff; font-size:20px">Tambien puede revisar los distintos temas en los siguientes links:</p>
                </section>
                <section class="">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <img src='/images/upq.png' class="nav-item" style="margin-left:30px; width:150px; padding-right:30px; border-right: solid; border-color: #fff" alt="Logo">
                            <img src='/images/isc.png' class="nav-item" style="margin-left:30px; width:150px; padding-right:30px; border-right: solid; border-color: #fff" alt="Logo">
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase" style="color:#fff;">Funciones</h5>
                            <ul class="list-unstyled mb-0">
                                <h6 style="color:#fff;">Varias Variables</h6>
                                <li>
                                    <a href="/funcionesEscalables">Funciones Escalares </a>
                                </li>
                                <li>
                                    <a href="/planosSuperficies">Planos y Superficies</a>
                                </li>
                                <li>
                                    <a href="/limitesContinuidad">Limites y contuinidad</a>
                                </li>
                                <br>
                                <h6 style="color:#fff;">Vectoriales</h6>
                                <li>
                                    <a href="/ecuacionesParametricas">Ecuaciones Paramétricas</a>
                                </li>
                                <li>
                                    <a href="/calculoFuncionesVectoriales">Cálculo en Funciones Vectoriales</a>
                                </li>
                                <li>
                                    <a href="/integralLinea">Integral de linea</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase" style="color:#fff;">Derivadas</h5>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="/derivadaParcial">Derivada <br>Parcial</a>
                                </li>
                                <br>
                                <li>
                                    <a href="/vectorGradiente">Vector gradiente <br>y Derivada Direccional</a>
                                </li>
                                <br>

                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase" style="color:#fff;">Integrales</h5>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="/integralDobleTriple">Integral doble<br>y triple</a>
                                </li>
                                <br>
                                <li>
                                    <a href="/regionesGenerales">Áreas <br>Regionales Generales</a>
                                </li>
                                <br>
                                <li>
                                    <a href="/volumenes">Volumenes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                <p style="margin:0px 38px;color:#fff; font-size:20px">Elaborado por: Joshua Francisco Alvarez Archundia</p>
            </div>
        </footer>
        <script>
        </script>
    </body>
</html>
