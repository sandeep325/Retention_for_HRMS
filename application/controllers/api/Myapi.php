<?php
# define('BASEPATH') OR exit('No direct script access allowed ');
require APPPATH .'libraries/REST_Controller.php';
//use namespace
// use chriskacerguis\RestServer\RestController;
class Myapi extends REST_Controller{

    public function EmpApply_post()
    {
    	$this->load->model('Retention_bonus');
    	    $Emp_apply_data=array();
	 		$Emp_apply_data['emp_id']=$this->post('emp_id');
	 		$Emp_apply_data['emp_name']=$this->post('emp_name');
	 		$Emp_apply_data['retention_reason']=$this->post('retention_reason');
	 		$Emp_apply_data['mail_id']=$this->post('mail_id');
	 		$Emp_apply_data['training_start_date']=$this->post('training_start_date');
	 		$Emp_apply_data['training_end_date']=$this->post('training_end_date');    
	 		$Emp_apply_data['installment_amount']=$this->post('installment_amount');
	 		$Emp_apply_data['purpose_of_visit']=$this->post('purpose_of_visit');
	 		$Emp_apply_data['project_leader']=$this->post('project_leader');
	 		$Emp_apply_data['remark']=$this->post('remark');
	 		if(!empty($Emp_apply_data['emp_id']) && !empty($Emp_apply_data['emp_name'])&& !empty($Emp_apply_data['retention_reason'])&& !empty($Emp_apply_data['mail_id'])&& !empty($Emp_apply_data['training_start_date']) && !empty($Emp_apply_data['training_end_date']) OR !empty($Emp_apply_data['installment_amount'])&& !empty($Emp_apply_data['purpose_of_visit'])&& !empty($Emp_apply_data['project_leader']) OR !empty($Emp_apply_data['remark']))
	 		{
	 			$insert=$this->Retention_bonus->apply($Emp_apply_data);
	 			if($insert)
	 			{
	 				$this->response([
					'status'=>TRUE,
					'message'=>'Emp Apply successfully.'


						],REST_Controller::HTTP_OK);
	 			}
	 			else
				{
						$this->response("some problems occcured,try again.",REST_Controller::HTTP_BAD_REQUEST);
				}

	 		}
	 		else
	 		{
	 			$this->response([
					'status'=>FALSE,
					'message'=>' Please fill the data.'


				],REST_Controller::HTTP_BAD_REQUEST);

	 		}



	 
}

  	 public function TlApproval_post()
	 {
	 
	 $this->load->model('Retention_bonus');
	 $r=$this->Retention_bonus->tl_approval_get();
	 $this->response($r,REST_Controller::HTTP_OK);

	 }



	 public function UniqueEmpid_post($empid)
      {
      	$this->load->model('Retention_bonus');
      	$r=$this->Retention_bonus->unique_empid($empid);
	    $this->response($r,REST_Controller::HTTP_OK);

      }





      public function TlUpdateEmp_post()
      {
  
         $this->load->model('Retention_bonus');
             
            $Emp_update_data=array();
          	$Emp_update_data['emp_id']=trim($this->post('emp_id'));
	 		$Emp_update_data['emp_name']=$this->post('emp_name');
	 		$Emp_update_data['retention_reason']=$this->post('retention_reason');
	 		$Emp_update_data['mail_id']=$this->post('mail_id');
	 		$Emp_update_data['training_start_date']=$this->post('training_start_date');
	 		$Emp_update_data['training_end_date']=$this->post('training_end_date');    
	 		$Emp_update_data['installment_amount']=$this->post('installment_amount');
	 		$Emp_update_data['purpose_of_visit']=$this->post('purpose_of_visit');
	 		$Emp_update_data['project_leader']=$this->post('project_leader');
	 		$Emp_update_data['remark']=$this->post('remark');
                    // $uni_id=$this->put('emp_id');
	 		$uni_id=$Emp_update_data['emp_id'];

	 		if(!empty($Emp_update_data['emp_id']) OR !empty($Emp_update_data['emp_name'])OR !empty($Emp_update_data['retention_reason'])OR !empty($Emp_update_data['mail_id'])OR !empty($Emp_update_data['training_start_date']) OR !empty($Emp_update_data['training_end_date']) OR !empty($Emp_update_data['installment_amount'])OR !empty($Emp_update_data['purpose_of_visit'])OR !empty($Emp_update_data['project_leader']) OR !empty($Emp_update_data['remark']))
	 		{

	 			// print_r($Emp_update_data); die();

	 			$update=$this->Retention_bonus->update_emp($Emp_update_data,$uni_id);
	 			if($update)
	 			{
	 				$this->response([
					'status'=>TRUE,
					'message'=>'Emp update successfully.'


						],REST_Controller::HTTP_OK);
	 			}
	 			else
				{
						$this->response("some problem occcured,try again.",REST_Controller::HTTP_BAD_REQUEST);
				}

             }

	 		else
	 		{
	 			$this->response([
					'status'=>FALSE,
					'message'=>' Please try again.'


				],REST_Controller::HTTP_BAD_REQUEST);

	 		}
        }
      



      public function EmpViewRetention_post($emp_id)
      {
      	$this->load->model('Retention_bonus');
      	 $r=$this->Retention_bonus->get_emp_retention($emp_id);
	    $this->response($r,REST_Controller::HTTP_OK);
     
      }






