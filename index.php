<?php

    $apiUrl = "https://api.passionateworlduniversity.com/api/landing-pages/campaign";

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($code !== 200) {
        echo "Error fetching page (HTTP {$code})";
        exit;
    }

    $data = json_decode($response, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['data']['section1']['title']; ?></title>
      <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start':
            new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MPWSCKJ4');</script>
    <!-- End Google Tag Manager -->
 
 <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "qhuo8bdlse");
 </script>
  

   

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- main-css -->
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Water+Brush&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/eduact-icons/style.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/owl-carousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/vendors/owl-carousel/assets/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="https://www.sabitinternational.com/frontend/assets/css/eduact.css" />
    <style>
        .toast-error {
            background-color: red !important;
        }

        .toast-success {
            background-color: green !important;
        }
    </style>
    <style>
      	.form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .form-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
      .form-container form {
          display: flex;
          flex-direction: column;
          align-items: center; /* Centers the button horizontally */
      }
        button {
            width: 30%;
            background: black;
            color: white;
            padding: 10px;
            margin-top: 15px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-bottom:50px;
          display:block;
          margin-top:20px;
          margin: 15px auto 50px auto; 
        }

        button:hover {
            background: #0056b3;
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 15px;
            }

            input {
                font-size: 14px;
            }

            button {
                font-size: 16px;
            }
        }
        .main-header-two .main-menu {
            background: black !important;
        }

        .online-course-section {
            padding-top: 50px !important;
            background-color: #FFFFFF !important;
        }

        .img-sec {
            width: 100%;
            height: 400px;
            background-color: rgb(88, 88, 88);
            border-radius: 10px;
            margin-bottom: 50px;
        }

        .description {
            color: #4c4848;
            font-weight: 600;
        }

        .pricing-section {
            box-shadow: -1px 2px 11px 1px rgba(0, 0, 0, 0.29);
            -webkit-box-shadow: -1px 2px 11px 1px rgba(0, 0, 0, 0.29);
            -moz-box-shadow: -1px 2px 11px 1px rgba(0, 0, 0, 0.29);
            padding: 22px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .register-btn {
            width: 100%;
            background-color: #000;
            color: white;
            border-radius: 10px;
        }

        .animated-button {
            position: relative;
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 16px 36px;
            width: 100% !important;
            border: 4px solid;
            border-color: transparent;
            font-size: 16px;
            background-color: #000;
            border-radius: 20px;
            font-weight: 600;
            color: rgb(255, 255, 255);
            box-shadow: 0 0 0 2px rgb(190, 190, 190);
            cursor: pointer;
            overflow: hidden;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            margin-top: 20px;
        }

        .animated-button svg {
            position: absolute;
            width: 24px;
            fill: rgb(238, 238, 238);
            z-index: 9;
            transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .animated-button .arr-1 {
            right: 16px;
        }

        .animated-button .arr-2 {
            left: -25%;
        }

        .animated-button .circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            background-color: #000;
            color: #FFFFFF;
            border-radius: 50%;
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
        }

            .animated-button .text {
                position: absolute; /* or relative if parent uses flex */
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%); /* center both horizontally and vertically */
                z-index: 1;
                transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
            }

        .animated-button:hover {
            box-shadow: 0 0 0 12px transparent;
            color: rgb(255, 255, 255);
            border-radius: 12px;
        }

        .animated-button:hover .arr-1 {
            right: -25%;
        }

        .animated-button:hover .arr-2 {
            left: 50px;
        }


        .animated-button:hover svg {
            fill: rgb(255, 255, 255);
        }

        .animated-button:active {
            scale: 0.95;
            box-shadow: 0 0 0 4px greenyellow;
        }

        .animated-button:hover .circle {
            width: 220px;
            height: 220px;
            opacity: 1;
        }

        .pricing-section ul {
            padding-left: 20px;
            font-weight: 600;
            font-family: math;
        }

        .class-sec {
            background-color: #F4F4F4;
            padding: 20px 21px;
            margin-bottom: 20px;
            border-radius: 12px;
        }

        .date-text {
            width: 100%;
            background-color: black;
            color: white !important;
            margin-bottom: 0px;
            padding: 25px 0px 10px;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            margin-top: 11px;
        }

        .time-text {
            width: 100%;
            background-color: black;
            color: white !important;
            margin-bottom: 0px;
            padding: 10px;
            text-align: center;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top: 2px solid white;
        }

        .date-icon {
            position: absolute;
            text-align: center;
            /* margin-left: 75px; */
            background-color: white;
            font-size: 28px;
            padding: 1px 10px;
            border-radius: 10px;
            margin-top: -14px !important;
            border: 4px solid black;
            margin: 0 auto;
            justify-content: center;
            margin-left: -10px;
        }

        .online-course-section p {
            color: #544949;
        }

        @media (max-width: 768px) {
            .class-sec {
                display: block !important;
            }
            .icon-sec {
                width: 100% !important;
            }
            .topic-sec {
                width: 100% !important;
            }
            .date-sec {
                width: 100% !important;
            }
        }
      form h2{
        text-align: center;
        margin-top:10px;
        margin-bottom:30px;
        color: white;
        background: black;
        padding:20px;
        border-radius: 10px;
      }
      form .button-margin-top{
        margin-bottom:20px;
      }
    </style>
