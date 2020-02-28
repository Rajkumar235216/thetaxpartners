@include('header');
  <!--/ Nav End /-->

    <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Mount
                      <br> Olive Road Two</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Rino
                      <br> Venda Road Five</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Alira
                      <br> Roan Road One</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

<!--/ Intro Single star /-->

  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Accounting Services</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Accounting
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
<!--/ Intro Single End /-->


<!--/ Accounting services list start /-->
<div class="container section-t8 left-color">
<div class="row">
  <div class="col-md-4 col-sm-12">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-Book-list" data-toggle="list" href="#list-Book" role="tab" aria-controls="Book">Book Keeping - Tally, Busywin</a>
      <a class="list-group-item list-group-item-action" id="list-Financial-list" data-toggle="list" href="#list-Financial" role="tab" aria-controls="FinancialFinancial">Financial Statements</a>
      <a class="list-group-item list-group-item-action" id="list-Inventories-list" data-toggle="list" href="#list-Inventories" role="tab" aria-controls="list-Inventories">Day to Day Stock/Inventories</a>
      <a class="list-group-item list-group-item-action" id="list-Projected-list" data-toggle="list" href="#list-Projected" role="tab" aria-controls="list-Projected">Projected Financial Statements</a>
      <a class="list-group-item list-group-item-action" id="list-Provisional-list" data-toggle="list" href="#list-Provisional" role="tab" aria-controls="Provisional">Provisional Financial Statements</a>
      <a class="list-group-item list-group-item-action" id="list-Assets-list" data-toggle="list" href="#list-Assets" role="tab" aria-controls="Assets">Deferred Tax Assets/ Liability</a>
      <a class="list-group-item list-group-item-action" id="list-Others-list" data-toggle="list" href="#list-Others" role="tab" aria-controls="Others">Others</a>

    </div>
  </div>
  <div class="col-md-8  col-sm-12">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-Book" role="tabpanel" aria-labelledby="list-Book-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, cupiditate. Iure, numquam. Laboriosam magni corporis provident temporibus totam animi dicta. Aut dolore deserunt at adipisci, distinctio totam placeat quis minima?.
       
      <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary" href="/accounting/book-keeping" role="button" >
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
      


      <div class="tab-pane fade" id="list-Financial" role="tabpanel" aria-labelledby="list-Financial-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima suscipit sunt ex, non laboriosam ipsa eligendi porro aliquid dolorum reiciendis explicabo. Blanditiis reprehenderit amet, sit quasi asperiores iusto a temporibus!
      <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/accounting/financial-statements" role="button" >
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

      <div class="tab-pane fade" id="list-Inventories" role="tabpanel" aria-labelledby="list-Inventories-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dolores quidem adipisci doloremque culpa illo eligendi perferendis, iure nam unde harum at quisquam exercitationem nemo quaerat dicta, eaque veritatis odio.
       <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/accounting/stock-inventories" role="button" >
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
      <div class="tab-pane fade" id="list-Projected" role="tabpanel" aria-labelledby="list-Projected-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/accounting/projected-financial-statements" role="button" >
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

        <div class="tab-pane fade" id="list-Provisional" role="tabpanel" aria-labelledby="list-Provisional-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/accounting/provisional-financial-statements" role="button" >
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

        <div class="tab-pane fade" id="list-Assets" role="tabpanel" aria-labelledby="list-Assets-list">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde deserunt blanditiis fuga ullam rem doloribus a iure fugiat ipsum officia, totam asperiores veniam qui quia in quos amet, iusto cum!
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/accounting/deffered-taxes" role="button" >
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
            <a class="btn btn-primary"  href="/accounting/others" role="button" >
            Link with href
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
<!--/ Accounting services list stop /-->

  <!--/ footer Star /-->
@include('footer');