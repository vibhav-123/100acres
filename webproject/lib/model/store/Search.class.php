<?php
class SEARCH extends TABLE
{
        public function __construct($dbname="")
        {
                parent::__construct($dbname);
        }
        public function search($city, $minprice, $maxprice, $bedrooms, $page)
        {       

           //$sql= array();
                if($city)
                {
                    $sql[]="city=:CITY";
                    $map['CITY']=$city;
                }
                if($minprice)
                {
                    $sql[]="expected_price>:LPRICE";
                    $map['LPRICE']=$minprice;
                }
                 if($maxprice)
                {
                    $sql[]="expected_price<:MPRICE";
                    $map['MPRICE']=$maxprice;
                }
                 if($bedrooms)
                {
                    $sql[]="bedrooms>:BEDROOM";
                    $map['BEDROOM']=$bedrooms;
                }

                if(!is_array($sql))
                    $sql[]=1;

               // $count=$this->db->prepare($sqlStr);
                
                $offset=($page-1)*4;

                $sqlStr="SELECT SQL_CALC_FOUND_ROWS * FROM 100acres.POSTING where ".implode(" and ",$sql) ." limit $offset,4";


                //echo $sqlStr;

                $res=$this->db->prepare($sqlStr);

              if( !empty($city)) {$res->bindValue(":CITY", $city, PDO::PARAM_STR);}

              if (!empty($minprice)) {$res->bindValue(":LPRICE", $minprice, PDO::PARAM_STR);}
              if (!empty($maxprice)) {$res->bindValue(":MPRICE", $maxprice, PDO::PARAM_STR);}
              if( !empty($bedrooms) ){$res->bindValue(":BEDROOM", $bedrooms, PDO::PARAM_STR);}
             
             // $offset=($pageno-1)*4;
              //$sql= $sql . "limit 4 offset "; 
                $res->execute();



                $fstr="select found_rows() as cnt";
                $result=$this->db->prepare($fstr);
                $result->execute();

                while($row=$res->fetch(PDO::FETCH_ASSOC))
                {
                    $data[]=$row;
                }

                $countdata=0;
                if($row=$result->fetch(PDO::FETCH_ASSOC))
                {
                    echo "string";
                    $countdata=$row['cnt'];
                }

                $array[0]=$countdata;
                $array[1]=$data;
                
                return $array;
                
        }

}
?>
