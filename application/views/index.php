
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>lib/css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <style>
        /*        body {
                    display: flex;
                    min-height: 100vh;
                    flex-direction: column;
                    background-image: url("/lib/img/login.mp4 type=");
                   
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                }*/
        /*
                main {
                    flex: 1 0 auto;
                }*/

        #videologin {

            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: 100%;
        }

        .logeo {
            position: relative;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 100%;
            padding: 20px;
        }


        /*                                width: 1600px;
                                        height: 900px;
                                        position: absolute; 
                                        top: 50%;
                                        margin-top: -450px;
                                        left: 50%;
                                        margin-left: -800px;*/


        /*        .pag1{width:100%;height:100%;position:relative; overflow: hidden; max-width:1920px; max-height:1080px; margin:0 auto;}
                .pag2.ie8{background: url(//img1.igg.com/game/lo/images/project/home/default/page1.jpg) no-repeat center center; background-size: 1920px 1080px;}
                .pag2 video{width:1920px;height:1080px;position:absolute;top:50%;margin-top:-540px;left:50%;margin-left:-960px;}
                .pag2.small video{width:1600px;height:900px;position:absolute;top:50%;margin-top:-450px;left:50%;margin-left:-800px}*/


    </style>

    <body>
        <main>
            <div class="">
                <video autoplay muted loop id="videologin" >
                    <source src="<?php echo base_url(); ?>/lib/img/login.mp4" type="video/mp4">
                </video>
                <div class="logeo card">
                    <h1 class="header center orange-text">Kaisestroms</h1>

                </div>
                <div class="row logeo" style="height: 500px">
                    <div class="col s7">
                        <nav class="black">
                            <div class="nav-wrapper ">
                                <form>
                                    <div class="input-field">
                                        <input id="search" type="search" required placeholder="Busca tu castillo">
                                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>

                                    <table  id="tablacaceria" class="responsive-table bordered logeo">
                                        <thead>
                                            <tr>
                                                <th>Rango</th>
                                                <th>CASTILLO</th>
                                                <th>lvl 1</th>
                                                <th>lvl 2</th>
                                                <th>lvl 3</th>
                                                <th>lvl 4</th>
                                                <th>lvl 5</th>
                                                <th>PTS DE CACERIA</th>
                                             
                                            </tr>
                                        </thead>

                                        <tbody id="tbody">

                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class="col s1"></div>
                    <div class="col s4 logeo card-panel hoverable">
                        <h4>Login</h4>

                        <div class="input-field">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" required id="usuario">
                        </div>
                        <div class="input-field">
                            <label for="contraseña">Contraseña</label>
                            <input type="text" name="contraseña" required id="contraseña">
                        </div>
                        <div class="input-field right">
                            <button type="submit" id="btniniciar" class="btn btn-primary yellow darken-4" >Login</button> 
                        </div>

                    </div>
                </div>

            </div>

        </main>


        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>lib/js/materialize.min.js"></script>
        <script type="text/javascript" >
            $(function () {


                $('select').not('.disabled').formSelect();
                $('.modal').modal();
                $('.datepicker').datepicker({
                    monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                    weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                    weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
                    selectMonths: true,
                    selectYears: 100, // Puedes cambiarlo para mostrar más o menos años
                    today: 'Hoy',
                    clear: 'Limpiar',
                    close: 'Ok',
                    labelMonthNext: 'Siguiente mes',
                    labelMonthPrev: 'Mes anterior',
                    labelMonthSelect: 'Selecciona un mes',
                    labelYearSelect: 'Selecciona un año',
                    container: 'body'
                });
//                videoplay();
                verCacerias();
                $("#btniniciar").click(function (e) {
                    e.preventDefault();
                    window.location.href = "<?PHP echo site_url() ?>/AdminController";
                });

//                function videoplay() {
//                    var video = document.getElementById("videologin");
//                    video.play();
//                }


                function verCacerias() {
                    var url = "<?php echo site_url() ?>/getCac";
                    $("#tbodycaceria").empty();
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {

                            var fila = "<tr><td>" + o.rango + "</td>";
                            fila += "<td>" + o.idcastillo + "</td>";
                            fila += "<td>" + o.lvl1 + "</td>";
                            fila += "<td>" + o.lvl2 + "</td>";
                            fila += "<td>" + o.lvl3 + "</td>";
                            fila += "<td>" + o.lvl4 + "</td>";
                            fila += "<td>" + o.lvl5 + "</td>";
                            fila += "<td>" + (parseInt(o.lvl1) * 1 + parseInt(o.lvl2) * 2 + parseInt(o.lvl3) * 3 + parseInt(o.lvl4) * 4 + parseInt(o.lvl5) * 5) + "</td>";
//                            fila += '<td><button id="prodver" value="'
//                                    + o.idcastillo + '|'
//                                    + o.lvl1 + '|'
//                                    + o.lvl2 + '|'
//                                    + o.lvl3 + '|'
//                                    + o.lvl4 + '|'
//                                    + o.lvl5 + '|'
//                                    + '" class="btn-floating btn waves-effect waves-light green modal-trigger" href="#modal1"><i class="material-icons">library_add</i></button></td>';

                            $("#tbodycaceria").append(fila);

                        });
                    });
                }


            });
        </script>
    </body>
</html>