
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./CSS/available_room.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    
    <script src="./JavaScript/available_room.js"> </script>



</head>

<body>
    <!-- navbar -->
  <?php include("nav.php") ?>
  <!-- end of navbar -->
          
        <div id="main">
            <h2>Room <span id = "head">Availability</span> </h2>
            <section id="info_boxes">
                <div id="info1">
                    <span class="head"> Abdi Hostel</span>
                    <span class="details"><ul>
                      <li>Premium Male Block</li>
                      <li>24 rooms</li>
                    </ul></span>
                    <span class="bottom"> See Availability
                        <!-- <span><i class="fa-regular fa-caret-down"></i></span> -->
                        <span><a href="#" onclick= 'showTable(1)'><img id="arrow" src="./images/down_arrow.png"></a></span>

                    </span>
                </div>
                <div id="info2">
                    <span class="head"> Haligah Hostel</span>
                    <span class="details"><ul>
                      <li>Regular Female Block</li>
                      <li>18 rooms</li>
                    </ul></span>
                    <span class="bottom"> See Availability
                        <span><a href="#" onclick= 'showTable(2)'><img id="arrow" src="./images/down_arrow.png"></a></span>

                    </span>
                    
                </div>
                <div id="info3">
                    <span class="head"> Niang Hostel</span>
                    <span class="details"><ul>
                      <li>Regular Male Block</li>
                      <li>18 rooms</li>
                    </ul></span>
                    <span class="bottom"> See Availability
                        <span><a href="#" onclick= 'showTable(3)'><img id="arrow" src="./images/down_arrow.png"></a></span>
                    </span>

                    
                </div>
                <div id="info4">
                    <span class="head"> Maatalla Hostel</span>
                    <span class="details"><ul>
                      <li>Premium Female Block</li>
                      <li>24 rooms</li>
                    </ul></span>
                    <span class="bottom"> See Availability
                        <a href="#" onclick= 'showTable(4)'><img id="arrow" src="./images/down_arrow.png"></a>
                    </span>
    
                </div>
            </section>
            <section id="tables">
                <table id="table1" >
                    <caption><h3>Abdi Hostel</h3></caption>
                    <thead>
                        <tr>
                        <th>Room</th>
                        <th>Capacity</th>
                        <th>Status</th>
                        <th>Available Space(s)</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                       
                        
                      </tr> 
                    </tbody>
                    
                      
                </table>
                
                <!-- Table 2 -->
                <table id="table2" >
                    <caption><h3>Haligah Hostel</h3></caption>

                    <thead>
                        <tr>
                        <th>Room</th>
                        <th>Capacity</th>
                        <th>Status</th>
                        <th>Available Space(s)</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                    
                      
                </table>
                <!-- Table 3 -->
                <table id="table3">
                    <caption><h3>Niang Hostel</h3></caption>

                    <thead>
                        <tr>
                        <th>Room</th>
                        <th>Capacity</th>
                        <th>Status</th>
                        <th>Available Space(s)</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    
                      
                </table>
                <!-- Table 4 -->
                <table id="table4">
                    <caption><h3>Maatalla Hostel</h3></caption>

                    <thead>
                        <tr>
                        <th>Room</th>
                        <th>Capacity</th>
                        <th>Status</th>
                        <th>Available Space(s)</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                    
                      
                </table>
                
            </section>
          </div>
    
    </div>
    <script>
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

  
    
    