<?php
class DETAIL extends TABLE
{
        public function __construct($dbname="")
        {
                parent::__construct($dbname);
        }
        public function detail($email)
        {       

           

                $sql="SELECT * FROM 100acres.POSTING where email=:EMAIL";



                $res=$this->db->prepare($sql);

                $res->bindValue(":EMAIL", $email, PDO::PARAM_STR);
                $res->execute();


                while($row=$res->fetch(PDO::FETCH_ASSOC))
                {
                    $data[]=$row;
                }


                return $data;
                }

}
?>
