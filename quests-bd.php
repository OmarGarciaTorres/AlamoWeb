<?php
$connection = mysqli_connect('localhost','root','','book_db');

if(isset ($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
   

    $request ="insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values
    ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving)";

    mysqli_connect($connection, $request);
    header('location:book.php');

}
else{
    echo 'something wnt wrong try again';
}
?>

<?php
   $db_name = 'mysql:host=localhost;dbname=quests-bd';
   $db_user_name = 'root';
   $db_user_pass = '';

   $conn = new PDO($db_name, $db_user_name, $db_user_pass);

   function create_unique_id(){
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $characters_lenght = strlen($characters);
      $random_string = '';
      for($i = 0; $i < 20; $i++){
         $random_string .= $characters[mt_rand(0, $characters_lenght - 1)];
      }
      return $random_string;
   }

   if(isset($_POST['send'])){

      $id = create_unique_id();
      $name = $_POST['name'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $country = $_POST['country'];
      $visit = $_POST['visit'];
      $travel = $_POST['travel'];
      $hobbies = $_POST['hobbies'];

      $insert_book = $conn->prepare("INSERT INTO `quests-form`(id, name, age, gender, email, phone, country, visit, travel, hobbies) VALUES(?,?,?,?,?,?,?,?,?)");
      $insert_book->execute([$id, $name, $age, $gender, $email, $phone, $country, $visit, $travel, $hobbies]);

      $success_msg[] = 'Datos Registrados, en un momento seras redireccionado!'; 

   }
?>