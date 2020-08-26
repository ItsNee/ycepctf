
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
    <div class="picture fade">
        <div class="numbertext">1 / 3</div>
        <img src="/images/image1.png" style="width:100%">
        <div class="text">Joseph writes "Hey, do you want $1 Mil SGD?"</div>
    </div>

    <div class="picture fade">
        <div class="numbertext">2 / 3</div>
        <img src="/images/image2.png" style="width:100%">
        <div class="text">You received the letter and wrote "No"</div>
    </div>

    <div class="picture fade">
        <div class="numbertext">3 / 3</div>
        <img src="/images/image3.png" style="width:100%">
        <div class="text">Joseph received the letter, everyone goes on with life and you didnt get the money</div>
    </div>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
</body>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }


    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("picture");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        if (slideIndex === 2){
            var http = new XMLHttpRequest();
            http.open("POST", "joseph.php", true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            var params = "DoIWantMoney=no";
            http.send(params);
        }
    }
</script>
</html>