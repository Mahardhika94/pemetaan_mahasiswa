<?php class Home extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->helper('url');
	$this->load->library('session');
	$this->load->helper('date');
	$this->load->library('pagination');
	$this->load->database();
	$this->load->model('Model_home');
	
}
function index(){
$other['other']=$this->Model_home->get_other();
$row=$other['other']->row_array();
$data['visi']=$row['visi'];
$data['misi']=$row['misi'];
$data['sejarah']=$row['sejarah'];
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');

$data['log']=$this->session->userdata('level');;
$data['stat']=$this->session->userdata('stat');
$this->load->view('index',$data);

}

function sejarah(){
$other['other']=$this->Model_home->get_other();
$row=$other['other']->row_array();
$data['sejarah']=$row['sejarah'];
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');

$data['log']=$this->session->userdata('level');;
$data['stat']=$this->session->userdata('stat');
$this->load->view('sejarah',$data);

} 

function login(){
$user=$this->input->post('nik');
$pass=$this->input->post('pass');
$level=$this->input->post('level');
$pass2=md5($pass);
$data['data']=$this->Model_home->login_user($user,$pass2,$level);
$row=count($data['data']);
if($row>0){
$this->session->set_userdata('level',$level);
$this->session->set_userdata('password',$pass);
$this->session->set_userdata('username',$user);
$this->session->set_userdata('stat','login');
redirect('home');
}else{
redirect('home');
}
}

function log_out(){
$this->session->unset_userdata('level');
$this->session->unset_userdata('password');
$this->session->unset_userdata('username');
$this->session->unset_userdata('stat');
redirect('home');
}  
function kontak(){
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');;
$data['stat']=$this->session->userdata('stat');
$this->load->view('kontak',$data);

}

function pst_data(){
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');
$data['stat']=$this->session->userdata('stat');
$data['tahun']=$this->Model_home->get_tahun();
$this->load->view('other/data',$data);

}
function mhs($kon=0){

$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');
$data['stat']=$this->session->userdata('stat');

$num=$this->input->get('num');
$row1=$this->db->count_all_results('calon_mhs');

$data['datum']=$this->Model_home->get_mhs($num);
$config['base_url'] = '';
$config['total_rows'] = $row1;
$config['per_page'] = 5;
$config['page_query_string'] = TRUE;
$config['query_string_segment'] = 'num';
$config['full_tag_open'] = '';
$config['full_tag_close'] = '</div>';
$config['first_url'] = 'mhs';

$config['first_tag_open'] = '<li class="previous">';
$config['first_tag_close'] = '</li>';
$config['last_tag_open'] = '<li class="next">';
$config['last_tag_close'] = '</li>';

$config['next_link'] = 'next';
$config['next_tag_open'] = '<li class="btn">';
$config['next_tag_close'] = '</li>';
$config['prev_link'] = 'prev';
$config['prev_tag_open'] = '<li class="btn">';
$config['prev_tag_close'] = '</li>';
$config['display_pages'] = FALSE;
$this->pagination->initialize($config);
$data['pagination'] = $this->pagination->create_links();
$this->load->view('admin/mhs',$data);


}

function kelola(){
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');;
$data['stat']=$this->session->userdata('stat');
$this->load->view('admin/kelola',$data);

}

function ipt_mhs(){
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');;
$data['stat']=$this->session->userdata('stat');
if($data['level'] == 'Admin'){
$this->load->view('admin/input_mhs',$data);
}else{
redirect('home');
}
}

function dpr_usr(){
$data['datum']=$this->Model_home->get_user();
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');;
$data['stat']=$this->session->userdata('stat');
$this->load->view('admin/daftaruser',$data);

}

function kel_sjr(){
$other['other']=$this->Model_home->get_other();
$row=$other['other']->row_array();
$data['visi']=$row['visi'];
$data['misi']=$row['misi'];
$data['sejarah']=$row['sejarah'];
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');;
$data['stat']=$this->session->userdata('stat');
$this->load->view('admin/kel_sejarah',$data);

}

