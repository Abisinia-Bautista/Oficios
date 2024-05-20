<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Oficios</title>
    <meta name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <style>
        /* src/components/PiePagina.css */


        body{
            margin: 0;
            /* padding-bottom: 60px;  */
            /* Ajusta el espacio para el footer */
            min-height: 100vh;
            position: relative;
        }
        .enlaces-footer:hover {
            color: #b17a45;
            text-decoration: none;

        }

        .small-text {
            font-size: 0.75rem; /* Ajusta este valor según lo necesites */
        }

        .larger-text {
            font-size: 1.00rem !important; /* Ajusta este valor según lo necesites */
        }
        .bg-gold {
            background-color: rgb(177, 122, 69);
        }
        .bg-3f3f3d {
            background-color: #3f3f3d;

        }

        .bg-6a1c32 {
            background-color: #6a1c32;
        }

        .enlaces-footer {
            color: white;
            transition: color 0.2s ease-in-out;
            font-size: 12px; /* Ajusta este valor según tus necesidades */

        }

        footer{
            /* position: fixed; */
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            height: 38%;
            /* top: 750px; */
        }
        input{
            width: 100%; 
            padding: 5px; 
            margin-bottom: 10px; 
            border:1px solid #EEEEEE; 
            border-radius: 5px; 
            background: #EEEEEE;
            height: 35px;
        }
        #contenedor{
            display: flex;
            justify-content: center; 
            align-items: center; 

        }
        #FormOficio{
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label{
            display: block; 
            margin-bottom: 5px;
        }
        #enviar{
            background: #6a1c32;
            color: #EEEEEE;
            height: 45px;
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            width: 48%;
        }
        #enviar2{
            background: #6a1c32;
            color: #EEEEEE;
            height: 45px;
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            width: 48%;
        }
       
        .contenidos{
            width: 60%;
        }
        
        .toolbar {
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
        }
        .toolbar button {
            margin-right: 5px;
            padding: 5px 10px;
            background-color: #f0f0f0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .toolbar button:hover {
            background-color: #e0e0e0;
        }
        img{
            border-radius: 20px 20px 0px 0px;
        }
        input[type="radio"]:checked + label {
            border: 2px solid blue;
        }
        .cambioColor{
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }
        a{
            text-decoration: none;
        }
        a:hover{
            color: #b17a45;
        }
        
        
    </style>
