<?php class Model_home extends CI_Model
{

function login_user($user,$pass,$level)
{
$this->db->where('username',$user);
$this->db->where('password',$pass);
$this->db->where('level',$level);
$query=$this->db->get('user');

return $query->result();

}

function get_other(){
$query=$this->db->get('other');
if($query->num_rows() > 0){
return $query;
}else{
return array();
}

}

function update_pro($user,$val)
{
$this->db->where('username',$user);
$query=$this->db->update('user',$val);
return $query;
}
function up_sjr($val){
$this->db->where('id',1);
$query=$this->db->update('other',$val);
return $query;
}

function add_user($val){
$query=$this->db->insert('user',$val);
return $query;
}

function del_user($nik){
$this->db->where('username',$nik);
$query=$this->db->delete('user');
return $query;

}

function get_user(){
$query=$this->db->get('user');
if($query->num_rows()>0){
return $query->result();
}else{
return array();
}
}

function input_mhs($val){
$query=$this->db->insert('calon_mhs',$val);
return $query;
}

function up_mhs($nid,$val){
$this->db->where('id_calon',$nid);
$query=$this->db->update('calon_mhs',$val);
return $query;
}

function get_mhs($num){
$this->db->limit(5,$num);
$query=$this->db->get('calon_mhs');
return $query->result();
}
function sel_mhs($num){
$this->db->where('id_calon',$num);
$query=$this->db->get('calon_mhs');
return $query;
}

function del_mhs($nid){
$this->db->where('id_calon',$nid);
$this->db->delete('calon_mhs');
}

function get_prov($th){
$query=$this->db->query("SELECT COUNT( IF( provinsi =  'Aceh', 1, NULL ) ) AS aceh,
 COUNT( IF( provinsi =  'Bali', 1, NULL ) ) AS bali,
 COUNT( IF( provinsi =  'Banten', 1, NULL ) ) AS banten,
 COUNT( IF( provinsi =  'Bengkulu', 1, NULL ) ) AS bengkulu,
 COUNT( IF( provinsi =  'Gorontalo', 1, NULL ) ) AS gorontalo,
 COUNT( IF( provinsi =  'Jakarta', 1, NULL ) ) AS jakarta,
 COUNT( IF( provinsi =  'Jambi', 1, NULL ) ) AS jambi,
 COUNT( IF( provinsi =  'Jawa Barat', 1, NULL ) ) AS jabar,
 COUNT( IF( provinsi =  'Jawa Tengah', 1, NULL ) ) AS jateng,
 COUNT( IF( provinsi =  'Jawa Timur', 1, NULL ) ) AS jatim,
 COUNT( IF( provinsi =  'Kalimantan Barat', 1, NULL ) ) AS kalbar,
 COUNT( IF( provinsi =  'Kalimantan Selatan', 1, NULL ) ) AS kalsel,
 COUNT( IF( provinsi =  'Kalimantan Tengah', 1, NULL ) ) AS kalteng,
 COUNT( IF( provinsi =  'Kalimantan Timur', 1, NULL ) ) AS kaltim,
 COUNT( IF( provinsi =  'Kalimantan Utara', 1, NULL ) ) AS kalut,
 COUNT( IF( provinsi =  'Kepulauan Bangka Belitung', 1, NULL ) ) AS kep_bangka,
 COUNT( IF( provinsi =  'Kepulauan Riau', 1, NULL ) ) AS kepri,
 COUNT( IF( provinsi =  'Lampung', 1, NULL ) ) AS lampung,
 COUNT( IF( provinsi =  'Maluku', 1, NULL ) ) AS maluku,
 COUNT( IF( provinsi =  'Maluku Utara', 1, NULL ) ) AS maltara,
 COUNT( IF( provinsi =  'Nusa Tenggara Timur', 1, NULL ) ) AS ntt,
 COUNT( IF( provinsi =  'Nusa Tenggara Barat', 1, NULL ) ) AS ntb,
 COUNT( IF( provinsi =  'Papua', 1, NULL ) ) AS papua,
 COUNT( IF( provinsi =  'Papua  Barat', 1, NULL ) ) AS pabar,
 COUNT( IF( provinsi =  'Riau', 1, NULL ) ) AS riau,
 COUNT( IF( provinsi =  'Sulawesi Barat', 1, NULL ) ) AS sulbar,
 COUNT( IF( provinsi =  'Sulawesi Selatan', 1, NULL ) ) AS sulsel,
 COUNT( IF( provinsi =  'Sulawesi Tengah', 1, NULL ) ) AS sulteh,
 COUNT( IF( provinsi =  'Sulawesi Tenggara', 1, NULL ) ) AS sulteng,
 COUNT( IF( provinsi =  'Sulawesi Utara', 1, NULL ) ) AS sulut,
 COUNT( IF( provinsi =  'Sumatera Barat', 1, NULL ) ) AS sumbar,
 COUNT( IF( provinsi =  'Sumatera Selatan', 1, NULL ) ) AS sumsel,
 COUNT( IF( provinsi =  'Sumatera Utara', 1, NULL ) ) AS sumut,
 COUNT( IF( provinsi =  'Yogyakarta', 1, NULL ) ) AS jogja
FROM calon_mhs where tahun_masuk ='".$th."';");
return $query;
}

function get_prov_fak($th,$fak){
$query=$this->db->query("SELECT COUNT( IF( provinsi =  'Aceh', 1, NULL ) ) AS aceh,
 COUNT( IF( provinsi =  'Bali', 1, NULL ) ) AS bali,
 COUNT( IF( provinsi =  'Banten', 1, NULL ) ) AS banten,
 COUNT( IF( provinsi =  'Bengkulu', 1, NULL ) ) AS bengkulu,
 COUNT( IF( provinsi =  'Gorontalo', 1, NULL ) ) AS gorontalo,
 COUNT( IF( provinsi =  'Jakarta', 1, NULL ) ) AS jakarta,
 COUNT( IF( provinsi =  'Jambi', 1, NULL ) ) AS jambi,
 COUNT( IF( provinsi =  'Jawa Barat', 1, NULL ) ) AS jabar,
 COUNT( IF( provinsi =  'Jawa Tengah', 1, NULL ) ) AS jateng,
 COUNT( IF( provinsi =  'Jawa Timur', 1, NULL ) ) AS jatim,
 COUNT( IF( provinsi =  'Kalimantan Barat', 1, NULL ) ) AS kalbar,
 COUNT( IF( provinsi =  'Kalimantan Selatan', 1, NULL ) ) AS kalsel,
 COUNT( IF( provinsi =  'Kalimantan Tengah', 1, NULL ) ) AS kalteng,
 COUNT( IF( provinsi =  'Kalimantan Timur', 1, NULL ) ) AS kaltim,
 COUNT( IF( provinsi =  'Kalimantan Utara', 1, NULL ) ) AS kalut,
 COUNT( IF( provinsi =  'Kepulauan Bangka Belitung', 1, NULL ) ) AS kep_bangka,
 COUNT( IF( provinsi =  'Kepulauan Riau', 1, NULL ) ) AS kepri,
 COUNT( IF( provinsi =  'Lampung', 1, NULL ) ) AS lampung,
 COUNT( IF( provinsi =  'Maluku', 1, NULL ) ) AS maluku,
 COUNT( IF( provinsi =  'Maluku Utara', 1, NULL ) ) AS maltara,
 COUNT( IF( provinsi =  'Nusa Tenggara Timur', 1, NULL ) ) AS ntt,
 COUNT( IF( provinsi =  'Nusa Tenggara Barat', 1, NULL ) ) AS ntb,
 COUNT( IF( provinsi =  'Papua', 1, NULL ) ) AS papua,
 COUNT( IF( provinsi =  'Papua  Barat', 1, NULL ) ) AS pabar,
 COUNT( IF( provinsi =  'Riau', 1, NULL ) ) AS riau,
 COUNT( IF( provinsi =  'Sulawesi Barat', 1, NULL ) ) AS sulbar,
 COUNT( IF( provinsi =  'Sulawesi Selatan', 1, NULL ) ) AS sulsel,
 COUNT( IF( provinsi =  'Sulawesi Tengah', 1, NULL ) ) AS sulteh,
 COUNT( IF( provinsi =  'Sulawesi Tenggara', 1, NULL ) ) AS sulteng,
 COUNT( IF( provinsi =  'Sulawesi Utara', 1, NULL ) ) AS sulut,
 COUNT( IF( provinsi =  'Sumatera Barat', 1, NULL ) ) AS sumbar,
 COUNT( IF( provinsi =  'Sumatera Selatan', 1, NULL ) ) AS sumsel,
 COUNT( IF( provinsi =  'Sumatera Utara', 1, NULL ) ) AS sumut,
 COUNT( IF( provinsi =  'Yogyakarta', 1, NULL ) ) AS jogja
FROM calon_mhs where tahun_masuk ='".$th."' and fakultas ='".$fak."';");
return $query;
}

function get_prov_prod($th,$fak,$prod){
$query=$this->db->query("SELECT COUNT( IF( provinsi =  'Aceh', 1, NULL ) ) AS aceh,
 COUNT( IF( provinsi =  'Bali', 1, NULL ) ) AS bali,
 COUNT( IF( provinsi =  'Banten', 1, NULL ) ) AS banten,
 COUNT( IF( provinsi =  'Bengkulu', 1, NULL ) ) AS bengkulu,
 COUNT( IF( provinsi =  'Gorontalo', 1, NULL ) ) AS gorontalo,
 COUNT( IF( provinsi =  'Jakarta', 1, NULL ) ) AS jakarta,
 COUNT( IF( provinsi =  'Jambi', 1, NULL ) ) AS jambi,
 COUNT( IF( provinsi =  'Jawa Barat', 1, NULL ) ) AS jabar,
 COUNT( IF( provinsi =  'Jawa Tengah', 1, NULL ) ) AS jateng,
 COUNT( IF( provinsi =  'Jawa Timur', 1, NULL ) ) AS jatim,
 COUNT( IF( provinsi =  'Kalimantan Barat', 1, NULL ) ) AS kalbar,
 COUNT( IF( provinsi =  'Kalimantan Selatan', 1, NULL ) ) AS kalsel,
 COUNT( IF( provinsi =  'Kalimantan Tengah', 1, NULL ) ) AS kalteng,
 COUNT( IF( provinsi =  'Kalimantan Timur', 1, NULL ) ) AS kaltim,
 COUNT( IF( provinsi =  'Kalimantan Utara', 1, NULL ) ) AS kalut,
 COUNT( IF( provinsi =  'Kepulauan Bangka Belitung', 1, NULL ) ) AS kep_bangka,
 COUNT( IF( provinsi =  'Kepulauan Riau', 1, NULL ) ) AS kepri,
 COUNT( IF( provinsi =  'Lampung', 1, NULL ) ) AS lampung,
 COUNT( IF( provinsi =  'Maluku', 1, NULL ) ) AS maluku,
 COUNT( IF( provinsi =  'Maluku Utara', 1, NULL ) ) AS maltara,
 COUNT( IF( provinsi =  'Nusa Tenggara Timur', 1, NULL ) ) AS ntt,
 COUNT( IF( provinsi =  'Nusa Tenggara Barat', 1, NULL ) ) AS ntb,
 COUNT( IF( provinsi =  'Papua', 1, NULL ) ) AS papua,
 COUNT( IF( provinsi =  'Papua  Barat', 1, NULL ) ) AS pabar,
 COUNT( IF( provinsi =  'Riau', 1, NULL ) ) AS riau,
 COUNT( IF( provinsi =  'Sulawesi Barat', 1, NULL ) ) AS sulbar,
 COUNT( IF( provinsi =  'Sulawesi Selatan', 1, NULL ) ) AS sulsel,
 COUNT( IF( provinsi =  'Sulawesi Tengah', 1, NULL ) ) AS sulteh,
 COUNT( IF( provinsi =  'Sulawesi Tenggara', 1, NULL ) ) AS sulteng,
 COUNT( IF( provinsi =  'Sulawesi Utara', 1, NULL ) ) AS sulut,
 COUNT( IF( provinsi =  'Sumatera Barat', 1, NULL ) ) AS sumbar,
 COUNT( IF( provinsi =  'Sumatera Selatan', 1, NULL ) ) AS sumsel,
 COUNT( IF( provinsi =  'Sumatera Utara', 1, NULL ) ) AS sumut,
 COUNT( IF( provinsi =  'Yogyakarta', 1, NULL ) ) AS jogja
FROM calon_mhs where tahun_masuk ='".$th."' and fakultas ='".$fak."' and prodi='".$prod."';");
return $query;
}



function get_tahun(){
$this->db->order_by('tahun_masuk');
$this->db->group_by('tahun_masuk');
$query=$this->db->get('calon_mhs');
return $query->result();
}

function get_total($tahun){
$query=$this->db->query("select count(*) as th from calon_mhs where tahun_masuk ='".$tahun."';");
return $query;
}

function get_total2($th,$fak){
$query=$this->db->query("select count(*) as th from calon_mhs where tahun_masuk ='".$th."' and fakultas ='".$fak."';");
return $query;
}
function get_total3($th,$fak,$prod){
$query=$this->db->query("select count(*) as th from calon_mhs where tahun_masuk ='".$th."' and fakultas ='".$fak."' and prodi ='".$prod."';");
return $query;
}

function get_tahun2(){
$query=$this->db->query("select tahun_masuk from calon_mhs group by tahun_masuk");
return $query->result();
}
function graf_univ($th){
$query=$this->db->query("SELECT COUNT( IF( fakultas =  'FST', 1, NULL ) ) AS FST,
 COUNT( IF( fakultas =  'FIKES', 1, NULL ) ) AS FIKES,
 COUNT( IF( fakultas =  'FISE', 1, NULL ) ) AS FISE from calon_mhs where tahun_masuk='".$th."';");
return $query;
}

function get_report($th){
$query=$this->db->query("select (
select count(if (prodi ='Teknik Informatika',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as ti_nr,
(
select count(if (prodi ='Teknik Informatika',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as ti_yr,

(
select count(if (prodi ='Teknik Elektro',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as te_nr,
(
select count(if (prodi ='Teknik Elektro',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as te_yr,
(
select count(if (prodi ='Sistem Informasi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as si_nr,
(
select count(if (prodi ='Sistem Informasi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as si_yr,
(select count(if (prodi ='Manajement Informatika',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as mi_nr,
(
select count(if (prodi ='Manajement Informatika',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as mi_yr,
(select count(if (prodi ='Keperawatan',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as perawat_nr,
(
select count(if (prodi ='Keperawatan',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as perawat_yr,
(select count(if (prodi ='NERS',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as ners_nr,
(
select count(if (prodi ='NERS',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as ners_yr,
(select count(if (prodi ='KEBIDANAN D-III',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as bd3_nr,
(
select count(if (prodi ='KEBIDANAN D-III',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as bd3_yr,
(select count(if (prodi ='Ilmu Gizi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as gizi_nr,
(
select count(if (prodi ='Ilmu Gizi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as gizi_yr,
(select count(if (prodi ='Fisioterapi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as fisio_nr,
(
select count(if (prodi ='Fisioterapi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as fisio_yr,
(select count(if (prodi ='Kesehatan Masyarakat',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as kesmas_nr,
(
select count(if (prodi ='Kesehatan Masyarakat',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as kesmas_yr,
(select count(if (prodi ='Bidan Pendidik',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as bd4_nr,
(
select count(if (prodi ='Bidan Pendidik',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as bd4_yr,
(select count(if (prodi ='Akuntansi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as akuntansi_nr,
(
select count(if (prodi ='Akuntansi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as akuntansi_yr,
(select count(if (prodi ='Hubungan Internasional',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as hi_nr,
(
select count(if (prodi ='Hubungan Internasional',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as hi_yr,
(select count(if (prodi ='Sastra Inggris',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as sig_nr,
(
select count(if (prodi ='Sastra Inggris',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as sig_yr,
(select count(if (prodi ='Ilmu Komunikasi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as ilkom_nr,
(
select count(if (prodi ='Ilmu Komunikasi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as ilkom_yr,
(select count(if (prodi ='Ilmu Gizi',1 ,NULL))
from calon_mhs where status ='Transfer' and tahun_masuk='".$th."'
) as gizi_tran,
(select count(if (prodi ='Fisioterapi',1 ,NULL))
from calon_mhs where status ='Transfer' and tahun_masuk='".$th."'
) as fisio_tran,
(select count(if (prodi ='Kesehatan Masyarakat',1 ,NULL))
from calon_mhs where status ='Transfer' and tahun_masuk='".$th."'
) as kesmas_tran,
(
select count(if (prodi ='Bidan Pendidik',1 ,NULL))
from calon_mhs where status ='Transfer' and tahun_masuk='".$th."'
) as bd4_tran,
(select count(*)
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."'
) as tt_nr,
(
select count(*)
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."'
) as tt_yr;");
return $query;

}

function get_report_fak($th,$fak){
$query=$this->db->query("select (
select count(if (prodi ='Teknik Informatika',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as ti_nr,
(
select count(if (prodi ='Teknik Informatika',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as ti_yr,

(
select count(if (prodi ='Teknik Elektro',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as te_nr,
(
select count(if (prodi ='Teknik Elektro',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as te_yr,
(
select count(if (prodi ='Sistem Informasi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as si_nr,
(
select count(if (prodi ='Sistem Informasi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as si_yr,
(select count(if (prodi ='Manajement Informatika',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as mi_nr,
(
select count(if (prodi ='Manajement Informatika',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as mi_yr,
(select count(if (prodi ='Keperawatan',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as perawat_nr,
(
select count(if (prodi ='Keperawatan',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as perawat_yr,
(select count(if (prodi ='NERS',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as ners_nr,
(
select count(if (prodi ='NERS',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as ners_yr,
(select count(if (prodi ='KEBIDANAN D-III',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as bd3_nr,
(
select count(if (prodi ='KEBIDANAN D-III',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as bd3_yr,
(select count(if (prodi ='Ilmu Gizi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as gizi_nr,
(
select count(if (prodi ='Ilmu Gizi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as gizi_yr,
(select count(if (prodi ='Kesehatan Masyarakat',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as kesmas_nr,
(
select count(if (prodi ='Kesehatan Masyarakat',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as kesmas_yr,
(select count(if (prodi ='Bidan Pendidik',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as bd4_nr,
(
select count(if (prodi ='Bidan Pendidik',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as bd4_yr,
(select count(if (prodi ='Akuntansi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as akuntansi_nr,
(
select count(if (prodi ='Akuntansi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as akuntansi_yr,
(select count(if (prodi ='Hubungan Internasional',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as hi_nr,
(
select count(if (prodi ='Hubungan Internasional',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as hi_yr,
(select count(if (prodi ='Sastra Inggris',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as sig_nr,
(
select count(if (prodi ='Sastra Inggris',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as sig_yr,
(select count(if (prodi ='Ilmu Komunikasi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as ilkom_nr,
(
select count(if (prodi ='Ilmu Komunikasi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as ilkom_yr,
(select count(if (prodi ='Ilmu Gizi',1 ,NULL))
from calon_mhs where status ='Transfer' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as gizi_tran,

(select count(if (prodi ='Kesehatan Masyarakat',1 ,NULL))
from calon_mhs where status ='Transfer' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as kesmas_tran,
(
select count(if (prodi ='Bidan Pendidik',1 ,NULL))
from calon_mhs where status ='Transfer' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as bd4_tran,
(select count(*)
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as tt_nr,
(
select count(*)
from calon_mhs where registrasi ='Yes' and tahun_masuk='".$th."' and fakultas ='".$fak."' 
) as tt_yr;");
return $query;

}


function get_report_prod($th,$fak,$prod){
$query=$this->db->query("select (
select count(if (prodi ='Teknik Informatika',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as ti_nr,
(
select count(if (prodi ='Teknik Informatika',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as ti_yr,

(
select count(if (prodi ='Teknik Elektro',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='".$th."' and fakultas = '".$fak."' and prodi= '".$prod."' 
) as te_nr,
(
select count(if (prodi ='Teknik Elektro',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as te_yr,
(
select count(if (prodi ='Sistem Informasi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as si_nr,
(
select count(if (prodi ='Sistem Informasi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as si_yr,
(select count(if (prodi ='Manajement Informatika',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as mi_nr,
(
select count(if (prodi ='Manajement Informatika',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as mi_yr,
(select count(if (prodi ='Keperawatan',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as perawat_nr,
(
select count(if (prodi ='Keperawatan',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as perawat_yr,
(select count(if (prodi ='NERS',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as ners_nr,
(
select count(if (prodi ='NERS',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as ners_yr,
(select count(if (prodi ='KEBIDANAN D-III',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as bd3_nr,
(
select count(if (prodi ='KEBIDANAN D-III',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as bd3_yr,
(select count(if (prodi ='Ilmu Gizi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as gizi_nr,
(
select count(if (prodi ='Ilmu Gizi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as gizi_yr,
(select count(if (prodi ='Kesehatan Masyarakat',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as kesmas_nr,
(
select count(if (prodi ='Kesehatan Masyarakat',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as kesmas_yr,
(select count(if (prodi ='Bidan Pendidik',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as bd4_nr,
(
select count(if (prodi ='Bidan Pendidik',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as bd4_yr,
(select count(if (prodi ='Akuntansi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as akuntansi_nr,
(
select count(if (prodi ='Akuntansi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as akuntansi_yr,
(select count(if (prodi ='Hubungan Internasional',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as hi_nr,
(
select count(if (prodi ='Hubungan Internasional',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as hi_yr,
(select count(if (prodi ='Sastra Inggris',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as sig_nr,
(
select count(if (prodi ='Sastra Inggris',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as sig_yr,
(select count(if (prodi ='Ilmu Komunikasi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as ilkom_nr,
(
select count(if (prodi ='Ilmu Komunikasi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as ilkom_yr,
(select count(if (prodi ='Ilmu Gizi',1 ,NULL))
from calon_mhs where status ='Transfer' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as gizi_tran,

(select count(if (prodi ='Kesehatan Masyarakat',1 ,NULL))
from calon_mhs where status ='Transfer' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as kesmas_tran,
(
select count(if (prodi ='Bidan Pendidik',1 ,NULL))
from calon_mhs where status ='Transfer' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as bd4_tran,
(select count(*)
from calon_mhs where registrasi ='No' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as tt_nr,
(
select count(*)
from calon_mhs where registrasi ='Yes' and tahun_masuk=".$th." and fakultas = '".$fak."' and prodi= '".$prod."'  
) as tt_yr;");
return $query;

}


function get_FST($th){
$query=$this->db->query("select count(if (prodi ='Teknik Informatika', 1, NULL)) as ti,
	count(if (prodi ='Teknik Elektro', 1, NULL)) as te,
        count(if (prodi ='Sistem Informasi', 1, NULL)) as si,
	count(if (prodi ='Manajemen Informatika', 1, NULL)) as mi
from calon_mhs where tahun_masuk='".$th."';");
return $query;
}

function get_FIKES($th){
$query=$this->db->query("select count(if (prodi ='Keperawatan', 1, NULL)) as perawat,
	count(if (prodi ='NERS', 1, NULL)) as ners,
	count(if (prodi ='Fisioterapi', 1, NULL)) as fisio,
        count(if (prodi ='KEBIDANAN D-III', 1, NULL)) as bd3,
	count(if (prodi ='Ilmu Gizi', 1, NULL)) as gizi,
        count(if (prodi ='Bidan Pendidik', 1, NULL)) as bd4,
        count(if (prodi ='Kesehatan Masyarakat', 1, NULL)) as kesmas
from calon_mhs where tahun_masuk='".$th."';");
return $query;
}

function get_FISE($th){
$query=$this->db->query("select count(if (prodi ='Akuntansi', 1, NULL)) as akuntansi,
        count(if (prodi ='Hubungan Internasional', 1, NULL)) as hi,
	count(if (prodi ='Sastra Inggris', 1, NULL)) as sig,
        count(if (prodi ='Ilmu Komunikasi', 1, NULL)) as ilkom
from calon_mhs where tahun_masuk='".$th."';");
return $query;
}

function get_total22($tahun,$fak){
$query=$this->db->query("select count(*) as th from calon_mhs where tahun_masuk ='".$tahun."' and fakultas ='".$fak."' ;");
return $query;
}

function print_asal($th){
$this->db->order_by('sekolah_asal');
$this->db->where('tahun_masuk',$th);
$query=$this->db->get('calon_mhs');
return $query->result();
}

function print_asal_fak($th,$fak){
$this->db->order_by('sekolah_asal');
$this->db->where('tahun_masuk',$th);
$this->db->where('fakultas',$fak);
$query=$this->db->get('calon_mhs');
return $query->result();
}

function print_asal_prod($th,$fak,$prod){
$this->db->order_by('sekolah_asal');
$this->db->where('tahun_masuk',$th);
$this->db->where('fakultas',$fak);
$this->db->where('prodi',$prod);
$query=$this->db->get('calon_mhs');
return $query->result();
}

function search($key,$col,$num){
if($num ==''){
$num=0;}
$no=5;
$query =$this->db->query("select * from calon_mhs where ".$col." like '%".$key."%';");
return $query->result();
}

function search2($key,$col){
$this->db->like($col,$key , 'both');
$query=$this->db->get('calon_mhs');
return $query->result();
}

function search3($prod3,$kab3){
$this->db->where('prodi',$prod3);
$this->db->where('kota_kab',$kab3);
$query=$this->db->get('calon_mhs');
return $query->result();
}

function get_kab($th,$stat,$fak,$prod){
if($stat == 0){
	$query=$this->db->query("SELECT * , COUNT( * ) AS jml FROM  `calon_mhs` WHERE tahun_masuk =".$th." GROUP BY kota_kab");
}elseif($stat == 1){
	$query=$this->db->query("SELECT * , COUNT( * ) AS jml FROM  `calon_mhs` WHERE tahun_masuk =".$th." and fakultas ='".$fak."' GROUP BY kota_kab");
}elseif($stat == 2){
	$query=$this->db->query("SELECT * , COUNT( * ) AS jml FROM  `calon_mhs` WHERE tahun_masuk =".$th." and fakultas ='".$fak."' and prodi ='".$prod."' GROUP BY kota_kab");

}
return $query->result();

}

}