</head>

<body>

    <!-- header start -->
    <div class="online-course-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <!-- <div class="img-sec">
                        <img style="height: 400px;border-radius: 10px;" class="w-100" src="<?php echo $data['data']['section1']['image']; ?>" alt="">
                    </div> -->
                    <div class="img-sec">
                        <?php if (!empty($data['data']['section1']['image'])): ?>
                            <img style="height: 400px;border-radius: 10px;" class="w-100" 
                                src="<?php echo $data['data']['section1']['image']; ?>" 
                                alt="">
                        <?php elseif (!empty($data['data']['section1']['video'])): ?>
                            <iframe style="height: 400px;border-radius: 10px;" class="w-100" 
                                    src="<?php echo $data['data']['section1']['video']; ?>" 
                                    frameborder="0" allowfullscreen></iframe>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="pricing-section">
                        <div class="">
                            <div class="">
                                <h3><?php echo $data['data']['section1']['title']; ?></h3>
                                <ul>
                                    <?php foreach ($data['data']['section1']['bullets'] as $bullet): ?>
                                        <li><?php echo $bullet; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <h5 style="color:red;"><del>Fee <?php echo (int)$data['data']['section1']['regular_price']; ?> BDT</del></h5>
								<h5>Early Bird Registration Fee- <span style="color:green;"><?php echo (int)$data['data']['section1']['offer_price']; ?> </span> BDT</h5>
                                <!-- <a type="button" href="#form" class="animated-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">
                                        <path
                                        d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                        ></path>
                                    </svg>
                                    <span class="text"><?php echo $data['data']['section1']['registration_text']; ?></span>
                                    <span class="circle"></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">
                                        
                                    </svg>
                                </a> -->
                                <a href="#form" class="animated-button btn btn-success d-block d-sm-inline-flex w-100 w-sm-auto align-items-center justify-content-center">
                                    <span class="text"><?php echo $data['data']['section1']['registration_text']; ?></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="arr-2 ms-2" viewBox="0 0 24 24" width="20" height="20">
                                        <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="description">
                        <h5>Description</h5>
                        <?php 
                            // Use {!! !!} equivalent in plain PHP: echo the HTML directly
                            echo $data['data']['section2']['description']; 
                        ?>
                    </div>

                </div>
                <div class="col-lg-6">
                    <h5 style="text-align: center; font-family: 'Montserrat';padding-bottom: 30px;">Class Details</h5>
                    <div class="classes">
                        <?php foreach ($data['data']['section2']['class_details'] as $class): ?>
                            <div class="class-sec d-flex">
                                <div class="icon-sec" style="width: 10%;">
                                    <i style="font-size: 42px; padding-top: 27px;" class="fas fa-globe"></i>
                                </div>
                                <div class="topic-sec pe-3" style="width: 60%;">
                                    <h3 class="pt-3"><?php echo $class['title']; ?></h3>
                                </div>
                                <div class="date-sec" style="width: 30%;">
                                    <p class="date-icon"><i class="fas fa-calendar-alt"></i></p>
                                    <p class="date-text"><?php echo date('d/m/Y', strtotime($class['date'])); ?></p>
                                    <p class="time-text">
                                        <?php echo date('h:i A', strtotime($class['start_time'])) . ' - ' . date('h:i A', strtotime($class['end_time'])); ?>
                                    </p>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>

                </div>
          		<div id="form" style="max-width: 1000px; margin: auto; padding: 20px; border-radius: 10px; background: #f9f9f9; box-shadow: 0px 4px 10px rgba(0,0,0,0.1);">
                    <?php
                        $form_fields = $data['data']['form_fields'] ?? [];
                        // hidden inputs required by API:
                        $landing_title = htmlspecialchars($data['data']['section1']['title'] ?? '');
                        $offer_price = (int) ($data['data']['section1']['offer_price'] ?? 0);
                        $landing_slug = htmlspecialchars($data['data']['slug'] ?? '');

                        echo '<form action="submit-form.php" method="POST" style="display:flex;flex-wrap:wrap;gap:15px;">';
                        echo '<h2 style="width:100%;text-align:center;">Registration Form</h2>';

                        // If no form_fields configured, fallback to default fields (optional)
                        if (empty($form_fields)) {
                            // ... render your original fixed fields here (name, whatsapp, etc.)
                            // skip for brevity
                        }

                        // Render dynamic fields
                        foreach ($form_fields as $f) {
                            $type = $f['type'] ?? 'text';
                            $name = htmlspecialchars($f['name']);
                            $label = htmlspecialchars($f['label'] ?? $name);
                            $placeholder = htmlspecialchars($f['placeholder'] ?? '');
                            $required = !empty($f['required']) ? 'required' : '';
                            $default = htmlspecialchars($f['default'] ?? '');

                            echo '<label style="width:100%;">' . $label . ($required ? '<span style="color:red">*</span>' : '') . '<br>';

                            switch ($type) {
                                case 'textarea':
                                    echo "<textarea name=\"{$name}\" placeholder=\"{$placeholder}\" {$required} style=\"width:100%;padding:8px;\">{$default}</textarea>";
                                    break;

                                case 'select':
                                    // options might be array of ['label'=>..,'value'=>..] or strings
                                    echo "<select name=\"{$name}\" {$required} style=\"width:100%;padding:8px;\">";
                                    $options = $f['options'] ?? [];
                                    foreach ($options as $opt) {
                                        if (is_array($opt)) {
                                            $optLabel = htmlspecialchars($opt['label'] ?? $opt['value']);
                                            $optValue = htmlspecialchars($opt['value'] ?? $opt['label']);
                                        } else {
                                            $optLabel = $optValue = htmlspecialchars($opt);
                                        }
                                        echo "<option value=\"{$optValue}\">{$optLabel}</option>";
                                    }
                                    echo "</select>";
                                    break;

                                case 'radio':
                                    $options = $f['options'] ?? [];
                                    foreach ($options as $opt) {
                                        $optLabel = is_array($opt) ? htmlspecialchars($opt['label']) : htmlspecialchars($opt);
                                        $optValue = is_array($opt) ? htmlspecialchars($opt['value']) : htmlspecialchars($opt);
                                        echo "<div><label><input type=\"radio\" name=\"{$name}\" value=\"{$optValue}\" {$required}> {$optLabel}</label></div>";
                                    }
                                    break;

                                case 'checkbox':
                                    // checkbox multi: name should be "name[]" so we get array
                                    $options = $f['options'] ?? [];
                                    foreach ($options as $opt) {
                                        $optLabel = is_array($opt) ? htmlspecialchars($opt['label']) : htmlspecialchars($opt);
                                        $optValue = is_array($opt) ? htmlspecialchars($opt['value']) : htmlspecialchars($opt);
                                        echo "<div><label><input type=\"checkbox\" name=\"{$name}[]\" value=\"{$optValue}\"> {$optLabel}</label></div>";
                                    }
                                    break;

                                default:
                                    // text, email, number, tel, date, time
                                    $inputType = in_array($type, ['text','email','number','tel','date','time']) ? $type : 'text';
                                    echo "<input type=\"{$inputType}\" name=\"{$name}\" value=\"{$default}\" placeholder=\"{$placeholder}\" {$required} style=\"width:100%;padding:8px;\" />";
                            }

                            echo '</label>';
                        }

                        // Hidden meta fields required by API
                        echo "<input type=\"hidden\" name=\"landing_title\" value=\"{$landing_title}\">";
                        echo "<input type=\"hidden\" name=\"offer_price\" value=\"{$offer_price}\">";
                        echo "<input type=\"hidden\" name=\"landing_slug\" value=\"{$landing_slug}\">";

                        // Submit button
                        echo '<button type="submit" style="width:50%;background:#000;color:#fff;padding:12px;margin-top:20px;">Submit</button>';
                        echo '</form>';
                    ?>

                </div>
