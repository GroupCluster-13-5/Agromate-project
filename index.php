<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Desk Help v1</title>
    <link rel="stylesheet" href="./support/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./support/assets/css/app.css">
    <style>
        body,html{
            background-image:url(support/assets/img/bg2.jpg);
            background-size: cover;
        }
    </style>
</head>
<body>
    
    <form method="POST">
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3>View Your Problem</h3>
                            <p>මෙය හරහා ඔබ විසින් අපවෙත ඉදිරිපත් කරනු ලැබූ ගැටලුව නැවත නිරීක්ෂණය කරන්න.</p>
                            <a href="./view-ticket.php" class="btn btn-success">View Ticket</a>
                        </div>
                    </div>
                </div>
    
    
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3>Submit Your Problem</h3>
                            <p>ඔබගේ වගාව සම්බන්ධව ඔබට පැනනැගී ඇති ගැටලුව අපවෙත යොමු කරන්න.
                                මෙය පැය 24 පුරාම ක්‍රියාත්මක සේවාවකි.
                            </p>
                            <a href="./submit-ticket.php" class="btn btn-success">Submit Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</body>
<script src="./support/assets/js/jquery-3.6.0.min.js"></script>
<script src="./support/assets/js/popper.min.js"></script>
<script src="./support/assets/js/bootstrap.min.js"></script>
</html>