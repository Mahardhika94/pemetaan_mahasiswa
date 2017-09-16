-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Agu 2017 pada 06.14
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemetaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(9) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(20) NOT NULL,
  `id_pesan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `asal_sekolah`
--

CREATE TABLE IF NOT EXISTS `asal_sekolah` (
  `id_asal_sekolah` int(9) NOT NULL,
  `nama_sekolah` varchar(25) NOT NULL,
  `alamat_sekolah` varchar(30) NOT NULL,
  `pimpinan_sekolah` varchar(25) NOT NULL,
  `id_kota` int(4) NOT NULL,
  `id_provinsi` int(3) NOT NULL,
  `id_calon_ms` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE IF NOT EXISTS `calon_mhs` (
  `id_calon` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `status` varchar(25) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `prodi` varchar(31) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota_kab` varchar(50) NOT NULL,
  `sekolah_asal` varchar(70) NOT NULL,
  `alamat_sekolah` varchar(120) NOT NULL,
  `kepala_sekolah` varchar(50) NOT NULL,
  `registrasi` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`id_calon`, `nama`, `tahun_masuk`, `status`, `fakultas`, `prodi`, `provinsi`, `kota_kab`, `sekolah_asal`, `alamat_sekolah`, `kepala_sekolah`, `registrasi`) VALUES
