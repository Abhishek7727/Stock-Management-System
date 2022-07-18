
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signup</title>
    <link rel="stylesheet" href="entry.css">
</head>
<body>
   <hr>
    <form action="billing.php" method="post">
        <table>
            <tr>
       
        <td class="heading">description</td>
        <td class="heading">quantity</td>
        <td class="heading">price</td>
        
    </tr>
       <tr>
           <td><input type="text" name="desc1">
           </td>
           <td><input type="number" name="qty1"></td>
           <td><input type="number" name="price1"></td>
       </tr>
       <tr>
           <td><input type="text" name="desc2">
           </td>
           <td><input type="number" name="qty2"></td>
           <td><input type="number" name="price2"></td>
       </tr>
       <tr>
           <td><input type="text" name="desc3">
           </td>
           <td><input type="number" name="qty3"></td>
           <td><input type="number" name="price3"></td>
       </tr>
        </table>
        <label> Name </label>
        <input type="text" name="name">
        <label>Address</label>
        <input type="text" name="add" placeholder="address">
        <label>Phone No</label>
        <input type="number" name="phone">
        <label> Gstin</label>
        <input type="text" name="gst">
        <button type="submit" name="submit">
            Get Bill
        </button>
    </form>


    
</body>
</html>