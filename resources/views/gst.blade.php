@include('header');
  <!--/ Nav End /-->

    <!--/ Carousel Star /-->
     <div class="carousel-item active">
      <img class="d-block w-100" src="img/gst-slide.jpeg" alt="Goods and Services (gst) Services">
    </div>
  <!--/ Carousel end /-->



  <!--/ Intro Single star /-->
  <section class="intro-single left-color">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">GST Services</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                GST
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

<!--/ gst services list start /-->
<div class="container section-t8 left-color">
<div class="row">
  <div class="col-md-4 col-sm-12" id ="services">
    <div class="list-group" id="list-tab" role="tablist">
      <h6 class="text-center" id ="service_description">Select one Service</h6>
      <a class="list-group-item list-group-item-action active" id="list-NewRegistration-list" data-toggle="list" href="#list-NewRegistration" role="tab" aria-controls="NewRegistration">New/Amendment of Registration</a>
      <a class="list-group-item list-group-item-action" id="list-GSTCancellation-list" data-toggle="list" href="#list-GSTCancellation" role="tab" aria-controls="GSTCancellation">Surrender/Cancellation of GST</a>
      <a class="list-group-item list-group-item-action" id="list-returns-list" data-toggle="list" href="#list-returns" role="tab" aria-controls="list-returns">GST Returns</a>
      <a class="list-group-item list-group-item-action" id="list-refunds-list" data-toggle="list" href="#list-refunds" role="tab" aria-controls="list-refunds">GST Refunds</a>
      <a class="list-group-item list-group-item-action" id="list-EwayBill-list" data-toggle="list" href="#list-EwayBill" role="tab" aria-controls="EwayBill">E-way Bill</a>
      <a class="list-group-item list-group-item-action" id="list-Consultancy-list" data-toggle="list" href="#list-Consultancy" role="tab" aria-controls="Consultancy">Legal Consultancy</a>
      <a class="list-group-item list-group-item-action" id="list-Revocation-list" data-toggle="list" href="#list-Revocation" role="tab" aria-controls="Revocation">Revocation of Cancellation</a>
      <a class="list-group-item list-group-item-action" id="list-Notices-list" data-toggle="list" href="#list-Notices" role="tab" aria-controls="Notices">Compliances to Notices</a>
      <a class="list-group-item list-group-item-action" id="list-Cases-list" data-toggle="list" href="#list-Cases" role="tab" aria-controls="Cases">Departmental Cases/Matters</a>
      <a class="list-group-item list-group-item-action" id="list-Others-list" data-toggle="list" href="#list-Others" role="tab" aria-controls="Others">Others</a>

    </div>
  </div>
  <div class="col-md-8  col-sm-12" id ="services">
    <div class="tab-content" id="nav-tabContent">
      <h6 class="text-center" id ="service_description">Description</h6>
      <div class="tab-pane fade show active" id="list-NewRegistration" role="tabpanel" aria-labelledby="list-NewRegistration-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, cupiditate. Iure, numquam. Laboriosam magni corporis provident temporibus totam animi dicta. Aut dolore deserunt at adipisci, distinctio totam placeat quis minima?.
       
      <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/gst/registration" role="button" >
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
      


      <div class="tab-pane fade" id="list-GSTCancellation" role="tabpanel" aria-labelledby="list-GSTCancellation-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima suscipit sunt ex, non laboriosam ipsa eligendi porro aliquid dolorum reiciendis explicabo. Blanditiis reprehenderit amet, sit quasi asperiores iusto a temporibus!
      <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/gst/cancellation" role="button" >
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

      <div class="tab-pane fade" id="list-returns" role="tabpanel" aria-labelledby="list-returns-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dolores quidem adipisci doloremque culpa illo eligendi perferendis, iure nam unde harum at quisquam exercitationem nemo quaerat dicta, eaque veritatis odio.
       <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/gst/returns" role="button" >
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

      <div class="tab-pane fade" id="list-refunds" role="tabpanel" aria-labelledby="list-refunds-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/gst/refunds" role="button" >
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

        <div class="tab-pane fade" id="list-EwayBill" role="tabpanel" aria-labelledby="list-EwayBill-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary" href="/gst/e-way-bill" role="button" >
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
            <a class="btn btn-primary" href="/gst/legal-consultancy" role="button" >
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

        <div class="tab-pane fade" id="list-Revocation" role="tabpanel" aria-labelledby="list-Revocation-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary" href="/gst/revocation-cancellation" role="button" >
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

        <div class="tab-pane fade" id="list-Notices" role="tabpanel" aria-labelledby="list-Notices-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/gst/notices" role="button" >
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

        <div class="tab-pane fade" id="list-Cases" role="tabpanel" aria-labelledby="list-Cases-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/gst/cases" role="button" >
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
            <a class="btn btn-primary"  href="/gst/others" role="button" >
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
<!--/ gst services list stop /-->


  <!--/ footer Star /-->
@include('footer');