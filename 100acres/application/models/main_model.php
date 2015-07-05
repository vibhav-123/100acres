<?php
include "path.php"; 
class Main_model extends CI_Model{
	public function __construct(){
		parent ::__construct();
		$this->load->database();
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	// posting of PG's
	public function insertPropertyPg(){
		global $relative_property_image_path;
		$image_path=$relative_property_image_path."pg/";
		$max_pid1;
		if($_FILES["property_pic"]['name']!=""){
			
			$query_max_pid=$this->db->query("select max(pid) as pid from PROPERTY_PG");
			//$max_pid=
			foreach($query_max_pid->result() as $max_pid){
			$max_pid1=$max_pid->pid + 1;
			$image_path=$image_path.$max_pid1;
			}
			move_uploaded_file($_FILES['property_pic']['tmp_name'],$image_path);
			global $property_image_path_pg;
			$image_path=$property_image_path_pg.$max_pid1;
		}else{
			$image_path=null;
		}
		
		$this->db->insert("PROPERTY_PG",array(
				'uid' => $this->session->userdata('uid'),
				'person' => $_POST['owner'],
				'city' => $_POST['city'],
				'address' => $_POST['address'],
				'sharing' => $_POST['sharing'],
				'gender' => $_POST['gender'],
				'furnish' => 'f',
				'area' => $_POST['area'],
				'price' => $_POST['price'],
				'ppua' => $_POST['ppua'],
				'on_floor' =>$_POST['onfloor'],
				'total_floor' => $_POST['tfloor'],
				'photo_url' => $image_path,
				'created_on' => date("Y-m-d h:i:s"),
				'availability' => $_POST['date'],
		));
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	// posting residential properties
	public function insertPropertyResidential(){
		global $relative_property_image_path;
		$image_path=$relative_property_image_path."residential/";
		$max_pid1;
		if($_FILES["property_pic"]['name']!=""){
			
			$query_max_pid=$this->db->query("select max(pid) as pid from PROPERTY_RESIDENTIAL");
			//$max_pid=
			foreach($query_max_pid->result() as $max_pid){
			$max_pid1=$max_pid->pid + 1;
			$image_path=$image_path.$max_pid1;
			}
			move_uploaded_file($_FILES['property_pic']['tmp_name'],$image_path);
			global $property_image_path_residential;
			$image_path=$property_image_path_residential.$max_pid1;
		}else{
			$image_path=null;
		}
		$this->db->insert("PROPERTY_RESIDENTIAL",array(
				'uid' => $this->session->userdata('uid'),
				'person' => $_POST['owner'],
				'city' => $_POST['city'],
				'property_type'=>$_POST['purpose'],
				'address' => $_POST['address'],
				'furnish' => $_POST['furnishing'],
				'bhk' => $_POST['bhk'],
				'washroom' => $_POST['washroom_resi'],
				'balcony' => $_POST['balcony'],
				'area' => $_POST['area'],
				'price' => $_POST['price'],
				'ppua' => $_POST['ppua'],
				'on_floor' =>$_POST['onfloor'],
				'total_floor' => $_POST['tfloor'],
				'photo_url' => $image_path,
				'availability' => $_POST['date'],
				'transaction_type' => $_POST['transaction'],
				'property_ownership' => $_POST['prop_ownership'],
				'created_on' => date("Y-m-d h:i:s")
		));
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function insertPropertyCommercial(){
		global $relative_property_image_path;
		$image_path=$relative_property_image_path."commercial/";
		$max_pid1;
		if($_FILES["property_pic"]['name']!=""){
			
			$query_max_pid=$this->db->query("select max(pid) as pid from PROPERTY_COMMERCIAL");
			//$max_pid=
			foreach($query_max_pid->result() as $max_pid){
			$max_pid1=$max_pid->pid + 1;
			$image_path=$image_path.$max_pid1;
			}
			move_uploaded_file($_FILES['property_pic']['tmp_name'],$image_path);
			global $property_image_path_commercial;
			$image_path=$property_image_path_commercial.$max_pid1;
		}else{
			$image_path=null;
			
		}
		
		
		$this->db->insert("PROPERTY_COMMERCIAL",array(
				'uid' => $this->session->userdata('uid'),
				'person' => $_POST['owner'],
				'city' => $_POST['city'],
				'property_type'=>$_POST['purpose'],
				'address' => $_POST['address'],
				'furnish' => $_POST['furnishing'],
				'washroom' => $_POST['washroom_comm'],
				'area' => $_POST['area'],
				'price' => $_POST['price'],
				'ppua' => $_POST['ppua'],
				'on_floor' =>$_POST['onfloor'],
				'total_floor' => $_POST['tfloor'],
				'photo_url' => $image_path,
				'availability' => $_POST['date'],
				'transaction_type' => $_POST['transaction'],
				'property_ownership' => $_POST['prop_ownership'],
				'created_on' => date("Y-m-d h:i:s")
		));
	}
	
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getUserDetails(){
		 $query = $this->db->query("SELECT * FROM USER where uid=".$this->session->userdata['uid']);
		foreach ($query->result() as $row)
		{
		    $data=array('username'=>$row->username,'name'=>$row->name,'email'=>$row->email,'age'=>$row->age,'mob'=>$row->mob,'address'=>$row->address,'password'=>$row->password);
		}
		return $data; 
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function updateProfile(){
		$data=array('password'=>$_POST['password'],'age'=>$_POST['age'],'mob'=>$_POST['mobile'],'address'=>$_POST['address']);
		$this->db->where('uid',$this->session->userdata['uid']);
		$this->db->update('USER',$data);
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getPostings(){
		$query = $this->db->query("SELECT * FROM PROPERTY_PG where isdeleted=0 and uid=".$this->session->userdata['uid']." ORDER BY pid DESC");
		$pg_result=$query->result();
		$query = $this->db->query("SELECT * FROM PROPERTY_RESIDENTIAL where isdeleted=0 and uid=".$this->session->userdata['uid']." ORDER BY pid DESC");
		$resi_result=$query->result();
		$query = $this->db->query("SELECT * FROM PROPERTY_COMMERCIAL where isdeleted=0 and uid=".$this->session->userdata['uid']." ORDER BY pid DESC");
		$comm_result=$query->result();
		$data=array('pg'=>$pg_result,'resi'=>$resi_result,'comm'=>$comm_result);
		return $data;
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	 public function removePropertyPg(){
		$data=array('isdeleted'=>1);
		$this->db->where('pid',$_POST['pid']);
		$this->db->update('PROPERTY_PG',$data);
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function removePropertyResidential(){
		$data=array('isdeleted'=>1);
		$this->db->where('pid',$_POST['pid']);
		$this->db->update('PROPERTY_RESIDENTIAL',$data);
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function removePropertyCommercial(){
		$data=array('isdeleted'=>1);
		$this->db->where('pid',$_POST['pid']);
		$this->db->update('PROPERTY_COMMERCIAL',$data);
	} 
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function search_pg(){
		$city=$_POST['search_city'];
		$locality=$_POST['search_locality'];
		$min_price=$_POST['search_pg_min_price'];
		$max_price=$_POST['search_pg_max_price'];
		$person=$_POST['search_pg_person'];
		$sharing=$_POST['search_pg_sharing'];
		$gender=$_POST['search_pg_gender'];
	
		//$res_search_query="select *,COUNT(pid) as total_rows from PROPERTY_PG where isdeleted=0 and city='".$city."' and price > ".$min_price." and price < ".$max_price;
		$res_search_query="select * from PROPERTY_PG where isdeleted=0 and city='".$city."' and price > ".$min_price." and price < ".$max_price;
		
		if($person!="any"){
			$res_search_query=$res_search_query." and person = '".$person."'";
		}
		
		if($sharing!="any"){
			$res_search_query=$res_search_query." and sharing =".$sharing;
		}
		if($gender!="any"){
			$res_search_query=$res_search_query." and gender ='".$gender."'";
		}
		if($locality!=""){
			$res_search_query=$res_search_query." and address like '%".$locality."%'";
		}
	
		$query = $this->db->query($res_search_query);
		$query_result=$query->result();
		
		$query_result_array=array('res'=>$query_result,'search_property_type1'=>$_POST['search_property_type'],'search_type'=>$_POST['search_type'],'selected_pg_min_price'=>$_POST['search_pg_min_price'],'selected_pg_max_price'=>$_POST['search_pg_max_price'],'selected_pg_person'=>$person,'selected_pg_gender'=>$gender,'selected_pg_sharing'=>$sharing,'city'=>$city);
		return  $query_result_array;
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function search_comm_or_res(){
		$property_type=$_POST['search_type'];
		$city=$_POST['search_city'];
		$locality=$_POST['search_locality'];
		$table_name=strtoupper($_POST['search_property_type']);
		
		if($property_type=="rent"){
			$min_price=$_POST['search_rent_min_price'];
			$max_price=$_POST['search_rent_max_price'];
			$person=$_POST['search_rent_person'];
			$area=$_POST['search_rent_area'];
			
		}else if($property_type=="sell"){
			$min_price=$_POST['search_buy_min_price'];
			$max_price=$_POST['search_buy_max_price'];
			$person=$_POST['search_buy_person'];
			$area=$_POST['search_buy_area'];
		}
		
		
		//$res_search_query="select *,COUNT(pid) as total_rows from PROPERTY_".$table_name." where isdeleted=0 and city='".$city."' and price > ".$min_price." and price < ".$max_price." and property_type = '".$property_type."'";
		$res_search_query="select * from PROPERTY_".$table_name." where isdeleted=0 and city='".$city."' and price > ".$min_price." and price < ".$max_price." and property_type = '".$property_type."'";
		
		if($person!="any"){
			$res_search_query=$res_search_query." and person = '".$person."'";
		}
		if($area!="0"){
			$min_area=$area * 100;
			$max_area=$min_area + 500;
			$res_search_query=$res_search_query." and area >".$min_area." and area <".$max_area;
		}
		if($locality!=""){
			$res_search_query=$res_search_query." and address like '%".$locality."%'";
		}
		$bhk="any";
		$washroom="any";
		if($table_name=="RESIDENTIAL"){
			if($property_type=="rent"){
				$bhk=$_POST['search_rent_bhk'];
			}elseif ($property_type=="sell"){
				$bhk=$_POST['search_buy_bhk'];
			}
			if($bhk!="any"){
				$res_search_query=$res_search_query." and bhk = ".$bhk;
			}
			
			
			
		}else if($table_name=="COMMERCIAL"){
			if($property_type=="rent"){
				$washroom=$_POST['search_rent_washroom'];
			}elseif ($property_type=="sell"){
				$washroom=$_POST['search_buy_washroom'];
			}
			if($washroom!="any"){
				$res_search_query=$res_search_query." and washroom = ".$washroom;
			}
		}
		$query = $this->db->query($res_search_query);
		$query_result=$query->result();
		
		$query_result_array=array('res'=>$query_result,'search_property_type1'=>$_POST['search_property_type'],'search_type'=>$_POST['search_type'],'selected_max_price'=>$max_price,'selected_min_price'=>$min_price,'selected_area'=>$area,'selected_person'=>$person,'selected_bhk'=>$bhk,'selected_washroom'=>$washroom,'city'=>$city);
	
	
		return  $query_result_array;
	}
	
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function search_full_pg($parameter_pid){
		$res_search_query="select * from PROPERTY_PG where isdeleted=0 and pid = ".$parameter_pid;
	    $query = $this->db->query($res_search_query);
		$query_result=$query->result();
		$property_type="pg";
		$query_result_array=array('res'=>$query_result,'property_type'=>$property_type);
		
		return  $query_result_array;
	}
	
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function search_full_residential($parameter_pid){
		$res_search_query="select * from PROPERTY_RESIDENTIAL where isdeleted=0 and pid = ".$parameter_pid;
		$query = $this->db->query($res_search_query);
		$query_result=$query->result();
		$property_type="residential";
		$query_result_array=array('res'=>$query_result,'property_type'=>$property_type);
		return  $query_result_array;
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function search_full_commercial($parameter_pid){
		$res_search_query="select * from PROPERTY_COMMERCIAL where isdeleted=0 and pid = ".$parameter_pid;
		$query = $this->db->query($res_search_query);
		$query_result=$query->result();
		$property_type="commercial";
		$query_result_array=array('res'=>$query_result,'property_type'=>$property_type);
		return  $query_result_array;
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getSellerDetails(){
		$property_table_type;
		
		$query_search;
		if($_POST['ptype2']=="pg"){
			$property_table_type="PROPERTY_PG";
			$query_search="SELECT name,email,mob from PROPERTY_PG,USER where USER.uid=PROPERTY_PG.uid and pid=".$_POST['pid'];
		}
		else if($_POST['ptype1']=="residential")
		{
			$property_table_type="PROPERTY_RESIDENTIAL";
			$query_search="SELECT name,email,mob from PROPERTY_RESIDENTIAL where USER.uid=PROPERTY_RESIDENTIAL.uid and pid=".$_POST['pid'];
		}
		else if($_POST['ptype1']=="commercial"){
			$property_table_type="PROPERTY_COMMERCIAL";
			$query_search="SELECT name,email,mob from PROPERTY_COMMERCIAL where USER.uid=PROPERTY_COMMERCIAL.uid and pid=".$_POST['pid'];
		}	
		$this->db->insert("USER_SELLER_INTERACTION",array(
				'pid' => $_POST['pid'],
				'property_table_type'=>$property_table_type,
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'mob' => $_POST['phone'],
				'created_on' => date("Y-m-d h:i:s")
		));
		$query=$this->db->query("select * from USER");
		$data;
		foreach ($query->result() as $row)
		{
		    $data=$row->name." ".$row->email." ".$row->mob;
		}
		return $data; 
	}
}
?>
