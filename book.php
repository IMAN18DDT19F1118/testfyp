<?php

if(isset($_GET['date'])){
    $date = $_GET['date'];
}

$duration = 60;
$cleanup = 0;
$start = "09.00";
$end = "12.00";


    function timeslots($duration,$cleanup,$start,$end){
        $start = new DateTime($start);
        $end = new DateTime($end);
        $interval = new DateInterval("PT".$duration."M");
        $cleanupInterval = new DateInterval("PT".$cleanup."M");
        $slots = array();

        for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)){
            $endPeriod = clone $intStart;
            $endPeriod->add($interval);
            if($endPeriod>$end){
                break;
            }
            $slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");
        }

        return $slots;
    }
?>

    <div class="container">
        <h1 style="color: black" class="text-center">Book for Date: <?php echo date('d/m/Y', strtotime($date)); ?></h1><hr>
        <div class="row">
           <?php
                $timeslots = timeslots($duration,$cleanup,$start,$end);
                foreach($timeslots as $ts){
            ?>
            <div class="col-md-2">
                <div class="form-group">
                <?php echo "<a class='btn btn-success' href='rujukan.php? tarikh2=$date&masa2=$ts' value=$ts> $ts </a>";  ?>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
