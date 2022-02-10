<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free JavaScript library for star rating. Star Rating system">
    <meta name="keywords" content="HTML, CSS, JavaScript, library, free">
    <meta name="author" content="Djordje Vujicic">

    <meta property="og:image" content="https://starratingjs.netlify.app/src_img.png" />
    <meta property="og:image:secure_url" content="https://starratingjs.netlify.app/src_img.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="476" />
    <meta property="og:image:height" content="286" />
    <meta property="og:image:alt" content="Star rating" />
    <meta property="og:url" content="https://starratingjs.netlify.app">

    <link rel="icon" href="favicon.png" type="image/png" sizes="16x16">
    <link rel="image_src" href="src_img.png">
    <title>Free Javascript Star Rating System</title>
    <script src="index.js"></script>
</head>
<body>

    <h2>Result</h2>
 

    //Star rating with empty stars borders(5 stars, step=0.5, minRating=0.5)
    <div><div class="starRatingContainer"><div class="ratingSystem"></div></div> <input type="text" name="userNumber" id="txtF"></div>
    <br>
    <div><div class="starRatingContainer"><div class="ratingSystem"></div></div> <input type="text" name="userNumber" id="txtF"></div>
    <br>
   

<script>
    var properties1=[
        {"rating":"3", "maxRating":"5", "minRating":"0.5", "readOnly":"no", "starImage":"star.png", "emptyStarImage":"starbackground.png", "starSize":"16", "step":"0.5"},
        {"rating":"4", "maxRating":"5", "minRating":"0.5", "readOnly":"no", "starImage":"star.png", "emptyStarImage":"starbackground.png", "starSize":"16", "step":"0.5"},
    ];

    var className="ratingSystem";

    rateSystem(className, properties1, function(rating){ document.getElementById("txtF").value = rating; });



</script>

</body>
</html>