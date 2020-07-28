<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Sign Up</title>
    <meta charset="UTF=8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    </head>

    <body>
    <div class="login">
      <h1>SIGN UP</h1>
      <form action="signupauth.php" method="POST">
        <input
          type="text"
          name="email"
          placeholder="Email ID"
          required="required"
        />
        <input
          type="text"
          name="username"
          placeholder="Username"
          required="required"
        />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required="required"
        />
        <button type="submit" class="btn btn-primary btn-block btn-large">
          Submit
        </button>
      </form>
    </div>
  </body>
</html>