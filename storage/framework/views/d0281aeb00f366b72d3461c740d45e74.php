<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Loan System</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
           body{
            font-family: "Times New Roman", Times, serif;
            text-align: center;
           }
           #box{
            margin-top:30px;
            display: inline-block; 
            float: center;
            text-align: center;
            padding:20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            width: 800px;
           }
           label{
            font-size:20px;
           }
        </style>
    </head>
    <body>
        <div id="box">
            <h1 style="color:green">Loan Request Form</h1><br>
            <?php if(session('success')): ?>
                <p><?php echo e(session('success')); ?></p>
            <?php endif; ?>
            <form action="<?php echo e(route('loan.request')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <table class="table">
                    <tr>
                        <td><label>Name:</label></td>
                        <td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td><label>Email:</label></td>
                        <td><input type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td><label>Phone:</label></td>
                        <td><input type="text" name="phone" required></td>
                    </tr>
                    <tr>
                        <td><label>Address:</label></td>
                        <td><input type="text" name="address" required></td>
                    </tr>
                    <tr>
                        <td><label>Amount:</label></td>
                        <td><input type="number" name="amount" required></td>
                    </tr>
                    <tr>
                        <td><label>Reason:</label></td>
                        <td><textarea name="reason" required></textarea><br></td>
                    </tr>
                    <tr>
                        <td colspan=2> <button type="submit" class="btn btn-success">Submit</button></td>
                    </tr>

                </table>
            </form>
        </div>
    </body>
</html>
<?php /**PATH D:\xampp_8_2_4\htdocs\LoanSystem\resources\views/welcome.blade.php ENDPATH**/ ?>