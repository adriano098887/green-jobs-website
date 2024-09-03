<script>
    var ctx = document.getElementById('statsChart').getContext('2d');
    var statsChart = new Chart(ctx, {
        type: 'bar', // Change to 'line', 'pie', etc. as needed
        data: {
            labels: ['2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Number of Green Jobs Created',
                data: [1000, 1500, 2000, 2500], // Example data
                backgroundColor: 'rgba(76, 175, 80, 0.2)',
                borderColor: 'rgba(76, 175, 80, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

