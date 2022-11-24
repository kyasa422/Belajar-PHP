<?php
require "funtions.php";





// $row2 = $TI->fetch_array();
// $jumlah[] = $row2['jumlahjurusan'];

$mahasiswa = mysqli_query($db, "SELECT * FROM mahasiswa");
// var_dump($mahasiswa);
// die;

while ($row = mysqli_fetch_array($mahasiswa)) {

    // var_dump($row);
    $jurusan[] = $row['jurusan'];
    var_dump($row['jurusan']);
    $TI = mysqli_query($db, "SELECT sum(jumlahjurusan) as jumlahjurusan from mahasiswa where jurusan='".$row['Teknik Informatik'] ."'");

    var_dump($TI);
    // $query = mysqli_query($db, "SELECT COUNT(jurusan) as jumlah from mahasiswa where id='" . $row['id'] . "'");
    // $row2 = $query->fetch_array();
    // var_dump($row2);
    // $jumlah_nilai[] = $row2['jumlah'];
}

?>

<!doctype html>
<html>

<head>
    <title> Grafik Pie Chart</title>
    <script type="text/javascript" src="JS/Chart.js"></script>
</head>

<body>
    <div id="canvas-holder" style="width:50%">
        <canvas id="chart-area"></canvas>
    </div>
    <?php

    ?>
    <script>
        var config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: <?php echo json_encode($TI); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    label: 'Presentase Nilai Mahasiswa'
                }],
                labels: <?php echo json_encode($jurusan); ?>
            },
            options: {
                responsive: true
            }
        };

        window.onload = function() {
            var ctx = document.getElementById('chart-area').getContext('2d');
            window.myPie = new Chart(ctx, config);
        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            config.data.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return randomScalingFactor();
                });
            });

            window.myPie.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var newDataset = {
                backgroundColor: [],
                data: [],
                label: 'New dataset ' + config.data.datasets.length,
            };

            for (var index = 0; index < config.data.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());

                var colorName = colorNames[index % colorNames.length];
                var newColor = window.chartColors[colorName];
                newDataset.backgroundColor.push(newColor);
            }

            config.data.datasets.push(newDataset);
            window.myPie.update();
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            config.data.datasets.splice(0, 1);
            window.myPie.update();
        });
    </script>
</body>

</html>