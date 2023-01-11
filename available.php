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
    <title>GWSC Home</title>
</head>
<body>
    <section class="av-heading">
        <h2 class="text-center mt-3">Check Availability</h2>
    </section>

    <section class="avform">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class=" mt-3">Choose Accomodation (Pitch Types)</h5>
                            <select class="form-select">
                                <option>G</option>
                                <option>GWE</option>
                                <option>HWE</option>
                                <option>SS</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <h5 class=" mt-3">Number of Pitches</h5>
                            <select class="form-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h5 class=" mt-3">Number of People</h5>
                            <div class="input-group">
                                <span class="input-group-text">Adults and Kids</span>
                                <input type="number" aria-label="Adult" class="form-control">
                                <input type="number" aria-label="Kids" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- <h5 class=" mt-3">Choose Dates</h5> -->
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <label for="startdate">Check In Date</label>
                                    <input id="startdate" class="form-control" type="date">
                                </div>
                                <div class="col-md-6 mt-4">
                                    <label for="enddate">Check Out Date</label>
                                    <input id="enddate" class="form-control" type="date">
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="row mt-5 mb-4">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                        <button class="btn btn-success w-100" type="submit">Check</button>
                        <!-- check nhate pee yin av or full pyn pya pyy pho lo -->
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <section class="help">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h5 class="text-center">Need Help? Call our reservation team +959799465046. </h5>
                </div>
                <div class="col-md-2"></div>
            </div>
            <hr>
        </div>
    </section>

    <script src="js/js/bootstrap.js"></script>
    <script src="js/js/jvscript.js.js"></script>
</body>
</html>