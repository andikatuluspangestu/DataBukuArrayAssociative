<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menampilkan Data Buku dengan Array Associative PHP</title>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
	<style>

	a {
		text-decoration: none;
	}

		table { 
	width: 100%; 
	border-collapse: collapse; 
	margin:20px auto;
	border-radius: 3px;
	}

tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	
	background: blue; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 20px; 
	text-align: left; 
	font-size: 18px;
	}


@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		position: absolute;
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		content: attr(data-column);
		color: #000;
		font-weight: bold;
	}

}
	</style>
</head>
<body>
<!-- Books Data -->

<?php $books = 
    [
        [
			"gambar" => "https://upload.wikimedia.org/wikipedia/id/thumb/f/f3/Ayah_%28novel%29.jpeg/220px-Ayah_%28novel%29.jpeg",
			"judul" => "Ayah",
			"karangan" => "Andrea Hirata",
            "ISBN" => "736-3636-28-9",
            "urutanBuku" => 1,
			"tahunterbit" => "2007",
			"deskripsi" => "Ayah adalah sebuah novel fiksi yang ditulis Andrea Hirata, dan di terbitkan oleh Bentang Pustaka pada 2015."
        ],
        [
            "judul" => "Orang Biasa",
            "ISBN" => "0-14-006517-2",
            "urutanBuku" => 2,
			"tahunterbit" => "2017",
			"gambar" => "https://upload.wikimedia.org/wikipedia/en/thumb/e/e4/Ordinary_People_cover.jpg/220px-Ordinary_People_cover.jpg",
			"karangan" => "Judith Guest",
			"deskripsi" => "Bagaimanapun, mereka adalah orang biasa. Untuk beberapa waktu mereka telah memasuki dunia statistik surat kabar; dunia di mana tindakan apa pun yang Anda ambil untuk merasa lebih baik hanya sementara, paling banter, tapi itu sudah berakhir. Ini permanen. Itu pasti."
        ],
        [
            "judul" => "Sang Pemimpi",
            "ISBN" => "979-3062-92-4",
            "urutanBuku" => 3,
			"tahunterbit" => "2011",
			"gambar" => "https://upload.wikimedia.org/wikipedia/id/thumb/8/89/Sang_Pemimpi_sampul.jpg/220px-Sang_Pemimpi_sampul.jpg",
			"karangan" => "Andrea Hirata",
			"deskripsi" => "Sang Pemimpi Baru adalah novel kedua dalam tetralogi Laskar Pelangi karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada Juli 2006. Dalam novel ini, Andrea mengeksplorasi hubungan persahabatannya dengan dua anak yatim piatu, Arai Ichsanul Mahidin dan Jimbron, serta kekuatan mimpi yang dapat membawa Andrea dan Arai melanjutkan studi ke Sorbonne, Paris, Prancis.
			Dalam novel Sang Pemimpi, Andrea Hirata bercerita tentang kehidupannya di Belitong pada masa SMA. Tiga tokoh utama dalam karya ini adalah Ikal, Arai dan Jimbron. Ikal tidak lain adalah Andrea Hirata sendiri, sedangkan Arai Ichsanul Mahidin adalah saudara jauhnya yang menjadi yatim piatu ketika masih kecil. Arai disebut simpai keramat karena dalam keluarganya ia adalah orang terakhir yang masih hidup dan ia pun diangkat menjadi anak oleh ayah Ikal. Jimbron merupakan teman Arai dan Ikal yang sangat terobsesi dengan kuda dan gagap bila sedang antusias terhadap sesuatu atau ketika gugup. Ketiganya melewati kisah persahabatan yang terjalin dari kecil hingga mereka bersekolah di SMA Negeri Bukan Main, SMA pertama yang berdiri di Belitung bagian timur.",
		],
		[
			"judul" => "Lakar Pelangi",
			"ISBN" => "979-3062-79-7",
			"urutanBuku" => 4,
			"tahunterbit" => "2005",
			"gambar" => "https://upload.wikimedia.org/wikipedia/id/thumb/8/8e/Laskar_pelangi_sampul.jpg/220px-Laskar_pelangi_sampul.jpg",
			"karangan" => "Andrea Hirata",
			"deskripsi" => "Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan",
		],
		[
			"judul" => "Padang Bulan",
			"ISBN" => "	978-602-881-109-5",
			"urutanBuku" => 5,
			"tahunterbit" => "2010",
			"gambar" => "https://upload.wikimedia.org/wikipedia/id/thumb/e/ea/Padang_Bulan.jpg/220px-Padang_Bulan.jpg",
			"karangan" => "Andrea Hirata",
			"deskripsi" => "Padang Bulan adalah sebuah novel fiksi karya Andrea Hirata, diterbitkan oleh Bentang Pustaka pada 2010. Novel ini berkisah tentang Enong, gadis kecil yang ketika usia ke 14 harus kehilangan sosok seorang ayah dan mengemban tugas sebagai anak pertama yang begitu berat. Enong harus meninggalkan sekolahnya demi sekolah adik-adiknya dan mengambil suatu pekerjaan yang hina, yaitu seorang pendulang timah",
		],
		[
			"judul" => "Cinta Dalam Gelas",
			"ISBN" => "978-602-881-109-5",
			"urutanBuku" => 6,
			"tahunterbit" => "2011",
			"gambar" => "https://upload.wikimedia.org/wikipedia/id/thumb/0/0c/Cinta_di_Dalam_Gelas.jpg/220px-Cinta_di_Dalam_Gelas.jpg",
			"karangan" => "Andrea Hirata",
			"deskripsi" => "Cinta di Dalam Gelas adalah sebuah novel fiksi karya Andrea Hirata, diterbitkan oleh Bentang Pustaka pada 2011. Cinta di Dalam Gelas bertutur tentang tugas berat di pundak Ikal. Dia harus membantu Maryamah memenangkan pertandingan catur saat 17 Agustus nanti. Maryamah, yang memenangkan bidak catur saja belum pernah, dan harus mengalahkan juara catur selama dua tahun berturut-turut yang juga memenangkan kompetisi. Namun, lebih dari itu, gender Maryamah adalah hal tabu katanya untuk bermain catur.",
  		]
    ]  
  ?>



<div class="container">
<table class="shadow border-0">
  <thead>
    <tr>
      <th>No</th>
      <th>Judul Buku</th>
      <th>ISBN</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

	<br><br>
	<h2 class="text-center">Sistem Informasi Data Buku</h2>
	<br>
	<?php foreach($books as $book) : ?>

	<tr>
	  <td><?php echo $book["urutanBuku"]; ?></td>
	  <td><?php echo $book["judul"]; ?></td>
	  <td><?php echo $book["ISBN"]; ?></td>
	  <td>
	  <a href="index3.php?judul=<?= $book["judul"]; ?>&ISBN=<?= $book["ISBN"]; ?>&deskripsi=<?= $book["deskripsi"]; ?>&gambar=<?= $book["gambar"]; ?>&karangan=<?= $book["karangan"]; ?>">
	  	<button class="btn btn-sm btn-success">Lihat</button>
	  </a>
	  </td>
	</tr>
	
	<?php endforeach; ?>
    
    </tr>
  </tbody>
</table>
<span>
	Terakhir di perbarui pada 
	<?php echo date('d-m-Y H:i:s'); ?>
</span>
<br>
</div>
</body>
</html>
