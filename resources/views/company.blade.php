@include('header');
  <!--/ Nav End /-->

    <!--/ Carousel Star
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/company-slide.jpg" alt="Company Services">
    </div>
   Carousel end /-->

  <!--/ Intro Single star /-->
  <section class="intro-single left-color">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Company Services</h1>
            <!--<span class="color-text-a">Grid Properties</span>-->
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Company
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

<!--/ company  services list start /-->
<div class="container section-t8 left-color">
<div class="row">
  <div class="col-md-4 col-sm-12" id ="services">
    <div class="list-group" id="list-tab" role="tablist">
      <h6 class="text-center" id ="service_description">Select one Service</h6>
      <a class="list-group-item list-group-item-action active" id="list-Incorporation-list" data-toggle="list" href="#list-Incorporation" role="tab" aria-controls="Incorporation">Company Incorporation</a>
      <a class="list-group-item list-group-item-action" id="list-particulars-list" data-toggle="list" href="#list-particulars" role="tab" aria-controls="particulars">Change in particulars</a>
      <a class="list-group-item list-group-item-action" id="list-Liquidtion-list" data-toggle="list" href="#list-Liquidtion" role="tab" aria-controls="list-Liquidtion">Closure/Liquidtion</a>
      <a class="list-group-item list-group-item-action" id="list-Submission-list" data-toggle="list" href="#list-Submission" role="tab" aria-controls="list-Submission">Submission/Resubmission of ROC forms</a>
      <a class="list-group-item list-group-item-action" id="list-E-filing-list" data-toggle="list" href="#list-E-filing" role="tab" aria-controls="E-filing">Annual E-filing</a>
      <a class="list-group-item list-group-item-action" id="list-Consultancy-list" data-toggle="list" href="#list-Consultancy" role="tab" aria-controls="Consultancy">Legal Consultancy</a>
      <a class="list-group-item list-group-item-action" id="list-Drafting-list" data-toggle="list" href="#list-Drafting" role="tab" aria-controls="Drafting">Legal Drafting</a>
      <a class="list-group-item list-group-item-action" id="list-Notices-list" data-toggle="list" href="#list-Notices" role="tab" aria-controls="Notices">Compliance Notice from RBI and ROC</a>
      <a class="list-group-item list-group-item-action" id="list-Sale-list" data-toggle="list" href="#list-Sale" role="tab" aria-controls="Sale">Transfer/Sale-Purchase of Companies</a>
      <a class="list-group-item list-group-item-action" id="list-Others-list" data-toggle="list" href="#list-Others" role="tab" aria-controls="Others">Others</a>

    </div>
  </div>
  <div class="col-md-8  col-sm-12" id ="services">
    <div class="tab-content" id="nav-tabContent">
      <h6 class="text-center" id ="service_description">Description</h6>
      <div class="tab-pane fade show active" id="list-Incorporation" role="tabpanel" aria-labelledby="list-Incorporation-list">Picking the right company structure for your business is as important as any other business-related activity. The right
