-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 01:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pdam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `alamat`) VALUES
(2, 'riaifer', '1234', 'padang'),
(3, 'yuliza', '123', 'padang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_domain`
--

CREATE TABLE `tbl_domain` (
  `kd_domain` varchar(6) NOT NULL,
  `nm_domain` varchar(50) NOT NULL,
  `no_urut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_domain`
--

INSERT INTO `tbl_domain` (`kd_domain`, `nm_domain`, `no_urut`) VALUES
('AI4', 'Enable Operation and Use', 2),
('DS1', 'Define and Manage Service Levels', 3),
('DS10', 'Manage Problem', 9),
('DS13', 'Manage Operations', 10),
('DS2', 'Manage Third-party Services', 4),
('DS3', 'Manage Performance and Capacity', 5),
('DS4', 'Ensure Continuous Service', 6),
('DS7', 'Educate and Train Users', 7),
('DS8', 'Manage Service Desk and Incidents', 8),
('PO8', 'Manage Quality', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban_kuesioner`
--

CREATE TABLE `tbl_jawaban_kuesioner` (
  `id_jawaban` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `id_kuesioner` int(11) NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jawaban_kuesioner`
--

INSERT INTO `tbl_jawaban_kuesioner` (`id_jawaban`, `id_pertanyaan`, `id_kuesioner`, `skor`) VALUES
(388, 27, 13, 2),
(389, 28, 13, 3),
(390, 29, 13, 3),
(391, 30, 13, 4),
(392, 41, 13, 3),
(393, 42, 13, 3),
(394, 43, 13, 2),
(395, 44, 13, 2),
(396, 31, 13, 2),
(397, 32, 13, 3),
(398, 33, 13, 2),
(399, 34, 13, 3),
(400, 35, 13, 3),
(401, 36, 13, 2),
(402, 37, 13, 4),
(403, 38, 13, 2),
(404, 39, 13, 3),
(405, 40, 13, 3),
(406, 25, 13, 3),
(407, 26, 13, 3),
(408, 27, 14, 3),
(409, 28, 14, 2),
(410, 29, 14, 2),
(411, 30, 14, 3),
(412, 41, 14, 4),
(413, 42, 14, 2),
(414, 43, 14, 3),
(415, 44, 14, 3),
(416, 31, 14, 2),
(417, 32, 14, 3),
(418, 33, 14, 2),
(419, 34, 14, 3),
(420, 35, 14, 4),
(421, 36, 14, 2),
(422, 37, 14, 3),
(423, 38, 14, 2),
(424, 39, 14, 2),
(425, 40, 14, 3),
(426, 25, 14, 2),
(427, 26, 14, 2),
(428, 27, 15, 3),
(429, 28, 15, 4),
(430, 29, 15, 2),
(431, 30, 15, 3),
(432, 41, 15, 2),
(433, 42, 15, 2),
(434, 43, 15, 3),
(435, 44, 15, 2),
(436, 31, 15, 3),
(437, 32, 15, 3),
(438, 33, 15, 2),
(439, 34, 15, 3),
(440, 35, 15, 2),
(441, 36, 15, 4),
(442, 37, 15, 3),
(443, 38, 15, 3),
(444, 39, 15, 3),
(445, 40, 15, 2),
(446, 25, 15, 2),
(447, 26, 15, 2),
(448, 27, 16, 3),
(449, 28, 16, 3),
(450, 29, 16, 4),
(451, 30, 16, 4),
(452, 41, 16, 2),
(453, 42, 16, 3),
(454, 43, 16, 3),
(455, 44, 16, 3),
(456, 31, 16, 2),
(457, 32, 16, 2),
(458, 33, 16, 4),
(459, 34, 16, 3),
(460, 35, 16, 3),
(461, 36, 16, 3),
(462, 37, 16, 2),
(463, 38, 16, 2),
(464, 39, 16, 4),
(465, 40, 16, 3),
(466, 25, 16, 3),
(467, 26, 16, 2),
(468, 27, 17, 2),
(469, 28, 17, 3),
(470, 29, 17, 2),
(471, 30, 17, 2),
(472, 41, 17, 2),
(473, 42, 17, 2),
(474, 43, 17, 2),
(475, 44, 17, 2),
(476, 31, 17, 3),
(477, 32, 17, 2),
(478, 33, 17, 3),
(479, 34, 17, 2),
(480, 35, 17, 4),
(481, 36, 17, 4),
(482, 37, 17, 3),
(483, 38, 17, 3),
(484, 39, 17, 3),
(485, 40, 17, 3),
(486, 25, 17, 4),
(487, 26, 17, 3),
(488, 27, 18, 2),
(489, 28, 18, 3),
(490, 29, 18, 3),
(491, 30, 18, 2),
(492, 41, 18, 2),
(493, 42, 18, 3),
(494, 43, 18, 4),
(495, 44, 18, 3),
(496, 31, 18, 3),
(497, 32, 18, 2),
(498, 33, 18, 2),
(499, 34, 18, 2),
(500, 35, 18, 3),
(501, 36, 18, 3),
(502, 37, 18, 2),
(503, 38, 18, 3),
(504, 39, 18, 2),
(505, 40, 18, 4),
(506, 25, 18, 3),
(507, 26, 18, 3),
(508, 27, 19, 4),
(509, 28, 19, 2),
(510, 29, 19, 2),
(511, 30, 19, 3),
(512, 41, 19, 3),
(513, 42, 19, 4),
(514, 43, 19, 2),
(515, 44, 19, 4),
(516, 31, 19, 2),
(517, 32, 19, 3),
(518, 33, 19, 3),
(519, 34, 19, 4),
(520, 35, 19, 2),
(521, 36, 19, 2),
(522, 37, 19, 3),
(523, 38, 19, 3),
(524, 39, 19, 4),
(525, 40, 19, 3),
(526, 25, 19, 2),
(527, 26, 19, 3),
(528, 27, 20, 3),
(529, 28, 20, 3),
(530, 29, 20, 3),
(531, 30, 20, 4),
(532, 41, 20, 3),
(533, 42, 20, 3),
(534, 43, 20, 3),
(535, 44, 20, 3),
(536, 31, 20, 2),
(537, 32, 20, 3),
(538, 33, 20, 2),
(539, 34, 20, 2),
(540, 35, 20, 3),
(541, 36, 20, 2),
(542, 37, 20, 2),
(543, 38, 20, 4),
(544, 39, 20, 4),
(545, 40, 20, 2),
(546, 25, 20, 3),
(547, 26, 20, 4),
(548, 27, 21, 2),
(549, 28, 21, 2),
(550, 29, 21, 3),
(551, 30, 21, 3),
(552, 41, 21, 2),
(553, 42, 21, 2),
(554, 43, 21, 4),
(555, 44, 21, 4),
(556, 31, 21, 2),
(557, 32, 21, 3),
(558, 33, 21, 3),
(559, 34, 21, 3),
(560, 35, 21, 2),
(561, 36, 21, 3),
(562, 37, 21, 3),
(563, 38, 21, 3),
(564, 39, 21, 2),
(565, 40, 21, 4),
(566, 25, 21, 4),
(567, 26, 21, 3),
(568, 27, 22, 3),
(569, 28, 22, 3),
(570, 29, 22, 3),
(571, 30, 22, 2),
(572, 41, 22, 3),
(573, 42, 22, 3),
(574, 43, 22, 3),
(575, 44, 22, 3),
(576, 31, 22, 3),
(577, 32, 22, 4),
(578, 33, 22, 2),
(579, 34, 22, 3),
(580, 35, 22, 3),
(581, 36, 22, 3),
(582, 37, 22, 2),
(583, 38, 22, 2),
(584, 39, 22, 2),
(585, 40, 22, 2),
(586, 25, 22, 2),
(587, 26, 22, 2),
(588, 27, 23, 3),
(589, 28, 23, 3),
(590, 29, 23, 4),
(591, 30, 23, 3),
(592, 41, 23, 2),
(593, 42, 23, 3),
(594, 43, 23, 2),
(595, 44, 23, 4),
(596, 31, 23, 3),
(597, 32, 23, 3),
(598, 33, 23, 2),
(599, 34, 23, 2),
(600, 35, 23, 2),
(601, 36, 23, 2),
(602, 37, 23, 2),
(603, 38, 23, 2),
(604, 39, 23, 3),
(605, 40, 23, 3),
(606, 25, 23, 2),
(607, 26, 23, 3),
(608, 27, 24, 2),
(609, 28, 24, 3),
(610, 29, 24, 2),
(611, 30, 24, 2),
(612, 41, 24, 3),
(613, 42, 24, 2),
(614, 43, 24, 3),
(615, 44, 24, 3),
(616, 31, 24, 4),
(617, 32, 24, 2),
(618, 33, 24, 4),
(619, 34, 24, 3),
(620, 35, 24, 3),
(621, 36, 24, 2),
(622, 37, 24, 3),
(623, 38, 24, 2),
(624, 39, 24, 4),
(625, 40, 24, 3),
(626, 25, 24, 3),
(627, 26, 24, 4),
(628, 27, 25, 2),
(629, 28, 25, 2),
(630, 29, 25, 3),
(631, 30, 25, 3),
(632, 41, 25, 2),
(633, 42, 25, 3),
(634, 43, 25, 2),
(635, 44, 25, 4),
(636, 31, 25, 4),
(637, 32, 25, 3),
(638, 33, 25, 3),
(639, 34, 25, 2),
(640, 35, 25, 4),
(641, 36, 25, 3),
(642, 37, 25, 2),
(643, 38, 25, 4),
(644, 39, 25, 3),
(645, 40, 25, 2),
(646, 25, 25, 4),
(647, 26, 25, 3),
(648, 27, 26, 3),
(649, 28, 26, 2),
(650, 29, 26, 2),
(651, 30, 26, 2),
(652, 41, 26, 3),
(653, 42, 26, 2),
(654, 43, 26, 3),
(655, 44, 26, 3),
(656, 31, 26, 3),
(657, 32, 26, 2),
(658, 33, 26, 4),
(659, 34, 26, 2),
(660, 35, 26, 2),
(661, 36, 26, 2),
(662, 37, 26, 3),
(663, 38, 26, 2),
(664, 39, 26, 2),
(665, 40, 26, 3),
(666, 25, 26, 3),
(667, 26, 26, 2),
(668, 27, 27, 3),
(669, 28, 27, 3),
(670, 29, 27, 2),
(671, 30, 27, 2),
(672, 41, 27, 2),
(673, 42, 27, 3),
(674, 43, 27, 2),
(675, 44, 27, 3),
(676, 31, 27, 2),
(677, 32, 27, 2),
(678, 33, 27, 3),
(679, 34, 27, 2),
(680, 35, 27, 3),
(681, 36, 27, 2),
(682, 37, 27, 4),
(683, 38, 27, 2),
(684, 39, 27, 3),
(685, 40, 27, 2),
(686, 25, 27, 2),
(687, 26, 27, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuesioner`
--

CREATE TABLE `tbl_kuesioner` (
  `id_kuesioner` int(11) NOT NULL,
  `nm_responden` varchar(30) NOT NULL,
  `usia_responden` varchar(20) NOT NULL,
  `jk_responden` varchar(20) NOT NULL,
  `bagian_responden` varchar(30) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kuesioner`
--

INSERT INTO `tbl_kuesioner` (`id_kuesioner`, `nm_responden`, `usia_responden`, `jk_responden`, `bagian_responden`, `tanggal`) VALUES
(13, 'rani', '20-30 Tahun', 'Perempuan', 'Pengguna', '2020-01-16'),
(14, 'siska', '20-30 Tahun', 'Perempuan', 'Pengguna', '2020-01-16'),
(15, 'fiona', '20-30 Tahun', 'Perempuan', 'Pengguna', '2020-01-16'),
(16, 'Anto', '31-40 Tahun', 'Laki-laki', 'IT', '2020-01-16'),
(17, 'ferdi', '31-40 Tahun', 'Laki-laki', 'IT', '2020-01-16'),
(18, 'Zikra', '31-40 Tahun', 'Perempuan', 'Pengguna', '2020-01-16'),
(19, 'Mawarni', '>40 tahun', 'Perempuan', 'Pengguna', '2020-01-16'),
(20, 'Lisdawati', '>40 tahun', 'Perempuan', 'Pengguna', '2020-01-16'),
(21, 'Sari', '31-40 Tahun', 'Perempuan', 'IT', '2020-01-16'),
(22, 'Nando', '20-30 Tahun', 'Laki-laki', 'Pengguna', '2020-01-16'),
(23, 'Fitrah', '31-40 Tahun', 'Perempuan', 'Pengguna', '2020-01-16'),
(24, 'Dirga', '20-30 Tahun', 'Laki-laki', 'IT', '2020-01-16'),
(25, 'Bayu', '20-30 Tahun', 'Laki-laki', 'IT', '2020-01-16'),
(26, 'Doni', '20-30 Tahun', 'Laki-laki', 'IT', '2020-01-16'),
(27, 'Fauzan', '20-30 Tahun', 'Laki-laki', 'Pengguna', '2020-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `kd_domain` varchar(11) NOT NULL,
  `isi_pertanyaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id_pertanyaan`, `kd_domain`, `isi_pertanyaan`) VALUES
(25, 'PO8', 'Sistem informasi pembayaran tagihan rekening air bulanan di pdam tirta alami tanah datar sudah memfokuskan manajemen kualitas pada konsumen dengan memastikan kebutuhan mereka dan menyesuaikannya pada standar dan operasi TI '),
(26, 'PO8', 'Sistem informasi pembayaran tagihan rekening air bulanan di pdam tirta alami tanah datar telah mengelola dan mengkomunikasikan secara berkala rencana kualitas secara umum yang mendukung perkembangan berkelanjutan'),
(27, 'AI4', 'Telah terdapat perencanaan untuk indentifikasi dan pendokumentasian penggunaan aplikasi pembayaran tagihan rekening air bulanan.'),
(28, 'AI4', 'Adanya transfer pengetahuan untuk pengguna yang memungkinkan pengguna untuk secara efektif dan efisien menggunakan sistem untuk mendukung proses bisnis'),
(29, 'DS1', 'Karakteristik pelayanan dan kebutuhan bisnis telah terorganisir dan disimpan secara terpusat'),
(30, 'DS1', 'Adanya pemantauan terhadap kinerja pelayanan khususnya dalam pelayanan pembayaran tagihan rekening air bulanan'),
(31, 'DS2', 'Adanya kerja sama dengan pelanggan pembayaran tagihan rekening air bulanan'),
(32, 'DS2', 'Adanya proses untuk memantau pelayanan pembayaran tagihan rekening air bulanan'),
(33, 'DS3', 'Terdapat suatu kapasitas mengenai sumber daya IT untuk menilai kapasitas dan kinerja sistem pembayaran tagihan rekening air bulanan saat ini.'),
(34, 'DS3', 'Adanya pengawasan dan pengumpulan data kinerja dan kapasitas sumber daya IT untuk memastikan proses bisnis dan pelaksanaan IT telah berjalan dengan baik.'),
(35, 'DS4', 'Adanya pelatihan bagi pihak yang berkepentingan mngenai prosedur dan peran serta tanggung jawab terhadap pelayanan pembayaran tagihan rekening air bulanan'),
(36, 'DS4', 'Telah ada tindakan untuk sistem pembayaran tagihan rekening air bulanan yaitu pemulihan apabila sistem mengalami kerusakan termasuk aktivasi situs backup'),
(37, 'DS7', 'Materi pendidikan dan pelatihan sistem informasi khususny pada sistem pembayaran tagihan rekening air bulanan telah didokumentasikan sesuai dengan proses bisnis saat ini'),
(38, 'DS7', 'Pelatihan dan pendidikan yang diberikan   selalu dievaluasi hasil pelatihannya'),
(39, 'DS8', 'Terdapat service desk yang membantu user jika mengalami masalah mengenai sistem pembayaran tagihan rekening air bulanan'),
(40, 'DS8', 'Telah terdapat pelaporan mengenai insiden yang terjadi kepada pimpinan'),
(41, 'DS10', 'Terdapat proses untuk melaporkan masalah yang sudah diidentifikasikan sebagai bagian dari manajemn insiden'),
(42, 'DS10', 'Terdapat fasilitas pada sistem manajemen untuk menganalisi dan menentukan akar penyebab permasalahan dari seluruh permasalahan'),
(43, 'DS13', 'Mendefinisikan, menerapkan dan memelihara prosedur untuk operasi IT, memastikan bahwa anggota staf operasi harus bisa terbiasa dengan semua tugas operasi yang relevan untuk mereka.'),
(44, 'DS13', 'Adanya pengaturan jadwal pekerjaan dan tugas agar menjadi efisien untuk memenuhi kebutuhan bisnis.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_domain`
--
ALTER TABLE `tbl_domain`
  ADD PRIMARY KEY (`kd_domain`);

--
-- Indexes for table `tbl_jawaban_kuesioner`
--
ALTER TABLE `tbl_jawaban_kuesioner`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tbl_kuesioner`
--
ALTER TABLE `tbl_kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`);

--
-- Indexes for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jawaban_kuesioner`
--
ALTER TABLE `tbl_jawaban_kuesioner`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=688;

--
-- AUTO_INCREMENT for table `tbl_kuesioner`
--
ALTER TABLE `tbl_kuesioner`
  MODIFY `id_kuesioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
