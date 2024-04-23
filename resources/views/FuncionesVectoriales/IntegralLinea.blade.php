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
                width:40%;
                margin:30px 35%;
            }
            img.exercises{
                width:50%;
                margin:30px 15%;
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
                            {{ __('Integral de Línea') }}
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist" >
                                <li class="nav-item"><a class="nav-link active listheader" data-bs-toggle="tab" href="#VID">Integral de Línea</a></li>
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
                                            <h1>Definición</h1>
                                            <p>La integral de línea es un concepto importante en el cálculo vectorial que generaliza el concepto de integral definida de una función escalar a lo largo de una curva en el espacio tridimensional. Mientras que la integral definida en una dimensión se realiza a lo largo de un intervalo en el eje x, la integral de línea se realiza a lo largo de una curva en el espacio tridimensional.</p><p>Formalmente, si tenemos una función vectorial F(x,y,z)=⟨P(x,y,z),Q(x,y,z),R(x,y,z)⟩ y una curva C definida por un vector de posición r(t)=⟨x(t),y(t),z(t)⟩, donde a≤t≤b, entonces la integral de línea de F a lo largo de C se denota como:</p><img src="/images/il1.png" class="examples">
                                        </div>
                                        <div id="VIDE1" class="containe tab-pane">
                                            <br>
                                            <h1>Ejemplo</h1>
                                            <p>Debido a la complejidad de este tema, ChatGPT nos dara una explicación paso por paso:</p><img src="/images/il2.png" class="examples"><img src="/images/il3.png" class="examples"><p>Posteriormente de realizar la integración mostrada por ChatGPT, este nos da el resultado el cual, es el mismo que la integral de linea que seria: <img src="/images/il4.png"></p>
                                        </div>
                                        <div id="VIDE2" class="containe tab-pane fade">
                                            <br>
                                            <h1>Ejercicios</h1>
                                            <p>Realiza los ejercicios que se muestran a continuación:</p><p>Ejercicio 1:</p><img src="/images/il5.png" class="exercises"><p>Ejercicio 2:</p><img src="/images/il6.png" class="exercises">
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
