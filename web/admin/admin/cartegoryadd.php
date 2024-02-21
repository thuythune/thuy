<?php 

    include "header.php";
    include "slider.php";
    include "class/cartegory_class.php";

?>

<?php
    $cartegory = new cartegory;
    if ($_SERVER['REQUEST_METHOD']==='GET'){
        $cartegory_name = $_GET['cartegory_name'];
        $insert_cartegory = $cartegory ->insert_cartegory($cartegory_name);
    }
?>

<div class="acmin-right">
            
            <div class="acmin-right-category">
                <h1>Thêm Danh Mục</h1>

                <form action="" method="POST">
                    <input name = "cartegory_name" type="text" placeholder="Nhập tên danh mục">
                    <button type="submit">Thêm</button>
                </form>
            </div>

        </div>

    </section>
    
</body>
</html>

