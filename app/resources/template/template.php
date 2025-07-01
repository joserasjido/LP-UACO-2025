<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require_once APP_DIR_TEMPLATE . 'includes/head.php';

        if(isset($this->scripts) && is_array($this->scripts)){
            foreach($this->scripts as $script){
                echo '<script defer src="' . APP_URL . $script . '"></script>';
            }
        }
    ?>
</head>
<body data-bs-theme="light" class="bg-body-secondary bg-gradient">
    <header>
        <?php
            require_once APP_DIR_TEMPLATE . "includes/menu.php";
        ?>
    </header>
    <main>
        <div class="bg-body bg-gradient text-center m-3 py-3 px-1 px-lg-3 px-xxl-5 border rounded">
        <?php
            require_once APP_DIR_VIEWS . $this->view;
        ?>
        </div>
    </main>
    <footer>
        <?php
            require_once APP_DIR_TEMPLATE . "includes/footer.php";
        ?>
    </footer>
</body>
</html>