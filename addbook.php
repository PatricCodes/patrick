

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
    <link rel="preload" as="script" href="./addbook.css">
    <link rel="preload" as="script" href="./dashboard-master.js">
    <link rel="preload" as="script" href="./dashboard-master.css">
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

        <div class="sider-bar">

        <div class="addbook">
                    
                    <a href="./addbook.php">
                        <i class="fa-solid fa-book-open-reader"></i>
                        + Addbook</a>
                </div>


        </div>
        <!-- main container -->

        <main class="main-container">

            <form action="./automate.php" method="POST" id="form">

                <div class="headerform">
                    <h1></i></i> Automation Book</h1>
                </div>

                <div class="input">
            
                    <!-- text in put -->
                    <div class="textinput">
                        <div class="textinput1">
                            <div class="text">
                                <input type="text" name="title" id="" placeholder="Book title" required><br />
                                </div>
           
                                <div class="text">
                               <input type="text" name="code" id="" placeholder="Book code" required><br />
                                </div>
           
                                <div class="text">
                               <input type="text" name="location" id="" placeholder="Book location" required><br />
                                </div>
                                <div class="text">
                               <input type="text" name="publisher" id="" placeholder="Bublisher" required><br />
                                </div>
           
                                <div class="text">
                               <input type="text" name="author" id="" placeholder="Author" required><br />
                                </div>
           
                        </div>
                        <!-- input text2 -->

                        <div class="textinput2">
                            
                            <div class="text">
                                <input type="text" name="theme" id="" placeholder="Theme" required><br />
                                 </div>
            
                                 <div class="text">
                                <input type="text" name="date" id="" placeholder="Date Aquired" required><br />
                                 </div>
            
                                 <div class="text">
                                <input type="text" name="isbn" id="" placeholder="Isbn-Code" required><br />
                                 </div>
            
                                 <div class="text">
                                <input type="text" name="from" id="" placeholder="From/Start" required><br />
                                 </div>
            
                                 <div class="text">
                                <input type="text" name="to" id="" placeholder="To/End" required><br />
                                 </div>
                        </div>
                    </div>

                    
                    <input type="submit" value="automater" name="Submit" onclick="AddBook()"><br />
                

                </div>
            </form>




            <!-- modal -->

            <!-- <div id="modal" class="modal">
         <div class="formin">

             <div class="div1">
              <div class="inner"></div>
     
             </div>


             <div class="div2">

                  closed btn 

                 <i id="div2x" class="fa-solid fa-xmark"></i>

                 <form action="" method="post">
                       <div class="h"><h1>Issue Book to Student</h1></div>
                     <input type="text"   name="username" placeholder="please enter student name"><br>
                     <input type="text" name="code" placeholder="entar book code"><br>
                     <input type="submit" name="issue" value="issue"><br>
                 </form>
             </div>
          
        </div> 
        </div> -->

        </main>
    </div>

    <!-- link dashboard-master.js files -->
    <script src="./dashboard-master.js"></script>
</body>

</html>