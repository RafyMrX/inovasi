<?php 
include 'header.php';

// pesanan baru 
$result1 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE terima = 0 and tolak = 0");
$jml1 = mysqli_num_rows($result1);

// pesanan dibatalkan/ditolak
$result2 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE  tolak = 1");
$jml2 = mysqli_num_rows($result2);

// pesanan diterima
$result3 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE  terima = 1");
$jml3 = mysqli_num_rows($result3);
?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #FFB347			; /* Warna emas pastel */
        }
        .container {
            flex: 1;
        }
        @media print {
            .print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div style="background-color: #87CEFA; padding-bottom: 60px; padding-left: 20px; padding-right: 20px; padding-top: 10px;">
                    <h4>PESANAN BARU</h4>
                    <h4 style="font-size: 56pt;"><b><?= htmlspecialchars($jml1); ?></b></h4>
                </div>
            </div>

            <div class="col-md-4">
                <div style="background-color: #FF0000; padding-bottom: 60px; padding-left: 20px; padding-right: 20px; padding-top: 10px;">
                    <h4>PESANAN DIBATALKAN</h4>
                    <h4 style="font-size: 56pt;"><b><?= htmlspecialchars($jml2); ?></b></h4>
                </div>
            </div>

            <div class="col-md-4">
                <div style="background-color: #00FF7F; padding-bottom: 60px; padding-left: 20px; padding-right: 20px; padding-top: 10px;">
                    <h4>PESANAN DITERIMA</h4>
                    <h4 style="font-size: 56pt;"><b><?= htmlspecialchars($jml3); ?></b></h4>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <?php include 'footer.php'; ?>
</body>
</html>