function laporan(){
$th = $this->input->post('key');
$data['th']=$th;
if($th==0){
$data['total']=1;
$data['ti_nr']='';
$data['te_nr']='';
$data['si_nr']='';
$data['mi_nr']='';
$data['perawat_nr']='';
$data['ners_nr']='';
$data['bd3_nr']='';
$data['bd4_nr']='';
$data['gizi_nr']='';
$data['fisio_nr']='';
$data['kesmas_nr']='';
$data['kesmas_tran']='';
$data['gizi_tran']='';
$data['bd4_tran']='';
$data['akuntansi_nr']='';
$data['ilkom_nr']='';
$data['sig_nr']='';
$data['hi_nr']='';
$data['ti_yr']='';
$data['te_yr']='';
$data['si_yr']='';
$data['mi_yr']='';
$data['perawat_yr']='';
$data['ners_yr']='';
$data['bd3_yr']='';
$data['bd4_yr']='';
$data['gizi_yr']='';
$data['fisio_yr']='';
$data['kesmas_yr']='';
$data['akuntansi_yr']='';
$data['ilkom_yr']='';
$data['sig_yr']='';
$data['hi_yr']='';
$data['tt_yr']='';
$data['tt_nr']='';
}else{
$data['datum1']=$this->Model_home->get_total($th);
$row=$data['datum1']->row_array();
$data['total']=$row['th'];
$datum['datum']=$this->Model_home->get_report($th);
$row=$datum['datum']->row_array();
$data['ti_nr']= $row['ti_nr'];
$data['te_nr']= $row['te_nr'];
$data['si_nr']= $row['si_nr'];
$data['mi_nr']= $row['mi_nr'];
$data['perawat_nr']= $row['perawat_nr'];
$data['ners_nr']= $row['ners_nr'];
$data['bd3_nr']= $row['bd3_nr'];
$data['bd4_nr']= $row['bd4_nr'];
$data['gizi_nr']= $row['gizi_nr'];
$data['fisio_nr']= $row['fisio_nr'];
$data['kesmas_nr']= $row['kesmas_nr'];
$data['kesmas_tran']= $row['kesmas_tran'];
$data['gizi_tran']= $row['gizi_tran'];
$data['fisio_tran']= $row['fisio_tran'];
$data['bd4_tran']= $row['bd4_tran'];
$data['akuntansi_nr']= $row['akuntansi_nr'];
$data['ilkom_nr']= $row['ilkom_nr'];
$data['sig_nr']= $row['sig_nr'];
$data['hi_nr']= $row['hi_nr'];
$data['ti_yr']= $row['ti_yr'];
$data['te_yr']= $row['te_yr'];
$data['si_yr']= $row['si_yr'];
$data['mi_yr']= $row['mi_yr'];
$data['perawat_yr']= $row['perawat_yr'];
$data['ners_yr']= $row['ners_yr'];
$data['bd3_yr']= $row['bd3_yr'];
$data['bd4_yr']= $row['bd4_yr'];
$data['gizi_yr']= $row['gizi_yr'];
$data['fisio_yr']= $row['fisio_yr'];
$data['kesmas_yr']= $row['kesmas_yr'];
$data['akuntansi_yr']= $row['akuntansi_yr'];
$data['ilkom_yr']= $row['ilkom_yr'];
$data['sig_yr']= $row['sig_yr'];
$data['hi_yr']= $row['hi_yr'];
$data['tt_yr']=$row['tt_nr'];
$data['tt_nr']=$row['tt_yr'];
}


$data['tahun']=$this->Model_home->get_tahun();
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');;
$data['stat']=$this->session->userdata('stat');
$this->load->view('other/laporan',$data);

}

function graf_univ(){
$th = $this->input->post('key');
$data['tahun']=$this->Model_home->get_tahun();
$data['datum2']= $this->Model_home->get_total($th);
$data['th']=$th;
if($th =='0'){
$data['FST']=0;
$data['FIKES']=0;
$data['FISE']=0;
$data['per_FST']=0;
$data['per_FIKES']=0;
$data['per_FISE']=0;
}else{
$row2=$data['datum2']->row_array();
$data['total']=$row2['th'];
$datum['datum']=$this->Model_home->graf_univ($th);
$row=$datum['datum']->row_array();
$data['FST']=$row['FST'];
$data['FIKES']=$row['FIKES'];
$data['FISE']=$row['FISE'];
if($data['total']==0){
$data['per_FST']=0;
$data['per_FIKES']=0;
$data['per_FISE']=0;
}else{
$data['per_FST']=round($row['FST']*100 / $data['total']);
$data['per_FIKES']=round($row['FIKES']*100 / $data['total']);
$data['per_FISE']=round($row['FISE']*100 / $data['total']);
}
}
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');;
$data['stat']=$this->session->userdata('stat');
$this->load->view('other/grafikuniversitas',$data);

}


function graf_FIKES(){
$th = $this->input->post('key');
$fak='FIKES';
$data['th']=$th;
$data['tahun']=$this->Model_home->get_tahun();
if($th =='0'){
$data['perawat']=0;
$data['ners']=0;
$data['bd3']=0;
$data['gizi']=0;
$data['bd4']=0;
$data['kesmas']=0;
$data['per_perawat']=0;
$data['per_ners']=0;
$data['per_bd3']=0;
$data['per_gizi']=0;
$data['per_bd4']=0;
$data['per_kesmas']=0;
$data['fisio']=0;
}else{
$data['datum2']=$this->Model_home->get_total22($th,$fak);
$row2=$data['datum2']->row_array();
$data['total']=$row2['th'];
$datum['datum']=$this->Model_home->get_FIKES($th);
$row=$datum['datum']->row_array();
$data['perawat']=$row['perawat'];
$data['ners']=$row['ners'];
$data['bd3']=$row['bd3'];
$data['gizi']=$row['gizi'];
$data['bd4']=$row['bd4'];
$data['kesmas']=$row['kesmas'];
$data['fisio']=$row['fisio'];
if($data['total']==0){
$data['per_perawat']=0;
$data['per_ners']=0;
$data['per_bd3']=0;
$data['per_gizi']=0;
$data['per_bd4']=0;
$data['per_kesmas']=0;
$data['fisio']=0;
}else{
$data['per_perawat']=round($row['perawat']*100 / $data['total']);
$data['per_ners']=round($row['ners']*100 / $data['total']);
$data['per_bd3']=round($row['bd3']*100 / $data['total']);
$data['per_gizi']=round($row['gizi']*100 / $data['total']);
$data['per_bd4']=round($row['bd4']*100 / $data['total']);
$data['per_kesmas']=round($row['kesmas']*100 / $data['total']);
$data['per_fisio']=round($row['fisio']*100 / $data['total']);
}
}
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');;
$data['stat']=$this->session->userdata('stat');
$this->load->view('other/grafikFIKES',$data);

}