<?php
// Fetch all courses first (only if landing courses exist)
$all_courses = [];
if (!empty($data['data']['courses'])) {
    $course_api_url = "https://api.passionateworlduniversity.com/api/courses";
    $ch_courses = curl_init();
    curl_setopt($ch_courses, CURLOPT_URL, $course_api_url);
    curl_setopt($ch_courses, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch_courses, CURLOPT_SSL_VERIFYPEER, false); 
    $courses_response = curl_exec($ch_courses);
    curl_close($ch_courses);

    $courses_data = json_decode($courses_response, true);
    $all_courses = $courses_data['data'] ?? [];
}

// If landing page provides course titles
if (!empty($data['data']['courses'])) {
    $selected_titles = $data['data']['courses'];

    // Filter full course list by matching titles
    $courses = array_filter($all_courses, function($course) use ($selected_titles) {
        return in_array($course['title'], $selected_titles);
    });
} else {
    // Otherwise, just show all courses
    $courses = $all_courses;
}


echo '<div class="col-lg-12" style="margin-top: 50px; margin-bottom: 30px;">';
echo '<h3 style="text-align: center; font-family: Montserrat; font-size: 34px; padding-bottom: 30px;">Other Courses from Passionate World University</h3>';
echo '<div class="row">';

if (!empty($courses)) {
    $courses_to_display = array_slice($courses, 0, 10);

    foreach ($courses_to_display as $course) {
        $title = htmlspecialchars($course['title'] ?? 'No Title');
        $image_url = htmlspecialchars($course['image'] ?? 'https://via.placeholder.com/300x200?text=Course+Image');
        $price = htmlspecialchars(number_format(floatval($course['price'] ?? 0), 2) . ' BDT');
        $regular_price_val = floatval($course['regularPrice'] ?? 0);
        $price_val = floatval($course['price'] ?? 0);
        $regular_price_display = ($regular_price_val > $price_val) ? 
                                '<del style="color: red;">' . number_format($regular_price_val, 2) . ' BDT</del>' : '';
        $author = htmlspecialchars($course['author'] ?? 'N/A');
        $slug = htmlspecialchars($course['slug'] ?? '');

        echo '<div class="col-md-4 col-sm-6 mb-4">';
        echo '  <div style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; height: 100%; display: flex; flex-direction: column; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.2s;">';
        echo '    <a href="https://passionateworlduniversity.com/course-details/' . $slug . '" target="_blank" style="text-decoration: none; color: inherit;">';
        echo '      <img src="' . $image_url . '" alt="' . $title . '" style="width: 100%; height: 200px; object-fit: cover;">';
        echo '    </a>';
        echo '    <div style="padding: 15px; flex-grow: 1;">';
        echo '      <h4 style="font-size: 1.25rem; margin-bottom: 10px; font-weight: 700;">' . $title . '</h4>';
        echo '      <p style="margin-bottom: 5px; font-size: 0.9rem;"><strong>Instructor:</strong> ' . $author . '</p>';
        echo '      <p style="margin-bottom: 5px; font-size: 1.1rem;">';
        echo '        ' . $regular_price_display . ' <strong>Price:</strong> ' . $price;
        echo '      </p>';
        echo '    </div>';
        echo '    <a href="https://passionateworlduniversity.com/course-details/' . $slug . '" target="_blank" style="display: block; text-align: center; padding: 10px; background-color: #000; color: white; text-decoration: none; font-weight: 600; border-radius: 0 0 8px 8px;">ENROLL NOW</a>';
        echo '  </div>';
        echo '</div>';
    }
} else {
    echo '<div class="col-lg-12"><p style="text-align: center;">Unable to load courses at this time.</p></div>';
}

