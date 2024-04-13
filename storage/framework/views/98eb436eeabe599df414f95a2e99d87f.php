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
            .card{
                width: 98%;
                border-style: solid;
                border-width: 4px 4px 4px 4px;
                border-color: #10335f;
                border-radius: 10px;
                margin: 0px 20px 10px 20px;
            }
            .card-header{
                background-color: #10335f; 
                font-family: Montserrat;
                font-size: 24px; 
                color: #fff; 
                text-align: center;
            }
            .card-body{
                font-family: Montserrat;
                font-size: 16px; 
                padding: 10px 10px;  
            }
            .bodyMobile{
                display: block;
                height: 0;
                overflow: hidden;
                transition: 0s;
                padding-top: 60px;
                background-color: #10335f; 
            }
        </style>
    </head>
    <body class="antialiased" style="background-color:#78ABEA">
    <nav class="navbar navbar-expand-md shadow-sm" style="background-color:#10335f; width:100%">
                <div class="contain" style="width:100%">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->

                        <ul class="navbar-nav me-auto">
                            <img src='/images/upq.png' class="nav-item" style="margin-left:30px; width:17%; padding-right:30px; border-right: solid; border-color: #fff" alt="Logo">
                            <h5 style="margin-left:30px; margin-top: 35px; color:#fff">FISICA PARA INGENIERIA</h5>
                        </ul>
                        
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <button id="navbarDropdown" class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="border-color: #fff; font-weight: 800; color: #fff; background-color: #10335f; margin: 10px 50px 10px 10px;" onMouseOver="this.style.cssText='border-color: #fff;font-weight: 800; color: #10335f; background-color: #fff; margin: 10px 50px 10px 10px;'" onMouseOut="this.style.cssText='border-color: #fff; font-weight: 800; color: #fff; background-color: #10335f; margin: 10px 50px 10px 10px;'">
                                    ☰
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" style="background-color: #10335f;" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" style="text-transform: uppercase; font-family: Montserrat; font-weight: 500; color: #fff; background-color: #10335f;" onMouseOver="this.style.cssText='text-transform: uppercase; font-family: Montserrat; font-weight: 500; color: #10335f; background-color: #fff;'" onMouseOut="this.style.cssText='text-transform: uppercase; font-family: Montserrat; font-weight: 500; color: #fff; background-color: #10335f;'" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                                        <?php echo e(__('ACUSTICA')); ?>

                                        </a>
                                        <a class="dropdown-item" style="text-transform: uppercase; font-family: Montserrat; font-weight: 500; color: #fff; background-color: #10335f;" onMouseOver="this.style.cssText='text-transform: uppercase; font-family: Montserrat; font-weight: 500; color: #10335f; background-color: #fff;'" onMouseOut="this.style.cssText='text-transform: uppercase; font-family: Montserrat; font-weight: 500; color: #fff; background-color: #10335f;'" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                                        <?php echo e(__('OPTICA')); ?>

                                        </a>
                                        <a class="dropdown-item" style="text-transform: uppercase; font-family: Montserrat; font-weight: 500; color: #fff; background-color: #10335f;" onMouseOver="this.style.cssText='text-transform: uppercase; font-family: Montserrat; font-weight: 500; color: #10335f; background-color: #fff;'" onMouseOut="this.style.cssText='text-transform: uppercase; font-family: Montserrat; font-weight: 500; color: #fff; background-color: #10335f;'" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                                        <?php echo e(__('FISICA MODERNA')); ?>

                                        </a>
                                    </div>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <img src='/images/acustica.png' style="width:100%">
        <h2 style="margin:auto; text-align:center; width:100%; background-color:#10335f; padding: 5px; color:#fff">DEFINICION</h2>
        <p style="margin:30px 38px; text-align:justify">Es una rama de la física interdisciplinaria que estudia el sonido, infrasonido y ultrasonido, es decir ondas mecánicas que se propagan a través de la materia, tanto sólida como líquida o gaseosa (no pueden propagarse en el vacío) por medio de modelos físicos y matemáticos. A efectos prácticos, la acústica estudia la producción, transmisión, almacenamiento, percepción o reproducción del sonido. La ingeniería acústica es la rama de la ingeniería que trata de las aplicaciones tecnológicas de la acústica.</p>
        <h2 style="margin:auto; text-align:center; width:100%; background-color:#10335f; padding: 5px; color:#fff;">CALCULADORAS</h2>
        <br>
        <div style='display:flex; width:100%; margin-left:18px'>
            <div style="width:31.8%">
                <div class="card" style="width:97%">
                    <div class="card-header">
                        <?php echo e(('AMPLITUD (A)')); ?>

                        <div style="float:left">
                            <button type="button" class="btn btn-dark" id="openAmplitudBody" onclick="openAmplitudBody()"><img src='/images/abajo.png' height="10px"></button>
                            <button type="button" class="btn btn-dark" id="closeAmplitudBody" onclick="closeAmplitudBody()" hidden><img src='/images/arriba.png' height="10px"></button>
                        </div>
                    </div>
                    <div class="card-body bodyMobile" id="amplitudBody" style="padding:8px; width:100%;">
                        <form id="amplitudForm">
                            <label for="recipient-name" class="col-form-label">Velocidad:</label>
                            <input class="form-control" type="number" step=".0001" id="amplitud1"required>
                            <label for="recipient-name" class="col-form-label">Frecuencia:</label>
                            <input class="form-control" type="number" step=".0001" id="amplitud2" required>
                            <br>
                            <button class="btn btn-success" style="float:right">CALCULAR</button>
                        </form>
                        <br>
                        <label for="recipient-name" class="col-form-label" id="amplitudResultado">Resultado:</label>
                        <input class="form-control" type="number" step=".0001" id="amplitudR" disabled>
                    </div>
                </div>
            </div>
            <div style="width:31.8%">
                <div class="card" style="width:97%">
                    <div class="card-header">
                        <?php echo e(('LONGITUD DE ONDA (λ)')); ?>

                        <div style="float:left">
                            <button type="button" class="btn btn-dark" id="openLOBody" onclick="openLOBody()"><img src='/images/abajo.png' height="10px"></button>
                            <button type="button" class="btn btn-dark" id="closeLOBody" onclick="closeLOBody()" hidden><img src='/images/arriba.png' height="10px"></button>
                        </div>
                    </div>
                    <div class="card-body bodyMobile" id="LOBody" style="padding:8px; width:100%;">
                        <form id="LOForm">
                            <label for="recipient-name" class="col-form-label">Velocidad (v):</label>
                            <input class="form-control" type="number" step=".0001" id="LO1" required>
                            <label for="recipient-name" class="col-form-label">Frecuencia (ƒ):</label>
                            <input class="form-control" type="number" step=".0001" id="LO2" required>
                            <br>
                            <button class="btn btn-success" type="submit" style="float:right">CALCULAR</button>
                        </form>
                        <br>
                        <label for="recipient-name" class="col-form-label" id="LOResultado">Resultado:</label>
                        <input class="form-control" type="number" step=".0001" id="LOR" disabled>
                    </div>
                </div>
            </div>
            <div style="width:31.8%">
                <div class="card" style="width:97%">
                    <div class="card-header">
                        <?php echo e(('FRECUENCIA (ƒ)')); ?>

                        <div style="float:left">
                            <button type="button" class="btn btn-dark" id="openFrecuenciaBody" onclick="openFrecuenciaBody()"><img src='/images/abajo.png' height="10px"></button>
                            <button type="button" class="btn btn-dark" id="closeFrecuenciaBody" onclick="closeFrecuenciaBody()" hidden><img src='/images/arriba.png' height="10px"></button>
                        </div>
                    </div>
                    <div class="card-body bodyMobile" id="frecuenciaBody" style="padding:8px; width:100%;">
                        <form id="frecuenciaForm">
                            <label for="recipient-name" class="col-form-label">Velocidad (v):</label>
                            <input class="form-control" type="number" step=".0001" id="frecuencia1" required>
                            <label for="recipient-name" class="col-form-label">Longitud de onda (λ):</label>
                            <input class="form-control" type="number" step=".0001" id="frecuencia2" required>
                            <br>
                            <button class="btn btn-success" type="submit" style="float:right">CALCULAR</button>
                        </form>
                        <br>
                        <label for="recipient-name" class="col-form-label" id="frecuenciaR">Resultado:</label>
                        <input class="form-control" type="number" step=".0001" id="frecuenciaR" disabled>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div style='display:flex; margin-left:18px'>
            <div style="width:32.2%">
                <div class="card" style="width:97%">
                    <div class="card-header">
                        <?php echo e(('VELOCIDAD DE ONDA (v)')); ?>

                        <div style="float:left">
                            <button type="button" class="btn btn-dark" id="openVOBody" onclick="openVOBody()"><img src='/images/abajo.png' height="10px"></button>
                            <button type="button" class="btn btn-dark" id="closeVOBody" onclick="closeVOBody()" hidden><img src='/images/arriba.png' height="10px"></button>
                        </div>
                    </div>
                    <div class="card-body bodyMobile" id="VOBody" style="padding:8px; width:100%;">
                        <form id="velocidadForm">
                            <label for="recipient-name" class="col-form-label">Longitud de onda (λ):</label>
                            <input class="form-control" type="number" step=".0001" id="velocidad1" required>
                            <label for="recipient-name" class="col-form-label">Frecuencia (ƒ):</label>
                            <input class="form-control" type="number" step=".0001" id="velocidad2" required>
                            <br>
                            <button class="btn btn-success" type="submit" style="float:right">CALCULAR</button>
                        </form>
                        <br>
                        <label for="recipient-name" class="col-form-label">Resultado:</label>
                        <input class="form-control" type="number" step=".0001" id="velocidadR" disabled>
                        <br>
                        <p>---------------------------------------------------------------------------------------</p>
                        <br>
                        <form id="velocidadMForm">
                            <label for="recipient-name" class="col-form-label">Elasticidad (E):</label>
                            <input class="form-control" type="number" step=".0001" id="velocidadM1" required>
                            <label for="recipient-name" class="col-form-label">Densidad (p):</label>
                            <input class="form-control" type="number" step=".0001" id="velocidadM2" required>
                            <br>
                            <button class="btn btn-success" type="submit" style="float:right">CALCULAR</button>
                        </form>
                        <br>
                        <label for="recipient-name" class="col-form-label">Resultado:</label>
                        <input class="form-control" type="number" step=".0001" id="velocidadMR" disabled>
                        <br>
                        <p>---------------------------------------------------------------------------------------</p>
                        <form id="velocidadAForm">
                            <label for="recipient-name" class="col-form-label">Distancia (d):</label>
                            <input class="form-control" type="number" step=".0001" id="velocidadA1" required>
                            <label for="recipient-name" class="col-form-label">Tiempo (t):</label>
                            <input class="form-control" type="number" step=".0001" id="velocidadA2" required>
                            <br>
                            <button class="btn btn-success" type="submit" style="float:right">CALCULAR</button>
                        </form>
                        <br>
                        <label for="recipient-name" class="col-form-label">Resultado:</label>
                        <input class="form-control" type="number" step=".0001" id="velocidadAR" disabled>
                    </div>
                </div>
            </div>
            <div style="width:32.2%">
                <div class="card" style="width:97%">
                    <div class="card-header">
                        <?php echo e(('PERIODO (T)')); ?>

                        <div style="float:left">
                            <button type="button" class="btn btn-dark" id="openPeriodoBody" onclick="openPeriodoBody()"><img src='/images/abajo.png' height="10px"></button>
                            <button type="button" class="btn btn-dark" id="closePeriodoBody" onclick="closePeriodoBody()" hidden><img src='/images/arriba.png' height="10px"></button>
                        </div>
                    </div>
                    <div class="card-body bodyMobile" id="periodoBody" style="padding:8px; width:100%;">
                        <form id="periodoForm">
                            <label for="recipient-name" class="col-form-label">Frecuencia (ƒ):</label>
                            <input class="form-control" type="number" step=".0001" id="periodo1" required>
                            <br>
                            <button class="btn btn-success" type="submit" style="float:right">CALCULAR</button>
                        </form>
                        <br>
                        <label for="recipient-name" class="col-form-label">Resultado:</label>
                        <input class="form-control" type="number" step=".00001" id="periodoR" disabled>
                        <p>---------------------------------------------------------------------------------------</p>
                        <form id="periodoDVForm">
                            <label for="recipient-name" class="col-form-label">Distancia (d):</label>
                            <input class="form-control" type="number" step=".0001" id="periodoDV1" required>
                            <label for="recipient-name" class="col-form-label">Velocidad (v):</label>
                            <input class="form-control" type="number" step=".0001" id="periodoDV2" required>
                            <br>
                            <button class="btn btn-success" type="submit" style="float:right">CALCULAR</button>
                        </form>
                        <br>
                        <label for="recipient-name" class="col-form-label">Resultado:</label>
                        <input class="form-control" type="number" step=".0001" id="periodoDVR" disabled>
                    </div>
                </div>
            </div>
            <div style="width:32.2%">
                <div class="card" style="width:97%">
                    <div class="card-header">
                        <?php echo e(('INTENSIDAD DE LA ONDA (I)')); ?>

                        <div style="float:left">
                            <button type="button" class="btn btn-dark" id="openIOBody" onclick="openIOBody()"><img src='/images/abajo.png' height="10px"></button>
                            <button type="button" class="btn btn-dark" id="closeIOBody" onclick="closeIOBody()" hidden><img src='/images/arriba.png' height="10px"></button>
                        </div>
                    </div>
                    <div class="card-body bodyMobile" id="IOBody" style="padding:8px; width:100%;">
                        <form id="IOForm">
                            <label for="recipient-name" class="col-form-label">Densidad (p):</label>
                            <input class="form-control" type="number" step=".0001" id="IO1" required>
                            <label for="recipient-name" class="col-form-label">Amplitud (A):</label>
                            <input class="form-control" type="number" step=".0001" id="IO2" required>
                            <label for="recipient-name" class="col-form-label">Frecuencia Angular (w):</label>
                            <input class="form-control" type="number" step=".0001" id="IO3" required>
                            <label for="recipient-name" class="col-form-label">Numero de Onda (k):</label>
                            <input class="form-control" type="number" step=".0001" id="IO4" required>
                            <br>
                            <button class="btn btn-success" type="submit" style="float:right">CALCULAR</button>
                        </form>
                        <br>
                        <label for="recipient-name" class="col-form-label">Resultado:</label>
                        <input class="form-control" type="number" step=".00001" id="IOR" disabled>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div style='display:flex;'>
            <div style="width:31.8%; margin-left:18px">
                <div class="card" style="width:97%">
                    <div class="card-header">
                        <?php echo e(('NUMERO DE ONDA (k)')); ?>

                        <div style="float:left">
                            <button type="button" class="btn btn-dark" id="openFaseBody" onclick="openFaseBody()"><img src='/images/abajo.png' height="10px"></button>
                            <button type="button" class="btn btn-dark" id="closeFaseBody" onclick="closeFaseBody()" hidden><img src='/images/arriba.png' height="10px"></button>
                        </div>
                    </div>
                    <div class="card-body bodyMobile" id="faseBody" style="padding:8px; width:100%;">
                        <form id="NOForm">
                            <label for="recipient-name" class="col-form-label">Longitud de onda (λ):</label>
                            <input class="form-control" type="number" step=".0001" id="NO1" required>
                            <br>
                            <button class="btn btn-success" type="submit" style="float:right">CALCULAR</button>
                        </form>
                        <br>
                        <label for="recipient-name" class="col-form-label">Resultado:</label>
                        <input class="form-control" type="number" step=".0001" id="NOR" disabled>
                    </div>
                </div>
            </div>
            <div style="width:31.8%">
                <div class="card" style="width:97%">
                    <div class="card-header">
                        <?php echo e(('VELOCIDAD ANGULAR (ω)')); ?>

                        <div style="float:left">
                            <button type="button" class="btn btn-dark" id="openVABody" onclick="openVABody()"><img src='/images/abajo.png' height="10px"></button>
                            <button type="button" class="btn btn-dark" id="closeVABody" onclick="closeVABody()" hidden><img src='/images/arriba.png' height="10px"></button>
                        </div>
                    </div>
                    <div class="card-body bodyMobile" id="VABody" style="padding:8px; width:100%;">
                        <form id="VAForm">
                            <label for="recipient-name" class="col-form-label">Frecuencia (ƒ):</label>
                            <input class="form-control" type="number" step=".0001" id="VA1" required>
                            <br>
                            <button class="btn btn-success" type="submit" style="float:right">CALCULAR</button>
                        </form>
                        <br>
                        <label for="recipient-name" class="col-form-label">Resultado:</label>
                        <input class="form-control" type="number" step=".0001" id="VAR" disabled>
                    </div>
                </div>
            </div>
            <div style="width:31.8%">
                <div class="card" style="width:97%">
                    <div class="card-header">
                        <?php echo e(('FRECUENCIA ANGULAR (ω)')); ?>

                        <div style="float:left">
                            <button type="button" class="btn btn-dark" id="openFABody" onclick="openFABody()"><img src='/images/abajo.png' height="10px"></button>
                            <button type="button" class="btn btn-dark" id="closeFABody" onclick="closeFABody()" hidden><img src='/images/arriba.png' height="10px"></button>
                        </div>
                    </div>
                    <div class="card-body bodyMobile" id="FABody" style="padding:8px; width:100%;">
                        <form id="FAForm">
                        <label for="recipient-name" class="col-form-label">Oscilaciones (n):</label>
                            <input class="form-control" type="number" step=".0001" id="FA1" required>
                            <label for="recipient-name" class="col-form-label">Tiempo (t):</label>
                            <input class="form-control" type="number" step=".0001" id="FA2" required>
                            <br>
                            <button class="btn btn-success" type="submit" style="float:right">CALCULAR</button>
                        </form>
                        <br>
                        <label for="recipient-name" class="col-form-label">Resultado:</label>
                        <input class="form-control" type="number" step=".0001" id="VAR" disabled>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function openAmplitudBody() {
                document.getElementById("openAmplitudBody").setAttribute("hidden",true);
                document.getElementById("closeAmplitudBody").removeAttribute("hidden");
                document.getElementById("amplitudBody").style.height = "100%";
                document.getElementById("amplitudBody").style.backgroundColor = "#fff";
            }

            function closeAmplitudBody() {
                document.getElementById("closeAmplitudBody").setAttribute("hidden",true);
                document.getElementById("openAmplitudBody").removeAttribute("hidden");
                document.getElementById("amplitudBody").style.height = "0";
                document.getElementById("amplitudBody").style.backgroundColor = "#10335f";
            }

            function openLOBody() {
                document.getElementById("openLOBody").setAttribute("hidden",true);
                document.getElementById("closeLOBody").removeAttribute("hidden");
                document.getElementById("LOBody").style.height = "100%";
                document.getElementById("LOBody").style.backgroundColor = "#fff";
            }

            function closeLOBody() {
                document.getElementById("closeLOBody").setAttribute("hidden",true);
                document.getElementById("openLOBody").removeAttribute("hidden");
                document.getElementById("LOBody").style.height = "0";
                document.getElementById("LOBody").style.backgroundColor = "#10335f";
            }   

            function openFrecuenciaBody() {
                document.getElementById("openFrecuenciaBody").setAttribute("hidden",true);
                document.getElementById("closeFrecuenciaBody").removeAttribute("hidden");
                document.getElementById("frecuenciaBody").style.height = "100%";
                document.getElementById("frecuenciaBody").style.backgroundColor = "#fff";
            }

            function closeFrecuenciaBody() {
                document.getElementById("closeFrecuenciaBody").setAttribute("hidden",true);
                document.getElementById("openFrecuenciaBody").removeAttribute("hidden");
                document.getElementById("frecuenciaBody").style.height = "0";
                document.getElementById("frecuenciaBody").style.backgroundColor = "#10335f";
            }   

            function openVOBody() {
                document.getElementById("openVOBody").setAttribute("hidden",true);
                document.getElementById("closeVOBody").removeAttribute("hidden");
                document.getElementById("VOBody").style.height = "100%";
                document.getElementById("VOBody").style.backgroundColor = "#fff";
            }

            function closeVOBody() {
                document.getElementById("closeVOBody").setAttribute("hidden",true);
                document.getElementById("openVOBody").removeAttribute("hidden");
                document.getElementById("VOBody").style.height = "0";
                document.getElementById("VOBody").style.backgroundColor = "#10335f";
            }

            function openIOBody() {
                document.getElementById("openIOBody").setAttribute("hidden",true);
                document.getElementById("closeIOBody").removeAttribute("hidden");
                document.getElementById("IOBody").style.height = "100%";
                document.getElementById("IOBody").style.backgroundColor = "#fff";
            }

            function closeIOBody() {
                document.getElementById("closeIOBody").setAttribute("hidden",true);
                document.getElementById("openIOBody").removeAttribute("hidden");
                document.getElementById("IOBody").style.height = "0";
                document.getElementById("IOBody").style.backgroundColor = "#10335f";
            }

            function openPeriodoBody() {
                document.getElementById("openPeriodoBody").setAttribute("hidden",true);
                document.getElementById("closePeriodoBody").removeAttribute("hidden");
                document.getElementById("periodoBody").style.height = "100%";
                document.getElementById("periodoBody").style.backgroundColor = "#fff";
            }

            function closePeriodoBody() {
                document.getElementById("closePeriodoBody").setAttribute("hidden",true);
                document.getElementById("openPeriodoBody").removeAttribute("hidden");
                document.getElementById("periodoBody").style.height = "0";
                document.getElementById("periodoBody").style.backgroundColor = "#10335f";
            }

            function openFaseBody() {
                document.getElementById("openFaseBody").setAttribute("hidden",true);
                document.getElementById("closeFaseBody").removeAttribute("hidden");
                document.getElementById("faseBody").style.height = "100%";
                document.getElementById("faseBody").style.backgroundColor = "#fff";
            }

            function closeFaseBody() {
                document.getElementById("closeFaseBody").setAttribute("hidden",true);
                document.getElementById("openFaseBody").removeAttribute("hidden");
                document.getElementById("faseBody").style.height = "0";
                document.getElementById("faseBody").style.backgroundColor = "#10335f";
            }

            function openFABody() {
                document.getElementById("openFABody").setAttribute("hidden",true);
                document.getElementById("closeFABody").removeAttribute("hidden");
                document.getElementById("FABody").style.height = "100%";
                document.getElementById("FABody").style.backgroundColor = "#fff";
            }

            function closeFABody() {
                document.getElementById("closeFABody").setAttribute("hidden",true);
                document.getElementById("openFABody").removeAttribute("hidden");
                document.getElementById("FABody").style.height = "0";
                document.getElementById("FABody").style.backgroundColor = "#10335f";
            }

            function openVABody() {
                document.getElementById("openVABody").setAttribute("hidden",true);
                document.getElementById("closeVABody").removeAttribute("hidden");
                document.getElementById("VABody").style.height = "100%";
                document.getElementById("VABody").style.backgroundColor = "#fff";
            }

            function closeVABody() {
                document.getElementById("closeVABody").setAttribute("hidden",true);
                document.getElementById("openVABody").removeAttribute("hidden");
                document.getElementById("VABody").style.height = "0";
                document.getElementById("VABody").style.backgroundColor = "#10335f";
            }

            $("#amplitudForm").submit(function(e){
                e.preventDefault()
                var  amplitud1 = $("input#amplitud1").val();
                var a1 = parseFloat(amplitud1);
                var  amplitud2 = $("input#amplitud2").val();
                var a2 = parseFloat(amplitud2);        
                $("input#amplitudR").val(a1 + a2);
            });

            $("#LOForm").submit(function(e){
                e.preventDefault()
                var  LO1 = $("input#LO1").val();
                var lo1 = parseFloat(LO1);
                var  LO2 = $("input#LO2").val();
                var lo2 = parseFloat(LO2);        
                $("input#LOR").val(lo1/lo2);
            });

            $("#frecuenciaForm").submit(function(e){
                e.preventDefault()
                var  frecuencia1 = $("input#frecuencia1").val();
                var f1 = parseFloat(frecuencia1);
                var  frecuencia2 = $("input#frecuencia2").val();
                var f2 = parseFloat(frecuencia2);        
                $("input#frecuenciaR").val(f1/f2);
            });

            $("#velocidadForm").submit(function(e){
                e.preventDefault()
                var  velocidad1 = $("input#velocidad1").val();
                var v1 = parseFloat(velocidad1);
                var  velocidad2 = $("input#velocidad2").val();
                var v2 = parseFloat(velocidad2);        
                $("input#velocidadR").val(v1*v2);
            });

            $("#velocidadMForm").submit(function(e){
                e.preventDefault()
                var  velocidadM1 = $("input#velocidadM1").val();
                var vm1 = parseFloat(velocidadM1);
                var  velocidadM2 = $("input#velocidadM2").val();
                var vm2 = parseFloat(velocidadM2);   
                var total = Math.sqrt(vm1/vm2); 
                $("input#velocidadMR").val(total);
            });

            $("#velocidadAForm").submit(function(e){
                e.preventDefault()
                var  velocidadA1 = $("input#velocidadA1").val();
                var va1 = parseFloat(velocidadA1);
                var  velocidadA2 = $("input#velocidadA2").val();
                var va2 = parseFloat(velocidadA2);   
                $("input#velocidadAR").val(va1/va2);
            });

            $("#periodoForm").submit(function(e){
                e.preventDefault()
                var  periodo1 = $("input#periodo1").val();
                var p1 = parseFloat(periodo1);   
                $("input#periodoR").val(1/p1);
            });

            $("#NOForm").submit(function(e){
                e.preventDefault()
                var  NO1 = $("input#NO1").val();
                var no1 = parseFloat(NO1);   
                var no2 = Math.PI * 2;
                $("input#NOR").val(no2/no1);
            });

            $("#VAForm").submit(function(e){
                e.preventDefault()
                var  VA1 = $("input#VA1").val();
                var va1 = parseFloat(VA1);   
                var va2 = Math.PI * 2;
                $("input#VAR").val(va2 * va1);
            });

            $("#FAForm").submit(function(e){
                e.preventDefault()
                var  FA1 = $("input#FA1").val();
                var fa1 = parseFloat(FA1);   
                var  FA2 = $("input#FA2").val();
                var fa2 = parseFloat(FA2); 
                var total = (Math.PI * 2 * fa1)/fa2;
                $("input#VAR").val(total);
            });

            $("#periodoDVForm").submit(function(e){
                e.preventDefault()
                var  periodoDV1 = $("input#periodoDV1").val();
                var pDV1 = parseFloat(periodoDV1);
                var periodoDV2 = $("input#periodoDV2").val();
                var pDV2 = parseFloat(periodoDV2);        
                $("input#periodoDVR").val(pDV1/pDV2);
            });

            $("#IOForm").submit(function(e){
                e.preventDefault()
                var IO1 = $("input#IO1").val();
                var io1 = parseFloat(IO1);
                var IO2 = $("input#IO2").val();
                var io2 = parseFloat(IO2);    
                var IO3 = $("input#IO3").val();
                var io3 = parseFloat(IO3);
                var IO4 = $("input#IO4").val();
                var io4 = parseFloat(IO4);      
                var total = .5 * io1 * Math.pow(io2, 2) * Math.pow(io3, 2) * Math.pow(io4, 2);
                $("input#IOR").val(total);
            });
        </script>
    </body>
</html>
<?php /**PATH C:\laragon\www\Fisica-Ingenieria\resources\views/welcome.blade.php ENDPATH**/ ?>