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
        <div id="box" class="container">
        <h1>Edit Loan Request</h1>
        <form action="<?php echo e(route('loanRequests.update', $loanRequest->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo e($loanRequest->name); ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?php echo e($loanRequest->email); ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo e($loanRequest->phone); ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" class="form-control" value="<?php echo e($loanRequest->address); ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="amount">Amount:</label>
                    <input type="number" id="amount" name="amount" class="form-control" value="<?php echo e($loanRequest->amount); ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="reason">Reason:</label>
                    <textarea id="reason" name="reason" class="form-control" required><?php echo e($loanRequest->reason); ?></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
        </div>
    </body>
</html>
<?php /**PATH D:\xampp_8_2_4\htdocs\LoanSystem\resources\views/edit.blade.php ENDPATH**/ ?>