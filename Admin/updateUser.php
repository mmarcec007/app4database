<?php 
      mysql_connect("localhost", "root", "cobrax01") or die("Connection Failed"); 
      mysql_select_db("mark_mtpanel")or die("Connection Failed");
      
      // user 
      $ID_us = $_GET['ID_us'];  
      $ime_us = $_GET['ime_us']; 
      $prezime_us = $_GET['prezime_us'];
      
      //profile
      $stari_naziv_pro =  $_GET['stari_naziv_pro'];
      $novi_naziv_pro = $_GET['naziv_pro'];
      $vrsta_pro = $_GET['vrsta_profila'];
      
      // address
      $nazivMjesto = $_GET['mjesto'];
      $adresa = $_GET['adresa'];
      
      // order
      $ID_pa = $_GET['ID_pa'];
      $ID_cl = $_GET['ID_cl'];
      
      // connection
      $ID_cvor = $_GET['ID_cvor'];
      $ID_cvor_stari = $_GET['ID_cvor_stari'];
      
      //***************************************************************************************************************
      // update user
      $query = "UPDATE user SET ime_us = '$ime_us', prezime_us = '$prezime_us' WHERE ID_us = '$ID_us'";
      
      // update profile
      $query2 = "UPDATE profile SET naziv_pro = '$novi_naziv_pro' WHERE naziv_pro = '$stari_naziv_pro'";
      $query3 = "UPDATE ima_profil SET naziv_pro = '$novi_naziv_pro', vrsta_pro = '$vrsta_pro' WHERE ID_us = '$ID_us'"; 
      
      // update address
      $query4 = "UPDATE boraviu SET nazivMjesto = '$nazivMjesto', adresa = '$adresa' WHERE ID_us = '$ID_us'"; 
      
      // packet
      $query5 = "UPDATE je_platio SET ID_pa = '$ID_pa', ID_cl = '$ID_cl' WHERE ID_us = '$ID_us'";
      
      // connected
      $query6 = "UPDATE jeSpojen SET ID_cvor = '$ID_cvor' WHERE ID_us = '$ID_us'";
      $query7 = "UPDATE cvor SET brSpojenikKorisnika = brSpojenikKorisnika + 1 WHERE ID_cvor = '$ID_cvor'";
      $query8 = "UPDATE cvor SET brSpojenikKorisnika = brSpojenikKorisnika - 1 WHERE ID_cvor = '$ID_cvor_stari'";
      
      if(!mysql_query($query)) { 
            die('Error: ' . mysql_error());
      }
      
      if(!mysql_query($query2)) { 
            die('Error: ' . mysql_error());
      }
      
      if(!mysql_query($query3)) { 
            die('Error: ' . mysql_error());
      }
      
      if(!mysql_query($query4)) { 
            die('Error: ' . mysql_error());
      }
      
      if(!mysql_query($query5)) { 
            die('Error: ' . mysql_error());
      }
      
      if(!mysql_query($query6)) { 
            die('Error: ' . mysql_error());
      }
      
      if(!mysql_query($query7)) { 
            die('Error: ' . mysql_error());
      }
      
      if(!mysql_query($query8)) { 
            die('Error: ' . mysql_error());
      }
      
      else {
            header('location:table.php');
      }
      
?>