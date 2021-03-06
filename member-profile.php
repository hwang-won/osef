<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <section>
        <!-- profile -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
                        rel="stylesheet">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="content" class="content content-full-width">
                                    <!-- begin profile -->
                                    <div class="profile">
                                        <div class="profile-header">
                                            <!-- BEGIN profile-header-cover -->
                                            <div class="profile-header-cover"></div>
                                            <!-- END profile-header-cover -->
                                            <!-- BEGIN profile-header-content -->
                                            <div class="profile-header-content">
                                                <!-- BEGIN profile-header-img -->
                                                <div class="profile-header-img">
                                                    <img src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png"
                                                        alt="">
                                                </div>
                                                <!-- END profile-header-img -->
                                                <!-- BEGIN profile-header-info -->
                                                <div class="profile-header-info">
                                                    <?php
                                                        $user_id = $_SESSION['id'];
                                                        echo "<h1 class='m-t-10 m-b-5'>$user_id</h1>";
                                                    ?>
                                                </div>
                                                <!-- END profile-header-info -->
                                            </div>
                                            <!-- END profile-header-content -->

                                            <!-- profile-header-tab -->
                                            <!-- BEGIN profile-header-tab -->
                                            <ul class="profile-header-tab nav nav-tabs">
                                                <li class="nav-item"><a href="member-mypage.php" target="__blank"
                                                        class="nav-link_ active show">?????? ??????</a></li>
                                                <li class="nav-item"><a href="member-modify-form.php" target="__blank"
                                                        class="nav-link_ active show">???????????? ??????</a>
                                                </li>
                                                <li class="nav-item"><a href="member-product-info.php" class="nav-link_ active show">????????? ?????????
                                                        ??????</a></li>
                                                <li class="nav-item"><a href="member-product-lended.php" target="__blank"
                                                        class="nav-link_ active show">?????? ?????? ?????????</a></li>
                                                <li class="nav-item"><a href="member-docs-info.php" target="__blank"
                                                        class="nav-link_ active show">????????? ????????????</a></li>
                                                <li class="nav-item"><a href="member-docs-lended.php" target="__blank"
                                                        class="nav-link_ active show">????????? ????????????</a></li>
                                                <li class="nav-item">
                                                    <form id="delete-form" action="member-delete.php" method="post">
                                                        <button type="submit" name="delete-btn"
                                                            class="member-delete-btn" onclick="confirm_delete()">??????
                                                            ??????</button>
                                                    </form>
                                                </li>

                                                <script type="text/javascript">
                                                    function confirm_delete() {
                                                        if (window.confirm("????????? ?????????????????????????")) {
                                                            document.getElementById('delete-form').submit();
                                                        } else {
                                                            window.alert("?????? ????????? ?????????????????????.");
                                                            window.location.href = "index.php";
                                                        }
                                                    }
                                                </script>
                                            </ul>
                                            <!-- END profile-header-tab -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end profile -->
</body>

</html>