<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
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
            h2{
                color:#fff;
                margin-left: 80px;
            }
            p{
                margin: 30px 80px;
                color:#fff;
                font-size: 30px;
                text-align: justify;
            }
            img.examples{
                width:20%;
                margin-left:40%
            }
            img.examples2{
                width:80%;
                margin-left:10%
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
                            <?php echo e(__('Límites y Continuidad en Funciones de Tres Variables')); ?>

                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist" >
                                <li class="nav-item"><a class="nav-link active listheader" data-bs-toggle="tab" href="#VID">Limites y Continuidad</a></li>
                                <li class="nav-item"><a class="nav-link  listheader" data-bs-toggle="tab" href="#DR">Aplicación a Funciones de 3 Variables</a></li>
                            </ul>
                            <div class="tab-content" style="width:100%">
                                <div id="VID" class="containe tab-pane active">
                                    <br>
                                    <ul class="nav nav-tabs" role="tablist" >
                                        <li class="nav-item"><a class="nav-link active listheader" data-bs-toggle="tab" href="#VIDD">Definición</a></li>
                                        <li class="nav-item"><a class="nav-link  listheader" data-bs-toggle="tab" href="#VIDE1">Ejemplos</a></li>
                                    </ul>
                                    <div class="tab-content" style="width:100%">
                                        <div id="VIDD" class="containe tab-pane active">
                                            <br>
                                            <h1>Definición</h1>
                                            <p>Existen dos principales temas que son importantes:<br><br>- Límites:<br><br>El concepto de límite es fundamental para entender el comportamiento de una función cuando la variable independiente se acerca a cierto valor. Formalmente, decimos que el límite de una función f(x) cuando x tiende a c que es una constante y también es el límite(L), denotado como <img src="/images/limite1.png">. <br><br>En términos más simples, esto significa que cuando x se acerca a c, el valor de f(x) se acerca a L. Sin embargo, es importante tener en cuenta que el valor de la función en c no necesita estar definido o ser igual a L para que el límite exista. <br><br>- Continuidad:<br><br>Una función se considera continua en un punto si el valor de la función en ese punto coincide con el límite de la función en ese punto y si los límites laterales de la función en ese punto existen y son finitos. Formalmente, una función f(x) es continua en c si:<br><br>• f(c) está definido<br><br>• <img src="/images/limite2.png">existe.<br><br>• <img src="/images/limite3.png"> <br><br>Esto significa que la función no tiene "saltos" o "huecos" en su gráfica en el punto c.</p><p>Relación entre límites y continuidad:<br><br>La continuidad de una función en un punto está estrechamente relacionada con el concepto de límite. Una función es continua en un punto si y solo si el límite de la función en ese punto existe y es igual al valor de la función en ese punto. En otras palabras, la continuidad de una función implica que su límite existe y es igual al valor de la función en ese punto.<br><br>Los límites y la continuidad son herramientas esenciales para analizar el comportamiento de las funciones y comprender cómo se comportan en diferentes puntos de su dominio. Estos conceptos son fundamentales en el cálculo diferencial e integral y tienen numerosas aplicaciones en matemáticas y ciencias aplicadas.</p>
                                        </div>
                                        <div id="VIDE1" class="containe tab-pane">
                                            <br>
                                            <h1>Ejemplos</h1>
                                            <h2>- Limites:</h2>
                                            <p>Considera la función <img src="/images/limE1.png">. Vamos a calcular el límite de esta función cuando x tiende a 3.<br><br>Para encontrar <img src="/images/limE2.png">, simplemente podemos sustituir x=3 en la función:<br><br><img src="/images/limE3.png"><br><br>Por lo tanto, el límite de f(x)=x2 cuando x tiende a 3 es 9.</p>
                                            <h2>- Continuidad:</h2>
                                            <p>Considera la función <img src="/images/limE5.png">. Esta función es continua en todos los puntos de su dominio, excepto en x=0, donde la función no está definida.<br><br>Para demostrar la continuidad de g(x) en todos los puntos x≠0, necesitamos verificar que el límite de g(x) cuando x tiende a cualquier punto c en su dominio coincide con el valor de g(x) en c. Por ejemplo, para cualquier c≠0, tenemos:<br><br><img src="/images/limE6.png"><br><br>Por lo tanto, la función <img src="/images/limE5.png"> es continua en todos los puntos x≠0. Sin embargo, no es continua en x=0 debido a la discontinuidad en ese punto.</p>
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
                                            <h1>Aplicado a tres variables:</h1>
                                            <p>- Limites: Para funciones de tres variables f(x,y,z), el límite de la función cuando (x,y,z) tiende a un punto (a,b,c) se define de manera similar a las funciones de una y dos variables. El limite se obtiene cuando se nos da una función f(x,y,z) y un punto (a,b,c), denotamos el límite de f(x,y,z) cuando (x,y,z) tiende a (a,b,c) como:<br><br><img src="/images/limE7.png"></p>
                                            <br>
                                            <p>- Continuidad: Una función f(x,y,z) se considera continua en un punto (a,b,c) si el valor de la función en ese punto coincide con el límite de la función cuando (x,y,z) tiende a (a,b,c), y si los límites de la función existen y son finitos en todas las direcciones.</p>
                                        </div>
                                        <div id="DRE1" class="containe tab-pane">
                                            <br>
                                            <h1>Ejemplo:</h1>
                                            <p>Para ver un ejemplo, vamos a considerar la siguiente función: <img src="/images/limE8.png"><br> Para que podamos verificar la continuidad de esta función en un punto (a,b,c), necesitaríamos:<br><br>• Verificar si f(a,b,c) está definido.<br><br>• Calcular los límites laterales de la función cuando (x,y,z) tiende a (a,b,c) desde diferentes direcciones, y verificar si coinciden con f(a,b,c).<br><br> Por lo cual, hay que asignar un valor a (a,b,c), que sera (1,2,3), haciendo esto podemos decir que el limite tiende hacia el punto (1,2,3). Para poder evaluar su continuidad hay que verificar que el limite existe, para lo cual debemos sustituir (x,y,z) por (a,b,c), dandonos lo siguiente: <img src="/images/limE9.png">, al verificar que si existe, podemos decir que la función es continua en el punto (1,2,3)</p>
                                        </div>
                                        <div id="DRE2" class="containe tab-pane fade">
                                            <br>
                                            <h1>Aplicado a tres variables:</h1>
                                            <p>Encontrar el valor del limite de los siguientes ejercicios y evaluar si la función es continua o no</p>
                                            <p>1. <img src="/images/limE10.png"></p>
                                            <p>2. <img src="/images/limE11.png"></p>
                                            <p>3. <img src="/images/limE12.png"></p>
                                            <p>4. <img src="/images/limE13.png"></p>
                                            <p>5. <img src="/images/limE14.png"></p>
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
<?php /**PATH C:\laragon\www\MPI1\resources\views/FuncionesVariables/LimitesContinuidad.blade.php ENDPATH**/ ?>