-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 17 Jul 2017 pada 17.23
-- Versi Server: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ujikita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_exams`
--

CREATE TABLE `t_exams` (
  `exam_id` int(254) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `exam_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `exam_modifided` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `exam_author` int(254) NOT NULL,
  `exam_description` text,
  `exam_open` tinyint(1) NOT NULL,
  `exam_minute_alloc` int(3) NOT NULL,
  `exam_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_exams`
--

INSERT INTO `t_exams` (`exam_id`, `exam_name`, `exam_created`, `exam_modifided`, `exam_author`, `exam_description`, `exam_open`, `exam_minute_alloc`, `exam_code`) VALUES
(1, 'Simulasi UjiKita', '2017-07-14 06:27:13', '2017-07-14 08:07:29', 0, 'Ujian ini hanya untuk keperluan simulasi. Tidak berpengaruh terhadap penilaian apapun. Ujian ini adalah bawaan dari sistem. Kode untuk membuka soal ini adalah UjiKita123', 1, 10, '0b3ed27bd65d1208ac417eefc63b50bf6346774c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_questions`
--

CREATE TABLE `t_questions` (
  `question_id` int(254) NOT NULL,
  `exam_id` int(254) NOT NULL,
  `question_category` int(254) DEFAULT NULL,
  `question_text` text NOT NULL,
  `question_choiceA` text NOT NULL,
  `question_choiceB` text NOT NULL,
  `question_choiceC` text NOT NULL,
  `question_choiceD` text NOT NULL,
  `question_answer` enum('question_choiceA','question_choiceB','question_choiceC','question_choiceD') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_questions`
--

INSERT INTO `t_questions` (`question_id`, `exam_id`, `question_category`, `question_text`, `question_choiceA`, `question_choiceB`, `question_choiceC`, `question_choiceD`, `question_answer`) VALUES
(1, 1, 0, 'Nama aplikasi ini adalah...', 'UjiKIR', 'UjiKita', 'UjiKamu', 'UjiKaktus', 'question_choiceB'),
(2, 1, 0, 'Huruf pertama dalam aksara latin adalah...', 'O', 'F', 'G', 'A', 'question_choiceD'),
(3, 1, 7, '(9+2)-1=...', '10', '12', '11', '15', 'question_choiceA'),
(4, 1, 5, 'Ep=...', 'V*R', 'm*g*h', 'I/R', '4*s', 'question_choiceB'),
(5, 1, 0, 'Windows adalah...', 'Aplikasi pengolah kata', 'Sistem Operasi', 'Perangkat keras', 'Aplikasi pengolah gambar', 'question_choiceB'),
(6, 1, 8, '7 read as...', 'Seven', 'One', 'Eight', 'Nine', 'question_choiceA'),
(7, 1, 8, '\'She\' adalah kata ganti orang kedua yang mewakili jenis kelamin...', 'Wanita', 'Pria', 'Anak-anak', 'Bayi', 'question_choiceA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_question_categories`
--

CREATE TABLE `t_question_categories` (
  `category_id` int(254) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_question_categories`
--

INSERT INTO `t_question_categories` (`category_id`, `category_name`) VALUES
(0, 'Uncategorized'),
(5, 'Fisika SMA'),
(6, 'Ilmu Pengetahuan Sosial'),
(7, 'Matematika'),
(8, 'Bahasa Inggris'),
(9, 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_students`
--

CREATE TABLE `t_students` (
  `item_id` int(254) NOT NULL,
  `student_id` int(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_birth` date NOT NULL,
  `student_username` varchar(20) NOT NULL,
  `student_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_students`
--

INSERT INTO `t_students` (`item_id`, `student_id`, `student_name`, `student_birth`, `student_username`, `student_password`) VALUES
(1, 1415117802, 'Mimin Ganteng', '1998-11-11', 'admin', 'ZZZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_exams`
--
ALTER TABLE `t_exams`
  ADD PRIMARY KEY (`exam_id`),
  ADD UNIQUE KEY `exam_id` (`exam_id`);

--
-- Indexes for table `t_questions`
--
ALTER TABLE `t_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD UNIQUE KEY `question_id` (`question_id`);

--
-- Indexes for table `t_question_categories`
--
ALTER TABLE `t_question_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `t_students`
--
ALTER TABLE `t_students`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_exams`
--
ALTER TABLE `t_exams`
  MODIFY `exam_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_questions`
--
ALTER TABLE `t_questions`
  MODIFY `question_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `t_question_categories`
--
ALTER TABLE `t_question_categories`
  MODIFY `category_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `t_students`
--
ALTER TABLE `t_students`
  MODIFY `item_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
