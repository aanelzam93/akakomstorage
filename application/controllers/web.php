<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class web extends CI_Controller {

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
		$this->load->view('index');

	}
	
	function user(){
		$session=isset($_SESSION['username_belajar']) ? $_SESSION['username_belajar']:'';
			if($session!=""){
			$pecah=explode("|",$session);
			$data["email"]=$pecah[0];
			$data["password"]=$pecah[1];
			$data["status"]=$pecah[2];
		  
			if($data["status"]=="user"){
			
			
			$data["query"]=$this->web_model->Tampil_File($data["email"]);
			$this->load->view('admin/index',$data);
			
			}
			else{
			?>
			<script type="text/javascript" language="javascript">
			alert("Anda tidak berhak masuk ke Control Panel user...!!!");
			</script>
			<?php
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/'>";
			}
		}
		else{
			?>
			<script type="text/javascript" language="javascript">
				alert("Anda belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
			</script>
		<?php
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/'>";
		}
			
	}
	function simpanupload()
	{
		$in=array();
		$session=isset($_SESSION['username_belajar']) ? $_SESSION['username_belajar']:'';
		if($session!=""){
		$pecah=explode("|",$session);
			$data["email"]=$pecah[0];
			$data["password"]=$pecah[1];
			$data["status"]=$pecah[2];
			if($data["status"]=="user"){
			$in["judul_file"]=$this->input->post('judul_file');
			$in["author"]=$data["email"];
			$acak=rand(00000000000,99999999999);
			$bersih=$_FILES['userfile']['name'];
			$nm=str_replace(" ","_","$bersih");
			$pisah=explode(".",$nm);
			$nama_murni=$pisah[0];
			$ubah=$acak.$nama_murni; //tanpa ekstensi
			$config["file_name"]=$ubah; //dengan eekstensi
			$in["nama_file"]=$acak.$nm;
			$config['upload_path'] = './download/';
			$config['allowed_types'] = 'exe|sql|psd|pdf|xls|ppt|php|php4|php3|js|swf|Xhtml|zip|wav|bmp|gif|jpg|jpeg|png|html|htm|txt|rtf|mpeg|mpg|avi|doc|docx|xlsx';
			$config['max_size'] = '50000';
			$config['max_width'] = '1200';
			$config['max_height'] = '1200';						
			$this->load->library('upload', $config);
		
			if(!$this->upload->do_upload())
			{
			 echo $this->upload->display_errors();
			}
			else {
			$this->web_model->simpan_upload($in);
			echo "file berhsil di simpan <meta http-equiv='refresh' content='0; url=".base_url()."index.php/web/user'>";
			}

			}
			else{
			?>
			<script type="text/javascript" language="javascript">
			alert("Anda tidak berhak masuk ke Control Panel ini...!!!");
			</script>
			<?php
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/'>";
			}
		}
		else{
			?>
			<script type="text/javascript" language="javascript">
			alert("Anda belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
			</script>
			<?php
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/'>";
			}
	}
	function daftar(){
		$this->load->view('daftar');
	}
	function simpandaftar(){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password= $_POST['password'];
		$status =$_POST['status'];
		$data_input = array(
			'nama' =>$nama,
			'email'=>$email,
			'username'=>$username,
			'password'=>$password,
			'status'=>$status);
		$res = $this->web_model->simpandaftar('user',$data_input);
		if ($res>=1) {
			redirect('web/web');
		}else{
			echo "Data Salah";
		}
	}
	function login(){
		$email = $_POST['email'];
		$password =$_POST['password'];
		$hasil = $this->web_model->data_login($email,$password);
		if (count($hasil->result_array())>0){
			foreach($hasil->result() as $items){
				$session_username=$items->email."|".$items->password."|".$items->status;
				$tanda=$items->status;
			}
			$_SESSION['username_belajar']=$session_username;
			if($tanda=="user"){
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/web/user'>";
			}else {
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/web'>";
			}
		}
		else{
			?>
			<script type="text/javascript">
			alert("Username atau Password Yang Anda Masukkan Salah..!!!");			
			</script>
			<?php
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/web'>";
		}
	}
	function logout ()
	{
		session_destroy();
		echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/web'>";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */