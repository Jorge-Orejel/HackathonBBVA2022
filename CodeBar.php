<html>
  <head />
  <body>
        <h1> Barcode Reader</h1>
        <form action="readbarcode.php" method="post" enctype="multipart/form-data">
            Select barcode image:
            <input type="file" name="barcodefile" id="barcodefile" accept="image/*" /><br/>
            <type="submit" value="Read Barcode" name="submit" />
    </form>
   </body>
</html>