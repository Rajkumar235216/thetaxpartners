<section class="section-property section-t8 ">
    <div class="container ">
      <div class="row ">
        <div class="col-md-12 ">
          <div class="title-wrap d-flex ">
            <div class="title-box ">
              <h2 class="title-a">Enquiry Form</h2>
                        <span class="color-text-a"> Fill up on the basis of your requirement</span>
                        <span class="ion-ios-arrow-forward"></span>

            </div>

     
          </div>

        </div>
      </div>
     @if (Session:: has('flash_message'))
    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
    @endif
  <form method="post" class="form-a contactForm"  action="{{route('enquiry.store') }}" id="form2" name="form2" role="form">
                    {{ csrf_field() }}

  <div class="form-group row">
    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" >Name</label>
    <div class="col-sm-7" >
    <input type="text" name ="nametwo" class="form-control " id="nametwo" placeholder="Mukesh Ambani" oninput="checkName2();" >
    <div id="name2err"></div>
    
    </div>
  </div>

    <div class="form-group row">
        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" >Email</label>
          <div class="col-sm-7" >
        <input type="email" name = "email2" id="email2" class="form-control " placeholder="xyz@example.com" oninput="checkEmail2();" >
        <div id="email2err" ></div>    
  </div>
  </div>

    <div class="form-group row">
        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" >Contact Number</label>
        <div class="col-sm-7" >
        <input type="text" name = "mobile" id ="mobile" class="form-control " placeholder="9876543210" oninput="checkMobile();" >
        <div  id="mobileerr"></div>
    </div>
    </div>
  


  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-2">Service Group</label>
    <div class="col-sm-7" >
    <select class="form-control " name = "servicegrp" id="service_grp" oninput="checkServiceGrp();" >
      <option  disabled selected value >Please Select one service</option>
      <option id="income" >Income Tax</option>
      <option id="gst">GST</option>
      <option id ="tds">TDS</option>
      <option id="company">Company Matters</option>
      <option id="accounting">Accounting</option>
      <option id="import">Import/Export</option>
      <option id="others">Others</option>
    </select>
    <div id="servicegrperr"></div>
  </div>
  </div>

  <div class="form-group row">
    <label for="exampleFormControlSelect2" class="col-sm-2">Service Type</label>
     <div class="col-sm-7" >
    <select multiple class="form-control " name = "servicetype" id="service_type" oninput="checkServiceType();" >
			<option value="return">Tax Return of various entities</option>
			<option value="ScruitinyAssessment">Scruitiny Assessment</option>
			<option value="response142_1">Response of 142(1)</option>
			<option value="response143_1">Response of 143(1)</option>
			<option value="refunds">Refunds</option>
			<option value="legal_consultancy">Legal Consultancy</option>
			<option value="response_defective_returns_139_9">Response of Defective Returns 139(9)</option>
			<option value="rectification154">Rectification under 154</option>
			<option value="various_forms_15CA_10BA">Various Form like form 15CA, form 10BA</option>
			<option value="cit_appeals_250_4">CIT appeals under 250(4)</option>
			<option value="Eassessment">E Assessment</option>
			<option value="trust_12A">Trust under 12A/12AA (809)</option>
			<option value="other">Other</option>
    </select>
    <div id="servicetypeerr"></div>
  </div>
   </div>

  <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-2">Query</label>
    <div class="col-sm-7" >
    <textarea class="form-control " name="textarea" id="textarea" oninput="checkText2();" rows="3"></textarea>
    <div id="texterr"></div>
  </div>
  </div>
    <div class="form-group text-center">
      
        <button type="submit"  class="btn btn-a">Apply Now</button>
      
  </div>

</form>
    </div>
  </section>
