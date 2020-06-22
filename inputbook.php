<?php
require_once ('dbhelper.php');

$bookname = $author = $price = $nsx = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['bookname'])) {
		$bookname = $_POST['bookname'];
	}

	if (isset($_POST['author'])) {
		$author = $_POST['author'];
	}
	
	if (isset($_POST['price'])) {
		$author = $_POST['price'];
	}
	if (isset($_POST['nsx'])) {
		$nsx = $_POST['nsx'];
	}
	
	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}

	$bookname = str_replace('\'', '\\\'', $bookname);
	$author      = str_replace('\'', '\\\'', $author);
	$price  = str_replace('\'', '\\\'', $price);
	$s_id       = str_replace('\'', '\\\'', $s_id);

	if ($s_id != '') {
		//update
		$sql = "update tbl_book set bookname = '$bookname', price = '$price', author = '$author' where id = " .$s_id;
	} else {
		//insert
		$sql = "insert into tbl_book(bookname, author, price, nsx) value ('$bookname', '$author', '$price', '$nsx')";
	}

	// echo $sql;

	execute($sql);

	header('Location: booklist.php');
	die();
}

$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from tbl_book where id = '.$id;
	$bookList = executeResult($sql);
	if ($bookList != null && count($bookList) > 0) {
		$book        = $bookList[0];
		$bookname = $book['bookname'];
		$author      = $book['author'];
		$price  = $book['price'];
		$nsx  = $book['nsx'];
	} else {
		$id = '';
	}
}
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
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
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Add Book</h2>
            </div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                        <label for="address">Book Name:</label>
                        <input type="text" class="form-control" id="address" name="bookname">
                    </div>
                    <div class="form-group">
                        <label for="address">Author:</label>
                        <input type="text" class="form-control" id="ad" name="author">
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="age" name="price">
                    </div>
                    <div class="form-group">
                        <label for="address">NSX:</label>
                        <input type="text" class="form-control" id="add" name="nsx">
                    </div>
                    <button class=" btn btn-success">Add</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>