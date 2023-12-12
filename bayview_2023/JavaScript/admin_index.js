//bar
var bar = document.getElementById("barChart").getContext('2d');
var myBarChart = new Chart(bar, {
  type: 'bar',
  data: {
    labels: [ "Female", "Male"],
    datasets: [{
      label: 'Gender %',
      data: [6, 50],
      backgroundColor: [
        'rgba(54, 162, 235, 0.2)',
        'rgba(75, 192, 192, 0.2)',
      ],
      borderColor: [
        '#0A2239',
        '#132E32',
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});