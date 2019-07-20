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
</head>

<body>
    <div class="container-form container shadow">
        <form method="post">
            <div class="row">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="tl">Tempat Lahir</label>
                    <select class="form-control" id="tl" name="place">
                        <option value="">...</option>
                        <?php while ($row = mysqli_fetch_assoc($getPlace)) : ?>
                            <Option value="<?= $row['id'] ?>"><?= $row['name'] ?></Option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="tl2">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tl2" name="date" autocomplete="off" placeholder="YYYY-MM-DD">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="hp">No. Telpon</label>
                    <input type="text" class="form-control" id="hp" autocomplete="off" name="hp">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" name="alamat"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select class="form-control">
                        <option>...</option>
                        <?php while ($row = mysqli_fetch_assoc($getSch)) : ?>
                            <option value="<?= $row['last_education']; ?>"><?= $row['last_education']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <?php while ($row = mysqli_fetch_assoc($getReligion)) : ?>
                        <label for="<?= $row['religion'] ?>"><input type="radio" value="<?= $row['religion'] ?>label id=" <?= $row['religion'] ?>"> <span class="badge rd"> <?= $row['religion'] ?></span></label>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="hobi">Hobi</label>
                    <?php while ($row = mysqli_fetch_assoc($getHobi)) : ?>
                        <label for="<?= $row['hobbies']; ?>"><input type="checkbox" value="<?= $row['hobbies']; ?>" id="<?= $row['hobbies']; ?>"> <span class="badge cb"> <?= $row['hobbies']; ?></span></label>
                    <?php endwhile; ?>
                </div>
            </div>

            <div class="row">
                <button type="submit" class="btn btn-primary mt-5 pl-3 pr-3">Submit</button>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>