      public function Tlapproved_post(){
            $this->load->model('Retention_bonus');
          
          $Emp_approval_data=array();
          	$Emp_approval_data['emp_id']=trim($this->post('emp_id'));
	 		$Emp_approval_data['emp_name']=$this->post('emp_name');
	 		
	 		// $Emp_approval_data['mail_id']=$this->post('mail_id');
	 		$Emp_approval_data['start_date']=$this->post('start_date');
	 		 $Emp_approval_data['return_date']=$this->post('return_date');    
	 		 $Emp_approval_data['installment_amount']=$this->post('installment_amount');
	 		 $Emp_approval_data['purpose_of_visit']=$this->post('purpose_of_visit');
	 		
	 		 $Emp_approval_data['remark']=$this->post('remark');
      

         if($Emp_approval_data['emp_id'])
         {
             $insert_id=$this->Retention_bonus->InsertEmp_approve_data($Emp_approval_data);

               if($insert_id)
                 {
             	      $this->response([
					  'status'=>TRUE,
					  'message'=>'Emp approval insert successfully.'
					  ],REST_Controller::HTTP_OK);

                  }
                else
                 {
                      	$this->response("some database  problem occcured,try again.",REST_Controller::HTTP_BAD_REQUEST);
                  }
         


         }
          else
	 		{
	 			$this->response([
					'status'=>FALSE,
					'message'=>'not inserted'


				],REST_Controller::HTTP_BAD_REQUEST);

	 		}
           }  
      


      public function HrApprovalData_post()
      {
      	$this->load->model('Retention_bonus');
       $r=$this->Retention_bonus->hr_data();
      	$this->response($r,REST_Controller::HTTP_OK);
      }

      public function UniqueIdHr_post($empid)
      {
      	$this->load->model('Retention_bonus');
      	$r=$this->Retention_bonus->HRget_id($empid);
	    $this->response($r,REST_Controller::HTTP_OK);

      }

      public function Hrapproved_post()
      {
      	$this->load->model('Retention_bonus');
      	$Emp_approval_data=array();
          	$Emp_approval_data['emp_id']=$this->post('emp_id');
	 		$Emp_approval_data['emp_name']=$this->post('emp_name');
	 		$Emp_approval_data['installment_amount']=$this->post('installment_amount');

	   
	 		 $Emp_approval_data['traning_name']=$this->post('traning_name');

	 		  if($Emp_approval_data['emp_id'])
             {
             $insert_data=$this->Retention_bonus->InsertHrEmp_data($Emp_approval_data);

               if($insert_data)
                 {
             	      $this->response([
					  'status'=>TRUE,
					  'message'=>'Emp approval insert successfully.'
					  ],REST_Controller::HTTP_OK);

                  }
                else
                 {
                      	$this->response("some database  problem occcured,try again.",REST_Controller::HTTP_BAD_REQUEST);
                  }

         }
          else
	 		{
	 			$this->response([
					'status'=>FALSE,
					'message'=>'try again'
                           ],REST_Controller::HTTP_BAD_REQUEST);

	 		}
      }

      public function DataforPaymentRequest_post($id)
      {
      	$this->load->model('Retention_bonus');
      	$r=$this->Retention_bonus->GetempData_Payment($id);
      	$this->response($r,REST_Controller::HTTP_OK);
      }


      public function EmpsPaymentsInsert_post()
      {
      	 $this->load->model('Retention_bonus');
      	$request_data=array();

      	$request_data['emp_id']=$this->post('emp_id');
	 		$request_data['emp_name']=$this->post('emp_name');
	 		$request_data['installment_amount']=$this->post('installment_amount');
	 		$request_data['training_name']=$this->post('training_name');
	 		$request_data['remark']=$this->post('remark');


	 		  if($request_data)
             {
             $insert_data=$this->Retention_bonus->InsertPayment_request($request_data);

               if($insert_data)
                 {
             	      $this->response([
					  'status'=>TRUE,
					  'message'=>'Emp payment request successfully.'
					  ],REST_Controller::HTTP_OK);

                  }
                else
                 {
                      	$this->response("some database  problem occcured,try again.",REST_Controller::HTTP_BAD_REQUEST);
                  }

         }
          else
	 		{
	 			$this->response([
					'status'=>FALSE,
					'message'=>'try again'
                           ],REST_Controller::HTTP_BAD_REQUEST);

	 		}

      }




      public function GetEmpsPayments_post()
      {
      $this->load->model('Retention_bonus');
     $r= $this->Retention_bonus->EmpsPayments_list();
	 $this->response($r,REST_Controller::HTTP_OK);
	 }


    public function Empstatus_post($ids)
      {
      	 $this->load->model('Retention_bonus');
      
             $status_update=$this->Retention_bonus->update_status($ids);

               if($status_update)
                 {
             	      $this->response([
					  'status'=>TRUE,
					  'message'=>'Emp accepted.'
					  ],REST_Controller::HTTP_OK);

                  }
                else
                 {
                      	$this->response("some database  problem occcured,try again.",REST_Controller::HTTP_BAD_REQUEST);
                  }

         }
         

     



}

?>