function graf_FISE(){
$th = $this->input->post('key');
$fak='FISE';
$data['th']=$th;
$data['tahun']=$this->Model_home->get_tahun();
if($th =='0'){
$data['akuntansi']=0;
$data['hi']=0;
$data['sig']=0;
$data['ilkom']=0;
$data['per_akuntansi']=0;
$data['per_hi']=0;
$data['per_sig']=0;
$data['per_ilkom']=0;
}else{
$data['datum2']=$this->Model_home->get_total22($th,$fak);
$row2=$data['datum2']->row_array();
$data['total']=$row2['th'];
$datum['datum']=$this->Model_home->get_FISE($th);
$row=$datum['datum']->row_array();
$data['akuntansi']=$row['akuntansi'];
$data['hi']=$row['hi'];
$data['sig']=$row['sig'];
$data['ilkom']=$row['ilkom'];
if($data['total']==0){
$data['per_akuntansi']=0;
$data['per_hi']=0;
$data['per_sig']=0;
$data['per_ilkom']=0;
}else{
$data['per_akuntansi']=round($row['akuntansi']*100 / $data['total']);
$data['per_hi']=round($row['hi']*100 / $data['total']);
$data['per_sig']=round($row['sig']*100 / $data['total']);
$data['per_ilkom']=round($row['ilkom']*100 / $data['total']);}
}
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');
$data['stat']=$this->session->userdata('stat');
$this->load->view('other/grafikFISE',$data);
}

function graf_FST(){
$th = $this->input->post('key');
$fak='FST';
$data['th']=$th;
$data['tahun']=$this->Model_home->get_tahun();
if($th =='0'){
$data['ti']=0;
$data['te']=0;
$data['sig']=0;
$data['mi']=0;
$data['per_ti']=0;
$data['per_te']=0;
$data['per_sig']=0;
$data['per_mi']=0;
}else{
$data['datum2']=$this->Model_home->get_total2($th,$fak);
$row2=$data['datum2']->row_array();
$data['total']=$row2['th'];
$datum['datum']=$this->Model_home->get_FST($th);
$row=$datum['datum']->row_array();
$data['ti']=$row['ti'];
$data['te']=$row['te'];
$data['si']=$row['si'];
$data['mi']=$row['mi'];
if($data['total']==0){
$data['per_ti']=0;
$data['per_te']=0;
$data['per_si']=0;
$data['per_mi']=0;
}else{
$data['per_ti']=round($row['ti']*100 / $data['total']);
$data['per_te']=round($row['te']*100 / $data['total']);
$data['per_si']=round($row['si']*100 / $data['total']);
$data['per_mi']=round($row['mi']*100 / $data['total']);}
}
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');;
$data['stat']=$this->session->userdata('stat');
$this->load->view('other/grafikFST',$data);

}

function up_pro(){
	$user =$this->input->post('username');
	$pass =$this->input->post('password');
	$user2 =$this->input->post('user2');
	$pass2 =md5($pass);
	$val=array('username'=>$user,
	'password'=>$pass2);
	$this->Model_home->update_pro($user2,$val);
	$this->session->set_userdata('password',$pass);
	$this->session->set_userdata('username',$user);
	redirect('home');
	//echo $user;echo	$pass; echo $pass2;

}



function up_sejarah(){
$sejarah = $this->input->post('sejarah');
$visi	=$this->input->post('visi');
$misi =$this->input->post('misi');
$val=array('sejarah'=>$sejarah,'visi'=>$visi,'misi'=>$misi);
$this->Model_home->up_sjr($val);
redirect('home/kel_sjr');
}

function daftar_user(){
$level = $this->input->post('level');
$username =$this->input->post('nik');
$password =$this->input->post('password');
$pass2 =md5($password);
$val = array('username'=>$username,'password'=>$pass2,'level'=>$level,);
$this->Model_home->add_user($val);
redirect('home/dpr_usr');
//echo $level;
//echo $username;
}

function del_user($nik){
$this->Model_home->del_user($nik);
redirect('home/dpr_usr');
}

function ins_mhs(){
$nid=$this->input->post('nid');
$nama=$this->input->post('nama');
$tahun=$this->input->post('tahun');
$status=$this->input->post('stat');
$fak=$this->input->post('fak');
$prodi=$this->input->post('prodi');
$as=$this->input->post('as');
$pimpinan=$this->input->post('pimpinan');
$alamat=$this->input->post('alamat');
$prov=$this->input->post('prov');
$kab=$this->input->post('kab');
$regis=$this->input->post('regis');
$val=array('id_calon'=>$nid,'nama'=>$nama,'tahun_masuk'=>$tahun,'status'=>$status,'fakultas'=>$fak,'prodi'=>$prodi,'provinsi'=>$prov,'kota_kab'=>$kab,
			'sekolah_asal'=>$as,'alamat_sekolah'=>$alamat,'kepala_sekolah'=>$pimpinan,'registrasi'=>$regis);
$this->Model_home->input_mhs($val);
redirect('home/ipt_mhs');
}

