<?php
include_once "../CarpetaVista/autenticar.php";
include_once "usuario.php";
include_once "../CarpetaDatos/UsuarioDAO.php";
include_once "../CarpetaDatos/AlumnoDAO.php";
class Autenticacion
{
    function comprobarUsuario($login, $pass)
    {
        $usuDAO = new UsuarioDAO();
        $usuarios = $usuDAO->obtenerUsuario($login, $pass);
        if ($usuarios != false) {
            return $usuarios;
        } else {
            return false;
        }
    }
    function obtenerAlumno($usuario2){
        $aluDAO2= new AlumnoDAO();
        $alumnos2=$aluDAO2->obtenerAlumno($usuario2);
        if ($alumnos2 != false) {
            return $alumnos2;
        } else {
            return false;
        }
    }
}
