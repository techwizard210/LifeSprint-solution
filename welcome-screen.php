<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>LifeSprint Care Solutions</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon" />

    <!-- Link Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <!-- Custom CSS -->
    <style>
      body {
        background-image: url("images/newbg.png");
        background-size: cover;
        background-attachment: fixed;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
      }

      /* Style for the center-fixed modal */
      .modal-center {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh; /* 100% viewport height */
      }

      /* Make the modal fixed */
      .modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      .modal-footer {
        background-color: white;
        border: none;
      }

      .modal-dialog {
        margin: auto;
        max-width: 700px;
      }

      .btn {
        font-size: 27px;
        padding: 10px 20px;
      }

      .logohome {
        width: 150px;
      }

      .modal-header {
        background-color: #fff;
        border-bottom: 1px solid #fff;
      }

      .btn {
        background-color: #5b155e;
        color: #fff; /* Set text color */
      }

      .btn:hover {
        background-color: #4d6356;
        border-color: #4d6356;
      }
    </style>
  </head>
  <body>
    <div id="particles-js">
    </div>

    <!-- Fixed Modal -->
    <div
      class="modal fade"
      id="fixedModal"
      data-backdrop="static"
      data-keyboard="false"
      tabindex="-1"
      role="dialog"
      aria-labelledby="fixedModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-center">
        <div class="modal-content">
          <div class="modal-header">
            <img src="assets/images/logo.png" class="logohome" />
          </div>
          <div class="modal-body">
            <!-- Modal content goes here -->
            <center>
              <a href="welcome">
                <button type="staff-solution" class="btn btn-secondary">
                  Staffing Solutions
                </button></a
              >
              <a href="./cloud-solution.php">
                <button type="button" class="btn btn-secondary">
                  IT Cloud Solutions
                </button></a
              >
            </center>
          </div>
          <div class="modal-footer">
            <!-- <img src="assets/images/logo.png" class="logohome" /> -->
          </div>
        </div>
      </div>
    </div>
    <script src="assets/particles.js-master/particles.js"></script>
    <script src="assets/particles.js-master/demo/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Trigger the modal -->
    <script>
      $(document).ready(function () {
        $("#fixedModal").modal("show");
      });
    </script>
  </body>
</html>
