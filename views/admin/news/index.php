<?php
    require_once APP_ROOT . '/config/Config.php';
    include APP_ROOT . '/views/partials/header.php';
?>

<body>
    <?php include APP_ROOT . '/views/partials/navbar.php'; ?>
    <div class="">
        <h1>Quản lý bài viết</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($news as $new){ ?>
                <tr>
                    <th scope="row"><?php echo $new['id'] ?></th>
                    <td><?php echo $new['title'] ?></td>
                    <td><?php echo $new['body'] ?></td>
                    <td><?php echo $new['image'] ?></td>
                    <td>
                        <div class="action-news d-flex">
                            <form action="">
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                            <a href="" class="btn btn-warning ms-2">Sửa</a>
                        </div>
                    </td>
                </tr>  
                <?php }; ?>          
            </tbody>
        </table>
    </div>
</body>