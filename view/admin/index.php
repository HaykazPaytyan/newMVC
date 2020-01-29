<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/main.css">
    <link rel="stylesheet" type="text/css" href="/public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/public/css/admin.css">
    <link rel="stylesheet" type="text/css" href="/public/css/media.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <aside class="aside">
        <div class="root">
            <h3>Welcome <?php print($_SESSION['user']); ?></h3>
        </div>
        <form action="" method="POST">
            <button type="submit" name="sign_out" id="sign_out_btn">Sign Out</button>
        </form>
    </aside>
    <main class="content">
        <section class="tabled-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="slogan">
                            <h3>Lis of images</h3>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($table as $key => $value) { ?>
                            <table>
                                <tr>
                                    <td>
                                        <?php print($value['img_id']); ?>
                                    </td>
                                    <td>
                                        <img src="/public/img/<?php print($value['img_name']);?>" class="img-icon">
                                    </td>
                                    <td>
                                        <span><?php print($value['img_name']);?></span>
                                    </td>
                                    <td colspan="2">
                                        <button id="modal_update">
                                            <i class="material-icons">update</i>
                                        </button>
                                        <a href="/admin/delete/<?php print($value['img_id']); ?>" title="delete">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </td>

                                </tr>
                            </table>
                            <?php  }?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form enctype="multipart/form-data" action="/admin/add" method="POST" class="upload_form">
                            <div class="input-wrapper">
                                <input name="file" type="file" />
                            </div>
                            <div class="input-wrapper">
                                <button type="submit" id="page_btn" name="upload">Add new Image</button>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </section>
    </main>
    <div id="modal">
        <span id="close">X</span>
        <div class="container centered">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php foreach ($table as $key => $value) { ?>
                        <form action="/admin/update" class="modal-form" method="POST" enctype="multipart/form-data">
                            <div class="input-wrapper">
                                <input type="hidden" name="id" value="<?php print($value['img_id']); ?>">
                            </div>
                            <div class="input-wrapper">
                                <input type="file" name="update_file">
                            </div>
                            <div class="input-wrapper">
                                <button type="submit" id="page_btn" name="update">Edit Image</button>
                            </div>
                        </form>
                        <?php }?>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="/public/js/admin-modal.js"></script>

</body>

</html>