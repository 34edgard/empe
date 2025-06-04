        <div class="tab-content p-1 mt-3">
                    <div class="tab-pane fade show " id="soporteFAQ">
	
	
    <div class="container">
        <h1 class="text-center">Soporte y FAQ</h1>

        <!-- Preguntas Frecuentes -->
        <h2>Preguntas Frecuentes</h2>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(1)">¿Cómo puedo crear una cuenta?</div>
            <div class="faq-answer" id="faq-answer-1">
                <p>Para crear una cuenta, simplemente dirígete a la sección de registro en nuestra plataforma, completa el formulario requerido y confirma tu dirección de correo electrónico.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(2)">¿Qué hago si olvidé mi contraseña?</div>
            <div class="faq-answer" id="faq-answer-2">
                <p>Si olvidaste tu contraseña, puedes restablecerla haciendo clic en "¿Olvidaste tu contraseña?" en la página de inicio de sesión. Recibirás un enlace para crear una nueva contraseña en tu correo electrónico.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(3)">¿Puedo eliminar mi cuenta?</div>
            <div class="faq-answer" id="faq-answer-3">
                <p>Sí, puedes eliminar tu cuenta en la configuración de tu perfil. Ten en cuenta que esta acción es irreversible.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(4)">¿Cómo puedo contactar al soporte?</div>
            <div class="faq-answer" id="faq-answer-4">
                <p>Para contactar a nuestro equipo de soporte, puedes utilizar el formulario que se encuentra más abajo o enviar un correo electrónico a soporte@ejemplo.com.</p>
            </div>
        </div>

        <!-- Formulario de Contacto -->
        <h2>Formulario de Contacto</h2>

        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Mensaje</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
	
          </div>

          
  <div class="tab-pane fade show" id="Usuario">

    <div class="container">
        <h1 class="text-center">Panel de Usuario - E.M.P.E</h1>
        

        <!-- Navegación del Panel -->
        <ul class="nav nav-tabs mt-4">
            <li class="nav-item">
                <a class="nav-link active" id="perfil-tab" data-bs-toggle="tab" href="#perfil">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="historial-tab" data-bs-toggle="tab" href="#historial">Historial de Compras/Descargas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="subirContenidos-tap" data-bs-toggle="tab" href="#subidaContenidos">subir contenido</a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link" id="config-tab" data-bs-toggle="tab" href="#configuracion">Configuración de Cuenta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  onclick="CerrarSesion()">cerrar sesión </a>
            </li>
        </ul>

        <!-- Contenido de las Tabs -->
        <div class="tab-content mt-3">
            <!-- Perfil del Usuario -->
            <div class="tab-pane fade show active" id="perfil">
                <h2>Perfil del Usuario</h2>
                <form id="perfil-form">
                    <div class="mb-3">
                        <label for="nombrePerfil" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombrePerfil" value="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="emailPerfil" class="form-label">email</label>
                        <input type="email" class="form-control" id="emailPerfil" value="" readonly>
                    </div>
                    <button type="button" class="btn btn-warning">Editar Perfil</button>
                </form>
            </div>

            <div class="tab-pane fade show " id="subidaContenidos">
<!--<form>
	
	<label class="form-label">
    titulo
    <input type="text" name="titulo" placeholder="titulo" class="form-control">
	</label>

    <label class="form-label">
    descripcion 
	<textarea name="descripcion" class="form-control-plaintext" placeholder="descripcion"></textarea>
    </label>
    <button type="button" class="btn btn-success">subir</button>
</form>
  -->
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
                <h2>Historial de Compras/Descargas</h2>
                <ul class="list-group">
                    <li class="list-group-item">Compra 1: Producto A - $10.00 - 01/01/2024</li>
                    <li class="list-group-item">Compra 2: Producto B - $15.00 - 05/01/2024</li>
                    <li class="list-group-item">Descarga 1: Archivo X - 10/01/2024</li>
                    <li class="list-group-item">Descarga 2: Archivo Y - 12/01/2024</li>
                </ul>
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

        </div>

                  <div class="tab-pane fade show " id="Noticias">
	    <div class="container">
        <h1 class="text-center">Blog/Noticias</h1>

        <!-- Artículos sobre tendencias en contenidos digitales -->
        <h2>Tendencias en Contenidos Digitales</h2>

        <div class="post">
            <div class="post-title">Las Nuevas Tendencias en Marketing de Contenidos para 2024</div>
            <div class="post-date">Publicado el 10 de enero de 2024</div>
            <div class="post-excerpt">
                <p>El marketing de contenidos continúa evolucionando. En este artículo, exploraremos las tendencias más importantes que marcarán la pauta en 2024, desde la personalización hasta el contenido interactivo...</p>
                <a href="#" class="btn btn-link">Leer más</a>
            </div>
        </div>

        <div class="post">
            <div class="post-title">Cómo la IA Está Transformando la Creación de Contenidos</div>
            <div class="post-date">Publicado el 5 de enero de 2024</div>
            <div class="post-excerpt">
                <p>La inteligencia artificial ha revolucionado la forma en que creamos y consumimos contenido. En este artículo, analizamos las herramientas y técnicas que están cambiando el panorama...</p>
                <a href="#" class="btn btn-link">Leer más</a>
            </div>
        </div>

        <!-- Actualizaciones sobre la plataforma -->
        <h2>Actualizaciones sobre la Plataforma</h2>

        <div class="post">
            <div class="post-title">Nueva Funcionalidad: Análisis de Rendimiento de Contenidos</div>
            <div class="post-date">Publicado el 15 de diciembre de 2023</div>
            <div class="post-excerpt">
                <p>Estamos emocionados de anunciar el lanzamiento de nuestra nueva herramienta de análisis de rendimiento, que permitirá a los creadores de contenido medir el impacto de sus publicaciones...</p>
                <a href="#" class="btn btn-link">Leer más</a>
            </div>
        </div>

        <div class="post">
            <div class="post-title">Actualización de Seguridad en la Plataforma</div>
            <div class="post-date">Publicado el 1 de diciembre de 2023</div>
            <div class="post-excerpt">
                <p>La seguridad de nuestros usuarios es nuestra prioridad. Recientemente hemos implementado nuevas medidas de seguridad para proteger mejor los datos de nuestros usuarios...</p>
                <a href="#" class="btn btn-link">Leer más</a>
            </div>
        </div>
    </div>
        </div>
	
              <div class="tab-pane fade show active" id="inicio">
	  <div class="hero">
        <h1>Bienvenido a E.M.P.E</h1>
        <p>Tu plataforma de libros donde encontrarás las mejores historias de manga. ¡Sumérgete en un mundo de fantasía y emoción!</p>
        
    </div>

    <!-- Sección Destacados -->
    <div class="container mt-5" id="explorar">
        <h2>Contenidos Populares</h2>
        <div class="row" id="contenido">

            <div class="col-md-4">
                <div class="card">
                    <img src="/src/img/1.png" class="card-img-top" alt="Manga 2">
                    <div class="card-body">
                        <h6 class="card-title">Título del Manga 2</h6>
                        <p class="card-text">Un breve resumen de lo que trata el Manga 2.</p>
                        <a href="#" class="btn btn-primary">Leer Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/src/img/1.png" class="card-img-top" alt="Manga 3">
                    <div class="card-body">
                        <h6 class="card-title">Título del Manga 3</h6>
                        <p class="card-text">Un breve resumen de lo que trata el Manga 3.</p>
                        <a href="#" class="btn btn-primary">Leer Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
          </div>
          
          </div>
          
