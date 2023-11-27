  <html>
    <head>
       
<meta charset="utf8" lang="pl">
<link rel="stylesheet" href="styl.css">
    </head>
    <body >
      <div style="background-color:#0d1b2a; width: 100% height:100%;">

        <?php
     $con= mysqli_connect('fdb1030.awardspace.net','3720513_hotel','zaq1@WSX','3720513_hotel');
     $kw= "Select id,imie,nazwisko,data_przyjazdu,data_wyjazdu,nr_pokoju from goscie;";
     $drukowanie= mysqli_query($con, $kw);
     while($row = mysqli_fetch_row($drukowanie))
     {
        echo " <h2> {$row[0]} . {$row[1]} {$row[2]} data zameldowania {$row[3]} data wymeldowania {$row[4]} nr pokoju:{$row[5]} </h2><br>  ";
     }
 
        ?>
      </div>
       
    </body>
</html>