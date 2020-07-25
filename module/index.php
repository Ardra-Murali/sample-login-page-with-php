<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Login</title>
    <meta charset="UTF=8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
  </head>

  <body>
    <div class="login">
      <h1>Login</h1>
      <form action="auth.php" method="POST">
        <input
          type="text"
          name="user"
          placeholder="Username"
          required="required"
        />
        <input
          type="password"
          name="pass"
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
