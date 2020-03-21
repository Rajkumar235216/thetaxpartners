@include('header');
  <!--/ Nav End /-->

    <!--/ Carousel Star /-->
  <div class="carousel-item active">
      <img class="d-block w-100 " src="img/income-tax2-slide.png" alt="Income tax Services">
    </div>
  <!--/ Carousel end /-->



  <!--/ Intro Single star /-->
  <section class="intro-single left-color">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Income Tax Services</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Income Tax
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

<!--/ income tax services list start /-->
<div class="container section-t8 left-color">
<div class="row">
  <div class="col-md-4 col-sm-12" id ="services">
    <div class="list-group" id="list-tab" role="tablist">
      <h6 class="text-center" id ="service_description">Select one Service</h6>
      <a class="list-group-item list-group-item-action active" id="list-TaxReturn-list" data-toggle="list" href="#list-TaxReturn" role="tab" aria-controls="TaxReturn">Tax Return of various entities</a>
      <a class="list-group-item list-group-item-action" id="list-Scruitiny-list" data-toggle="list" href="#list-Scruitiny" role="tab" aria-controls="Scruitiny">Scruitiny Assessment</a>
      <a class="list-group-item list-group-item-action" id="list-142-list" data-toggle="list" href="#list-142" role="tab" aria-controls="142">Response of 142(1)</a>
      <a class="list-group-item list-group-item-action" id="list-143-list" data-toggle="list" href="#list-143" role="tab" aria-controls="143">Response of 143(1)</a>
      <a class="list-group-item list-group-item-action" id="list-Refunds-list" data-toggle="list" href="#list-Refunds" role="tab" aria-controls="Refunds">Tax Refunds</a>
      <a class="list-group-item list-group-item-action" id="list-Consultancy-list" data-toggle="list" href="#list-Consultancy" role="tab" aria-controls="Consultancy">Legal Consultancy</a>
      <a class="list-group-item list-group-item-action" id="list-139-list" data-toggle="list" href="#list-139" role="tab" aria-controls="139">Response of Defective Returns 139(9)</a>
      <a class="list-group-item list-group-item-action" id="list-Rectification-list" data-toggle="list" href="#list-Rectification" role="tab" aria-controls="Rectification">Rectification under 154</a>
      <a class="list-group-item list-group-item-action" id="list-Forms-list" data-toggle="list" href="#list-Forms" role="tab" aria-controls="Forms">Various Forms like form 15CA, form 10BA</a>
      <a class="list-group-item list-group-item-action" id="list-CIT-list" data-toggle="list" href="#list-CIT" role="tab" aria-controls="CIT">CIT appeals under 250(4)</a>
      <a class="list-group-item list-group-item-action" id="list-EAssessment-list" data-toggle="list" href="#list-EAssessment" role="tab" aria-controls="EAssessment">E Assessment</a>
      <a class="list-group-item list-group-item-action" id="list-Trust-list" data-toggle="list" href="#list-Trust" role="tab" aria-controls="Trust">Trust under 12A/12AA (809)</a>
      <a class="list-group-item list-group-item-action" id="list-Others-list" data-toggle="list" href="#list-Others" role="tab" aria-controls="Others">Others</a>


    </div>
  </div>
  <div class="col-md-8  col-sm-12" id ="services">
    <div class="tab-content" id="nav-tabContent">
      <h6 class="text-center" id ="service_description">Description</h6>
      <div class="tab-pane fade show active" id="list-TaxReturn" role="tabpanel" aria-labelledby="list-TaxReturn-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, cupiditate. Iure, numquam. Laboriosam magni corporis provident temporibus totam animi dicta. Aut dolore deserunt at adipisci, distinctio totam placeat quis minima?.
       
      <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/income-tax/tax-return" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
      </div>
      <!--  embedded collapsible buttons stop -->
      </div>
      


      <div class="tab-pane fade" id="list-Scruitiny" role="tabpanel" aria-labelledby="list-Scruitiny-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima suscipit sunt ex, non laboriosam ipsa eligendi porro aliquid dolorum reiciendis explicabo. Blanditiis reprehenderit amet, sit quasi asperiores iusto a temporibus!
      <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/income-tax/scruitiny-assessment" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
         Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
      </div>
      <!--  embedded collapsible buttons stop -->
      </div>

      <div class="tab-pane fade" id="list-142" role="tabpanel" aria-labelledby="list-142-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dolores quidem adipisci doloremque culpa illo eligendi perferendis, iure nam unde harum at quisquam exercitationem nemo quaerat dicta, eaque veritatis odio.
       <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary" href="/income-tax/response-142(1)" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
      </div>
      <!--  embedded collapsible buttons stop -->
      </div>

      <div class="tab-pane fade" id="list-143" role="tabpanel" aria-labelledby="list-143-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/income-tax/response-143(1)" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
    </div>
    <!--  embedded collapsible buttons stop -->
  </div>

        <div class="tab-pane fade" id="list-Refunds" role="tabpanel" aria-labelledby="list-Refunds-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/income-tax/tax-refunds" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
    </div>
    <!--  embedded collapsible buttons stop -->
  </div>

        <div class="tab-pane fade" id="list-Consultancy" role="tabpanel" aria-labelledby="list-Consultancy-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary" href="/income-tax/legal-consultancy" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
    </div>
    <!--  embedded collapsible buttons stop -->
  </div>

        <div class="tab-pane fade" id="list-139" role="tabpanel" aria-labelledby="list-139-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/income-tax/defective-return" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
    </div>
    <!--  embedded collapsible buttons stop -->
  </div>

        <div class="tab-pane fade" id="list-Rectification" role="tabpanel" aria-labelledby="list-Rectification-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/income-tax/rectification-154" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
    </div>
    <!--  embedded collapsible buttons stop -->
  </div>

        <div class="tab-pane fade" id="list-Forms" role="tabpanel" aria-labelledby="list-Forms-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/income-tax/various-forms" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
    </div>
    <!--  embedded collapsible buttons stop -->
  </div>

          <div class="tab-pane fade" id="list-CIT" role="tabpanel" aria-labelledby="list-CIT-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary" href="/income-tax/cit-appeals" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
    </div>
    <!--  embedded collapsible buttons stop -->
  </div>


          <div class="tab-pane fade" id="list-EAssessment" role="tabpanel" aria-labelledby="list-EAssessment-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/income-tax/e-assessment" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
    </div>
    <!--  embedded collapsible buttons stop -->
  </div>

          <div class="tab-pane fade" id="list-Trust" role="tabpanel" aria-labelledby="list-Trust-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/income-tax/trust" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
    </div>
    <!--  embedded collapsible buttons stop -->
  </div>

          <div class="tab-pane fade" id="list-Others" role="tabpanel" aria-labelledby="list-Others-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/income-tax/others" role="button" >
            Read More
        </a>&nbsp;
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
              <!--/ Equiry form start  /-->

              @include('form')
            <!--/ Equiry form end  /--> 
         </div>
    </div>
    <!--  embedded collapsible buttons stop -->
  </div>


    </div>
  </div>
</div>
</div>
<!--/ income tax services list stop /-->

  <!--/ footer Star /-->
@include('footer');