function up_mhs($nid){
$nid2=$this->input->post('nid');
$nama=$this->input->post('nama');
$tahun=$this->input->post('tahun');
$status=$this->input->post('stat');
$fak=$this->input->post('fak');
$prodi=$this->input->post('prodi');
$as=$this->input->post('as');
$pimpinan=$this->input->post('pimpinan');
$alamat=$this->input->post('alamat');
$prov=$this->input->post('prov');
$kab=$this->input->post('kab');
$regis=$this->input->post('regis');
$val=array('id_calon'=>$nid2,'nama'=>$nama,'tahun_masuk'=>$tahun,'status'=>$status,'fakultas'=>$fak,'prodi'=>$prodi,'provinsi'=>$prov,'kota_kab'=>$kab,
			'sekolah_asal'=>$as,'alamat_sekolah'=>$alamat,'kepala_sekolah'=>$pimpinan,'registrasi'=>$regis);
$this->Model_home->up_mhs($nid,$val);
redirect('home/mhs');
}

function del_mhs($nid){
$this->Model_home->del_mhs($nid);
redirect('home/mhs');
}

function sel_mhs($nid){
$datum['datum']=$this->Model_home->sel_mhs($nid);
$row=$datum['datum']->row_array();
$data['id_calon']=$row['id_calon'];
$data['nama']=$row['nama'];
$data['tahun_masuk']=$row['tahun_masuk'];
$data['status']=$row['status'];
$data['fakultas']=$row['fakultas'];
$data['prodi']=$row['prodi'];
$data['provinsi']=$row['provinsi'];
$data['kota_kab']=$row['kota_kab'];
$data['sekolah_asal']=$row['sekolah_asal'];
$data['alamat_sekolah']=$row['alamat_sekolah'];
$data['kepala_sekolah']=$row['kepala_sekolah'];
$data['regis']=$row['registrasi'];
$this->load->view('admin/up_mhs',$data);
}

function pro_mhs($nid){
$datum['datum']=$this->Model_home->sel_mhs($nid);
$row=$datum['datum']->row_array();
$data['id_calon']=$row['id_calon'];
$data['nama']=$row['nama'];
$data['tahun_masuk']=$row['tahun_masuk'];
$data['status']=$row['status'];
$data['fakultas']=$row['fakultas'];
$data['prodi']=$row['prodi'];
$data['provinsi']=$row['provinsi'];
$data['kota_kab']=$row['kota_kab'];
$data['sekolah_asal']=$row['sekolah_asal'];
$data['alamat_sekolah']=$row['alamat_sekolah'];
$data['kepala_sekolah']=$row['kepala_sekolah'];
$data['regis']=$row['registrasi'];
$this->load->view('other/pro_mhs',$data);
}

function peta($tahun,$stat=0){
$data['datum1']=$this->Model_home->get_total($tahun);
$row1=$data['datum1']->row_array();
$data['total']=$row1['th'];
$data['th']=$tahun;
$data['datum']=$this->Model_home->get_prov($tahun);
$row=$data['datum']->row_array();
$data['ntb']=$row['ntb'];
$data['ntt']=$row['ntt'];
$data['aceh']=$row['aceh'];
$data['bali']=$row['bali'];
$data['banten']=$row['banten'];
$data['bengkulu']=$row['bengkulu'];
$data['gorontalo']=$row['gorontalo'];
$data['jakarta']=$row['jakarta'];
$data['jambi']=$row['jambi'];
$data['jabar']=$row['jabar'];
$data['jateng']=$row['jateng'];
$data['jatim']=$row['jatim'];
$data['kalbar']=$row['kalbar'];
$data['kalsel']=$row['kalsel'];
$data['kalteng']=$row['kalteng'];
$data['kaltim']=$row['kaltim'];
$data['kalut']=$row['kalut'];
$data['kep_bangka']=$row['kep_bangka'];
$data['kepri']=$row['kepri'];
$data['lampung']=$row['lampung'];
$data['maluku']=$row['maluku'];
$data['maltara']=$row['maltara'];
$data['papua']=$row['papua'];
$data['pabar']=$row['pabar'];
$data['sulbar']=$row['sulbar'];
$data['sulsel']=$row['sulsel'];
$data['sulteh']=$row['sulteh'];
$data['sulteng']=$row['sulteng'];
$data['sulut']=$row['sulut'];
$data['sumbar']=$row['sumbar'];
$data['sumsel']=$row['sumsel'];
$data['sumut']=$row['sumut'];
$data['jogja']=$row['jogja'];
$data['riau']=$row['riau'];
if($stat == 1){
$this->load->view('map/peta',$data);
}else{
$this->load->view('admin/peta',$data);
}
}

function data1($th,$fak){
//$key = str_replace('%20',' ',$key);
$data['datum2']=$this->Model_home->get_prov_fak($th,$fak);
echo json_encode($data['datum2']);

}

function pdf_welcome_message(){
    // load dompdf
    $this->load->helper('dompdf');
    //load content html
	$data['data']='efendy';
    $html = $this->load->view('welcome_message',$data, true);
    // create pdf using dompdf
    $filename = 'Message';
    $paper = 'A4';
    $orientation = 'potrait';
    pdf_create($html, $filename, $paper, $orientation);
}

