<?php
class  Retention extends CI_Controller
{
public function Emp_apply()
	{
	     
	
		if($this->input->post('submit-data'))
		{
			
			$emp_id=$this->input->post('emp_id');
	 		$emp_name=$this->input->post('emp_name');
	 		$retention_reason=$this->input->post('retention_reason');
	 		$mail_id=$this->input->post('mail_id');
	 		$training_start_date=$this->input->post('training_start_date');
	 		$training_end_date=$this->input->post('training_end_date'); 
	 		$installment_amount=$this->input->post('installment_amount');
	 		$purpose_of_visit=$this->input->post('purpose_of_visit');
	 		$project_leader=$this->input->post('project_leader');
	 		$remark=$this->input->post('remark');
            

            
			$post_array = [ 'key'         => API_KEY,
                    'emp_id'                  => $emp_id,
                    'emp_name'                 => $emp_name,
                    'retention_reason'          => $retention_reason,
                    'mail_id'                   =>  $mail_id,
                    'training_start_date'       =>  $training_start_date,
                    'training_end_date'        =>  $training_end_date,
                    'installment_amount'       =>  $installment_amount,
                    'purpose_of_visit'         =>  $purpose_of_visit,
                    'project_leader'          =>  $project_leader,
                    'remark'                 =>  $remark
                   

                  ];
                  // print_r($post_array); die;
                 // print_r(base_url('retention_module/api/Myapi/EmpApply')); die;
          $add_user = callAPI('POST',base_url('api/Myapi/EmpApply'),$post_array);
          $result=json_decode($add_user); 

                // print_r($result);   die;
           // print_r($result->message);   die;
          
			

		
			if($result>0)
			{
			
				  // redirect("Retention/emp_view?msg=success");
				
				 $this->session->set_flashdata('msg','You are apply  successfully');
                redirect(base_url().'Retention/Emp_apply');
				
			}
			else
			{
	
				// redirect("Retention/emp_view?msg=unsuccess");

				 $this->session->set_flashdata('msgf','You are already apply for retention.');
                redirect(base_url().'Retention/Emp_apply');
			}


		}
		else
		{

			$this->load->view('apply_retention');
	    }
	}


     



        public function Team_member()
	    {
		

		//$this->load->model('api_model');
		//$result['data']=$this->api_model->show_entry();
		
		 $data_user = callAPI('POST',base_url('api/Myapi/TlApproval'),0);
          $result['data']=json_decode($data_user); 
          //print_r($result); die;

	    $this->load->view('team_member_retention',$result);
	    




	     }
	     // public function TlEdit_btn()
	     // {

      //        $emp_data= callAPI('GET',base_url('api/Myapi/UniqueEmpid'),0);
      //        $result['data']=json_decode($emp_data); 
	     // 	$this->load->view('team_member_retention',$result);
	     // }


         
	     public function Tlemp_edit($empid)
	     {
	     	$emp_data= callAPI('POST',base_url('api/Myapi/UniqueEmpid/'.$empid),0);
             $result['data']=json_decode($emp_data); 
             // echo $empid;
	        // print_r($result); die;
	     	 $this->load->view('tl_edit_apply_form',$result);
	     
	     }



	     public function Tl_update_emp()
	     {
              if($this->input->post('update_data'))
              {

              $emp_id=$this->input->post('emp_id');
	 		$emp_name=$this->input->post('emp_name');
	 		$retention_reason=$this->input->post('retention_reason');
	 		$mail_id=$this->input->post('mail_id');
	 		$training_start_date=$this->input->post('training_start_date');
	 		$training_end_date=$this->input->post('training_end_date'); 
	 		$installment_amount=$this->input->post('installment_amount');
	 		$purpose_of_visit=$this->input->post('purpose_of_visit');
	 		$project_leader=$this->input->post('project_leader');
	 		$remark=$this->input->post('remark');
             $post_array = [ 'key'         => API_KEY,
                    'emp_id'                  => $emp_id,
                    'emp_name'                 => $emp_name,
                    'retention_reason'          => $retention_reason,
                    'mail_id'                   =>  $mail_id,
                    'training_start_date'       =>  $training_start_date,
                    'training_end_date'        =>  $training_end_date,
                    'installment_amount'       =>  $installment_amount,
                    'purpose_of_visit'         =>  $purpose_of_visit,
                    'project_leader'          =>  $project_leader,
                    'remark'                 =>  $remark
                         ];

                        //print_r($post_array);  die;
                      //      echo $emp_id; die;
                         // echo $uni_id=$post_array['emp_id'];  die();
                $emp_data= callAPI('POST',base_url('/api/Myapi/TlUpdateEmp/'),$post_array);
              	$result=json_decode($emp_data); 

              	   // print_r($result);   die;
                         if($result>0)
			              {
			
				            // redirect("Retention/team_member?msg=success");
				            $this->session->set_flashdata('msg','Employee updated successfully.');
                           redirect(base_url().'Retention/Team_member');

				           }
			               else
			              {
	
				             // redirect("Retention/team_member?msg=unsuccess");
				             $this->session->set_flashdata('msgf','employee unsuccessfully update please try again.');
                            redirect(base_url().'Retention/Team_member');

			                }

	          
	           }
	           	else
		      {

			$this->load->view('tl_edit_apply_form');
	        }
        }




