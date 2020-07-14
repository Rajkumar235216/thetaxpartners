<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EstateAgency Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('folderstyles');
    @include('header2');
    <!--/ Nav End /-->



    <!--/ Intro Single start /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Tax-Returns</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="income-tax">Income-Tax</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Tax-Return
                            </li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/  content start /-->
    <div class="container section-t8 left-color">
        <h1 style="text-align: center;">Justification Report – TDS Filing</h1>
        <p>Justification report is submitted while processing the statement filed by the deductor during a particular
            quarter of the financial year. Justification report consists of various defaults or errors identified by the
            Income Tax Department when a TDS deductor files the statement. The detailed information regarding the statement is presented in the report.
            The following details regarding the statement are furnished in the justification report:</p>
        <ul>
            <li>Defaults and errors that need to be rectified</li>
            <li>Details on Payment of the necessary Interest, Fee, and dues</li>
            <li>Clarifications on the errors identified</li>
        </ul>
        <p>The Justification reports provide evidence justifying a course of action that solves a problem or improves
            performance. They provide solutions that result in financial savings or gains and prevent confusions in
            transactions. To create an effective report, the taxpayer should produce convincing arguments and supporting
            evidence to back the changes which are being proposed. Maintaining the transparency of the complete process
            is necessary.</p>
        <h2><strong>Submission of Justification Report</strong></h2>
        <p>The Justification Report can be accessed through the following URL: www.tdscpc.gov.in.</p>
        <p>Deductors can also login into TRACES and thereafter follow the procedure mentioned below:</p>
        <ul>
            <li>Go to the Default tab.</li>
            <li>Select “Request for Justification Report Download”</li>
            <li>Select financial year, Quarter, Form Type and Click on go.</li>
            <li>If the status is available, then select the row and click on the download manager.</li>
        </ul>
        <p>This document consists of detailed information about the various defaults/errors that need to be rectified by
            the deductor by filing correction statements and payment of the necessary interest/fees/other dues.</p>
        <h2><strong>Validation Screen</strong></h2>
        <p>The authentication code is generated when you clear validation details for a statement for certain
            functionalities such as Download Form 16 / 16A, Download NSDL ConsoFile, Download Justification Report, etc.
            The Validation Screen requires details to be filled based on the following criteria:</p>
        <ul>
            <li>Validation will be bypassed for the same statement within the same session</li>
            <li>Token Number must be of the statement of the FY, Quarter and Form Type displayed</li>
            <li>on the screen</li>
            <li>CIN details must be entered for the challan which is deposited and mentioned in the</li>
            <li>The statement corresponding to the FY, Quarter and Form Type mentioned above</li>
            <li>Transfer Voucher details to be entered for government deductor</li>
            <li>The amount should be entered in two decimal places (e.g., 1234.56)</li>
        </ul>
        <h3><strong>Requisites for Validation Screen</strong></h3>
        <p>Before moving forward with filling up the details on the validation screen, few aspects should be considered
            to ensure the authenticity of the justifications made in the report. Maximum of three distinct PANs and the
            corresponding amounts must be entered.</p>
        <ul>
            <li>If there are more than three such combinations in the challan, the user can enter any three</li>
            <li>If there are less than three such combinations in the challan, the user must enter all of them, either
                one or two</li>
            <li>PAN mentioned must be that for which payment has been done using the Challan / Transfer Voucher
                mentioned on the screen</li>
        </ul>
        <h2><strong>Justification report on TDS Filing</strong></h2>
        <p>A TDS Return is a quarterly statement filed by the deductor to the Income Tax Department. It is mandatory for
            every deductor to file a TDS return for furnish the complete details on the TDS deduction carried out. The
            deductor logs in to the TRACES portal “As Depositor” using the following:</p>
        <ul>
            <li>Username and password</li>
            <li>TAN for deductor</li>
        </ul>
        <p>On authenticating the deductor, the taxpayer will then process the complete report and prepare a
            justification report.


    </div>

    <!--/  content start /-->









    <!--/ footer Start /-->
    @include('footer');
