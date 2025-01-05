@extends('front.include')
@section('frontBody')

<!-- start hero section -->
<section id="home" class="p-0 parallax mobile-height wow animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('public/front/html/') }}/images/cpi_cover.jpg');height:570px">
    <div class="opacity-extra-medium bg-extra-dark-gray"></div>
    <div class="container position-relative full-screen">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <div class="down-section text-center"><a href="#about" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
            </div>
        </div>
    </div>
</section>
<!-- end hero section -->
<div class="container p-4">
    <div class="row align-items-center my-3 mb-4">
        <div class="col-12 text-center">
            <h2 class="display-6 fw-bold">মিলনমেলা ২০২৫ রেজিস্ট্রেশন ফরম</h2>
            <!-- Button trigger modal -->
            <a class="fw-bold btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#programDetails"><i class="fa-sharp fa-light fa-memo-circle-info"></i> Program Details</a>
            <a class="fw-bold btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#tShirtDetails"><i class="fa-sharp fa-solid fa-shirt"></i> T-Shirt Details</a>
        </div>
    </div>
    <div class="row align-items-center mt-5">
        <div class="col-11 mx-auto">
            <div class="card card-body shadow p-4">
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @php
                    $today = date("Y-m-d"); //Today
                    $date = '2025-01-31'; //Date
                @endphp
                <h5 class="fw-bold d-none d-md-block">Emergency Help: 01674-779916</h5>
                <h5 class="fw-bold d-md-none d-block text-center">Emergency Help: <br>01674-779916</h5>
                @if (strtotime($today) > strtotime($date))
                    <div class="alert alert-danger fw-bold h3">
                        Sorry! Our registration process is closed.<br>
                        দুঃখিত! আমাদের রেজিস্ট্রেশন প্রক্রিয়াটি বন্ধ হয়ে গেছে।
                    </div>
                @else
                <form class="row g-3" method="POST" action="{{ route('saveStudent') }}" enctype="multipart/form-data">
                    @csrf
                    <h6 class="mb-0 fw-bold">Personal Details</h6>
                    <div class="row  mt-4">
                        <div class="col-12 col-md-4">
                            <label for="avatar" class="form-label fw-bold">Picture (Passport Size)</label>
                            <input type="file" class="form-control" id="avatar" required name="avatar">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="stdName" class="form-label">Your Name(*)</label>
                        <input type="text" class="form-control" id="stdName" required placeholder="Enter fullname" name="stdName">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="dept" class="form-label">Department(*)</label>
                        <select id="dept" class="form-select" required name="dept">
                            <option selected>Choose...</option>
                            <option>Civil Technology</option>
                            <option>Electrical Technology</option>
                            <option>Mechanical Technology</option>
                            <option>Power Technology</option>
                            <option>Eelectronics Technology</option>
                            <option>Computer Technology</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="shift" class="form-label">Shift(*)</label>
                        <select id="shift" class="form-select" required name="shift">
                            <option selected>Choose...</option>
                            <option>1st</option>
                            <option>2nd</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="phone" class="form-label">Phone/Mobile(*)</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter a valid phone no" required name="phone">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="stdMail" class="form-label">e-Mail(*)</label>
                        <input type="email" class="form-control" id="stdMail" placeholder="Enter and active email" required name="mailAddress">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="gender" class="form-label">Gender(*)</label>
                        <select id="gender" class="form-select" required name="gender">
                            <option selected>Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="blGroup" class="form-label">Blood Group(*)</label>
                        <select id="blGroup" class="form-select" required name="blGroup">
                            <option selected>Choose...</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="tShirtSize" class="form-label">T-Shirt Size(*)</label>
                        <select id="tShirtSize" class="form-select" required name="tShirtSize">
                            <option selected>Choose...</option>
                            <option>S &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Chest-36 X Length-26 INCH]</option>
                            <option>M &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Chest-38 X Length-27 INCH]</option>
                            <option>L &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Chest-40 X Length-28 INCH]</option>
                            <option>XL  &nbsp;&nbsp;&nbsp;&nbsp;[Chest-42 X Length-29 INCH]</option>
                            <option>2XL &nbsp;[Chest-44 X Length-30 INCH]</option>
                            <option>3XL &nbsp;[Chest-46 X Length-31 INCH]</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="currentAddress" class="form-label">Current Address(*)</label>
                        <input type="text" class="form-control" id="currentAddress" placeholder="Briefly Describe Current Location" required name="currentAddress">
                    </div>
                    <h6 class="mb-0 fw-bold">Professional Details</h6>
                    <div class="col-12 col-md-6">
                        <label for="professionDetails" class="form-label">Profession</label>
                        <input type="text" class="form-control" id="professionDetails" placeholder="Position & Company" name="professionDetails">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="expreience" class="form-label">Professional Experience</label>
                        <input type="text" class="form-control" id="expreience" placeholder="Experience details please" name="experience">
                    </div>
                    <h6 class="mb-0 fw-bold">Guest Details</h6>
                    <div class="col-12 col-md-4">
                        <label for="totalJoin" class="form-label">Number of Guest(*)</label>
                        <select name="totalMember" id="totalGuest" class="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="row" id="memberList"></div>
                    </div>
                    <h6 class="mb-0 fw-bold">Payment Details</h6>
                    <div class="col-12 col-md-4">
                        <label for="totalPayment" class="form-label">Total Amount(*)</label>
                        <input type="number" class="form-control" id="totalPayment" placeholder="Enter payment amount" required name="payAmount" value="1530" readonly>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="paymentMethod" class="form-label">Payment Method(*)</label>
                        <select id="paymentMethod" class="form-select" required name="payType">
                            <option selected>Choose...</option>
                            <option value="1">Bkash</option>
                            <option value="2">Nagad</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="txnId" class="form-label">TXNID(*)</label>
                        <input type="text" class="form-control" id="txnId" placeholder="Example: BJP9PG9ZVB" required name="payId">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div id="bkashPaymentNumber">
                        <div class="row align-items-center">
                            <div class="col-6 mx-auto d-block d-md-none">
                                <img class="w-75" src="{{ asset('public/front/bkashPayment.jpg') }}" alt="BkashPayment">
                            </div>
                            <div class="col-12 col-md-8 mt-4">
                                <h6>`bKash` payment via USSD:</h6><ul><li>Dial *247#</li><li>Choose “Payment”</li><li>Enter the Merchant bKash Account Number(01972-006267)</li><li>Enter the amount</li><li>Enter Reference(CPI 10-11)</li><li>Type PIN</li><li>Done! You will receive confirmation SMS at the end of payment</li></ul> <h6>‘bKash’ payment via app:</h6><ul><li>Login to bKash App</li><li>Click the Payment button</li><li>Type the Merchant Account Number(01972-006267) or scan the QR code</li><li>Type The Amount</li><li>Type The Reference(CPI 10-11) & Pin</li><li>Tap & Hold</li><li>Receive confirmation SMS at the end of payment</li></ul>
                            </div>
                            <div class="col-md-4 d-none d-md-block">
                                <img class="w-75" src="{{ asset('public/front/bkashPayment.jpg') }}" alt="BkashPayment">
                            </div>
                        </div>
                    </div>
                    <div id="nagadPaymentNumber">
                        <div class="row align-items-center">
                            <div class="col-6 mx-auto d-block d-md-none">
                                <img class="w-75" src="{{ asset('public/front/nagadPayment.jpg') }}" alt="NagadPayment">
                            </div>
                            <div class="col-12 col-md-8 mt-4">
                                <h6>‘Nagad’ payment via USSD:</h6><ul><li>Dial *167#</li><li>Select payment</li><li>Tyoe The Marchand Account Number(01972-006267)</li><li>Type The Amount</li><li>Type the counter number(Put 0)</li><li>Type The Reference(CPI 10-11)</li><li>Type PIN</li><li>Receive confirmation SMS at the end of payment</li></ul> <h6>‘Nagad’ payment via app:</h6><ul><li>Login to Nagad App</li><li>Click the Merchant Pay button</li><li>Type the Merchant Account Number(01972-006267) or scan the QR code</li><li>Type The Amount</li><li>Type The Reference(CPI 10-11) & Pin</li><li>Tap & Hold</li><li>Receive confirmation SMS at the end of payment</li></ul>
                            </div>
                            <div class="col-md-4 d-none d-md-block">
                                <img class="w-75" src="{{ asset('public/front/nagadPayment.jpg') }}" alt="NagadPayment">
                            </div>
                        </div>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Modal Program Details -->
