<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		table { 
	width: 100%; 
	border-collapse: collapse; 
	margin:20px auto;
	}

tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #000000; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
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
  		]
    ]  
  ?>



<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Judul Buku</th>
      <th>ISBN</th>
      <th>Tahun Terbit</th>
    </tr>
  </thead>
  <tbody>
	
	<?php foreach($books as $book) : ?>

	<tr>
	  <td><?php echo $book["urutanBuku"]; ?></td>
	  <td><?php echo $book["judul"]; ?></td>
	  <td><?php echo $book["ISBN"]; ?></td>
	  <td><?php echo $book["tahunterbit"]; ?></td>
	</tr>
	
	<?php endforeach; ?>
    
    </tr>
  </tbody>
</table>
</body>
</html>