<?php

interface iUsuaro
{
  public function registrarDatos($datos);
  public function consultarDatos($datos);
  public function editarDatos($datos);
  public function eliminarDatos($datos);
}

abstract class Usuario implements iUsuaro
{
  protected $tabla;
  protected $campos;
  protected $conn;
  protected $consulta;
  protected $registrar;
  protected $editar;
  protected $eliminar;
  public function __construct($tabla = "Usuarios")
  {
    $this->tabla = $tabla;

    $this->conn = new ConsultasBD();
    $this->consulta = new Consultar();
    $this->registrar = new Registrar();
    $this->editar = new Editar();
    $this->eliminar = new Eliminar();
  }
  public function registrarDatos($datos)
  {
    $datos["tabla"] = $this->tabla;
    $sql = $this->registrar->generar_sql($datos);

    $this->conn->ejecutarConsulta($sql);
  }
  public function consultarDatos($datos)
  {
    $datos["tabla"] = $this->tabla;
    $sql = $this->consulta->generar_sql($datos);

    return $this->conn->consultarRegistro2($sql);
  }
  public function editarDatos($datos)
  {
    $datos["tabla"] = $this->tabla;
    $sql = $this->editar->generar_sql($datos);

    return $this->conn->ejecutarConsulta($sql);
  }
  public function eliminarDatos($datos)
  {
    $datos["tabla"] = $this->tabla;
    $sql = $this->editar->generar_sql($datos);
    return $this->conn->ejecutarConsulta($sql);
  }
}

class Administrador extends Usuario
{
}
class Creador extends Usuario
{
}
class Cliente extends Usuario
{
}
