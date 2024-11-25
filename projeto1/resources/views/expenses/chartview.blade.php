<x-app-layout>    
    <div>
        <canvas id="myChart" width="100vh" height="40vh"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        const chartData = 
        new Chart(ctx, {
          type: 'bar',
          data: {!! $chartData !!},
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
    </script>

</x-app-layout>