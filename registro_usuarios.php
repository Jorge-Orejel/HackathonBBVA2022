 <div class="col-md-6">
                 <label>Ingresa tu correo electr&oacute;nico: </label>
                 <input  type="email" name="correo" id="correo" onchange="comprobar_correo()" class="form-control" placeholder="usuario@ejemplo.com" required/>
                 <span id="availability"></span>
                 <label>Ingresa tu contrase&ntilde;a: </label>
                 <input type="password" name="contrasen" id="contra" class="form-control" minlength="8" placeholder="contrase&ntilde;a" required/>
                 <label>Repite tu contrase&ntilde;a: </label>
                 <input type="password" name="contrasena" id="confirm_password" class="form-control" minlength="8" onchange="check(this)" placeholder="contrase&ntilde;a" required/>
                </div>

<input type="submit" class="btn btn-success btn-lg btn-block" name="datos" id="datos" value="Enviar Datos" disabled> 