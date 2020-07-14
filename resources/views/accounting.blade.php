@include('header');
  <!--/ Nav End /-->

    <!--/ Carousel Star 
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/accounting-services-slide.jpeg" alt="Accounting Services">
    </div>
   Carousel end /-->



<!--/ Intro Single star /-->

  <section class="intro-single left-color">
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
  <div class="col-md-4 col-sm-12" id ="services">
    <div class="list-group" id="list-tab" role="tablist">
      <h6 class="text-center" id ="service_description">Select one Service</h6>
      <a class="list-group-item list-group-item-action active" id="list-Book-list" data-toggle="list" href="#list-Book" role="tab" aria-controls="Book">Book Keeping - Tally, Busywin</a>
      <a class="list-group-item list-group-item-action" id="list-Financial-list" data-toggle="list" href="#list-Financial" role="tab" aria-controls="FinancialFinancial">Financial Statements</a>
      <a class="list-group-item list-group-item-action" id="list-Inventories-list" data-toggle="list" href="#list-Inventories" role="tab" aria-controls="list-Inventories">Day to Day Stock/Inventories</a>
      <a class="list-group-item list-group-item-action" id="list-Projected-list" data-toggle="list" href="#list-Projected" role="tab" aria-controls="list-Projected">Projected Financial Statements</a>
      <a class="list-group-item list-group-item-action" id="list-Provisional-list" data-toggle="list" href="#list-Provisional" role="tab" aria-controls="Provisional">Provisional Financial Statements</a>
      <a class="list-group-item list-group-item-action" id="list-Assets-list" data-toggle="list" href="#list-Assets" role="tab" aria-controls="Assets">Deferred Tax Assets/ Liability</a>
      <a class="list-group-item list-group-item-action" id="list-Others-list" data-toggle="list" href="#list-Others" role="tab" aria-controls="Others">Others</a>

    </div>
  </div>
  <div class="col-md-8  col-sm-12" id ="services">
    <div class="tab-content" id="nav-tabContent">
      <h6 class="text-center" id ="service_description">Description</h6>
      <div class="tab-pane fade show active" id="list-Book" role="tabpanel" aria-labelledby="list-Book-list">Bookkeeping is a systematic record of financial transactions in the appropriate books of
            records. What it means is, whether you make a sale or purchase something, a record will be maintained of the
            transaction. This record will allow you to easily keep a track of all your transactions and will help you
            analyse how you can cut costs and reduce taxes. Bookkeeping is a function of the accounts department of a
            business. However, many small businesses do not have fully staffed and efficient accounting departments and
            require the help of external bookkeeping services. TheTaxPartners can help your business maintain its books
            through its network of CA/CSs and tax experts.
       
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
      


      <div class="tab-pane fade" id="list-Financial" role="tabpanel" aria-labelledby="list-Financial-list">Financial statements are written records that convey the business activities and the financial performance of a company. Financial statements are often audited by government agencies, accountants, firms, etc. to ensure accuracy and for tax, financing, or investing purposes.
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

      <div class="tab-pane fade" id="list-Inventories" role="tabpanel" aria-labelledby="list-Inventories-list">The days sales of inventory (DSI) is a financial ratio that indicates the average time in days that a company takes to turn its inventory, including goods that are a work in progress, into sales.
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
      <div class="tab-pane fade" id="list-Projected" role="tabpanel" aria-labelledby="list-Projected-list">Projected financial statements take into account past financial trends, market conditions, possible changes and management expectations to arrive at a future financial picture. 
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

        <div class="tab-pane fade" id="list-Provisional" role="tabpanel" aria-labelledby="list-Provisional-list">Financial statements provide companies and their owners, lenders and investors with a variety of accounting and financial information that provides insight into how a company is performing.
Provisional means that something is conditional or interim or subject to change or alteration. Provisional also means that something serves a purpose for the time being. Therefore, the provisional financial statement are one that is subject to change. A balance sheet may be provisional because a company is awaiting a final appraisal on property or equipment it owns. a balance sheet may be provisional due to pending adjustments to the net income statement that will impact retained earnings.
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

        <div class="tab-pane fade" id="list-Assets" role="tabpanel" aria-labelledby="list-Assets-list">Deferred Tax Liability (DTL) or Deferred Tax Asset (DTA) item forms an important part of your Financial Statements. This adjustment made at year-end closing of Books of Accounts affects the Income-tax outgo of your Business&nbsp;for that year&nbsp;as well as the years ahead.
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

        <div class="tab-pane fade" id="list-Others" role="tabpanel" aria-labelledby="list-Others-list">No Data Available.
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/accounting/others" role="button" >
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
<!--/ Accounting services list stop /-->

  <!--/ footer Star /-->
@include('footer');