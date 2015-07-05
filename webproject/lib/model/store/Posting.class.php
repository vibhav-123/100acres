<?php
class POSTING extends TABLE
{
        public function __construct($dbname="")
        {
                parent::__construct($dbname);
        }

        /**
         * This function is used to find out the no of holidays falling between any 2 dates .
        **/
        public function fetchPosting($id)
        {
                $sql="SELECT * FROM 100acres.POSTING where id=:id";
                $res=$this->db->prepare($sql);
               //$res->bindValue(":TIME1", $time1, PDO::PARAM_STR);
               // $res->bindValue(":TIME2", $time2, PDO::PARAM_STR);
               // $res->execute();
                if($row = $res->fetch(PDO::FETCH_ASSOC))
                {
			$data[]=$row;
            	}
		return $data;
        }
	public function updateTable($i_am, $i_want_to, $type_of_property, $city, $address, $bedrooms, $expected_price)
        {
                $sql = "INSERT INTO 100acres.POSTING ".
       "(i_am, i_want_to, type_of_property, city, address, bedrooms, expected_price ) ".
       "VALUES('$i_am', '$i_want_to', '$type_of_property', '$city', '$address', '$bedrooms', '$expected_price')";
                $res=$this->db->prepare($sql);

                $res->execute();
                
        }

}
