<?php 

	class Search extends CI_Controller
	{
		//This controller will be called when the user submits a search
		public function getResults()
		{
			$data=$this->sterilizeInput();
			$this->load->model("process_search");
			$argumentToBePassed=$this->process_search->searchProperty($data);
			if($argumentToBePassed=="Invalid Request")
			{
				echo "Invalid Request";
				return;
			}
			$this->load->view("viewSearchResults",$argumentToBePassed);
		}
		
		private function sterilizeInput()
		{
			return $_GET;
		}
	}

?>