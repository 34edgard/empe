import os
import requests
import json
import subprocess  # Para ejecutar comandos del sistema
import glob  # Para buscar archivos en el proyecto
from colorama import init, Fore, Back, Style  # Para colores en la terminal

# Inicializar colorama (para que funcione en Windows)
init()

# Obtener la clave de API desde una variable de entorno
API_KEY = "AIzaSyDykleGESQ0IG5Lz6QHXuXN4Olzi5sXRvE"  # Asegúrate de tener esta variable definida
API_ENDPOINT = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent"  # Ajusta según la API que uses

memoria = []  # Historial de la conversación
contexto = ""  # Puedes definir un contexto inicial aquí
PROJECT_PATH = ""  # Ruta al proyecto (se establecerá dinámicamente)

def cargar_codigo_proyecto(ruta_proyecto):
    """Carga el contenido de todos los archivos de código en la ruta del proyecto."""
    codigo = ""
    archivos_codigo = glob.glob(os.path.join(ruta_proyecto, "**/*.*"), recursive=True)  # Todos los archivos

    for archivo in archivos_codigo:
        try:
            with open(archivo, "r", encoding="utf-8") as f:
                codigo += f"\n\n-- Archivo: {archivo} --\n\n" + f.read()
        except Exception as e:
            print(Fore.YELLOW + f"Advertencia: No se pudo leer el archivo {archivo}.  Error: {e}" + Style.RESET_ALL)

    return codigo

def ejecutar_comando(comando):
    """Ejecuta un comando del sistema y devuelve la salida."""
    try:
        result = subprocess.run(comando, shell=True, capture_output=True, text=True, check=True)
        return result.stdout
    except subprocess.CalledProcessError as e:
        return f"Error al ejecutar el comando: {e.stderr}"
    except FileNotFoundError as e:
        return f"Error al ejecutar el comando: Comando no encontrado {e}"


def obtener_respuesta_chatbot(mensaje):
    """Envía un mensaje al chatbot Gemini y devuelve la respuesta."""
    global contexto  # Permitir modificar la variable global

    headers = {
        "Content-Type": "application/json"
    }
    params = {
        "key": API_KEY  # Incluye la clave de API como parámetro
    }

    # Agregar contexto del proyecto si está definido
    contexto_proyecto = ""
    if PROJECT_PATH:
        contexto_proyecto = f"Aquí está el código fuente del proyecto con el que debes ayudar al usuario:\n\n{cargar_codigo_proyecto(PROJECT_PATH)}\n\n"
        contexto = contexto_proyecto # Actualizar contexto con el código del proyecto
        #print(Fore.GREEN + "¡Contexto del proyecto cargado!" + Style.RESET_ALL)  # Para depuración

    data = {
        "contents": [{"parts": [{"text": contexto + json.dumps(memoria + [f"user: {mensaje}"])}]}]
    }


    try:
        response = requests.post(API_ENDPOINT, headers=headers, params=params, data=json.dumps(data))
        response.raise_for_status()  # Lanza una excepción para errores HTTP

        json_response = response.json()

        if 'candidates' in json_response and json_response['candidates']:
            bot_response = json_response['candidates'][0]['content']['parts'][0]['text']
            return bot_response
        else:
            return Fore.RED + "No se pudo obtener una respuesta válida del chatbot." + Style.RESET_ALL

    except requests.exceptions.RequestException as e:
        return Fore.RED + f"Error al contactar la API: {e}" + Style.RESET_ALL
    except (KeyError, IndexError) as e:
        return Fore.RED + f"Error al procesar la respuesta de la API: {e}" + Style.RESET_ALL


def add_chat_message(sender, message):
    """Formatea e imprime el mensaje en la consola con colores."""
    if sender == "Tú":
        print(Fore.CYAN + f"{sender}: {message}" + Style.RESET_ALL)
    else:
        print(Fore.GREEN + f"{sender}: {message}" + Style.RESET_ALL)


def reemplazar_simbolo_con_etiquetas(texto, simbolo, etiqueta_apertura, etiqueta_cierre):
    """Reemplaza símbolos con etiquetas (similar a tu función en JavaScript)."""
    contador = 0
    nuevo_texto = ""
    indice = texto.find(simbolo)

    while indice != -1:
        contador += 1
        if contador % 2 != 0:
            nuevo_texto += texto[:indice] + etiqueta_apertura
        else:
            nuevo_texto += texto[:indice] + etiqueta_cierre
        texto = texto[indice + len(simbolo):]
        indice = texto.find(simbolo)

    nuevo_texto += texto
    return nuevo_texto


def main():
    """Función principal del chatbot en línea de comandos."""
    global PROJECT_PATH  # Permite modificar la variable global

    if not API_KEY:
        print(Fore.RED + "Error: La variable de entorno GEMINI_API_KEY no está definida." + Style.RESET_ALL)
        return

    print(Fore.YELLOW + "Bienvenido al chatbot en línea de comandos!" + Style.RESET_ALL)
    print(Fore.YELLOW + "Escribe 'salir' para finalizar." + Style.RESET_ALL)

    PROJECT_PATH = input(Fore.YELLOW + "Ingresa la ruta al directorio de tu proyecto (deja en blanco si no tienes): " + Style.RESET_ALL)
    contexto = input(Fore.YELLOW + " Defina un contexto para el chatbot (dejar en blanco si no tienes)" + Style.RESET_ALL)
    if PROJECT_PATH:
        PROJECT_PATH = PROJECT_PATH.strip()  # Eliminar espacios en blanco al inicio/final

        if not os.path.isdir(PROJECT_PATH):
            print(Fore.RED + "Error: La ruta proporcionada no es un directorio válido." + Style.RESET_ALL)
            PROJECT_PATH = "" # Resetear la variable para que no interfiera
        else:
            print(Fore.GREEN + f"Usando el proyecto en: {PROJECT_PATH}" + Style.RESET_ALL)


    while True:
        mensaje = input(Fore.CYAN + "Tú: " + Style.RESET_ALL)
        if mensaje.lower() == "salir":  # Permite salir del bucle
            break

        # Detectar si el mensaje es un comando a ejecutar
        if mensaje.startswith("!ejecutar "):
            comando = mensaje[len("!ejecutar "):]
            salida = ejecutar_comando(comando)
            print(Fore.BLUE + "Resultado del comando:\n" + salida + Style.RESET_ALL)
            memoria.append(f"user: {mensaje}")
            memoria.append(f"bot: Resultado del comando:\n{salida}")
        else:
            respuesta = obtener_respuesta_chatbot(mensaje)
            memoria.append(f"user: {mensaje}")  # Agrega al historial
            memoria.append(f"bot: {respuesta}")
            respuesta_formateada = reemplazar_simbolo_con_etiquetas(respuesta, '*', Fore.MAGENTA, Style.RESET_ALL) # Usar color magenta para negritas
            add_chat_message("Chatbot", respuesta_formateada)


if __name__ == "__main__":
    main()