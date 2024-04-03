@extends('layouts.default')
@section('content')

    <!-- Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact Form / <span class="urdu">رابطہ فارم</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color: gray;">Welcome to Nisa Breast Center. Please enter the following details to connect with us via Whatsapp</p>
                    <p class="urdu" style="color: gray;">نسا بریسٹ سینٹر میں خوش آمدید۔ براہ کرم ہم سے واٹس ایپ کے ذریعے رابطہ کرنے کے لئے مندرجہ ذیل تفصیلات داخل کریں۔</p>
                    <!-- Your form -->
                    <form id="contactForm" action="{{ route('submit.form') }}" method="post">
                        @csrf
                        <!-- Form fields -->
                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">Name / <span class="urdu">نام:</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <!-- Age -->
                        <div class="form-group">
                            <label for="age">Age / <span class="urdu">عمر:</span></label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                        <!-- City -->
                        <div class="form-group">
                            <label for="city">City / <span class="urdu">شہر:</span></label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email / <span class="urdu">ای میل:</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <!-- Phone -->
                        <div class="form-group">
                            <label for="phone">Phone / <span class="urdu">فون:</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <!-- Message -->
                        <div class="form-group">
                            <label for="message">Message / <span class="urdu">میسج:</span> </label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="whatsapp-button btn">Chat on Whatsapp/<span class="urdu">واٹس ایپ پر چیٹ کریں</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <p class="clinic-title mt-3">NISA BREAST CARE AND COSMETIC CENTRE</p>
    <p class="clinic-subheading" style="padding-top: 0px;">Breast Screening, diagnostic, benign, cancer, lymphedema</p>

    <p class="services-heading-1 mt-4">INTRODUCTION</p>
    <p class="services-heading-2">Welcome to Nisa Breast Care & Cosmetic Centre : </p>
    <p class="services-heading-2">Your Premier Breast Health Solution</p>

    <ul>
        <li>Established in 2019 by Dr. Razia Bano, This clinic addresses the critical gap in dedicated breast care centers in Pakistan. </li>
        <li>As a pioneering service for breast screening, breast health awareness, benign and malignant diseases and cosmetic concerns, particularly the rising incidence of breast cancer, we recognize the urgent need for specialized facilities. Therefore the need was felt to set up dedicated breast services in the private sector.
        </li>
        <li>Breast cancer may not be preventable but has promising outcome when detected at the early stage.</li>
        <li>Breast cancer survival rates are closely tied to the stage of breast cancer (98% for Stage 1 and 88% for Stage 2), so early detection becomes paramount.
        </li>
        <li>Nisa Breast Care &  Cosmetic Centre is here to provide timely and comprehensive care to improve outcomes. We provide comprehensive breast clinical assessment, diagnostic facilities, treatment, and follow up .

        </li>
    </ul>

    <p class="services-heading-5 mt-5" style="text-decoration: underline;">"Our Mission: Comprehensive Breast Care and Beyond"</p>

    <p>For your one-stop solution for breast cancer screening, benign conditions, breast cancer cancer, and cosmetic care, we offer an integrated approach covering history-taking, clinical examination, breast imaging including mammograms, ultrasounds,  MRI Breasts, clinical triple assessments, and same-day reviews by expert surgeons.
    </p>
    <p>These facilities are available under one roof in coordination with the Islamabad diagnostic center for diagnostic facilities.
    </p>
    <p>In case of a biopsy, a follow-up visit is arranged. Regular screenings and personalized plans for women over 40 are part of our commitment to proactive healthcare.
    </p>
    <p>Committed to staying current with international guidelines, our in-house team of Breast surgeons, physicians, oncologists, pathologists, radiologists, psychiatrist , and Nurse practitioners and breast care nurses  collaborate to deliver top-notch care. Our screening facility, in collaboration with Islamabad Diagnostic Center, Saddar Rawalpindi, ensures same-day reporting for a comprehensive plan tailored to your needs. Join us in bridging the gap for dedicated breast health services in Pakistan.
    </p>
    <p>Join us in prioritizing proactive healthcare, where early detection not only saves lives but also significantly influences the cosmetic outcomes of interventions. Your well-being is our foremost priority, and we are committed to providing the best possible care on every step of your journey with us.
    </p>

    <!-- JavaScript to trigger modal on page load -->
    <script>
        $(document).ready(function(){
            $('#contactModal').modal('show');
        });
    </script>
@stop
