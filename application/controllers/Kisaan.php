<?php 
   class Kisaan extends CI_Controller {
	
      public function index() { 
         $this->load->helper('url'); 
         $this->load->view('index'); 
      }
      
      public function login() { 
         $this->load->helper('url');
         $this->load->library('form_validation'); 
         $this->load->view('login1'); 
      }
      public function register() { 
         $this->load->helper('url'); 
         $this->load->view('register'); 
      }

      public function indexeng() { 
         $this->load->helper('url'); 
         $this->load->view('indexeng'); 
      }  
      public function wheat() { 
         $this->load->helper('url'); 
         $this->load->view('wheat'); 
      }  
      public function corn() { 
         $this->load->helper('url'); 
         $this->load->view('corn'); 
      }
      public function info() { 
         $this->load->helper('url'); 
         $this->load->view('info'); 
      }
      public function rice() { 
         $this->load->helper('url'); 
         $this->load->view('sugarcane'); 
      }

      public function donationeng() { 
         $this->load->helper('url'); 
         $this->load->view('donationeng'); 
      }  
      
      public function cc() { 
         $this->load->helper('url'); 
         $this->load->view('cc'); 
      }  
      
      public function donation() { 
         $this->load->helper('url'); 
         $this->load->view('donation'); 
      }  
  



      public function crop() { 
         $this->load->helper('url'); 
         $this->load->view('crop'); 
      }
      public function technology() { 
         $this->load->helper('url'); 
         $this->load->view('technology'); 
      }
      public function profile() { 
         $this->load->helper('url'); 
         $this->load->view('profile'); 
      }
      public function profileeng() { 
         $this->load->helper('url'); 
         $this->load->view('profileeng'); 
      }
      public function profileset() { 
         $this->load->helper('url'); 
         $this->load->view('profileset'); 
      }
      public function logout(){

         $this->load->library('session');
         $this->session->unset_userdata('authdata');
         $this->load->helper('url'); 
         $this->load->view('index');  
      }
      public function shop() { 
         $this->load->helper('url'); 
         $this->load->view('shop'); 
      }
      public function market() { 
         $this->load->helper('url'); 
         $this->load->view('market'); 
      }
      public function update(){}


public function registerdata(){
               
               $data=[
               'username'=>$this->input->post('username'),
               'Firstname'=>$this->input->post('first'),
               'Lastname'=>$this->input->post('last'),
               'password'=>hash('sha512',$this->input->post('password')),
               'mobilenumber'=>$this->input->post('mobile'),
               'gender'=>$this->input->post('gender')
               ];
               $this->load->model('Home_model');
               $result=$this->Home_model->save($data);
               if($result==true)
                  echo "Sucessful";
               else{echo "unsuccesful";}
   

}

public function select(){
      
      $search=$this->input->post('search');
      
    $this->load->model('Home_model');
        
    
        //$search= $_GET[ 'search'];
        $result=$this->Home_model->searchregister($search);

        if($result)
        {
            $data['result']=$result;
             //var_dump($data);
            $z='xyz';
             $this->load->view('search',$data);
            
        }
        else
        {
        echo "Search unsuccessful" ;

        }
    
} 


public function checkdata(){
   

$user=$this->input->post('u');
$pass=hash('sha512',$this->input->post('p'));
   
   //echo $a;
   $this->load->model('Home_model');

   $result=$this->Home_model->check_data($user,$pass);

   
   //$auth=$this->session->set_userdata('authdata',$result);
   //$cred=$this->session->get_userdata($auth);
   //var_dump($cred);
   
   if($result){
      
      $this->load->library('session');
      $this->session->set_userdata('authdata',$result);
      
      $this->load->view('profile');
   }
   else{
      $this->load->view('register');
      
   }
   //redirect(Scam/home);

}

   } 
?>