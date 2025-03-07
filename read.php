<?php include realpath(__DIR__ . '/app/layout/header.php') ?>

<table>
  <thead>
    <tr>
      <th>Data</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Fetch the data from the database using the read method
    $read = $modelsFacade->read();
    
    // Loop through each record returned from the database
    foreach ($read as $data) { ?>
      <tr>
        <td><?= htmlspecialchars($data['Emaile']) ?></td>
        <td>
          <a href="update.php?id=<?= htmlspecialchars($data['id']) ?>">Update</a>
          <a href="delete.php?id=<?= htmlspecialchars($data['id']) ?>">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php include realpath(__DIR__ . '/app/layout/footer.php') ?>    