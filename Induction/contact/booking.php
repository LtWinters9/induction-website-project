<div><div class="jumbotron-contact jumbotron-contact-sm">
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <h1 class="h1">
                Please select an appointment <small>to book now</small></h1>
        </div>
    </div>
</div>
</div>
<div class="container">
<div class="row">
    <div class="col-md-8">
        <div class="well well-sm">
            <form action="confirmation.php" method="post">
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="subject">
                            Subject</label>
                        <select id="book" name="book" class="form-control" required="required">
                            <option value="na" selected="">Choose One:</option>
                            <option value=">" $row[bookingid],></option>
                            <option value="Date"$row[bookdate],></option>
                            <option value="Time"$row[booktime],></option>
                            <option value="Advisor"$row[advisor],></option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right" id="btnBookNow" value="Confirm bookking"</button>
                </div>
