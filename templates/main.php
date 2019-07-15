<?php 
    $title = 'Luxary Trend'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/vendor/fontawesome-free-5.9.0-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/vendor/owl-carusel/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/vendor/owl-carusel/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/vendor/arctic-modal/jquery.arcticmodal-0.3.css">
    <link rel="stylesheet" href="./assets/vendor/arctic-modal/simple.css">
    <link rel="stylesheet" href="./assets/vendor/animate.css">
    <link rel="stylesheet" href="./assets/css/all.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    
    <?php 
        require_once    './components/header.php'; 
        require_once    './components/hero.php';
        include_once    './components/goods-info.php';
        include_once    './components/advantages.php';
        include_once    './components/profit.php';
        require         './components/call-to-action.php';
        include_once    './components/for-whom.php';
        include_once    './components/family.php';
        include_once    './components/steps.php';
        require         './components/call-to-action.php';
        include_once    './components/testimonials.php';
        include_once    './components/pre-footer.php';
        require_once    './components/footer.php';
        require_once    './components/widgets.php';
        include         './components/vendor-modal.php';
        include         './components/modal-window.php';
    ?>


    <script src="./assets/vendor/jquery.min.js"></script>
    <script src="./assets/vendor/owl-carusel/owl.carousel.min.js"></script>
    <script src="./assets/vendor/arctic-modal/jquery.arcticmodal-0.3.min.js"></script>
    <script src="./assets/js/all.js"></script>
    <script src="./assets/vendor/wow.js"></script>
    
    <script>
        $('.more-info').click(function() {
            $('#exampleModal').arcticmodal();
        })

        var wow = new WOW(
            {
                boxClass:     'wow',      
                animateClass: 'animated', 
                offset:       0,          
                mobile:       true,       
                live:         true,       
                callback:     function(box) {
                },
                scrollContainer: null 
            }
        );
        wow.init();  
    </script>
</body>
</html>