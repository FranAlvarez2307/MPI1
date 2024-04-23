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
                margin:30px 60px
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
                            {{ __('Funciones Escalares de Varias Variables') }}
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist" >
                                <li class="nav-item"><a class="nav-link active listheader" data-bs-toggle="tab" href="#VID">Variables Independientes y Dependientes</a></li>
                                <li class="nav-item"><a class="nav-link  listheader" data-bs-toggle="tab" href="#DR">Dominio y Rango</a></li>
                                <li class="nav-item"><a class="nav-link  listheader" data-bs-toggle="tab" href="#RF">Representación de la Función de 3 Variables</a></li>
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
                                            <h1>Conceptos Importantes:</h1>
                                            <p>- Variable: Es un número que consiste en una letra, a la cual, se le asigna un valor cualquiera. <br><br>- Variable independiente: Manipula o controla en un estudio. Esta variable es la que se supone que tiene un efecto sobre la variable dependiente, provocando así, que el valor resultante de la variable dependiente se pueda manipular dependiendo del valor de la variable independiente, comúnmente de representa con la variable X.<br><br>- Variable dependiente: Observa y se mide en respuesta a los cambios en la variable independiente. Es el valor que buscamos obtener cuando sometemos a una condición una o más variables independientes, comúnmente se representa con la variable Y</p>
                                        </div>
                                        <div id="VIDE1" class="containe tab-pane">
                                            <br>
                                            <h1>Ejemplo</h1>
                                            <p>Supongamos que estamos estudiando cómo la cantidad de horas de estudio (X) afecta el rendimiento académico (Y) de los estudiantes. Queremos saber si existe una relación lineal entre estas dos variables. <br><br>La fórmula de una línea recta es:</p><p style="text-align:center;">Y=mx+b</p><p>Donde:<br>- Y es la variable dependiente (rendimiento académico en este caso).<br>- X es la variable independiente (cantidad de horas de estudio).<br>- m es la pendiente de la línea, que representa el cambio en Y por cada unidad de cambio en X.<br>- b es la ordenada al origen, que es el valor de Y cuando X es cero.<br><br>Supongamos que, en nuestro estudio, encontramos que la relación entre la cantidad de horas de estudio y el rendimiento académico se puede modelar con la siguiente ecuación:</p><p style="text-align:center">Rendimiento académico = 0.5 × Horas de estudio + 60</p><p>En esta ecuación:<br>- La pendiente (m) es 0.5, lo que significa que, por cada hora adicional de estudio, se espera un aumento de 0.5 puntos en el rendimiento académico. Al darnos este valor, esta es una constante.<br>- La ordenada al origen (b) es 60, lo que indica que si un estudiante no estudia en absoluto (0 horas de estudio), se espera que tenga un rendimiento académico de 60 puntos. Al darnos este valor, esta es una constante.<br>- Esta fórmula nos permite predecir el rendimiento académico de un estudiante en función de la cantidad de horas de estudio que realice. Por lo cual, la cantidad de horas de estudio es la variable independiente, ya que no depende de nada. Mientras que el rendimiento academico es la variable dependiente ya que depende de las horas de estudio.</p>
                                        </div>
                                        <div id="VIDE2" class="containe tab-pane">
                                            <br>
                                            <h1>Ejercicios</h1>
                                            <p>1. Un investigador quiere estudiar cómo la cantidad de horas de sueño afecta el estado de alerta de las personas. ¿Cuál es la variable independiente y cuál es la variable dependiente?<br><br>2. Se realiza un estudio para investigar cómo el consumo de café afecta la frecuencia cardíaca de los participantes. ¿Cuál es la variable independiente y cuál es la variable dependiente?<br><br>3. Un profesor quiere determinar si existe una relación entre la cantidad de horas de estudio de los estudiantes y sus calificaciones finales en un examen. ¿Cuál es la variable independiente y cuál es la variable dependiente?<br><br>4. Un investigador está interesado en saber cómo el tiempo de exposición al sol afecta los niveles de vitamina D en el cuerpo humano. ¿Cuál es la variable independiente y cuál es la variable dependiente?<br><br>5. Un equipo de investigadores está llevando a cabo un estudio para investigar si la cantidad de ejercicio realizado por las personas afecta su peso corporal. ¿Cuál es la variable independiente y cuál es la variable dependiente?</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="DR" class="containe tab-pane">
                                    <br>
                                    <ul class="nav nav-tabs" role="tablist" >
                                        <li class="nav-item"><a class="nav-link active listheader" data-bs-toggle="tab" href="#DRD">Definición</a></li>
                                        <li class="nav-item"><a class="nav-link  listheader" data-bs-toggle="tab" href="#DRE1">Ejemplos</a></li>
                                    </ul>
                                    <div class="tab-content" style="width:100%">
                                        <div id="DRD" class="containe tab-pane active">
                                            <br>
                                            <h1>Conceptos Importantes:</h1>
                                            <p>- Dominio: El dominio de una función es el conjunto de todos los valores de entrada (normalmente los valores de x) para los cuales la función está definida. En otras palabras, es el conjunto de valores que puede tomar la variable independiente en una función sin causar problemas en la expresión de la función. <br><br>- Rango: El rango de una función es el conjunto de todos los valores de salida (o valores de y) que la función puede producir. Es el conjunto de valores que la variable dependiente puede tomar como resultado de los valores de la variable independiente en la función. </p>
                                        </div>
                                        <div id="DRE1" class="containe tab-pane">
                                            <br>
                                            <h1>Ejemplos</h1>
                                            <p>Existen multiples tipos de funciones donde el dominio no tiene limite y unicamente el rango esta influido por la formula y el dominio.</p>
                                            <img src="/images/lineal.png" class="examples">
                                            <img src="/images/cuadratica.png" class="examples">
                                            <img src="/images/exponencial.png" class="examples">
                                            <img src="/images/logaritmica.png" class="examples">
                                            <p>Sin embargo, existen ciertos casos donde el dominio se ve limitado por la función como en los siguientes ejemplos:</p>
                                            <img src="/images/racional.png" class="examples">
                                            <img src="/images/irracional.png" class="examples">
                                        </div>
                                    </div>
                                </div>
                                <div id="RF" class="containe tab-pane">
                                    <br>
                                    <ul class="nav nav-tabs" role="tablist" >
                                        <li class="nav-item"><a class="nav-link active listheader" data-bs-toggle="tab" href="#RFD">Definición</a></li>
                                        <li class="nav-item"><a class="nav-link  listheader" data-bs-toggle="tab" href="#RFE1">Ejemplos</a></li>
                                    </ul>
                                    <div class="tab-content" style="width:100%">
                                        <div id="RFD" class="containe tab-pane active">
                                            <br>
                                            <h1>Definición</h1>
                                            <p>Una función de tres variables toma tres variables independientes y produce un único valor dependiente. Se representa como f(x,y,z), donde x, y y z son las variables independientes, y f(x,y,z) es la función que las relaciona o la variable dependiente. Esta variable se puede representar de 3 maneras:<br><br>•	Forma Verbal: La forma verbal de representar una función de tres variables implica describir la relación entre las variables utilizando palabras. <br><br>•	Forma Algebraica: La forma algebraica de representar una función de tres variables implica escribir una expresión matemática que describe la relación entre las variables.<br><br>•	Tabla de valores: Una tabla de valores es una forma de representar una función de tres variables mostrando los valores de la función para diferentes combinaciones de las variables independientes.</p>
                                        </div>
                                        <div id="RFE1" class="containe tab-pane">
                                            <br>
                                            <h1>Ejemplo</h1>
                                            <p>Un ejemplo de una función de tres variables seria la siguiente: <br><br>•	Forma Verbal: La función f es igual a dos veces el valor de x, más dos veces el valor de y, más dos veces el valor de z."<br><br>•  Forma Algebraica: La anterior formula se representa de la siguiente manera: f(x,y,z)= 2x + 2y + 2z <br><br>•	Tabla de Valores: Al asignar los valores a la respectiva variable independiente de las primeras 3 columnas, obtenemos en la cuarta columna el resultado de la formula o de la variable dependiente como se puede observar en el siguiente ejemplo:</p>
                                            <img src="/images/tabla.png" style="margin-left: 35%">
                                            <p>Aunque este ejemplo de tabla de valores es pequeña, la extensión de una tabla de valores se puede extender hasta donde abarca el dominio de las diferentes variables independientes</p>
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