      public function Tl_emp_approval()
      {
        if($this->input->post('Approve'))
        {
        	$emps_ids=$this->input->post('emps_ids');
          if($emps_ids>0)
          {
        	for($i=0; $i<sizeof($emps_ids); $i++)
            {
                      
                      $emps=$emps_ids[$i];
                      // print_r($emps);
                      $emp_data = callAPI('POST',base_url('/api/Myapi/UniqueEmpid/'.$emps),0);
                      	  //print_r($emp_data); die;
                      	
                      	$result=json_decode($emp_data);
                     foreach($result as $row)
                     {
                    	  $post_array = [ 'key'         => API_KEY,
					                   'emp_id'                  => $row->emp_id,
					                    'emp_name'                 => $row->emp_name,
					                    
					                    'start_date'       =>  $row->training_start_date,
					                    'return_date'        =>  $row->training_end_date,
					                    'installment_amount'       =>  $row->installment_amount,
					                    'purpose_of_visit'         =>  $row->purpose_of_visit,
					                    
					                    'remark'                 =>  $row->remark
                         ];
                     }                  
                      		 print_r($post_array); 
					 $result= callAPI('POST',base_url('/api/Myapi/Tlapproved'),$post_array);
         	}
          
            	 // $emp_data= callAPI('POST',base_url('/api/Myapi/Tlapproved/'),$emps);
           
               	$insert=json_decode($result);


              // print_r($insert);  
  
            if($insert>0)
            {
            $this->session->set_flashdata('approve_msgt','Successfully Approve.');
                            redirect(base_url().'Retention/Team_member');
            }
           else
            {
               $this->session->set_flashdata('approve_msgf','Something went worng please try again.');
                            redirect(base_url().'Retention/Team_member');
            }

      }
      else{ 
      	$this->session->set_flashdata('approve_btn','Please select the employees for approval');
                            redirect(base_url().'Retention/Team_member');
       }



         
        }
        else
        {
        	
        	 redirect(base_url().'Retention/Team_member');
        } 
  }




	 public function Emp_view($emp_id)
	   {
	         $data_emp = callAPI('POST',base_url('api/Myapi/EmpViewRetention/'.$emp_id),0);
              $result['data']=json_decode($data_emp); 
                 // print_r($result);die;
               $this->load->view('emp_view_retention',$result);
      
          }

	
	public function Retention_request()
	{

		 $data_user = callAPI('POST',base_url('api/Myapi/HrApprovalData'),0);
          $result['data']=json_decode($data_user); 
          //print_r($result); die;
	   $this->load->view('retention_bonus_request',$result);
	}


public function HrEmpApproval()
{
	if($this->input->post('Approve'))
     {
       $emps_ids=$this->input->post('emps_ids');
        if($emps_ids>0)
         {
       // print_r($emps_ids);
         	for($i=0; $i<sizeof($emps_ids); $i++)
            {
                      
                      $emps=$emps_ids[$i];
                      // print_r($emps); echo"<br>";
                       $emp_data = callAPI('POST',base_url('/api/Myapi/UniqueIdHr/'.$emps),0);
                      	  // print_r($emp_data); die;
                      	
                      	$result=json_decode($emp_data);
                      foreach($result as $row)
                      {
                    	   $post_array = [ 'key'         => API_KEY,
					                   'emp_id'                  => $row->emp_id,
					                    'emp_name'                 => $row->emp_name,

					                    'traning_name'         =>  $row->purpose_of_visit,
					                    'installment_amount'   => $row->installment_amount
                        ];
                     }                  
                      		  // print_r($post_array); 
					  $result= callAPI('POST',base_url('/api/Myapi/Hrapproved'),$post_array);
         	}  
           
               	$insert=json_decode($result);
               	// print_r($insert); die;
               	if($insert>0)
               	{
                $this->session->set_flashdata('true_msg','Successfully Approve.');
                            redirect(base_url().'Retention/Retention_request');
                    
               	}
               	else
               	{
                  $this->session->set_flashdata('false_msg','Something went worng please try again.');
                            redirect(base_url().'Retention/Retention_request');
                  
               	}
         }
         else
         {
        $this->session->set_flashdata('hr_approve_btn','Please select the employees for approval');
         redirect(base_url().'Retention/Retention_request');
         }

     }
     else
     {
      redirect(base_url().'Retention/Retention_request');	
     }
}



