<?php
include 'connections/db_connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Medical History</title>
</head>

<body>
    <?php include 'sidebar.php'; ?>
    <main>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-1 mb-3 border-bottom">
            <h1 class="h4">Update Medical History</h1>
        </div>
        <form action="" method="post" class="form-floating border-success p-3 shadow-lg needs-validation text-bg-light rounded-4" novalidate>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingFullName" name="full_name" placeholder="Full Name" required>
                <label for="floatingFullName">Child ID</label>
                <div class="invalid-feedback">
                    Please provide a full name.
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="dob" name="dob" required>
                <label for="dob">Date</label>
                <div class="invalid-feedback">
                    Please provide a valid date of birth.
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="special_needs" name="special_needs" rows="10" placeholder="Special Needs"></textarea>
                <label for="special_needs">Vaccination</label>
                <div class="invalid-feedback">
                    Please provide special needs information if applicable.
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="special_needs" name="special_needs" rows="10" placeholder="Special Needs"></textarea>
                <label for="special_needs">Allergies</label>
                <div class="invalid-feedback">
                    Please provide special needs information if applicable.
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="special_needs" name="special_needs" rows="10" placeholder="Special Needs"></textarea>
                <label for="special_needs">Treatments</label>
                <div class="invalid-feedback">
                    Please provide special needs information if applicable.
                </div>
            </div>

            <button type="submit" class="btn btn-outline-primary mt-1">Save Record</button>
            <a href="view_medicalhistory.php" class="btn btn-outline-secondary mt-1 ms-3">View Records</a>
        </form>
        </div>
    </main>
</body>
<script>
    (function() {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
    })();
</script>

</html>