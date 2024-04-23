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
                margin:30px 30%;
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
                            {{ __('Volúmenes') }}
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist" >
                                <li class="nav-item"><a class="nav-link active listheader" data-bs-toggle="tab" href="#VID">Uso de la Integral Triple</a></li>
                            </ul>
                            <div class="tab-content" style="width:100%">
                                <div id="VID" class="containe tab-pane active">
                                    <br>
                                    <ul class="nav nav-tabs" role="tablist" >
                                        <li class="nav-item"><a class="nav-link active listheader" data-bs-toggle="tab" href="#VIDD">Definición</a></li>
                                        <li class="nav-item"><a class="nav-link listheader" data-bs-toggle="tab" href="#VIDD1">Ejemplos</a></li>
                                        <li class="nav-item"><a class="nav-link listheader" data-bs-toggle="tab" href="#VIDD2">Ejercicios</a></li>
                                    </ul>
                                    <div class="tab-content" style="width:100%">
                                        <div id="VIDD" class="containe tab-pane active">
                                            <br>
                                            <h1>Definición</h1>
                                            <p>La utilización de integrales triples se da principalmente para calcular volúmenes, es especialmente útil en situaciones donde se tienen sólidos con formas complicadas o donde la geometría no es fácilmente representable mediante fórmulas simples. Algunos casos comunes en los que se puede aplicar esta tecnica son los siguientes:</p><p>- Sólidos con formas irregulares: Cuando el objeto no tiene una forma geométrica estándar como cubos, cilindros o esferas, sino que es una combinación compleja de curvas o superficies, las integrales triples pueden ser útiles para encontrar su volumen.</p><p>- Regiones en el espacio definidas por ecuaciones: Si tienes una región en el espacio que está definida por ecuaciones (como en el ejemplo anterior del paraboloide), las integrales triples pueden ayudarte a encontrar el volumen de esa región.</p><p>- Aplicaciones en física e ingeniería: En problemas de física o ingeniería donde necesitas calcular el volumen de objetos tridimensionales como sólidos de revolución, regiones de densidad variable, o volúmenes de fluidos, las integrales triples son una herramienta esencial.</p><p>- Probabilidad y estadística: En algunos casos en estadística y probabilidad, especialmente en problemas que involucran distribuciones de probabilidad conjuntas para variables aleatorias continuas en tres dimensiones, las integrales triples pueden ser útiles para calcular probabilidades o encontrar momentos.</p>
                                        </div>
                                        <div id="VIDD1" class="containe tab-pane">
                                            <br>
                                            <h1>Ejemplo</h1>
                                            <p>Basicamente el proceso de resolución es el mismo que cuando resolvemos integrales multiples ya que el resultado es un volumen. Lo podemos observar en el siguiente ejemplo, supongamos que queremos encontrar el volumen de un objeto delimitado por los planos x=0, y=0, z=0, x=1, y=2, y z=3, y la función de densidad es f(x,y,z)=xyz. Entonces, el volumen V del objeto se puede calcular mediante la integral triple:</p><img src="/images/v1.png" class="examples"><p>A continuación se muestra como se resuelve por partes la integral hasta obtener el valor del volumen</p><img src="/images/v2.png" class="examples"><p>Con lo que podemos observar que al final el Volumen es 9.</p>
                                        </div>
                                        <div id="VIDD2" class="containe tab-pane">
                                            <br>
                                            <h1>Ejercicio</h1>
                                            <p>Resuelve el siguiente ejercicio y obten el volumen del cubo:</p><img src="/images/v3.png" style="width:80%; margin-left:10%">
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
