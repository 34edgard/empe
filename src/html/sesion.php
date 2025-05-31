	<div class="tab-content container w-75 bg-tramparente p-3 rounded  mt-3">
	
	   <div class="tab-pane  fade show" id="Registro">

        <!-- Formulario de Registro -->
        <div class="form-section">
            <h2>Registro</h2>
            <form id="registro-form"  
            hx-post="/Usuarios"
            hx-trigger="submit"
            hx-target="#mensaje"
            >
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    <div class="text-center" id="nombre-mss"></div>
                    
                </div>
                <div class="mb-3">
                    <label for="emailRegistro" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="emailRegistro" name="emailRegistro" required>
                    <div class="text-center" id="emailRegistro-mss"></div>
                </div>
                <div class="mb-3">
                    <label for="contrasenaRegistro" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contrasenaRegistro" name="contrasenaRegistro" required>
                    <div class="text-center" id="contrasenaRegistro-mss"></div>
                </div>
                <button type="submit" class="btn btn-primary" id="botonRegistrarse">Registrarse</button>
            </form>
            
        </div>
</div>
        <!-- Opción de Inicio de Sesión -->
	   <div class="tab-pane active  fade show" id="IniciarSesion" >
		
        <div class="form-section">
            <h2>Inicio de Sesión</h2>
            <form
            hx-post='/iniciarSesion'
            hx-trigger='submit'
            hx-target='#mensaje'
             id="login-form">
                <div class="mb-3">
                    <label for="emailLogin" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="emailLogin" name="emailLogin" required>
                </div>
                <div class="mb-3">
                    <label for="contrasenaLogin" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contrasenaLogin" name="contrasenaLogin" required>
                </div>
                <button type="submit" class="btn btn-success" id="iniciarSesion">Iniciar Sesión</button>
            </form>
        </div>
	   </div>
    </div>
    <div id="mensaje">
      
    </div>