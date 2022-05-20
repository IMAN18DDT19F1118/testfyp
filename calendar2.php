<?php
function build_calendar($month, $year)
{
    $mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');
    $stmt = $mysqli->prepare("select * from temujanji where MONTH(tarikh)=? AND YEAR(tarikh)=?");
    $stmt->bind_param('ss', $month, $year);
    $bookings = array();
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $booking[] = $row['tarikh'];
            }
            $stmt->close();
        }
    }

    $daysOfWeek = array('Ahad', 'Isnin', 'Selasa', 'Rabu', 'Khamis', 'Jumaat', 'Sabtu');

    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

    $numberDays = date('t', $firstDayOfMonth);

    $dateComponents = getdate($firstDayOfMonth);

    $monthName = $dateComponents['month'];

    $dayOfWeek = $dateComponents['wday'];

    $dateToday = date('Y-m-d');

    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2>";

    $calendar .= "<a class='btn btn-xs btn-primary' href='?month=" . date('m', mktime(0, 0, 0, $month - 1, 1, $year)) . "&year=" . date('Y', mktime(0, 0, 0, $month - 1, 1, $year)) . "'>Bulan Sebelum</a> ";

    $calendar .= " <a class='btn btn-xs btn-primary' href='index.php'?month='" . date('m') . "' data-year='" . date('Y') . "'>Bulan Semasa</a> ";

    $calendar .= "<a class='btn btn-xs btn-primary'href='?month=" . date('m', mktime(0, 0, 0, $month + 1, 1, $year)) . "&year=" . date('Y', mktime(0, 0, 0, $month + 1, 1, $year)) . "'>Bulan Seterusnya</a></center><br>";


    $calendar .= "<tr>";
    // Create the calendar headers 
    foreach ($daysOfWeek as $day) {
        $calendar .= "<th class='header'>$day</th>";
    }

    $currentDay = 1;
    // Initiate the day counter

    $calendar .= "</tr><tr>";

    // display consists of exactly 7 columns.
    if ($dayOfWeek > 0) {
        for ($k = 0; $k < $dayOfWeek; $k++) {
            $calendar .= "<td></td>";
        }
    }



    $month = str_pad($month, 2, "0", STR_PAD_LEFT);

    while ($currentDay <= $numberDays) {

        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }

        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";

        $dayname = strtolower(date('l', strtotime($date)));
        $eventNum = 0;
        $today = $date == date('Y-m-d') ? "today" : "";

        if ($date < date('Y-m-d')) {
            $calendar .= "<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>T/T</button>";
        } elseif ($dayOfWeek == 0 || $dayOfWeek == 6) {
            $calendar .= "<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>T/T</button>";
        } else{
            $totalbookings=checkSlots($mysqli,$date);
            if($totalbookings==3){
                $calendar.="<td class='$today'><h4>$currentDay</h4><button class='btn btn-primary btn-xs'>T/P</button>";
            }
            else {
                $calendar .= "<td class='$today'><h4>$currentDay</h4> <a href='login.php' class='btn btn-success btn-xs'>Tempah</a>";
            }
        }


        $calendar .= "</td>";
        //Seventh column (Sabtu) reached. Start a new row. 
        $currentDay++;
        $dayOfWeek++;
    }

    if ($dayOfWeek != 7) {
        $remainingDays = 7 - $dayOfWeek;
        for ($i = 0; $i < $remainingDays; $i++) {
            $calendar .= "<td></td>";
        }
    }

    $calendar .= "</tr>";
    $calendar .= "</table>";

    echo $calendar;
}

function checkSlots($mysqli,$date){
    $stmt = $mysqli->prepare("select * from temujanji where tarikh = ?");
    $stmt->bind_param('s', $date);
    $totalbookings = 0;
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $totalbookings++;
                }
            $stmt->close();
            }
        }
    return $totalbookings;
   }

?>



<style>
    table {
        table-layout: fixed;
    }

    td {
        width: 33%;
    }

    .today {
        background: yellow;
    }
</style>

<?php
$dateComponents = getdate();
if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
} else {
    $month = $dateComponents['mon'];
    $year = $dateComponents['year'];
}
echo build_calendar($month, $year);
?>
