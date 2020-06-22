<?php
require_once ('dbhelper.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="panel-body text-center pt-3">
            <h3>LIST BOOK</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th>NSX</th>
                        <th width="60px"></th>
                        <th width="60px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
if (isset($_GET['s']) && $_GET['s'] != '') {
	$sql = 'select * from tbl_book where bookname like "%'.$_GET['s'].'%"';
} else {
	$sql = 'select * from tbl_book';
}

$bookList = executeResult($sql);

$index = 1;
foreach ($bookList as $row) {
	echo '<tr>
			<td>'.($index++).'</td>
			<td>'.$row['bookname'].'</td>
			<td>'.$row['author'].'</td>
            <td>'.$row['price'].'</td>
            <td>'.$row['nsx'].'</td>
			<td><button class="btn btn-warning" onclick=\'window.open("inputbook.php?id='.$row['id'].'","_self")\'>Edit</button></td>
			<td><button class="btn btn-danger" onclick="deleteBook('.$row['id'].')">Delete</button></td>
		</tr>';
}
?>
                </tbody>
            </table>
            <button class="btn btn-success" onclick="window.open('inputbook.php', '_self')">Add Book</button>
        </div>
    </div>
    <script type="text/javascript">
    function deleteBook(id) {
        option = confirm('Do you want delete this book?')
        if (!option) {
            return;
        }

        console.log(id)
        $.post('delete_book.php', {
            'id': id
        }, function(data) {
            alert(data)
            location.reload()
        })
    }
    </script>
</body>

</html>