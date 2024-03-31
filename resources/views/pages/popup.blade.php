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




