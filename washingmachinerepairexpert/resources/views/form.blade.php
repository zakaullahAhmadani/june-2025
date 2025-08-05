<form id="repairForm" method="POST" action="{{ route('chauffeur.submit') }}" dir="rtl">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <input type="text" name="name" id="name" placeholder="اسمك الكريم" class="form-control rounded" required
                   style="border-color: var(--secondary-color);">
        </div>
        <div class="col-md-6">
            <input type="email" name="email" id="email" placeholder="البريد الإلكتروني" class="form-control rounded" required
                   style="border-color: var(--secondary-color);">
        </div>
        <div class="col-md-6">
            <input type="tel" name="phone" id="phone" placeholder="رقم الجوال" class="form-control rounded" required
                   style="border-color: var(--secondary-color);">
        </div>
        <div class="col-md-6">
            <select name="service" id="service" class="form-control rounded" required
                    style="border-color: var(--secondary-color);">
                <option value="" disabled selected>اختر الخدمة المطلوبة</option>
                <option value="repair">إصلاح غسالة أوتوماتيكية</option>
                <option value="maintenance">صيانة دورية</option>
                <option value="consultation">استشارة فنية</option>
            </select>
        </div>
        <div class="col-12">
            <textarea name="message" id="message" rows="3" placeholder="وصف المشكلة أو الطلب" 
                      class="form-control" style="border-color: var(--secondary-color);"></textarea>
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn w-100 py-3" 
                    style="background-color: var(--primary-color); color: var(--white);">
                <span>إرسال الطلب</span>
                <i class="bi bi-arrow-left ms-2"></i>
            </button>
        </div>
    </div>
</form>

<!-- Success Message Container -->
<div id="successMessage" class="alert mt-3" style="display: none; background-color: var(--secondary-color); color: var(--white);"></div>

<script>
document.getElementById('repairForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Show loading state
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalBtnContent = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span>جاري المعالجة...</span>';
    submitBtn.disabled = true;
    
    // Get form data
    const formData = new FormData(this);
    const action = this.getAttribute('action');
    
    // Submit via AJAX
    fetch(action, {
        method: 'POST',
        body: formData,
        headers: {
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            const successMessage = document.getElementById('successMessage');
            successMessage.style.display = 'block';
            successMessage.textContent = data.message || 'تم استلام طلبك بنجاح! سيتصل بك فني الغسالات خلال 24 ساعة';
            
            // Clear form fields
            this.reset();
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 5000);
        } else if (data.errors) {
            // Handle validation errors
            alert('الرجاء تصحيح الأخطاء في النموذج');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('حدث خطأ. الرجاء المحاولة مرة أخرى.');
    })
    .finally(() => {
        // Restore button state
        submitBtn.innerHTML = originalBtnContent;
        submitBtn.disabled = false;
    });
});
</script>