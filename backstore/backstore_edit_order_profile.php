<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--link to stylesheet -->
    <link rel="stylesheet" href="../resources/css/style.css"> 

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet"> 
    <title>Backstore</title>
  </head>
  <style>
    /* Custom CSS */
    body {
      background: #EBE2DE none repeat scroll 0 0;
      position: relative;
      margin: 0;
      padding: 0;
      min-height: 100%;
      height: auto;
    }

    .custom-page-container {
      margin-top: 120px;
      margin-left: 20px;
      margin-right: 0px;
      margin-bottom: 100px;
      padding-left: 0px;
      padding-right: 0px;
    }
    
    .order-upper-text {
        font-family: Audiowide;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 31px;
        display: flex;
        align-items: center;
        text-align: center;
        color: #734234;
      } 
      
      .order-lower-text {
        font-family: Audiowide;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 31px;
        align-items: center;
        text-align: center;
        color: #734234;
      }
      
      .input-box {
          background: #F5F5F6;
          border-radius: 7px;
      }
      
      .order-title {
          font-family: Audiowide;
          font-style: normal;
          font-weight: normal;
          font-size: 36px;
          line-height: 46px;
          display: flex;
          align-items: center;
          text-align: center;
          color: #734234;
      }
      
      .check-box-size {
          width: 35px;
          height: 35px;
      }

  </style>
  <body>
    <?php include "../includes/header.html"; ?>

    <div class="custom-page-container">
        <label class="order-upper-text" for="customer-name">Customer Name:</label>
        <input class="input-box" type="text" id="customer-name" name="customer-name">
        <button class="btn btn-info backstore-font">Edit</button><br><br>   
        
        <label class="order-upper-text" for="order-number">Order Number:</label>
        <input class="input-box" type="text" id="order-number" name="order-number">
        <button class="btn btn-info backstore-font">Edit</button><br><br>
        
        <label class="order-upper-text" for="order-date">Order Date:</label>
        <input class="input-box" type="date" id="order-date" name="order-date">
        <button class="btn btn-info backstore-font">Edit</button><br><br>
        
        <label class="order-upper-text" for="delivery-date">Delivery Date:</label>
        <input class="input-box" type="date" id="delivery-date" name="delivery-date">
        <button class="btn btn-info backstore-font">Edit</button><br><br>
        
        <label class="order-upper-text" for="delivery-address">Delivery Address:</label>
        <input class="input-box" type="text" id="delivery-address" name="delivery-address">
        <button class="btn btn-info backstore-font">Edit</button><br><br>
        
        <label class="order-upper-text" for="shipping-speed">Shipping Speed:</label>
        <select class="input-box" name="shipping-speed" id="shipping-speed">
          <option value="free-delivery">Free Delivery</option>
          <option value="express-delivery">Express Delivery</option>
          <option value="same-day-delivery">Same-day Delivery</option>
        </select>
        <button class="btn btn-info backstore-font">Edit</button><br><br><br><br>
        
        <p class = order-title>Products Ordered</p><br>
        
        <table style="width:100%">
          <tr>
            <td><INPUT TYPE="Checkbox" Name="Product" ID="P1" Value="Bagel" class="check-box-size"></td>
            <td><img class="img-responsive" src="resources\img\bakery-bagel2.jpg" alt="Bagel"></td>
            <td class="order-lower-text">Bagel</td>
            <td class="order-lower-text">133589</td>
            <td class="order-lower-text">3.99$</td>
            <td><select class="input-box" name="bagel-quantity" id="bagel-quantity">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select></td>
          </tr>
          <tr>
            <td><INPUT TYPE="Checkbox" Name="Product" ID="P2" Value="Donut" class="check-box-size"></td>
            <td><img class="img-responsive" src="resources\img\bakery-donut2.jpg" alt="Donut"></td>
            <td class="order-lower-text">Donut</td>
            <td class="order-lower-text">133590</td>
            <td class="order-lower-text">4.99$</td>
            <td><select class="input-box" name="donut-quantity" id="donut-quantity">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select></td>  
          </tr>
          <tr>
            <td><INPUT TYPE="Checkbox" Name="Product" ID="P3" Value="Mars" class="check-box-size"></td>
            <td><img class="img-responsive" src="resources\img\mars_bar.jpg" alt="Mars Bar"></td>
            <td class="order-lower-text">Mars</td>
            <td class="order-lower-text">133593</td>
            <td class="order-lower-text">5.99$</td>
            <td><select class="input-box" name="mars-quantity" id="mars-quantity">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select></td>  
          </tr>
        </table><br><br>
        <label class="order-lower-text" for="total-order-amount">Total order amount: </label>
        <input class="input-box" type="text" id="total-order-amount" name="total-order-amount">
        <button class="btn btn-info backstore-font">Save</button>
    </div>
    <?php include "../includes/footer.html"; ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
      /* Custom JS */
    </script>
  </body>
</html>