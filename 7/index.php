<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<div class="container index">
    <form action="delete.php" method="post" id="delete_form">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <td>#</td>
                    <td>Nama Lengkap</td>
                    <td>Tanggal Lahir</td>
                    <td>No. Hp</td>
                    <td>Alamat</td>
                    <td>Pendidikan Terakhir</td>
                    <td>Agama</td>
                    <td>Hobi</td>
                    <td>Tempat Lahir</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($getData)) : ?>
                    <tr>
                        <td><input type="checkbox" name="checkbox[]" class="checkbox" value="<?= $row['id']; ?>" /></td>
                        <td><?= $row['full_name'] ?></td>
                        <td><?= $row['date'] ?></td>
                        <td><?= $row['phone_number'] ?></td>
                        <td><?= $row['address'] ?></td>
                        <td><span class="badge badge-warning"><?= $row['last_education'] ?></span></td>
                        <td><span class="badge badge-primary"><?= $row['religion'] ?></span></td>
                        <td><span class="badge badge-success"><?= $row['hobbies'] ?></span></td>
                        <td><span class="badge badge-primary"><?= $row['name'] ?></span></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
    </form>
    </table>

    <footer class="float-right">
        <a href="input.php" class="btn btn-primary">Add Data</a>
        <a href="edit.php" class="btn btn-success">Update</a>
        <button type="submit" name="delete" id="delete" class="btn btn-danger btn-delete">Delete</button>
    </footer>
</div>

<body>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>