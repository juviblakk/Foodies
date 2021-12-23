<?php
    class crud{
        private $db;

        //constructor to initialize private variable to the database connection
        function __construct($conn)
        {
            $this->db = $conn;
        }
        //function to insert a new record into the attendee database


        public function insert($fname,$lname,$orderDate,$area,$email,$phone,$foodOrder,$meal){
            try{
                //define sql statement to be excuted
                $sql= "INSERT INTO customer(firstname,lastname,orderdate,'area',email,phone,order,meal_id) VALUES (:fname,:lname,:orderdate,:area,:email,:phone,:order,:meal_id)";
                $stmt = $this-> db-> prepare($sql);

                //bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':orderdate',$orderDate);
                $stmt->bindparam(':area',$area);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':phone',$phone);
                $stmt->bindparam(':order',$foodOrder);
                $stmt->bindparam(':meal_id',$meal);

                $stmt->execute();
                return true;

            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }

        }

        public function getCustomer(){
            try{
                $sql ="SELECT * FROM `customer` a inner join meal s on a.meal_id = s.meal_id";
                $result = $this->db ->query($sql);
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function getCustomerDetails($id){
            try{
                $sql = "select * from customer a inner join meal s on a.meal_id = s.meal_id where customer_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
            
        }

        public function deleteCustomer($id){
            try{
                $sql = "DELETE FROM `customer` WHERE customer_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                return true;

            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function getMeal(){
            try{
                $sql ="SELECT * FROM `meal` ";
                $result = $this->db ->query($sql);
                return $result;

            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getMealById($id){
            try{
                $sql ="SELECT * FROM `meal` where meal_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam('id',$id);
                $stmt->execute();
                $result = $stmt ->fetch();
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
            
        }


    }
?>