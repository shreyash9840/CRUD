<?php
require_once "../config.php";
if (isset($_POST["search_keyword"]) && isset($_POST["search_field"])){
    $search_keyword = $_POST["search_keyword"];
    $search_field = $_POST[search_field];
    if ($search_field=="first_name"){
    $sql= "SELECT FROM persons WHERE first_name LIKE '%" . $search_keyword
$result = mysqli_query($conn, $sql);
} else if ($search_field = "last_name") {
        $sql = "SELECT * FROM persons where last_name LIKE '%" . $search_keyword . "%'";
        $result = mysqli_query($conn,$sql);
    }
    else if ($search_field = "email") {
        $sql = "SELECT * FROM persons where email LIKE '%" . $search_keyword . "%'";
        $result = mysqli_query($conn, $sql);
    }
}
?>
}

</html>
<?php //include "../footer.php"?>


<body>
<a href="create.php"Create</a>
<form action="search.php" method="post">
    <input type="text" name="search_keyword" required>
    <select name="search_field" required>
        <option value="first_name" selected>First Name</option>
        <option value="last_name">Last Name</option>
        <option value="email">Email</option>
    </select>
    <input type="submit" value="Search">
</form>
<table border="1">
    <tr>
    </body>

<?php
if (isset($result)) {
    if (mysqli_num_rows($result) == 0) {
        echo "<tr>";
        echo "<td colspan='7'>No data found!!!</td>";
        echo "</tr>";
    }
}

?>
<?php if (isset($result)) {?>
<?php foreach ($result as $row) { ?>
    <tr>
        </td><?php echo $row["10"] ?></td>

</tr>

}}
