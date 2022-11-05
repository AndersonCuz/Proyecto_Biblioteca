<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>
<div class="contenedor"> 
        <div class="item1">
            <p><img src="../imagenes/banner.png" alt="IMAGEN NO ENCONTRADA" width=""></p>
        </div>
        <div class="item2">
            <a href="<?= base_url('cargar_usuario')?>" style="text-decoration:none;" target="parent">
                <div align="center" class="formulario">
                    <div class="carreaux_presentation_light" style="background-image:url(../imagenes/icono_administrador.png);">
                        <div class="shadow_swhow_mini">
                            <div class="deroul_titre">USUARIO Administrador</div>
                            <div class="deroul_soustitre">Biblioteca</div>
                        </div>
                    </div>
            
                    <div style=" padding:5px; color:#1e4944; font-weight:300; font-size:30px; font-family:'Roboto';padding-top:20px;">
                        USUARIO <font style="font-weight:400;">Administrador</font>
                    </div>
                </div>
            </a>
        </div>
        <div class="item3">
            <a href="<?= base_url('cargar_usuario')?>" style="text-decoration:none;" target="parent">
                <div align="center" class="formulario">
                    <div class="carreaux_presentation_light" style="background-image:url(../imagenes/icono_empleado2.png);">
                        <div class="shadow_swhow_mini">
                            <div class="deroul_titre">USUARIO Empleados</div>
                            <div class="deroul_soustitre">Biblioteca</div>
                        </div>
                    </div>
                    <div style=" padding:5px; color:#1e4944; font-weight:300; font-size:30px; font-family:'Roboto';padding-top:20px;">
                        USUARIO <font style="font-weight:400;">Empleados</font>
                    </div>
                </div>
            </a>
        </div>
        <div class="item4">
            <a href="<?= base_url('cargar_usuario')?>" style="text-decoration:none;" target="parent"> 
                <div align="center" class="formulario">
                    <div class="carreaux_presentation_light" style="background-image:url(../imagenes/icono_estudiante2.png);">
                        <div class="shadow_swhow_mini">
                            <div class="deroul_titre">USUARIO Estudiante</div>
                            <div class="deroul_soustitre">Biblioteca</div>
                        </div>
                    </div>
                    <div style=" padding:5px; color:#1e4944; font-weight:300; font-size:30px; font-family:'Roboto';padding-top:20px;">
                         USUARIO <font style="font-weight:400;">Estudiante</font>
                    </div>
                </div>
            </a>
        </div>
    </div>
</body>
</html>