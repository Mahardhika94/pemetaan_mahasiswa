SELECT COUNT( IF( pengirim =  '13220012', 1, NULL ) ) AS jml,
COUNT( IF( pengirim =  '13220012', 1, NULL ) ) AS jml
FROM pesan

SELECT COUNT( IF( provinsi =  'Riau', 1, NULL ) ) AS riau,
count(if(provinsi ='Nusa Tenggara Barat')) as ntb
FROM  `calon_mhs`;

SELECT COUNT( IF( provinsi =  'Aceh', 1, NULL ) ) AS aceh,
SELECT COUNT( IF( provinsi =  'Bali', 1, NULL ) ) AS bali,
SELECT COUNT( IF( provinsi =  'Banten', 1, NULL ) ) AS banten,
SELECT COUNT( IF( provinsi =  'Bengkulu', 1, NULL ) ) AS bengkulu,
SELECT COUNT( IF( provinsi =  'Gorontalo', 1, NULL ) ) AS gorontalo,
SELECT COUNT( IF( provinsi =  'Jakarta', 1, NULL ) ) AS jakarta,
SELECT COUNT( IF( provinsi =  'Jambi', 1, NULL ) ) AS jambi,
SELECT COUNT( IF( provinsi =  'Jawa Barat', 1, NULL ) ) AS jabar,
SELECT COUNT( IF( provinsi =  'Jawa Tengah', 1, NULL ) ) AS jateng,
SELECT COUNT( IF( provinsi =  'Jawa Timur', 1, NULL ) ) AS jatim,
SELECT COUNT( IF( provinsi =  'Kalimantan Barat', 1, NULL ) ) AS kalbar,
SELECT COUNT( IF( provinsi =  'Kalimantan Selatan', 1, NULL ) ) AS kalsel,
SELECT COUNT( IF( provinsi =  'Kalimantan Tengah', 1, NULL ) ) AS kalteng,
SELECT COUNT( IF( provinsi =  'Kalimantan Timur', 1, NULL ) ) AS kaltim,
SELECT COUNT( IF( provinsi =  'Kalimantan Utara', 1, NULL ) ) AS kalut,
SELECT COUNT( IF( provinsi =  'Kepulauan Bangka Belitung', 1, NULL ) ) AS kep_bangka,
SELECT COUNT( IF( provinsi =  'Kepulauan Riau', 1, NULL ) ) AS kepri,
SELECT COUNT( IF( provinsi =  'Lampung', 1, NULL ) ) AS lampung,
SELECT COUNT( IF( provinsi =  'Maluku', 1, NULL ) ) AS maluku,
SELECT COUNT( IF( provinsi =  'Maluku Utara', 1, NULL ) ) AS maltara,
SELECT COUNT( IF( provinsi =  'Nusa Tenggara Timur', 1, NULL ) ) AS ntt,
SELECT COUNT( IF( provinsi =  'Nusa Tenggara Barat', 1, NULL ) ) AS ntb,
SELECT COUNT( IF( provinsi =  'Papua', 1, NULL ) ) AS papua,
SELECT COUNT( IF( provinsi =  'Papua  Barat', 1, NULL ) ) AS pabar,
SELECT COUNT( IF( provinsi =  'Riau', 1, NULL ) ) AS riau,
SELECT COUNT( IF( provinsi =  'Sulawesi Barat', 1, NULL ) ) AS sulbar,
SELECT COUNT( IF( provinsi =  'Sulawesi Selatan', 1, NULL ) ) AS sulsel,
SELECT COUNT( IF( provinsi =  'Sulawesi Tengah', 1, NULL ) ) AS sulteh,
SELECT COUNT( IF( provinsi =  'Sulawesi Tenggara', 1, NULL ) ) AS sulteng,
SELECT COUNT( IF( provinsi =  'Sulawesi Utara', 1, NULL ) ) AS sulut,
SELECT COUNT( IF( provinsi =  'Sumatera Barat', 1, NULL ) ) AS sumbar,
SELECT COUNT( IF( provinsi =  'Sumatera Selatan', 1, NULL ) ) AS sumsel,
SELECT COUNT( IF( provinsi =  'Sumatera Utara', 1, NULL ) ) AS sumut,
SELECT COUNT( IF( provinsi =  'Yogyakarta', 1, NULL ) ) AS jogja,
FROM calon_mhs
WHERE tahun_masuk =  '2016'


SELECT COUNT( IF( provinsi =  'Aceh', 1, NULL ) ) AS aceh,
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
FROM calon_mhs;


select (
select count(if (prodi ='Teknik Informatika',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as ti_nr,
(
select count(if (prodi ='Teknik Informatika',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as ti_yr,

(
select count(if (prodi ='Teknik Elektro',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as te_nr,
(
select count(if (prodi ='Teknik Elektro',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as te_yr,
(
select count(if (prodi ='Sistem Informasi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as si_nr,
(
select count(if (prodi ='Sistem Informasi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as si_yr,
(select count(if (prodi ='Manajemen Informatika',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as mi_nr,
(
select count(if (prodi ='Manajemen Informatika',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as mi_yr,
(select count(if (prodi ='Keperawatan',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as perawat_nr,
(
select count(if (prodi ='Keperawatan',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as perawat_yr,
(select count(if (prodi ='NERS',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as ners_nr,
(
select count(if (prodi ='NERS',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as ners_yr,
(select count(if (prodi ='KEBIDANAN D-III',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as bd3,
(
select count(if (prodi ='KEBIDANAN D-III',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as bd3,
(select count(if (prodi ='Ilmu Gizi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as gizi_nr,
(
select count(if (prodi ='Ilmu Gizi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as gizi_yr,
(select count(if (prodi ='Kesehatan Masyarakat',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as kesmas_nr,
(
select count(if (prodi ='Kesehatan Masyarakat',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as kesmas_yr,
(select count(if (prodi ='Bidan Pendidik',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as bd4_nr,
(
select count(if (prodi ='Bidan Pendidik',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as bd4_yr,
(select count(if (prodi ='Akuntansi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as akuntansi_nr,
(
select count(if (prodi ='Akuntansi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as akuntansi_yr,
(select count(if (prodi ='Hubungan Internasional',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as hi_nr,
(
select count(if (prodi ='Hubungan Internasional',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as hi_yr,
(select count(if (prodi ='Sastra Inggris',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as sig_nr,
(
select count(if (prodi ='Sastra Inggris',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as sig_yr,
(select count(if (prodi ='Ilmu Komunikasi',1 ,NULL))
from calon_mhs where registrasi ='No' and tahun_masuk='2013'
) as ilkom_nr,
(
select count(if (prodi ='Ilmu Komunikasi',1 ,NULL))
from calon_mhs where registrasi ='Yes' and tahun_masuk='2013'
) as ilkom_yr;


select * from calon_mhs where '".$col." like '%".$sart."%';