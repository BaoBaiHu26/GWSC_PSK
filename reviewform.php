<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Review Form</title>
</head>
<body>
    <section class="reviewform">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-2"></div>
                <!-- start -->
                <div class="col-md-8 border">
                    <h2 class="mt-2 mb-2">Leave a Review</h2>
                    <br>
                        <div class="row">
                            <div class="col-md-6 required"><h4>Place Name</h4></div>
                            <div class="col-md-6">
                                <select required class="w-100">
                                    <option value="1" class="text-center">Swtizerland</option>
                                    <option value="2" class="text-center">Place2</option>
                                    <option value="3" class="text-center">Place3</option>
                                    <option value="4" class="text-center">Place4</option>
                                    <option value="5" class="text-center">Place5</option>
                                </select>
                            </div>
                        </div>
                    <br>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="dname" placeholder="Display Name" class="mt-3 w-100" required/>
                            </div>
                            <div class="col-md-6">
                            <input type="email" name="email" placeholder="Email Address" class="mt-3 w-100" required/>
                            </div>
                        </div>
                    <br>
                        <div class="row">
                            <label><input type="checkbox" name="remember">   I agree with Terms & Conditions of submission. <a href="tnc.php">Terms&Conditions</a></label>
                        </div>
                    <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="staydate" class="mb-2">When did you stay?</label>
                                <input id="staydate" class="form-control" type="date">
                            </div>
                            <div class="col-md-6">
                                <label for="days" class="mb-2">Number of Nights Stayed?</label>
                                <input type="number" aria-label="days" class="form-control">
                            </div>
                        </div>
                    <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="actype">Pitch Type</label>
                                <select required class="w-100 mt-2">
                                    <option value="1" class="text-center">G</option>
                                    <option value="2" class="text-center">GWE</option>
                                    <option value="3" class="text-center">HWE</option>
                                    <option value="4" class="text-center">SS</option>
                                </select>
                            </div>
                        </div>
                    <br>
                        <div class="row mb-2">
                            <h4>Select Your Star Ratings</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="customRange2" class="form-label">Location</label>
                                <input type="range" class="form-range" min="0" max="5" id="customRange2">
                            </div>
                            <div class="col-md-6">
                                <label for="customRange2" class="form-label">Service</label>
                                <input type="range" class="form-range" min="0" max="5" id="customRange2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="customRange2" class="form-label">Facilities</label>
                                <input type="range" class="form-range" min="0" max="5" id="customRange2">
                            </div>
                            <div class="col-md-6">
                                <label for="customRange2" class="form-label">Cleanliness</label>
                                <input type="range" class="form-range" min="0" max="5" id="customRange2">
                            </div>
                        </div>
                    <br>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <h5>Would you recommend it to your friends?</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <input class="form-check-input" type="radio" name="RadioOptions" id="Radio1" value="option1">
                                    <label class="form-check-label" for="Radio1">Yes</label>
                                </div>
                                <div class="col-md-3">        
                                        <input class="form-check-input" type="radio" name="RadioOptions" id="Radio2" value="option2">
                                        <label class="form-check-label" for="Radio2">No</label>
                                </div>
                            </div>
                        </div>
                    <br>
                        <div class="row">
                            <h4>Your Comments</h4>
                                <div class="col-md-8">
                                <input type="text" name="dname" placeholder="Title..." class="mt-3 w-100" required/>
                                </div>
                                <div class="col-md-8">
                                <textarea class="w-100 mt-3" name="comment" placeholder="Your Comment..." id="comment" cols="30" rows="5"></textarea>
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-success w-100 mt-2" type="submit">Submit</button>
                            </div>
                        </div>

                        <div class="row">
                            <label><input type="checkbox"  checked="checked" name="agree" class="mt-2"> I agree for my information to be shown in review section.</label>
                        </div>
                    <br>
                </div>
                <!-- end -->
                <div class="col-md-2"></div>
            </div>

            <!-- submit nhate yin submission success so dr por lr ag lote pho kyn -->
        </div>
    </section>
</body>
</html>