<!DOCTYPE HTML>
<html>
    <head runat="server">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>jQuery Tree</title>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Cabin:400,700,600"/>
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery.tree.js"></script>
        <script>
            $(document).ready(function() {
                $('.tree').tree_structure({
                    'add_option': true,
                    'edit_option': true,
                    'delete_option': true,
                    'confirm_before_delete': true,
                    'animate_option': false,
                    'fullwidth_option': false,
                    'align_option': 'center',
                    'draggable_option': true
                });
            });
        </script>
    </head>
    <body>
	<br><br><br>
            <h1 style="color: lightseagreen; font-weight:900; font-size:50px;  text-shadow: 4px 4px 5px gray;" ; align="center">DEPARTMENT STRUCTURE</h1><br><hr style="color: lightseagreen; height:10px"><br><br><br>
       
	
        <?php
        include_once 'db.php';
        $store_all_id = array();
        $id_result = mysqli_query($con, "SELECT * FROM tree");
        while ($all_id = mysqli_fetch_array($id_result)) {
            array_push($store_all_id, $all_id['parent_id']);
        }
        echo "<div class='overflow'><div>";
        in_parent(0, $store_all_id, $con);
        echo "</div></div>";

        function in_parent($in_parent, $store_all_id, $con) {
            if (in_array($in_parent, $store_all_id)) {
                $result = mysqli_query($con, "SELECT * FROM tree where parent_id = $in_parent");
                echo $in_parent == 0 ? "<ul class='tree'>" : "<ul>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<li";
                    if ($row['hide'])
                        echo " class='thide'";
                    echo "><div id=" . $row['id'] . "><span class='first_name'>" . $row['first_name'] . "</span></div>";
                    in_parent($row['id'], $store_all_id, $con);
                    echo "</li>";
                }
                echo "</ul>";
            }
        }

        mysqli_close($con);
        ?>
    </body>
</html>