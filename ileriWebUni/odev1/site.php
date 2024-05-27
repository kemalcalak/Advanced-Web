<?php
$lang = $_COOKIE['lang'] ?? 'en';
$text = [
    'en' => [
        'title' => 'Circuit Analysis',
        'email' => 'E-Mail',
        'keep_signed_in' => 'Keep Me Signed in',
        'password' => 'Password',
        'forget_password' => 'Forget Password',
        'login' => 'Log in',
        'signup' => 'Sign Up',
        'quick_easy' => "It's Quick And Easy",
        'email_address' => 'E-Mail Address',
        'job' => 'Job',
        'software_engineering' => 'Software Engineering',
        'civil_engineering' => 'Civil Engineering',
        'confirm_password' => 'Confirm Password',
        'signup_button' => 'Sign Up',
        'welcome' => 'Welcome, ',
        'logout' => 'Log out'
    ],
    'tr' => [
        'title' => 'Devre Analizi',
        'email' => 'E-Posta',
        'keep_signed_in' => 'Beni Hatırla',
        'password' => 'Şifre',
        'forget_password' => 'Şifremi Unuttum',
        'login' => 'Giriş Yap',
        'signup' => 'Kayıt Ol',
        'quick_easy' => 'Hızlı ve Kolay',
        'email_address' => 'E-Posta Adresi',
        'job' => 'Meslek',
        'software_engineering' => 'Yazılım Mühendisliği',
        'civil_engineering' => 'İnşaat Mühendisliği',
        'confirm_password' => 'Şifreyi Onayla',
        'signup_button' => 'Kayıt Ol',
        'welcome' => 'Hoşgeldiniz, ',
        'logout' => 'Çıkış Yap'
    ]
];
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title><?= $text[$lang]['title'] ?></title>
</head>

<body>
    <div class="home">
        <div class="header">
            <div class="container">
                <div class="homeLeft">
                    <h2>
                        <a href="#" id="title1"><?= $text[$lang]['title'] ?></a>
                    </h2>
                    <a href="http://localhost/Advanced-Web/ileriWebUni/odev1/?lang=tr" id="title1">English</a>
                    <a href="http://localhost/Advanced-Web/ileriWebUni/odev1/?lang=tr" id="title1">Türkçe</a>
                </div>
                <div class="homeRight">
                    <?php
                    if ($login == 0) {
                        echo '<form method="POST" action="http://localhost/Advanced-Web/ileriWebUni/odev1/?islem=login">
                                <div class="subForm">
                                    <div class="form-group">
                                        <label>' . $text[$lang]['email'] . '</label>
                                        <input type="text" name="email" />
                                        <input type="checkbox" name="checkbox"/>
                                        <label>' . $text[$lang]['keep_signed_in'] . '</label>
                                    </div>
                                    <div class="form-group">
                                        <label>' . $text[$lang]['password'] . '</label>
                                        <input type="password" name="password" />
                                        <a href="#">' . $text[$lang]['forget_password'] . '</a>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="' . $text[$lang]['login'] . '" id="btn2" />
                                    </div>
                                </div>
                            </form>';
                    } else {
                        echo '<div class="logout-container">';
                        echo '<h3 style="color: white;">' . $text[$lang]['welcome'] . $name . '</h3>';
                        echo '<a href="http://localhost/Advanced-Web/ileriWebUni/odev1/?islem=logout" id="btn3">' . $text[$lang]['logout'] . '</a>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="homeLeft">asöjdkjasdöjksajdlkasjdlds</div>
                <div class="homeRight">
                    <form action="">
                        <div class="form">
                            <h3><?= $text[$lang]['signup'] ?></h3>
                            <h4><?= $text[$lang]['quick_easy'] ?></h4>
                            <div class="form-group2">
                                <input class="forminp" type="email" placeholder="<?= $text[$lang]['email_address'] ?>" id="width100" />
                            </div>
                            <div class="form-group2">
                                <select class="forminp" name="job" id="width100">
                                    <option><?= $text[$lang]['job'] ?></option>
                                    <option value="software"><?= $text[$lang]['software_engineering'] ?></option>
                                    <option value="civil"><?= $text[$lang]['civil_engineering'] ?></option>
                                </select>
                            </div>
                            <div class="form-group2">
                                <input class="forminp" type="password" placeholder="<?= $text[$lang]['password'] ?>" id="width100" />
                            </div>
                            <div class="form-group2">
                                <input class="forminp" type="password" placeholder="<?= $text[$lang]['confirm_password'] ?>" id="width100" />
                            </div>
                            <div class="form-group2">
                                <input type="submit" value="<?= $text[$lang]['signup_button'] ?>" id="btn" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
