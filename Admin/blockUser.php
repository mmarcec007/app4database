<?php 
      mysql_connect("localhost", "root", "cobrax01") or die("Connection Failed"); 
      mysql_select_db("mark_mtpanel")or die("Connection Failed");
      
      // user 
      $ID_usToBlock = $_GET['ID_ToBlock'];  
      
      //***************************************************************************************************************
      // update user
      $query = "UPDATE ima_profil SET statusProfila = 'blokiran' WHERE ID_us = '$ID_usToBlock'";
      
      if(!mysql_query($query)) { 
            die('Error: ' . mysql_error());
      }
      
      
      else {
            header('location:table.php');
      }
      
?>