</head>
<body>
    <div>
        <div id="contenedor"  style=" height: 100%; margin-bottom: 50px;">
            <div id="formulario" class="contenidos" >
                <h2 style="text-align: center; color:#b17a45;" >Formulario para Oficios</h2>
                <form id="FormOficio"  method="POST" action="genera.php">
                    <div >
                        <label for="oficio">No. Oficio:</label>
                        <input type="text" id="oficio" name="oficio"  required placeholder="Numero de Oficio">
                    </div>
                    <div >
                        <label for="asunto">Asunto:</label>
                        <input type="text" id="asunto" name="asunto"  required placeholder="Asunto">
                    </div>
                    <div >
                        <label for="corresponde">A quien va Dirigido:</label>
                        <input type="text" id="corresponde" name="corresponde" required placeholder="Ingrese nombre completo">
                    </div>
                    <div >
                        <label for="cargo">Cargo:</label>
                        <input type="text" id="cargo" name="cargo" required placeholder="Cargo al que pertenece">
                    </div>
                    <div >
                        <label for="dependencia">Dependencia:</label>
                        <input type="text" id="dependencia" name="dependencia" required placeholder="Dependencia o Entidad">
                    </div>
                    <div >
                        <label for="lema">Lema:</label>
                        <input type="text" id="lema" name="lema"  required value="“2024, Año los Pueblos Yumanos, Pueblos Originarios y de las Personas Afromexicanas”">
                    </div>
                    <!-- <div>
                        <label for="contenido">Contenido del Oficio:</label>
                        <input type="text" id="contenido" name="contenido" required placeholder="Ingrese Aqui el contenido del Oficio">
                    </div>  -->
                    <div >
                        <label for="contenido">Contenido</label>
                        <textarea id="summernote" name="contenido"></textarea>
                    </div>
                    <div>
                        <label for="firma">Firma:</label>
                        <input type="text" id="firma" name="firma" value="GABRIEL ALBERTO PALOMBO" required placeholder="Firma de quien manda">
                    </div> 
                    <div>
                        <label for="entidad">Cargo:</label>
                        <input type="text" id="entidad" name="entidad" value="DIRECTOR GENERAL DE LA AGENCIA DIGITAL DEL ESTADO DE BAJA CALIFORNIA" required placeholder="Cargo de quien firma">
                    </div> 
                    <div>
                        <input id="enviar2" type="submit" value="Guardar PDF" >
                        <input id="enviar" type="submit" value="Generar PDF" onclick="guardarDatos()" >
                    </div>
                </form>
            </div>
        </div>
    <!-- <div> -->
        <footer id="footer">
            <div class="d-none d-sm-none d-md-block"><!-- Inicio Escritorio Footer -->
                <div class="footer-top">
                    <div class="container">
                        <div class="container text-md-left" style="padding-bottom:0px; padding-top:0px;">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 px-5" style="border-right:2px solid #bd945c;  margin-top:3rem!important; margin-bottom:3rem!important">
                                    <div class="visible-lg visible-md ">
                                        <img alt="Logo de Baja California" class="mt-3" src="./img/escudo-baja-california.png" width="160px" height="170px">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8 px-4 py-5 " style="padding-left:30px;">
                                    <div>
                                        <div class="row footer-enlaces" style="margin-right: 55px !important;">
                                            <div class="col-md-4">
                                                <ul style="list-style: none;">
                                                    <li>
                                                        <strong>BAJA CALIFORNIA</strong>
                                                        <div class="footer-line"></div>
                                                    </li>
                                                    <li><a class="cambioColor" href="https://www.mexicali.gob.mx/" target="_blank" aria-label="Ir a página Mexicali">Mexicali</a></li>
                                                    <li><a class="cambioColor" href="https://www.tijuana.gob.mx/" target="_blank" aria-label="Ir a página Tijuana">Tijuana</a></li>
                                                    <li><a class="cambioColor" href="http://www.ensenada.gob.mx/" target="_blank" aria-label="Ir a página de Ensenada">Ensenada</a></li>
                                                    <li><a class="cambioColor" href="http://www.rosarito.gob.mx/" target="_blank" aria-label="Ir a página de Rosarito">Rosarito</a></li>
                                                    <li><a class="cambioColor" href="https://tecate.gob.mx/" target="_blank" aria-label="Ir a página de Tecate">Tecate</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul style="list-style: none;">
                                                    <li>
                                                        <strong>ENLACES</strong>
                                                        <div class="footer-line"></div>
                                                    </li>
                                                    <li><a class="cambioColor" href="http://www.monitorbc.gob.mx/" target="_blank" aria-label="Ir a página de monitor BC">Estadísticas e Indicadores</a></li>
                                                    <li><a class="cambioColor" href="https://tramites.ebajacalifornia.gob.mx/Compras/" target="_blank" aria-label="Ir a página de compras">Compras, Proveedores y Licitaciones</a></li>
                                                    <li><a class="cambioColor" href="https://www.sat.gob.mx/" target="_blank" aria-label="Ir a página de sat">Impuestos federales</a></li>
                                                    <li><a class="cambioColor" href="https://bajacalifornia.gob.mx/Gobierno/Acerca"  target="_blank">Acerca del Portal</a></li>
                                                    <li><a class="cambioColor" href="http://retys.bajacalifornia.gob.mx/Linea" target="_blank">Trámites y Servicios en Línea</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul style="list-style: none;">
                                                    <li>
                                                        <strong>CONTACTO</strong>
                                                        <div class="footer-line"></div>
                                                    </li>
                                                    <li><a class="cambioColor" href="https://bajacalifornia.gob.mx/Gobierno/Oficinas">Oficinas de Gobierno</a></li>
                                                    <li><a class="cambioColor" href="https://bajacalifornia.gob.mx/Gobierno/Directorio_Funcionarios">Directorio de Funcionarios</a></li>
                                                    <li><a class="cambioColor" href="http://appsweb.ebajacalifornia.gob.mx/SIFOS/Kiosko/" target="_blank" aria-label="Ir a página de Kiosco">Cajeros electrónicos</a></li>
                                                    <li><a class="cambioColor" href="https://bajacalifornia.gob.mx/Gobierno/FAQ">Preguntas frecuentes</a></li>
                                                    <li><a class="cambioColor" href="http://www.transparenciabc.gob.mx/" target="_blank" >Trasparencia B.C.</a></li>
                                                    <li><a class="cambioColor" href="https://muac.bajacalifornia.gob.mx/" target="_blank" >Telefono MUAC:</a></li>
                                                    <li><a class="cambioColor" href="https://muac.bajacalifornia.gob.mx/" target="_blank" >(686)-900-90-91 </a></li>
                                                    <li><a class="cambioColor" href="https://muac.bajacalifornia.gob.mx/" target="_blank" >Correo MUAC: </a></li>
                                                    <li><a class="cambioColor" href="https://muac.bajacalifornia.gob.mx/" target="_blank" >atencionciudadana@bajacalifornia.gob.mx</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Final Escritorio Footer -->
            <div class="footer-line-yellow"></div>
            <div class="container">
                <div class="copyright d-lg-none"  style="font-size:1.5vw;">
                    Copyright &copy; 2023 | <strong> Portal de Gobierno de Baja California  |  Agencia Digital | </strong><strong>Politicas de Privacidad y Seguridad</strong>
                    <br>
                    <strong>última fecha de actualización del día 21 de febrero del 2023</strong>  
                </div>
                <div class="copyright d-none d-lg-block"  style="font-size:10px;">
                    Copyright &copy; 2023 | <strong> Portal de Gobierno de Baja California  |  Agencia Digital | </strong><strong>Politicas de Privacidad y Seguridad</strong>
                    <br>
                    <strong>última fecha de actualización del día 21 de febrero del 2023</strong>  
                </div>
            </div>
        </footer><!-- End Footer -->
    <!-- </div> -->
    </div>
    <script>
        $('#summernote').summernote({
        placeholder: 'Ingresa el contenido aqui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
        //  ['table', ['table']],
          ['insert', ['link']],
        //  ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
</body>
</html>

<script>

function guardarDatos() {
        // Obtener los datos del formulario
        var oficio = document.getElementsByName("oficio")[0].value;
        var asunto = document.getElementsByName("asunto")[0].value;
        var lema = document.getElementsByName("lema")[0].value;
        var corresponde = document.getElementsByName("corresponde")[0].value;
        var cargo = document.getElementsByName("cargo")[0].value;
        var dependencia = document.getElementsByName("dependencia")[0].value;
        var contenido = document.getElementsByName("contenido")[0].value;
        var firma = document.getElementsByName("firma")[0].value;
        var entidad = document.getElementsByName("entidad")[0].value;


        var xhr = new XMLHttpRequest();

        xhr.open("POST", "bd.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // alert("EXITO EN LA BD");
                    console.log("EXITO EN BD")
                } else {
                    alert("ERROR EN LA BD");
                    console.log("ERROR EN BD")
                }
            }
        };

        var datos =  "oficio=" + encodeURIComponent(oficio) 
                    + "&asunto=" + encodeURIComponent(asunto) 
                    + "&lema=" + encodeURIComponent(lema) 
                    + "&corresponde=" + encodeURIComponent(corresponde) 
                    + "&cargo=" + encodeURIComponent(cargo) 
                    + "&dependencia=" + encodeURIComponent(dependencia) 
                    + "&contenido=" + encodeURIComponent(contenido)
                    + "&firma=" + encodeURIComponent(firma)
                    + "&entidad=" + encodeURIComponent(entidad);        
        xhr.send(datos);
    }
</script>
