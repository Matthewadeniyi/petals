<?php
include("control.php");
session_start();
$sessionID = session_id();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bayview Hostels</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="./CSS/admin_index.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    </head>
    <body>
       <?php include("nav.php"); ?>
        <div id="main">
        <!-- <a href="hostel_list.php?sid=<?php echo $sessionID; ?>">Go to the Second Page</a> -->

            <h2>Welcome, <span id="head">Admin! </span></h2>
            
            <section class="boxes">
                <div class="row">
                    <div class="box" id="box1">
                        <p class="box_text">Registered Students</p>
                        <p class="number" id="registered_students"><?=$pro->total1('user')?></p>
                    </div>
                    <div class="box" id="box1">
                        <p class="box_text">Booked Spaces</p>
                        <p class="number" id="booked_spaces"><?=$pro->total2('bedspace','sid',0)?></p>
                    </div>
                    <div class="box" id="box2">
                        <p class="box_text">Available Spaces</p>
                        <p class="number" id="available_spaces"><?=$pro->total('bedspace','sid',0)?></p>
                    </div>
                    <div class="box" id="box3">
                        <p class="box_text">Total Number of Rooms</p>
                        <p class="number" id="number_of_rooms"><?=$pro->total1('room')?></p>
                    </div>
                    <div class="box" id="box3">
                        <p class="box_text">Total Number of spaces</p>
                        <p class="number" id="number_of_rooms"><?=$pro->total1('bedspace')?></p>
                    </div>
                </div>
                <div id="chart_space"><canvas id="barChart"></canvas></div> 
            </section>
        </div>
        
         <!-- Database Retrieval for chart -->
        
        <script type="text/javascript">
            // Set figures based on database
            // document.getElementById("registered_students").innerHTML = ''
            // document.getElementById("available_spaces").innerHTML = ''
            // document.getElementById("number_of_rooms").innerHTML = ''
            // document.getElementById("name").innerHTML = ''
            // document.getElementById("head").innerHTML = ''
            // var male = ''
            // var female = ' '

        </script>
        
        

        <script>
            //bar
            var bar = document.getElementById("barChart").getContext('2d');
            var myBarChart = new Chart(bar, {
              type: 'bar',
              data: {
                labels: [ "Female", "Male"],
                datasets: [{
                  label: 'Gender %',
                  data: [female, male],
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

            function openNav() {
              document.getElementById("mySidebar").style.width = "250px";
              document.getElementById("main").style.marginLeft = "250px";
            }
            
            function closeNav() {
              document.getElementById("mySidebar").style.width = "0";
              document.getElementById("main").style.marginLeft= "0";
            }
        </script>

       
    </body>
</html>