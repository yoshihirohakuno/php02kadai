-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 22, 2020 at 12:49 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gs_book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `title` varchar(64) NOT NULL,
  `url` text NOT NULL,
  `comment` text,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `title`, `url`, `comment`, `indate`) VALUES
(1, 'スタートアップファイナンス 起業で失敗しない「おカネ」とのつき合い方', 'https://www.amazon.co.jp/%E3%82%B9%E3%82%BF%E3%83%BC%E3%83%88%E3%82%A2%E3%83%83%E3%83%97%E3%83%95%E3%82%A1%E3%82%A4%E3%83%8A%E3%83%B3%E3%82%B9-%E8%B5%B7%E6%A5%AD%E3%81%A7%E5%A4%B1%E6%95%97%E3%81%97%E3%81%AA%E3%81%84%E3%80%8C%E3%81%8A%E3%82%AB%E3%83%8D%E3%80%8D%E3%81%A8%E3%81%AE%E3%81%A4%E3%81%8D%E5%90%88%E3%81%84%E6%96%B9-%E5%8A%A0%E7%80%AC%E6%B4%8B/dp/479806100X?ref_=Oct_s9_apbd_simh_hd_bw_b1x4K&pf_rd_r=Y2YEVDFAM0EJ3H6ASWX8&pf_rd_p=cf26fdf2-623d-5bfe-b8ee-df493f9f5314&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=465392', 'テスト', '2020-10-18 10:25:16'),
(2, 'BEASTARS　１', 'https://www.amazon.co.jp/BEASTARS-%EF%BC%91-%E5%B0%91%E5%B9%B4%E3%83%81%E3%83%A3%E3%83%B3%E3%83%94%E3%82%AA%E3%83%B3%E3%83%BB%E3%82%B3%E3%83%9F%E3%83%83%E3%82%AF%E3%82%B9-%E6%9D%BF%E5%9E%A3%E5%B7%B4%E7%95%99-ebook/dp/B01N6EJJTC?ref_=Oct_s9_apbd_orec_hd_bw_b1x4K&pf_rd_r=TZFHGJ3NTFHJ5D35SGV6&pf_rd_p=992f62e6-e3b5-59ff-b921-18081b907823&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=465392', 'おもしろい！', '2020-10-19 21:11:08'),
(3, 'HARD THINGS (日本語)', 'https://www.amazon.co.jp/HARD-THINGS-%E3%83%99%E3%83%B3%E3%83%BB%E3%83%9B%E3%83%AD%E3%82%A6%E3%82%A3%E3%83%83%E3%83%84/dp/4822250857?ref_=Oct_s9_apbd_wsim_hd_bw_b1x4K&pf_rd_r=TZFHGJ3NTFHJ5D35SGV6&pf_rd_p=1aad5d90-3ef8-542d-929e-1a590240d201&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=465392', 'メモメモ', '2020-10-19 21:12:01'),
(22, 'ART SINCE 1900:図鑑 1900年以後の芸術', 'https://www.amazon.co.jp/ART-SINCE-1900-%E5%9B%B3%E9%91%91-1900%E5%B9%B4%E4%BB%A5%E5%BE%8C%E3%81%AE%E8%8A%B8%E8%A1%93/dp/4487810353?pd_rd_w=Y6RnB&pf_rd_p=14c8160f-ffdc-4692-8875-d1b271eb736f&pf_rd_r=NFFT8SHHFVS0F4SZMG0D&pd_rd_r=20c8f3b1-d053-4723-9bce-8675a95971ce&pd_rd_wg=u7ZOf', '読みたいけどちょっと高いなー', '2020-10-22 21:47:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
