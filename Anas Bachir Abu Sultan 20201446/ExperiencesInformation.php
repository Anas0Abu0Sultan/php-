<?php
include "back_end/coon.class.php";
include "back_end/head.php";
?>




<body>

    <?php require "back_end/nav.php" ?>

    <h1 id="ttt"> All Experiences Information  </h1>
        
    <?php

$sql = "SELECT * FROM experience";


$stmt = $db->query($sql);


$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
 <tbody class="tbody">
<?php





foreach ($rows as $course) {


?>
        
        <h4> <?php echo $course['name']?> <sub> <?php echo $course['Institution']?></sub></h4>
        <h5> from  <?php echo $course['Start_date']?> to  <?php echo $course['End_date']?> </h5>
        <p> <?php echo $course['Nots']?>
            
            
            .</p>
        
        
        

        <?php }?>
        
        
        
    </body>
</html>
