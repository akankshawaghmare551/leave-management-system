<?php include '../templates/admin-header.php'; ?><?php include '../templates/admin-header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Staff Management</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#add">
                Add Staff
              </button>
              <!-- Table with stripped rows -->
              <table class="table datatable ">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>department</th>
                    <th>action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>akanksha anil waghmare</td>
                    <td>aw@gmail.com</td>
                    <td>9119418522</td>
                    <td>computer</td>
                    <td>
                        <button type="button" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#view">view</button>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update">Update</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                    </td>
                  </tr>
                  <tr>
                  <td>2</td>
                    <td>anuksha dinkar shingate</td>
                    <td>aw@gmail.com</td>
                    <td>9119418522</td>
                    <td>electrical</td>
                    <td>
                        <button type="button" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#view">view</button>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update">Update</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                    </td>
                  </tr>
                  <tr>
                  <td>3</td>
                    <td>diksha patil</td>
                    <td>aw@gmail.com</td>
                    <td>9119418522</td>
                    <td>civil</td>
                    <td>
                        <button type="button" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#view">view</button>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update">Update</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- add depertmanet modal -->
  <div class="modal fade" id="add" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <!-- Vertical Form -->
            <form class="row g-3 p-3">
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="department_name" name="department_name">
                </div>
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="department_name" name="department_name">
                </div>
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="department_name" name="department_name">
                </div>
                
                
            </form><!-- Vertical Form -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Add</button>
        </div>
        </div>
    </div>
</div>


  <!-- update depertmanet modal -->
  <div class="modal fade" id="update" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <!-- Vertical Form -->
            <form class="row g-3 p-3">
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Staff Name</label>
                    <input type="text" class="form-control" id="department_name" name="department_name">
                </div>
            </form><!-- Vertical Form -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-warning">Update</button>
        </div>
        </div>
    </div>
</div>


  <!-- delete depertmanet modal -->
  <div class="modal fade" id="delete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <!-- Vertical Form -->
            <form class="row g-3 p-3">
                <div class="col-12">
                    <h5>Are you sure? Do you want to delete ? </h5>
                </div>
            </form><!-- Vertical Form -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </div>
        </div>
    </div>
</div>



<!-- End Vertically centered Modal-->