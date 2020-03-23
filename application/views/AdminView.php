
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

    <body>

        <nav class="nav-extended black">
            <div class="nav-wrapper">

                <a id="logo-container" href="" class="brand-logo center-on-small-only"><img width="135" src="<?php echo base_url(); ?>/lib/img/logo1.png"></a>

                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">

                    <li><a href="badges.html">Bienvenido</a></li>
                    <li><a href="collapsible.html">Salir</a></li>
                </ul>
            </div>
            <div class="nav-content container">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="#test1">Resumen</a></li>
                    <li class="tab"><a class="active" href="#test2">Cacerias</a></li>
                    <li class="tab"><a href="#test3">Castillos</a></li>
                    <li class="tab"><a href="#test4">Fiesta de gremio</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
        </ul>

        <div id="test1" class="col s12">
            <div class="card">
                <br><h4 class="header center orange-text">Resumen</h4><br>
            </div>
        </div>
        <div id="test2" class="col s12">

            <div class="">
                <div class="card">
                    <br><h4 class="header center orange-text">Gestion Cacerias</h4><br>
                </div>
                <!--                <div class="right-align">
                                    <input type="submit" name="bt" id="btnregistrar" value="28-02-2020" class="btn  light-blue darken-2">
                                </div>-->
                <div class="card-panel">
                    <table  id="tablacaceria" class="responsive-table bordered">
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
                                <th>FECHA CACERIA</th>
                                <th>FECHA REGISTRO</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody id="tbodycaceria">

                        </tbody>
                    </table>
                </div>



                <!-- Modal add caceria -->

                <div id="modal1" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        <h3 class="header center orange-text">Agregar Caceria</h3>
                        <h5 >Lider grupo: Kaises</h5>
                        <form id="formcace">

                            <div id="addcaceria">
                                <div class="row">

                                    <select id="selectcast" name="selectcast">
                                    </select>

                                </div>
                                <div class="row">
                                    <div class="input-field col s2">
                                        <label for="level1">Level 1</label>
                                        <input type="number" required name="level1" id="level1">
                                    </div>
                                    <div class="input-field col s2">
                                        <label for="level2">Level 2</label>
                                        <input type="number" required name="level2" id="level2">
                                    </div>
                                    <div class="input-field col s2">
                                        <label for="level3">Level 3</label>
                                        <input type="number" name="level3" required id="level3">
                                    </div>
                                    <div class="input-field col s2">
                                        <label for="level4">Level 4</label>
                                        <input type="number" name="level4" required id="level4">
                                    </div>
                                    <div class="input-field col s2">
                                        <label for="level5">Level 5</label>
                                        <input type="number" name="level5" required id="level5">
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="fecha" type="text" class="datepicker">
                                        <label for="fecha">Seleccione fecha de caceria</label>
                                    </div>
                                </div>


                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="right-align">  
                            <button type="submit" id="btnaddcaceria" class="btn btn-primary light-blue darken-2"><i class="material-icons left">library_add</i>Registrar Caceria</button>
                        </div>
                        <!--                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>-->
                    </div>

                </div>

            </div>

        </div>
        <div id="test3" class="col s12">
            <div class="card">
                <br><h4 class="header center orange-text"> Gestion Castillos</h4><br>
            </div> 

            <div class="card-panel">
                <table  id="tablacastillo" class="responsive-table bordered">
                    <thead>
                        <tr>
                            <th>RANGO</th>
                            <th>CASTILLO</th>                         
                            <th>VER</th>                     

                            <th>LIDER ASIGNADO</th>
                            <th>CAMBIAR LIDER</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody id="tbodycastillo">

                    </tbody>
                </table>
            </div>


        </div>
        <div id="test4" class="col s12">
            <div class="card">
                <br><h4 class="header center orange-text"> Gestion Fiesta de gremio</h4><br>
            </div> 
            <div class="card-panel">                
                <button type="submit" id="btnshowcat" class="btn btn-primary modal-trigger light-blue accent-3" href="#modalfdg" ><i class="material-icons left">library_add</i>Ingresar registro</button>
                <table  id="tablafdg" class="responsive-table bordered">
                    <thead>
                        <tr>
                            <TH>ID</TH>
                            <th>CASTILLO</th>
                            <th>LIGA</th>
                            <th>PUNTAJE</th>
                            <th>FECHA</th> 
                            <th>ESTADO</th>
                        </tr>
                    </thead>

                    <tbody id="tbodyfdg">

                    </tbody>
                </table>
            </div>

            <div id="modalfdg" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h3 class="header center orange-text">Ingresar Registro</h3>
                    <h5 >Lider grupo: Kaises</h5>
                    <form id="formcace">

                        <div id="addcaceria">
                            <div class="row">

                                <select id="selectcastfdg" name="selectcastfdg">
                                </select>

                            </div>
                            <div class="row input-field">

                                <select class="orange" id="selectliga" name="selectliga">
                                    <option class="disabled selected">Seleccione liga</option>
                                    <option class="grey-text">Principiante</option>
                                    <option class="green-text ">Intermedia</option>
                                    <option class="blue-text">Avanzada</option>
                                    <option class="purple-text">Experta</option>
                                    <option class="orange-text">Maestro</option>
                                </select>

                            </div>
                            <div class="row">
                                <div class="input-field col s2">
                                    <label for="puntaje">Puntaje</label>
                                    <input type="number" required name="puntaje" id="puntaje">
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="fechafdg" type="text" class="datepicker">
                                    <label for="fechafdg">Seleccione fecha de FDG</label>
                                </div>
                            </div>


                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <div class="right-align">  
                        <button type="submit" id="btnaddcaceria" class="btn btn-primary light-blue darken-2"><i class="material-icons left">library_add</i>Registrar FDG</button>
                    </div>
                    <!--                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>-->
                </div>

            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>lib/js/materialize.min.js"></script>
        <script type="text/javascript" >
            $(function () {

                $('select').formSelect();
                $('.modal').modal();
                $('.sidenav').sidenav();
                $('ul.tabs').tabs();
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
                    container: 'body',
                    format: 'yyyy-mm-dd'
                });
                verCacerias();
                verCastillosLider();
                verCastillos();
                verFDG();


                function verCacerias() {
                    var url = "<?php echo site_url() ?>/getCac2";
                    $("#tbodycaceria").empty();
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            var fila = "<tr><td>" + o.rango + "</td>";
                            fila += "<td>" + o.nombre + "</td>";
                            fila += "<td>" + o.lvl1 + "</td>";
                            fila += "<td>" + o.lvl2 + "</td>";
                            fila += "<td>" + o.lvl3 + "</td>";
                            fila += "<td>" + o.lvl4 + "</td>";
                            fila += "<td>" + o.lvl5 + "</td>";
                            fila += "<td>" + (parseInt(o.lvl1) * 1 + parseInt(o.lvl2) * 2 + parseInt(o.lvl3) * 3 + parseInt(o.lvl4) * 4 + parseInt(o.lvl5) * 5) + "</td>";
                            fila += "<td>" + o.fechacaceria + "</td>";
                            fila += "<td>" + o.fecharegistro + "</td>";
                            fila += '<td><button id="prodver" value="'
                                    + o.idcastillo + '|'
                                    + o.lvl1 + '|'
                                    + o.lvl2 + '|'
                                    + o.lvl3 + '|'
                                    + o.lvl4 + '|'
                                    + o.lvl5 + '|'
                                    + '" class="btn-floating btn waves-effect waves-light green modal-trigger" href="#modal1"><i class="material-icons">library_add</i></button></td></tr>';
                            $("#tbodycaceria").append(fila);
                        });
                    });
                }

                function verCastillos() {
                    var url = "<?php echo site_url() ?>/getCast2";
                    $("#tbodycastillo").empty();
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            var fila = "<tr><td>" + o.rango + "</td>";
                            fila += "<td>" + o.nombre + "</td>";
                            fila += '<td><button id="prodver" value="'
                                    + o.idcastillo + '|'
                                    + o.lvl1 + '|'
                                    + o.lvl2 + '|'
                                    + o.lvl3 + '|'
                                    + o.lvl4 + '|'
                                    + o.lvl5 + '|'
                                    + '" class="btn-floating btn waves-effect waves-light green modal-trigger" href="#modal1"><i class="material-icons">search</i></button></td>';
                            fila += "<td>" + o.nombrel + "</td>";
                            fila += '<td><button id="prodver" value="'
                                    + o.idcastillo + '|'
                                    + o.lvl1 + '|'
                                    + o.lvl2 + '|'
                                    + o.lvl3 + '|'
                                    + o.lvl4 + '|'
                                    + o.lvl5 + '|'
                                    + '" class="btn-floating btn waves-effect waves-light blue modal-trigger" href="#modal1"><i class="material-icons">edit</i></button></td></tr>';
                            $("#tbodycastillo").append(fila);
                        });
                    });
                }

                function verFDG() {
                    var url = "<?php echo site_url() ?>/getFDG";
                    $("#tbodyfdg").empty();
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            var fila = "<tr><td>" + o.idc + "</td>";
                            fila += "<td>" + o.nombre + "</td>";
                            fila += "<td class='orange-text'>Maestra</td>";
                            fila += "<td>" + o.puntaje + "</td>";
                            fila += "<td>" + o.fecha + "</td>";
                            if ((parseInt(o.puntaje) >= 1600)) {
                                fila += "<td class='green-text'>Cumplio</td></tr>";
                            } else {
                                fila += "<td class='red-text'>NO cumplio</td></tr>";
                            }

                            $("#tbodyfdg").append(fila);
                        });
                    });
                }

                $("#btnaddcaceria").click(function (e) {
                    e.preventDefault();
                    var idcastillo = document.getElementById("selectcast").value;
                    var lvl1 = $("#level1").val();
                    var lvl2 = $("#level2").val();
                    var lvl3 = $("#level3").val();
                    var lvl4 = $("#level4").val();
                    var lvl5 = $("#level5").val();
                    var f = new Date();
                    var fechacreacion = f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate() + " " + f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
                    var fecha = $("#fecha").val();
                    if (idcastillo === 0 || lvl1 === "" || lvl2 === "" || lvl3 === "" || lvl4 === "" || lvl5 === "" || fecha === "") {
                        M.toast({html: 'Faltan Campos!'});
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/addCace',
                            type: 'post',
                            dataType: 'json',
                            data: {"idcastillo": idcastillo, "lvl1": lvl1, "lvl2": lvl2,
                                "lvl3": lvl3, "lvl4": lvl4, "lvl5": lvl5, "fechacaceria": fecha, "fecharegistro": fechacreacion, "fechamodificacion": fechacreacion}
                        }).success(function (o) {
                            M.toast({html: 'Caceria registrada!'});
                            $('#formcace').each(function () {
                                this.reset();
                            });
                            verCacerias();
                        }).fail(function () {
                            M.toast({html: 'Error!'});
                        });
                    }
                });


                function verCastillosLider() {
                    var url = "<?php echo site_url() ?>/getCast";
                    $("#selectcast").empty();

                    $("#selectcastfdg").empty();
                    $("#selectcast").append("<option value='0' disabled selected>Seleccione castillo</option>");
                    $("#selectcastfdg").append("<option value='0' disabled selected>Seleccione castillo</option>");
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
//                            if (o.idc == 1) {
                            var cast = "<option value='" + o.idc + "'>" + o.nombre + "</option>";
                            $("#selectcast").append(cast);
                            $("#selectcastfdg").append(cast);
                            $('select').formSelect();
//                            }
                        });
                    });
                }

            }
            );
        </script>
    </body>
</html>