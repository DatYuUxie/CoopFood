<?php
if (isset($_SESSION["email"]) && $_SESSION["role"] == "customer") {
  echo '<script type = "text/javascript">
  window.location.href = "http://localhost/web222/"</script>';
}
?>
<?php 
    // if(isset($data["id"])){
    //     $id = $data["id"];
    //     $sql = "DELETE FROM category WHERE category_id =$id";
    //     if(($data["categoryModal"]->con)->query($sql)){
    //         echo "<script type='text/javascript'>alert('xoa category thanh cong');
    //         window.location.href = 'http://localhost/web222/Category/index';
    //         </script>";
    //     }
    //     else{
    //         echo "<script type='text/javascript'>alert('xoa category that bai');
    //         window.location.href = 'http://localhost/web222/Category/index';
    //         </script>";
    //     }
    // }
    if (isset($data["pid"])){
        $pid = $data["pid"];
        $cid = $data["cid"];
        $sql = "DELETE FROM _comment where product_id = $pid and customer_id = $cid";
        if (($data["commentModal"]->con)->query($sql)){
            echo "<script type='text/javascript'>alert('xoa comment thanh cong');
                  window.location.href = 'http://localhost/web222/Comment/index';
                </script>";
        }
        else{
            echo "<script type='text/javascript'>alert('xoa comment that bai');
            window.location.href = 'http://localhost/web222/Comment/index';
            </script>";
        }
    }
?>