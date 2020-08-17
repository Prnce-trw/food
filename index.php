<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการอาหาร</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4>รายการอาหาร</h4>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">ราคา</div>
                        <div class="col-sm-3">จำนวน</div>
                        <div class="col-sm-3">สุทธิ</div>
                    </div>
                    <form action="price.php" method="POST">
                    <div class="row">
                        <div class="col-sm-3">ไก่ทอด</div>
                        <div class="col-sm-3 text-center">25 x</div>
                        <div class="col-sm-3">
                            <input type="number" name="chicken" id="chicken" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <input type="number" id="resule_chicken" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">ข้าวผัด</div>
                        <div class="col-sm-3 text-center">35 x</div>
                        <div class="col-sm-3">
                            <input type="number" name="rice" id="rice" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <input type="number" id="resule_rice" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">กะเพราหมูสับ</div>
                        <div class="col-sm-3 text-center">40 x</div>
                        <div class="col-sm-3">
                            <input type="number" name="pig" id="pig" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <input type="number" id="resule_pig" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">คำนวณ</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4"></div>
    <script>
        $(document).on('keyup', '#chicken', function () { 
            var chicken = $(this).val();
            $('#resule_chicken').val(chicken*25);
        });

        $(document).on('keyup', '#rice', function () { 
            var rice = $(this).val();
            $('#resule_rice').val(rice*35);
        });

        $(document).on('keyup', '#pig', function () { 
            var pig = $(this).val();
            $('#resule_pig').val(pig*40);
        });
    </script>
</body>
</html>