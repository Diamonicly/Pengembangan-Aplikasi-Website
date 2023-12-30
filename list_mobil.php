<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {background-color: #f5f5f5;}
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = "SELECT * FROM showroom_mobil";
            $result = $koneksi->query($query);
            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            if(mysqli_num_rows($result) > 0) {
                echo "<table border='1'>";
                    echo "<tr>";
                        echo "<th style='text-align:center;'>ID</th>";
                        echo "<th>Nama Mobil</th>";
                        echo "<th>Brand Mobil</th>";
                        echo "<th>Warna Mobil</th>";
                        echo "<th>Tipe Mobil</th>";
                        echo "<th>Harga Mobil</th>";
                    echo "</tr>";
            
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                    echo "<td style='text-align:center;'>".$row['id']."</td>";
                    echo "<td>".$row['nama_mobil']."</td>";
                    echo "<td>".$row['brand_mobil']."</td>";
                    echo "<td>".$row['warna_mobil']."</td>";
                    echo "<td>".$row['tipe_mobil']."</td>";
                    echo "<td>".$row['harga_mobil']."</td>";
                    echo "<td><a href='form_detail_mobil.php?id=".$row['id']."'><button>Detail Mobil " .$row['nama_mobil']."</button></a></td>";
                echo "</tr>";
            } 
            echo "</table>"; 
            } else {
                echo "tidak ada data dalam tabel";
            }
            ?>
        </div>
    </center>
</body>
</html>
