<?php
    $chicken = $_POST['chicken'];
    $rice = $_POST['rice'];

    $price_chicken =  $chicken * 25;

    $result = $price_chicken;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>บิลราคาอาหาร</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4>บิลราคาอาหาร</h4>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-6"></div>
                        <div class="col-6">ราคา</div>
                    </div>
                    <div class="row">
                        <div class="col-6">ไก่ทอด</div>
                        <div class="col-6">
                            <input type="number" class="form-control" value="<?php echo $price_chicken ?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">ข้าวผัด</div>
                        <div class="col-6">
                            <input type="number" class="form-control" value="" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">กะเพราหมูสับ</div>
                        <div class="col-6">
                            <input type="number" class="form-control" value="" readonly>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-6">รวม</div>
                        <div class="col-6">
                            <input type="number" class="form-control" value="<?php echo $result ?>" readonly>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>