<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration Page</title>
</head>
<body>
  <form action="user_data.php" method="post" accept-charset="utf-8">
    <label for="Name">Name</label>
    <input type="name" name="name" placeholder="Name"/><br />
    <label for="Email">Email</label>
    <input type="email" name="email" placeholder="Email Address"/><br />
    <label for="Date of Birth">Date of Birth</label>
<input type="date" name="birthDate"/><br />
<label for="gender">Gender</label>
<input type="radio" name="gender" id="gender" value="Male"/>Male
<input type="radio" name="gender" id="gender" value="Female"/>Female <br />
<label for="country">Country</label>
<input type="text" name="country" placeholder="Country"> <br />
<input type="submit" value="Submit" />
  </form>
</body>
</html>