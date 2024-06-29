<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach</title>
</head>
<body>
    <h1>Xin chao cac ban</h1>
<table border="1">
    <thead>
     <tr>
         <th>ID<th>
         <th>Name<th>
         <th>NamSinh<th>
     </tr>
    </thead>
    <tbody>
        <?php foreach ($listProduct as $value): ?>
        <tr>
            <td><?= $value['id']?></td>
            <td><?= $value['name']?></td>
            <td><?= $value['namsinh']?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
