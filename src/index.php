<?php declare(strict_types=1);
include 'vendor/autoload.php';
include 'database.php';

$db = new Example\Database();
$messages = $db->getMessages();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <div class="container-md">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Message</th>
          <th scope="col">Created</th>
          <th scope="col">Updated</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($messages as $message) { ?>
          <tr>
            <td>
              <?php echo $message['title']; ?>
            </td>
            <td>
              <?php echo $message['message']; ?>
            </td>
            <td>
              <?php echo $message['created']; ?>
            </td>
            <td>
              <?php echo $message['updated']; ?>
            </td>
          <?php } ?>
      </tbody>
    </table>
  </div>
  <div class="container-md">
    <form method="post" action="create.php">
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
</body>

</html>
<?php $db->close() ?>