echo '</div>';
echo '</div>';
?>


                <div class="col-lg-12" style="margin-bottom: 30px;">
                    <h3 style="text-align: center; font-family: Montserrat; font-size: 34px; padding-bottom: 30px;margin-top:30px;"><?php echo $data['data']['section4']['terms_title']; ?></h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="terms-sec">
                                <ul>
                                    <?php foreach ($data['data']['section4']['terms_bullets'] as $bullet): ?>
                                        <li><?php echo $bullet; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section start -->
    






    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
    </script>

    <script src="https://www.sabitinternational.com/frontend/assets/js/eduact.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counterElements = document.querySelectorAll('.count-number');

            function animateCounter(counterElement) {
                const start = parseInt(counterElement.getAttribute('data-start')) || 0;
                const target = parseInt(counterElement.getAttribute('data-stop')) || 750;
                const speed = parseInt(counterElement.getAttribute('data-speed')) || 6000;

                let currentNumber = start;
                const increment = (target - start) / (speed / 60);

                function updateCounter() {
                    currentNumber += increment;

                    if (currentNumber >= target) {
                        counterElement.innerText = target;
                    } else {
                        counterElement.innerText = Math.floor(currentNumber);
                        requestAnimationFrame(updateCounter);
                    }
                }

                requestAnimationFrame(updateCounter);
            }

            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            animateCounter(entry.target);
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.5,
                }
            );

            counterElements.forEach((el) => {
                observer.observe(el);
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.animate');

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');

                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            animateElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.querySelector('.mobile-nav__toggler');
            const mobileMenu = document.querySelector('.mobile-nav__menu');

            // Check if the button and the menu are available
            if (toggleButton && mobileMenu) {
                toggleButton.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent default behavior

                    // Toggle the visibility of the menu by checking d-none class
                    if (mobileMenu.classList.contains('d-none')) {
                        mobileMenu.classList.remove('d-none'); // Remove d-none to show the menu
                    } else {
                        mobileMenu.classList.add('d-none'); // Add d-none to hide the menu
                    }
                });
            }
        });
    </script>

    
    <script>
        function toggleReadMore(button) {
            const parent = button.closest('.review-description');
            const shortText = parent.querySelector('.short-text');
            const fullText = parent.querySelector('.full-text');

            if (shortText.style.display === 'none') {
                shortText.style.display = 'inline';
                fullText.style.display = 'none';
                button.textContent = 'Read More';
            } else {
                shortText.style.display = 'none';
                fullText.style.display = 'inline';
                button.textContent = 'Read Less';
            }
        }
    </script>
  
  
</body>

</html>