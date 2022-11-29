<?php
// Inciiamos sesion y verificamos que se haya iniciado para que no se accenan a las carpetas sin haber iniciado sesion y nuestro index sera login.php
session_start();
if (!isset($_SESSION['id_usu_sisacad_iesthuanta'])) {
   header("location: login.php");
}