function pdf_prov($tahun){

$data['datum1']=$this->Model_home->get_total($tahun);
$row1=$data['datum1']->row_array();
$data['total']=$row1['th'];
$data['th']=$tahun;
$data['datum']=$this->Model_home->get_prov($tahun);
$row=$data['datum']->row_array();
$data['ntb']=$row['ntb'];
$data['ntt']=$row['ntt'];
$data['aceh']=$row['aceh'];
$data['bali']=$row['bali'];
$data['banten']=$row['banten'];
$data['bengkulu']=$row['bengkulu'];
$data['gorontalo']=$row['gorontalo'];
$data['jakarta']=$row['jakarta'];
$data['jambi']=$row['jambi'];
$data['jabar']=$row['jabar'];
$data['jateng']=$row['jateng'];
$data['jatim']=$row['jatim'];
$data['kalbar']=$row['kalbar'];
$data['kalsel']=$row['kalsel'];
$data['kalteng']=$row['kalteng'];
$data['kaltim']=$row['kaltim'];
$data['kalut']=$row['kalut'];
$data['kep_bangka']=$row['kep_bangka'];
$data['kepri']=$row['kepri'];
$data['lampung']=$row['lampung'];
$data['maluku']=$row['maluku'];
$data['maltara']=$row['maltara'];
$data['papua']=$row['papua'];
$data['pabar']=$row['pabar'];
$data['sulbar']=$row['sulbar'];
$data['sulsel']=$row['sulsel'];
$data['sulteh']=$row['sulteh'];
$data['sulteng']=$row['sulteng'];
$data['sulut']=$row['sulut'];
$data['sumbar']=$row['sumbar'];
$data['sumsel']=$row['sumsel'];
$data['sumut']=$row['sumut'];
$data['jogja']=$row['jogja'];
$data['riau']=$row['riau'];
$data['css']=".datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #006699; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 3px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#FFFFFF; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #00496B; border-left: 3px solid #E1EEF4;font-size: 16px;border-bottom: 3px solid #E1EEF4;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #183B99;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #1F3B99), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #1F3B99 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1F3B99', endColorstr='#00557F');background-color:#1F3B99; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #3C9399; color: #FFFFFF; background: none; background-color:#00557F;}div.dhtmlx_window_active, div.dhx_modal_cover_dv { position: fixed !important; }";
$this->load->helper('dompdf');
$html=$this->load->view('report/report_prov',$data,true);
 $filename = 'Laporan Calon Mahasiswa UNRIYO berdasarkan daerah Tahun'.$tahun;
 $paper = 'A4';
    $orientation = 'potrait';
    pdf_create($html, $filename, $paper, $orientation);


}

function pdf_asal($th){
$data['th']=$th;
$data['data']=$this->Model_home->print_asal($th);
$this->load->helper('dompdf');
$html=$this->load->view('report/report_asal',$data,true);
$filename='Laporan Calon Mahasiswa UNRIYO Berdasarkan Asal Sekolah Tahun '.$th;
$paper='A4';
$orientation='landscape'; 
pdf_create($html, $filename, $paper, $orientation);
}

function send_mail(){
$nama = $this->input->post('nama');
$nope = $this->input->post('nope');
$email = $this->input->post('email');
$pesan = $this->input->post('pesan');
$mail='efendymd1@gmail.com';
$pesan2 = $pesan .'<br>'. 'from : '.$nama.'</br><br>'.' hp :'.$nope.'</br><br> E-mail : '.$email.'';
 $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "dboyscos@gmail.com";
        $config['smtp_pass'] = "mahardkcos";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['validation'] = TRUE;
         $config['smtp_timeout'] = '7';
        $config['newline'] = "\r\n";

        
        
        $ci->email->initialize($config);
 
        $ci->email->from('dboyscos@gmail.com', 'Pesan Sistem Pemetaan Calon Mahasiswa UNRIYO ');
        $list = array($mail);
        $ci->email->to($list);
        $ci->email->subject('Pesan User Sistem Pemetaan UNRIYO ');
        //$ci->email->message("kunjungi halaman berikut untuk melakukan verifikasi password --> localhost/ci/index.php/sta/verifikasi/$kode");
        $ci->email->message($pesan2);
        if ($this->email->send()) {
            echo 'pesan berhasil terkirim';
        } else {
            echo 'pesan gagal terkirim ';
        }


   

}

