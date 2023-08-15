<!DOCTYPE html>
<html>
<head>
  <title>Personalized Notepad Form</title>
  <style>
    /* Add your CSS styling here */
    .container {
      display: flex;
    }
    .form-column, .notepad-column {
      flex: 1;
      padding: 20px;
    }
    .notepad-box {
      border: 1px solid #ccc;
      padding: 20px;
      position: relative;
    }
    .top-image, .bottom-image {
      position: absolute;
    }
    .top-image {
      top: 0;
      left: 50%;
      transform: translateX(-50%);
    }
    .bottom-image {
      bottom: 0;
      left: 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-column">
      <h2>Get Your Personalized Notepad</h2>
      <form action="submit-form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br><br>
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea><br><br>
        <input type="submit" value="Submit">
      </form>
    </div>
    <div class="notepad-column">
      <div class="notepad-box">
        <img class="top-image" src="top_image.png" alt="Top Image">
        <img class="bottom-image" src="bottom_image.png" alt="Bottom Image">
        <div id="dynamic-name" style="position: absolute; bottom: 20px; right: 20px;"></div>
      </div>
    </div>
  </div>
  <script>
    const nameInput = document.getElementById('name');
    const dynamicName = document.getElementById('dynamic-name');
    
    nameInput.addEventListener('input', (event) => {
      dynamicName.innerText = event.target.value;
    });
  </script>
</body>
</html>
