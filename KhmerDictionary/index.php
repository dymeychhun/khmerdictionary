<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>វចនានុក្រមខ្មែរ (សម្ដេចព្រះសង្ឃរាជជួនណាត)</title>
</head>

<body>
    <div class="container">
        <form class="row g-3 needs-validation my-3" novalidate>
            <div class="col-md-12">
                <label for="word" class="form-label">ពាក្យ</label>
                <input type="text" class="form-control" id="word" required>
                <div class="invalid-feedback">
                    សូមវាយបញ្ចូលពាក្យក្នុងប្រអប់.
                </div>
            </div>
            <div class="col-md-12">
                <label for="definition" class="form-label">និយមន័យ</label>
                <textarea rows="10" class="form-control" id="definition" required></textarea>
                <div class="invalid-feedback">
                    សូមវាយបញ្ចូលនិយមន័យក្នុងប្រអប់.
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" id="submit">បញ្ចូនទិន្នន័យ</button>
            </div>
        </form>

        <div class="my-4">
            <div class="row">
                <div class="col-md-12">
                    <label for="latestWords" class="form-label">ពាក្យបញ្ចូលចុងក្រោយ</label>
                    <div class="form-control" id="latestWords"></div>
                </div>
            </div>
        </div>

        <!-- Bootstrap Toast -->
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Success</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>