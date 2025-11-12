<?php

?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    body {
      font-family: 'Poppins', Arial, sans-serif;
      background: linear-gradient(120deg, #4cc9f0 0%, #4361ee 100%);
      min-height: 100vh;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .card {
      background: white;
      padding: 2rem 2.5rem;
      border-radius: 18px;
      max-width: 400px;
      width: 100%;
      margin: 2rem auto;
      box-shadow: 0 8px 32px rgba(67,97,238,0.12);
      display: flex;
      flex-direction: column;
      gap: 1rem;
      animation: fadeIn 0.7s;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    h2 {
      text-align: center;
      color: #4361ee;
      font-weight: 600;
      margin-bottom: 1rem;
    }
    label {
      font-weight: 500;
      color: #222;
      margin-bottom: 0.2rem;
      display: block;
    }
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 0.7rem 1rem;
      margin: 0.5rem 0 1rem 0;
      border: 1px solid #e0e0e0;
      border-radius: 10px;
      background: #f6f6f6;
      font-size: 1rem;
      transition: border 0.2s;
    }
    input[type="text"]:focus, input[type="password"]:focus {
      border-color: #4cc9f0;
      outline: none;
      background: #eaf6fb;
    }
    button, .btn {
      background: linear-gradient(90deg, #4361ee 0%, #4cc9f0 100%);
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      border-radius: 10px;
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      box-shadow: 0 2px 8px rgba(67,97,238,0.08);
      transition: transform 0.2s, background 0.2s;
      margin-top: 0.5rem;
      text-decoration: none;
      display: inline-block;
    }
    button:hover, .btn:hover {
      background: linear-gradient(90deg, #4895ef 0%, #4cc9f0 100%);
      transform: scale(1.05);
    }
    .error {
      color: #b00020;
      background: #ffe5e5;
      border-radius: 8px;
      padding: 0.7rem 1rem;
      margin-bottom: 1rem;
      text-align: center;
      font-size: 0.98rem;
    }
    @media (max-width: 500px) {
      .card {
        padding: 1.2rem 0.5rem;
      }
      h2 {
        font-size: 1.3rem;
      }
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Masuk</h2>
    <?php if (!empty($_GET['error'])): ?>
      <div class="error"><?= htmlspecialchars($_GET['error']) ?></div>
    <?php endif; ?>
    <form action="authenticate.php" method="post" autocomplete="off">
      <label for="username">Username</label>
      <input id="username" name="username" type="text" required autofocus>

      <label for="password">Password</label>
      <input id="password" name="password" type="password" required>

      <button type="submit">Login</button>
      <br>
      <br>

       <!-- <button type="submit">Daftar</button> -->
        <a class="btn" href="register.php">Register</a>
    </form>
  </div>
</body>
</html>