<div class="modal fade main model mt-5" id="programDetails" tabindex="-1" role="dialog" aria-labelledby="programDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl mt-5" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="programDetailsModalLabel">প্রোগ্রামের বিস্তারিত</p>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="text-extra-dark-gray sm-w-80 d-inline-block mb-0 fw-bold">মিলনমেলা ২০২৫ ভেন্যু</p>
                <p class="fw-bold">আলাদিনপার্ক, ধামরাই, সাভার।</p>
                <p class="text-extra-dark-gray sm-w-80 d-inline-block mb-0 fw-bold">অনুষ্ঠিত হবে</p>
                <p class="fw-bold">০৭ ফেব্রুয়ারী ২০২৫,শুক্রবার সকাল ৮.০০থেকে সারাদিন পর্যন্ত।</p>
                <p class="text-extra-dark-gray sm-w-80 d-inline-block mb-0 fw-bold">রেজিস্ট্রেশন ফি</p>
                
                <ul>
                    <li><b>সির্টিং ক্যাপাসিটি-</b> ৪০০ জন মাত্র</li>
                    <li><b>সদস্য রেজি: ফি-</b> ১৫০০/- মাত্র(জনপ্রতি)</li>
                    <li><b>অতিথি/বাচ্চা(৫ বছরের উপরে)-</b> ১০০০/- মাত্র(জনপ্রতি)</li>
                    <li><b>ড্রাইভার-</b> ১০০০/- মাত্র</li>
                </ul>
                <p class="my-2 mt-4 fw-bold text-success">রেজিষ্ট্রেশননাম্বার (বিকাশ)-</p>
                <ul>
                    <li><b class="text-danger">জাবেদ- </b> 01721125742</li>
                    <li><b class="text-danger">আরমান- </b> 01713064475</li>
                    <li><b class="text-danger">মাসুদ- </b> 01917973856</li>
                    <li><b class="text-danger">শিহাব- </b> 01812089603</li>
                    <li><b class="text-danger">নেসার- </b> 01710909254</li>
                    <li><b class="text-danger">মিঠু- </b> 01728523760</li>
                    <li><b class="text-danger">সাইমন- </b> 01516192656</li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <p class="text-extra-dark-gray sm-w-80 d-inline-block mb-0 fw-bold">প্রোগ্রাম বিন্যাস বিবরণ</p>
                <ul>
                    <li>মিলনমেলা থেকে বাসের ব্যবস্থা থাকবে।</li>
                    <li>সকালের নাস্তা (প্রিমিয়াম)</li>
                    <li>দুপুরের খাবার (প্রিমিয়াম)</li>
                    <li>আলাদিনপার্ক শিশুদের জন্যে রাইড এর ব্যবস্থা।</li>
                    <li>টি-শার্ট (পোলো)</li>
                    <li>স্যুভেনির মগ (ব্র্যান্ডেড)</li>
                    <li>কফি কর্নার</li>
                    <li>বেবি ফিডিং জোন</li>
                    <li>মহিলা বিশ্রাম কক্ষ</li>
                    <li>ফটো জোন</li>
                    <li>বাচ্চাদের জন্য মজার জোন</li>
                    <li>অতিথি মহিলা/নারীর জন্য বিনোদন</li>
                    <li>র‌্যাফেল ড্র </li>
                    <li>সাংস্কৃতিক অনুষ্ঠান</li>
                    <li>সন্ধার নাস্তা</li>
                    <li>রাতের খাবার </li>
                </ul>
            </div>
            <div class="col-12">
                <p class="text-extra-dark-gray sm-w-80 d-inline-block mb-0 fw-bold">রেজিস্ট্রেশনের নিয়ম</p>
                
                <ol>
                    <li>একাধিক অতিথি থাকলেও শুধুমাত্র একবারের জন্য ফর্মটি পূরণ করুন৷</li>
                    <li>সাধারণ সদস্য যোগদান ফি ১৫৩০BDT</li>
                    <li>প্রতি অতিথি + ড্রাইভার সদস্য যোগদানের ফি ১০২০BDT</li>
                    <li>৫ বছর বয়সী নিজের বাচ্চাদের অবশ্যই নিবন্ধন করতে হবে, ৫ বছরের নিচের প্রয়োজন নেই। </li>
                </ol>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal T-Shirt Details -->
<div class="modal fade main model mt-5" id="tShirtDetails" tabindex="-1" role="dialog" aria-labelledby="tShirtDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered mt-5" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tShirtDetailsModalLabel">T-Shirt Details</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-12">
                <p>*All size details here are inch</p>
                <table class="table table-bordered text-center">
                    <thead>
                        <th>Sizes</th>
                        <th>Chest</th>
                        <th>Length</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>S</td>
                            <td>36</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>M</td>
                            <td>38</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>L</td>
                            <td>40</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>XL</td>
                            <td>42</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td>2XL</td>
                            <td>44</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>3XL</td>
                            <td>46</td>
                            <td>31</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>

    $(document).ready(function() {
        // Hide payment options initially
        $("#bkashPaymentNumber").addClass('d-none');
        $("#nagadPaymentNumber").addClass('d-none');

        $('#totalGuest').on('change', function() {
            // Get totalGuest value
            const totalGuest = parseInt($(this).val());

            // Check if totalGuest is a valid number
            if (!isNaN(totalGuest)) {
                let member = ""; // Initialize an empty string to accumulate HTML
                $("#memberList").empty();
                for (let i = 0; i < totalGuest; i++) {
                    member += `
                        <div class='col-12 col-md-4'>
                            <label class='text-success'>${ i+1 }. Guest Name</label>
                            <input type='text' class='form-control border-success text-success' placeholder='Enter name' required name='guestName[]'>
                        </div>
                        <div class='col-12 col-md-4'>
                            <label class='text-success'>Relation</label>
                            <select class='form-control border-success text-success' name='guestRelation[]' onchange='guestRelation(${i})' required>
                                <option value=''>-</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Other">Other</option>
                            </select>
                             <input type='hidden' name='guestCharge[]' id='guestCharge${i}' value='' />  
                        </div>
                        <div class='col-12 col-md-4'>
                            <div id='guestAge${i}' style='display:none'>
                                <label class='text-success'>Guest Age</label>
                                <select  class='form-control border-success text-success' name='guestAge[]' id='memberAge${i}' onchange='calculateGuestCharge(${i})'>
                                    <option value='0'>0</option>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='5'>5</option>
                                    <option value='6'>6</option>
                                    <option value='7'>7</option>
                                    <option value='8'>8</option>
                                    <option value='9'>9</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                    <option value='12'>12</option>
                                    <option value='13'>13</option>
                                    <option value='14'>14</option>
                                    <option value='15'>15</option>
                                </select>
                            </div>
                        </div>
                    `;
                }

                // Append all accumulated HTML at once to #memberList
                $("#memberList").append(member);
                if(totalGuest===0){
                    $("#totalPayment").val(1530);
                }
            }
        });

        // Event handler for payment method selection
        $('#paymentMethod').on('change', function() {
            const paymentMethod = $(this).val();
            
            if (paymentMethod == 1) {
                $("#bkashPaymentNumber").removeClass("d-none").addClass("d-block");
                $("#nagadPaymentNumber").addClass('d-none');
            } else if (paymentMethod == 2) {
                $("#bkashPaymentNumber").addClass('d-none');
                $("#nagadPaymentNumber").removeClass('d-none').addClass("d-block");
            } else {
                $("#bkashPaymentNumber").addClass('d-none');
                $("#nagadPaymentNumber").addClass('d-none');
            }
        });
    });

    // Show/hide age input based on relation selection
    function guestRelation(index) {
        const relation = $(`select[name='guestRelation[]']`).eq(index).val();
        if (relation === "Son" || relation === "Daughter") {
            $(`#guestAge${index}`).show();
            $(`#guestCharge${index}`).val(0); 
        } else {
            $(`#guestAge${index}`).hide();
            $(`#guestCharge${index}`).val(1020); 
        }
        updateTotalPayment();
    }

    // Calculate guest charge based on age
    function calculateGuestCharge(index) {
        const age = parseInt($(`#memberAge${index}`).val());
        const charge = (age <= 6) ? 0 : 1020;
        $(`#guestCharge${index}`).val(charge);
        updateTotalPayment();
    }

    // Function to calculate and update the total payment
    function updateTotalPayment() {
        let totalCharge = 0;
        $("input[name='guestCharge[]']").each(function() {
            const charge = parseInt($(this).val()) || 0; // Convert to integer or 0 if NaN
            totalCharge += charge;
        });
        const finalCharge = parseInt(totalCharge + 1530);
        $("#totalPayment").val(finalCharge);
    } 
</script>
@endsection