function cetak_lapor($th){
$data['th']=$th;
if($th==0){
$data['total']=1;
$data['ti_nr']='';
$data['te_nr']='';
$data['si_nr']='';
$data['mi_nr']='';
$data['perawat_nr']='';
$data['ners_nr']='';
$data['bd3_nr']='';
$data['bd4_nr']='';
$data['gizi_nr']='';
$data['kesmas_nr']='';
$data['kesmas_tran']='';
$data['gizi_tran']='';
$data['bd4_tran']='';
$data['akuntansi_nr']='';
$data['ilkom_nr']='';
$data['sig_nr']='';
$data['hi_nr']='';
$data['ti_yr']='';
$data['te_yr']='';
$data['si_yr']='';
$data['mi_yr']='';
$data['perawat_yr']='';
$data['ners_yr']='';
$data['bd3_yr']='';
$data['bd4_yr']='';
$data['gizi_yr']='';
$data['kesmas_yr']='';
$data['akuntansi_yr']='';
$data['ilkom_yr']='';
$data['sig_yr']='';
$data['hi_yr']='';
$data['tt_yr']='';
$data['tt_nr']='';
}else{
$data['datum1']=$this->Model_home->get_total($th);
$row=$data['datum1']->row_array();
$data['total']=$row['th'];
$datum['datum']=$this->Model_home->get_report($th);
$row=$datum['datum']->row_array();
$data['ti_nr']= $row['ti_nr'];
$data['te_nr']= $row['te_nr'];
$data['si_nr']= $row['si_nr'];
$data['mi_nr']= $row['mi_nr'];
$data['perawat_nr']= $row['perawat_nr'];
$data['ners_nr']= $row['ners_nr'];
$data['bd3_nr']= $row['bd3_nr'];
$data['bd4_nr']= $row['bd4_nr'];
$data['gizi_nr']= $row['gizi_nr'];
$data['fisio_nr']= $row['fisio_nr'];
$data['kesmas_nr']= $row['kesmas_nr'];
$data['kesmas_tran']= $row['kesmas_tran'];
$data['gizi_tran']= $row['gizi_tran'];
$data['fisio_tran']= $row['fisio_tran'];
$data['bd4_tran']= $row['bd4_tran'];
$data['akuntansi_nr']= $row['akuntansi_nr'];
$data['ilkom_nr']= $row['ilkom_nr'];
$data['sig_nr']= $row['sig_nr'];
$data['hi_nr']= $row['hi_nr'];
$data['ti_yr']= $row['ti_yr'];
$data['te_yr']= $row['te_yr'];
$data['si_yr']= $row['si_yr'];
$data['mi_yr']= $row['mi_yr'];
$data['perawat_yr']= $row['perawat_yr'];
$data['ners_yr']= $row['ners_yr'];
$data['bd3_yr']= $row['bd3_yr'];
$data['bd4_yr']= $row['bd4_yr'];
$data['gizi_yr']= $row['gizi_yr'];
$data['fisio_yr']= $row['fisio_yr'];
$data['kesmas_yr']= $row['kesmas_yr'];
$data['akuntansi_yr']= $row['akuntansi_yr'];
$data['ilkom_yr']= $row['ilkom_yr'];
$data['sig_yr']= $row['sig_yr'];
$data['hi_yr']= $row['hi_yr'];
$data['tt_yr']=$row['tt_nr'];
$data['tt_nr']=$row['tt_yr'];
}

$this->load->helper('dompdf');
$html=$this->load->view('report/laporan_all',$data,true);
 $filename = 'Laporan Calon Mahasiswa UNRIYO Program Studi tahun '.$th;
 $paper = 'A4';
    $orientation = 'potrait';
    pdf_create($html, $filename, $paper, $orientation);
}

function cari($kon=0){
$key=$this->input->post('key');
$col=$this->input->post('col');
if($key !=''){
$this->session->set_userdata('key2',$key);}
$key2=$this->session->userdata('key2');
if($key ==''){

$key=$key2;
}
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');
$data['stat']=$this->session->userdata('stat');


$row1=$this->db->count_all_results('calon_mhs');



$data['datum']=$this->Model_home->search2($key,$col);

$data['pagination'] = $this->pagination->create_links();
$this->load->view('admin/mhs',$data);


}


function graf_total($tahun,$stat,$prod=0,$fak=0){
if($stat == '1'){
	$data['datum1']=$this->Model_home->get_total($tahun);
	$row1=$data['datum1']->row_array();
	$data['total']=$row1['th'];
	$data['th']=$tahun;
	$data['datum']=$this->Model_home->get_prov($tahun);
	$row=$data['datum']->row_array();
	$data['ket']="Grafik Calon Mahasiswa Baru UNRIYO Berdasarkan Provinsi Pada Tahun $tahun";
	$data['ilkom']=444;
	
}else{
	$tahun1=$tahun;
	$fak =str_replace('%20',' ',$fak);
	$prod=str_replace('%20',' ',$prod);

		if($prod =='Pilih Prodi'){
			$data['datum1']=$this->Model_home->get_total2($tahun1,$fak);
			$data['ket']="Grafik Calon Mahasiswa Baru $fak UNRIYO Berdasarkan Provinsi Pada Tahun $tahun";
			$row1=$data['datum1']->row_array();
			$data['total']=$row1['th'];
			$data['th']=$tahun1;
			$data['datum']=$this->Model_home->get_prov_fak($tahun1,$fak);
			$row=$data['datum']->row_array();
			
		}else{
			$data['ket']="Grafik Calon Mahasiswa Baru $prod $fak  UNRIYO Berdasarkan Provinsi Pada Tahun $tahun";
			$data['datum1']=$this->Model_home->get_total3($tahun1,$fak,$prod);
			$row1=$data['datum1']->row_array();
			$data['total']=$row1['th'];
			$data['th']=$tahun;
			$data['datum']=$this->Model_home->get_prov_prod($tahun1,$fak,$prod);
			$row=$data['datum']->row_array();
		}

}

$data['ntb']=$row['ntb'];
$data['ntt']=$row['ntt'];
$data['aceh']=$row['aceh'];
$data['bali']=$row['bali'];
$data['banten']=$row['banten'];
$data['bengkulu']=$row['bengkulu'];
$data['gorontalo']=$row['gorontalo'];
$data['jakarta']=$row['jakarta'];
$data['jambi']=$row['jambi'];
$data['jabar']=$row['jabar'];
$data['jateng']=$row['jateng'];
$data['jatim']=$row['jatim'];
$data['kalbar']=$row['kalbar'];
$data['kalsel']=$row['kalsel'];
$data['kalteng']=$row['kalteng'];
$data['kaltim']=$row['kaltim'];
$data['kalut']=$row['kalut'];
$data['kep_bangka']=$row['kep_bangka'];
$data['kepri']=$row['kepri'];
$data['lampung']=$row['lampung'];
$data['maluku']=$row['maluku'];
$data['maltara']=$row['maltara'];
$data['papua']=$row['papua'];
$data['pabar']=$row['pabar'];
$data['sulbar']=$row['sulbar'];
$data['sulsel']=$row['sulsel'];
$data['sulteh']=$row['sulteh'];
$data['sulteng']=$row['sulteng'];
$data['sulut']=$row['sulut'];
$data['sumbar']=$row['sumbar'];
$data['sumsel']=$row['sumsel'];
$data['sumut']=$row['sumut'];
$data['jogja']=$row['jogja'];
$data['riau']=$row['riau'];
$this->load->view('other/total_graf',$data);
}

