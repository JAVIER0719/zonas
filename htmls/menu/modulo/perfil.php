<link rel="stylesheet" href="http://localhost/zonas/htmls/menu/modulo/css1/estiper.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                    class="font-weight-bold"><?php echo $primerNombre; ?></span><span class="text-black-50" values="">
                    <?php echo $correo; ?>
                </span><span>
                </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Modificar perfil</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nombres</label><input type="text" class="form-control"
                            placeholder="Primer nombre" value=" <?php echo $primerNombre; ?>"></div>

                    <div class="col-md-6"><label class="labels">.</label><input type="text" class="form-control"
                            value="<?php echo $segundoNombre; ?>" placeholder="Segundo nombre"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Apellidos</label><input type="text" class="form-control"
                            placeholder="Primer apellido" value="<?php echo $primerApellido; ?>"></div>
                    <div class="col-md-6"><label class="labels">.</label><input type="text" class="form-control"
                            value="<?php echo $segundoApellido; ?>" placeholder="Segundo apellido"></div>
                </div>
                <div class="row mt-3">

                    <div class="col-md-12"><label class="labels">Correo electronico</label><input type="email"
                            class="form-control" placeholder="Gmail" value="<?php echo $correo; ?>"></div>

                </div>

                <div class="input-text" require>
                    <select id="tipd" name="tipo" require>
                        <option>
                            <?php echo $grado; ?>
                        </option>
                        <option>Décimo</option>
                        <option>Undécimo</option>

                    </select>
                </div>
                <div class="input-text" require>
                    <select id="tipd" name="tipo" require>
                        <?php
                        if ($fkRol==10){
                            ?><option>Estudiante</option><?php
                        
                        }else{
                            ?><option>Administrador</option><?php
                        }
                        ?>
                       
                    
                    </select>
                </div>


                <div class="input-text" require>
                    <select id="tipd" name="tipo" require>
                        <option>
                            <?php echo $tipoDocu; ?>
                        </option>
                    </select>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">identificación</label><input type="text"
                            class="form-control" placeholder="Numero de identificacion" value="<?php echo $doc; ?>">
                    </div>
                    <div class="col-md-6"><label class="labels">Celular</label><input type="text" class="form-control"
                            value="<?php echo $cel; ?>" placeholder="Numero de telefono"></div>
                </div>

                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save
                        Profile</button></div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
<style>
    .input-text {
        margin-bottom: 20px;
        margin-top: 30px;

    }

    input[type="number"] {
        height: 35px;
        width: 100%;
        border: none;
        background-color: transparent;
        outline: 0;
        border-bottom: 1px solid #d4dfe4;
        font-size: 12px;
    }

    input[type="text"] {
        height: 35px;
        width: 100%;
        border: none;
        background-color: transparent;
        outline: 0;
        border-bottom: 1px solid #d4dfe4;
        font-size: 12px;
    }

    input[type="password"] {
        height: 35px;
        width: 100%;
        border: none;
        background-color: transparent;
        outline: 0;
        border-bottom: 1px solid #d4dfe4;
        font-size: 12px;
    }

    select {
        height: 35px;
        width: 100%;
        border: none;
        background-color: transparent;
        outline: 0;
        border-bottom: 1px solid #d4dfe4;
        font-size: 12px;
    }

    .input-text select option:nth-child(1) {
        display: none !important;
    }
</style>