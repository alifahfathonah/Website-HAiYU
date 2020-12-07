-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 12:43 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhaiyu`
--

-- --------------------------------------------------------

--
-- Table structure for table `belajar`
--

CREATE TABLE `belajar` (
  `id_siswa` bigint(20) NOT NULL,
  `id_mapel` bigint(20) NOT NULL,
  `mid_test` int(11) DEFAULT NULL,
  `final_test` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `belajar`
--

INSERT INTO `belajar` (`id_siswa`, `id_mapel`, `mid_test`, `final_test`) VALUES
(3, 1, NULL, NULL),
(3, 2, NULL, NULL),
(3, 3, NULL, NULL),
(3, 4, NULL, NULL),
(3, 5, NULL, NULL),
(3, 6, NULL, NULL),
(3, 7, NULL, NULL),
(3, 8, NULL, NULL),
(3, 9, NULL, NULL),
(3, 10, NULL, NULL),
(1, 1, 3, NULL),
(2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `username`, `password`, `level`) VALUES
('abc@gmail.com', 'abc', '$2y$10$O6imSp9OXu9Oe3N1zrbKD.9uvbzsWdLW4K5zZDuEzOjYs9Myxw4Cq', 1),
('abcd@gmail.com', 'frhn231', '$2y$10$mrJU6xI5lY5IrpkFzf0UUekYQOGr6TWVGSJvEEYJJNULx7zs96h/e', 1),
('abdurrahman1270@gmail.com', 'rahman', '$2y$10$wKVuS6WPv3XJfTSLzLQkGuGqqKW/amH6ZLW74WsU6NhuLHlt6/YfS', 1),
('aghinyaam@gmail.com', 'aghniyaam', '$2y$10$OP39fUZvgSgSeJ7hOVlNF.VsbOlLJ1ijsoX1BdbObSK72VVBjZGF.', 2),
('anest@gmail.com', 'anest', '$2y$10$pAI7MupIn856hyyVfmWymOnPYMFKgP676TnR.XB3rDlbGwvoZ7IvW', 2),
('bagas.ktbffh@gmail.com', 'bagas', '$2y$10$InxuNutOn08fmgl.AVp.BueQsHMpOZ1ZbvY2A/e2AcWFVi.4wNB.C', 1),
('bagasadifirdaus@gmail.com', 'test', '$2y$10$Z3mJMdeTJKVEjIKljqmdxuvl6LfV..od7NUlaoC0Li8c.Yo9r/zOS', 1),
('bagasaf@gmail.com', 'bagasaf', '$2y$10$duyMUyDUe8Dy/OxQOQ.BAug3o.klFrrzg1wXQc2FjoD9gJ/61zgUW', 2),
('bambangk@gmail.com', 'bambangk', '$2y$10$c9PUptLZknC8Abw9qaREwuTg30qxPawp4uFjDbsQ4GENAhWoWLO9O', 2),
('farhan@gmail.com', 'guru1', '$2y$10$eKm.fn5vCyJRx/vFXJl2C.ZZ7A5u75H367q3Vv2RBQqHTmf5fQAxm', 2),
('farhang@gmail.com', 'farhang', '$2y$10$vN2R67XbQPPCjNV6gZqLQ.qtMDQE92uFe/QgTpKRfmPev3X4drdfy', 2),
('lindam@gmail.com', 'lindam', '$2y$10$4tuqx8GvYelhn0KzLjX2Duup7UOvSf.7iOYdj0uzOd0xo.V6DJFLy', 2),
('murid2@gmail.com', 'murid2', '$2y$10$hGRKntbNF1p0dtFqilMS2uufzJF2H0t.p3DTK7BuuuWJAKtBWVN.e', 1),
('murid@gmail.com', 'murid1', '$2y$10$o/nMI5swxutBAAf8Y0TYdOiIleIKNVDhS1ht8HPlUzivTuAptin.W', 1),
('nurula@gmail.com', 'nurula', '$2y$10$4CpbdKOtvGuK1ZcOGgzWse.rEQ7Wm2gZijnGbeEXYbOrS9w2vJbry', 2),
('renataa@gmail.com', 'renataa', '$2y$10$4R/Nmh5mndJH4O8bU0cqxOVFIIY4sqvC2o9tBiqQrSmM3UIIFLmYW', 2),
('sitih@gmail.com', 'sitih', '$2y$10$IjKI.jOcQ/ssLyW6MJl6pugB.Y/XvxqBZuj.FbkqerUuQB7elOIga', 2),
('test@gmail.com', 'frhn232', '$2y$10$tgr3K0EpQXdVF4448EEXeetucHTZSFVCqkCLkwX7yQbksohSmjyN.', 2),
('zahraf@gmail.com', 'zahraf', '$2y$10$NiTyAWvKm3Zssk5ZDCpY7u..jhyfMs6PJPX9nzE0fAP0UA5/hNgCC', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `id_pengajar` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama`, `id_pengajar`) VALUES
(1, 'Math', 1),
(2, 'Physics', 2),
(3, 'Chemistry', 3),
(4, 'Biology', 4),
(5, 'Economics', 5),
(6, 'History', 6),
(7, 'Geography', 7),
(8, 'Sociology', 8),
(9, 'English', 9),
(10, 'Indonesian', 10);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` varchar(1000) DEFAULT NULL,
  `id_mapel` bigint(20) NOT NULL,
  `chapter` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `judul`, `konten`, `id_mapel`, `chapter`) VALUES
('1', 'Eksponensial', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 1, 1),
('2', 'Logaritma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 1, 2),
('3', 'Polinomial', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 1, 3),
('4', 'Diferential', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 1, 4),
('5', 'Integral', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 1, 5),
('6', 'Force and Motion', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 2, 1),
('7', 'Fundamental Forces', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 2, 2),
('8', 'Kepler\'s Laws', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 2, 3),
('9', 'Energy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 2, 4),
('10', 'Electricity', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 2, 5),
('11', 'Matter Structur', 'Matter is a bla bla', 3, 1),
('12', 'Chemical Systems', 'Ini Kimia', 3, 2),
('13', 'Chemical Reactions', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 3, 3),
('14', 'Matter and Energy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 3, 4),
('15', 'Nuclear Chemistry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 3, 5),
('16', 'Biology Foundations', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 4, 1),
('17', 'Cells', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 4, 2),
('18', 'Energy and Transport', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 4, 3),
('19', 'Reproduction System', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 4, 4),
('20', 'Genetics', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 4, 5),
('21', 'Introduction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 5, 1),
('22', 'Microeconomics', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 5, 2),
('23', 'Macroeconomics', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 5, 3),
('24', 'Fiscal & Monetary Policy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 5, 4),
('25', 'Government & Business', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 5, 5),
('26', 'Humans Origins', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 6, 1),
('27', 'Fall of Roman Empire', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 6, 2),
('28', 'Art & Culture of World', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 6, 3),
('29', 'The Great War', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 6, 4),
('30', 'World War II', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 6, 5),
('31', 'Introduction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 7, 1),
('32', 'Reading Maps', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 7, 2),
('33', 'Astronomy of the Earth', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 7, 3),
('34', 'Climatology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 7, 4),
('35', 'Landfroms & Geology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 7, 5),
('36', 'Introduction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 8, 1),
('37', 'Social Structure', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 8, 2),
('38', 'Families in Society', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 8, 3),
('39', 'Problems in Society', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 8, 4),
('40', 'Exploring our Society', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 8, 5),
('41', 'FOE I', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 9, 1),
('42', 'FOE II', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 9, 2),
('43', 'English Language', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 9, 3),
('44', 'English Literature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 9, 4),
('45', 'Public Speaking', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 9, 5),
('46', 'Pedoman Bahasa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 10, 1),
('47', 'Paragraf', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 10, 2),
('48', 'Cerpen', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 10, 3),
('49', 'Puisi & Sajak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 10, 4),
('50', 'Karya Tulis Ilmiah', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.', 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_pengajar` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `foto` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id`, `email`, `username`, `nama_pengajar`, `jenis_kelamin`, `tanggal_lahir`, `telepon`, `foto`) VALUES
(1, 'bagasaf@gmail.com', 'bagasaf', 'Bagas Adi Firdaus', NULL, NULL, '081212017625', NULL),
(2, 'aghinyaam@gmail.com', 'aghniyaam', 'Aghniya Abdurrahman Mannan', NULL, NULL, '087777792710', NULL),
(3, 'farhang@gmail.com', 'farhang', 'Farhan Gunadi', NULL, NULL, '08989040798', NULL),
(4, 'sitih@gmail.com', 'sitih', 'Siti Humairoh', NULL, NULL, '081582719263', NULL),
(5, 'anest@gmail.com', 'anest', 'Anes Trisakti', NULL, NULL, '081281728361', NULL),
(6, 'nurula@gmail.com', 'nurula', 'Nurul Amalia', NULL, NULL, '082186192649', NULL),
(7, 'zahraf@gmail.com', 'zahraf', 'Zahra Faradilla', NULL, NULL, '088827193541', NULL),
(8, 'bambangk@gmail.com', 'bambangk', 'Bambang Kurniawan', NULL, NULL, '081584016012', NULL),
(9, 'renataa@gmail.com', 'renataa', 'Renata Adila', NULL, NULL, '087771025391', NULL),
(10, 'lindam@gmail.com', 'lindam', 'Linda Melinda', NULL, NULL, '082128943014', NULL),
(11, 'test@gmail.com', 'frhn232', NULL, NULL, NULL, NULL, NULL),
(12, 'farhan@gmail.com', 'guru1', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `email`, `username`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `telepon`, `foto`) VALUES
(1, 'bagas.ktbffh@gmail.com', 'bagas', '', '', '0000-00-00', '', '2893260.jpg'),
(2, 'bagasadifirdaus@gmail.com', 'test', 'a', 'L', '2020-12-03', '123', 'edit7.jpg'),
(3, 'abdurrahman1270@gmail.com', 'rahman', NULL, NULL, NULL, NULL, NULL),
(4, 'abcd@gmail.com', 'frhn231', '', '', '0000-00-00', '', 'selfpotrait.png'),
(11, 'murid@gmail.com', 'murid1', '', '', '0000-00-00', '', 'edit10.jpg'),
(12, 'murid2@gmail.com', 'murid2', '', '', '0000-00-00', '', '2467499.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `belajar`
--
ALTER TABLE `belajar`
  ADD KEY `fk1_belajar` (`id_siswa`),
  ADD KEY `fk2_belajar` (`id_mapel`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mapel` (`id_pengajar`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_siswa` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `belajar`
--
ALTER TABLE `belajar`
  ADD CONSTRAINT `fk1_belajar` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`),
  ADD CONSTRAINT `fk2_belajar` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`);

--
-- Constraints for table `mapel`
--
ALTER TABLE `mapel`
  ADD CONSTRAINT `fk_mapel` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswa` FOREIGN KEY (`email`) REFERENCES `login` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
