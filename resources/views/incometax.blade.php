@include('header');
  <!--/ Nav End /-->

    <!--/ Carousel Star /
  <div class="carousel-item active">
      <img class="d-block w-100 " src="img/income-tax2-slide.png" alt="Income tax Services">
    </div>
  / Carousel end /-->



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
      <div class="tab-pane fade show active" id="list-TaxReturn" role="tabpanel" aria-labelledby="list-TaxReturn-list"><p>In India, there are two types of taxes one is direct tax which is directly levied upon the income of the
            individual and another is indirect tax which is levied indirectly upon an individual. Example of direct tax
            is income tax and of indirect tax is Goods and Services Tax, service tax etc.</p>
        <p>Every individual who receives income in India is subject to income tax under the Income Tax Act, 1961. Under
            Income Tax Act there can be income from 5 different heads which are Income from salary, house property,
            capital gains, business and profession and other sources.Income of individuals, Hindu undivided family,
            association of person, body of individuals firms and companies are taxed under the Income tax act.</p>
       
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
      


      <div class="tab-pane fade" id="list-Scruitiny" role="tabpanel" aria-labelledby="list-Scruitiny-list">Scrutiny Assessment is an assessment of the income tax return by giving a chance to the assessee to
                substantiate the incomes, losses, expenses, deductions, etc which are claimed in the tax return with
                proof.
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

      <div class="tab-pane fade" id="list-142" role="tabpanel" aria-labelledby="list-142-list"> <p>This notice is issued to the assessee:</p>
                        <ol>
                            <li>to file income tax return if the same is not filed within the time limit specified.</li>
                            <li>to produce specific accounts and documents such as sales register, purchase register,
                                voucher, receipts / proof of deductions availed, invoices of expenses made etc.</li>
                            <li>to produce other details and documents as the Assessing Officer thinks fit.</li>
                        </ol>
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

      <div class="tab-pane fade" id="list-143" role="tabpanel" aria-labelledby="list-143-list">Intimation u/s 143(1) is a summary of the details which you have submitted to the tax department and
                    the details which department has considered while processing your return. Basically, the intimation
                    u/s 143(1) contains the following information:</p>
                <ul>
                    <li> (a) Permanent Details of assessee like name, address etc</li>
                    <li> (b) Income Tax Return filing details like acknowledgement number, filing date etc </li>
                    <li> (c) Communication reference number</li>
                    <li> (d) Refund sequence number </li>
                    <li> (c) Tax Calculation as provided by you in the Return of Income</li>
                    <li> (d) Tax as Computed under section 143(1) {i.e. As per Department}</li>
                </ul>
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

        <div class="tab-pane fade" id="list-Refunds" role="tabpanel" aria-labelledby="list-Refunds-list">Income Tax refund arises in case of a mismatch between the tax amount paid and the actual payable amount. If
            the amount paid is higher than the actual amount payable, a refund is initiated. The Form 30 is used for the
            same purpose.
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

        <div class="tab-pane fade" id="list-Consultancy" role="tabpanel" aria-labelledby="list-Consultancy-list">No Data Available.
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

        <div class="tab-pane fade" id="list-139" role="tabpanel" aria-labelledby="list-139-list"> It often happens that while filing income tax returns we omit things or commit some mistakes. These
            mistake(s) make your return “defective” and you’re issued a notice of defective return u/s 139(9). Section
            139(9) of the Income Tax Act, 1961 states that when a return is found defective, the A.O. gives you a period
            of 15 days to correct the mistake. The return can be considered defective for one or many reasons as stated
            below.
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

        <div class="tab-pane fade" id="list-Rectification" role="tabpanel" aria-labelledby="list-Rectification-list">Income Tax Act provides for rectification of mistakes under Section 154. It is a rectification of mistake apparent from records. Orders issued under Sections 143(1), 200A (1) and 206CB (1) can be rectified. However, only those mistakes can be rectified that are apparent from the record. Section 143(1) deals with summary assessment; it is a notice issued post-filing of return. Section 200A (1) and 206CB (1) deal with intimations issued for error in TDS and TCS statements. This rectification of mistakes shall be done only after a return has been filed by the assessee; such return has been processed and an intimation is received by the taxpayer and such intimation has errors or mistake.
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

        <div class="tab-pane fade" id="list-Forms" role="tabpanel" aria-labelledby="list-Forms-list"><p>Other than basic Income tax Return forms ( ITR 1 / 2 / 3 / 4 / 5 / 6 / 7 ) and Forms for Audit Reports (Form 3CA-3CB/CD, 10B, 3CEB), the Income 
tax Department has notified various "other Income tax Forms" for different purposes, which are required to be filed mandatorily, if applicable. </p>
<p>At present, maximum forms can be filed / submitted online through e-filing portal of Income tax Department (www.incometaxindiaefiling.gov.in) 
except some of the forms which are still required to be filed with the Income tax Department in Physical Form. Easethebiz.com provide hassle free 
service of e-filing of all the Income tax Forms. </p>
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

          <div class="tab-pane fade" id="list-CIT" role="tabpanel" aria-labelledby="list-CIT-list">No Data Available.
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


          <div class="tab-pane fade" id="list-EAssessment" role="tabpanel" aria-labelledby="list-EAssessment-list"><p><span style="font-weight: 400;">In the Union Budget speech 2019-20, the Finance Minister Nirmala Sitharaman
                announced the </span><b>faceless e-assessment scheme</b><span style="font-weight: 400;">. As per the
                scheme, </span><span style="font-weight: 400;">scrutiny assessment</span><span
                style="font-weight: 400;"> from 2019 onwards will be carried out via an electronic mode with no human
                interface. Thus, there will be no face to face interaction between the taxpayer and the Income Tax
                Department when a taxpayer’s ITR is picked for a detailed scrutiny. This is expected to make the process
                of scrutiny more fair and unprejudiced, thereby decreasing the chances of undesirable practices on the
                part of tax officials.</span><span id="2"></span></p>
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

          <div class="tab-pane fade" id="list-Trust" role="tabpanel" aria-labelledby="list-Trust-list">Section 12A registration is one time exemption obtained by most Trusts, right after incorporation to be exempted from paying income tax. Trusts and NGOs having 12A registration enjoy exemption from paying income tax on the surplus income of the Trust or NGO. Income tax exemption is available for all <a href="https://taxguru.in/income-tax/taxation-of-non-profit-organisations-chapter-vi-under-the-revised-direct-tax-code.html" target="_blank" rel="noopener noreferrer"><strong>non-profit NGOs</strong></a>. Hence, it is important for all Trusts, NGOs and other Not-for-Profit organizations to be aware of Section 12A of Income Tax Act and obtain the same, soon after incorporation of the Trust or NGO.
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

          <div class="tab-pane fade" id="list-Others" role="tabpanel" aria-labelledby="list-Others-list">No Data Available.
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