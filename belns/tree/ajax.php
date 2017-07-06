<?php

include_once "db.php";
//$data = json_decode(stripslashes($_REQUEST['data']));
if ($_REQUEST['action'] == 'edit') {
    $showhideval = isset($_REQUEST['showhideval']) ? 1 : 0;
    mysqli_query($con, "UPDATE tree SET first_name='" . $_REQUEST['first_name'] . "', hide='" . $showhideval . "' WHERE id='" . $_REQUEST['id'] . "'");
} elseif ($_REQUEST['action'] == 'delete') {
    if($_REQUEST['id'] != 1) {
        mysqli_query($con, "DELETE FROM tree WHERE id in(" . $_REQUEST['id'] . ")");
    }
} elseif ($_REQUEST['action'] == 'add') {
    $showhideval = isset($_REQUEST['showhideval']) ? 1 : 0;
    mysqli_query($con, "INSERT INTO tree (first_name, parent_id, hide) VALUES ('" . $_REQUEST['first_name'] . "', " . $_REQUEST['parentid'] . ", " . $showhideval . ")");
    echo mysqli_insert_id($con);
} elseif ($_REQUEST['action'] == 'drag') {;
    mysqli_query($con, "UPDATE tree SET parent_id='" . $_REQUEST['parentid'] . "' WHERE id='" . $_REQUEST['id'] . "'");
} elseif ($_REQUEST['action'] == 'addform') {
    echo <<<EOL
    <form class="add_data" method="post" action="">
        <img class="close" src="images/close.png" />
        <input type="text" class="first_name" name="first_name" placeholder="first name">
        <input type="checkbox" name="showhideval" id="hide" />
        <label for="hide">Hide Child Nodes</label>
        <input type="submit" class="submit" name="submit" value="Submit">
    </form>
EOL;
} elseif ($_REQUEST['action'] == 'editform') {
    $edit_ele_id = $_REQUEST['edit_ele_id'];
    $geteledetail = mysqli_query($con, "SELECT * FROM tree WHERE id = $edit_ele_id");
    while ($row = mysqli_fetch_array($geteledetail)) {
        $id = $row['id'];
        $first_name = $row['first_name'];
        $parent_id = $row['parent_id'];
        $hide = $row['hide'];
        $checked = $hide == 1 ? "checked" : ""; 
    }
    echo <<<EOL
    <form class="edit_data" method="post" action="">
        <img class="close" src="images/close.png" />
        <input type="text" class="first_name" name="first_name" value="{$first_name}" placeholder="first name">
        <input type="checkbox" {$checked} value="{$hide}" name="showhideval" id="hide" />
        <label for="hide">Hide Child Nodes</label>
        <input type="submit" class="edit" name="submit" value="submit">    
    </form>
EOL;
}
mysqli_close($con);
?>