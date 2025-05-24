<?php
class guardarArchivo {
  public $target_file;
  public $target_dir;
  public function __construct(string $target_dir) {
    $this->target_dir = $target_dir;
    $this->target_file = $target_dir . basename($_FILES["file"]["name"]);
  }
  public function CrearDirectorioNoExistente() {
    if (!file_exists($this->target_dir)) {
      mkdir($this->target_dir, 0777, true);
    }
  }
  public function guardar() {
    if (file_exists($this->target_file)) {
      echo "Lo siento, el archivo ya existe.";
    } else {
      // Intentamos mover el archivo subido a la carpeta deseada
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $this->target_file)) {
        echo "El archivo " . htmlspecialchars(basename($_FILES["file"]["name"])) . " ha sido subido correctamente.";
      } else {
        echo "Lo siento, ha habido un error al subir tu archivo.";
      }
    }
  }



}