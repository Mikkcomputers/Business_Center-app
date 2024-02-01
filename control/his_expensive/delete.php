<?php
include "../../saver/server.php";

if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $sql = "DELETE FROM expensive WHERE id = $id";
    $res = $conn->query($sql);
    if ($res) {
        header("location: ./");
    }
}
?>