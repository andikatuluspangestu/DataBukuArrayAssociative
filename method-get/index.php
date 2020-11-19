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
            "judul" => "Jarum diatas Jerami",
            "ISBN" => "736-3636-28-9",
            "urutanBuku" => 1,
            "tahunterbit" => "2007"
        ],
        [
            "judul" => "Panji Nusantara",
            "ISBN" => "828-3765-27-2",
            "urutanBuku" => 2,
            "tahunterbit" => "2017"
        ],
        [
            "judul" => "Sang Pemimpi",
            "ISBN" => "979-3062-92-4",
            "urutanBuku" => 3,
            "tahunterbit" => "2011"
		],
		[
			"judul" => "Lakar Pelangi",
			"ISBN" => "979-3062-79-7",
			"urutanBuku" => 4,
			"tahunterbit" => "2005"
		],
		[
			"judul" => "Syukurlah",
			"ISBN" => "124-3526-99-1",
			"urutanBuku" => 5,
			"tahunterbit" => "2017"
		],
		[
			"judul" => "Surat Dari Nabawi",
			"ISBN" => "761-2765-12-2",
			"urutanBuku" => 6,
			"tahunterbit" => "2019"
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

	<br>
	<h2 class="text-center">Sistem Pendataan Buku</h2>
	
	<?php foreach($books as $book) : ?>

	<tr>
	  <td><?php echo $book["urutanBuku"]; ?></td>
	  <td><?php echo $book["judul"]; ?></td>
	  <td><?php echo $book["ISBN"]; ?></td>
	  <td>
	  <a href="index3.php?judul=<?= $book["judul"]; ?>&ISBN=<?= $book["ISBN"]; ?>">
	  	<button class="btn btn-sm btn-success">Lihat</button>
	  </a>
	  </td>
	</tr>
	
	<?php endforeach; ?>
    
    </tr>
  </tbody>
</table>
<br>
</div>
</body>
</html>
