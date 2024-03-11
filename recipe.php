<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AUTHORS ADD YOUR RECIPE</title>
  <link rel="stylesheet" href="recipe.css">
</head>
<body>
<form action="author_data.php" method="post">
  <main>
    <section>
      <div id="authorInfo">
      </div>
    </section>

    <section>
      <h2>Type your Recipe</h2>
      <form id="authorForm" action="author_data.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name= "title" id="name" required>

        <label for="bio">Recipe:</label>
        <textarea id="bio" name= "content"required></textarea>

        <button type="submit " name="submit">Submit</button>
      </form>
    </section>
  </main>

  <script src="recipe.js"></script>
</body>
</html>
