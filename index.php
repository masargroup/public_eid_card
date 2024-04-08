<?php

require_once './config.php';

$images = $config['cards'];

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo $config['favicon']; ?>">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/font/bootstrap-icons.min.css">
    <title>تهنئة مسار بعيد الفطر</title>
</head>

<body>

    <div class="container-fluid">
        <div class="devcommittee">
            <img src="bootstrap/images/logos/devcommittee.svg" alt="">
        </div>
        <div class="row align-items-center">
            <div class="col-4 col-sm-4">
            </div>
            <div class="col-4 col-sm-4 text-center mt-3">
                <img src="bootstrap/images/logos/massar_logo_original.png" alt="" width="120">

            </div>
            <div class="col-4 col-sm-4 text-end">
            </div>
        </div>
        <br>
        <p class="text-center title"> عيد فطر مبارك</p>
        <p class="text-center title"> كل عام وأنتم بخير، أعادة الله علينا وعليكم بالصحة والسعادة</p>
        <p class="text-center description">اختر البطاقة التي تناسبك وقم بكتابة اسمك على التصميم!</p>
        <br>
        <form action="gen_image.php" id="cards_form" method="post" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <?php foreach ($images as $image) { ?>
                    <div class="col-auto">

                        <div class="card-div">
                            <input class="check-colour" type="radio" name="image_selected" id=""
                                value="<?php echo $image; ?>" required>
                            <img src="<?php echo $config['cards_dir'] . $image; ?>" alt="بطاقة تهنئة" class="border rounded"
                                width="210" height="240">
                        </div>
                        <br>
                        <br>
                    </div>
                <?php } ?>
            </div>
            <br>
            <div class="row text-center justify-content-center">
                <div class="col-3 col-sm-3 col-md-4 col-lg-4">

                </div>
                <div class="col-5 col-sm-5 col-md-3 col-lg-3">
                    <input type="text" name="member_name" id="member_name" placeholder="أكتب أسمك هنا"
                        class="form-control input-name" required autocomplete="off">
                    <br>
                    <!-- <button type="submit" class="btn btn-success btn-lg" id="generate_card">إنشاء البطاقة</button> -->
                </div>
                <div class="col-3 col-sm-3 col-md-4 col-lg-4">

                </div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-2 col-sm-2 col-md-4 col-lg-4">

                </div>
                <div class="col-8 col-sm-8 col-md-4 col-lg-4">
                    <button type="button" class="btn btn-light btn-lg button_card px-5 py-1 my-2 review-download-btn"
                        id="review">معاينة</button>
                    <button type="submit" class="btn btn-light btn-lg button_card px-5 py-1 review-download-btn"
                        id="download">تحميل</button>
                </div>
                <div class="col-2 col-sm-2 col-md-4 col-lg-4">

                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-md-4 col-lg-4">

                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div id="imageContainer">
                        <!-- Image will be loaded dynamically here -->
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">

                </div>
            </div>
        </form>
        <br>
        <div class="border-black border-top footer-dev mx-4">
            <div class="row mt-3">
                <div class="col-12 col-sm-8 col-md-6 col-lg-6 text-center">
                    <p class="footer-text">المسار الصحيح لتحقيق طموحاتك الوظيفية</p>
                </div>
                <div class="col-12 col-sm-4 col-md-6 col-lg-6 text-center">

                    <a class="icon-link icon-link-hover social-icons p-1  rounded"
                        style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                        href="https://www.linkedin.com/company/masar2030/" target="_blank">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a class="icon-link icon-link-hover social-icons p-1 rounded"
                        style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                        href="https://www.instagram.com/masar_2030" target="_blank">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a class="icon-link icon-link-hover social-icons p-1 rounded"
                        style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                        href="https://youtube.com/@MASAR-yt1wy" target="_blank">
                        <i class="bi bi-youtube"></i>
                    </a>

                    <a class="icon-link icon-link-hover social-icons p-1 rounded"
                        style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                        href="https://www.tiktok.com/@masar_2030" target="_blank">
                        <i class="bi bi-tiktok"></i>
                    </a>

                    <a class="icon-link icon-link-hover social-icons p-1 rounded"
                        style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="https://t.me/masar2030"
                        target="_blank">
                        <i class="bi bi-telegram"></i>
                    </a>
                    <a class="icon-link icon-link-hover social-icons p-1 rounded"
                        style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                        href="https://t.snapchat.com/0OtAKoth" target="_blank">
                        <i class="bi bi-snapchat"></i>
                    </a>
                    <a class="icon-link icon-link-hover social-icons p-1 rounded"
                        style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="https://x.com/masar_2030"
                        target="_blank">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                </div>
                <br>
            </div>
        </div>
</body>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('review').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default form submission

        // Serialize form data
        let form = document.getElementById('cards_form');
        var formData = new FormData(form);

        // let image_selected = document.getElementsByName('radio').value;
        let selectedRadioButton = document.querySelector('input[name="image_selected"]:checked');
        let image_selected = selectedRadioButton ? selectedRadioButton.value : undefined;
        let member_name = document.getElementById('member_name').value;

        // console.log(image_selected + " || " + member_name);

        if (image_selected !== undefined && member_name !== "") {

            // Send AJAX request to generate the image
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'review_image.php', true);
            xhr.onload = function () {
                if (xhr.status == 200) {
                    // Create an img element for the image
                    var img = document.createElement('img');
                    img.width = 300;
                    // Append a unique timestamp to the image URL
                    var imageUrl = xhr.responseText + '?t=' + new Date().getTime();
                    // Set the src attribute to load the generated image with the unique URL
                    img.src = imageUrl;
                    console.log(imageUrl);
                    // Append the image to the image container
                    document.getElementById('imageContainer').innerHTML = ''; // Clear previous image
                    document.getElementById('imageContainer').appendChild(img);

                }
            };
            xhr.send(formData);
        } else {
            alert("يرجى كتابة الاسم واختيار قالب");
        }
    });

    // Function to check if form is empty
    function isFormDataEmpty(formData) {
        for (let pair of formData.entries()) {
            if (pair[0] !== undefined && pair[1] !== undefined) {
                return false; // Found at least one key/value pair, so it's not empty
            }
        }
        return true; // No entries found, so it's empty
    }
</script>

</html>