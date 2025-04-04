<?php
  $servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $dbname = "adbms_09"; 

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT s_order_no, s_order_date, client_no, dely_add, salesman_no, dely_type, billed_yn, dely_date, order_status FROM sales_orders";
  $result = $conn->query($sql);
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Sales Orders</title>
      <style>
          table {
              width: 100%;
              border-collapse: collapse;
              margin: 20px 0;
          }
          th, td {
              border: 1px solid #ddd;
              padding: 8px;
              text-align: left;
          }
          th {
              background-color: #f2f2f2;
          }
      </style>
  </head>
  <body>
      <h2>Sales Orders</h2>
      <table>
          <tr>
              <th>Order No</th>
              <th>Order Date</th>
              <th>Client No</th>
              <th>Delivery Address</th>
              <th>Salesman No</th>
              <th>Delivery Type</th>
              <th>Billed (Y/N)</th>
              <th>Delivery Date</th>
              <th>Order Status</th>
          </tr>
          <?php
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>" . htmlspecialchars($row["s_order_no"]) . "</td>
                          <td>" . htmlspecialchars($row["s_order_date"]) . "</td>
                          <td>" . htmlspecialchars($row["client_no"]) . "</td>
                          <td>" . htmlspecialchars($row["dely_add"]) . "</td>
                          <td>" . htmlspecialchars($row["salesman_no"]) . "</td>
                          <td>" . htmlspecialchars($row["dely_type"]) . "</td>
                          <td>" . htmlspecialchars($row["billed_yn"]) . "</td>
                          <td>" . htmlspecialchars($row["dely_date"]) . "</td>
                          <td>" . htmlspecialchars($row["order_status"]) . "</td>
                        </tr>";
              }
          } else {
              echo "<tr><td colspan='9'>No records found</td></tr>";
          }
          $conn->close();
          ?>
      </table>
  </body>
  </html>