function graf_total_fak($th){
$th=2013;
$fak='FISE';
$data['th']=2013;
$data['tahun']=$this->Model_home->get_tahun();
if($th =='0'){
$data['akuntansi']=0;
$data['hi']=0;
$data['sig']=0;
$data['ilkom']=0;
$data['per_akuntansi']=0;
$data['per_hi']=0;
$data['per_sig']=0;
$data['per_ilkom']=0;
}else{
$data['datum2']=$this->Model_home->get_total22($th,$fak);
$row2=$data['datum2']->row_array();
$data['total']=$row2['th'];
$datum['datum']=$this->Model_home->get_FISE($th);
$row=$datum['datum']->row_array();
$data['akuntansi']=$row['akuntansi'];
$data['hi']=$row['hi'];
$data['sig']=$row['sig'];
$data['ilkom']=$row['ilkom'];
if($data['total']==0){
$data['per_akuntansi']=0;
$data['per_hi']=0;
$data['per_sig']=0;
$data['per_ilkom']=0;
}else{
$data['per_akuntansi']=round($row['akuntansi']*100 / $data['total']);
$data['per_hi']=round($row['hi']*100 / $data['total']);
$data['per_sig']=round($row['sig']*100 / $data['total']);
$data['per_ilkom']=round($row['ilkom']*100 / $data['total']);}
}
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');
$data['stat']=$this->session->userdata('stat');
$this->load->view('other/total_graf',$data);


}

function get_peta2($stat=0){
$th=$this->input->post('tahun2');
$fak=$this->input->post('fak');
$prod=$this->input->post('prodi');
	if($fak =='FIKES'){
		$name_fak ='Fakultas Ilmu Kesehatan';
	}elseif($fak=='FST'){
		$name_fak ='Fakultas Sains dan Teknologi';
	}elseif($fak =='FISE'){
		$name_fak ='Fakultas Komunikasi dan Ekonomi';
	}

if($prod =='Pilih Prodi'){
			$data['keterangan']="Jumlah Persebaran Calon Mahasiswa Universitas Respati $name_fak Pada Tahun  $th ";
			$data['datum1']=$this->Model_home->get_total2($th,$fak);
			$data['ket']="Grafik Calon Mahasiswa Baru $fak UNRIYO Berdasarkan Provinsi Pada Tahun $th";
			$row1=$data['datum1']->row_array();
			$data['total']=$row1['th'];
			$data['th']=$th;
			$data['fak']=$fak;
			$data['prod']=$prod;
			$data['stat']=0;
			$data['datum']=$this->Model_home->get_prov_fak($th,$fak);
			$row=$data['datum']->row_array();
}else{
			$data['stat']=1;
			$data['keterangan']="Jumlah Persebaran Calon Mahasiswa Universitas Respati Program studi $prod $name_fak  Pada Tahun  $th ";
			$data['datum1']=$this->Model_home->get_total3($th,$fak,$prod);
			$row1=$data['datum1']->row_array();
			$data['total']=$row1['th'];
			$data['th']=$th;
			$data['fak']=$fak;
			$data['prod']=$prod;
			$data['datum']=$this->Model_home->get_prov_prod($th,$fak,$prod);
			$row=$data['datum']->row_array();

}
$data['ntb']=$row['ntb'];
$data['ntt']=$row['ntt'];
$data['aceh']=$row['aceh'];
$data['bali']=$row['bali'];
$data['banten']=$row['banten'];
$data['bengkulu']=$row['bengkulu'];
$data['gorontalo']=$row['gorontalo'];
$data['jakarta']=$row['jakarta'];
$data['jambi']=$row['jambi'];
$data['jabar']=$row['jabar'];
$data['jateng']=$row['jateng'];
$data['jatim']=$row['jatim'];
$data['kalbar']=$row['kalbar'];
$data['kalsel']=$row['kalsel'];
$data['kalteng']=$row['kalteng'];
$data['kaltim']=$row['kaltim'];
$data['kalut']=$row['kalut'];
$data['kep_bangka']=$row['kep_bangka'];
$data['kepri']=$row['kepri'];
$data['lampung']=$row['lampung'];
$data['maluku']=$row['maluku'];
$data['maltara']=$row['maltara'];
$data['papua']=$row['papua'];
$data['pabar']=$row['pabar'];
$data['sulbar']=$row['sulbar'];
$data['sulsel']=$row['sulsel'];
$data['sulteh']=$row['sulteh'];
$data['sulteng']=$row['sulteng'];
$data['sulut']=$row['sulut'];
$data['sumbar']=$row['sumbar'];
$data['sumsel']=$row['sumsel'];
$data['sumut']=$row['sumut'];
$data['jogja']=$row['jogja'];
$data['riau']=$row['riau'];
if($stat == 1){
$this->load->view('map/peta_fil',$data);
}else{
$this->load->view('admin/peta_fil',$data);
}
}

