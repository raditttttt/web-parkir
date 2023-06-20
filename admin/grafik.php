<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik</title>
</head>
<style>
    body{
        background-color: #27374d;
        color: #f6f1f1;
        padding-inline: 70px;
    }
    /* label{
        color: #f6f1f1;
    } */
    button{
        background: #f6f1f1;
        border: none;
        width: 60px;
        height: 30px;
        margin-top: 25px;
    }
    /* canvas{
        position: relative;
        width: 60px;
        height: 50px;
    } */
</style>
<body>
    <button onclick="window.location.href='index.php'"> Kembali </button>
    <h1> Data Kunjungan</h1>
    <canvas id="isi-grafik">

    </canvas>
    <script src="../node_modules/chart.js/dist/chart.umd.js"></script>
    <script>
        
    const ctx = document.getElementById('isi-grafik');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Ahad"],
        datasets: [{
            label: "Jumlah Motor Parkir",
            data: [20, 32, 40, 44, 33, 29, 40],
            backgroundColor: "#0a6ebd",
            borderRadius: 5
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    color: '#FAFAFA'
                }
            },
            x: {
                ticks: {
                    color: '#FAFAFA'
                }
            }
        }
    }
});
    </script>
</body>
</html>