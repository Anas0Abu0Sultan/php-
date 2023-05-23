<?php
include "back_end/coon.class.php";
include "back_end/head.php";
?>

<body>



    <?php require "back_end/nav.php" ?>
    <p id="ttt">All Courses Information</p>


     <table border="1" cellspacing="0" id="tb">
        <tbody>
            <tr bgcolor="606060" class="tr">
                <th rowspan="2" width="40px">#</th>
                <th rowspan="2">Course name</th>
                <th rowspan="2">Total Hours</th>
                <th colspan="2"> Date</th>
                <th rowspan="2"> Institution</th>
                <th rowspan="2">Attachment</th>
                <th rowspan="2">Notes</th>
            </tr>

            <tr bgcolor="606060" class="tr">
                <th>From</th>
                <th>To</th>

            </tr>
            <?php

            $sql = "SELECT * FROM course";


            $stmt = $db->query($sql);


            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
             <tbody class="tbody">
            <?php





            foreach ($rows as $course) {
            
           
            ?>
            <tr bgcolor="e5e5e5" class="trr">
                <td scope="row" class="al"> <?php echo $course['ID']?></td>
                <td class="all"><?php echo $course['name'] ?></td>
                <td class="al"><?php echo $course['Hours'] ?></td>
                <td class="al"><?php echo $course['Start_date'] ?></td>
                <td class="al"><?php echo $course['End_date'] ?></td>
                <td class="al"><?php echo $course['Institution'] ?></td>
                <td class="al"><a id="v" href="<?php echo $course['URL'] ?>">view</a></td>
                <td class="all"> <?php echo $course['Note'] ?></td>
            </tr>
<?php }?>




        </tbody>






        </table>









</body>

</html>