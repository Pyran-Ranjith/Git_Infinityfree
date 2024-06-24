<?php 
require_once './includes/_essentials.php';

    class booking{
        // private database object\
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }

        public function insertBooking($name, $phone, $email, $personscount, $date) {
            try {
                    // define sql statement to be executed
                    $sql = "INSERT INTO ft_01_bookings (name, phone, email, personscount, date) VALUES (:name, :phone, :email, :personscount, :date)";
                    //echo _alert_link($sql, "info", "./view-admin-records.php", "Press following link to ", "Go back.");                return false;
                    echo "<script>console.log('$sql: " . $sql. "' );</script>";                    //prepare the sql statement for execution
                    $stmt = $this->db->prepare($sql);
                    // bind all placeholders to the actual values
                    $stmt->bindparam(':name',$name);
                    $stmt->bindparam(':phone',$phone);
                    $stmt->bindparam(':email',$email);
                    $stmt->bindparam(':personscount',$personscount);
                    $stmt->bindparam(':date',$date);
                    
                    // execute statement
                    $stmt->execute();
                    return true;
                
        
            } catch (PDOException $e) {
                //echo $e->getMessage();
                echo _alert_link($e->getMessage(), "danger", "", "Press following link to ", "Go back.");                return false;
                return false;
            }
        }

        public function getBookings(){
            try{
                $sql = "SELECT * FROM ft_01_bookings";
                $result = $this->db->query($sql);
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteBooking($id){
            try{
                 $sql = "delete from ft_01_bookings where id = :id";
                 $stmt = $this->db->prepare($sql);
                 $stmt->bindparam(':id', $id);
                 $stmt->execute();
                 return true;
             }catch (PDOException $e) {
                 echo $e->getMessage();
                 return false;
             }
         }
 
 //////////////////////////////////////////////////////////////////////////////////////        

/*     public function updateAdmin($id, $firstname){
        try{
                $sql = "UPDATE `admins` SET `adminname`=:fname, `email`=:emailaddress, `password`=:password1 WHERE id = :adminid ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':adminid',$id);
                $stmt->bindparam(':fname',$firstname);
                $stmt->bindparam(':emailaddress',$email);
                $stmt->bindparam(':password1',$password);
                
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
            }
        }
 */
        public function updateAdmin1($id, $firstname){
            try{
                //$sql = "select count(*) as num from admins where id = :id";
                //$sql = "SELECT count(*) as reccount, id, email,  adminname, password FROM  admins where id = :id";
                //$sql = "UPDATE `admins` SET `adminname`=:fname, `email`=:emailaddress, `password`=:password1 WHERE id = :adminid ";
                $sql = "UPDATE `admins` SET `adminname`=:fname WHERE id = :adminid ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':adminid',$id);
                $stmt->bindparam(':fname',$firstname);
                //$stmt->bindparam(':emailaddress',$email);
                //$stmt->bindparam(':password1',$password);
                
                $stmt->execute();
                //$result = $stmt->fetch();
                return true;
            }catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
            }
        }

        public function updateAdminOld($id){
            try{
                //$sql = "select count(*) as num from admins where id = :id";
                //$sql = "SELECT count(*) as reccount, id, email,  adminname, password FROM  admins where id = :id";
                $sql = "delete from admins where id = :id";
                $sql = "UPDATE `admins` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`emailaddress`=:email,`contactnumber`=:contact,`specialty_id`=:specialty WHERE attendee_id = :id ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                
                $stmt->execute();
                $result = $stmt->fetch();
                return true;
            }catch (PDOException $e) {
                //_redirect('../admin-panel/view-admin-records.php');
                //echo $e->getMessage();
                    //return false;
            }
        }

        public function deleteAdmin($id){
            try{
                //$sql = "select count(*) as num from admins where id = :id";
                //$sql = "SELECT count(*) as reccount, id, email,  adminname, password FROM  admins where id = :id";
                $sql = "delete from admins where id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                
                $stmt->execute();
                $result = $stmt->fetch();
                return true;
            }catch (PDOException $e) {
                //echo _alert_link("Error occurs.", "danger", "../admin-panel/view-admin-records.php", "<br>Press here to ", "Go back.");
                //header('location: "../admin-panel/view-admin-records.php"');
                    //echo $e->getMessage();
                    return false;
            }
        }

        public function getAdminByEmailAndPassword($email, $password){
            try{
                $hash_password = md5($password);
                //echo $hash_password;
                $sql = "SELECT count(*) as reccount, id, email,  adminname, password FROM  admins where email = :email AND password = :password ";
                //$sql = "SELECT count(*) as reccount, id, email,  adminname, password FROM  admins where adminname = :adminname AND email = :email AND password = :password ";
                ///$sql = "SELECT count(*) as reccount, email,  password FROM  admins where adminname = '".$adminname."' AND email = '".$email."' AND password = '".$password."' ";
                //echo $sql;
                 $stmt = $this->db->prepare($sql);
                //$stmt->bindparam(':adminname', $adminname);
                $stmt->bindparam(':password', $hash_password);
                $stmt->bindparam(':email', $email);
                // echo $stmt;
                 $stmt->execute();
                $result = $stmt->fetch();
                //$result = $this->db->query($sql);
                return $result;
           }catch (PDOException $e) {
                //echo $e->getMessage();
                //echo '<div class="alert alert-danger">'.$e->getMessage().'</div>';
                echo _alert_link($e->getMessage(), "danger", "./view-admin-records.php", "Press following link to ", "Go back.");                return false;
            }
        }

        public function getAdminUnique($adminname, $password, $email){
            try{
                $hash_password = md5($password);
          
                //echo $hash_password;
                $sql = "SELECT count(*) as reccount, id, email,  adminname, password FROM  admins where email = :email AND password = :password ";
                //$sql = "SELECT count(*) as reccount, id, email,  adminname, password FROM  admins where adminname = :adminname AND email = :email AND password = :password ";
                ///$sql = "SELECT count(*) as reccount, email,  password FROM  admins where adminname = '".$adminname."' AND email = '".$email."' AND password = '".$password."' ";
                //echo $sql;
                 $stmt = $this->db->prepare($sql);
                //$stmt->bindparam(':adminname', $adminname);
                $stmt->bindparam(':password', $hash_password);
                $stmt->bindparam(':email', $email);
                // echo $stmt;
                 $stmt->execute();
                $result = $stmt->fetch();
                //$result = $this->db->query($sql);
                return $result;
           }catch (PDOException $e) {
                //echo $e->getMessage();
                //echo '<div class="alert alert-danger">'.$e->getMessage().'</div>';
                echo _alert_link($e->getMessage(), "danger", "./view-admin-records.php", "Press following link to ", "Go back.");                return false;
            }
        }

        public function getAdminById($id){
            try{
                //$sql = "select count(*) as num from admins where id = :id";
                $sql = "SELECT count(*) as reccount, id, email,  adminname, password FROM  admins where id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
            }
        }

        public function getAdminbyAdminname($adminname){
            try{
                $sql = "select count(*) as num from admins where adminname = :adminname";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':adminname',$adminname);
                
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
            }
        }
    }
?>