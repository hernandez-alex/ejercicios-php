<?php
  $txtNombre = "";
  $rdgLenguaje = "";
  $chkphp = "";
  $chkcmm = "";
  $chkcss = "";
  $txtComentario = "";

  if($_POST){
    $txtNombre = (isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "");

    $rdgLenguaje = (isset($_POST['lenguaje']) ? $_POST['lenguaje'] : "");
    
    $chkphp = (isset($_POST['chkphp'])=="si") ? "checked" : "";
    $chkcmm = (isset($_POST['chkcmm'])=="si") ? "checked" : "";
    $chkcss = (isset($_POST['chkcss'])=="si") ? "checked" : "";

    $lsAnime = (isset($_POST['lsAnime'])) ? $_POST['lsAnime'] : "";

    $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "";

    // print_r($_POST);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if($_POST){?>
    <strong>Hola: </strong><?php echo $txtNombre; ?> <br/>

    <strong>Tu lenguaje es: </strong><?php echo $rdgLenguaje; ?> <br/>

    <strong>Estas aprendiendo: </strong><br/>
      <?php 
        echo ($chkphp == "checked")? "- php<br/>" : "";
        echo ($chkcmm == "checked")? "- c++<br/> " : "";
        echo ($chkcss == "checked")? "- css" : ""; 
      ?> <br/>

    <strong>¿Qué anime te gusta?</strong><br/>
    <?php echo $lsAnime ?> <br/>

    <strong>Tu mensaje es: </strong>
    <?php echo $txtComentario; ?>

  <?php }?>

  <form action="ejercicio31.php" method="post">
    Nombre: <br/>
    <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
    <br/><br/>

    Te gusta:
    <br/> php: <input type="radio" <?php echo ($rdgLenguaje=="php")? "checked" : "" ?> name="lenguaje" value="php" id=""> 
    <br/> c++: <input type="radio" <?php echo ($rdgLenguaje=="c++")? "checked" : "" ?> name="lenguaje" value="c++" id=""> 
    <br/> css: <input type="radio" <?php echo ($rdgLenguaje=="css")? "checked" : "" ?> name="lenguaje" value="css" id=""> <br/>
    
    Estas aprendiendo...
    <br/> php: <input type="checkbox" <?php echo $chkphp ?> name="chkphp" value="si" id="">
    <br/> c++: <input type="checkbox" <?php echo $chkcmm ?> name="chkcmm" value="si" id="">
    <br/> css: <input type="checkbox" <?php echo $chkcss ?> name="chkcss" value="si" id=""> <br/>

    ¿Qué anime te gusta? <br/>
    <select name="lsAnime" id="" >
      <option value="" > [Ninguna serie]</option>
      <option value="naruto" <?php echo ($lsAnime=="naruto")?"selected":"" ?> > Naruto</option>
      <option value="bleach" <?php echo ($lsAnime=="bleach")?"selected":"" ?> > Bleach</option>
      <option value="dragon" <?php echo ($lsAnime=="dragon")?"selected":"" ?> > Dragon Ball</option>
    </select> <br/>

    ¿Tienes alguna duda? <br/>
    <textarea name="txtComentario" id="" cols="30" rows="10">
      <?php echo $txtComentario; ?>
    </textarea> <br/>

    <br/> <input type="submit" value="Enviar información">
  </form>
</body>
</html>