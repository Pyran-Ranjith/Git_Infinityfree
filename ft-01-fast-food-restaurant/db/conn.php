<?php
require_once './includes/parameters.php';
//Initial Parameters to be set wehn the host changes
$hosttype = $_SESSION['hosttype'];
$hostname = $_SESSION['hostname'];
$ip_server = $_SERVER['SERVER_ADDR'];

$projectfolder = $_SESSION['projectfolder'];
$path_ =  $_SERVER['DOCUMENT_ROOT'].'/'.$projectfolder;
$pathlocalhost_ =  $hostname.'/'.$projectfolder;

// Server selection
if ($ip_server == "127.0.0.7") {
    $hosttype = 'remote';
    $hostname = 'infinityfree';
    } else {
        $hosttype = 'local';
        $hostname = 'localhost';
    }
//Db connection 
if ($hostname == "localhost") {
    $host = "localhost";
    $dbname = "ft-01-fast-food-restaurant";
    $user = "root";
    $pass = "";
} elseif ($hostname == "infinityfree") {
    $host = "sql312.infinityfree.com";
    $dbname = "if0_34821597_Ud_04_mahiblog";
    $user = "if0_34821597";
    $pass = "q6CJCIvgPj9zjh5";
}

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ///echo "My SQL db " . $dbname . " Connected Successfully. . . ";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

require_once('./db/booking.php');
require_once('./db/item.php');
$booking = new booking($pdo);
$item = new item($pdo);
$results = $booking->getBookings();
?>
  
 <!-- <div class="col">
    <div class="card">
        <div class="card-body">
         <h1 class="text-center"><?php echo $title ?></h1> 
            <a href="<?php echo "create-admin.php" ?>" class="btn btn-primary mb-4 text-center float-right">Create Admin</a>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>AName</th>
                    <th>Phone</th>
                    <th>Date</th>
                </tr>
                <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $r['id'] ?></td>
                        <td><?php echo $r['email'] ?></td>
                        <td><?php echo $r['name'] ?></td>
                        <td><?php echo $r['date'] ?></td>
                        <td>
                            <a href="view-admin.php?id=<?php echo $r['id'] ?>" class="btn btn-primary">View</a>
                            <a href="edit-admin.php?id=<?php echo $r['id'] ?>" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete-admin.php?id=<?php echo $r['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
    </div>
</div> -->
 
