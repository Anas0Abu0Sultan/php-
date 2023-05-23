<?php
include "back_end/coon.class.php";
include "back_end/head.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $db->prepare("INSERT INTO course (name, Hours, Start_date, End_date, Institution, URL, File, Note) VALUES (:name, :Hours, :Start_date, :End_date, :Institution, :URL, :File, :Note)");

        $stmt->bindParam(":name", $_POST['name']);
        $stmt->bindParam(":Hours", $_POST['Hours']);
        $stmt->bindParam(":Start_date", $_POST['Start_date']);
        $stmt->bindParam(":End_date", $_POST['End_date']);
        $stmt->bindParam(":Institution", $_POST['Institution']);
        $stmt->bindParam(":URL", $_POST['URL']);
        $stmt->bindParam(":File", $_POST['File']);
        $stmt->bindParam(":Note", $_POST['Note']);

        $stmt->execute();

        $masseg= "Data inserted successfully";
    } catch (PDOException $e) {
        $masseg= "Error: " . $e->getMessage();
    }
}

?>

<body>

<?php require "back_end/nav.php" ?>
    <img src="imge/new2.jpeg" alt="d" class="imm" align="right">

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <pre>
             <label class="ma">Course Name:</label>         <input type="text" name="name" style="border-radius: 7px;"  >
             
             
            <label class="ma"> Number of Hours: </label>     <input type="number" name="Hours" style="border-radius: 7px;" >
             
             
            <label class="ma" > Start Date: </label>            <input type="date" name="Start_date" style="border-radius: 7px;">
             
             
            <label class="ma"> End Date: </label>             <input type="date" name="End_date" style="border-radius: 7px;">


            <label class="ma"> Institution: </label>            <input type="text" name="Institution" style="border-radius: 7px;">


             <label class="ma">Attachment:</label> <input type="radio" name="value" class="C6"><span class="file">File</span>   <input type="radio" name="value" class="C7"><span class="file">URL</span>
                
             

            <label class="ma" for="x"  > URL: </label>                  <input id="x" type="url" name="URL" style="border-radius: 7px;">


            <label class="ma" for="y"> File: </label>                  <input id="y" name="File" type="file">


           <label class="ma"> Note: </label>                  
                                    <textarea rows="8"  cols="50" name="Note" style="border-radius: 7px;"> </textarea>


            <input type="submit" value="Save" class="b1">                <input type="Reset" class="b2">


             </pre>










    </form>
<?php
echo $masseg??"";
$masseg="";
?>
</body>

</html>