<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="/Exam101/styles1.css">
  <link rel="stylesheet" href="/Exam101/bootstrap/bootstrap.min.css">

  <?php
  include ('con.php');

  $bread = $_POST['bread1'];
  $sauce = $_POST['sauce1'];
  $swt = $_POST['swt1'];
  $chese = $_POST['chese1'];
  $veggies = $_POST['veggies1'];
  $name = $_POST['name'];

  $sql = "INSERT into `orders` (Full_Name, Bread, Sauce, Sandwich, Chese, Veggies) 
  values ('$name', '$bread', '$sauce', '$swt', '$chese', '$veggies')";

  if (mysqli_query($conn, $sql)) {
   
} else {
    echo "Error: " . $sql . mysqli_error($conn);
}
  ?>

<body> 
  <br>
    <form action="index1.php" method="POST">
        <div id="order-table1" class="col-lg-8 Container">
          <div class="row"> 
             <div id="table-title" class="row"> 
                <h2 id="text-title"> Pre-Order </h2>
             </div>

          <div class="row"> 
            <label for="fname"><i class="fa fa-user"></i> Full Name:</label>
           <input type="text" id="fname" name="name" placeholder="Full Name">
          </div>

        <!-- end -->

          <div id="bread-table2" class="col-lg-3 row"> 
            <h5 style="text-align: center; font-weight: bold;"> Bread </h5>
              <div id="option-bread">
                <label id="product-options"> 
                <input type="radio" name="bread1" value="Whole Wheat">
                  Whole Wheat
                </label>
              </div>
              <div id="option-bread">
                <label id="product-options"> 
                <input type="radio" name="bread1" value="Italian Herb">
                  Italian Herb
                </label>
              </div>
              <div id="option-bread">
                <label id="product-options"> 
                <input type="radio" name="bread1" value="Jalapeno Parmesan">
                  Jalapeno Parmesan
                </label>
              </div>
        </div>
        <!-- end div -->
        <div id="bread-table2" class="col-lg-3 row"> 
          <h5 style="text-align: center; font-weight: bold;"> Sauce </h5>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="sauce1" value="Mayo">
              Mayo
            </label>
            </div>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="sauce1" value="Mustard">
              Mustard
              </label>
            </div>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="sauce1" value="Honey Mustard">
              Honey Mustard
            </label>
            </div>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="sauce1" value="Spicy Mayo">
              Spicy Mayo
              </label>
            </div>
        </div>
        <!-- end div -->
        <div id="bread-table2" class="col-lg-3 row"> 
          <h5 style="text-align: center; font-weight: bold;"> Sandwich Type </h5>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="swt1" value="Turkey Bacon Club">
              Turkey Bacon Club
              </label>
            </div>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="swt1" value="Oven Roasted Turkey">
              Oven Roasted Turkey
              </label>
            </div>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="swt1" value="Savory">
              Savory
              </label>
            </div>
        </div>
</div>
        <!-- end div first row-->
        <div class="Container"> 
          <div id="bread-table2" class="col-lg-3 row new-line-bt2"> 
          <h5 style="text-align: center; font-weight: bold;"> Chese </h5>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="chese1" value="American">
              American
              </label>
            </div>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="chese1" value=" Swiss">
              Swiss
              </label>
              </div>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="chese1" value="Pepperjack">
              Pepperjack
              </label>
            </div>
        </div>
        <!-- end div -->
        <div id="bread-table2" class="col-lg-6 row new-line-bt2"> 
          <h5 style="text-align: center; font-weight: bold;"> Veggies</h5>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="veggies1" value="Cucumber">
              Cucumber
              </label>
            </div>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="veggies1" value=" Lettuce">
              Lettuce
              </label>
            </div>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="veggies1" value="Peppers - Banana">
              Peppers - Banana
              </label>
            </div>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="veggies1" value="Pickles">
              Pickles
              </label>
            </div>
            <div id="option-bread">
              <label id="product-options"> 
              <input type="radio" name="veggies1" value="Spinach">
              Spinach
              </label>
            </div>
        </div>
      <!-- end div -->
        <div id="button-submit" class="row col-lg-4"> 
          <input type="submit" (click)="show()" name="submit" value="Submit Order">  <br> 
          (hire me please hehehe thanks!)      
        </div> 
      </div>
      </div>
      <div class="container col-lg-3" id="show-sub">
        <!-- this where to put the output of the API -->
        <h3 style="text-align: center;"> Order Summary </h3> <br>
        <?php


$sample_api = file_get_contents('http://localhost/Exam101/api.php'); 

foreach (json_decode($sample_api, true) as $value) { 
	echo '<tr>
  <label> Full Name: &nbsp; &nbsp; </label> <td>'.$value['Full_Name'].'</td> <br>
  <label> Bread: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label> <td>'.$value['Bread'].'</td> <br>
  <label> Sauce: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label> <td>'.$value['Sauce'].'</td> <br>
  <label> Sandwich:  &nbsp;&nbsp; &nbsp; </label> <td>'.$value['Sandwich'].'</td> <br>
  <label> Chese: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label> <td>'.$value['Chese'].'</td> <br>
  <label> Veggies: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label> <td>'.$value['Veggies'].'</td> <br>
  </tr>'; 
}
?>
      </div>
    </form>
</body>
</html>