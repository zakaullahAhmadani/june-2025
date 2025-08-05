<form id="serviceForm" method="POST" action="{{ route('chauffeur.submit') }}" dir="rtl">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <input type="text" name="name" id="name" placeholder="اسمك الكريم" class="form-control rounded" required style="border-color: #2c3e50;">
        </div>
        <div class="col-md-6">
            <input type="email" name="email" id="email" placeholder="البريد الإلكتروني" class="form-control rounded" required style="border-color: #2c3e50;">
        </div>
        <div class="col-md-6">
            <input type="tel" name="phone" id="phone" placeholder="رقم الجوال" class="form-control rounded" required style="border-color: #2c3e50;">
        </div>
        <div class="col-md-6">
            <select name="service_type" id="service_type" class="form-control rounded" required style="border-color: #2c3e50;">
                <option value="">اختر نوع الخدمة</option>
                <option value="window_ac">إصلاح وتثبيت مكيفات النوافذ</option>
                <option value="duct_ac">إصلاح وتثبيت المكيفات المركزية</option>
                <option value="split_ac">إصلاح وتثبيت المكيفات المنفصلة</option>
                <option value="washing_machine">إصلاح الغسالات</option>
                <option value="refrigerator">إصلاح الثلاجات</option>
            </select>
        </div>
        <div class="col-12">
            <textarea name="message" id="message" rows="3" placeholder="متطلبات خاصة" class="form-control" style="border-color: #2c3e50;"></textarea>
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn w-100 py-3" style="background-color: #2c3e50; color: white;">
                <span>طلب خدمة</span>
                <i class="bi bi-arrow-left ms-2"></i>
            </button>
        </div>
    </div>
</form>

<!-- Success Message Container -->
<div id="successMessage" class="alert mt-3" style="display: none; background-color: #27ae60; color: white;"></div>

<script>
document.getElementById('serviceForm').addEventListener('submit', function(e) {
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
            successMessage.textContent = data.message;
            
            // Clear form fields
            this.reset();
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 5000);
        } else if (data.errors) {
            // Handle validation errors
            alert('الرجاء إصلاح الأخطاء في النموذج.');
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