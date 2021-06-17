<?php

require_once "class_conexion.php";

class Deporte extends Conexion{
    private $deporte;
    private $hora;
    private $int_horaria;
    private $profesor;
    private $cant_estudiantes;
    private $conexion;

    function __construct()
    {
        $this->conexion=new Conexion();
        $this->conexion =$this->conexion->conexion_bd_bictia();
    }

    function guardar_deporte($deporte_form,$hora_form,$inthoraria_form,$profesor_form,$cantestud_form){
        $this->deporte=$deporte_form;
        $this->hora=$hora_form;
        $this->int_horaria=$inthoraria_form;
        $this->profesor=$profesor_form;
        $this->cant_estudiantes=$cantestud_form;

        $query_consulta="INSERT INTO actividades_deportivas(deporte,Hora,Intensidad_Horaria,Profesor,Cantidad_Estudiantes)VALUES(?,?,?,?,?)";
        $insert=$this->conexion->prepare($query_consulta);
        $array_data_user = array(
            $this->deporte,
            $this->hora,
            $this->int_horaria,
            $this->profesor,
            $this->cant_estudiantes,
        ) ;
        $insert->execute($array_data_user);
        return "Registro exitoso";
    }
    function listar_deportes(){
        $p_consulta = "SELECT * FROM actividades_deportivas";
        $consulta = $this->conexion->query($p_consulta);
        $resultado = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $resultado;
    }

}
