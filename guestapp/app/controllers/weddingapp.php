<?php
header('Content-type: application/javascript');
//$val=$_GET['jsoncallback'];
//echo $val;
class weddingapp extends Controller{
 function guestsignin()
 {
  $this->addguest = new weddingappModel;
  $name=$this->input->request['fname'];
  $res=$this->addguest->addguest($name,$this->input->request['email'],$this->input->request['password'],$this->input->request['phone'],$this->input->request['foodpref'],$this->input->request['culture']);
  
 
  $data['row']=$res;
  $data['name']=$name;
  $data['email']=$this->input->request['email'];
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/addguest.php',$data); 
  
 }
 
 
 function guestlogin()
 {
  $this->addguest = new weddingappModel;
  
   if(isset($this->input->request['email']) && isset($this->input->request['password'])){

	   $res=$this->addguest->login($this->input->request['email'],$this->input->request['password']);
           $data['row']=$res['count'];
           $data['name']=$res['name'];
            $data['jsonval']=$_GET['jsoncallback'];
	 View::do_dump(VIEW_PATH.'wedingapp/login.php',$data); 	
 	}
 }
 
 function guestdetail()
 {
   $this->addguest = new weddingappModel;
   $res=$this->addguest->guestdetail($this->input->request['email']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/guestdetail.php',$data); 	
 }
 
 function editname()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->editname($this->input->request['name'],$this->input->request['email']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/editname.php',$data); 
  
 }
 
 function editpwd()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->editpwd($this->input->request['cpwd'],$this->input->request['email'],$this->input->request['password']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/editpwd.php',$data); 
  
 }
 
 function editphone()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->editphone($this->input->request['edit_phone'],$this->input->request['email']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/editname.php',$data);
 
 }
 
 function redpacket()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->redpacket();
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/guestdetail.php',$data);
 }
 
 function allevent()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->allevent($this->input->request['email'],$this->input->request['cal']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/guestdetail.php',$data);
 }
 
 function eventdetail()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->eventdetail($this->input->request['owner'],$this->input->request['email']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/guestdetail.php',$data);
 }
 
 function qrcode()
 {
   $this->addguest = new weddingappModel;
  $res=$this->addguest->qrcode($this->input->request['eventcode'],$this->input->request['owner'],$this->input->request['email']);
  $data['row']=$res['count'];
           $data['name']=$res['tableno'];
            $data['jsonval']=$_GET['jsoncallback'];
	 View::do_dump(VIEW_PATH.'wedingapp/login.php',$data); 	
 }
 
 function getfoodpref()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->getfoodpref($this->input->request['email']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/foodpref.php',$data);
 }
 
 function allfoodpref()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->allfoodpref($this->input->request['owner']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/guestdetail.php',$data);
 }
 
 function savedetail()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->savedetail($this->input->request['owner'],$this->input->request['email'],$this->input->request['status'],$this->input->request['foodpref'],$this->input->request['remark']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/editname.php',$data);
 }
 
 function insertred()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->insertredpacket($this->input->request['email'],$this->input->request['amount'],$this->input->request['owner']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/editname.php',$data);
 }
 
 function getamount()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->getamount($this->input->request['email'],$this->input->request['owner']);
  $data['row']=$res['redpacket'];
  $data['name']=$res['applyforparking'];
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/getamount.php',$data);
 }
 
 function applyparking()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->applyparking($this->input->request['email'],$this->input->request['owner']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/editname.php',$data);
 }
 
 function insertreq()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->insertrequest($this->input->request['email'],$this->input->request['request'],$this->input->request['owner']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/editname.php',$data);
 }
 
 function allphoto()
 {
  $this->addguest = new weddingappModel;
  $res=$this->addguest->allphoto($this->input->request['owner']);
  $data['row']=$res;
  $data['jsonval']=$_GET['jsoncallback'];
 View::do_dump(VIEW_PATH.'wedingapp/guestdetail.php',$data);
 }
 
}
?>
