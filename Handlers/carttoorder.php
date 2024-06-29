<?php
session_start();
require_once "dbconn.php";

$userid = $_GET['key'];

$sql = "
START TRANSACTION;

INSERT INTO Orders (Ord_product_id, Ord_user_id, Ord_Total, Ord_state)
SELECT Ord_product_id, Ord_user_id, Ord_qty, 'Pending'
FROM Cart
WHERE Ord_user_id = '$userid';

DELETE FROM Cart
WHERE Ord_user_id = '$userid';

COMMIT;
";

if (mysqli_multi_query($conn, $sql)) {
    do {
        /* store first result set */
        if ($result = mysqli_store_result($conn)) {
            mysqli_free_result($result);
        }
        /* print divider */
        if (mysqli_more_results($conn)) {
            // Proceed to the next result
        }
    } while (mysqli_next_result($conn));
        header("Location:../order.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
