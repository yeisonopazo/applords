
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
        <nav>
            <div class="nav-wrapper white">

                <a id="logo-container" href="" class="brand-logo center-on-small-only"><img width="200" src="<?php echo base_url(); ?>/lib/img/logo1.png"></a>

                <ul id="nav-mobile" class="right hide-on-med-and-down">

                    <li class="light-blue darken-2"><a href="badges.html">Bienvenido Kaises</a></li>
                    <li class="light-blue darken-2"><a href="collapsible.html">Salir</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">

            <div class="row">
                <div class="input-field col s12">
                    <input id="fecha" type="text" class="datepicker">
                    <label for="fecha">Elige la fecha</label>
                </div>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>lib/js/materialize.min.js"></script>
        <script type="text/javascript">
            $(function () {
            
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
                    labelYearSelect: 'Selecciona un año'
                    
                });
            });
        </script>
    </body>

</html>