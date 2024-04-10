<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title> user registration </title>
        <link rel="stylesheet" type="text/css" href ="css/bootstrap.min.css">
</head>
<style>
    table, th, td {
  border: 1px solid black;
}
</style>
<body>
    

<div>
    <?php
    if(isset($_POST['create'])){
        $firstname       = $_POST['firstname'];
        $lastname        = $_POST['lastname'];
        $age             = $_POST['age'];
        $birthday        = $_POST['birthday'];
        $department_id   = $_POST['department_id'];

     {

       $sql = "INSERT INTO  table_employee (firstname, lastname, age, birthday, department_id) VALUES ('$firstname', '$lastname', '$age', '$birthday', '$department_id')";
       $result = $conn->query($sql);
       if($result){
        echo 'succesfully saved';
       }else{
        echo 'there was an error while saving the data';
       }
    }
    }
    ?>

<div>
<form action="registration.php" method= "POST">
    <div class=" container">
  <div class="row">
    <div class ="col-sm-3">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="firstname"><b>firstname</b></label>
    <input class="form-control" type="text" name="firstname" required>.

    <label for="lastname"><b>lastname</b></label>
    <input class="form-control" type="text" name="lastname" required>

    <label for="age"><b>age</b></label>
    <input class="form-control" type="text" name="age" required>

    <label for="birthday"><b>birthday</b></label>
    <input class="form-control" type="date" name="birthday" required>

    
    
    
              <label for="jobtype">Department</label>
              <select class="form-control input-lg"  name="department_id">
                <option style="color:gray" value="" disabled selected>---------------</option>
                <?php 
                $sql1="SELECT * FROM table_departmen ";
                $result = $conn->query($sql1);

            //If Job Post exists then display details of post
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $dept_id = $row['dept_id'];
                $d_name= $row['department_name'];
                ?>
                
                <option value="<?php echo $dept_id; ?>"><?php echo $d_name; ?></option>
                <?php
              }
            }
            ?>
              </select>
         

    <input class="btn btn-primary" type="submit" name="create" value="sign up">
    
    <div>

    
</div>
</div>



</form>


</div>
        <br>
        <br>
        <br>

<table>
<thead>
            <th>id</th>
            <th>fullname</th>
            <th>age</th>
            <th>birthday</th>
            <th>department</th>
            <th>action</th>
          </thead>

          <?php
            $sql = "SELECT * FROM `table_employee` JOIN `table_departmen` ON table_employee.department_id= table_departmen.dept_id;";
            $result = $conn->query($sql);

            //If Job Post exists then display details of post
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $fullname = $row['firstname']. " " .$row['lastname'];
                $d_id = $row['department_id'];
                $id = $row['id'];
                $age = $row['age'];
                $birthday = $row['birthday'];
                $department = $row['department_name'];

                
            ?>
  
  <tr>

    <td><?php echo $id; ?></td>
    <td><?php echo $fullname; ?></td>
    <td><?php echo $age; ?></td>
    <td><?php echo $birthday; ?></td>
    <td><?php echo $department; ?></td>
    <td><a href="delete.php?id=<?php echo $id; ?>"><i class="fa fa-pencil-square-o"></i>DELETE</a></td>
        </tr>
        <?php
              }
            }
            ?>
</table>

</body>
</html>
