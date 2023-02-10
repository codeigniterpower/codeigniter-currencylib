  <!-- TODO: moved to currency history, this view will be for marketing -->
      <div class="col py-0 px-0">
        <div class="contain-image">
          <div class="card-deck d-flex justify-content-around  flex-wrap">
            <div class="card m-3" style="width: 300px;">
              <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
              <div class="card-body">
                <h5 class="card-title">Manager Module</h5>
                <p class="card-text">This module allows you to see the rates of your preference, and its conversion but only for current day (if the system is property configured).</p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="<?php echo site_url() . "/Currency_Manager"  ?>" class="nav-link px-0 align-middle links-menu">
                                <i class="fs-4 bi-table links-menu"></i>
                                <span class="ms-1 d-none d-sm-inline links-menu">Currency</span>  </a>
                </small>
              </div>
            </div>
            <div class="card m-3" style="width: 300px;">
              <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
              <div class="card-body">
                <h5 class="card-title">History Module</h5>
                <p class="card-text">This module allows you to review all conversion rates starting from the day you installed the module to the current day.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="<?php echo site_url() . "/Currency_History"  ?>" class="nav-link px-0 align-middle links-menu">
                                <i class="fs-4 bi-speedometer2 links-menu"></i>
                                <span class="ms-1 d-none d-sm-inline links-menu">History</span>  </a>
                </small>
              </div>
            </div>
            <div class="card m-3" style="width: 300px;">
              <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
              <div class="card-body">
                <h5 class="card-title">About Currency</h5>
                <p class="card-text">This project was born from a requirement to keep the conversions between currencies synchronized in an intranet, but open source.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="https://gitlab.com/codeigniterpower/codeigniter-currencylib" class="nav-link px-0 align-middle links-menu">
                                <i class="fs-4 bi-people links-menu"></i>
                                <span class="ms-1 d-none d-sm-inline links-menu">Our Project</span>  </a>
                </small>
              </div>
            </div>
          </div>
        </div>    
        <br>

        <section class="descriptions-contains">
                <!-- <div class="whoUs" style="width: 95%; margin: auto;">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus odit id, quidem temporibus distinctio quae consequuntur provident autem perferendis! Distinctio delectus enim provident asperiores obcaecati recusandae commodi molestias at ex!</p>
                </div> -->
                <div class="documentation">
                  <div class="contain-toggle">
                    <button class="btn text-start btn-outline-success w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                      Get
                    </button>
                  </div>
                  <div>
                    <div class="collapse collapse-horizontal" id="collapse1">
                      <div class="card card-body">
                        This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                      </div>
                    </div>
                  </div>

                  <div class="contain-toggle">
                    <button class="btn text-start btn-outline-success w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                      Get
                    </button>
                  </div>
                  <div >
                    <div class="collapse collapse-horizontal" id="collapse2">
                      <div class="card card-body">
                        This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                      </div>
                    </div>
                  </div>

                  <div class="contain-toggle">
                    <button class="btn text-start btn-outline-success w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                      GET
                    </button>
                  </div>
                  <div >
                    <div class="collapse collapse-horizontal" id="collapse3">
                      <div class="card card-body">
                        This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                      </div>
                    </div>
                  </div>
                  <div class="contain-toggle">
                    <button class="btn text-start btn-outline-success w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                      POST                      
                    </button>
                  </div>
                  <div >
                    <div class="collapse collapse-horizontal" id="collapse4">
                      <div class="card card-body">
                        This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                      </div>
                    </div>
                  </div>
                  <div class="contain-toggle">
                    <button class="btn text-start btn-outline-success w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                      UPDATE
                    </button>
                  </div>
                  <div class="contain-toggle">
                    <div class="collapse collapse-horizontal" id="collapse5">
                      <div class="card card-body">
                        This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                      </div>
                    </div>
                  </div>
                </div>
                <br>
        </section>

        
        <div class="fab-container position-fixed">
          <div class="fab shadow">
            <div class="fab-content">
              <span class="material-icons">Contact us</span>
            </div>
          </div>
          <div class="sub-button shadow">
            <a href="https://gitlab.com/groups/codeigniterpower/" target="_blank">
              <span class="material-icons"><i class="bi bi-envelope"></i></span>
            </a>
          </div>
      </div>

      </div>
        
    </div>  
      <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
        echo link_js("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", 'integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"  crossorigin="anonymous"');
      ?>
  </body>
</html>
