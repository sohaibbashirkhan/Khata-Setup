<?php
include_once("conn.php")
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Payment </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php
        include_once("header.php");
        ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Payment Data</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
   
    <div class="row">
        <br>
        <td><a class="text-center" href="paymentAdd.php"> <button class="btn btn-success">Add New Payment</button></a></td>
                <!-- table start     -->
                <br><br><br>
<?php
    if(isset($_GET["add"])){
        ?>
<div class="container-fluid hide">
    <p class="bg-success text-light p-1 text-center"><b>Payment Add Success</b></p>
   </div>
        <?php
    }
?>
    <table class="table" border="1">
            <thead>
            <tr>
                    <th>Id</th>
                    <th>User</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>LeftAmount</th>
                </tr>
            </thead>
            <tbody>
                <!-- Query -->
<?php
            include_once("conn.php");
                    $query = "SELECT payment.id ,customer.name, customer.phone, payment.date, payment.Amount, payment.AmountLeft FROM payment
                    INNER JOIN customer
                    ON payment.userid = customer.id;";
                    $result = mysqli_query($conn,$query);  
                    if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[5];?></td>
                    
                   
                    <!-- <a href="OrderEdit.php?id=<?=$row['id']?>" class="btn btn-success" >Edit</a> -->
                    <!-- <td><a href="paymentedit.php?id=<?=$row['id']?>" class="btn btn-info" >Edit</a></td> -->
                    <!-- <td><a href="paymentAdd.php"> <button class="btn btn-success">Add New Payment</button></a></td> -->
                    <td><a href="paymentdelete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
                }
                }                                     
                ?>
            </tbody>
        </table>	
                                <!-- table end -->
</div>
</main>
<br><br><br>
<h3 class="text-center"> Go To Form </h3>
<a class="text-center" href="paymentAdd.php">Link</a>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/jquery-3.6.3.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        #calculator {
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 18px;
            box-sizing: border-box;
            text-align: right;
        }

        button {
            width: 23%;
            padding: 10px;
            font-size: 18px;
            margin: 5px;
            cursor: pointer;
            box-sizing: border-box;
        }

        #equals {
            width: 48%;
            background-color: #28a745;
            color: #fff;
        }

        #clear {
            width: 23%;
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>
<body>
    <div id="calculator">
        <input type="text" id="display" readonly>
        <button onclick="appendToDisplay('7')">7</button>
        <button onclick="appendToDisplay('8')">8</button>
        <button onclick="appendToDisplay('9')">9</button>
        <button onclick="appendToDisplay('/')">/</button>

        <button onclick="appendToDisplay('4')">4</button>
        <button onclick="appendToDisplay('5')">5</button>
        <button onclick="appendToDisplay('6')">6</button>
        <button onclick="appendToDisplay('*')">*</button>

        <button onclick="appendToDisplay('1')">1</button>
        <button onclick="appendToDisplay('2')">2</button>
        <button onclick="appendToDisplay('3')">3</button>
        <button onclick="appendToDisplay('-')">-</button>

        <button onclick="appendToDisplay('0')">0</button>
        <button onclick="appendToDisplay('.')">.</button>
        <button onclick="appendToDisplay('+')">+</button>

        <button id="equals" onclick="calculate()">=</button>
        <button id="clear" onclick="clearDisplay()">C</button>
    </div>

    <script>
        function appendToDisplay(value) {
            document.getElementById('display').value += value;
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        function calculate() {
            try {
                document.getElementById('display').value = eval(document.getElementById('display').value);
            } catch (error) {
                document.getElementById('display').value = 'Error';
            }
        }
    </script> -->