		public function Payment_request($emp_id)
	   {
        $data_emp = callAPI('POST',base_url('api/Myapi/DataforPaymentRequest/'.$emp_id),0);
              $result['data']=json_decode($data_emp); 
                 // print_r($result);die;
               $this->load->view('request_for_payment',$result);
                 

               //    $ids=$result['data'];  //this user id get  for user payment
               // foreach($ids as $row)
               //       {
               //        $userdata =[ 'key'         => API_KEY,
               //                    'id'    =>$row->id,
               //                 'emp_id'   => $row->emp_id
                              
               //                 ];
               //    // print_r($userdata);

               //   $this->session->set_userdata($userdata);
             
               //       }
    }
                          
                         
                              

	     
     
        public function PaymentRequest_send()
        {
          $this->load->library('Lib_common');
       
           if($this->input->post('submit_payment_request'))
           {

              $emp_name=$this->input->post('emp_name');
               $emp_id=$this->input->post('emp_code');
               $training_name=$this->input->post('t_name');
               $installment_amount=$this->input->post('installment_amount');
                $remark=  $this->input->post('remark');
             $post_array=[
                       'key'                 =>       API_KEY,
                   
                        'emp_name'           =>      $emp_name,
                        'emp_id'             =>     $emp_id,
                        'training_name'       =>     $training_name,
                        'installment_amount' =>     $installment_amount,
                         'remark'            =>     $remark
                      ];  
                      // print_r($post_array);

                      $result= callAPI('POST',base_url('/api/Myapi/EmpsPaymentsInsert'),$post_array);
                        $insert=json_decode($result);

                         $this->load->model('Retention_bonus');
                          $users['data']=$this->Retention_bonus->getid($emp_id);
                           $ids=$users['data'];
                          // print_r($ids); die;
                            foreach($ids as $dat)
                               {
                                // echo $dat['id'];
                                // echo $dat['emp_id'];
                                 $userdata =[ 'key'         => API_KEY,
                                               'id'    =>  $dat['id'],
                                              'emp_id'   =>  $dat['emp_id']
                                              ];
                               // print_r($userdata); die;
                                  $this->session->set_userdata($userdata);                    
                                 } 

                      $ses_uni_id= $ses_emp_id=$this->session->userdata('id');
                       $ses_emp_id=$this->session->userdata('emp_id');
                       // echo $ses_emp_id; die;

               

                       

              if(isset($_FILES['training_doc']['name']) && count($_FILES['training_doc']['name']) > 0  && isset($_FILES['ep_approval']['name']) && count($_FILES['ep_approval']['name']) > 0 OR isset($_FILES['other_document']['name']) && count($_FILES['other_document']['name']) > 0){
                              $training_doc = $_FILES['training_doc'];

                              $training_doc = $this->lib_common->renameFile($training_doc,$ses_emp_id);
                              $uploadedFileArr = $this->lib_common->uploadFiles($training_doc,'C:/xampp/htdocs/retention_module/TrainingDoc/');
                              $len = count($uploadedFileArr);

                              for($i = 0; $i < $len; $i++){

                                  if( isset($uploadedFileArr[$i]['is_uploaded']) && $uploadedFileArr[$i]['is_uploaded'] == "YES"  ){
                                      
                                      $update_array = [];
                                      $update_array['training_document'] = isset($uploadedFileArr[$i]['filename']) ? $uploadedFileArr[$i]['filename'] : NULL;
                                      // $update_array['update_datetime'] = date('Y-m-d');
                                      //$update_array['update_by'] = 'test';
                                      //$update_array['status'] = 1;
                                      $int_record3[$i] = $this->common_model->update_entry('emps_payments_list',$update_array,array('id'=>$ses_uni_id));
                                  }

                              } // End For Loop
                            

                             $ep_approval = $_FILES['ep_approval'];
                              
                              $ep_approval = $this->lib_common->renameFile($ep_approval,$ses_emp_id);
                              $uploadedFileArr = $this->lib_common->uploadFiles($ep_approval,'C:/xampp/htdocs/retention_module/EpApproval_files/');
                              $len = count($uploadedFileArr);

                              for($i = 0; $i < $len; $i++){

                                  if( isset($uploadedFileArr[$i]['is_uploaded']) && $uploadedFileArr[$i]['is_uploaded'] == "YES"  ){
                                      
                                      $update_array = [];
                                      $update_array['ep_approval'] = isset($uploadedFileArr[$i]['filename']) ? $uploadedFileArr[$i]['filename'] : NULL;
                                      // $update_array['update_datetime'] = date('Y-m-d');
                                      //$update_array['update_by'] = 'test';
                                      //$update_array['status'] = 1;
                                      $int_record3[$i] = $this->common_model->update_entry('emps_payments_list',$update_array,array('id'=>$ses_uni_id));
                                  }

                              } //end fooe loop

                            
                             $other_document = $_FILES['other_document'];
                              if($other_document>0)
                              {
                              $other_document = $this->lib_common->renameFile($other_document , $ses_emp_id);
                              $uploadedFileArr = $this->lib_common->uploadFiles($other_document,'C:/xampp/htdocs/retention_module/Other_doc/');
                              $len = count($uploadedFileArr);

                              for($i = 0; $i < $len; $i++){

                                  if( isset($uploadedFileArr[$i]['is_uploaded']) && $uploadedFileArr[$i]['is_uploaded'] == "YES"  ){
                                      
                                      $update_array = [];
                                      $update_array['other_doc'] = isset($uploadedFileArr[$i]['filename']) ? $uploadedFileArr[$i]['filename'] : NULL;
                                      // $update_array['update_datetime'] = date('Y-m-d');
                                      //$update_array['update_by'] = 'test';
                                      //$update_array['status'] = 1;
                                      $int_record3[$i] = $this->common_model->update_entry('emps_payments_list',$update_array,array('id'=>$ses_uni_id));
                                  }

                              } //end fooe loop
                              }

                            }

                       if($insert)
                        {
                          
                         $ses_emp_id=$this->session->userdata('emp_id');
                        $this->session->set_flashdata('true_msg',' Payment request successfully submit to HR.');
                            // redirect(base_url().'Retention/Payment_request/$ses_emp_id');
                         redirect("Retention/Payment_request/$ses_emp_id");
                          
                          }
                        else{
                    $ses_emp_id=$this->session->userdata('emp_id');
                     $this->session->set_flashdata('false_msg','Try again.');
                      // redirect(base_url().'Retention/Payment_request/$ses_emp_id');
                       redirect("Retention/Payment_request/$ses_emp_id");
                       // echo $ses_emp_id;
                      }
                         
               }      
            }            
                      

                      

    public function Payment_list()
	  {
        $emp_Payment= callAPI('POST',base_url('api/Myapi/GetEmpsPayments'),0);
             $result['data']=json_decode($emp_Payment); 
             // print_r($result);Hr die;

		$this->load->view('emp_payment_list',$result);
	   }




public function HrPayments_accept()
   {
   if($this->input->post('Accept'))
   {
    $ids=$this->input->post('ids');
    // print_r($ids);
    for($i=0; $i<sizeof($ids); $i++)
    {
      $uni_ids=$ids[$i];
      // print_r($uni_ids);

       $emp_Uids = callAPI('POST',base_url('/api/Myapi/Empstatus/'.$uni_ids),0);
    }
          $result=json_decode($emp_Uids);
         if($result>0)
         {
           redirect("Retention/Payment_list?msg=success");
         }
         else
         {
           redirect("Retention/Payment_list?msg=unsuccess");

         }


   }

   }

     
	
}
?>