  @include('header');
  <!--/ Nav End /-->

    <!--/ Carousel Star /
     <div class="carousel-item active">
      <img class="d-block w-100" src="img/TDS-slide.png" alt="TDS Services">
    </div>
  / Carousel end /-->


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
      <div class="tab-pane fade show active" id="list-Returns" role="tabpanel" aria-labelledby="list-Returns-list"><p><strong>Tax Deducted at Source</strong> or <strong>TDS</strong> is a source of collecting tax by Government
            of India at the time when a transaction takes place. Here, the tax is required to be deducted at the time
            money is credited to the payee’s account or at the time of payment, whichever is earlier.</p>
        <p>In case of payment of salary or life insurance policy, tax is deducted at the time of payment. The deductor
            then deposits this TDS amount to the Income Tax (I-T) department. Through TDS, some portion of your tax is
            automatically paid to the I-T department. Thus, TDS is considered as a method of reducing tax evasion.</p>
       
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
      


      <div class="tab-pane fade" id="list-Refunds" role="tabpanel" aria-labelledby="list-Refunds-list">TDS refund arises when the tax amount deducted is higher than the actual tax liability.Many a times it is seen that investment projections declared during the start of a financial year do not match with the actual investments made at the end of that year.</p><p>If there is a mismatch between the total tax deducted at the end of a financial year and the income tax you are supposed to pay for that particular year, a TDS refund arises.
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

      <div class="tab-pane fade" id="list-Certificates" role="tabpanel" aria-labelledby="list-Certificates-list"><p><strong>Form 16 meaning, Form 16A, Form 16B download:</strong> Form 16 is a crucial document for a
                    salaried individual, especially if the employer has deducted tax on income. Form 16 is essentially a
                    certificate provided by the employer to the employee showing the amount of tax deducted from the
                    salary income. When an employee files his income tax return, Form 16 helps one see how much tax has
                    already been paid, and what is due to be paid. The employers need to issue Form 16 to their
                    employees by June 15th of the financial year, following the financial year in which the salary was
                    paid, and tax was deducted.</p>
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

      <div class="tab-pane fade" id="list-Justification" role="tabpanel" aria-labelledby="list-Justification-list">Justification report is submitted while processing the statement filed by the deductor during a particular
            quarter of the financial year. Justification report consists of various defaults or errors identified by the
            Income Tax Department when a TDS deductor files the statement. The detailed information regarding the statement is presented in the report.
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

        <div class="tab-pane fade" id="list-Corrections" role="tabpanel" aria-labelledby="list-Corrections-list"><p style="text-align: justify;"><strong>The following are the some of the reasons behind for TDS corrections.</strong></p>
<p style="padding-left: 40px; text-align: justify;">&gt; Wrong PAN Number for Employee or Dedcutee update in TDS Statement</p>
<p style="padding-left: 40px; text-align: justify;">&gt; Short Deduction or Excess deduction of TDS amount</p>
<p style="padding-left: 40px; text-align: justify;">&gt; Excess or Short utilization of Challan amount</p>
<p style="padding-left: 40px; text-align: justify;">&gt; Mentioning Wrong details for LDC Number or LDC rate.</p>
<p style="padding-left: 40px; text-align: justify;">&gt; Desire to Change in Date of Deduction or Date of credit for TDS amount.</p>
<p style="padding-left: 40px; text-align: justify;">Mentioning Wrong details for Challan.</p>
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

        <div class="tab-pane fade" id="list-Consultancy" role="tabpanel" aria-labelledby="list-Consultancy-list">No Data Available.
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

        <div class="tab-pane fade" id="list-Waiver" role="tabpanel" aria-labelledby="list-Waiver-list">Income tax law provides for an option to obtain a certificate from the Assessing officer confirming
                either a lower rate of TDS compared to the rate specified under the law or a NIL rate of TDS, depending
                on facts and circumstances of each case based on the application made. Section 197 governs these
                provisions. In this article we will discuss provisions on applying for a certificate for lower deduction
                of TDS.
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

          <div class="tab-pane fade" id="list-Others" role="tabpanel" aria-labelledby="list-Others-list">No Data Available.
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