<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Fruits</h1>

<form>
Calories less than...
  <input name='calories'/>
  <button>Filter by ID</button>
</form>

<ol>
<?php foreach($posts as $post) { ?>
  <ul>
    <a href="/show?id=<?= $post["id"] ?>"><?= htmlspecialchars($post["fruit_name"]) ?></a>
    <form class="delete-form" method="POST" action="/delete">
      <input type="hidden" name="id" value="<?= $post["id"] ?>" />
      <button>&times;</button>
    </form>
  </ul>
<?php } ?>
</ol>


<a href="/create">Create a fruit</a>


<?php require "views/components/footer.php" ?>
