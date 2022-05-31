<form class="form-horizontal" action="" method="post">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Cedula</label>
                                <div class="col-sm-2">
                                    <input type="number" name="cedula" class="form-control" placeholder="Ingr Cédula" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nombre</label>
                                <div class="col-sm-4">
                                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese su Nombre" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Apellido</label>
                                <div class="col-sm-4">
                                    <input type="text" name="apellido" class="form-control" placeholder="Ingrese su Apellido" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Edad</label>
                                <div class="col-sm-4">
                                    <input type="number" name="edad" class="form-control" placeholder="Ingrese su Edad" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Sexo</label>
                                <div class="col-sm-3">
                                    <select name="sexo" class="form-control">
                                        <option value="">- Selecciona estado -</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino" >Femenino</option>
                                        <option value="No decir" >No definido</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Correo</label>
                                <div class="col-sm-3">
                                    <input type="text" name="correo" class="form-control" placeholder="Ingrese Correo" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">&nbsp;</label>
                                <div class="col-sm-6">
                                    <input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
                                    <a href="./crud.php" class="btn btn-sm btn-danger">Cancelar</a>
                                    <a href="./crud.php" class="btn btn-sm btn-success">Volver</a>
                                </div>
                            </div>
                        </form>