function pdf_prov2($tahun,$fak,$prodi){
$prodi=str_replace('%20',' ',$prodi);
if($prodi =='Pilih Prodi'){
$data['datum1']=$this->Model_home->get_total2($tahun,$fak);
$row1=$data['datum1']->row_array();
$data['total']=$row1['th'];
$data['datum']=$this->Model_home->get_prov_fak($tahun,$fak);
$row=$data['datum']->row_array();
//echo 77;
}else{
$data['datum1']=$this->Model_home->get_total3($tahun,$fak,$prodi);
$row1=$data['datum1']->row_array();
$data['total']=$row1['th'];
$data['datum']=$this->Model_home->get_prov_prod($tahun,$fak,$prodi);
$row=$data['datum']->row_array();
//echo 88;
}

$data['th']=$tahun;
$data['ntb']=$row['ntb'];
$data['ntt']=$row['ntt'];
$data['aceh']=$row['aceh'];
$data['bali']=$row['bali'];
$data['banten']=$row['banten'];
$data['bengkulu']=$row['bengkulu'];
$data['gorontalo']=$row['gorontalo'];
$data['jakarta']=$row['jakarta'];
$data['jambi']=$row['jambi'];
$data['jabar']=$row['jabar'];
$data['jateng']=$row['jateng'];
$data['jatim']=$row['jatim'];
$data['kalbar']=$row['kalbar'];
$data['kalsel']=$row['kalsel'];
$data['kalteng']=$row['kalteng'];
$data['kaltim']=$row['kaltim'];
$data['kalut']=$row['kalut'];
$data['kep_bangka']=$row['kep_bangka'];
$data['kepri']=$row['kepri'];
$data['lampung']=$row['lampung'];
$data['maluku']=$row['maluku'];
$data['maltara']=$row['maltara'];
$data['papua']=$row['papua'];
$data['pabar']=$row['pabar'];
$data['sulbar']=$row['sulbar'];
$data['sulsel']=$row['sulsel'];
$data['sulteh']=$row['sulteh'];
$data['sulteng']=$row['sulteng'];
$data['sulut']=$row['sulut'];
$data['sumbar']=$row['sumbar'];
$data['sumsel']=$row['sumsel'];
$data['sumut']=$row['sumut'];
$data['jogja']=$row['jogja'];
$data['riau']=$row['riau'];
$this->load->helper('dompdf');
$html=$this->load->view('report/report_prov_fil',$data,true);
 $filename = 'Laporan Calon Mahasiswa UNRIYO berdasarkan daerah Tahun '.$tahun;
 $paper = 'A4';
    $orientation = 'potrait';
    pdf_create($html, $filename, $paper, $orientation);

}
 
function pdf_asal2($th,$fak,$prod){
$prod=str_replace('%20',' ',$prod);


if($prod =='Pilih Prodi'){
		$data['ket']="Laporan Calon Mahasiswa $fak Universitas Respati Yogyakarta Berdasarkan Sekolah Asal Pada $th";
		$data['th']=$th;
		$data['data']=$this->Model_home->print_asal_fak($th,$fak);
}else{
		$data['ket']="Laporan Calon Mahasiswa $fak Prodi $prod Universitas Respati Yogyakarta Berdasarkan Sekolah Asal Pada $th";
		$data['th']=$th;
		$data['data']=$this->Model_home->print_asal_prod($th,$fak,$prod);

}
$this->load->helper('dompdf');
$html=$this->load->view('report/report_asal_fil',$data,true);
$filename='Laporan Calon Mahasiswa UNRIYO Berdasarkan Asal Sekolah Tahun '.$th;
$paper='A4';
$orientation='potrait'; 
pdf_create($html, $filename, $paper, $orientation);
}

function peta_all(){
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');
$data['stat']=$this->session->userdata('stat');
$data['tahun']=$this->Model_home->get_tahun();
$this->load->view('peta_all',$data);
}

function data_kab($th,$stat=0,$ttal=0,$fak=0,$prodi=0){
$prod1=str_replace('%20',' ',$prodi);
$data['total']=$ttal;
$data['data']=$this->Model_home->get_kab($th,$stat,$fak,$prod1);
$this->load->view('other/isi',$data);
}

function cari2(){
$fak=$this->input->post('fak');
$prod=$this->input->post('prodi');


if($prod =='Pilih Prodi'){
$key ='fakultas';
$col=$fak;
}else{
$key ='prodi';
$col=$prod;
}
$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');
$data['stat']=$this->session->userdata('stat');


$row1=$this->db->count_all_results('calon_mhs');



$data['datum']=$this->Model_home->search2($col,$key);

$data['pagination'] = $this->pagination->create_links();
$this->load->view('admin/mhs',$data);




}


function cari3(){
$prod=$this->input->post('prod3');
$kab=$this->input->post('kab3');

$data['username']=$this->session->userdata('username');
$data['password']=$this->session->userdata('password');
$data['level']=$this->session->userdata('level');
$data['log']=$this->session->userdata('level');
$data['stat']=$this->session->userdata('stat');


$row1=$this->db->count_all_results('calon_mhs');



$data['datum']=$this->Model_home->search3($prod,$kab);

$data['pagination'] = $this->pagination->create_links();
$this->load->view('admin/mhs',$data);

}

}



