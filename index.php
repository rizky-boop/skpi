<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cek Kata</title>
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
  <body>
    <form class="" action="cek.php" method="post">
      <table class="table table-bordered">
        <tr>
          <td>Kata</td>
          <td> <textarea type="text" class="form-control" name="kata" rows="8" cols="80" required></textarea> </td>
        </tr>
        <tr>
          <td>Kalimat</td>
          <td> <textarea class="form-control" name="kalimat"  rows="8" cols="80" required></textarea> </td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" class="btn btn-primary" name="" value="Cek Kalimat Abstrak"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
