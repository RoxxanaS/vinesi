<?php
namespace domain;

use view\TemplateView;

?>

<!DOCTYPE html>
<html>
<body>
<div class="intro">
    <h2 class="text-center" style="margin-bottom: 40px;padding-top: 40px;"><strong>Expenses</strong></h2>
    <p class="text-center" style="color: #a2a8ae;">Overview of all expenses during a weeks time.</p>
</div>
<table class="table">
    <thead>
    <tr class="header">
        <th>ID</th>
        <th>Type</th>
        <th>Amount</th>
        <th>Expense Date</th>
        <th>Expense Paid</th>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($this->expenses as $expense):/*@var expense $expense*/
        ?>
        <tr>
            <td><?php echo TemplateView::noHTML($expense->getExpenseid()); ?></td>
            <td><?php echo TemplateView::noHTML($expense->getExpensetype()); ?></td>
            <td><?php echo TemplateView::noHTML($expense->getExpenseamount()); ?></td>
            <td><?php echo TemplateView::noHTML($expense->getExpensestartdate()); ?></td>
            <?php if ($expense->getExpensepaid() == 0) { ?>
                <td style="background:#efa2a9">NO</td>
            <?php } else { ?>
                <td style="background:#71dd8a">YES</td>
            <?php } ?>


            <td>


                <div class="btn-group btn-group-sm" role="group">
                    <a class="btn btn-default" role="button"
                       href="expense/update?id=<?php echo $expense->getExpenseid(); ?>"><i
                                class="fa fa-edit"></i></a>

                    <button type="button" class="btn-outline-light">
                        <a class="btn btn-default" role="button"
                           href="invoice/create?id=<?php echo $expense->getExpenseid(); ?>">
                            <i class="ion-ios-plus-empty">Create Invoice</i>
                    </button>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCenter">
                        <i class="ion-android-delete"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle"
                         aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Deleting Expense</h5>
                                </div>
                                <div class="modal-body">
                                    <p>Mr Andreas Martin, do you want to delete this
                                        Expense</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" data-method="get"
                                            onclick="location.href='lease/delete?id=<?php echo $expense->getExpenseid(); ?>'">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    <?php endforeach;
    ?>
    <div class="btn-group" role="group">
        <a class="btn btn-default" role="button" href="expense/create"> <i class="fa fa-plus-square-o"></i></a>
        <a target="_blank" class="btn btn-default" role="button" href="expense/pdf"> <i
                    class="fa fa-file-pdf-o"></i></a>
        <a class="btn btn-default" role="button" href="expense/email"> <i class="fa fa-envelope-o"></i></a>
    </div>
    </tbody>
</table>
</body>
</html>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>