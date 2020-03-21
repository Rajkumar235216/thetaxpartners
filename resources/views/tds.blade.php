  @include('header');
  <!--/ Nav End /-->

    <!--/ Carousel Star /-->
     <div class="carousel-item active">
      <img class="d-block w-100" src="img/TDS-slide.png" alt="TDS Services">
    </div>
  <!--/ Carousel end /-->


  <!--/ Intro Single star /-->
  <section class="intro-single left-color">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">TDS Services</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
               TDS
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

<!--/ tds services list start /-->
<div class="container section-t8 left-color">
<div class="row">
  <div class="col-md-4 col-sm-12" id ="services">
    <div class="list-group" id="list-tab" role="tablist">
      <h6 class="text-center" id ="service_description">Select one Service</h6>
      <a class="list-group-item list-group-item-action active" id="list-Returns-list" data-toggle="list" href="#list-Returns" role="tab" aria-controls="Returns">TDS Returns</a>
      <a class="list-group-item list-group-item-action" id="list-Refunds-list" data-toggle="list" href="#list-Refunds" role="tab" aria-controls="Refunds">TDS Refunds</a>
      <a class="list-group-item list-group-item-action" id="list-Certificates-list" data-toggle="list" href="#list-Certificates" role="tab" aria-controls="list-Certificates">TDS Certificates - Form 16/16A/16B</a>
      <a class="list-group-item list-group-item-action" id="list-Justification-list" data-toggle="list" href="#list-Justification" role="tab" aria-controls="list-Justification">Justification Report</a>
      <a class="list-group-item list-group-item-action" id="list-Corrections-list" data-toggle="list" href="#list-Corrections" role="tab" aria-controls="Corrections">TDS Corrections</a>
      <a class="list-group-item list-group-item-action" id="list-Consultancy-list" data-toggle="list" href="#list-Consultancy" role="tab" aria-controls="Consultancy">Legal Consultancy</a>
      <a class="list-group-item list-group-item-action" id="list-Waiver-list" data-toggle="list" href="#list-Waiver" role="tab" aria-controls="Waiver">Waiver Certificate under 197( Form 13)</a>
      <a class="list-group-item list-group-item-action" id="list-Others-list" data-toggle="list" href="#list-Others" role="tab" aria-controls="OthersOthers">Others</a>


    </div>
  </div>
  <div class="col-md-8  col-sm-12" id ="services">
    <div class="tab-content" id="nav-tabContent">
      <h6 class="text-center" id ="service_description">Description</h6>
      <div class="tab-pane fade show active" id="list-Returns" role="tabpanel" aria-labelledby="list-Returns-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, cupiditate. Iure, numquam. Laboriosam magni corporis provident temporibus totam animi dicta. Aut dolore deserunt at adipisci, distinctio totam placeat quis minima?.
       
      <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/tds/returns" role="button" >
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
      


      <div class="tab-pane fade" id="list-Refunds" role="tabpanel" aria-labelledby="list-Refunds-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima suscipit sunt ex, non laboriosam ipsa eligendi porro aliquid dolorum reiciendis explicabo. Blanditiis reprehenderit amet, sit quasi asperiores iusto a temporibus!
      <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/tds/refunds" role="button" >
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

      <div class="tab-pane fade" id="list-Certificates" role="tabpanel" aria-labelledby="list-Certificates-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dolores quidem adipisci doloremque culpa illo eligendi perferendis, iure nam unde harum at quisquam exercitationem nemo quaerat dicta, eaque veritatis odio.
       <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/tds/certificates" role="button" >
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

      <div class="tab-pane fade" id="list-Justification" role="tabpanel" aria-labelledby="list-Justification-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary" href="/tds/justification" role="button" >
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

        <div class="tab-pane fade" id="list-Corrections" role="tabpanel" aria-labelledby="list-Corrections-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary" href="/tds/corrections" role="button" >
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
            <a class="btn btn-primary"  href="/tds/consultancy" role="button" >
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

        <div class="tab-pane fade" id="list-Waiver" role="tabpanel" aria-labelledby="list-Waiver-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/tds/waiver-certificate" role="button" >
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
            <a class="btn btn-primary"  href="/tds/others" role="button" >
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
<!--/ tds services list stop /-->

  <!--/ footer Star /-->
 @include('footer');