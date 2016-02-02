<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$emailConfig = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'ygowthamkrishna4u@gmail.com',
				'smtp_pass' => 'gowthamkrishna484',
				'mailtype'  => 'html',
				'newline'  => '\r\n',
				'charset'   => 'utf-8'
		);
		
		// Set your email information
		$from = array('email' => 'ygowthamkrishna4u@gmail.com', 'name' => 'gowthamkrishna');
		$to = array('aravind.rapuru@gmail.com', 'ygowthamkrishna4u@gmail.com');
		$subject = 'mail testing';
		
		$message = 'message sent sucessfully';
		// Load CodeIgniter Email library
		$this->load->library('email', $emailConfig);
		
		// Sometimes you have to set the new line character for better result
		$this->email->set_newline("rn");
		// Set email preferences
		$this->email->from($from['email'], $from['name']);
		$this->email->to($to);
		
		$this->email->subject($subject);
		$this->email->message($message);
		// Ready to send email and check whether the email was successfully sent
		
		if (!$this->email->send()) {
			// Raise error message
			show_error($this->email->print_debugger());
		}
		else {
			// Show success notification or other things here
			echo 'Success to send email';
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */