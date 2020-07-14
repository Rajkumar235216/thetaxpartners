<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/income-tax', function () {
    return view('incometax');
});
Route::get('/gst', function () {
    return view('gst');
});
Route::get('/tds', function () {
    return view('tds');
});
Route::get('/company', function () {
    return view('company');
});
Route::get('/accounting', function () {
    return view('accounting');
});

Route::get('/import-export', function () {
    return view('import_export');
});
Route::get('/property-single', function () {
    return view('property-single');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

//  ------------  income-tax services start----------------
Route::get('/income-tax/tax-return', function () {
    return view('income.tax-return');
});


Route::get('/income-tax/scruitiny-assessment', function () {
    return view('income.scruitiny-assessment');
});

Route::get('/income-tax/response-142(1)', function () {
    return view('income.response-142(1)');
});

Route::get('/income-tax/response-143(1)', function () {
    return view('income.response-143(1)');
});

Route::get('/income-tax/tax-refunds', function () {
    return view('income.tax-refund');
});

Route::get('/income-tax/legal-consultancy', function () {
    return view('income.legal-consultancy');
});

Route::get('/income-tax/defective-return', function () {
    return view('income.defective-return');
});

Route::get('/income-tax/rectification-154', function () {
    return view('income.rectification-154');
});

Route::get('/income-tax/various-forms', function () {
    return view('income.various-forms');
});

Route::get('/income-tax/cit-appeals', function () {
    return view('income.cit-appeals');
});

Route::get('/income-tax/e-assessment', function () {
    return view('income.e-assessment');
});

Route::get('/income-tax/trust', function () {
    return view('income.trust');
});

Route::get('/income-tax/others', function () {
    return view('income.others');
});

//  ------------  income-tax services stop----------------

//  ------------  gst services start----------------
Route::get('/gst/registration', function () {
    return view('gst.registration');
});


Route::get('/gst/cancellation', function () {
    return view('gst.cancellation');
});

Route::get('/gst/returns', function () {
    return view('gst.return');
});

Route::get('/gst/refunds', function () {
    return view('gst.refund');
});

Route::get('/gst/e-way-bill', function () {
    return view('gst.e-way-bill');
});

Route::get('/gst/legal-consultancy', function () {
    return view('gst.legal-consultancy');
});

Route::get('/gst/revocation-cancellation', function () {
    return view('gst.revocation-cancellation');
});

Route::get('/gst/notices', function () {
    return view('gst.notice');
});

Route::get('/gst/cases', function () {
    return view('gst.cases');
});

Route::get('/gst/others', function () {
    return view('gst.others');
});

// ----------------- tds services start ------------------

Route::get('/tds/returns', function () {
    return view('tds.returns');
});

Route::get('/tds/refunds', function () {
    return view('tds.refund');
});

Route::get('/tds/certificates', function () {
    return view('tds.certificate');
});

Route::get('/tds/justification', function () {
    return view('tds.justification');
});

Route::get('/tds/corrections', function () {
    return view('tds/correction');
});

Route::get('/tds/consultancy', function () {
    return view('tds.consultancy');
});

Route::get('/tds/waiver-certificate', function () {
    return view('tds.waiver-certificate');
});

Route::get('/tds/others', function () {
    return view('tds.others');
});

// ---------- tds services stop-------------------


// ---------- company services staart-------------------

Route::get('/company/incorporation', function () {
    return view('company.incorporation');
});

Route::get('/company/change-particulars', function () {
    return view('company.change-particular');
});

Route::get('/company/closures', function () {
    return view('company.closure');
});

Route::get('/company/roc', function () {
    return view('company.roc');
});

Route::get('/company/annual-filing', function () {
    return view('company.annual-filing');
});

Route::get('/company/consultancy', function () {
    return view('company.consultancy');
});

Route::get('/company/drafting', function () {
    return view('company.drafting');
});

Route::get('/company/compliance-notices', function () {
    return view('company.compliance-notices');
});

Route::get('/company/sale-purchase-transfer', function () {
    return view('company.sale-purchase-transfer');
});

Route::get('/company/others', function () {
    return view('company.others');
});

// ----------------- company services stop--------------

// ----------------- accounting services start--------------

Route::get('/accounting/book-keeping', function () {
    return view('accounting.book-keeping');
});

Route::get('/accounting/financial-statements', function () {
    return view('accounting.financial-statements');
});

Route::get('/accounting/stock-inventories', function () {
    return view('accounting.stock-inventories');
});

Route::get('/accounting/projected-financial-statements', function () {
    return view('accounting.projected-financial-statements');
});

Route::get('/accounting/provisional-financial-statements', function () {
    return view('accounting.provisional-financial-statements');
});

Route::get('/accounting/deffered-taxes', function () {
    return view('accounting.deffered-taxes');
});

Route::get('/accounting/others', function () {
    return view('accounting.others');
});



// ---------- accounting services stop-------------------

// ----------------- import-export services start--------------

Route::get('/import-export/iec', function () {
    return view('import-export.iec');
});

Route::get('/import-export/bill-of-lading', function () {
    return view('import-export.bill-of-lading');
});

Route::get('/import-export/firc-birc', function () {
    return view('import-export.firc-birc');
});

Route::get('/import-export/export-realisation', function () {
    return view('import-export.export-realisation');
});

Route::get('/import-export/notices', function () {
    return view('import-export.notice');
});

Route::get('/import-export/consultancy', function () {
    return view('import-export.consultancy');
});

Route::get('/import-export/disinvestment', function () {
    return view('import-export.disinvestment');
});

Route::get('/import-export/others', function () {
    return view('import-export.others');
});



// ---------- import-export services stop-------------------


// -------- form controller routes -----------------------

Route::get('/contact', [
    'uses' => 'ContactMessageController@create'
]
    
);

Route::post('/contact', [
    'uses' => 'ContactMessageController@store',
    'as'  =>  'contact.store'
]
    
);

Route::get('/emails/contact-message', [
    'uses' => 'EnquiryFormController@create',
    'as'  =>  'enquiry.create'
]
    
);
Route::post('/emails/contact-message', [
    'uses' => 'EnquiryFormController@store',
    'as'  =>  'enquiry.store'
]
    
);
/* Route::get('/formdata',[
    'uses' => 'ContactMessageController@store',
    'as'  =>  'contact.store'
] 
    
);
*/
