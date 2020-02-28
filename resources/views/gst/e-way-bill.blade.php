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
                        <h1 class="title-single">E-Way Bill</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/gst">gst</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                E-Way Bill
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
        <h4>1. What is an E-Way Bill?</h4>
        E-Way Bill is an Electronic Way bill for movement of goods to be generated on the eWay Bill Portal.&nbsp;A GST
        registered person cannot transport goods in a vehicle whose value exceeds Rs. 50,000 (Single
        Invoice/bill/delivery challan) without an e-way bill that is generated on ewaybillgst.gov.in.<br>

        Alternatively, Eway bill can also be generated or cancelled through SMS, Android App and&nbsp;by site-to-site
        integration through API.<br>

        When an eway bill is generated, a unique Eway Bill Number (EBN) is allocated and is available to the supplier,
        recipient, and the transporter.<br><br>
        <h4>2.When Should eWay Bill be issued?</h4>

        <p>
            E-Way bill will be generated when there is a movement of goods in a vehicle/ conveyance of value more than
            Rs.
            50,000 (either each Invoice or in aggregate of all invoices in a vehicle/conveyance)&nbsp; –
            <ul>
                <li>In relation to a ‘supply’</li>
                <li>For reasons other than a ‘supply’ ( say a return)</li>
                <li>Due to inward ‘supply’ from an unregistered person</li>
            </ul>
            For this purpose, a supply may be either of the following:
            <ul>
                <li>A supply made for a consideration (payment) in the course of business</li>
                <li>A supply made for a consideration (payment) which may not be in the course of business</li>
                <li>A supply without consideration (without payment)In simpler terms, &nbsp;the term ‘supply’ usually
                    means
                    a:</li>
            </ul>
            <ol>
                <li>Sale – sale of goods and payment made</li>
                <li>Transfer – branch transfers for instance</li>
                <li>Barter/Exchange – where the payment is by goods instead of in money</li>
            </ol>
            Therefore, eWay Bills must be generated on the common portal for all these types of movements.

            For certain specified Goods, the eway bill needs to&nbsp;be generated mandatorily&nbsp;even if the value of
            the
            consignment of Goods is less than Rs. 50,000:
            <ol>
                <li>Inter-State movement of Goods&nbsp;by the Principal&nbsp;to the Job-worker by Principal/ registered
                    Job-worker***,</li>
                <li>Inter-State Transport of Handicraft goods by a&nbsp;dealer exempted from GST registration</li>
            </ol>
        </p><br><br>
        <h4>3. Who should Generate an eWay Bill?</h4>
        <p>
            <ul>
                <li><strong>Registered Person</strong> – Eway bill must be generated when there is a movement of goods
                    of
                    more than Rs 50,000 in value to or from a registered person. A Registered person or the transporter
                    may
                    choose to generate and carry eway bill even if the value of goods is less than Rs 50,000.</li>
                <li><strong>Unregistered Persons</strong>&nbsp;– Unregistered persons are also required to generate
                    e-Way
                    Bill. However, where a supply is made by an unregistered person to a registered person, the receiver
                    will have to ensure all the compliances are met as if they were the supplier.
                </li>
                <li><strong>Transporter</strong> – Transporters&nbsp;carrying goods by road, air, rail, etc. also need
                    to
                    generate e-Way Bill if&nbsp;the supplier has not generated an e-Way Bill.</li>
            </ul>
        </p>
        <br><br>
        <h4>Update as on 23rd Mar 2018:</h4>
        <p>
            Until&nbsp;a date yet to be notified, the transporters&nbsp;need not generate the Eway bill (as Form EWB-01
            or EWB-02) where all the consignments<strong> in the conveyance</strong> :
            <ul>
                <li>Individually(single Document**) is less than or equal to Rs 50,000&nbsp;<strong>BUT</strong></li>
                <li>In Aggregate (all documents** put together) exceeds Rs 50,000</li>
            </ul>
            **Document means Tax Invoice/Delivery challan/Bill of supply

        </p>
        Unregistered Transporters will be issued Transporter ID&nbsp;on enrolling on the e-way bill portal after which
        Eway bills can be generated.
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td width="247"><strong>Who</strong></td>
                        <td width="208"><strong>When</strong></td>
                        <td width="224"><strong>Part </strong></td>
                        <td width="223"><strong>Form</strong></td>
                    </tr>
                    <tr>
                        <td width="247">Every Registered person under GST</td>
                        <td width="208">Before movement of goods</td>
                        <td width="224">Fill Part A</td>
                        <td width="223">Form GST EWB-01</td>
                    </tr>
                    <tr>
                        <td width="247">Registered person is consignor or consignee (mode of transport may be owned or
                            hired) OR is recipient of goods</td>
                        <td width="208">Before movement of goods</td>
                        <td width="224">Fill Part B</td>
                        <td width="223">Form GST EWB-01</td>
                    </tr>
                    <tr>
                        <td width="247">Registered person is consignor or consignee &nbsp;and goods are handed over to
                            transporter of goods</td>
                        <td width="208">Before movement of goods</td>
                        <td width="224">Fill Part B</td>
                        <td width="223">&nbsp;The registered person shall furnish the information relating to the
                            transporter in Part B of FORM GST EWB-01</td>
                    </tr>
                    <tr>
                        <td width="247">Transporter of goods</td>
                        <td width="208">Before movement of goods</td>
                        <td width="224"></td>
                        <td width="223">&nbsp;Generate e-way bill on basis of information shared by the registered
                            person in Part A of FORM GST EWB-01</td>
                    </tr>
                    <tr>
                        <td width="247">An unregistered person under GST and recipient is registered</td>
                        <td width="208">Compliance to be done by Recipient as if he is the Supplier.</td>
                        <td width="224"></td>
                        <td width="223">&nbsp;1. If the goods are transported for a distance of&nbsp;fifty kilometers or
                            less, within the same State/Union territory from the place of business of the consignor to
                            the place of business of the transporter for further transportation, the supplier or the
                            transporter may not furnish the details of conveyance in Part B of FORM GST EWB-01.

                            2. If supply is made by air, ship or railways, then the information in Part A of FORM GST
                            EWB-01 has to be filled in by the consignor or the recipient</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <strong>
            Note:</strong> If a transporter is transporting multiple consignments in a single conveyance, they can use
        the form GST EWB-02 to produce a consolidated e-way bill, by providing the e-way bill numbers of each
        consignment.

        If both the consignor and the consignee have not created an e-way bill, then the transporter can do so by
        filling out PART A of FORM GST EWB-01 on the basis of the invoice/bill
        of supply/delivery challan given to them.
        <br><br>
        <h4>4. Cases when eWay bill is Not Required</h4>
        <p>
            In the following cases it is not necessary to generate e-Way Bil:
            <ol>
                <li>The mode of transport is non-motor vehicle</li>
                <li>Goods transported from Customs port, airport, air cargo complex or land customs station to Inland
                    Container Depot (ICD) or Container Freight Station (CFS) for clearance by Customs.</li>
                <li>Goods transported under Customs supervision or under customs seal</li>
                <li>Goods transported under Customs Bond from ICD to Customs port or from one custom station to another.
                </li>
                <li>Transit cargo transported to or from Nepal or Bhutan</li>
                <li>Movement of goods caused by defence formation under Ministry of defence as a consignor or consignee
                </li>
                <li>Empty Cargo containers are being transported</li>
                <li>Consignor transporting goods to or from between place of business and a weighbridge for
                    weighment&nbsp;at a distance of 20 kms, accompanied by a Delivery challan.</li>
                <li>Goods being transported by rail where the Consignor of goods is the Central Government,&nbsp;State
                    Governments or a local authority.</li>
                <li>Goods specifed as exempt from E-Way bill&nbsp;requirements in the respective State/Union territory
                    GST
                    Rules.</li>
                <li>Transport of certain specified goods- Includes the list of exempt supply of goods, Annexure to Rule
                    138(14), goods treated as no supply as per Schedule III, Certain schedule to Central tax Rate
                    notifications.</li>
            </ol>
            Note: Part B of e-Way Bill is not required to be filled where the distance between the consigner or
            consignee
            and the transporter is less than 50 Kms and transport is within the same state.
        </p>
        <br> <br>
        <h4>5. Status of Implementation across India</h4>
        <p>
            Inter-State movement of goods has seen rise in numbers of generation of eway bills ever since its
            implementation
            began from 1st April 2018.

            State-wise implementation of e-way bill system&nbsp;has seen a good response with&nbsp;all the States and
            Union
            Territories joining the league in the&nbsp;generation of eway bills for movement of goods within the
            State/UT.

            However,&nbsp;reliefs have been provided to people of few States by way of exempting them from eway bill
            generation in case of monetary limits falling below threshold amount or certain specified items. For
            Instance,
            Tamil Nadu has exempted people of its State from the generation of eway bill if the
            monetary limit of the items falls below Rs. One Lakh.
        </p>
        <br><br>
        <h4> 7. Validity of eWay Bill</h4>
        <p>
            An e-way bill is valid for periods as listed below, which is based on the distance travelled by the goods.
            Validity is calculated from the date and time of generation of e-way bill-
            <div class="table-responsive">
                <table dir="ltr" class="table table-bordered" cellspacing="0" cellpadding="0" border="1">
                    <colgroup>
                        <col width="100">
                        <col width="100">
                        <col width="100">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Type of conveyance&quot;}">
                                <strong>Type of conveyance</strong></td>
                            <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Distance&quot;}">
                                <strong>Distance</strong></td>
                            <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Validity of EWB&quot;}">
                                <div>
                                    <div><strong>Validity of EWB</strong></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" rowspan="2"
                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Other than Over dimensional cargo&quot;}">
                                <div>Other than Over dimensional cargo</div>
                            </td>
                            <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Less Than 100 Kms&quot;}">Less
                                Than
                                100 Kms</td>
                            <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;1 Day&quot;}">1 Day</td>
                        </tr>
                        <tr>
                            <td
                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;For every additional 100 Kms or part thereof&quot;}">
                                For every additional 100 Kms or part thereof</td>
                            <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;additional 1 Day&quot;}">
                                <div>
                                    <div>additional 1 Day</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" rowspan="2"
                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;For Over dimensional cargo&quot;}">
                                <div>For Over dimensional cargo</div>
                            </td>
                            <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Less Than 20 Kms&quot;}">Less
                                Than
                                20 Kms</td>
                            <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;1 Day&quot;}">1 Day</td>
                        </tr>
                        <tr>
                            <td
                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;For every additional 20 Kms or part thereof&quot;}">
                                For every additional 20 Kms or part thereof</td>
                            <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;additional 1 Day&quot;}">
                                <div>
                                    <div>additional 1 Day</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            &nbsp;

            Validity of Eway bill can be extended also. The generator of such Eway bill has to either four hours before
            expiry or within four hours after its expiry can extend Eway bill validity.
            <br><br>
            <h4>8. Documents or Details required to generate eWay Bill</h4>
            <p>
                <ol>
                    <li>Invoice/ Bill of Supply/ Challan related to the consignment of goods</li>
                    <li>Transport by road – Transporter ID or Vehicle number</li>
                    <li>Transport by rail, air, or ship – Transporter ID, Transport document number, and date on the
                        document</li>
                </ol>
            </p>
            <br><br>

            <h4>9. VAHAN-e-Way Bill Integration</h4>
            <p>In February 2020, the e-way bill portal has been linked to the VAHAN system.
                A pilot run has already begun in the state of Karnataka. Now, the vehicle registration number will be
                validated at the time of generating e-way bill.</p>

            <h4>10. Blocking and Unblocking of E-way Bill</h4>
            <p>
            <ol>
                <li>E-way bill generation is blocked for taxpayers who have not filed their returns for the previous two
                    consecutive months/quarters.</li>
                <li>Thus, if a taxpayer has not filed GSTR-3B for two or more consecutive months, then he/she cannot
                    generate e-way bills to do dispatches and receive goods, resulting in a standstill.</li>
                <li>Only when a taxpayer files GSTR-3B, the e-way bills will get unblocked on the next day.</li>
                <li>The system of e-way bill blocking was implemented from the 2nd of December 2019.</li>
            </ol>
            </p>
            <h4>All States require to use e-way bills for Intra-state&nbsp;movement of
                goods</h4>
            <ol>
                <li>E-way bill requirement&nbsp;for Intra State movement of goods in <strong>Delhi began from 16th June
                        2018</strong>.</li>
                <li>E-way bill operations are compulsory for intra-state movement of goods for <strong>all states except
                        Delhi</strong> with effect from 3rd June 2018</li>
                <li>Eway bill operations are compulsory for intra-state movement of goods for&nbsp;Andaman &amp;
                    Nicobar, Chandigarh, Dadar &amp; Nagar&nbsp;Haveli,&nbsp;Daman &amp; Diu, Lakshadweep, Maharashtra
                    and Manipur&nbsp;<strong>from 25th May 2018</strong></li>
                <li>eway bill&nbsp;operations are enabled on <strong>trial basis</strong> for&nbsp;the
                    intra-state&nbsp;movement of goods for&nbsp;Odisha&nbsp;<strong>from 23rd May 2018</strong></li>
                <li>Roll out of e Way Bill system for intra-State movement of goods in the
                    States / Union Territory of Arunachal Pradesh, Madhya Pradesh, Meghalaya, Sikkim and Puducherry
                    <strong>from 25 April 2018 </strong></li>
            </ol>
            <h4>11. On EWay bill generation</h4>
            <ol>
                <li>Latest Update as on&nbsp;26th Sept 2018:New enhancements are done in the E- Way Bill (EWB)
                    generation form to be released on 1st of October 2018.</li>
                <li>Now multi-vehicle updation is possible for the e-way bill.</li>
                <li>In case of ‘Bill To’ &amp; ‘Ship to’, now consignor&nbsp; (seller) or consignee (buyer) either of them can
                    generate Eway bill</li>
            </ol>

    <h4>12. Frequently Asked Questions</h4>
    <br><br>
    <h5>What is the responsibility and liability for the transporter in E-Way bill system?</h5>
    <p>Transporters carrying goods by road, air, rail, etc. also need to generate e Way Bill if the supplier
        has not generated an e Way bill due to any reason.
        Generate e way bill on basis of information shared by the suppliers/ consignors regarding the
        Invoice/challan.
        If the transporter does not generate in the above circumstances when he is required to, he may face
        penalty of Rs 10,000 or tax sought to be evaded (wherever applicable) whichever is greater, further
        liable for confiscation of goods and seizure of vehicle.</p>
    <br><br>
    <h5>How many e-way bills are required to be generated to ship a consignment to a customer involving
        multiple transporters (having different Transporter IDs) in between? How will the one invoice-one
        e-way bill validation be complied here since end customer is only one?
    </h5>

    <p>One e-Way bill needs to be generated against the Invoice.
        Above situation is known as “Transhipment”.
        Transporter can also re-assign another transporter by updating transporter ID on the&nbsp;eway bill
        portal.
        Once transporter re-assigns another transporter, seller cannot make any changes to assigned transporter.
        So, the user has to generate different delivery challans against the invoice based on the different Transporter
        ID, because different e-way bills against a single invoice is not possible and will also cause the problem in
        populating the data in the GSTR-1.
    </p>
    <br><br>
    <h5>How is the criteria of “Value of Consignment of Goods” applied?</h5>
    <p>Value of consignment of Goods” is interpreted as follows:
        <ul>
            <li>Invoice Value* exceeds Rs. 50,000 OR</li>
            <li>If a vehicle carries goods against multiple Invoices, then where the aggregate Invoice value* exceed
                Rs. 50,000</li>
        </ul>

        So, if either of above points is satisfied, the user should generate e-Way Bill.<br>
        *Invoice Value means transaction value as per Invoice inclusive of all the taxes excluding the Value of
        exempt goods that are being carried along the taxable goods and billed together.
    </p>
    <br><br>
    <h5>Is e-Way bill required, if the value of shipment per customer per day exceeds Rs
        50,000? How will we take multiple invoices under single e-way bill?</h5>
    <p">Here, it depends whether the supplier himself is the transporter or not. If he is
        the transporter, then he is required to generate the e-way bill for all the invoices but if not, then
        the transporter will be required to generate the e-way bill against all the invoices in the Vehicle.
        </p>
        <br><br>
        <h5>For Selection of Sub Type in case of Outward Supply, What do terms “CKD/SKD” &amp;
            “Line sales” mean?</h5>
        <p>“CKD/SKD” means the movement of the goods in Completely knocked down condition or
            Semi Knocked Down condition.
            For eg: Movement of Fan in different parts, which will be assembled later. “Line Sales” Vertical sales
            made from one unit / department/division of an organisation to another unit/department/division next in
            production line within that Organisation
        </p>


        </div>

        <!--/  content stop /-->









        <!--/ footer Start /-->
        @include('footer');
