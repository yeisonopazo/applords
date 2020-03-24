###################
KAISESTORMS
###################


 <button type="submit" id="modaddcast" class="btn btn-primary modal-trigger light-blue accent-3" href="#modaddcast" ><i class="material-icons left">library_add</i>Ingresar castillo</button>
 
               $("#modaddcast").click(function (e) {
                    e.preventDefault();
                    var idlider = document.getElementById("selectlider").value;
                    var nombre = $("#level1").val();
                    var rango = $("#level2").val();
                    if (idlider === 0 || nombre === "" || rango === "") {
                        M.toast({html: 'Faltan Campos!'});
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/addCast',
                            type: 'post',
                            dataType: 'json',
                            data: {"idlider": idlider, "nombre": nombre, "rango": rango}
                        }).success(function (o) {
                            M.toast({html: 'Castillo registrado!'});
                            $('#formcace').each(function () {
                                this.reset();
                            });
                            verCastillos();
                        }).fail(function () {
                            M.toast({html: 'Error!'});
                        });
                    }
                });
