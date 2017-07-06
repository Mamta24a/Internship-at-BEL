<!DOCTYPE HTML>
<html>


        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery.tree.js"></script>
        <script>
            $(document).ready(function() {
                $('.tree').tree_structure({
                    'add_option': false,
                    'edit_option': false,
                    'delete_option': false,
                    'confirm_before_delete': false,
                    'animate_option': false,
                    'fullwidth_option': false,
                    'align_option': 'center',
                    'draggable_option': false
                });
            });
        </script>
    </head>
    <body align="center">

            <br><br><br>
            <h1 style="color: lightseagreen; font-weight:900; font-size:50px;  text-shadow: 4px 4px 5px gray;" ; align="center">DEPARTMENT STRUCTURE</h1><br><hr style="color: lightseagreen"><br><br><br>
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