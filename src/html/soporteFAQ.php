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
	