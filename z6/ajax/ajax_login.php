<?php
$db=mysqli_connect("localhost", "root", "", "PVA_vezba");
mysqli_query($db, "SET NAMES utf8");
$odgovor["greska"]="";
$odgovor["stranica"]="";
if(isset($_POST['email']) and isset($_POST['lozinka']))
{
    $email=$_POST['email'];
    $lozinka=$_POST['lozinka'];
    if($email!="" and $lozinka!="")
    {
        $upit="SELECT * FROM korisnici WHERE email='{$email}'";
        $rez=mysqli_query($db, $upit);
        if(mysqli_num_rows($rez)==1)
        {
            $red=mysqli_fetch_object($rez);
            if($lozinka==$red->lozinka)
            {
                session_start();
                $_SESSION['id']=$red->id;
                $_SESSION['ime']=$red->ime." ".$red->prezime;
                $_SESSION['status']=$red->status;
                $odgovor['stranica']="stranica.php";
            }
            else
                $odgovor['greska']="Pogrešna lozinka za korisnika '{$email}'!!!";
        }
        else
            $odgovor['greska']="Ne postoji korisnik '{$email}'!!!";
    }
    else
        $odgovor['greska']="Svi podaci su obavezni!!!";
}
else
    $odgovor['greska']="Nisu poslati podaci!!!";
echo JSON_encode($odgovor, 256);
?>