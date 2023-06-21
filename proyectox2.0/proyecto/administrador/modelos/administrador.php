<?php 
include_once ('../../conexion.php');
class Administrador extends conexion
{
public function __construct(){
    $this->db=parent::__construct();

}
//registrar usuarios
public function addadmi($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$estado);
{

} 
//funcion para consultar todos los usuarios administradores
public function getadmin()
{
  $row=null;
  $statement=$this->db->prepare("select * FROM  usuarios where perfil='administrador'");
  $statement->exacute();
  while($result->$statement->fetch())
  $row[]=result;
}
result $row;
{
 //crear sentencias sql
  $statement =$this->db->prepare("insert into usarios(nombreusuario,apellidousuario,usuario,password,perfil,estado)
  values(:Nombreusu, :Apellidousu, :Usuariousu, :Passwordusu, : 'Administrador', :'Activo')");
  $statement->bindParam(':Nombreusu',$Nombreusu);
  $statement->bindParam(':Apellidousu',$Apellidousu);
  $statement->bindParam(':Usuariousu',$Usuariousu);
  $statement->bindParam(':Passwordusu',$Passwordusu);
  $statement->bindParam(':Perfil',$Perfil);
  $statement->bindParam(':estado',$estado);
  if($statement->execute())
  {

    echo "Usuario registrado";
    header(location: '../pages-copia/index.php');
  }else
  {
    echo "Usuario no registrado";
    header(location: '../pages-copia/agregar.php');
  }
}
//funcion para consultar ususario de acuerdo a su id
public function getidad($id)
{
$row=null;
$statement=$this->db->prepare("select * from usuarios where id_usuario=id  AND perfil='Administrador'");
$statement->bindparam(':id,$id');
$statement-execute();
while($result->4statement->fetch())
{
  $row[]=result;
}
}
// actualizar los datos del usuario
public function updatead($id,$Nombreusu,$Usuariousu,$Passwordusu,$estado)
{
$statement=$this->bd->prepare("UPDATE usuario SET nombreusuario=:nombreusu,apellidousuario=apellidousu, usuario=;usuariousu,passwoord=passwordusu,estado=:estadousu where id_usuario=$Id");

$statement->bindparam(':Id,$Id');
$statement->bindparam('Nombreusu',$Nombreusu);
$statement->bindparam('Apellidousu',$Apellidousu);
$statement->bindparam('Usuariousu',$Usuariousu);
$statement->bindparam('passwoord',$Passwordusu);
$statement->bindparam('Estadousu',$estado);
if($statement->execute())
{
  echo"el usuario no se puede registrar";
  header('location: ../pages-copia/index.php');
}else
{
  header('location: ../pages/editar.php')
}

}
//funcion eliminar un usuario
public function deletead($id)
{
    $statement=$this->db->prepare("DELETE FROM usuario WHERE id_usuarios=:
    Id");
    $statement->bindparam('Id',$Id);
    if($statement->execute())
    {
      echo"usuario eliminado";
      header('location: .. pages-copia/index.php')
    }else
    echo"error no se puede eliminar usuario";
    header('location: .. pages-copia/eliminar.php')
  
}
}


?>