    <div class="container">
        <h1 class="text-center">Panel de Usuario - E.M.P.E</h1>
        

        <!-- Navegación del Panel -->
<?php plantilla("nav-panel"); ?>
       <!-- Contenido de las Tabs -->
        <div class="tab-content mt-3">
            <!-- Perfil del Usuario -->
            <div class="tab-pane fade show active" id="perfil">
            <?php plantilla("perfil-usuario"); ?>
           </div>

            <div class="tab-pane fade show " id="subidaContenidos">

  
   <h1 class="text-center">Subida de Contenidos a E.M.P.E</h1>

        <!-- Formulario para subir nuevos contenidos -->
        <div class="form-section">
            <h2>Subir Nuevos Contenidos</h2>
            <form id="upload-form" action="/Contenido/" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título del Contenido</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>
                    <label class="form-label">
    autor 
    <input type="text" name="autor" placeholder="autor" id="autor" class="form-control" >
    </label>
    
    <label class="form-label">
    categoria 
    <input type="text" name="categoria" id="categoria" placeholder="categoria" class="form-control">
    </label>
    <label class="form-label">
    tipo de contenido 
    
    <select name="tipo_contenido" class="form-select" id="tipo_contenido">
	<option value="libro">libro</option>
	<option value="manga">manga</option>
    </select>
	
    </label>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="archivo" class="form-label">Seleccionar Archivo</label>
                    <input type="file" name="file" class="form-control" id="archivo" accept=".jpg, .jpeg, .png" required>
                </div>
                <button type="button" id="subirContenidosBtn" class="btn btn-primary" name="guardar" value="1">Subir Contenido</button>
            </form>

  </div>

        <!-- Guía de formatos y requisitos -->
        <div class="form-section">
            <h2>Guía de Formatos y Requisitos</h2>
            <ul>
                <li><strong>Imágenes:</strong> Formatos permitidos: .jpg, .jpeg, .png. Tamaño máximo: 5 MB.</li>
                
                <li><strong>Documentos:</strong> Formatos permitidos: .pdf. Tamaño máximo: 10 MB.</li>
            </ul>
            <p>Por favor, asegúrate de que tus archivos cumplen con los requisitos antes de intentar subirlos.</p>
        </div>  
            </div>

            <!-- Historial de Compras/Descargas -->
            <div class="tab-pane fade" id="historial">
            <?php plantilla("historial-compras"); ?>
            </div>

            <!-- Configuración de Cuenta -->
            <div class="tab-pane fade" id="configuracion">
                <h2>Configuración de Cuenta</h2>
                <form id="configuracion-form"
hx-post="/Usuarios/cambiar/contrasena"
hx-trigger="submit"
hx-target="#Mensajes"

>
                    <div class="mb-3">
                        <label for="contrasenaActual" class="form-label">Contraseña Actual</label>
                        <input type="password" class="form-control" id="contrasenaActual" name="contrasenaActual" required>
                    </div>
                    <div class="mb-3">
                        <label for="nuevaContrasena" class="form-label">Nueva Contraseña</label>
                        <input type="password" class="form-control" id="nuevaContrasena" name="nuevaContrasena" required>
                    </div>
                    <button type="submit" class="btn btn-success">Actualizar Contraseña</button>
                </form>
<div id="Mensajes">ggggggg</div>
            </div>
        </div>
    </div>
