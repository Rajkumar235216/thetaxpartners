@include('header');
  <!--/ Nav End /-->

    <!--/ Carousel Star 
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/import-export-slide2.jpg" alt="Import-Export Services">
    </div>
  / Carousel end /-->



 <!--/ Intro Single star /-->
  <section class="intro-single left-color">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Import-Export Services</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Import-Export
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
<!--/ Intro Single End /-->

<!--/ Import-export services list start /-->
<div class="container section-t8 left-color">
<div class="row">
  <div class="col-md-4 col-sm-12" id ="services">
    <div class="list-group" id="list-tab" role="tablist">
      <h6 class="text-center" id ="service_description">Select one Service</h6>
      <a class="list-group-item list-group-item-action active" id="list-IEC-list" data-toggle="list" href="#list-IEC" role="tab" aria-controls="IEC">Issuance, Modification and Surrender(IEC)</a>
      <a class="list-group-item list-group-item-action" id="list-Shipping-list" data-toggle="list" href="#list-Shipping" role="tab" aria-controls="Shipping">Shipping/ Bill of Lading</a>
      <a class="list-group-item list-group-item-action" id="list-FIRC-list" data-toggle="list" href="#list-FIRC" role="tab" aria-controls="list-FIRC">FIRC/ BIRC</a>
      <a class="list-group-item list-group-item-action" id="list-Export-list" data-toggle="list" href="#list-Export" role="tab" aria-controls="list-Export">Export Realisation</a>
      <a class="list-group-item list-group-item-action" id="list-Notice-list" data-toggle="list" href="#list-Notice" role="tab" aria-controls="Notice">Any Notice - RBI/ DGFT</a>
      <a class="list-group-item list-group-item-action" id="list-Consultancy-list" data-toggle="list" href="#list-Consultancy" role="tab" aria-controls="Consultancy">Legal Consultancy</a>
      <a class="list-group-item list-group-item-action" id="list-Disinvestment-list" data-toggle="list" href="#list-Disinvestment" role="tab" aria-controls="Disinvestment">Disinvestment in any country</a>
      <a class="list-group-item list-group-item-action" id="list-Others-list" data-toggle="list" href="#list-Others" role="tab" aria-controls="Notices">Others</a>

    </div>
  </div>
  <div class="col-md-8  col-sm-12" id ="services">
    <div class="tab-content" id="nav-tabContent">
      <h6 class="text-center" id ="service_description">Description</h6>
      <div class="tab-pane fade show active" id="list-IEC" role="tabpanel" aria-labelledby="list-IEC-list">The
                    first requirement before you start an import/ export business in India is to obtain an IEC. An IEC
                    is necessary for the import/export of goods. In case the import/export is of services or technology,
                    IEC is required in only limited circumstances, when import/export is in 'specified services' or
                    'specified technologies', i.e. services or technologies in which international trade is restricted
                    by the Government of India as they pertain to national security, such as dealing in nuclear weapons,
                    automatic guns, etc.
       
      <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/import-export/iec" role="button" >
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
      


      <div class="tab-pane fade" id="list-Shipping" role="tabpanel" aria-labelledby="list-Shipping-list"><p>If we search the meaning of the term “bill”, it is defined as a printed or written statement of the cost for the goods or services delivered or to be delivered. The term “ lade” means to put the cargo onto a ship or other form of goods carrier.</p><p>Thus, a bill of lading in shipping is a record of the traded goods which have been received on board. It is a document that establishes an agreement between a shipper and a transportation company for the transportation of goods. Transportation Company (carrier) issues these records to the shipper.</p>
      <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/import-export/bill-of-lading" role="button" >
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

      <div class="tab-pane fade" id="list-FIRC" role="tabpanel" aria-labelledby="list-FIRC-list">FIRC (Foreign Inward Remittance Certificate) is a document that is issued by a bank to their customers
            against all the inward remittances entering India. It can be an advance payment against export proceeds,
            ocean or airfreight, or remuneration or wages under consultancy charges or for any other reasons.
       <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/import-export/firc-birc" role="button" >
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

      <div class="tab-pane fade" id="list-Export" role="tabpanel" aria-labelledby="list-Export-list">Presently value of the goods or software exports made by the exporters is required to be realized fully and repatriated to the country within a period of 9 months from the date of exports.
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/import-export/export-realisation" role="button" >
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

        <div class="tab-pane fade" id="list-Notice" role="tabpanel" aria-labelledby="list-Notice-list">No Data Available.
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/import-export/notices" role="button" >
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

        <div class="tab-pane fade" id="list-Consultancy" role="tabpanel" aria-labelledby="list-Consultancy-list">No Data Available.
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/import-export/consultancy" role="button" >
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

        <div class="tab-pane fade" id="list-Disinvestment" role="tabpanel" aria-labelledby="list-Disinvestment-list"><p> Disinvestment means sale or liquidation of assets by the
            government, usually Central and state public sector enterprises, projects, or other fixed assets. The
            government undertakes disinvestment to reduce the fiscal burden on the exchequer, or to raise money for
            meeting specific needs, such as to bridge the revenue shortfall from other regular sources. In some cases,
            disinvestment may be done to privatise assets. However, not all disinvestment is privatisation. Some of the
            benefits of disinvestment are that it can be helpful in the long-term growth of the country; it allows the
            government and even the company to reduce debt. Disinvestment allows a larger share of PSU ownership in the
            open market, which in turn allows for the development of a strong capital market in India.</p>
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/import-export/disinvestment" role="button" >
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
            <a class="btn btn-primary"  href="/import-export/others" role="button" >
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
<!--/ Import-Export services list stop /-->

  <!--/ footer Star /-->
@include('footer');