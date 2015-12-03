<?php
/*
  Manipulating SQL Databases with PHP
*/

# Part 1 - Creating a connection to MySQLi
$conn = new mysqli("localhost", "root", "root", "myDB"); // Connect to MySQLi

// Test Connection to see if it is established
if ($conn->connect_error) {
  echo "Connection failed!  " . $conn->connect_error;
} else {
  echo "Connection successful!";
}

# Part 2 - Create a MySQLi Database

// Create Database - Database already created

// if ($conn->query("CREATE DATABASE myDB") === true) {
//   echo "<br />Database created successfully!";
// } else {
//   echo "<br />Error!  Database was NOT created.  " . $conn->error;
// }

# Part 3 - Create MySQLi Tables

// SQL Statement - Table already created

// $sql = "CREATE TABLE my_table (
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   firstname VARCHAR(30) NOT NULL,
//   lastname VARCHAR(30) NOT NULL,
//   email VARCHAR(50),
//   reg_date TIMESTAMP
// )";

// Pass SQL statement to actually create table - table already created

// if ($conn->query($sql) === true) {
//   echo "<br />Table created successfully!";
// } else {
//   echo "<br />Table was not created because: " . $conn->error;
// }

# Part 4 - Insert Data - Test Successful

// $sql = "INSERT INTO my_table (firstname, lastname, email) VALUES ('John', 'Doe', 'johndoe@example.tld')";
//
// if ($conn->query($sql) === true) {
//   echo "<br />New Record Created Successfully!";
// } else {
//   echo "<br />Error!  " . $conn->error;
// }

# Part 5 - Get ID of Last Inserted Record - Test Successful

// $sql = "INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld')";
//
// if ($conn->query($sql) === true) {
//   echo "<br />New Record Created Successfully!  Last Inserted ID is: " . $conn->insert_id;
// } else {
//   echo "<br />Error!  " . $conn->error;
// }

# Part 6 - Insert Multiple Records into MySQLi using multi_query() method - Test Successful

// $sql = "INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');INSERT INTO my_table (firstname, lastname, email) VALUES ('Jane', 'Doe', 'janedoe@example.tld');";
//
// if ($conn->multi_query($sql) === true) {
//   echo "<br />Records created successfully!  Last ID: " . $conn->insert_id;
// } else {
//   echo "<br />Error: " . $conn->error;
// }

# Part 7 - Prepared Statements and Bound Parameters - Test Successful

// $stmt = $conn->prepare("INSERT INTO my_table (firstname, lastname, email) VALUES (?, ?, ?)");
// $stmt->bind_param("sss", $firstname, $lastname, $email);
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// $firstname = "Donald";
// $lastname = "Leung";
// $email = "dleung@connect.kellettschool.com";
// $stmt->execute();
//
// echo "<br /> New Records Created Successfully!";

# Part 8 - MySQL Select Data - Test Successful

// $sql = "SELECT * FROM my_table";
// $result = $conn->query($sql);
//
// if ($result->num_rows > 0) {
//   echo "<br />";
//   echo "<table>
//     <thead>
//       <tr>
//         <th>id</th>
//         <th>firstname</th>
//         <th>lastname</th>
//         <th>email</th>
//         <th>reg_date</th>
//       </tr>
//     </thead><tbody>";
//   while ($row = $result->fetch_assoc()) {
//     echo "<tr>
//       <td>" . $row["id"] . "</td>
//       <td>" . $row["firstname"] . "</td>
//       <td>" . $row["lastname"] . "</td>
//       <td>" . $row["email"] . "</td>
//       <td>" . $row["reg_date"] . "</td>
//     </tr>";
//   }
//   echo "</tbody></table>";
// } else {
//   echo "<br />Sorry, the table is empty.";
// }

# Part 9 - MySQL Delete Data - Test Successful

// $sql = "DELETE FROM my_table WHERE lastname = 'Leung';";
//
// if ($conn->query($sql) === true) {
//   echo "<br />All records with last name 'Leung' deleted!";
// } else {
//   echo "<br />Error: " . $conn->error;
// }


# Part 10 - Update Data in MySQL - Test Successful

// $sql = "UPDATE my_table SET firstname = 'Jane', lastname = 'Anderson', email = 'janeanderson@example.tld' WHERE id = 5;";
//
// if ($conn->query($sql) === true) {
//   echo "<br />Records successfully updated!";
// } else {
//   echo "<br />Error updating records: " . $conn->error;
// }

# Part 11 - Limit Data - No Testing Needed

// e.g. ...
$sql = "SELECT * FROM my_table LIMIT 15 OFFSET 5"; // Returns records from index 6 to index 20 inclusive
// ... and pass this on to $conn->query()

# Close the "stmt"

// $stmt->close();

# Close the connection
$conn->close();
?>
