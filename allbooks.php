<?php
include_once "./database.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css link dashboard-master -->
    <link rel="stylesheet" href="dashboard-master.css">
    <!-- link boostrap icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./addbook.css">
    <link rel="stylesheet" href="./allbooks.css">
    <link rel="preload" as="script" href="./dashboard-master.js">
    <link rel="preload" as="script" href="./dashboard-master.css">
    <link rel="preload" as="script" href="./allbooks.css">
    <link rel="preload" as="script" href="./addbook.css">
    <title>Liburary-master</title>
</head>

<body>

    <!-- nav bar claas -->


    <!-- dis play grid here -->

    <div class="display-grid">

        <!-- this is navigation bar -->

        <div class="nav">
            <!-- cdiv logo -->

            <div class="logo"><i class="fa-solid fa-book-open-reader"></i> Mater Dei Liburaly Master</div>

            <i id="show2" class="fa-solid fa-ellipsis-vertical"></i>
            <!-- navigation logo -->
            <div id="link-nav" class="link-nav">

                <!-- closed button -->
                <i id="show1" class="fa-solid fa-xmark"></i>

                <ul>

                    <li><a href="#">Issue Book</a></li>
                    <li><a href="#">return Book</a></li>
                    <li><a href="./allbooks.php">All Book</a> </li>
                    <li><a href="./index.php">Back Home</a>
                    <li><a href="#" class="btn1"> Log Out</a> </li>

                </ul>
            </div>



        </div>


        <!-- this is the sider bar -->

        <div class="sider-bar" id="sider-bar">

            <!-- close in responsive -->

            <div class="closebtn">
                <i class="fa-sharp fa-solid fa-circle-xmark"></i>
            </div>

            <div class="addbook">
                    
                <a href="./addbook.php">
                    <i class="fa-solid fa-book-open-reader"></i>
                    + Addbook</a>
            </div>


        </div>
        <!-- main container -->
        <main class="main-container">

        <div class="table">
            
            <div  class="showbtn" >
                <i   class="fa-solid fa-grip-vertical"></i>
            </div>
            <table>
                
            <thead>
                <tr>
                    <th>id</th>
                    <th>book  title</th>
                    <th>book code</th>
                    <th>date of aquisition</th>
                    <th>location</th>
                    <th>Isbn</th>
                    <th>author</th>
                    <th>publisher</th>
                    <th>theme</th>
                    <th>status</th>
                </tr>
            </thead>

                
    
                <!-- table body -->
    
                <tbody>
                <?php
                //data Retreiving
                //Pagnition sequence
                $page;
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                }
                else {
                    $page = 0;
                }
                $start = 25*$page;
                $end = 25;
                $sql = "SELECT * FROM books ORDER BY id LIMIT ".$start.", ".$end;
                $query = mysqli_query($conn,$sql);
                if(mysqli_num_rows($query) > 0){
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "<tr>
                                <td>".$row['id']."</td>
                                <td>".$row['title']."</td>
                                <td>".$row['code']."</td>
                                <td>".$row['date_aquired']."</td>
                                <td>".$row['location']."</td>
                                <td>".$row['isbn']."</td>
                                <td>".$row['author']."</td>
                                <td>".$row['publisher']."</td>
                                <td>".$row['theme']."</td>
                                <td>".$row['status']."</td>
                             </tr>
                                ";
                    }
                }else{
                    echo "<tr><h3>No Such Books Found!</h3></tr>";
                }

                ?>
            </tbody>
            </table>

            <div class="tpage">
               <ul>
                <?php 
                $back = $page;
                // $sql0 = "SELECT * FROM books";
                // $query = mysqli_query($conn,$sql0);
                // $total_result = mysqli_num_rows($query);
                // $number_Of_page = ceil($total_result/25);
                // if ($page > $number_Of_page) {
                //     $page = 0;
                // }
                // if($page < 0){
                //     $page = 1;
                // }
                ?>
                <li><a href="./allbooks.php?page=<?php echo --$back; ?>">Previous</a></li>
                <li><a href="./allbooks.php?page=0">1</a></li>
                <li><a href="./allbooks.php?page=1">2</a></li>
                <li><a href="./allbooks.php?page=2">3</a></li>
                <li><a href="./allbooks.php?page=3">4</a></li>
                <li><a href="./allbooks.php?page=4">5</a></li>
                <li><a href="./allbooks.php?page=5">6</a></li>
                <li><a href="./allbooks.php?page=<?php echo ++$page; ?>">Next</a></li>
               </ul>

            </div>
        </div>
        </main>
    </div>

    <!-- link dashboard-master.js files -->
    <script src="./dashboard-master.js"></script>
</body>

</html>