('1600110042', 'CHLARA MELANIE TRIANDARI', 2016, 'Maba', 'Fikes', 'Bidan Pendidik', 'Kalimantan Selatan', 'kota Banjarbaru', 'SMA XAVERIUS I', 'JL RS CHARITAS NO. 602', 'YOHANES SABAR, A.MD', 'Yes'),
('1600110073', 'RIA MELINDA ERIKA ANGGRAI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMA N 1 SEMANU', 'SEMANU SELATAN SEMANU', 'DRA. WARJIYEM, M.PD. I', 'Yes'),
('1600110156', 'NI MADE WINDA OPELYA', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Jembrana', 'SMAN 1 MELAYA', 'JL. RAYA NEGARA  ', 'DRS. I NYOMAN SUKARYA, M.PD', 'Yes'),
('1600110183', 'NI LUH EKA FEBRIYANTI', 2016, 'Maba', 'Fikes', 'Bidan Pendidik', 'Bali', 'Kabupaten Jembrana', 'SMAN 1 MELAYA', 'JL. RAYA NEGARA', 'DRS. I NYOMAN SUKARYA, M.PD', 'Yes'),
('1600110236', 'CRISTIN PUTRI SHOOTER', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Jakarta', 'Pilih Kabupaten/Kota Jakarta', 'SMA BUDHI WARMAN II JAKARTA', 'JL. RAYA BOGOR KM. 28 PASAR REBO', 'DRS. PUJIANTO', 'Yes'),
('1600110309', 'MONITA', 2016, 'Maba', 'Fikes', 'KEBIDANAN D-III', 'Kepulauan Bangka Belitung', 'kabupaten Belitung', 'SMAN 1 TANJUNGPANDAN', 'SMAN 2 TANJUNG PANDAN', 'JL. JENDRAL SUDRIMAN KM .7 PERAWAS BELITUNNG', 'Yes'),
('1600110310', 'ADRIANIE MOESNANINGSIH', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Kepulauan Bangka Belitung', 'kabupaten Belitung', 'SMAN 2 TANJUNG PANDAN', 'JL. JENDRAL SUDRIMAN KM .7 PERAWAS BELITUNNG', 'AKHMAD FAJERI, S.PD', 'Yes'),
('1600110311', 'DEBBY AGUSTIN', 2016, 'Maba', 'Fikes', 'KEBIDANAN D-III', 'Kepulauan Bangka Belitung', 'kabupaten Belitung', 'SMAN 2 TANJUNG PANDAN', 'JL. JENDRAL SUDRIMAN KM .7 ', 'AKHMAD FAJERI, S.PD', 'Yes'),
('1600110312', 'LUTHFI ANANDITA', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Kepulauan Bangka Belitung', 'kabupaten Belitung', 'SMAN 2 TANJUNG PANDAN', 'JL. JENDRAL SUDRIMAN KM .7', 'AKHMAD FAJERI, S.PD', 'Yes'),
('1600110313', 'BELLA ANJANI PUTRI VIDYAT', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Kepulauan Bangka Belitung', 'kabupaten Belitung', 'SMAN 2 TANJUNG PANDAN', 'JL. JENDRAL SUDRIMAN KM .7 ', 'AKHMAD FAJERI, S.PD', 'Yes'),
('1600110394', 'I MADE SETIA SURYAWAN', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kota Denpasar', 'SMAN 8 DENPASAR ', 'JL. ANTASURA, PAGUYANGAN KAJA', '', 'Yes'),
('1600110397', 'ADE TRIANA', 2016, 'Pilih Status Calon Mahasi', 'FIKES', 'Ilmu Gizi', 'Jawa Barat', 'Pilih Kabupaten/Kota Jawa Barat', 'SMA N 2 BANJAR', 'JL. KH. MUHAMAD SANUSI ', '', 'Yes'),
('1600110428', 'JIHAD ISMAIL', 2016, 'Maba', 'FST', 'Teknik Elektro', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMAN 2 PLAYEN', 'JL. WONOSARI-YOGYAKARTA KM 4,5', '', 'Yes'),
('1600110493', 'LUSI YULIANINGSIH SUGMA', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Aceh', 'Pilih Kabupaten/Kota Aceh', 'SMA INSHAFUDDIN', 'JL. SRI RATU DRA. HJ HURAISMAH', 'DRA. HJ HURAISMAH', 'Yes'),
('1600110517', 'DINA MAULINA HAYATI', 2016, 'Maba', 'FIKES', 'Ilmu Gizi', 'Jawa Timur', 'Pilih Kabupaten/Kota Jawa Timur', 'MA AL-MAHRUSIYYAH', 'JL KH ABDUL KARIM LIRBOYO MOJOROTO', 'DRS. BUSTANUL ARIFIN, M.PD.I', 'Yes'),
('1600110553', 'FERIKA LIZA AULIA', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Kepulauan Bangka Belitung', 'kota Pangkal Pinang', 'SMA N 1 PANGKALAN BARU', 'JL RAYA GREEN JERUK ', 'UDIK RIPUL, S.PD, M.PD', 'Yes'),
('1600111031', 'IDA AYU DEVA WULANDARI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Buleleng', 'SMAN 1 BANJAR', 'DESA BANYUATIS ', 'DRS. I MADE NGAWI', 'Yes'),
('1600111083', 'WINDA PUTRI WINAHYU', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Gianyar', 'SMA N 1 BLAHBATUH', 'JL. ASTINA JAYA BLAHBATUH', 'I KETUT SULASTRA, S.PD, M.PD', 'Yes'),
('1600111133', 'NOVIA LESTARI', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Yogyakarta', 'kabupaten Bantul', 'SMA N 1 PLERET', 'KEDATON ', 'DRS. IMAM NUROHMAT', 'Yes'),
('1600111154', 'MUTIARA MAHARANI', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Jambi', 'Pilih Kabupaten/Kota Jambi', 'SMA N 17 TEBO', 'JL JAYAPURA SUMBERSARI RIMBO ULU ', 'SYAIFUL HADI, S.E, M.PD', 'Yes'),
('1600111176', 'NOVELLA DEVEGA', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Gianyar', 'SMA N 1 BLAHBATUH', 'JL. ASTINA JAYA BLAHBATUH', 'I KETUT SULASTRA, S.PD, M.PD', 'Yes'),
('1600111186', 'FEMY VALENTIN', 2016, 'Maba', 'FIKES', 'Ilmu Gizi', 'Sumatera Selatan', 'kabupaten Ogan Komering Ulu Timur', 'SMA N 2 MARTAPURA', 'JL. MERDEKA NO. 400 TERUKIS MARTAPURA', 'H. SUTMAN,S.PD, M.M', 'Yes'),
('1600111331', 'ILLIYIN AMANAH SETIA', 2016, 'Maba', 'Fise', 'Ilmu Komunikasi', 'Kepulauan Bangka Belitung', 'kabupaten Belitung Timur', 'SMAN 1 GANTUNG', 'JL SUDIRMAN BELITUNG TIMUR', 'SABARUDIN, M.PD', 'Yes'),
('1600111334', 'MUHAMAD FERY ARDIAN', 2016, 'Maba', 'FST', 'Teknik Informatika', 'Papua', 'kabupaten Mimika', 'SMAN 1 MIMIKA', 'MIMIKA', '', 'Yes'),
('1600111367', 'ANGGIKA INDAH PERMATASARI', 2016, 'Maba', 'Fikes', 'Bidan Pendidik', 'Kepulauan Bangka Belitung', 'kabupaten Belitung', 'SMAN 1 TANJUNGPANDAN', 'JL. GATOT SUBROTO', 'DRS. HARYANTO', 'Yes'),
('1600111379', 'MUHAMMAD IRFAN FAHRUDDIN', 2016, 'Maba', 'FST', 'Teknik Informatika', 'Yogyakarta', 'kabupaten Bantul', 'SMAN 2 BANGUNTAPAN', 'GLONDONG', '', 'Yes'),
('1600111735', 'KHAIRANTI', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Aceh', 'Kota Gosong Telaga', 'SMAN 1 SINGKIL UTARA', 'JL SINGKIL RIMO KM. 17 GOSONG TELAGA ', 'SUGIARTO, S.PD', 'Yes'),
('1600111773', 'SARTIKA PRATIWI FATMANING', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Bali', 'Kota Denpasar', 'SMA N 5 DENPASAR ', 'JL SANITASI NO. 2 DENPASAR', 'DRS. I MADE SUDHA, M.PD H', 'Yes'),
('1600111777', 'CYNDI ANGGITA PATTRISYA B', 2016, 'Maba', 'FIKES', 'Kesehatan Masyarakat', 'Maluku Utara', 'kabupaten Pulau Taliabu', 'SMA KRISTEN TOBELO', 'JL RS BETHESDA HALMAHERA UTARA', 'HERTJE MANUEL, S.PD, M.M', 'Yes'),
('1600111779', 'GUSTI NGURAH AGUNG ARTHA ', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Bali', 'Kabupaten Tabanan', 'SMAN N 1 MARGA', 'JL. WISNU MARGA', 'I WAYAN KANTUN ARIMBAWA, S.AG., M.PD.H', 'Yes'),
('1600111780', 'ETY YUSNITA', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Kepulauan Bangka Belitung', 'kabupaten Belitung Timur', 'SMA N 1 MANGGAR', 'JL SUDIRMAN MANGGAR ', 'DIAN IRYANI, S.PD', 'Yes'),
('1600111890', 'TARWINAH YAENAH', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Banten', 'Pilih Kabupaten/Kota Banten', 'SMA SWASTA DAAR EL-QOLAM 2 PANGKAT JAYANTI', 'GANTUNG ', 'H. MUHIDIN, M.PD', 'Yes'),
('1600111923', 'EKA PUTRI DUTA SARI', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Kepulauan Bangka Belitung', 'kabupaten Belitung Timur', 'SMA N 1 KELAPA KAMPIT', 'DESA KEPALA BANGKA BARAT', 'SRI MULYANI', 'Yes'),
('1600111990', 'EVA PUTRI YULIANA', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Jakarta', 'Pilih Kabupaten/Kota Jakarta', 'SMAN 1 JAKARTA', 'JL BUDI UTOMO NO. 7', 'DRA. MAS AYU YULIANA, M.PD', 'Yes'),
('1600112530', 'I GEDE YUDHA MAHADHITA DH', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Bali', 'Kabupaten Jembrana', 'SMA N 1 KEDIRI TABANAN', 'JL BINGIN AMBE ', 'DRS. I DEWA NYOMAN MARYONO, M.PD', 'Yes'),
('1600112536', 'TISHA ARYA LESTARI', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMA N 1 PATUK', 'Bunder ', 'MUJIYONO, S.PD, M.HUM', 'Yes'),
('1600112545', 'KETUT AYU WULANTARI', 2016, 'Maba', 'Fikes', 'Bidan Pendidik', 'Bali', 'Pilih Kabupaten/Kota Bali', 'SMA LABORATURIUM UNDIKSHA SINGARAJA', 'JL JATAYU 10', 'DRS. WAYAN SURAKARTA, M.PD', 'Yes'),
('1600112571', 'GHALI ALDZAHABI', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Kepulauan Bangka Belitung', 'kota Pangkal Pinang', 'SMA N 3 PANGKAL PINANG', 'JL K,H ADUL RASYID ', 'DRA. S.R KUNLISTIANI', 'Yes'),
('1600112574', 'YUYUN NAWANG SARI', 2016, 'Maba', 'FIKES', 'Ilmu Gizi', 'Sumatera Selatan', 'kabupaten Ogan Komering Ulu Timur', 'SMA N 2 OKU', 'JL. TANZANIA NO. 0235', 'AGUS SUDIANA, S.PD., MM', 'Yes'),
('1600112575', 'KUSNUL KHOTIMAH', 2016, 'Maba', 'Fikes', 'Bidan Pendidik', 'Jakarta', 'Pilih Kabupaten/Kota Jakarta', 'MAN 19 JAKARTA', 'JL. MUCHTAR RAYA', '', 'Yes'),
('1600112583', 'ASTRI WURYANI', 2016, 'Maba', 'FST', 'Manajemen Informatika', 'Yogyakarta', 'kabupaten Kulon Progo', 'SMA N 2 WATES ', 'JL. KH WAKHID HASYIM ', 'DRA. YATI UTAMI PURWANINGSIH, M.PD', 'Yes'),
('1600112639', 'SUSAN JULIANA SIHOMBING', 2016, 'Maba', 'Fikes', 'KEBIDANAN D-III', 'Kalimantan Selatan', 'kota Banjarmasin', 'SMA SWASTA RK BINTANG TIMUR', 'JL. MARIMBUN NO. 5', 'SABAR SIHOMBING, S.AG', 'Yes'),
('1600112661', 'BELLA PEBRIANDA', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Kepulauan Bangka Belitung', 'kabupaten Belitung Timur', 'SMA PLUS BAHRUL ULUM', 'KOMPLEK ISLAMIC CENTRE JL MATRAS LAMA', 'KING HAMAN HUTAMA, S.T', 'Yes'),
('1600112663', 'ANTONIA ADOLFIA KIMAN', 2016, 'Maba', 'FIKES', 'D-III Kebidanan', 'Papua', 'kota Jayapura', 'SMA N 1 OBAA', 'JL AGHAM NO 40', 'MAKSIMUS YAMBA, S.PD', 'Yes'),
('1600112793', 'DIMAS MAHARDINA PUTRA', 2016, 'Maba', 'Fise', 'Ilmu Komunikasi', 'Yogyakarta', 'kabupaten Bantul', 'SMA UII BANGUNTAPAN', '', 'H. SUMARYATIM, S.PD, M.PD', 'Yes'),
('1600112802', 'INDRI BALINA BR PANDA ', 2016, 'Maba', 'Fikes', 'Bidan Pendidik', 'Sumatera Utara', 'kabupaten Karo', 'SMA SWASTA SANTA MARIA KABANJAHE', 'JL. JAMIN GINTING ', 'WALI, S.PD', 'Yes'),
('1600112809', 'DEWA AYU ARI RATNA SADEWI', 2016, 'Maba', 'FST', 'Teknik Elektro', 'Bali', 'Kabupaten Gianyar', 'SMA N 1 GIANYAR', 'JL. RATNA NO 1', '', 'Yes'),
('1600112860', 'MUHAMAD IQBAL MAULANA SID', 2016, 'Maba', 'FISE', 'Akuntansi', 'Jawa Barat', 'kabupaten Indramayu', 'SMA AL ISTILAH ISLAM ', 'JL. RAYA SUDIRMAN ', 'MUHAMMAD BASUKI ADNAN, M.PD', 'Yes'),
('1600112861', 'MITA LESY WULANDARI ', 2016, 'Maba', 'FIKES', 'Bidan Pendidik', 'Sumatera Selatan', 'kota Lubuklinggau', 'SMAN 1 LUBUK LINGGAU ', 'JL. GARUDA ', 'ZULKARNAIN, S.PD', 'Yes'),
('1600112882', 'INDAH AYU LESTARI', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Kepulauan Bangka Belitung', 'kabupaten Belitung', 'SMA PGRI TANJUNGPANDAN', 'JL. DR SOESILO', 'MUHAMMAD JALILI, S.AP', 'Yes'),
('1600112892', 'HUKMI DINIATI', 2016, 'Maba', 'Fikes', 'Bidan Pendidik', 'Yogyakarta', 'kabupaten Sleman', 'SMA BUDI MULIA', '', 'SUSETYARSO, S.S', 'Yes'),
('1600112938', 'NI''MAH DIASTARI', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Jawa Barat', 'Pilih Kabupaten/Kota Jawa Barat', 'SMAN 1 TAMBUN SELATAN', 'JL KEBON KELAPA 2', 'DRS. ENDANG SRIHARTATI HASSAN', 'Yes'),
('1600120085', 'SELVIRA INDRIYANTI', 2016, 'Maba', 'Fikes', 'Bidan Pendidik', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMA MUHAMMADDIYAH WONOSARI', 'JL. K.H. AGUS SALIM, GG. BOUGENVIL', '', 'Yes'),
('1600120172', 'HETI NURAINI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMAN 1 PLAYEN', 'JL PLAYEN PALIYAN ', 'DRS. TIYA, M.M', 'Yes'),
('1600120219', 'WRESTY FITRIANTI', 2016, 'Maba', 'Fise', 'Akuntansi', 'Banten', 'Pilih Kabupaten/Kota Banten', 'SMA PRISMA KOTA SERANG', 'JL. RAYA JAKARTA KM. 04 PAKUPATAN SERANG', 'ISWANDRIANTO, S.PD, M.SI', 'Yes'),
('1600120370', 'LUH PUTU AYU MAHENDRA YAN', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Pilih Kabupaten/Kota Bali', 'SMAN 1 NEGARA', 'JL. NGURAH RAI NO.155 NEGARA', 'DRS. PUTU PRAPTA ARYA, M.PD', 'Yes'),
('1600120500', 'HERLINA INDRA WIDIANSI', 2016, 'Maba', 'Fise', 'Akuntansi', 'Jakarta', 'Pilih Kabupaten/Kota Jakarta', 'SMA N 33 JAKARTA', 'JL. KAMAL RAYA NO. 54 CENGKARENG ', 'HJ. CEDARKUINE, M.PD', 'Yes'),
('1600121019', 'ASTIKA DIANA SARI', 2016, 'Maba', 'FIKES', 'Bidan Pendidik', 'Sumatera Selatan', 'kota Palembang', 'MA AL-ITTIFAQIAH INDRALAYA', 'indralaya', 'ZAENAL ABIDIN, SH, M. AG', 'Yes'),
('1600121022', 'EVA RORTIANA PANGGABEAN', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Kalimantan Barat', 'kabupaten Landak', 'SMAN 1 BELITANG HILIR', 'JL. ADISUCIPTO', 'ALOYSIUS SADLY, S.PD', 'Yes'),
('1600121054', 'I GEDE YOSSI YUDADHARMA ', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Bali', 'Kabupaten Badung', 'SMA N 1 ABIANSEMAL', 'JL. MEJAPAHIT BLAH KIUH ABIAN SEMAL ', 'DRS. I MADE KUPASUDA M.PD', 'No'),
('1600121206', 'RISWANDI', 2016, 'Maba', 'FISE', 'Hubungan Internasional', 'Sulawesi Tengah', 'kabupaten Parigi Moutong', 'MADRASAH ALIYAH NEGERI TOMINI', 'SATU', 'SULJAMI EDY, S.PD', 'Yes'),
('1600121235', 'YOHANNA MEISTA', 2016, 'Maba', 'FISE', 'Akuntansi', 'Riau', 'kota Pekanbaru', 'SMA N 1 BAGAN SINEMBAH', 'JL SISINGAMANGARAJA ', 'HAMDAN MAS KOTTO, MM', 'Yes'),
('1600121333', 'ELLA YUNITA', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Kepulauan Bangka Belitung', 'kabupaten Belitung', 'SMAN 1 TANJUNGPANDAN', 'JL. GATOT SUBROTO', 'DRS. HARYANTO', 'Yes'),
('1600121365', 'WINDA HANDAYANTI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMA N 1 RONGKOP', 'JL SADENG KM 25', 'EKWANTORO, S.PD', 'Yes'),
('1600121416', 'MUKILES MURIB', 2016, 'Maba', 'FST', 'Sistem Informasi', 'Papua', 'kabupaten Waropen', 'SMA PGRI ', 'JL. KAMOLOKER ', 'JANET BEROTABUI, S.PD, M.M P.D', 'Yes'),
('1600121433', 'OKTINA SISKARANI', 2016, 'Maba', 'FIKES', 'Kesehatan Masyarakat', 'Sumatera Selatan', 'kabupaten Lahat', 'SMA UNGGUL NEGERI 4 LAHAT', 'LAHAT', 'DRS. SYAMSUL HADI', 'Yes'),
('1600122553', 'MUJASTIA FELIATI MUHDALIF', 2016, 'Maba', 'FST', 'Teknik Informatika', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMAN 1 SEMIN', 'BULUREJO,SEMIN', 'DRS. TIYA, MM', 'Yes'),
('1600122628', 'IKA RIYAN ANGGRAINI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMA N 1 SEMIN', 'BULUREJO,SEMIN', 'DRS. TIYA, MM', 'Yes'),
('1600122653', 'ANDINI MAULIDYA ', 2016, 'Maba', 'Fikes', 'Bidan Pendidik', 'Kepulauan Bangka Belitung', 'kabupaten Belitung', 'SMAN 1 TANJUNGPANDAN', 'JL. GATOT SUBROTO', 'DRS. HARYANTO', 'Yes'),
('1600122657', 'CEXIE FELLA A LA DESKA', 2016, 'Maba', 'FST', 'Teknik Elektro', 'Jawa Tengah', 'kabupaten Banjarnegara', 'SMAN 1 PURWAREJAKLAMPOK', 'JL. RAYA PURWAREJA KLAMPOK', 'SUDARTO', 'Yes'),
('1600122689', 'EDWARD GRESTA SEFTIAN', 2016, 'Maba', 'Fise', 'Akuntansi', 'Jakarta', 'Pilih Kabupaten/Kota Jakarta', 'SMA YADIKA 1 GROGOL PETAMBURAN', 'GROGOL PETAMBURAN', 'DRS. MANANGAP SITORUS', 'Yes'),
('1600122696', 'NOVITA EMRAY', 2016, 'Maba', 'FISE', 'Akuntansi', 'Maluku', 'kabupaten Kepulauan Aru', 'SMA N KATOLIK YOS SUDARSO DOBO', 'JL. CENDRAWASIH DOBO', '', 'Yes'),
('1600122786', 'RANDY HERMAWAN SAPUTRA', 2016, 'Maba', 'FISE', 'Ilmu Komunikasi', 'Papua', 'kabupaten Merauke', 'SMAN3 MARAUKE', 'JL. KAMI ZUAN', 'Lukas Lena', 'Yes'),
('1600122893', 'DEWA GEDE MAS PUTRA JULIN', 2016, 'Maba', 'FST', 'Teknik Informatika', 'Bali', 'Kabupaten Klungkung', 'SMA N 1 BANJARANGKAN', 'TUSAN', 'I PUTU SUARDI, S.PD, M.PD', 'Yes'),
('1600122947', 'PADLI AL MADANI', 2016, 'Maba', 'Fise', 'Ilmu Komunikasi', 'Pilih Provinsi', 'Kota/kabupaten', 'SMA N 7 BATANGHARI', 'SUNGAI RENGAS', '', 'Yes'),
('1600130153', 'SANG AYU PUTU DEVA PREMAG', 2016, 'Maba', 'Fise', 'Hubungan Internasion', 'Bali', 'Kabupaten Klungkung', 'SMA N 2 SEMARUPA', 'JL. DEWI SARTIKA NO. 16 ', 'DRS. I GUSTI LANANG MADE PUJI M.PD', 'Pil'),
('1600131914', 'SARTIKA DJABUMONA', 2016, 'Maba', 'FISE', 'Hubungan Internasional', 'Maluku Utara', 'kota Tidore Kepulauan', 'SMA N 1 PULAU-PULAU ARU', 'JL CENDRAWASIH DOBI KEPULAUAN ARU', 'DRS. LAELAE IMRAN', 'Yes'),
('1600240005', 'MIFTACH NUR KHOIRRIYAH', 2016, 'Maba', 'Fikes', 'KEBIDANAN D-III', 'Yogyakarta', 'kabupaten Bantul', 'SMK KESEHATAN AMANAH HUSADA', 'JL. NGIPIK RAYA ', '', 'Yes'),
('1600240006', 'YUNI LESTARI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Yogyakarta', 'kabupaten Bantul', 'SMK KESEHATAN AMANAH HUSADA', 'JL. NGIPIK RAYA ', 'ABDUL GANI, S.PD. I', 'Yes'),
('1600240234', 'CHRISTINA YULIHARMINI', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Yogyakarta', 'kabupaten Kulon Progo', 'SMK KESEHATAN CITRA SEMESTA INDONESIA', 'JL JOGJA-WATES KM 1.5 GUNUNG GEMPAL GIRIPENI WATES', 'DYAH PUJI LESTARI, S.P', 'Yes'),
('1600240250', 'WAYAN ANGGITA RAHAYU', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Gianyar', 'SMK KESEHATAN SANJIWANI', 'JL DALEM RAI GIANYAR', 'DRS. DEWA NYOMAN BAWANA, M.PD', 'Yes'),
('1600240251', 'DESAK PUTU ARI SAFITRI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Gianyar', 'SMK KESEHATAN SANJIWANI', 'JL DALEM RAI GIANYAR', 'DRS. DEWA NYOMAN BAWANA, M.PD', 'Yes'),
('1600240253', 'NI AYU PUTU GOSTHI SARI D', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Gianyar', 'SMK KESEHATAN SANJIWANI', 'JL DALEM RAI GIANYAR', 'DRS. DEWA NYOMAN BAWANA, M.PD', 'Yes'),
('1600240257', 'NI WAYAN YENI GUNANTI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Gianyar', 'SMK KESEHATAN SANJIWANI', 'JL DALEM RAI GIANYAR', 'DRS. DEWA NYOMAN BAWANA, M.PD', 'Yes'),
('1600240260', 'I KADEK ADI PUTRA', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Gianyar', 'SMK KESEHATAN SANJIWANI', 'JL DALEM RAI GIANYAR', 'DRS. DEWA NYOMAN BAWANA, M.PD', 'Yes'),
('1600240262', 'WAYAN CANDRA TULASI MANJA', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Bali', 'Kabupaten Gianyar', 'SMK KESEHATAN SANJIWANI', 'JL DALEM RAI GIANYAR', 'DRS. DEWA NYOMAN BAWANA, M.PD', 'Yes'),
('1600240296', 'REFYTA APRIYANTI ', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Bengkulu', 'Pilih Kabupaten/Kota Bengkulu', 'SMKS 16 FARMASI BENGKULU ', 'JL. INDRA GIRI GANG TIGA SERANGKAI ', '', 'Yes'),
('1600240395', 'RIFRIDA AKMALARINI', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Yogyakarta', 'kabupaten Bantul', 'SMKN 1 KASIHAN', 'JL. P.G. MADUKISMO', 'DRS. SUNARDI, M.PD', 'Yes'),
('1600240430', 'I PUTU YOGA WIRANTIKA YAS', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Badung', 'SMK KESEHATAN BALI MEDIKA', 'JL. CARGO SARIDANA IV NO. 1', 'DRS. GDE RIMAYA, DMM', 'Yes'),
('1600240458', 'NI LUH ENIK SUMARTINI', 2016, 'Maba', 'Fikes', 'KEBIDANAN D-III', 'Bali', 'Kabupaten Badung', 'SMK KESEHATAN BALI', 'JL. RAYA LUKLUK NO.123', 'I KETUT SUKAWATHA, M.PD', 'Yes'),
('1600240469', 'RISFI WIYANDRI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Kepulauan Bangka Belitung', 'kabupaten Belitung', 'SMK N 1 BADAU', 'JL. PESANTREN BADAU KM. 22 KEC. BADAU ', 'ERLIANA S.PD E.KOP', 'Yes'),
('1600240475', 'NI PUTU AYU MERLIYANI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Badung', 'SMK KESEHATAN BALI MEDIKA', 'JL. CARGO SARIDANA IV NO. 1', 'DRS. GDE RIMAYA, DMM', 'Yes'),
('1600240476', 'NI MADE RIA JULIA UTARI ', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Badung', 'SMK KESEHATAN BALI MEDIKA', 'JL. LARGO SARIDANA IV NO. 1', 'DRS. GDE RIMAYA, DMM', 'Yes'),
('1600240495', 'I GUSTI AYU AGUNG NATARIN', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Badung', 'SMK KESEHATAN BALI MEDIKA', 'JL. CARGO SARIDANA IV NO. 1', 'DRS. GDE RIMAYA, DMM', 'Yes'),
('1600240502', 'ILHAM WIDIYANTO', 2016, 'Maba', 'FST', 'Sistem Informasi', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMK N 2 WONOSARI', 'JL KYAI HAJI AGUS SALIM LEDOKSARI WONOSARI GUNUNG KIDUL', 'DRS. RACHMAD BASUKI, S.H. M.T', 'Yes'),
('1600240503', 'DEWANGGA KHRISNA GIGANTAR', 2016, 'Maba', 'FST', 'Teknik Elektro', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMK N 2 WONOSARI', 'JL KYAI HAJI AGUS SALIM LEDOKSARI WONOSARI GUNUNG KIDUL', 'DRS. RACHMAD BASUKI, S.H. M.T', 'Yes'),
('1600240507', 'NI LUH GEDE ASTARI YANTI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Badung', 'SMK KESEHATAN BALI MEDIKA', 'JL. CARGO SARIDANA IV NO. 1', 'DRS. GDE RIMAYA, DMM', 'Yes'),
('1600240579', 'NI PUTU ARI DAMAYANTI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Badung', 'SMK KESEHATAN BALI MEDIKA', 'JL. CARGO SARIDANA IV NO. 1', 'DRS. GDE RIMAYA, DMM', 'Yes'),
('1600240589', 'YOGI SOFI ARDIANA', 2016, 'Maba', 'FST', 'Manajemen Informatika', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMK YAPPI WONOSARI', 'bansari', 'DRS. MUSTANGID, M.PD', 'Yes'),
('1600241011', 'LISTI EKA FITRIANA', 2016, 'Maba', 'Fikes', 'KEBIDANAN D-III', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMK MUHAMMADIYAH 1 PLAYEN', 'JL WONOSARI KM. 3', 'DRS. H. SUTOPO GIRI SANTOSO', 'Yes'),
('1600241155', 'ALFINSA ISTIGHFARIN LAMUS', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Yogyakarta', 'kabupaten Sleman', 'SMK MUH MLATI', 'JL. KALIURANG KM. 6,5 GG. TIMUR TIMOR BLOK F. 04 ', 'DRS. SUHARSO, MPSA', 'Yes'),
('1600241196', 'DENNY KURNIANTO', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Yogyakarta', 'kabupaten Kulon Progo', 'SMK KESEHATAN CITRA SEMESTA INDONESIA', 'JL JOGJA-WATES KM 1.5 GUNUNG GEMPAL GIRIPENI WATES', 'DYAH PUJI LESTARI, S.P', 'Yes'),
('1600241311', 'IRWANDA NUGRAHA ', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Kepulauan Bangka Belitung', 'kabupaten Belitung', 'SMK N 2 TANJUNG PANDAN ', 'JL. TELEX II NO 7 ', 'SUANDI, S.PD', 'Yes'),
('1600241321', 'CAHYANING PEMBAYUN NUGROH', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Banten', 'Pilih Kabupaten/Kota Banten', 'SMK KESEHATAN BANTEN', 'JL. KH. HASYIM ASHARI GG. HJ. HALIMAH', 'DR. MAHMUDIN S.KM, M.KES', 'Yes'),
('1600241328', 'AYU PUSPA DEWANTI', 2016, 'Maba', 'Fikes', 'Ilmu Gizi', 'Banten', 'Pilih Kabupaten/Kota Banten', 'SMK KESEHATAN BANTEN', 'JL. KH HASYIM ASHARI 99', 'DR. MAHMUDIN, S.KM, M.KES', 'Yes'),
('1600241389', 'DEWI SETIYA WIJAYANTI', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMK MUHAMMADIYAH KARANGMOJO', 'KARANGMOJO', 'DRS. H. WADIYO', 'Yes'),
('1600241485', 'RHULISTIA ANANTA', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Jawa Barat', 'Pilih Kabupaten/Kota Jawa Barat', 'SMK KESEHATAN AL-IKHLAS', 'CISARUA', 'DRH. ENI NURAENI', 'Yes'),
('1600241724', 'ANIS SATRI ZAHRA', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bengkulu', 'Pilih Kabupaten/Kota Bengkulu', 'SMKN 1 LEBONG SELATAN', 'JL MUARA AMAN- CURUP ', 'DRS. FAHRURROZI, M.PD', 'Yes'),
('1600241754', 'SRI WAHYUNI', 2016, 'Maba', 'FIKES', 'D-III Kebidanan', 'Jawa Timur', 'kabupaten Banyuwangi', 'SMK DARUSSALAM BLOKAGUNG', 'PP. DARUSALLAM BLOKAGUNG JAJAG BANYUWANGI', 'HARIYONO, S.HI', 'Yes'),
('1600241766', 'NI KOMANG AYU YULIANTINI', 2016, 'Maba', 'Fikes', 'KEPERAWATAN', 'Bali', 'Kabupaten Badung', 'SMK KESEHATAN BALI MEDIKA', 'JL. CARGO SARIDANA IV NO. 1', 'DRS. GDE RIMAYA, DMM', 'Yes'),
('1600241771', '', 2016, 'Maba', 'FST', 'Sistem Informasi', 'Jawa Barat', 'kabupaten Indramayu', 'SMK MANDIRI HAURGEULIS', 'HAURGEULIS INDRAMAYU', 'FAIZIN, S.T M.PD.I', 'Yes'),
('1600241973', 'IMAM MAHFUDZ I''TISYAM', 2016, 'Maba', 'FST', 'Teknik Informatika', 'Sulawesi Tengah', 'Pilih Kabupaten/Kota Sulawesi Tengah', 'SMK N 1 BANGGAI', 'JL BUBUNG NO.1', 'MANSUR, S.PD', 'Yes'),
('1600241978', 'ZAKKI HELMI SAPUTRA', 2016, 'Maba', 'FST', 'Manajemen Informatika', 'Yogyakarta', 'kabupaten Bantul', 'SMK N 2 SEWON', 'JL PARANGTRITIS KM.7', 'H. SUHERMAN, S.PD', 'Yes'),
('1600242641', 'ALIF NUR AHMAD FAUZI', 2016, 'Maba', 'FST', 'Teknik Elektro', 'Yogyakarta', 'kabupaten Gunungkidul', 'SMK N 2 WONOSARI', 'JL KYAI HAJI AGUS SALIM ', 'DRS. RACHMAD BASUKI, S.H. M.T', 'Yes'),
('1600242777', 'KEVIN ELVIRA NTIBU', 2016, 'Maba', 'FISE', 'Akuntansi', 'Sulawesi Tengah', 'kota Palu', 'SMK NUSANTARA PALU', 'JL. WOLTER MONGINSIDI', '', 'Yes'),
('1600242808', 'MUHAYRUNI KOSIUNGAN', 2016, 'Maba', 'FST', 'Teknik Informatika', 'Riau', 'kabupaten Siak', 'SMKN 1 MINAS ', 'JL RAYA MINAS ', '', 'Yes'),
('1600242877', '', 2016, 'Maba', 'FST', 'Manajemen Informatika', 'Jawa Tengah', 'kabupaten Banjarnegara', 'SMK BINA MANDIRI ', 'JL RAYA KALIWINANGSIH', '', 'Yes'),
('1600242912', 'NADYA MAIGISYA LAELIDYASR', 2016, 'Maba', 'Fikes', 'Kesehatan Masyarakat', 'Jawa Barat', 'kabupaten Ciamis', 'SMK TARUNA BANGSA CIAMIS ', 'CIJANTUNG ', 'AGUS GUSANTO, S.PD', 'Yes'),
('1600242913', 'AMIN ZAENUDIN ', 2016, 'Pilih Status Calon Mahasi', 'FST', 'Manajemen Informatika', 'Jawa Tengah', 'kabupaten Banjarnegara', 'SMK BINA MANDIRI ', 'JL., RAYA KALIWINASUH', '', 'Yes'),
('1600712646', 'JAMALUN MUNAWWAR HUSNI ', 2016, 'Maba', 'Fise', 'Hubungan Internasional', 'Aceh', 'Kota Piding', 'MAS NURUL ISLAM ', 'PINDING ', 'RABAYANI, S.PD', 'Yes'),
('1600721216', 'RINA SETIAWATI', 2016, 'Maba', 'Fikes', 'KEBIDANAN D-III', 'Yogyakarta', 'kabupaten Gunungkidul', 'MAN WONOSARI', 'JL SUNAN AMPEL 62 ', 'H. BAHSAN', 'Yes'),
('1600721775', 'MOH. AKMAL', 2016, 'Maba', 'FST', 'Teknik Elektro', 'Sulawesi Selatan', 'kabupaten Tana Toraja', 'MAN ALHAIRAT ULATAN', 'DESA ULATAN PARIGI MOUTUNG ', 'RAHLI,S.HI', 'Yes'),
('1600721776', 'ZULKIFLI', 2016, 'Maba', 'FST', 'Teknik Elektro', 'Sulawesi Selatan', 'kabupaten Tana Toraja', 'MAN ALHAIRAT ULATAN', 'JL TRANS-SULAWESI DESA ULATAN KEC. PALASA ', 'RAHLI,S.HI', 'Yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `id_fakultas` int(4) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` int(4) NOT NULL,
  `id_provinsi` int(3) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `other`
--

CREATE TABLE IF NOT EXISTS `other` (
`id_other` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `other`
--

INSERT INTO `other` (`id_other`, `sejarah`, `visi`, `misi`) VALUES
(1, '<div style="text-align: justify;"><span style="font-family: " comic="" sans="" ms";"=""><font face="comic sans ms">Yayasan Pendidikan Respati disingkat Yapen Respati dahulunya bernama Yayasan Pendidikan dan Kebudayaan Respati yang didirikan dengan akte notaris Imas Fatimah, SH no 28 tahun 1978 tanggal 16 Oktober 1978 beralamatkan di Jalan Karbela Barat No. 11, Karet Setia Budi, Jakarta Selatan, Telp. (021) 525-3687/520-1872 dengan susunan pengurus Drs. H. Widodo Suparno, Penanggung/Ketua merangkap anggota, Ny. Hj. Mugiarti R. Joyosubroto, bendahara merangkap anggota, Sugeng Pranoto, sebagai anggota. Sedangkan pengurus yayasan periode 2004 s.d. 2006 adalah Ketua : Hj. Mugiarti Widodo, Sekretaris : Toni Sugiarso, SE, M.Kom, dan Bendahara : Dra. Suparmi Hartoyo, M.Kes.\r\nKemudian pada tanggal 12 Desember 2006 dilakukan perubahan berdasarkan Akta Notaris Tri Hendria Ana, SH  No.02 nama dan tempat menjadi Yayasan Pendidikan Respati yang beralamatkan di Jalan Laksda Adisucipto km 6,3 Caturtunggal Depok Sleman Daerah Istimewa Yogyakarta.\r\nPengertian Arti nama “Respati“ menurut kamus jawa “Purwodarminto” maka kata “Respati“ mempunyai tiga pengertian, yaitu:\r\na.	Usaha yang menyenangkan hati masyarakat\r\nb.	Haqkul Yakin\r\nc.	Nama hari kamis\r\nNama Respati berasal dari bahasa Sansekerta (Jawa Kuno) yang mempunyai arti dan makna Respati = NGERESEPAKE ATI dalam bahasa Indonesianya Meresap Ke dalam Hati yang paling dalam. Sehingga diharapkan segala kegiatan-kegiatan yang dilakukan akan demikian seperti maknanya demi untuk kepentingan bangsa dan negara.\r\nPenggagas dan pendiri Yapen Respati adalah Prof. H. Widodo Suparno, yaitu dengan menyelenggarakan pendidikan tingkat dasar dan menengah (TK, SD, SMP , SMA, SMEA, SIM dan SMIP), kemudian Akademi Manajemen Respati (AMRI) pada tahun 19080 dan terus berkembang pada tahun 1986 berdirilah Universitas Respati Indonesia  (URINDO)  Jakarta,  dengan  program  Studi  Ekonomi,  Pertanian,  Teknologi Informasi, Manajemen  Informatika, Kesehatan MAsyarakat, Kebidanan D4 dan Keperawatan S1, Program Pasca Sarjana: M.Kes, M.MARS, MM, dan M.Si. Selanjutnya pada  tahun 2002 di Kota Tasikmalaya Jawa Barat didirikan Sekolah Tinggi  Ilmu Kesehatan (STIKES) Respati Tasikmalaya, menyusul Satu tahun kemudian tahun 2003 mendirikan di Kota Yogyakarta yaitu Sekolah Tinggi  Ilmu Kesehatan Respati Yogyakarta dan Sekolah  Tinggi  Teknologi  Informasi Respati Yogyakarta.\r\nUntuk lebih mengembangkan penyelenggaraan pendidikan, pada  tahun  2008  STIKES Respati dan  STTI  Respati Yogyakarta dilebur menjadi  satu sesuai terbitnya  SK Mendiknas  RI  No.  233/D/0/2008 perihal Ijin Penyelenggaraan Universitas  Respati  Yogyakarta  (UNRIYO) dengan 3 Fakultas yang terdiri dari : Fakultas Ilmu Kesehatan, meliputi Prodi : D3 Kebidanan, D4 Kebidanan/Bidan Pendidik, S1 Ilmu Keperawatan, Program Pendidikan Profesi Ners, S1 Ilmu Gizi, dan S1 Kesehatan Masyarakat. Untuk meningkatkan kompetensi dan daya saing lulusan, dibangun Rumah Sakit Pendidikan merencanakan pendirian beberapa program studi baru. Dan semua prodi di Fakultas Ilmu Kesehatan telah terakreditasi “B “, Fakultas Sains dan Teknologi, meliputi Prodi : D3 Manajemen Informatika, S1 Sistem Informasi, S1 Teknik Informatika, dan S1 Teknik Elektro – Peminatan utama Elektromedik, Dan Fakultas Ilmu Sosial dan Ekonomi, meliputi Prodi : S1 Hubungan Internasional, S1 Akuntansi, S1 Sastra Inggris, dan S1 Ilmu Komunikasi.\r\nPerkembangan  institusi pendidikan  yang  diselanggarakan  oleh  Yapen  Respati  tidak  lepas  dari  komitmen  yang  tinggi Yayasan untuk mencerdaskan anak bangsa melalui berbagai bidang  ilmu. Untuk itu, UNRIYO mengundang kepada para lulusan SLTA/sederajat maupun masyarakat untuk bergabung demi mewujudkan cita-cita dan untuk kehidupan di masa depan yang jauh lebih baik dan berkualitas. Informasi terkait dengan program-program unggulan yang ditawarkan.</font></span></div>', '<div style="text-align: justify;"><font face="comic sans ms">Menjadi universitas yang unggul dan terpecaya untuk menghasilkan sumber daya manusia profesional dan berjiwa wirausaha yang dapat bersaing ditingkat global pada tahun 2019.</font></div>', '<div style="text-align: justify;"><ol><li><font color="#000000">Menyelenggarakan pendidikan dan pengajaran inovatif, berorientasi pada pengembangan kualitas sumber daya manusia profesional.</font></li><li><font color="#000000">Menyelenggarakan penelitian ilmiah sesuai dengan disiplin ilmunya yang bermanfaat bagi kehidupan dan kesejahtraan masyarakat luar, pengembangan ilmu dan pengetahuan serta pembangunan.</font></li><li><font color="#000000">Menyelenggarakan pengabdian masyarakat sebagai bentuk kepedulian insan akademik terhadap kondisi kesehatan, pendidikan, sosial dan kesejahtraan masyarakat.</font></li><li><font color="#000000">Menjalankan kerjasama dengan seluruh stakeholders, baik dengan instansi pemerintah maupun swasta, institusi pendidikan lain, organisasi profesi, lembaga swadaya masyarakat, dan pihak pengguna baik didalam negeri maupun luar negeri untuk penyelenggaraan Tridharma perguruan tinggi.</font></li></ol></div>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemetaan`
--

CREATE TABLE IF NOT EXISTS `pemetaan` (
  `id_pemetaan` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `id_calon_mhs` int(11) NOT NULL,
  `id_asal_sekolah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(3) NOT NULL,
  `isi` varchar(250) NOT NULL,
  `pengirim` varchar(25) NOT NULL,
  `waktu` datetime NOT NULL,
  `id_admin` int(9) NOT NULL,
  `id_user` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `id_prodi` int(4) NOT NULL,
  `id_fakultas` int(4) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` int(3) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_admin` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_admin`, `username`, `password`, `email`, `level`) VALUES
(1, '01519107201', 'd41d8cd98f00b204e9800998ecf8427e', 'efendymd1@gmail.com', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `asal_sekolah`
--
ALTER TABLE `asal_sekolah`
 ADD PRIMARY KEY (`id_asal_sekolah`);

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
 ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
 ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
 ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
 ADD PRIMARY KEY (`id_other`);

--
-- Indexes for table `pemetaan`
--
ALTER TABLE `pemetaan`
 ADD PRIMARY KEY (`id_pemetaan`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
 ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
 ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
MODIFY `id_other` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