business structure will allow your enterprise to operate efficiently and meet your required business targets. In India,
every business must register themselves as part of the mandatory legal compliance.
       
      <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/company/incorporation" role="button" >
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
      


      <div class="tab-pane fade" id="list-particulars" role="tabpanel" aria-labelledby="list-particulars-list">An Individual who is Director of the Company or the designated partner of LLP is required to have a Director Identification Number (DIN) or Designated Partner Identification Number (DPIN). The Director or Designated Partner who has been allotted DIN/DPIN are required to intimate with respect to any change in particular, change in address or any other details as mentioned in the <strong>Director Identification Number</strong> (DIN)/ Designated Partner Identification Number (DPIN), because it is not possible that the information stated while obtaining the DIN/DPIN remain the same for a lifetime. If there are changes it needs to apply for changes in DIN. Therefore in this article, we will discuss the changes in the particulars of DIN by filling the form DIR-6.
      <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/company/change-particulars" role="button" >
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

      <div class="tab-pane fade" id="list-Liquidtion" role="tabpanel" aria-labelledby="list-Liquidtion-list">The <strong>company liquidation in India</strong> refers to the process
                through which companies registered here are <strong>shut down</strong> due to various reasons. Investors
                may<strong> liquidate a company</strong> as a consequence of various <strong>economic problems and
                    debts</strong>. The<strong> liquidation procedure</strong>&nbsp;is given by the <strong>Insolvency
                    and Bankruptcy Code</strong>, which can be detailed by<strong> our team of consultants in company
                        formation in India</strong>.
       <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/company/closures" role="button" >
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

      <div class="tab-pane fade" id="list-Submission" role="tabpanel" aria-labelledby="list-Submission-list"><p>Every company is required to file the annual accounts and annual return as per The Companies Act, 2013 within 30 days and 60 days respectively from the conclusion of the Annual General Meeting. The ROC filing of annual accounts is governed under Section 129(3), 137, of The <strong>Companies Act, 2013</strong> read with Rule 12 of the Company (Accounts) Rules, 2014 and annual return is&nbsp;<strong>governed under Section 92</strong>&nbsp;of the Companies Act,2013 read with Rule 11 of the <strong>Companies (Management and Administration) Rules, 2014.</strong></p>
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/company/roc" role="button" >
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

        <div class="tab-pane fade" id="list-E-filing" role="tabpanel" aria-labelledby="list-E-filing-list"><p>Every Company registered under Companies Act is required to file their returns with the Registrar of Companies annually.
</p>
<p>Company Annual Filings refers to the filing of Audited Annual Financial Accounts of the Company along with Directors Report and Annual Return of Company with Registrar of Companies.&nbsp;These yearly filings are mandatory for every registered Company whether the Company carries on business or not.</p>
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/company/annual-filing" role="button" >
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
            <a class="btn btn-primary"  href="/company/consultancy" role="button" >
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

        <div class="tab-pane fade" id="list-Drafting" role="tabpanel" aria-labelledby="list-Drafting-list">There is a growing need among legal enterprises and law houses to optimize their operational efficiency, increase flexibility, and reduce costs by outsourcing their day-to-day tasks. Law firms usually outsource everything from legal document preparation to legal drafting services, patent searches, etc. in their quest for better efficiency. The legal process outsourcing industry will reach $8.7 billion by 2022, enabled by global service providers such as us who ensure compliance with stringent regulations and perform due diligence at every step of the way. At the same time, outsourcing legal drafting and analysis is not an easy task, as you need to find the ideal service partner who has the necessary skills and experience to handle your requirements.
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/company/drafting" role="button" >
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

        <div class="tab-pane fade" id="list-Notices" role="tabpanel" aria-labelledby="list-Notices-list">Certain Compliances are required to be made by Corporates as per Law. Non compliance of which might lead to receiving of Show Cause Notice as in asking why the compliance has not been made or why it was not done within the time frame. Show Cause Notice is sent on either Company’s Mail or&nbsp; at registered office through registered post or any other viable mode. Notice generally contains Ref No. , Date, Time, Section or provision which was violated, time limit to reply to the same etc. Not reverting to the same within the time limit allotted will lead to legal/penal action.
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/company/compliance-notices" role="button" >
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

        <div class="tab-pane fade" id="list-Sale" role="tabpanel" aria-labelledby="list-Sale-list"> <p>Shareholders are known as the owner of a
                    Private Limited Company. If a company wants to introduce new investors or any shareholder wants to
                    transfer his/her ownership then the shares of the private limited company need to be transferred. A
                    Private Limited Company cannot invite the public to subscribe to any securities of the
                    company.</p>
            <p>For transfer of shares provisions from the following resources are considered:-</p>
            <ol style="text-align: justify;">
                <li>
                    <p>Section 56 of the Companies Act,2013</span></p>
                </li>
                <li>
                    <p>Rule 11 of Companies ( Share Capital &amp; Debentures ) Rules
                            2014</span></p>
                </li>
                <li>
                    <p>Provisions given in model articles of association given in Table
                            ‘F’ of Schedule- 1</p>
                </li>
            </ol>
    <!--  embedded collapsible buttons start-->
        <br><br>
        <p>
            <a class="btn btn-primary"  href="/company/sale-purchase-transfer" role="button" >
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
            <a class="btn btn-primary"  href="/company/others" role="button" >
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
<!--/ company services list stop /-->

  <!--/ footer Star /-->
@include('footer');