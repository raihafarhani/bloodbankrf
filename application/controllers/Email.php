<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {
 
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Model_email');
 }
 function index()
 {
     
     $this->load->view('email');
 }
 

 function email_all()
 {
  if($this->input->post('checkbox_value'))
  {
   $id = $this->input->post('checkbox_value');
   for($count = 0; $count < count($id); $count++)
   {
    $this->Model_email->email($id[$count]);
   }
  }
 }
 
 function email() {
    $this->load->config('email');
    $this->load->library('email');
    
    $from = $this->config->item('smtp_user');
    $to = $this->input->post('to');
    $subject = $this->input->post('subject');
    $message = $this->input->post('message');

    $this->email->set_newline("\r\n");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($message);

    if ($this->email->send()) {
        echo 'Your Email has successfully been sent.';
    } else {
        show_error($this->email->print_debugger());
    }
  }

    public function send() 
        {
            //the subject
            $sub = "Hospital Jasin's Blood Bank";
            //the message
            $msg = "Dear Mr/Mrs, 
            Our blood bank is in very short supply. Therefore, please come to your nearest hospital to make donation.
            Thank you very much.";
            //recipient email here
            $rec = "raihafarhani98@gmail.com";
            //send email
            mail($rec,$sub,$msg);

        }
    }
?>
