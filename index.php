<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Address Book</title>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <h1>Address Book!</h1>
        </div>
        <div class="col-sm">
          <form>
            <div class="form-row">
              <div class="col">
                <input name="names" id="search" type="text" class="form-control" placeholder="Search..." />
              </div>
              <!-- <div class="col">
                <button name="search-submit" class="btn btn-info">Search</button>
              </div> -->
            </div>
          </form>
        </div>
        <div class="col-sm">
          <button id="addForm" type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal" >Add Contact</button>
          <div id="addModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Contact:</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="addContact" action="#" method="POST">
                    <!-- <div class="form-row">
                      <div class="col-md-6">
                        <select name="">
                          <option value="family">Family</option>
                          <option value="friends">Friends</option>
                          <option value="colleague">Colleague</option>
                        </select>
                      </div>
                    </div> -->
                    <div class="form-row">
                      <div class="col">
                        <input name="first_name" type="text" class="form-control" placeholder="First name"/>
                      </div>
                      <div class="col">
                        <input name="last_name" type="text" class="form-control" placeholder="Last name"/>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col">
                        <input name="address_1" type="text" class="form-control" placeholder="Address line 1"/>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col">
                        <input name="address_2" type="text" class="form-control" placeholder="Address line 2"/>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-4">
                        <input name="postcode" type="text" class="form-control" placeholder="Postcode"/>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6">
                        <input name="city" type="text" class="form-control" placeholder="City"/>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6">
                        <input name="province" type="text" class="form-control" placeholder="Province"/>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-10">
                        <input name="phone" type="text" class="form-control" placeholder="Phone"/>
                      </div>
                    </div>
                    <!-- <div class="form-row">
                      <div class="col">
                        <input name="notes" style="width: 100%;" type="textarea" class="form-control text-wrap" placeholder="Notes"/>
                      </div>
                    </div> -->
                    <input id="submit" value="Submit" name="submit" type="submit" class="btn btn-info"/>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Image Loader -->
      <div id="loaderImage">
          <img src="img/loader.gif">
      </div>

      <!-- Main Content  -->
      <div id="pageContent"></div>


    </div>
 

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="/js/index.js"></script>
  </body>

</html>