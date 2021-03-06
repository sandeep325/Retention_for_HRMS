<?php
class Retention_bonus extends CI_Model{


  public function Retention_data_get($retentionid)
  {
      $query=$this->db->query("select * from emp_personal_info where  indo_code='$retentionid' ");
        return $query->result_array();
  }

  public function apply($Emp_apply_data)

   {
      $query=$this->db->insert('emp_apply_retention',$Emp_apply_data);
      return $query;
   }

// ====================================================

  public function tl_approval_get()
      {
        $this->db->order_by("id", "DESC");
      $tl_data = $this->db->get('emp_apply_retention')->result_array();// select data
         return $tl_data;
      }


 public function TLFilter_MonthYear($year,$month)
 {


$query=$this->db->query("select * from emp_apply_retention where MONTH(training_end_date) = $month AND
      YEAR(training_end_date) = $year ");

      $r=$this->db->affected_rows();
     if($r>0)
     {
           return $query->result_array();
     }
 }



    public function unique_empid($empid)
    {
  	$query=$this->db->query("select * from emp_apply_retention where emp_id='$empid' ");

        return $query->result_array();
    }


    public function update_emp($Emp_update_data,$uni_id)

    {
    // $updare_r=$this->db->replace('emp_apply_retention', $Emp_update_data);
     $this->db->where("emp_id",$uni_id);
    return $this->db->update("emp_apply_retention", $Emp_update_data);
  
    }
    


    public function get_emp_retention($emp_id)
    {
       
      $query=$this->db->query("select emp_apply_retention.*,hr_approval_emp.agreement_upload from emp_apply_retention,hr_approval_emp 
           where emp_apply_retention.emp_id= hr_approval_emp.emp_id and  emp_apply_retention.emp_id='$emp_id' ");
      // $query=$this->db->query("select * from emp_apply_retention where emp_id='$emp_id' ");    //emp view...
        return $query->result_array();

    }

    public function InsertEmp_approve_data($Emp_update_data)
    {
      $query=$this->db->insert('hr_approval_emp',$Emp_update_data);
      return $query;
    }

public function GetUploadId($id)
{
  $query=$this->db->query("select * from hr_approval_emp where id ='$id' ");
  return $query->result_array();
}

public function hr_data()
    {
      $this->db->order_by("id", "DESC");
    $query=$this->db->get('hr_approval_emp');

        return $query->result_array();
    }


    public function Retentionfilter_MonthYear($year,$month)
    {
       $query=$this->db->query("select * from hr_approval_emp where MONTH(return_date) = $month AND
      YEAR(return_date) = $year ");

      $r=$this->db->affected_rows();
     if($r>0)
     {
           return $query->result_array();
     }
    }

public function HRget_id($ids)
    {
      $query=$this->db->query("select * from hr_approval_emp where emp_id='$ids' ");

        return $query->result_array();
    }


        public function InsertHrEmp_data($hr_emp)
     {
       $query=$this->db->insert('payment_request_employees',$hr_emp);
      return $query;
   }


   public function GetempData_Payment($paymentdata)
   {
      $query=$this->db->query("select * from payment_request_employees where emp_id='$paymentdata' ");
        return $query->result_array();
   }

   public function InsertPayment_request($paydata)
   {
    $query=$this->db->insert('emps_payments_list',$paydata);
    return $query;
   }

   public function getid($emp_id)
   {

      $query=$this->db->query("select * from emps_payments_list where emp_id='$emp_id' ");
        return $query->result_array();
   }


   public function EmpsPayments_list()
   {

    $query=$this->db->query("select emps_payments_list.*, hr_approval_emp.return_date from emps_payments_list,hr_approval_emp  where emps_payments_list.emp_id=hr_approval_emp.emp_id  order by emps_payments_list.id DESC ");

        return $query->result_array();
    }


   

      public function update_status($emp_status,$ids)
      {

      $this->db->where("id",$ids);
    return $this->db->update("emps_payments_list",$emp_status);
  }

}

?>