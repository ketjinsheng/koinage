<div class="container-home">
    <div class="navbar">
        <div class="navbar-left">
            <div class="logo-box">
                <div><img class="logo-icon" src="{{URL::asset('/image/export/logokoinage.png')}}" alt="logo"></div>
            </div>
           
        </div>

    </div>   


        <div class="container">
            <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:150px">
                <div><a><img class="logo1" src="{{URL::asset('/image/export/dash.png')}}" alt="dash.png" style="width:auto">Dashboard   </a></div>
                {{-- <a href="#" class="w3-bar-item w3-button">Dashboard</a>  --}}
                
                <div class="w3-dropdown-hover">
                  <button class="w3-button">Merchant
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="w3-dropdown-content w3-bar-block">
                    <a href="#" class="w3-bar-item w3-button">Orders</a>
                    <a href="#" class="w3-bar-item w3-button">Withdrawals</a>
                    <a href="#" class="w3-bar-item w3-button">Referrals</a>
                  </div>
                </div> 
                <a href="#" class="w3-bar-item w3-button">Wallet</a> 
                <a href="#" class="w3-bar-item w3-button">Account</a> 
                <a href="#" class="w3-bar-item w3-button">History</a> 
                <a href="#" class="w3-bar-item w3-button">Log Out</a> 
              </div>
              
              <div style="margin-left:30%">
              
              <div class="w3-container">
              <h2>Configs</h2>
              <table id="productTable"
        class="table table-bordered
               table-condensed table-striped">
  <thead>
    <tr>

      {{-- <th>Edit</th> --}}
      <th>Parameter</th>
      <th>Value</th>
      
    </tr>
  </thead>
  <tbody>
      <tr>
        <td>Spent Limit</td>
        <td>1.00 USD</td>
          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Edit</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Your Spent Limit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      {{-- <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div> --}}
                      <div class="form-group">
                        <label for="message-text" class="col-form-label"></label>
                        <textarea class="form-control" id="message-text"></textarea>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div></td> 
      </tr>

      <tr>
          <td>Daily Limit</td>
          <td>3.00 USD</td>
          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Edit</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Your Spent Limit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      {{-- <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div> --}}
                      <div class="form-group">
                        <label for="message-text" class="col-form-label"></label>
                        <textarea class="form-control" id="message-text"></textarea>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div></td> 
      </tr>
  </tbody>
</table>
              <p>In this example, we have added a dropdown menu inside the sidebar.</p>
              <p>Notice the caret-down icon, which we use to indicate that this is a dropdown menu.</p>
              </div>
              
              </div>