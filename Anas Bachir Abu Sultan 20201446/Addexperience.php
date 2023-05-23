<?php
include "back_end/coon.class.php";
include "back_end/head.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $db->prepare("INSERT INTO experience (name, Hours, Start_date, End_date, Institution, Nots) VALUES (:name, :Hours, :Start_date, :End_date, :Institution, :Nots)");

        $stmt->bindParam(":name", $_POST['name']);
        $stmt->bindParam(":Hours", $_POST['Hours']);
        $stmt->bindParam(":Start_date", $_POST['Start_date']);
        $stmt->bindParam(":End_date", $_POST['End_date']);
        $stmt->bindParam(":Institution", $_POST['Institution']);
        $stmt->bindParam(":Nots", $_POST['Nots']);

        $stmt->execute();

        $masseg = "Data inserted successfully";
    } catch (PDOException $e) {
        $masseg = "Error: " . $e->getMessage();
    }
}

?>

<body>

    <?php require "back_end/nav.php" ?>
    <img src="imge/new1.jpeg" alt="r" class="immm" align="right">

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <pre>
       <label class="ma">Course Name:</label>        <input type="text" name="name" style="border-radius: 7px;" size="16">
     
     

  <label class="ma"> Number of Hours: </label>      <input type="number" name="Hours" style="border-radius: 7px;" >
             
     

     
       <label class="ma"> Start Date: </label>        <input type="date" name="Start_date" style="border-radius: 7px;" size="16">
     
     

        <label class="ma"> End Date: </label>        <input type="date" name="End_date" style="border-radius: 7px;" size="16">



     <label class="ma"> Institution: </label>          <input type="text" name="Institution" style="border-radius: 7px;" size="16">



           <label class="ma"> Notes:   </label>                            
           <textarea rows="8"  cols="50" name="Nots" style="border-radius: 7px;"> </textarea>                
     

  
      <input type="submit" value="Save" class="b1">                <input type="Reset" class="b2">

     </pre>










    </form>
    <?php
    echo $masseg ?? "";
    $masseg = "";
    ?>
</body>

</html>