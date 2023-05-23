<?php
include "back_end/coon.class.php";
include "back_end/head.php";
?>




<body>

   <?php require "back_end/nav.php" ?>

    <p id="ttt"> Personal Information</p> <br>


    <img src="imge/personal.png" width="370" height="425" align="right" class="im">
    <pre id="t">
      <!-- select all columns -->
        <?php $sql = "SELECT * FROM personal_information";
        //  The $db object represents a database connection 
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //  the $rows variable will contain all the rows from the "personal_information" table.
        ?>
     Full Name:                <b><?php echo $rows[0]["FullName"] ?></b>
                                           

             Gender:                   <b><?php echo $rows[0]["Gender"] ?></b>
  

             Birth Date:               <b><?php echo $rows[0]["Birth Date"] ?></b>
                                           

             Nationality:              <b> <?php echo $rows[0]["Nationality"] ?></b>


             Place of Birth:           <b><?php echo $rows[0]["Place_Birth"] ?>            


             Job title:                <b><?php echo $rows[0]["Job_title"] ?></b>


             Year of experience:       <b><?php echo $rows[0]["experience"] ?> years</b>




             </pre>





</body>

</html>