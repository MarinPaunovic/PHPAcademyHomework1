<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stranica 3</title>
 <?php
include "header.php";
require_once "header.php";
 ?>

    <style>
.contact-form{
    display:flex;
}

        .wrapper{
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 550px;

            padding: 30px;
        }
    </style>
    </head>
<body>
<div class="callout">
    <a class="button float-left alert" style="border-radius: 5000px" href="Stranica1.php">Stranica 1</a>
    <a class="button float-right alert" style="border-radius: 5000px" href="#">Stranica 3</a>
    <div class="button-group align-center-middle alert">
        <a class="button" style="border-radius: 5000px" href="Stranica2.php">Stranica 2</a>
    </div>
</div>

<div>
    <p style="position: fixed; bottom: 0;width: 100%; text-align: left;margin-left: 5px">Stranica 3</p>
</div>
<form action="Stranica3.php" method="post">
    <div class="wrapper">
    <div class="column contact-form">
                <input type="text" name="broj1" placeholder="Prvi broj">
        <br>



        <select name= "dropdown" id="odabir">
            <option value="zbrajanje">+</option>
            <option value="oduzimanje">-</option>
            <option value="mnozenje">*</option>
            <option value="djeljenje">/</option>
            <option value="modul">%</option>
            <option value="jednako">=</option>
            <option value="vece"> &gt; </option>
            <option value="manje"> &lt; </option>
            <option value="vecejednako"> &gt;= </option>
            <option value="manjejednako"> &lt;= </option>

        </select>

        <input type="text" name="broj2" placeholder="Drugi broj">
<br>

        <button class="button" name="racun">Izračunaj</button>
        <div class="text-center">



    </div>

    </div>
    </div>
        <div class="text-center">

            <?php
            include "rac_operacije.php";
            if(isset($_POST["racun"])){
                racun();
            }
            ?>
        </div>
</form>


</body>
</html>
