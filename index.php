<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<?php
include('config/config.php');
?>

<body>
    <main class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <?php
                $sql = "SELECT * FROM property WHERE is_active = 1";
                $result = $conn->query($sql);
                if (!$result->num_rows) {
                ?>
                    <div class="row border">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p>No Properties Found</p>
                        </div>
                    </div>
                <?php
                }
                ?>
                <?php
                while ($row = $result->fetch_object()) {
                ?>
                    <div class="row border mb-4 proprty">
                        <div class="col-md-3 col-sm-12 col-xs-12 p-0">
                            <img class="property-img" src="<?php echo $row->image ? $row->image : 'images/placefolder.jpg'; ?>" alt="Property Image">
                        </div>
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="row desc-section">
                                <div class="col-md-8">
                                    <div class="main-details">
                                        <h5 class="prop-title"><?php echo $row->title; ?></h5>
                                        <h5 class="prop-location">
                                            <i class="fal fa-map-marker-alt location-icon" aria-hidden="true"></i>
                                            <?php echo $row->location; ?>
                                        </h5>
                                        <p class="prop-description"><?php echo substr($row->description, 0, 130); ?>...</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="other-details">
                                        <div class="icons mb-2">
                                            <div class="icon star" data-type="star"></div>
                                            <div class="icon enquiry" data-type="enquiry for <?php echo $row->title; ?>"></div>
                                            <div class="icon compare" data-type="compare for <?php echo $row->title; ?>"></div>
                                            <div class="icon download" data-type="download for <?php echo $row->title; ?>"></div>
                                        </div>
                                        <div class="status mb-2">
                                            <label>Status:</label>
                                            <p class="red-font font-weight-bold"><?php echo $row->status; ?></p>
                                        </div>
                                        <div class="office-space mb-2">
                                            <label>Office space:</label>
                                            <p class="red-font font-weight-bold"><?php echo $row->office_space; ?> m<sup>2</sup></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

<?php
// Closing connection
$conn->close();
?>

</html>